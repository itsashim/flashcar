<?php

namespace App\Http\Controllers\API;

use App\City;
use App\User;
use App\Order;
use App\Patient;
use App\Model\Product;
use App\Category;
use App\Hospital;
use Carbon\Carbon;
use App\Model\Doctor;
use App\Model\Blog;
use App\Prescription;
use App\Model\TimeTable;
use App\Model\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Setting;
use App\Model\Appointment;

class CommonController extends Controller
{
    //for featured services
    public function feturedService(){
        $featuredServices=Doctor::with('department:id,name')->where('featured','true')->get(['id','name','department_id','image']);
         return response(['status'=>true,'featuredServices'=>$featuredServices]);
    }
    //images
    public function sliderImages(){
        $image = asset('public/front/frontPageImg1.jpeg') ;
       return response(['status'=>true,'image'=>$image]);
    }
    //service details
    public function serviceDetail(){
        $serviceDetails=Doctor::with('department:id,name')->where('featured','true')->get(['id','name','department_id','about_us']);
         return response(['status'=>true,'serviceDetails'=>$serviceDetails]);
    }
    
    public function blog(){
        $blogs=Blog::get(['id','title','description','image']);
         return response(['status'=>true,'blogs'=>$blogs]);
    }
    public function cities(Request $request)
    {
        $cities = City::orderBy('name','ASC')->paginate(20);
        return response(['status'=>true,'data'=>$cities]);
    }

    public function settings()
    {
        $setting = Setting::first();
        return response($setting);
    }
    
    public function hospitals(Request $request)
    {
        $hospitals = Hospital::with('departments','city')->withCount('departments')->orderBy('name','ASC');
        if($request->city_id)
            $hospitals = $hospitals->where('city_id',$request->city_id);
        $hospitals = $hospitals->paginate(20);
        foreach($hospitals as $hospital){
            foreach($hospital->departments as $department){
                $department->doctors_count = Doctor::where('department_id',$department->id)->where('hospital_id',$hospital->id)->count();
            }
        }
        return response(['status'=>true,'data'=>$hospitals]);
    }
    
    public function departments(Request $request)
    {
        $departments = Department::orderBy('name','ASC')->paginate(20);
        foreach($departments as $department){
            $department->doctors_count = Doctor::where('department_id',$department->id)->count();
        }
        return response(['status'=>true,'data'=>$departments]);
    }
    
    public function doctors(Request $request)
    {
        $doctors = Doctor::orderBy('name','ASC');
        
        if($request->hospital_id)
            $doctors = $doctors->where('hospital_id',$request->hospital_id);
        if($request->department_id)
            $doctors = $doctors->where('department_id',$request->department_id);
        if($request->individual == 'yes'){
            $doctors = $doctors->where('hospital_id',null);
        }

        if($request->search){
            $search = $request->search;
            $doctors = $doctors->where('name','LIKE',"%{$search}%");
        }

        $doctors = $doctors->paginate(20);
        $dayOfWeek = Carbon::now()->addDays(1)->dayOfWeek; //Carbon::now()->dayOfWeek+1
        $tomorrowDay = $dayOfWeek + 1;
        if($tomorrowDay > 7){
            $tomorrowDay = 1;
        }
        $dayAfterTomorrowDay = $dayOfWeek + 2;
        if($dayAfterTomorrowDay > 7){
            $dayAfterTomorrowDay = 1;
        }
        // return Carbon::now()->format('Y-m-d');
        
        foreach($doctors as $doctor){
            $appointments=[];
            $tomorrowappointments = [];
            $todayappointment = Appointment::where('doc_id',$doctor->id)->where('date',Carbon::now()->format('Y-m-d'))->get();//date filter \
             foreach($todayappointment as $appointment){
                $times = $appointment->time;
                array_push($appointments,$times);
             }
            $todayTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek)->first();
            if($todayTimeTable){
                $tommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$tomorrowDay)->first();
                $dayAfterTommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayAfterTomorrowDay)->first();
            //     if($dayOfWeek==6){
            //         $tommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+1)->first();
            //         $dayAfterTommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+2)->first();
                    
            //     }elseif($dayOfWeek==7){
            //         $dayAfterTommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek)->first();
            //         $tommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+1)->first();
                    
            //   }else{
            //         $tommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+1)->first();
            //         $dayAfterTommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+2)->first();
            //     }
    
