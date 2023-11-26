<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Patient;
use App\Hospital;
use App\Model\Doctor;
use App\Model\Review;
use App\Model\Setting;
use App\Model\TimeTable;
use App\Model\Appointment;
use Illuminate\Http\Request;
use App\Model\QuickNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

use function GuzzleHttp\Promise\all;

class AppointmentController extends Controller
{
    public function codConfirm(Request $request)
    {
        // return $request;        
        $this->validate($request,[
            'patient_id'=>'required',
            'doctor_id'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]);
        
        $dayOfTheWeek = Carbon::now()->addDays(1)->dayOfWeek; //->addDays(1)
        $today = Carbon::now()->format("Y-m-d"); //->addDays(1)
        $getdate = Carbon::parse($request->date);
        $diff = $getdate->diffInDays($today);
        
        if($diff == 0){
            $timetable = TimeTable::where('day',$dayOfTheWeek)->where('doctor_id',$request->doctor_id);
            $token = $timetable->value('token');
            $timetable->update([
                'token' => $token-1,
            ]);
        }else if($diff > 0){   
            $timetable = TimeTable::where('day',$dayOfTheWeek+$diff)->where('doctor_id',$request->doctor_id);
            $token = $timetable->value('token');
            $timetable->update([
                'token' => $token-1,
            ]);
        }

        $doctor =  Doctor::findOrFail($request->doctor_id);
        $hospital = Hospital::where('id',$doctor->hospital_id)->first();
        $patient = Patient::findOrFail($request->patient_id);
        $appointment = new Appointment();
        $appointment->department_id = $doctor->department_id;
        $appointment->doc_id = $doctor->id;
        $appointment->user_id = auth()->user()->id;
        $appointment->name = $patient->first_name . ' '. $patient->last_name;
        $appointment->phone_no = $patient->phone;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->status = 1;
        $appointment->patient_id = $request->patient_id;
        $appointment->save();

        QuickNotification::create([
            'title'=>'New Appointment Request',
            'detail'=>$appointment->name.' Requested',
            'date_time'=>date('Y-m-d H:i:s'),
            'status'=>0,
            'module'=>'appointment',
            'module_id'=>$appointment->id
        ]);
        Mail::send('email.newappointment', ['appointment' => $appointment,'patient'=>$patient,'doctor'=>$doctor], function ($message) use ($appointment) {
            $message->to(env('MAIL_ADMIN'), $appointment->name)->subject(__("New Appointment request"))->from(env('MAIL_USERNAME'));
        });

        QuickNotification::create([
            'title'=>'New Appointment Request',
            'detail'=>$appointment->name.' Requested',
            'date_time'=>date('Y-m-d H:i:s'),
            'status'=>0,
            'module'=>'appointment',
            'module_id'=>$appointment->id,
            'reader_id'=>$appointment->doc_id,
        ]);

        Mail::send('email.newappointment', ['appointment' => $appointment,'patient'=>$patient,'doctor'=>$doctor], function ($message) use ($doctor,$appointment) {
            $message->to($doctor->email, $appointment->name)->subject(__("New Appointment request"))->from(env('MAIL_USERNAME'));
        });

        Mail::send('email.customerappointment', ['appointment' => $appointment,'patient'=>$patient,'doctor'=>$doctor], function ($message) use ($doctor,$appointment) {
            $message->to(auth()->user()->email, $appointment->name)->subject(__("Appointment request submitted"))->from(env('MAIL_USERNAME'));
        });

        if($appointment->hospital_id){
            $hospital = Hospital::whereId($appointment->hospital_id)->firstOrFail();
            QuickNotification::create([
                'title'=>'New Appointment Request',
                'detail'=>$appointment->name.' Requested',
                'date_time'=>date('Y-m-d H:i:s'),
                'status'=>0,
                'module'=>'appointment',
                'module_id'=>$appointment->id,
                'reader_id'=>$appointment->hospital_id,
            ]);

            Mail::send('email.newappointment', ['appointment' => $appointment,'patient'=>$patient,'doctor'=>$doctor], function ($message) use ($hospital,$appointment) {
                $message->to($hospital->email, $appointment->name)->subject(__("New Appointment request"))->from(env('MAIL_USERNAME'));
            });
        }

        return response()->json([
            'message'=>'Appointment has been confirmed',
            "appointment_id"=>$appointment,
            "doctor" => $doctor,
            "patient" => $patient,
            "hospital" => $hospital,
        ]);
    }

