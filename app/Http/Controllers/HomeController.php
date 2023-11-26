<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Session;
use App\User;
use App\Seller;
use DateTime;
use App\Product;
use App\Hospital;
use DateTimeZone;
use App\Model\Token;
use App\Model\Doctor;
use App\Model\Review;
use App\Model\Channel;
use App\Model\Service;
use App\Model\Setting;
use Twilio\Rest\Client;
use App\Model\ContactUs;
use App\Model\Department;
use App\Model\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function showlogin(){
        $setting=Setting::find(1);
        Session::put("is_rtl",$setting->is_rtl);
        Session::put("is_demo",$setting->is_demo);
        return view("admin.login")->with("type",'2');
    }   

    public function showchat(){
        return view("admin.chat");
    }
	
	public function settimezone($timezone){
		Session::put("timezone",$timezone);
		return "done";
	}

  public function getcurrenttime(){
      $timezone_name = timezone_name_from_abbr("", 330*60, false);
      $date = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
      $date->setTimeZone(new DateTimeZone('UTC')); 
      $data=array("date"=>$date->format('Y-m-d H:i:s.u'),"timezone"=>$timezone_name);
      return json_encode($data);
  }

    public function doctorlogin(){
       return view("admin.login")->with("type",'3');
    }

    public function postlogin(Request $request){
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(auth()->attempt($credentials)){
            $user = User::whereId(auth()->user()->id)->first();
            if($user->hasRole('Customer')){
                return redirect()->intended('/')->with('message','Logged In successfully');
            }

            if($user->hasRole('Hospital')){
                $hospital = Hospital::where('user_id',$user->id)->where('status','Approved')->first();
                if(!$hospital){
                    auth()->logout();
                    return redirect()->intended('/')->with('message','Please await for Account Approval');
                }
            }

            if($user->hasRole('Doctor')){
                $doctor = Doctor::where('user_id',$user->id)->where('status','Approved')->first();
                if(!$doctor){
                    auth()->logout();
                    return redirect()->intended('/')->with('message','Please await for Account Approval');
                }
            }

            if($request->product_id){
                $product = Product::where('id',$request->product_id)->first();
                return redirect()->intended('product_details/'.$product->slug);
            }
            return redirect('admin/dashboard');
        }
        return redirect()->back()->with('message','Invalid login details');
    }

    public function contactReq(){
        $data=ContactUs::all();
        return view("admin.contactReq.index",compact('data'));
    }

    public function deleteContactReq($id){
        ContactUs::find($id)->delete();
      return redirect()->route('user.contactReq')->with('message','User Trying To Contact Deleted Successfully');
    }
    public function showdashboard(){
        $totaldepartment=count(Department::all());
        $totalservice=count(Service::all());
        $totaldoctor=count(Doctor::all());
        if(auth()->user()->usertype == 4){
            $hospital = Hospital::where('user_id',auth()->user()->id)->first();
            $leastappointment=Appointment::with('doctors','services','department')->orderBy('id','DESC')->where('hospital_id',$hospital->id)->take(10)->get();
        }elseif(auth()->user()->usertype==3){
            $doctor = Doctor::where('user_id',auth()->user()->id)->first();
            $leastappointment=Appointment::with('doctors','services','department')->orderBy('id','DESC')->where('hospital_id',$doctor->id)->take(10)->get();
        }else{
            $leastappointment = [];
        }
        $leastreview=Review::with("doctors","users")->orderBy('id','DESC')->take(10)->get();
    // 	return view("admin.dashboard")->with("totaldepartment",$totaldepartment)->with("totalservice",$totalservice)->with("totaldoctor",$totaldoctor)->with("leastappointment",$leastappointment)->with("leastreview",$leastreview);
    return view("admin.dashboard")->with(["totaldepartment"=>$totaldepartment ,"totalservice" => $totalservice ,"totaldoctor"=> $totaldoctor , "leastappointment"=>$leastappointment , "leastreview"=>$leastreview]);
    }

    public function logout(){
        $user=User::find(Auth::id());
        $user->last_seen=date('Y-m-d h:i:s');
        $user->status="offline";
        $user->save();
    	Auth::logout();
    	return redirect("admin");
    }


     public function editprofile(){
         
        // 3 -> doctor.
        // 5 -> seller,
        // 2 ->admin
        // 4 ->hospital
        // 1->customer
        $email = Auth::user()->email;
        $usertype = Auth::user()->usertype;
        if($usertype == "5")
        {
            $img_path = Seller::where('email', $email)->get()->first();//image_path
        }
        elseif($usertype == "3")
        {
            $img_path = Doctor::where('email', $email)->get()->first();//image
        }
        elseif($usertype == "4")
        {
            $img_path = Hospital::where('email', $email)->get()->first();//logo
        }
        elseif($usertype == "2")
        {
            $img_path = User::where('email', $email)->get()->first();//profile_pic
        }
        else{
            //nothing
        }
       
        return view('admin.updateprofile')->with(["img_path" => $img_path ,"usertype"=>$usertype]);
        // return view('admin.updateprofile');
    }

    public function updateprofile(Request $request){
        $getuser=User::where("email",$request->get("email"))->where("id",'!=',Auth::id())->get();
        if(!$getuser){
             Session::flash("message1",__('messages.Email Id Already Existe'));
             return redirect()->back();
        }
        if ($request->hasFile('image')) 
              {
                 $file = $request->file('image');
                 $filename = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension() ?: 'png';
                 $folderName = '/upload/profile';
                 $picture = 'profile_'.mt_rand(100000,999999). '.' . $extension;
                 $destinationPath = public_path() . $folderName;
                 $request->file('image')->move($destinationPath, $picture);
                 $img_url = $picture;
             }else{
                 $img_url = Auth::user()->profile_pic;
             }

             $user=Auth::user();
             $user->name=$request->get("name");
             $user->email=$request->get("email");
             $user->profile_pic=$img_url;
             $user->save();
             
             if(Auth::user()->usertype==2){
                Session::put("profile_pic",asset("public/upload/profile").'/'.$user->profile);
             }
             Session::flash("message",__('messages.Profile Update Successfully'));
             return redirect()->back();
    }

      public function changepassword(Request $request){
            return view("admin.changepassword");
      } 

     public  function check_password_same($pwd){    
             if ($pwd==Auth::user()->password)
             {
                $data=1;
             }
            else{
                $data=0; 
             }
           return json_encode($data);
    }
       
       
       public function updatepassword(Request $request)
       { 
          $request->validate([
              "cpwd" => "required",
              "npwd" => "required|min:8",
              "rpwd" => "required|same:npwd"
              ]);
            $doctor = Doctor::where("email",Auth::user()->email)->get()->first() ;
            $doctor->update([
                "password"=>Hash::make($request->npwd)
            ]);
           $user = Auth::user();
           $currentPassword = $request->cpwd;
           if (Hash::check($currentPassword, $user->password)) {
                $user->password=Hash::make($request->get('npwd'));
                $user->save();
                Session::flash("message",__('messages.Password Change Successfully'));
                return redirect()->back();
            } else {
                Session::flash("err_message",__('messages.Password Didnot Match'));
                return redirect()->back();
            }
       }

       public function showcontactus(){
             $data=ContactUs::all();
             return view('admin.contactus')->with("data",$data);
       }
       
       public function showpatient(){
           $data=User::where("usertype",'1')->get();
           return view("admin.patient")->with("data",$data);
       }
       
        public function deletePatient($id)
        {
            $user = User::findorfail($id);
            $user->delete();
            return back()->with(["success","message"=>"Customer deleted successfully"]);
       }
       
       public function privacy(){
           return view("privacy_policy");
       }
}