                $hospital = Hospital::where('id',$doctor->hospital_id)->first();
                if($hospital)
                    $fee = $hospital->appointment_fee;
                else
                    $fee = $doctor->appointment_fee;
    
                $doctor->appointment_fee = $fee;
                
                
    
                $todayTimes = [];
               
                $todayToken = isset($todayTimeTable->token) ? $todayTimeTable->token:0;
                $tokenTime = 0;
                
                for ($i = 0; $i < $todayToken; $i++) {
                    if ($i == 0) {
                        $appointmentTime = $todayTimeTable->from;
                        $isBooked = false;
                        
                        foreach ($appointments as $appointment) {
                            if ($appointment == $appointmentTime) {
                                $isBooked = true;
                                break;
                            }
                        }
                        
                        if (!$isBooked) {
                            $todayTimes[] = $appointmentTime;
                        }
                    } else {
                        if ($todayTimeTable->to > Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')) {
                            $appointmentTime = Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i');
                            $isBooked = false;
                            
                            foreach ($appointments as $appointment) {
                                if ($appointment == $appointmentTime) {
                                    $isBooked = true;
                                    break;
                                }
                            }
                            
                            if (!$isBooked) {
                                $todayTimes[] = $appointmentTime;
                            }
                            
                            $tokenTime = $tokenTime + 60;
                        }
                    }
                }
                
                $todayFinalTimes = [
                    'date'=>Carbon::now()->format('Y-m-d'),
                    'from'=>$todayTimeTable->from,
                    'to'=>$todayTimeTable->to,
                    'availableTimes'=> $todayTimes,
                    'appointment' => $appointments,
                    "token" => $todayTimeTable->token
                ];
    
    
                
                $tomorrowappointment = Appointment::where('doc_id',$doctor->id)->where('date',Carbon::now()->addDays(1)->format('Y-m-d '))->get();//date filter \
                foreach($tomorrowappointment as $appointment){
                    $times = $appointment->time;
                    array_push($tomorrowappointments,$times);
                }
                
                $tommorrowToken = isset($tommorowTimeTable->token) ? $tommorowTimeTable->token : 0;
                $tokenTime = 0;
                $tommorrowTimes = [];
    
                
                for ($i = 0; $i < $tommorrowToken; $i++) {
                    if ($i == 0) {
                        $appointmentTime = $tommorowTimeTable->from;
                        $isBooked = false;
                        
                        foreach ($tomorrowappointments as $appointment) {
                            if ($appointment == $appointmentTime) {
                                $isBooked = true;
                                break;
                            }
                        }
                        
                        if (!$isBooked) {
                            $tommorrowTimes[] = $appointmentTime;
                        }
                    } else {
                        if ($tommorowTimeTable->to > Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')) {
                            $appointmentTime = Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i');
                            $isBooked = false;
                            
                            foreach ($tomorrowappointments as $appointment) {
                                if ($appointment == $appointmentTime) {
                                    $isBooked = true;
                                    break;
                                }
                            } 
                            if (!$isBooked) {
                                $tommorrowTimes[] = $appointmentTime;
                            }
                            $tokenTime = $tokenTime + 60;
                        }
                    }
                }
            
                $tommorowFinalTimes = [
                    'date'=> Carbon::now()->addDays(1)->format('Y-m-d'),
                    'from'=> isset($tommorowTimeTable->from) ? $tommorowTimeTable->from :"N/A" ,
                    'to' => isset($tommorowTimeTable->to) ? $tommorowTimeTable->to : "N/A",
                    'availableTimes'=>$tommorrowTimes,
                    'appointments' => $tomorrowappointments,
                    "token" => $tommorowTimeTable->token
                ];
    
    
                $dayatomorrowappointments= [];
                $dataftertomorrowappointment = Appointment::where('doc_id',$doctor->id)->where('date',Carbon::now()->addDays(2)->format('Y-m-d '))->get();//date filter \
                foreach($dataftertomorrowappointment as $appointment){
                    $times = $appointment->time;
                    array_push($dayatomorrowappointments,$times);
                }
                