    public function myAppointments(Request $request)
    {
        $appointments = Appointment::where('user_id',auth()->user()->id);

        if($request->date_by=="past"){
            $appointments = $appointments->whereDate('created_at',"<",now());

        }elseif($request->date_by=="upcoming"){
            $appointments = $appointments->whereDate('created_at',">=",now());
        }
        
        $count = $appointments->count();
        $appointments = $appointments->get();
        if($count > 0)
        {
            foreach($appointments as $app)
            {
                $gender = $app->patient->gender;
                $doctor_name = $app->doctors->name;
                $patient_name= $app->patient->first_name." ".$app->patient->last_name;
                $hospital_name= isset($app->hospital->name) ? $app->hospital->name : "N/A";
                $department = $app->department->name;
            }
            
            return response(['status'=>true,'appointment'=>$appointments,'gender'=>$gender,'doctor_name'=>$doctor_name,'patient_name'=>$patient_name,'hospital_name'=>$hospital_name,'department'=>$department]);
        }
        else{
            return response(["Data Not Available"]);
        }
        
    }

    public function doctorAppointment(Request $request)
    {
        if(auth()->user()->usertype!=3)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $doctor = Doctor::where('user_id',auth()->user()->id)->first();
        if(!$doctor)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $appointments = Appointment::with('services','department','patient')->where('doc_id',$doctor->id);

        if($request->status)
            $appointments = $appointments->where('status',$request->status);

        if($request->upcoming == true)
            $appointments = $appointments->where('date','>=',date('Y-m-d'));

        $totalAppointment = Appointment::where('doc_id',$doctor->id)->count();
        $completedAppointment = Appointment::where('doc_id',$doctor->id)->where('status',4)->count();
        $pendingAppointment = Appointment::where('doc_id',$doctor->id)->where('status',1)->count();
        $reviewCount = Review::where('doctor_id',$doctor->id)->count();

        $appointments = $appointments->paginate(50);
        return response(['status'=>true,'data'=>$appointments,'totalAppointment'=>$totalAppointment,'completedAppointment'=>$completedAppointment,'pendingAppointment'=>$pendingAppointment,'reviewCount'=>$reviewCount]);
    }

    public function updateStatus(Request $request)
    {
        if(auth()->user()->usertype!=3)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $doctor = Doctor::where('user_id',auth()->user()->id)->first();
        if(!$doctor)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $appointment = Appointment::whereId($request->id)->where('doc_id',$doctor->id)->first();
        if(!$appointment)
            return response(['status'=>false,'message'=>'Appointment not found']);
        $appointment->status = $request->status;
        $appointment->save();
        return  response(['status'=>true,'data'=>$appointment,'message'=>'Appointment status has been updated']);
    }

    public function doctorUpdate(Request $request)
    {
        if(auth()->user()->usertype!=3)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $doctor = Doctor::where('user_id',auth()->user()->id)->first();
        if(!$doctor)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $doctor->department_id  =   $request->department_id;
        $doctor->name           =   $request->name;
        $doctor->email          =   $request->email;
        if($request->password){
            $user = User::where('id',auth()->user()->id)->first();
            $user->password = Hash::make($request->password);
            $user->save();
        }
        $doctor->phone_no       =   $request->phone_no;
        $doctor->about_us       =   $request->about_us;
        $doctor->service        =   $request->service;
        $doctor->facebook_id    =   $request->facebook;
        $doctor->twitter_id     =   $request->twitter_id;
        $doctor->google_id      =   $request->google_id;
        $doctor->instagram_id   =   $request->instagram_id;
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/doctor';
            $picture = 'doctor_'.mt_rand(100000,999999). '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
            $doctor->image = $picture;
        }
        $doctor->save();
        return response(['status'=>true,'message'=>'Your profile has been updated']);
    }

    public function updateworkinghours(Request $request){
        if(auth()->user()->usertype!=3)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $doctor = Doctor::where('user_id',auth()->user()->id)->first();
        if(!$doctor)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $workid=$request->work_id;
        $day=$request->day;
        $from=$request->from;
        $to=$request->to;
        for($i=0;$i<7;$i++){
              if($workid[$i]==0){
                  $data=new TimeTable();
              }else{
                  $data=TimeTable::find($workid[$i]);
              }
              $data->doctor_id=$doctor->id;
              $data->day=$day[$i];
              $data->from=$from[$i];
              $data->to=$to[$i];
              $data->save();
        }
        return response(['status'=>true,'message'=>$data,'message'=>'Time table updated successfully']);
    }

    public function doctorReviews()
    {
        if(auth()->user()->usertype!=3)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $doctor = Doctor::where('user_id',auth()->user()->id)->first();
        if(!$doctor)
            return response(['status'=>false,'message'=>'Please login with doctors account']);
        $reviews = Review::where('doctor_id',$doctor->id)->get();
        return response(['status'=>true,'data'=>$reviews]);
    }
}