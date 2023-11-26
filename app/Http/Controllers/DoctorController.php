<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\City;
use App\User;
use validate;
use App\Hospital;
use App\Model\Token;
use App\Model\Doctor;
use App\Model\Review;
use App\Model\Setting;
use App\Model\TimeTable;
use App\Model\Department;
use App\Model\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:doctor-view', ['only' => ['index', 'showreview']]);
        $this->middleware('permission:doctor-create', ['only' => ['savedoctor']]);
        $this->middleware('permission:doctor-edit', ['only' => ['updatedoctorprofile']]);
        $this->middleware('permission:doctor-delete', ['only' => ['deletedoctor', 'deletereview']]);
    }

    public function index(Request $request)
    {
         $cities = City::all();
        $hospitals = Hospital::all();
        $authUser = User::where('id', auth()->user()->id)->first();
        if ($authUser->hasRole('Admin')) {
            $data = Doctor::with('city')->when($request->city_id,function($q)use($request){
                $q->where('city_id',$request->city_id);
            })->with('department')->get();
        } else {
            if (auth()->user()->usertype == 3) {
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->first();
                return redirect()->intended('admin/savedoctor/' . $doctor->id . '/1');
            }
            if (auth()->user()->usertype == 4) {
                $authHospital = Hospital::where('user_id', auth()->user()->id)->first();
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->first();
                $data = Doctor::with('department','city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('hospital_id', $authHospital->id)->get();
            }
        }
        return view("admin.doctor.default")->with(["data"=> $data ,'cities'=> $cities ,"hospitals"=>$hospitals ]);
        // return view("admin.doctor.default")->with(["data"=> $data ,'cities'=> $cities]);
    }
    
    public function approvedDoctor(Request $request)
    {
        $cities = City::all();
        $hospitals = Hospital::all();
        $authUser = User::where('id', auth()->user()->id)->first();
        if ($authUser->hasRole('Admin')) {
            
            if($request->city_id)
            {
                // $data = Doctor::with('city')->when($request->city_id,function($q)use($request){
                // $q->where('city_id',$request->city_id);
                // })->with('department')->where('status','Approved')->get();
                
                $data = Doctor::with('city')->where(function($q)use($request){
                $q->where('city_id',$request->city_id);
                })->with('department')->where('status','Approved')->get();
                
            }
            elseif($request->associatedWithhospital){
                $data = Doctor::with('city')->where(function($q)use($request){
                $q->where('hospital_id',$request->associatedWithhospital);
                })->with('department')->where('status','Approved')->get();
            }
            else{
                $data =  Doctor::with('city')->with('department')->where('status','Approved')->get();
            }
            
        } else {
            if (auth()->user()->usertype == 3) {
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->where('status','Approved')->first();
                return redirect()->intended('admin/savedoctor/' . $doctor->id . '/1');
            }
            if (auth()->user()->usertype == 4) {
                $authHospital = Hospital::where('user_id', auth()->user()->id)->first();
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->where('status','Approved')->first();
                $data = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->with('department')->where('hospital_id', $authHospital->id)->get();
            }
        }
    
         return view("admin.doctor.default")->with(["data"=> $data ,'cities'=> $cities ,"hospitals"=>$hospitals ]);
        // return view("admin.doctor.default")->with("data", $data)->with('cities',$cities);
    }
    
    public function pendingDoctor(Request $request)
    {
        $cities = City::all();
         $hospitals = Hospital::all();
        $authUser = User::where('id', auth()->user()->id)->first();
        if ($authUser->hasRole('Admin')) {
            $data = Doctor::with('city')->when($request->city_id,function($q)use($request){
                $q->where('city_id',$request->city_id);
            })->with('department')->where('status','Pending')->get();
        } else {
            if (auth()->user()->usertype == 3) {
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->where('status','Pending')->first();
                return redirect()->intended('admin/savedoctor/' . $doctor->id . '/1');
            }
            if (auth()->user()->usertype == 4) {
                $authHospital = Hospital::where('user_id', auth()->user()->id)->first();
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->where('status','Pending')->first();
                $data = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->with('department')->where('hospital_id', $authHospital->id)->get();
            }
        }
        return view("admin.doctor.default")->with(["data"=> $data ,'cities'=> $cities ,"hospitals"=>$hospitals ]);
    }
    
    public function disabledDoctor(Request $request)
    {
        $cities = City::all();
         $hospitals = Hospital::all();
        $authUser = User::where('id', auth()->user()->id)->first();
        if ($authUser->hasRole('Admin')) {
            $data = Doctor::with('city')->when($request->city_id,function($q)use($request){
                $q->where('city_id',$request->city_id);
            })->with('department')->where('status','Disabled')->get();
        } else {
            if (auth()->user()->usertype == 3) {
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->where('status','Disabled')->first();
                return redirect()->intended('admin/savedoctor/' . $doctor->id . '/1');
            }
            if (auth()->user()->usertype == 4) {
                $authHospital = Hospital::where('user_id', auth()->user()->id)->first();
                $doctor = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->where('user_id', auth()->user()->id)->where('status','Disabled')->first();
                $data = Doctor::with('city')->when($request->city_id,function($q)use($request){
                    $q->where('city_id',$request->city_id);
                })->with('department')->where('hospital_id', $authHospital->id)->get();
            }
        }
        return view("admin.doctor.default")->with(["data"=> $data ,'cities'=> $cities ,"hospitals"=>$hospitals ]);
    }

    public function savedoctor($id, $tab_id)
    {
        $department = Department::all();
        $data = Doctor::find($id);
        $workinghour = TimeTable::where("doctor_id", $id)->get();
        $cities = City::all();
    
        return view("admin.doctor.savedoctor")->with('cities', $cities)->with("doctor_id", $id)->with("department", $department)->with("data", $data)->with("tab_id", $tab_id)->with("workinghour", $workinghour);
    }

    public function updatedoctorprofile(Request $request)
    {
        // megha
         //return $request;
        $setting = Setting::find(1);
        if ($request->get("id") != "0") {
            $request->validate([
                'department' => 'required',
                'name' => 'required',
               
            ]);
        } else {
            $request->validate([
                'department' => 'required',
                'name' => 'required',
               
            ]);
        }

        $img_url = "";
        if ($request->get("real_image") != "") {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension() ?: 'png';
                $folderName = '/upload/doctor';
                $picture = 'doctor_' . mt_rand(100000, 999999) . '.' . $extension;
                $destinationPath = public_path() . $folderName;
                $request->file('image')->move($destinationPath, $picture);
                $img_url = $picture;
                $image_path = public_path() . "/upload/doctor/" . $request->get("real_image");
                if (file_exists($image_path)) {
                    try {
                        unlink($image_path);
                    } catch (Exception $e) {
                    }
                }
            } else {
                $img_url = $request->get("real_image");
            }
        } else {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension() ?: 'png';
                $folderName = '/upload/doctor';
                $picture = 'doctor_' . mt_rand(100000, 999999) . '.' . $extension;
                $destinationPath = public_path() . $folderName;
                $request->file('image')->move($destinationPath, $picture);
                $img_url = $picture;
            }
        }
        if ($request->get("id") != "0") {

            $store = Doctor::find($request->get("id"));
            $msg = __('messages.Doctor Update Successfully');
            $checkemail = User::where("email", $request->get("email"))->where("id", '!=', $store->user_id)->first();
            if ($checkemail) {
                // Session::flash('message', __('messages.Email Id Already Existe'));
                // Session::flash('alert-class', 'alert-danger');
                // return redirect("admin/save-service/" . $store->id . '/1');
            }
            $usd = User::find($store->user_id);
            $usd->name = $request->get("name");
            $usd->email = $request->get("email")?? null;
            $usd->password = Hash::make($request->password)?? null;
            $usd->phone_no = $request->get("phone_no")?? null;
            $usd->usertype = '3';
            $usd->save();
        } else {
            $store = new Doctor();
            $usd = new User();
            $usd->name = $request->get("name");
            $usd->email = $request->get("email")?? null;
            $usd->password = Hash::make($request->get("password")) ?? null;
            $usd->phone_no = $request->get("phone_no") ?? null;
            $usd->usertype = '3';
            $usd->save();
            $store->user_id = $usd->id;
            $msg = __('messages.Doctor Add Successfully');
        }
        $usd->assignRole('doctor');
        $store->department_id = $request->get("department");
        $store->name = $request->get("name");
        $store->email = $request->get("email")?? null;
        $store->password = Hash::make($request->get("password"))?? null;
        $store->phone_no = $request->get("phone_no")?? null;
        $store->about_us = $request->get("aboutus");
        $store->service = $request->get("service");
        $store->daily_fee = $request->get("daily_fee");
        $store->weekly_fee = $request->get("weekly_fee");
        $store->monthly_fee = $request->get("monthly_fee");
        $store->power = $request->get("power");
        $store->max_speed = $request->get("max_speed");
        $store->acceleration = $request->get("acceleration");
        $store->door = $request->get("door");
        $store->seat = $request->get("seat");
        $store->luggage = $request->get("luggage");
        $store->transmission = $request->get("transmission");
        $store->ac = $request->get("ac");
        $store->car_years = $request->get("car_years");
        $store->facebook_id = $request->get("facebook")?? null;
        $store->twitter_id = $request->get("twitter_id")?? null;
        $store->google_id = $request->get("google_id")?? null;
        $store->instagram_id = $request->get("instagram_id")?? null;
        $store->image = $img_url;
        $store->appointment_fee = $request->appointment_fee;
        $store->experience = $request->experience;
        $store->city_id = $request->city_id;
        if ($request->status)
            $store->status = $request->status;
        $hospital = Hospital::where('user_id', auth()->user()->id)->first();
        if ($hospital)
            $store->hospital_id = $hospital->id;
        $store->save();
        return back();
        // return redirect("admin/save-service/" . $store->id . '/2');
    }
    public function statusToggle(Request $request, $id){
            $timeTableData = TimeTable::find($id);
            if($timeTableData->status == '0'){
                $timeTableData->status = '1';
            } else {
                $timeTableData->status = '0'; 
            }
            $timeTableData->save();
             return ($timeTableData);
          
    }

    public function updateworkinghours(Request $request)
    {
        if ($request->get("id") == "0") {
            Session::flash('message', __('messages.Please Fill Up Basic Information First Then Process Ahead'));
            Session::flash('alert-class', 'alert-danger');
            // return redirect('admin/savedoctor/0/2');
        }
        $workid = $request->get("work_id");
        $day = $request->get("day");
        $from = $request->get("from");
        $to = $request->get("to");
        $token = $request->get("token");
        $status = $request->get;
        for ($i = 0; $i < 7; $i++) {
            // if ($workid[$i] == 0) {
            if(!isset($workid[$i])){
                $data = new TimeTable();
               
            } else {
                $data = TimeTable::find($workid[$i]);
            }
            $status=$data->status=='1'? "true":"false";
            $data->doctor_id = $request->get("id");
            $data->day = $day[$i];
            $data->from = $status? $from[$i]:NULL;
            $data->to = $status? $to[$i]:NULL;
            $data->token = isset($token[$i])? $token[$i]:"0";
            $data->save();
        }
        Session::flash('message', __('Service Save Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function deletedoctor($id)
    {
        $data = Doctor::find($id);
        $user_id = $data->user_id;
     
        try{ 
            DB::beginTransaction();
            
            if ($data) {
                $deletereview = Review::where("doctor_id", $id)->get();
                if (count($deletereview) > 0) {
                    foreach ($deletereview as $d) {
                        $d->delete(); //delete doctor review
                    }
                }
                $gettimetable = TimeTable::where("doctor_id", $id)->get();
                if (count($gettimetable) > 0) {
                    foreach ($gettimetable as $d) {
                        $d->delete(); //delete doctor working hour
                    }
                }
                $removetoken = Token::where("doctor_id", $id)->get();
                if (count($removetoken) > 0) {
                    foreach ($removetoken as $d) {
                        $d->delete(); //delete doctor token
                    }
                }
                $removetoken = Appointment::where("doc_id", $id)->get();
                if (count($removetoken) > 0) {
                    foreach ($removetoken as $d) {
                        $d->delete(); //delete doctor token
                    }
                }
                
                $image_path = public_path() . "/upload/doctor/" . $data->image;
                if (file_exists($image_path) && $data->image != "") {
                    try {
                        unlink($image_path);
                    } catch (Exception $e) {
                    }
                }
                
                
                $deleteUser = User::where("id",$user_id)->delete();
                
                $data->delete();
            }
            
            DB::commit();
                
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
     
     
        Session::flash('message', __('messages.Doctor Delete Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect("admin/doctor");
    }

    public function showreview()
    {
        $data = Review::with("doctors", "users")->get();
        return view("admin.doctor.review")->with("data", $data);
    }

    public function deletereview($id)
    {
        $data = Review::find($id);
        $data->delete();
        Session::flash('message', __('messages.Review Delete Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect("admin/review");
    }
}