                $dayAfterTommorrowToken = isset($dayAfterTommorowTimeTable->token) ? $dayAfterTommorowTimeTable->token : 0 ;
                $tokenTime = 0;
                $thirdTimes = [];
                // for($i=0;$i<$dayAfterTommorrowToken; $i++):
                //     if($i==0):
                //         $appointmentTime = $dayAfterTommorowTimeTable->from;
                //         array_push($thirdTimes,$appointmentTime);
                //     else:
                //         if($tommorowTimeTable->to >=  Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+60)->format('H:i')){
                //             $appointmentTime = Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime+60)->format('H:i'); 
                //             array_push($thirdTimes,$appointmentTime);
                //             $tokenTime=$tokenTime+60;
                //         }
                //     endif;
                //     // array_push($thirdTimes,$appointmentTime);
                // endfor;
                
                for ($i = 0; $i < $dayAfterTommorrowToken; $i++) {
                    if ($i == 0) {
                        $appointmentTime = $dayAfterTommorowTimeTable->from;
                        $isBooked = false;
                        
                        foreach ($dayatomorrowappointments as $appointment) {
                            if ($appointment == $appointmentTime) {
                                $isBooked = true;
                                break;
                            }
                        }
                        
                        if (!$isBooked) {
                            $thirdTimes[] = $appointmentTime;
                        }
                    } else {
                        if ($dayAfterTommorowTimeTable->to > Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')) {
                            $appointmentTime = Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i');
                            $isBooked = false;
                            
                            foreach ($dayatomorrowappointments as $appointment) {
                                if ($appointment == $appointmentTime) {
                                    $isBooked = true;
                                    break;
                                }
                            } 
                            if (!$isBooked) {
                                $thirdTimes[] = $appointmentTime;
                            }
                            $tokenTime = $tokenTime + 60;
                        }
                    }
                }
    
                $thirdFinalTimes = [
                    'date'=> Carbon::now()->addDays(2)->format('Y-m-d'),
                    'from'=> isset($dayAfterTommorowTimeTable->from) ? $dayAfterTommorowTimeTable->from : "N/A",
                    'to' => isset($dayAfterTommorowTimeTable->to)? $dayAfterTommorowTimeTable->to : "N/A" ,
                    'availableTimes'=>$thirdTimes,
                    'appointments' => $dayatomorrowappointments,
                    "token" => $dayAfterTommorowTimeTable->token
                ];
    
