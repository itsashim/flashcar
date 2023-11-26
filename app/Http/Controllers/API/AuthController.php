<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Model\Setting;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (auth()->attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            $user->api_token = $user->createToken('myToken')->plainTextToken;
            $user->save();
            return response(['status' => true, 'data' => $user]);
        }
        return response(['status' => false, 'message' => 'Invalid email or password']);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_no = $request->phone;
        $user->usertype = 1;
        $user->login_type = 1;
        $user->save();
        $user->assignRole('Customer');
        Auth::login($user, true);
        return response(['status' => true, 'message' => 'User Registered Successfully']);
    }

    public function authData()
    {
        $authUser = User::whereId(auth()->user()->id)->first();
        return response(['status'=>true,'data'=>$authUser]);
    }

    public function editprofile(Request $request)
    {
        $response = array("status" => 0, "msg" => "Validation error");
        $rules = [
            'name' => 'required',
        ];
        $messages = array(
            'name.required' => "name is required",
        );

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $message = '';
            $messages_l = json_decode(json_encode($validator->messages()), true);
            foreach ($messages_l as $msg) {
                $message .= $msg[0] . ", ";
            }
            $response['msg'] = $message;
        } else {
            $img_url = "";
            $user = User::whereId(auth()->user()->id)->first();
            if ($user) {
                $img_url = $user->profile_pic;
                $real_img = $user->profile_pic;
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension() ?: 'png';
                    $folderName = '/upload/profile';
                    $picture = 'profile_' . mt_rand(100000, 999999) . '.' . $extension;
                    $destinationPath = public_path() . $folderName;
                    $request->file('image')->move($destinationPath, $picture);
                    $img_url = $picture;
                    $image_path = public_path() . "/upload/profile/" . $real_img;
                    if (file_exists($image_path)) {
                        try {
                            unlink($image_path);
                        } catch (Exception $e) {
                        }
                    }
                }
                $user->name = $request->get("name");
                $user->phone_no = $request->get("phone");
                $user->profile_pic = $img_url;
                $user->password = $request->get("password");
                $user->save();
                if ($user->user_sid == "") {
                    try {
                        $setting = Setting::find(1);
                        $sid    = $setting->TWILIO_ACCOUNT_SID;
                        $token  = $setting->TWILIO_AUTH_TOKEN;
                        $twilio = new Client($sid, $token);
                        $userdata = $twilio->chat->v2->services($setting->TWILIO_CHAT_SERVICE_SID)
                            ->users
                            ->create($user->email);
                        $user->user_sid = $userdata->sid;
                        $user->save();
                    } catch (Exception $e) {
                    }
                }
                if ($user->user_sid) {
                    if ($img_url != "") {
                        $image = "profile/" . $img_url;
                    } else {
                        $image = "profile/profile.png";
                    }
                    $setting = Setting::find(1);
                    $sid    = $setting->TWILIO_ACCOUNT_SID;
                    $token  = $setting->TWILIO_AUTH_TOKEN;
                    try {
                        $twilio = new Client($sid, $token);
                        $array = array("id" => $user->id, "name" => $request->get("name"), "profile" => $image);
                        $checkdata = $twilio->chat->v2->services($setting->TWILIO_CHAT_SERVICE_SID)
                            ->users($user->user_sid)
                            ->update(
                                [
                                    "attributes" => json_encode($array)
                                ]
                            );
                    } catch (\Exception $e) {
                    }
                }
                $user->profile_pic = asset('public/upload/profile') . '/' . $user->profile_pic;
                $user->new_password = $request->get("password");
                $response = array("status" => 1, "msg" => "Profile Update Successfully", "data" => $user);
            } else {
                $response = array("status" => 0, "msg" => "Something wrong");
            }
        }
        return Response::json($response);
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request,[
            'name'=>'sometimes|max:255',  
            'city'=>'sometimes|max:255',    
            'address'=>'sometimes|max:255',    
            'zip_code'=>'sometimes|max:255',    
            'phone_no'=>'sometimes|max:255',
            'password'=>'sometimes|max:255',
            'c_password'=>'sometimes|same:password|max:255',
            'profile_pic' => 'sometimes|mimes:jpg,png,jpeg,bmp|max:5000'
        ]);

        $authUser = User::whereId(auth()->user()->id)->first();
        $authUser->name     = $request->name??$authUser->name;
        $authUser->city     = $request->city??$authUser->city;
        $authUser->address  = $request->address??$authUser->address;
        $authUser->zip_code = $request->zip_code??$authUser->zip_code;
        $authUser->phone_no = $request->phone_no??$authUser->phone_no;
        if ($request->hasFile('profile_pic')){
            $file = $request->file('profile_pic');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/profile';
            $picture = 'profile_'.mt_rand(100000,999999). '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('profile_pic')->move($destinationPath, $picture);
            $authUser->profile_pic=$picture;
        }
        if($request->password)
            $authUser->password = Hash::make($request->password);
        $authUser->save();
        return response(['status'=>true,'message'=>'Profile updated successfully','data'=>$authUser]);
    }
}