                $doctor->todayAvailableTimes = $todayFinalTimes;
                $doctor->tomorrowAvailableTimes = $tommorowFinalTimes;
                $doctor->dayAfterTomorrowAvailableTimes = $thirdFinalTimes;
                if($doctor->hospital_id)
                    $doctor->hospital = Hospital::where('id',$doctor->hospital_id)->first();
                if($doctor->department_id)
                    $doctor->department = Department::where('id',$doctor->department_id)->first();

            }
            $tommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+1)->first();
            $dayAfterTommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+2)->first();

            
        }
        return response(['status'=>true,'data'=>$doctors]);
    }

    public function doctorDetail($id,Request $request)
    {
        $doctor = Doctor::findOrFail($id);
        $dayOfWeek = Carbon::now()->dayOfWeek+1; 
        $todayTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek)->first();
        $tommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+1)->first();
        $dayAfterTommorowTimeTable = TimeTable::where('doctor_id',$doctor->id)->where('day',$dayOfWeek+2)->first();

        $hospital = Hospital::where('id',$doctor->hospital_id)->first();
        if($hospital)
            $fee = $hospital->appointment_fee;
        else
            $fee = $doctor->appointment_fee;

        $doctor->appointment_fee = $fee;

        $todayTimes = [];
        $todayToken = isset($todayTimeTable->token) ? $todayTimeTable->token : 0;
        $tokenTime = 0;
        for($i=0;$i<$todayToken; $i++){
            if($i==0){
                $appointmentTime = $todayTimeTable->from;
            }else{
                $appointmentTime = Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime+60)->format('H:i');
                $tokenTime=$tokenTime+60;
            }
            array_push($todayTimes,$appointmentTime);
        }

        $todayFinalTimes = [
            'date'=>Carbon::now()->format('Y-m-d'),
            'from'=>isset($todayTimeTable->from) ? $todayTimeTable->from : "N/A" ,
            'to'=>isset($todayTimeTable->to) ? $todayTimeTable->to : "N/A",
            'availableTimes'=> $todayTimes,
        ];

        $tommorrowToken = isset($tommorowTimeTable->token) ? $tommorowTimeTable->token : 0 ;
        $tokenTime = 0;
        $tommorrowTimes = [];

        for($i=0;$i<$tommorrowToken; $i++):
            if($i==0):
                $appointmentTime = $tommorowTimeTable->from;
            else:
                $appointmentTime = Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+60)->format('H:i');
                $tokenTime=$tokenTime+60;
            endif;
            array_push($tommorrowTimes,$appointmentTime);
        endfor;

        $tommorowFinalTimes = [
            'date'=> Carbon::now()->addDays(1)->format('Y-m-d'),
            'from'=> isset($tommorowTimeTable->from) ? $tommorowTimeTable->from : "N/A",
            'to' => isset($tommorowTimeTable->to) ? $tommorowTimeTable->to : "N/A",
            'availableTimes'=>$tommorrowTimes,
        ];

        $dayAfterTommorrowToken = isset($dayAfterTommorowTimeTable->token) ? $dayAfterTommorowTimeTable->token : 0;
        $tokenTime = 0;
        $thirdTimes = [];
        for($i=0;$i<$dayAfterTommorrowToken; $i++):
            if($i==0):
                $appointmentTime = $dayAfterTommorowTimeTable->from;
            else:
                $appointmentTime = Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime+60)->format('H:i'); 
                $tokenTime=$tokenTime+60;
            endif;
            array_push($thirdTimes,$appointmentTime);
        endfor;

        $thirdFinalTimes = [
            'date'=> Carbon::now()->addDays(2)->format('Y-m-d'),
            'from'=> isset($dayAfterTommorowTimeTable->from) ? $dayAfterTommorowTimeTable->from : "N/A" ,
            'to' => isset($dayAfterTommorowTimeTable->to) ? $dayAfterTommorowTimeTable->to : "N/A",
            'availableTimes'=>$thirdTimes,
        ];

        $doctor->todayAvailableTimes = $todayFinalTimes;
        $doctor->tomorrowAvailableTimes = $tommorowFinalTimes;
        $doctor->dayAfterTomorrowAvailableTimes = $thirdFinalTimes;
        return response(['status'=>true,'data'=>$doctor]);
    }

    public function categories(Request $request)
    {
        $categories = Category::with('subCategory')->get();
        return response(['stats'=>true,'data'=>$categories]);
    }

    public function categoryProducts(Request $request)
    {
        $categoryProducts = Product::where('category_id',$request->category_id)->paginate(20);
        return response(['status'=>true,'data'=>$categoryProducts]);
    }

    public function subCategoryProducts(Request $request)
    {
        $categoryProducts = Product::where('sub_category_id',$request->sub_category_id)->paginate(20);
        return response(['status'=>true,'data'=>$categoryProducts]);
    }

    public function getProducts(Request $request)
    {
        $products = Product::with('category','subCategory');

        if($request->category_id){
            $products = $products->where('category_id',$request->category_id);
        }
        if($request->sub_category_id){
            $products = $products->where('sub_category_id',$request->sub_category_id);
        }
        $products = $products->paginate(20);
        return response(['status'=>true,'products'=>$products]);
    }

    public function mypatients(){
        $patients = Patient::where('user_id',auth()->user()->id)->get();
        return response(['status'=>true,'data'=>$patients]);
    }

    public function myOrders(){
        $orders = Order::with('orderDetail.product')->where('user_id',auth()->user()->id)->get();
        return response(['status'=>true,'data'=>$orders]);
    }

    public function storePrescription(Request $request)
    {
        $prescription = new Prescription();
        if(auth()->user()){
            $user = User::where('id',auth()->user()->id)->first();
            $prescription->name = auth()->user()->name;
            $prescription->mobile = $user->phone_no;
        }else{
            $prescription->name = $request->name;
            $prescription->mobile = $request->mobile;
        }
        $prescription->message = $request->message;
        if ($request->file('path')) {
            $fileName = time() . '_' . $request->file('path')->getClientOriginalName();
            $filePath = $request->file('path')->storeAs('uploads/prescription/file', $fileName, 'public');
            $filePath =  '/storage/uploads/prescription/file/' . $fileName;
        } else {
            $filePath = '';
        }
        $prescription->delivery_address = $request->delivery_address;
        $prescription->path = $filePath;
        $prescription->save();
    }

    public function productlist(){
        $productlist = Product::orderBy('id', 'DESC')->get();
        return response(['status'=>true,'productlist'=>$productlist]);
    }


}
