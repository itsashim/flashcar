<?php

namespace App\Http\Controllers;


use App\Http\Requests\Bluebook\BluebookStoreRequest;
use App\Model\Bike;
use App\Model\Bikebrand;
use App\Model\Bikemodel;
use App\Model\Bluebook;
use App\Model\BikeSell;
use App\Model\Otp;
use Session;
use App\City;
use App\Model\CartDetail;
use App\User;
use DateTime;
use App\Order;
use App\Quote;
use App\Patient;
use App\Model\Product;
use App\Category;
use App\Hospital;
use App\Wishlist;
use DateTimeZone;
use Carbon\Carbon;
use App\Model\Blog;
use App\Model\Album;
use App\SubCategory;
use App\Model\Doctor;
use App\Model\Review;
use App\Prescription;
use App\HealthPartner;
use App\Model\Package;
use App\Model\Service;
use App\Model\Setting;
use App\ProductGallery;
use App\HospitalGallery;
use App\Model\ContactUs;
use App\Model\Department;
use App\Model\NewsLetter;
use App\Model\Appointment;
use PhpParser\Comment\Doc;
use App\Model\Subscription;
use Illuminate\Support\Str;
use App\Model\DepartService;
use App\Model\Resetpassword;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use App\Model\QuickNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;
use App\Model\TimeTable;
use App\Model\Feature;
use App\Model\Adds;


class FrontController extends Controller
{
    public function __construct()
    {
        $setting = Setting::find(1);
        Session::put("main_color", "#e7d045");
        Session::put("text_color", "#0f4a86");
        Session::put("headingtext_color", "#0f4a86");
        Session::put("lowbackground_box_color", "#ededc2");
        Session::put("slider_color", "#f1f5ff");
        Session::put("main_banner", asset('public/upload/web') . '/' . $setting->main_banner);
    }

    public function login()
    {
        if(auth()->user()){
            return redirect()->intended("/");
        }

        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        return view('front.pages.login',compact('categories','brands','topadds'));
    }

    public function register()
    {
        if(auth()->user()){
            return redirect()->intended("/");
        }

        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        return view('front.pages.register',compact('categories','brands','topadds'));
    }

    //Bluebook Renewable function
    public function bluebook()
    {
        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view('front.bluebook',compact('categories','brands','topadds'));
    }

    public function bluebooksubmit(Request $request)
    {

        // return "helo";

        // Define validation rules
        // $rules = [
        //     'name' => 'required',
        //     'phone' => 'required', // Adjust the max length as needed
        //     'date' => 'required',
        //     'vehicle_type' => 'required',
        //     'vehicle_name' => 'required',
        //     'vehicle_reg_no' => 'required', // Adjust the max length as needed
        //     'vehicle_engine' => 'required',
        //     'pickup_address' => 'required',
        //     'insurance' => 'required',
        //     'bluebook_qty' => 'required',
        //     'service_charge' => 'required',
        // ];

        // // Create a validator instance
        // $validator = Validator::make($request->all(), $rules);

        // // Check if the validation fails
        // if ($validator->fails()) {
        //     // If validation fails, redirect back with errors
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }


        $bluebook = new Bluebook();
        $bluebook->name = $request->name;
        $bluebook->phone = $request->phone;
        $bluebook->date = $request->date;
        $bluebook->vehicle_type = $request->vehicle_type;
        $bluebook->vehicle_name = $request->vehicle_name;
        $bluebook->vehicle_reg_no = $request->vehicle_reg_no;
        $bluebook->vehicle_engine = $request->vehicle_engine;
        $bluebook->pickup_address = $request->pickup_address;
        $bluebook->insurance = $request->insurance;
        $bluebook->message = $request->message;
        $bluebook->bluebook_qty = $request->bluebook_qty;
        $bluebook->service_charge = $request->service_charge;
        // dd($bluebook);


        $bluebook->save();

        Session::flash('message', __('Bluebook Data Enter Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function bikeformsubmit(Request $request)
    {
        $bike = new Bike();
        $bike->bikebrand_id = $request->bikebrand_id;
        $bike->bikemodel_id = $request->bikemodel_id;
        $bike->color = $request->color;
        $bike->register_no = $request->register_no;
        if ($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/bike', $fileName, 'public');
            $imagePath =  '/storage/uploads/bike/' . $fileName;
        } else {
            $imagePath = '';
        }
        $bike->logo_path = $imagePath;
        // dd($bike);


        $bike->save();

        Session::flash('message', __('Your Bike Added Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    //Bluebook Renew tax rates function
    public function bluebookTaxRates()
    {
        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view('front.bluebook-tax-rates',compact('categories','brands','topadds'));
    }

    public function sellbike()
    {
        return view('front.sell-bike');
    }
    // Used Bike List function
    public function usedBikeList()
        {
            $datas = Bike::whereHas('bikesell', function ($query) {
                              $query->where('bike_for', 'Sale');
                         })
                        ->with('bikesell')
                        ->get();
                        // dd($datas);
            $categories = Category::with('subCategory')->get();
            $brands = Bikebrand::all();
            $topadds = Adds::all();

            return view('front.pages.used_bike_list')->with('datas',$datas)->with('categories',$categories)->with('brands',$brands)->with('topadds',$topadds);
        }

    // Bike Details function
    public function bikeDetails($id)
        {
            $find_data = BikeSell::findOrFail($id);
            $data = json_decode($find_data->feature);
            $features = Feature::whereIn('id', $data)->get();
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            $categories = Category::with('subCategory')->get();
            // dd($features);
            return view('front.pages.bike_details')->with('find_data',$find_data)->with('features',$features)->with('brands',$brands)->with('topadds',$topadds)->with('categories',$categories);
        }

    public function productdetails($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $productGalleries = ProductGallery::where('product_id', $product->id)->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        $categories = Category::with('subCategory')->get();
        return view("front.productdetails", compact('product','topadds', 'productGalleries','brands','categories'));
    }

    public function count(Request $request){
       return  Appointment::where("doc_id",$request->doctor_id)->where('time',$request->time)->where('date',$request->date)->count();
    }
    public function getAvaiableTime(Request $request){
        $dayOfWeekMap = [
            'sunday' => 1,
            'monday' => 2,
            'tuesday' => 3,
            'wednesday' => 4,
            'thursday' => 5,
            'friday' => 6,
            'saturday' => 7,
        ];
        $inputDayName = strtolower($request->dayOfWeek);
        $numericDay = $dayOfWeekMap[$inputDayName];
         $dateWiseData=TimeTable::where('doctor_id',$request->doctor_id)
        ->where('day', $numericDay)
        ->first(['id','from','to','status','token','doctor_id']);

        $timeTabledata=TimeTable::where('doctor_id',$request->doctor_id)
        ->where('day', $numericDay)
        ->where('date',$request->clickedDate)
        ->first(['id','from','to','status','token','doctor_id']);
        if($timeTabledata){
            return response()->json(['data' => $timeTabledata]);
        }else{
            $timeTabledata=new TimeTable();
            $timeTabledata->doctor_id=$request->doctor_id;
            $timeTabledata->day = $numericDay;
            $timeTabledata->from = $dateWiseData->from;
            $timeTabledata->to = $dateWiseData->to;
            // $timeTabledata->token = $dateWiseData->token;
            $timeTabledata->status = '1';
            $timeTabledata->date= $request->date;
            $timeTabledata->save();
            return response()->json(['data' => $timeTabledata]);
        }
        // return $timeTabledata;
        // $request->dayOfWeek;
        // $request->doctor_id;
    }
    public function showhome()
    {

        if (!isset($_COOKIE['fload'])) {
            setcookie('fload', '1', time() + (86400 * 30), "/");
        }
        $cities = City::all();
        $topadds = Adds::all();
        $brands = Bikebrand::all();
        $hospitals = Hospital::where('status','Approved')->orderBy('id', 'ASC')->get();
        $service = Service::get()->take(6);
        $package = Package::with('deparmentdata')->where("is_delete","!=","1")->get()->take(3);
      // return $package;
        $departments = Department::all();
        $doctors = Doctor::where('status','Approved')->orderBy('id','DESC')->limit(20)->get();


        $setting = Setting::find(1);
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $reviews = Review::with('doctors', 'users')->get()->take(4);

        if(auth()->user()){

            $user_id = auth()->user()->id;

            $bikemodel_ids = Bike::where('user_id', $user_id)
                              ->pluck('bikemodel_id')
                              ->toArray();

            $products = Bikemodel::with('product')->whereIn('id',$bikemodel_ids)->orderBy('id', 'DESC')->with('product.cartDetails')->limit(6)->get();


        }
        else{
            $products = Product::orderBy('id', 'DESC')->limit(6)->get();

        }

        $categories = Category::with('subCategory')->get();

              // $response = response(['status' => true, 'view' => $view]);
        // return  $categories->subCategory;
        $medicalAppliancesSubCategory = SubCategory::with('product')->where('category_id',11)->limit(6)->get();
        return view("front.pages.home")->with('categories',$categories)
                                        ->with('blogs', $blogs)->with('cities', $cities)
                                        ->with('products', $products)
                                        // ->with('status', true)
                                        ->with('hospitals', $hospitals)
                                        ->with('topadds', $topadds)
                                        ->with('brands', $brands)
                                        ->with("services", $service)
                                        ->with("package", $package)
                                        ->with("setting", $setting)
                                        ->with("departments", $departments)
                                        ->with("review", $reviews)
                                        ->with("doctors", $doctors)
                                        ->with("medicalAppliancesSubCategory", $medicalAppliancesSubCategory)
                                        ->with("chatpage", '1');
    }

    public function getserviceanddoctor($department_id)
    {
        $departmentservice = DepartService::where("department_id", $department_id)->get();
        $doctorlist = Doctor::where("department_id", $department_id)->get();
        $data = array("service" => $departmentservice, "doctor" => $doctorlist);
        return json_encode($data);
    }

    public function sendNotification(Request $request)
    {
        $setting = Setting::find(1);
        $api_key = $setting->web_key;
        $data = [
            "registration_ids" => array($request->get("token")),
            "notification" => [
                "title" => $request->get("sender_name"),
                "body" => substr($request->get('message'), 0, 75),
                "icon" => $request->get('image')
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $api_key,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);
        $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
        $date->setTimeZone(new DateTimeZone('UTC'));
        return $date->format('Y-m-d H:i:s.u');
    }

    public function allfacilites()
    {
        $service = Service::all();
        $department = Department::all();
        $setting = Setting::find(1);
        return view("front.facilites")->with("department", $department)->with("facilites", $service)->with("setting", $setting);
    }

    public function department()
    {
        $departments = Department::all();
        $setting = Setting::find(1);
        return view("front.pages.departmentlist",compact('departments','setting'));
    }

    public function brandlist()
    {
        $brandlist = Bikebrand::all();
        $setting = Setting::find(1);
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        $categories = Category::with('subCategory')->get();
        return view("front.pages.departmentlist",compact('brandlist','setting','brands','categories','topadds'));
    }

    public function departmentlist(Request $req)
    {
        // return $req;
        $department = $req->department_id;
        // dd($department);
        $doctors = Doctor::all();

        $doctors = Doctor::with(['department', 'TimeTabledata']);
        if($req->doctor_id){
            $doctors = $doctors->where('id',$req->doctor_id);
        }
        if ($req->department_id)
            $doctors = $doctors->where('department_id', $req->department_id);

        $doctors = $doctors->limit(8)->get();
        $setting = Setting::find(1);
        $topadds = Adds::all();

        // $doctorsCount = $doctors->count();
        // dd($doctors);
        // $doctors = $department->doctors;


        return view("front.pages.departmentrelated_list", compact('doctors','setting','topadds'));
    }

    public function bikebrandlist(Request $request, $id)
    {
        $brand = Bikebrand::find($id);
        $categories = Category::with('subCategory')->get();
        $subCategory = SubCategory::with('product')->where('category_id',11)->limit(6)->get();

        $bikemodels = $brand->bikemodels;
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        return view("front.pages.bike_models", compact('brand','bikemodels','topadds', 'categories', 'subCategory','brands'));
    }

    public function productModalList(Request $request, $id)
    {
        $categories = Category::where('id','!=','11')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();


        // $products = Product::paginate(9);
        $products = Product::whereHas('bikemodel', function ($query) use ($id) {
               $query->where('bikemodel_id', $id);
        })
        ->paginate();
                    // dd($datas);
        return view('front.productlist',compact('products','categories','brands','topadds'));
    }

    public function contact_us()
    {
        $department = Department::all();
        $setting = Setting::find(1);
        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view("front.contactus")->with("department", $department)->with("setting", $setting)->with("categories", $categories)->with("brands", $brands)->with('topadds',$topadds);
    }

    public function myaccount()
    {
        if (Auth::id() && isset(Auth::user()->usertype) && Auth::user()->usertype == '1') {
            // $department = Department::all();
            // $subscription = Subscription::with('packagedata')->where("user_id", Auth::id())->get();
            // $future = Appointment::with("doctors", "services", "department")->where("user_id", Auth::id())->where("date", ">=", date('Y-m-d'))->get()->take(15);
            // foreach ($future as $k) {
            //     if ($k->doctors) {
            //         $getuser = Doctor::where("user_id", $k->doc_id)->first();
            //         if ($getuser) {
            //             $k->doctors->image = $getuser->image;
            //         } else {
            //             $k->doctors->image = "";
            //         }
            //     }
            // }
            // $past = Appointment::with("doctors", "services", "department")->where("user_id", Auth::id())->where("date", "<=", date('Y-m-d'))->get()->take(15);
            // foreach ($past as $k) {
            //     if ($k->doctors) {
            //         $getuser = Doctor::where("user_id", $k->doc_id)->first();
            //         if ($getuser) {
            //             $k->doctors->image = $getuser->image;
            //         } else {
            //             $k->doctors->image = "";
            //         }
            //     }
            // }
            $setting = Setting::find(1);
            $categories = Category::with('subCategory')->get();
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            // $patients = Patient::where('user_id',auth()->user()->id)->get();
            // $orders = Order::where('user_id',auth()->user()->id)->get();
            return view("front.members.myaccount")
                        // ->with("department", $department)
                        // ->with("upcomming", $future)
                        // ->with("past", $past)
                        // ->with("patients", $patients)
                        // ->with("subscription", $subscription)
                        // ->with("orders", $orders)
                        ->with('categories',$categories)
                        ->with('brands',$brands)
                        ->with('topadds',$topadds)
                        ->with('page','myaccount')
                        ->with("setting", $setting);
        } else {
            return redirect("/");
        }
    }

    public function mysubscriptions()
    {
        if(auth()->user()){

            $subscriptions = Subscription::with('packagedata')->where("user_id", Auth::id())->get();
            $setting = Setting::find(1);
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            $categories = Category::with('subCategory')->get();
            return view('front.members.subscription')
                        ->with("subscriptions", $subscriptions)
                        ->with("brands", $brands)
                        ->with("topadds", $topadds)
                        ->with("categories", $categories)
                        ->with("page", 'mysubscriptions')
                        ->with('setting',$setting);
        }else{
            return redirect('/');
        }

    }

    public function myprescriptions()
    {
        if(auth()->user()){
            $prescriptions = Prescription::where('user_id',auth()->id())->get();
            $setting = Setting::find(1);
            $categories = Category::with('subCategory')->get();
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            return view('front.members.prescription')
                        ->with('prescriptions',$prescriptions)
                        ->with('page','myprescriptions')
                        ->with('setting',$setting)
                        ->with('categories',$categories)
                        ->with('topadds',$topadds)
                        ->with('brands',$brands);

        }else{
            return redirect('/');
        }
    }

    public function mywishlists()
    {
        if(auth()->user()){
            $wishlistIDs = Wishlist::where('user_id',auth()->user()->id)->pluck('product_id');
            $products = Product::whereIn('id',$wishlistIDs)->get();
            $setting = Setting::find(1);
            $categories = Category::with('subCategory')->get();
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            return view('front.members.wishlist')
                        ->with("products", $products)
                        ->with('page','my-wishlists')
                        ->with('setting',$setting)
                        ->with('categories',$categories)
                        ->with('topadds',$topadds)
                        ->with('brands',$brands);
        }else{
            return redirect()->intended('/login')->with('wishlist',1);
        }
    }

    public function wishlistRemove(Request $request)
    {
        if(auth()->user()){
            $wishlist = Wishlist::where('product_id',$request->id)->where('user_id',auth()->user()->id)->first();
            if($wishlist){
                $wishlist->delete();
                $wishlistCount = Wishlist::where('user_id',auth()->user()->id)->count();
                return response(['status'=>true,'message'=>'Wishlist has been removed.','id'=>$request->id,'wishlistCount'=>$wishlistCount]);
            }
            return response(['status'=>false,'message'=>'Wishlist not found']);
        }else{
            return response(['status'=>false,'message'=>'Please login to continue']);
        }
    }

    public function mypatients()
    {
        if(auth()->user()){
            $patients = Patient::where('user_id',auth()->user()->id)->get();
            $setting = Setting::find(1);
            return view('front.members.patient')
                        ->with("patients", $patients)
                        ->with('page','mypatients')
                        ->with('setting',$setting);
        }else{
            return redirect('/');
        }
    }
    public function addbike()
    {
        if(auth()->user()){
            $brand = Bikebrand::all();
            $model = Bikemodel::all();
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            $categories = Category::with('subCategory')->get();
            // $bikes = Bike::all();
            $features = Feature::all();
            $bikes = Bike::where('user_id',auth()->user()->id)->whereHas('bikesell', function ($query) {
                       $query->where('bike_for', 'Maintainance');
                     })
                    ->with('bikesell')
                    ->with('bikebrand')
                    ->with('bikemodels')
                    ->get();
            // dd($bikes);

            return view('front.members.addbike')
                        ->with('page','mypatients')
                        ->with('brand',$brand)
                        ->with('model',$model)
                        ->with('brands',$brands)
                        ->with('topadds',$topadds)
                        ->with('categories',$categories)
                        ->with('features',$features)
                        ->with('bikes',$bikes);
            // $patients = Patient::where('user_id',auth()->user()->id)->get();
            // $setting = Setting::find(1);
            // return view('front.members.patient')
            //             ->with("patients", $patients)
            //             ->with('page','mypatients')
            //             ->with('setting',$setting);
        }else{
            return redirect('/');
        }
    }

    public function mypurchases()
    {
        if(auth()->user()){
            $orders = Order::where('user_id',auth()->user()->id)->get();
            $setting = Setting::find(1);
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            $categories = Category::with('subCategory')->get();
            return view('front.members.product')
                        ->with("orders", $orders)
                        ->with("brands", $brands)
                        ->with("topadds", $topadds)
                        ->with("categories", $categories)
                        ->with("page",'mypurchases')
                        ->with('setting',$setting);
        }else{
            return redirect('/');
        }
    }

    public function myappointments()
    {
        // return date('H/i');
        if(auth()->user()){
            // $future = Appointment::with("doctors", "services", "department")->where("user_id", Auth::id())->where("date", ">=", date('Y-m-d'))->get()->take(15);
            $future = Appointment::where("user_id", Auth::id())->where("date", ">=", date('Y-m-d'))->get()->take(15);
            foreach ($future as $k) {
                if ($k->doctors) {
                    $getuser = Doctor::where("user_id", $k->doc_id)->first();
                    if ($getuser) {
                        $k->doctors->image = $getuser->image;
                    } else {
                        $k->doctors->image = "";
                    }
                }
            }
            // $past = Appointment::with("doctors", "services", "department")->where("user_id", Auth::id())->where("date", "<=", date('Y-m-d'))->get()->take(15);
            $past = Appointment::where("user_id", Auth::id())->where("date", "<", date('Y-m-d'))->get()->take(15);
            foreach ($past as $k) {
                if ($k->doctors) {
                    $getuser = Doctor::where("user_id", $k->doc_id)->first();
                    if ($getuser) {
                        $k->doctors->image = $getuser->image;
                    } else {
                        $k->doctors->image = "";
                    }
                }
            }

            $setting = Setting::find(1);
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            $categories = Category::with('subCategory')->get();
            return view('front.members.appointment')
                        ->with('page','myappointments')
                        ->with("upcomming", $future)
                        ->with("brands", $brands)
                        ->with("topadds", $topadds)
                        ->with("categories", $categories)
                        ->with("past", $past)->with('setting',$setting);
        }else{
            return redirect('/');
        }

    }

    public function updateprofile(Request $request)
    {
        $img_url = Auth::user()->profile_pic;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/profile';
            $picture = 'profile_' . mt_rand(100000, 999999) . '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
            $img_url = $picture;
        }
        $user = User::find(Auth::id());
        $user->name = $request->get("name");
        $user->phone_no = $request->get("phone_no");
        $user->profile_pic = $img_url;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->zip_code = $request->zip_code;
        if($request->get("password") == $request->get("c_password")){
             $user->password = Hash::make($request->get("password"));

        }else{
            return back();
        }

        $user->save();
        $img = "";
        Session::put("profile_pic", asset("public/upload/profile/") . '/' . $img_url);
        Session::flash('message', __('messages.Profile Update Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function checkcurrentpwd(Request $request)
    {
        if (Auth::user()->password == $request->get("pwd")) {
            return 1;
        } else {
            return 0;
        }
    }


    public function changepasswords(Request $request)
    {
        $store = User::find(Auth::id());
        $store->password = $request->get("npwd");
        $store->save();
        Session::flash('message', __('messages.Password Change Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function doctordetails($id)
    {
        $department = Department::all();
        $doctor = Doctor::with('department', "TimeTabledata")->where("user_id", $id)->first();

        if (!$doctor) {
            return redirect('/');
        }
        $departmentdetails = Department::with("doctor", "service")->find($doctor->department_id);
        $doctor->total_ratting = count(Review::where("doctor_id", $id)->get());
        $doctor->ratting = Review::where("doctor_id", $id)->avg('ratting');
        $reviews = Review::with('doctors', 'users')->where("doctor_id", $id)->get();
        //echo "<pre>";print_r($reviews);exit;
        $setting = Setting::find(1);
        //  echo "<pre>";print_r($doctor);exit;
        return view("front.doctordetails")->with("department", $department)->with("review", $reviews)->with("doctor", $doctor)->with("departmentdetails", $departmentdetails)->with("id", $id)->with("setting", $setting);
    }

    public function findDoctor(Request $request)
    {
        $user = User::where("usertype", "3")->get();
        $cities = City::all();
        $hospitals = Hospital::all();
        $departments = Department::all();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        $categories = Category::with('subCategory')->get();
        $doctor = Doctor::with(['department', 'TimeTabledata'])->where('id', $request->id)->first();
        // ->when($request->id, function ($query) use ($request) {
        //     return $query->where('id', $request->id);
        // })
        // // ->when($request->department_id, function ($query) use ($request) {
        //     return $query->where('department_id', $request->department_id);
        // });
        // $doctorsCount = $doctors->count();
        // $pages = ceil($doctorsCount/8);
        // $doctors = $doctors->limit(8)->get();
        $setting = Setting::find(1);
        $timeTables = $this->getTimeTable($doctor->id);
        // return $timeTables;
        return view("front.finddoctor", compact('departments', 'doctor', 'cities', 'hospitals','setting','user','timeTables','brands','categories','topadds'));
    }

    public function getTimeTable($doctor_id) {
        $dayOfWeek = Carbon::now()->dayOfWeek + 1;
        // Fetch time tables for today, tomorrow, and the day after tomorrow
        $timeTables = TimeTable::where('doctor_id', $doctor_id)
            ->whereIn('day', [$dayOfWeek, ($dayOfWeek % 7) + 1, ($dayOfWeek % 7) + 2])
            ->get(['day', 'status','to','from']);

        $todayTimeTable = $timeTables->firstWhere('day', $dayOfWeek);
        $tommorowTimeTable = $timeTables->firstWhere('day', ($dayOfWeek % 7) + 1);
        $dayAfterTommorowTimeTable = $timeTables->firstWhere('day', ($dayOfWeek % 7) + 2);

        $currentDate = date("Y-m-d");
        $tomorrowDate = date("Y-m-d", strtotime("+1 day"));
        $dayAfterTomorrowDate = date("Y-m-d", strtotime("+2 days"));


        // Calculate the number of hours for each day
        $todayHours = ($todayTimeTable) ? (strtotime($todayTimeTable->to) - strtotime($todayTimeTable->from)) / 3600 : null;
        $tommorowHours = ($tommorowTimeTable) ? (strtotime($tommorowTimeTable->to) - strtotime($tommorowTimeTable->from)) / 3600 : null;
        $dayAfterTommorowHours = ($dayAfterTommorowTimeTable) ? (strtotime($dayAfterTommorowTimeTable->to) - strtotime($dayAfterTommorowTimeTable->from)) / 3600 : null;

    return [
        'today' => ['timeTable' => $todayTimeTable, 'hours' => $todayHours,'date' => $currentDate],
    'tommorow' => ['timeTable' => $tommorowTimeTable, 'hours' => $tommorowHours,'date'=>$tomorrowDate],
    'dayAfterTommorow' => ['timeTable' => $dayAfterTommorowTimeTable, 'hours' => $dayAfterTommorowHours,'date'=>$dayAfterTomorrowDate]];

    }



    public function ajaxDoctorPage(Request $request)
    {
        $limit = $request->current_page*8;
        $offset = $limit-8;
        $doctors = Doctor::with('department');
        if($request->hospital_id)
            $doctors = $doctors->where('hospital_id',$request->hospital_id);
        if($request->department_id)
            $doctors = $doctors->where('department_id',$request->department_id);
        if($request->search_name){
            $search = $request->search_name;
            $doctors = $doctors->where('name','LIKE',"%{$search}%");
        }
        $doctorsCount = $doctors->count();
        $doctors = $doctors->offset($offset)->limit(8)->get();
        $pages = ceil($doctorsCount/8);
        $current_page = $request->current_page;
        $view = view('front.ajaxpages.doctorfilterpage',compact('doctors','current_page','pages'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function getDoctorDetailPage(Request $request)
    {

        $doctor = Doctor::findOrFail($request->id);
        $date = $request->date;
        $time = $request->time;
        $view = view('front.modals.doctordetails', compact('doctor','date','time'))->render();
        return response(['status' => true, 'data' => $view]);
    }

    public function departmentdetail($id)
    {
        $department = Department::all();
        dd($department);
        $setting = Setting::find(1);
        $departmentdetails = Department::with("doctor", "service")->find($id);
        if ($departmentdetails) {
            return view("front.departmentdetails")->with("department", $department)->with("departmentdetails", $departmentdetails)->with("setting", $setting);
        } else {
            return redirect('/');
        }
    }

    public function doctorlist()
    {
        $department = Department::all();
        $doctor = Doctor::all();
        $departmentdoctor = Department::with('doctor')->get();
        $setting = Setting::find(1);
        return view("front.doctorlist")->with("department", $department)->with("doctor", $doctor)->with("departmentdoctor", $departmentdoctor)->with("setting", $setting);
    }

    public function gallery()
    {
        $department = Department::all();
        $albumlist = Album::with("gallerydata")->get();
        $setting = Setting::find(1);
        return view("front.gallery")->with("department", $department)->with("albumlist", $albumlist)->with("setting", $setting);
    }

    public function savecontact(Request $request)
    {
        $store = new ContactUs();
        $store->name = $request->get("name");
        $store->email = $request->get("email");
        $store->topic = $request->get("topic");
        $store->phone = $request->get("phone");
        $store->message = $request->get("message");
        $store->save();
        Session::flash('message', __('messages.We, Will try to connect with you very soon'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function addreview(Request $request)
    {
        $data = new Review();
        $data->doctor_id = $request->get("doctor_id");
        $data->user_id = Auth::id();
        $data->review = $request->get("messages");
        $data->ratting = $request->get("rating");
        $data->save();
        Session::flash('message', __('messages.Review Add Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }


    public function savesubscribe($email)
    {
        $store = new NewsLetter();
        $store->email = $email;
        $store->save();
        return "done";
    }

    public function pricing()
    {
        $department = Department::all();
        $pricing = Package::where("is_delete","0")->with('deparmentdata')->paginate(12);
        $setting = Setting::find(1);
        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view("front.pricing")->with("department", $department)->with("pricing", $pricing)->with("setting", $setting)->with("categories",$categories)->with("brands",$brands)->with("topadds",$topadds);
    }

    public function termcondition()
    {
        $department = Department::all();
        $setting = Setting::find(1);
        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view("front.termcondition")->with("department", $department)->with("setting", $setting)->with("categories",$categories)->with("brands",$brands)->with("topadds",$topadds);
    }

    public function privacypolicy()
    {
        $department = Department::all();
        $setting = Setting::find(1);
        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view("front.privacypolicy")->with("department", $department)->with("setting", $setting)->with("categories", $categories)->with("brands", $brands)->with("topadds",$topadds);
    }

    public function postregister(Request $request)
    {
        $getemail = User::where("email", $request->get("email"))->first();
        if ($getemail) {
            $data = array("status" => '0', "data" => __("messages.Email Id Already Exist"));
            return json_encode($data);
        } else {
            $store = new User();
            $store->name = $request->get("name");
            $store->email = $request->get("email");
            $store->phone_no = $request->get("phone");
            $store->login_type = 1;
            $store->usertype = 1;
            $store->password = Hash::make($request->get("password"));
            $store->save();
            Auth::login($store, true);
            $store->assignRole('Customer');
            Session::put("profile_pic", asset("public/upload/profile/profile.png"));
            $store->profile_pic = "profile/profile.png";
            $data = array("status" => '1', "data" => $store);
            return json_encode($data);
        }
    }

    public function postlogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($credentials)) {
            $user = User::where('id', auth()->user()->id)->first();

            if($request->product_id){
                $product = Product::where('id',$request->product_id)->first();
                $product_route =  asset('product_details/'.$product->slug);
                return response(['status'=>true,'product_route'=>$product_route]);
            }

            return json_encode(['status' => 1, 'data' => $user]);
        }
        return json_encode(["status" => '0', "data" => __('messages.Login credentials are wrong')]);
        // $checkuser=User::where("email",$request->get("email"))->where("password",$request->get("password"))->where("usertype",'1')->first();
        // if($checkuser){
        //   Auth::login($checkuser, true);
        //   if($request->get("rem_me")==1){
        //         setcookie('email', $request->get("email"), time() + (86400 * 30), "/");
        //         setcookie('password',$request->get("password"), time() + (86400 * 30), "/");
        //         setcookie('rem_me',1, time() + (86400 * 30), "/");
        //    }
        //      if($checkuser->profile_pic!=""){
        //            Session::put("profile_pic",asset("public/upload/profile").'/'.$checkuser->profile_pic);
        //            $image="profile/".$checkuser->profile_pic;
        //      }
        //      else{
        //            Session::put("profile_pic",asset("public/upload/profile/profile.png"));
        //            $image="profile/profile.png";
        //            $checkuser->profile_pic = "profile/profile.png";
        //      }
        //   $data = array("status"=>'1',"data"=>$checkuser);
        //   return json_encode($data);

        // }else{
        //       $data = array("status"=>'0',"data"=>__('messages.Login credentials are wrong'));
        //     return json_encode($data);
        // }
    }

    public function userLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(auth()->attempt($credentials)){
            // if(auth()->user()->hasRole("Customer")){
            if(auth()->user()->usertype == "1"){
                if($request->product_id){
                    $product= Product::whereId($request->product_id)->first();
                    if($product){
                        return redirect()->intended('product_details/'.$product->slug)->with('message','Logged in successfully');
                    }
                }

                if($request->cart && $request->cart=="1"){
                    return redirect()->intended('/cart')->with('message','Logged in successfully');
                }
                if($request->wishlist && $request->wishlist=="1"){
                    return redirect()->intended('/my-wishlists')->with('message','Logged in successfully');
                }
                if($request->appointment && $request->appointment=="1"){
                    return redirect()->back()->with('message','Logged in successfully');
                }
                if($request->subscription_id){
                    return redirect()->intended('/subscription/'.$request->subscription_id)->with('message','Logged in successfully');
                }

                return redirect()->intended('/')->with('message','Logged in successfully');
            }
            auth()->logout();
            return redirect()->back()->with('message','Please Login with Customer Account.');
        }
        return redirect()->back()->with('message_err','Invalid Login Credentials');
    }

    public function userRegister(Request $request)
    {
        // $request->validate([
        //     'name'=>'required|max:255',
        //     'email'=>'required|unique:users|max:255',
        //     'phone_no'=>'required|unique:users|numeric|digits_between:5,14',
        //     'password'=>'required|min:6|max:255',
        // ]);

        // dd('hey');


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_no = $request->phone_no;
        $user->usertype = 1;
        $user->login_type = 1;
        $save = $user->save();
        if($save)
        {
            $user->assignRole('Customer');

             $this->sendOtpCodeUser($user->id,$user->email);

              $attempt = Auth::attempt(['email' => $request->email, 'password' => $request->password], true);
              if($attempt)
              {
                  return redirect()->intended('/')->with('message','User Registered Successfully');
              }
              else{
                  return back()->with('error','Couldnot login');
              }
        }
      else{
           return redirect()->intended('/')->with('error','Something went wrong');
      }

    }

    private function sendOtpCodeUser($id,$email)
    {
        // dd($email);
        $user = User::where('email',$email)->first();
        if(!$user){
            return response(['status'=>false,'message'=>'Email Required']);
        }
        $code = rand(100000,999999);
        $otpCode = new Otp();
        $otpCode->user_id = $user->id;
        $otpCode->code = $code;
        $otpCode->save();
        $data = [
            'user' => $user,
            'code' => $code,
        ];
        try {
            // dd('hello');
            Mail::send('email.enterotp', $data, function ($message) use ($user) {
                $message->to($user->email, $user->name)->subject(__("messages.Forgot Password"));
            });
        } catch (\Exception $e) {
            dd($e);
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
        return response(['status'=>true,'message'=>"Please check your email for reset code"]);
    }

    public function patientRegister(Request $request)
    {
        if(auth()->user() && auth()->user()->hasRole("Customer")){
            $this->validate($request,[
                'first_name'=>'required',
                'last_name'=>'required',
                'age'=>'required|numeric|max:90',
                'gender'=>'required',
                'location'=>'required',
                'relation'=>'required',
                'phone' => 'numeric',
                'email' => 'email|max:255',
            ]);
            $patient = new Patient();
            $patient->first_name = $request->first_name;
            $patient->last_name = $request->last_name;
            $patient->age = $request->age;
            $patient->dob = $request->dob;
            $patient->gender = $request->gender;
            $patient->location = $request->location;
            $patient->relation = $request->relation;
            $patient->phone = $request->phone;
            $patient->email = $request->email;
            $patient->address = $request->location;
            $patient->user_id = auth()->user()->id;
            $patient->save();
            return redirect()->back()->with('message','Patient Added Successfully');
        }
        return redirect()->back()->with('message','Only Customer can add patient');
    }

    public function patientDetail(Request $request)
    {
        $patient = Patient::whereId($request->id)->first();
        if(!$patient){
            return response(['status'=>false,'message'=>'No patient Found']);
        }
        return response(['status'=>true,'data'=>$patient]);
    }

    public function userloginOld(Request $request)
    {
        $checkuser = User::where("email", $request->get("email"))->where("password", $request->get("password"))->where("usertype", '1')->first();
        if ($checkuser) {
            Auth::login($checkuser, true);
            if ($request->get("rem_me") == 1) {
                setcookie('email', $request->get("email"), time() + (86400 * 30), "/");
                setcookie('password', $request->get("password"), time() + (86400 * 30), "/");
                setcookie('rem_me', 1, time() + (86400 * 30), "/");
            }
            if ($checkuser->profile_pic != "") {
                Session::put("profile_pic", asset("public/upload/profile") . '/' . $checkuser->profile_pic);
                $image = "profile/" . $checkuser->profile_pic;
            } else {
                Session::put("profile_pic", asset("public/upload/profile/profile.png"));
                $image = "profile/profile.png";
                $checkuser->profile_pic = "profile/profile.png";
            }


            return redirect()->back();
        } else {
            Session::flash('message', __('messages.Login credentials are wrong'));
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    public function userlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function bookappoinment(Request $request)
    {
        $this->validate($request,[
            'patient_id'=>'required',
            'doctor_id'=>'required',
            'date'=>'required|date_format:Y-m-d',
            'time'=>'required',
        ]);
        $appointment = new Appointment();
        if(auth()->user()){
            $appointment->name = auth()->user()->name;
            $appointment->user_id = auth()->user()->id;
            $appointment->phone_no = auth()->user()->phone_no;
        }else{
            $appointment->name = $request->name;
            $appointment->user_id = $request->user_id;
            $appointment->phone_no = $request->phone_no;
        }
        $appointment->department_id = $request->department_id;
        $appointment->doc_id = $request->doc_id;
        $appointment->service_id = $request->service_id;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->messages = $request->message;
        $appointment->status = 1;
        $appointment->save();
        return response(['status'=>true,'message'=>'Appointment Booked Successfully']);
    }

    public function bookappoinmentOld(Request $request)
    {
        $data = new Appointment();
        $data->department_id = $request->get("department");
        $data->service_id = $request->get("service");
        $data->doc_id = $request->get("doctors");
        $data->name = $request->get("name");
        $data->phone_no = $request->get("phone_no");
        $data->user_id = Auth::id();
        $data->date = $request->get("app_date");
        $data->time = $request->get("app_time");
        $data->messages = $request->get("messages");
        $data->status = 1;
        $data->save();
        Session::flash('message', __('messages.Appointement Book Successfully'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function showForgotPassword(Request $request)
    {
         $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view('front.pages.forgot',compact('categories','brands','topadds'));
    }

    public function forgotPassword(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email:rfc,dns',
        ]);
        $user = User::where('email',$request->email)->first();
        if(!$user){
            return response(['status'=>false,'message'=>'User not found with given email']);
        }
        $code = rand(100000,999999);
        $resetCode = new Resetpassword();
        $resetCode->user_id = $user->id;
        $resetCode->code = $code;
        $resetCode->save();
        $data = [
            'user' => $user,
            'code' => $code,
        ];
        try {
            // dd('hello');
            Mail::send('email.forgotpassword', $data, function ($message) use ($user) {
                $message->to($user->email, $user->name)->subject(__("messages.Forgot Password"));
            });
        } catch (\Exception $e) {
            dd($e);
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
        return response(['status'=>true,'message'=>"Please check your email for reset code"]);
    }

    public function verifyToken(Request $request)
    {
        // return "ypu are here";die();
        $this->validate($request,[
            'code'=>'required|min:6',
            'email'=>'required|email:rfc,dns',
        ]);
        $user = User::where('email',$request->email)->first();
        if(!$user){
            return response(['status'=>false,'message'=>'User not found with given email']);
        }
        $resetPassword = ResetPassword::where('user_id',$user->id)->where('code',$request->code)->first();
        if(!$resetPassword)
            return response(['status'=>false,'message'=>'Reset Code not found']);
        return response(['status'=>true,'message'=>'Token verified successfully']);
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'code'=>'required|min:6',
            'email'=>'required|email:rfc,dns',
            'password'=>'required|min:6',
            'c_password'=>'required|same:password|min:6',
        ]);

        $user = User::where('email',$request->email)->first();
        if(!$user){
            return response(['status'=>false,'message'=>'User not found with given email']);
        }
        $resetPassword = ResetPassword::where('user_id',$user->id)->where('code',$request->code)->first();
        if(!$resetPassword)
            return response(['status'=>false,'message'=>'Reset Code not found']);
        $user->password = Hash::make($request->password);
        $user->save();
        $resetPassword->delete();
        return response(['status'=>true,'message'=>'Password has been successfully reset']);
    }

    public function postforgot(Request $request)
    {
        $checkmobile = User::where("email", $request->get("email"))->first();

        if (!empty($checkmobile)) {

            $code = mt_rand(100000, 999999);
            $store = array();
            if (!isset($checkmobile->email)) {
                return 0;
            }
            $store['email'] = $checkmobile->email;
            $store['name'] = $checkmobile->name;
            $store['code'] = $code;
            $add = new Resetpassword();
            $add->user_id = $checkmobile->id;
            $add->code = $code;
            $add->save();
            try {
                Mail::send('email.forgotpassword', ['user' => $store], function ($message) use ($store) {
                    $message->to($store['email'], $store['name'])->subject(__("messages.Forgot Password"));
                });
            } catch (\Exception $e) {
            }

            return 1;
        } else {
            return 0;
        }
    }

    public function resetpwd($code)
    {
        $data = Resetpassword::where("code", $code)->get();
        $setting = Setting::find(1);
        if (count($data) != 0) {
            return view('resetpwd')->with("id", $data[0]->user_id)->with("code", $code)->with("setting", $setting);
        } else {
            return view('resetpwd')->with("msg", __('messages.code_ex'))->with("setting", $setting);
        }
    }

    public function resetpassword(Request $request)
    {
        if ($request->get('id') == "") {
            return view('resetpwd')->with("msg", __('messages.pwd_success'));
        } else {
            $user = User::find($request->get('id'));
            $user->password = $request->get('npwd');
            $user->save();
            $setting = Setting::find(1);
            $codedel = Resetpassword::where('user_id', $request->get("id"))->delete();
            return view('resetpwd')->with("msg", __('messages.pwd_success'))->with("setting", $setting);
        }
    }


    public function show_chat_area($id)
    {
        if (Auth::id()) {
            $department = Department::all();
            $timezone_name = timezone_name_from_abbr("", 330 * 60, false);
            $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
            $date->setTimeZone(new DateTimeZone('UTC'));
            $setting = Setting::find(1);
            $user = User::find($id);
            $factory = (new Factory)->withServiceAccount(env('FIREBASE_CREDENTIALS'));
            $factory = (new Factory())->withDatabaseUri(env('FIREBASE_DATABASE_URL'));
            $database = $factory->createDatabase();
            if ($user->usertype == '1') {
                $img = 'profile/' . $user->profile_pic;
            } else if ($user->usertype == '3') {
                $doctor = Doctor::where("user_id", $id)->first();
                if ($doctor) {
                    $img = "doctor/" . $doctor->image;
                }
            } else if ($user->usertype == '2') {
                $img = 'profile/' . $user->profile_pic;
            } else {
                $img = 'profile/' . $user->profile_pic;
            }
            //echo $img;exit;
            $reference = $database->getReference($id);
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();
            if (empty($value)) {
                $newPost =  $database
                    ->getReference($id)
                    ->set([
                        'name' => $user->name,
                        'profile' => $img,
                        'usertype' => $user->usertype
                    ]);
            }
            return view("front.chatarea")->with("department", $department)->with("timezone_name", $timezone_name)->with("setting", $setting)->with("chatuserid", $id);
        } else {
            return redirect('/');
        }
    }

    public function mediaupload(Request $request)
    {
        if ($files = $request->file('file')) {
            $str = explode("/", $_FILES['file']['type']);
            if (isset($str[0]) && $str[0] == 'image') {
                $type = "1";
            } else {
                $type = "2";
            }
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/chat';
            $picture = uniqid() . '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('file')->move($destinationPath, $picture);
            $img_url = $picture;
            $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
            $date->setTimeZone(new DateTimeZone('UTC'));
            return json_encode(array("media" => $img_url, "type" => $type, "time" => $date->format('Y-m-d H:i:s.u')));
        }
        return 0;
    }

    public function deletemedia(Request $request)
    {
        $image_path = public_path() . "/upload/chat/" . $request->get("name");
        if (file_exists($image_path)) {
            try {
                unlink($image_path);
            } catch (Exception $e) {
            }
        }
        return "done";
    }

    public function resetAll()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('permission:cache-reset');
        Artisan::call('storage:link');
        dd('cleared everything');
    }

    public function showHospital($slug,Request $request)
    {
        $department_id = $request->department_id;
        $hospital = Hospital::where('slug', $slug)->firstOrFail();
        $hospitalGalleries = HospitalGallery::where('hospital_id', $hospital->id)->get();

        if ($hospital->department_ids != null){
            $departments = Department::whereIn('id', json_decode($hospital->department_ids))->get();
            foreach($departments as $department){
                $doctorsCount = Doctor::where('department_id',$department->id)->where('hospital_id',$hospital->id)->count();
                $department->doctorsCount = $doctorsCount;
            }
        }else{
            $departments = [];
        }

        if ($hospital->facility_ids != null)
            $facilities = Service::whereIn('id', json_decode($hospital->facility_ids))->get();
        else
            $facilities = [];
        if($request->patient_id){
            $step = 4;
            $doctor = Doctor::findOrFail($request->doctor_id);
            $appointment_fee = $doctor->appointment_fee;
            $doctor_id = $doctor->id;
            $date = $request->date;
            $time = $request->time;
            $time_id = $request->time_table_id;
            $patient = Patient::whereId($request->patient_id)->first();
            return view('front.pages.bookhospital_step4', compact('hospital', 'departments', 'hospitalGalleries', 'facilities','step','department_id','doctor_id','date','time','patient','appointment_fee','time_id'));
        }elseif($request->doctor_id){
            $step = 3;
            $doctor = Doctor::findOrFail($request->doctor_id);
            $doctor_id = $doctor->id;
            $date = $request->date;
            $time = $request->time;
            $time_id = $request->time_table_id;
            if(auth()->user())
                $patients = Patient::where('user_id',auth()->user()->id)->get();
            else
                $patients = [];
            return view('front.pages.bookhospital_step3', compact('hospital', 'departments', 'hospitalGalleries', 'facilities','step','department_id','patients','doctor_id','date','time',"time_id"));
        }elseif($department_id){
            $step = 2;
            $selectedDepartment = Department::whereId($department_id)->firstOrFail();
            $doctors = Doctor::where('hospital_id',$hospital->id)->where('department_id',$department_id)->get();
            return view('front.pages.bookhospital_step2', compact('hospital', 'departments', 'hospitalGalleries', 'facilities','doctors','step','department_id'));
        }else{
            $step = 1;

            return view('front.pages.bookhospital_step1', compact('hospital', 'departments', 'hospitalGalleries', 'facilities','step'));
        }
    }

    public function appointDoctor(Request $request)
    {
        // if(!Auth::user()){
        //     return redirect()->intended('/login')->with(["message_err"=>"You need to login first"]);
        // }
        $date = $request->date;
        $time = $request->time;
        $time_id = $request->time_table_id;
        $doctor_id = $request->doctor_id;


        // if($request->patient_id){
        //         $patient = Patient::findOrFail($request->patient_id);
        //         $step =4;
        //         $doctor = Doctor::findOrFail($request->doctor_id);
        //         // $hospitalExist = Hospital::whereId($doctor->hospital_id)->first();
        //         // if($hospitalExist){
        //         //     $appointment_fee = $hospitalExist->appointment_fee;
        //         // }else{
        //             $appointment_fee = $doctor->appointment_fee;
        //         // }
        //         return view('front.pages.bookhospital_step4',compact('doctor_id','date','time','patient','step','appointment_fee','time_id'));
        //     }else{
        //         $step = 3;
        //         if(auth()->user())
        //         {
        //             $patients = Patient::where('user_id',auth()->user()->id)->get();
        //         }
        //         else{
        //             $patients = [];
        //         }
        //         return view('front.pages.bookhospital_step3',compact('doctor_id','date','time','step','patients','time_id'));
        //     }




         $step =4;
            $doctor = Doctor::findOrFail($request->doctor_id);
            $hospitalExist = Hospital::whereId($doctor->hospital_id)->first();
            if($hospitalExist){
                $appointment_fee = $hospitalExist->appointment_fee;
            }else{
                $appointment_fee = $doctor->appointment_fee;
            }

            $categories = Category::with('subCategory')->get();
            $brands = Bikebrand::all();
            $topadds = Adds::all();
        return view('front.pages.bookhospital_step4',compact('doctor_id','date','time','step','appointment_fee','time_id','categories','brands'.'topadds'));

        // $else_app =  Appointment::where("doc_id",$doctor_id)->where('time',$time)->where('date',$date)->count();

        // $user_app =  Appointment::where("doc_id",$doctor_id)->where('time',$time)->where('date',$date)->where('user_id',Auth::user()->id)->count();
        // if($user_app == 0 && $else_app == 0){


        // }
        // else{
        //     abort(403, 'Cannot Appoint Again Or Doctor has already been taken');
        //     // return back()->with(['message_err'=>"You Cannot Appoint Again!.Or Doctor Has Been Taken !"]);
        // }
    }

    public function getHospitals(Request $request)
    {
        if ($request->id == "All City") {
            $hospitals = Hospital::all();
        } else {
            $hospitals = Hospital::where('city_id', $request->id)->get();
        }
        return response(['status' => true, 'data' => $hospitals]);
    }

    public function blogList(Request $request)
    {
        $blogs = Blog::paginate(12);
        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view('front.pages.bloglist',compact('blogs','categories','brands','topadds'));
    }

    public function doctors(Request $request)
    {
        $cities = City::all();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        $categories = Category::with('subCategory')->get();
        // $doctors = Doctor::where("hospital_id",null)->where('status','Approved')->when($request->city_id,function($query) use($request)
        $doctors = Doctor::where('status','Approved')->when($request->city_id,function($query) use($request){
            $query->where('city_id',$request->city_id);
        })->paginate(12);
        return view('front.pages.doctorlist',compact('doctors','cities','brands','categories','topadds'));
    }

    public function getdoctors(Request $request)
    {
        $hospital = Hospital::where('id', $request->id)->firstOrFail();
        $doctors = Doctor::where('hospital_id', $hospital->user_id)->get();
        return response(['status' => true, 'data' => $doctors]);
    }

    public function productList()
    {
        //categories without medical-appliances
        $categories = Category::where('id','!=','11')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        $products = Product::paginate(9);
        return view('front.productlist',compact('products','categories','brands','topadds'));
    }

    public function aboutus()
    {
        $products = Product::paginate(50);
        //categories without medical-appliances
        $categories = Category::where('id','!=','11')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        return view('front.about-us',compact('categories','products','brands','topadds'));
    }


    public function categoriesPage()
    {
        // $products = Product::paginate(50);
        //categories without medical-appliances
        $categories = Category::where('id','!=','11')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        return view('front.categoriesPage',compact('categories','brands','topadds'));
    }

    public function categorylist()
    {
        // return "hii";
        // $products = Product::paginate(50);
        //categories without medical-appliances
        $categories = Category::all();
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        return view('front.categories',compact('categories','brands','topadds'));
    }

    //Accessories List view
    public function accessoriesList()
    {
        $accessories = Product::where('accessory', 'Yes')->get();
        $categories = Category::all();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        $products = Product::paginate(9);
        // dd($accessories);
        return view('front.accessorieslist',compact('accessories','categories','brands','topadds','products'));
    }



    public function emergency()
    {
        return view('front.emergency');
    }

    public function allHospitals(Request $request)
    {
        if($request->city_id && $request->city_id!="null"){
            $hospitals = Hospital::with('city')->where('city_id',$request->city_id)->paginate(12);
        }else{
            $hospitals = Hospital::with('city')->paginate(12);
        }
        $cities = City::select('id','name')->get();
        $departments = Department::all();
        return view('front.pages.hospitallist',compact('hospitals','cities','departments'));
    }

    public function applyHealthPartner(Request $request)
    {
        // return response(['status'=>true,'message'=>'You have successfully applied for Health Partner. Please await for admin approval']);
      $this->validate($request,[
            'health_partner_name'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'email'=>'unique:users|required',
            'city_id'=>'required',
            'address'=>'required',
            // 'partner_type'=>'required',
            'document'=>'required|mimes:jpg,jpeg,png,bmp,doc,docx,xls,xlsx,pdf,ppt',
        ]);

        try{
            DB::beginTransaction();
            $user = new User;
            $user->name = $request->first_name.' '.$request->last_name;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->phone_no = $request->phone;
            $user->login_type = 1;
            $user->usertype = 4;
            $user->save();
            $user->assignRole('Hospital');

            $healthPartner = new Hospital();
            $healthPartner->user_id = $user->id;
            $healthPartner->name = $request->health_partner_name;
            $healthPartner->slug = Str::slug($request->health_partner_name);
            $healthPartner->first_name = $request->first_name;
            $healthPartner->last_name = $request->last_name;
            $healthPartner->phone = $request->phone;
            $healthPartner->email = $request->email;
            $healthPartner->password = Hash::make($request->password);
            $healthPartner->city_id = $request->city_id;
            $healthPartner->address = $request->address;
            $healthPartner->department_ids = null;
            $healthPartner->facility_ids = null;

            $healthPartner->partner_type = $request->partner_type;
            if ($request->file('document')) {
                $fileName = time() . '_' . $request->file('document')->getClientOriginalName();
                $filePath = $request->file('document')->storeAs('uploads/healthpartner', $fileName, 'public');
                $imagePath =  '/storage/uploads/healthpartner/' . $fileName;
                $healthPartner->document = $imagePath;
            }
            if ($request->file('logo')) {
                $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $filePath = $request->file('logo')->storeAs('uploads/hospital', $fileName, 'public');
                $logoImagePath =  '/storage/uploads/hospital/' . $fileName;
                $healthPartner->logo = $logoImagePath;
            }

            $healthPartner->save();

            QuickNotification::create([
                'title'=>'New Health Parter',
                'detail'=>$healthPartner->name.' Requested',
                'date_time'=>date('Y-m-d H:i:s'),
                'status'=>0,
                'module'=>'hospital',
                'module_id'=>$healthPartner->id
            ]);

            // Mail::send('email.newhealthpartner', ['healthPartner' => $healthPartner], function ($message) use ($healthPartner) {
            //     $message->to(env('MAIL_ADMIN'), $healthPartner->name)->subject(__("Health Partner has been applied"))->from(env('MAIL_USERNAME'));
            // });


            DB::commit();
            return response(['status'=>true,'message'=>'You have successfully applied for Health Partner. Please await for admin approval']);
        }catch(\Exception $e){
            DB::rollback();
            return response(['status'=>false,'message',$e->getMessage()]);
        }
    }

    public function applyDoctor(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'phone_no'=>'required|numeric|min:7',
            'email'=>'unique:users|required',
            'nmc'=>'required|max:255',
            'experience'=>'required',
            'department_id'=>'required',
            'qualification'=>'required',
            'work_type'=>'required',
        ]);

        try{
            DB::beginTransaction();
            $usd=new User();
            $usd->name=$request->get("name");
            $usd->email=$request->get("email");
            $usd->password=Hash::make($request->get("password"));
            $usd->phone_no=$request->get("phone_no");
            $usd->usertype='3';
            $usd->save();

            $usd->assignRole('Doctor');

            $doctor = new Doctor;
            $doctor->user_id = $usd->id;
            $doctor->name = $request->name;
            $doctor->phone_no = $request->phone_no;
            $doctor->email = $request->email;
            $doctor->nmc = $request->nmc;
            $doctor->experience = $request->experience;
            $doctor->department_id = $request->department_id;
            $doctor->qualification = $request->qualification;
            $doctor->work_type = $request->work_type;
            $doctor->city_id = $request->city_id;
            $doctor->status = "Pending";
            $doctor->save();
            DB::commit();

            QuickNotification::create([
                'title'=>'New Doctor Request',
                'detail'=>$doctor->name.' Requested',
                'date_time'=>date('Y-m-d H:i:s'),
                'status'=>0,
                'module'=>'doctor',
                'module_id'=>$doctor->id
            ]);

            Mail::send('email.newdoctor', ['doctor' => $doctor], function ($message) use ($doctor) {
                $message->to(env('MAIL_ADMIN'), $doctor->name)->subject(__("Doctor has applied"))->from(env('MAIL_USERNAME'));
            });

            return response(['status'=>true,'message'=>'You have applied for Doctor Successfully']);
        }catch(\Exception $e){
            DB::rollBack();
            return response(['status'=>false,'message',$e->getMessage()]);
        }
    }
//megha
    public function codConfirm(Request $request)
    {
        $this->validate($request,[
            'doctor_id'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]);
        //  return $request;
        $else_app =  Appointment::where("doc_id",$request->doctor_id)->where('time',$request->time)->where('date',$request->date)->count();
       if (Auth::check()) {
            $user_app = Appointment::where("doc_id", $request->doctor_id)
                ->where('time', $request->time)
                ->where('date', $request->date)
                // ->where('user_id', Auth::user()->id)
                ->count();
                // return $user_app;
            // if (!$user_app) {
            //     return 'hy';
            //     return back()->with(['message_err' => "You should login first!"]);

            // }
        } else {
            return back()->with(['message_err' => "You should login first!"]);
        }
        //a user can book multiple appointment
        // if($user_app != 0 && $else_app != 0){
        //     return back()->with(['message_err'=>"You Cannot Appoint Again! 'Or' Doctor Has Been Taken !"]);
        // }

        //there is nothing like token while booking service
        // $tokenCount = TimeTable::where("id",$request->time_table_id)->where('date',$request->date)->get("token")->first();
        // if($tokenCount){
        //     $tokenCountMinus = $tokenCount->token - 1 ;
        //     if($tokenCountMinus > 0){
        //         $timetable = TimeTable::find($request->time_table_id);
        //         $timetable->update([
        //             "token" =>  $tokenCountMinus
        //             ]);
        //     }
        //     else{
        //         return back()->with(['message'=>'Appointment couldnot be confirmed. Sorry!',"confirmed"=>"false"]);
        //     }
        // }
        // else{
        //     return back()->with(['message'=>'Something went wrong',"confirmed"=>"false"]);
        // }

        $doctor =  Doctor::findOrFail($request->doctor_id);
        $department = $doctor->department;
        // $patient = Patient::findOrFail($request->patient_id);
        $appointment = new Appointment();
        $appointment->department_id = $doctor->department_id;
        $appointment->doc_id = $doctor->id;
        if($doctor->hospital_id)
            $appointment->hospital_id = $doctor->hospital_id;
        $appointment->user_id = auth()->user()->id;
        // $appointment->name = $patient->first_name . ' '. $patient->last_name;
        // $appointment->phone_no = $patient->phone;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->status = 1;
        // $appointment->patient_id = $request->patient_id;
        $appointment->payment_method = $request->payment_method;
        $appointment->save();

        QuickNotification::create([
            'title'=>'New Appointment Request',
            'detail'=>$appointment->name.' Requested',
            'date_time'=>date('Y-m-d H:i:s'),
            'status'=>0,
            'module'=>'appointment',
            'module_id'=>$appointment->id
        ]);
        // Mail::send('email.newappointment', ['appointment' => $appointment,'doctor'=>$doctor], function ($message) use ($appointment) {
        //     $message->to(env('MAIL_ADMIN'), $appointment->name)->subject(__("New Appointment request"))->from(env('MAIL_USERNAME'));
        // });

        QuickNotification::create([
            'title'=>'New Appointment Request',
            'detail'=>$appointment->name.' Requested',
            'date_time'=>date('Y-m-d H:i:s'),
            'status'=>0,
            'module'=>'appointment',
            'module_id'=>$appointment->id,
            'reader_id'=>$appointment->doc_id,
        ]);

        // Mail::send('email.newappointment', ['appointment' => $appointment,'patient'=>$patient,'doctor'=>$doctor], function ($message) use ($doctor,$appointment) {
        //     $message->to($doctor->email, $appointment->name)->subject(__("New Appointment request"))->from(env('MAIL_USERNAME'));
        // });

        // Mail::send('email.customerappointment', ['appointment' => $appointment,'patient'=>$patient,'doctor'=>$doctor], function ($message) use ($doctor,$appointment) {
        //     $message->to(auth()->user()->email, $appointment->name)->subject(__("Appointment request submitted"))->from(env('MAIL_USERNAME'));
        // });


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

            // Mail::send('email.newappointment', ['appointment' => $appointment,'patient'=>$patient,'doctor'=>$doctor], function ($message) use ($hospital,$appointment) {
            //     $message->to($hospital->email, $appointment->name)->subject(__("New Appointment request"))->from(env('MAIL_USERNAME'));
            // });
        }

        return redirect()->back()->with([
            'message'=>'Service booked successfully',
            "confirmed"=>"true",
            "appointment_id"=>$appointment->id,
            "date" => $request->date,
            "time" => $request->time,
            "doctor" => $doctor,
            "department"=>$department,
        ]);
    }

    public function patientView(Request $request)
    {
        $patient = Patient::whereId($request->id)->where('user_id',auth()->user()->id)->first();
        if(!$patient)
            return response(['status'=>false,'data'=>'Patient not found']);
        $view = view('front.ajaxpages.patient_detail',compact('patient'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function orderView(Request $request)
    {
        $order = Order::whereId($request->id)->first();
        if(!$order)
            return response(['status'=>false,'data'=>'Order not found']);
        $view = view('front.ajaxpages.order_detail',compact('order'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function patientEdit(Request $request)
    {
        $patient = Patient::whereId($request->id)->first();
        $view = view('front.ajaxpages.patient_edit',compact('patient'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function patientUpdate(Request $request)
    {
        $patient = Patient::whereId($request->id)->where('user_id',auth()->user()->id)->first();
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->age = $request->age;
        $patient->phone = $request->phone;
        $patient->email = $request->email;
        $patient->dob = $request->dob;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->save();
        return redirect()->back()->with('message','Patient Updated Successfully');
    }

    public function doctorProfile(Request $request)
    {
        $doctor = Doctor::with('department')->whereId($request->id)->first();
        $view = view('front.ajaxpages.doctor_detail',compact('doctor'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function addCodSubscription(Request $request)
    {
        if(auth()->user()){
            $userId=auth()->user()->id;
            $package = Package::whereId($request->subscription_id)->firstOrFail();
            //checking if user has already got that package
            $findUserSubscription=Subscription::where('user_id',$userId)->where('package_id', $package->id)->where('subscription_status','active')->get();
            if($findUserSubscription->count() > 0){
                 return redirect()->intended('/')->with('message_err','You have already purchased the subscription');
            }else{
            $subscription = new Subscription();
            $subscription->user_id = auth()->user()->id;
            $subscription->package_id = $package->id;
            $subscription->name = $package->name;
            $subscription->payment_type = 3;
            $subscription->amount = $package->price;
            $subscription->date = date('Y-m-d');
            $subscription->time = date('H:i:s');
            $subscription->status = 1;
            $subscription->save();
            }
            return redirect()->intended('/')->with('message','Subscription request has been submitted successfully');
        }else{
            session()->flash('subscription_id',$request->subscription_id);
            return redirect()->intended('/login');
        }
    }

    public function searchHospital(Request $request)
    {
        $name = $request->name;
        $hospitals = Hospital::where('name','LIKE',"%{$name}%");

        if($request->city_id){
            $hospitals =  $hospitals->where('city_id',$request->city_id);
        }
        $hospitals = $hospitals->get();
        $view = view('front.ajaxpages.hospitalList',compact('hospitals'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function searchDoctors(Request $request)
    {
        $name = $request->name;
        $doctors = Doctor::where('name','LIKE',"%{$name}%")->where("hospital_id",null)->get();
        $view = view('front.ajaxpages.doctorList',compact('doctors'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function searchDepartment(Request $request)
    {
        $name = $request->name;
        $hospital = Hospital::where('id',$request->hospital_id)->first();
        $departments = Department::where('name','LIKE',"%{$name}%")->whereIn('id',json_decode($hospital->department_ids))->get();
        $view = view('front.ajaxpages.departmentList',compact('departments','hospital'))->render();
        return response(['status'=>true,'data'=>$view]);
    }

    public function siteSearch(Request $request)
    {
        $search = $request->search;
        // $hospitalCount = Hospital::where('name','LIKE',"%{$search}%")->count();
        // $departmentCount = Department::where('name','LIKE',"%{$search}%")->count();
        // $doctorCount = Doctor::where('name','LIKE',"%{$search}%")->count();
        $productCount = Product::where('name','LIKE',"%{$search}%")->count();
        // $blogCount = Blog::where('title','LIKE',"%{$search}%")->count();


        // return view('front.sitesearch', compact('hospitals','departmentCount','doctorCount','productCount','blogCount'));

        // $hospitals = Hospital::where('name','LIKE',"%{$search}%")->get();
        // $departments = Department::where('name','LIKE',"%{$search}%")->get();
        // $doctors = Doctor::where('name','LIKE',"%{$search}%")->get();
        $products = Product::where('name','LIKE',"%{$search}%")->get();
        // $blogs = Blog::where('title','LIKE',"%{$search}%")->get();

        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();


        return view('front.sitesearch', compact('products','productCount','search','categories','brands','topadds'));
        // return view('front.sitesearch', compact('hospitals','departments','doctors','products','blogs'));
        // return view('front.sitesearch', compact('hospitals','departments','doctors','products','blogs',"hospitalCount",'departmentCount','doctorCount','productCount','blogCount','search','categories','brands'));
    }

    public function ajaxSiteSearch(Request $request){
        $searchType = $request->searchType;
        $searchText = $request->searchText;
        // if($searchType == "hospital"){
        //     $view = $this->searchSiteHospital($searchText);
        // }
        // if($searchType == "department"){
        //     $view = $this->searchSiteDepartment($searchText);
        // }
        // if($searchType == "doctor"){
        //     $view = $this->searchSiteDoctor($searchText);
        // }
        if($searchType == "product"){
            $view = $this->searchSiteProduct($searchText);
        }

        // if($searchType == "blog"){
        //     $view = $this->searchSiteBlog($searchText);
        // }
        // $hospitalCount = Hospital::where('name','LIKE',"%{$searchText}%")->count();
        // $doctorCount = Doctor::where('name','LIKE',"%{$searchText}%")->count();
        $productCount = Product::where('name','LIKE',"%{$searchText}%")->count();
        // $blogCount = Blog::where('title','LIKE',"%{$searchText}%")->count();
        // $departmentCount = Department::where('name','LIKE',"%{$searchText}%")->count();

        $brands = Bikebrand::all();
        $categories = Category::with('subCategory')->get();

        // return response(['status'=>true,'data'=>$view,'hospitalCount'=>$hospitalCount,'departmentCount'=>$departmentCount,'doctorCount'=>$doctorCount,'productCount'=>$productCount,'blogCount'=>$blogCount,'brands'=>$brands,'categories'=>$categories]);
        return response(['status'=>true,'data'=>$view,'productCount'=>$productCount]);
    }

    public function searchSiteHospital($searchText){
        $search = $searchText;
        $hospitals = Hospital::where('name','LIKE',"%{$search}%")->get();
        // return $hospitals;
        $view = view('front.ajaxsitesearch.hospital',compact('hospitals'))->render();
        return $view;
    }

    public function searchSiteDepartment($searchText){
        $search = $searchText;
        $departments = Department::where('name','LIKE',"%{$search}%")->get();
        $view = view('front.ajaxsitesearch.departments',compact('departments'))->render();
        return $view;
    }

    public function searchSiteDoctor($searchText){
        $search = $searchText;
        $doctors = Doctor::where('name','LIKE',"%{$search}%")->get();
        $doctorCount = $doctors->count();
        $departmentCount = Department::where('name','LIKE',"%{$search}%")->count();
        $hospitalCount = Hospital::where('name','LIKE',"%{$search}%")->count();
        $productCount = Product::where('name','LIKE',"%{$search}%")->count();
        $blogCount = Blog::where('title','LIKE',"%{$search}%")->count();
        $view = view('front.ajaxsitesearch.doctors',compact('doctors'))->render();
        return $view;
    }

    public function searchSiteProduct($searchText){
        // return $search = $searchText;
        $products = Product::where('name','LIKE',"%{$search}%")->get();
        $view = view('front.ajaxsitesearch.products',compact('products'))->render();
        return $view;
    }

    public function searchSiteBlog($searchText){
        $search = $searchText;
        $blogs = Blog::where('title','LIKE',"%{$search}%")->get();
        $view = view('front.ajaxsitesearch.blogs',compact('blogs'))->render();
        return $view;
    }

    public function blogDetail($slug)
    {
        $blog = Blog::whereSlug($slug)->firstOrFail();
        $blogs = Blog::where('id','!=',$blog->id)->orderBy('id','DESC')->limit(4)->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        $categories = Category::with('subCategory')->get();
        return view('front.blog_detail',compact('blog','blogs','brands','categories','topadds'));
    }

    public function medicalAppliances(){
        // getting products and subcategory  under medical appliances category

        $medicalAppliancesSubCategory = SubCategory::with('product')->where('category_id',11)->get();
        return view('front.medical-appliances',compact('medicalAppliancesSubCategory'));
    }


    public function becomeADoctor(){
        $departments = Department::all();
        return view('become-a-doctor',compact('departments'));
    }
    public function becomeAHealthPartner(){
        $cities = City::all();
        return view('become-a-health-partner',compact('cities'));
    }
    public function becomeASeller(){
        $cities = City::all();
        return view('become-a-seller',compact('cities'));
    }

    public function quoteStore(Request $request)
    {
        $quote = new Quote();
        $quote->name = $request->name;
        $quote->phone = $request->phone;
        $quote->email = $request->email;
        $quote->message = $request->message;
        $quote->product_id = $request->product_id;
        $quote->save();
        return redirect()->back()->with('success','Quote Added Successfully');
    }

    public function addToWishlist(Request $request)
    {
        if(auth()->user()){
            $product = Product::find($request->product_id);
            if(!$product)
                return response(['status'=>false,'message'=>'Product not found']);
            $wishlistExists = Wishlist::where('product_id',$product->id)->where('user_id',auth()->user()->id)->first();
            if($wishlistExists){
                return response(['status'=>false,'message'=>'This product is already added to Wishlist']);
            }
            $wishlist = new Wishlist();
            $wishlist->user_id = auth()->user()->id;
            $wishlist->product_id = $product->id;
            $wishlist->save();
            $wishlistCount = Wishlist::where('user_id',auth()->user()->id)->count();
            return response(['status'=>true,'message'=>'Product has been added to wishlist successfully','wishlistCount'=>$wishlistCount]);
        }else{
            return response(['status'=>false,'message'=>'Please login before you can add product to wishlist']);
        }

    }

    public function booking(Request $request)
    {
        $user = User::where("usertype", "3")->get();
        $cities = City::all();
        $hospitals = Hospital::all();
        $departments = Department::all();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        $categories = Category::with('subCategory')->get();
        $doctor = Doctor::with(['department', 'TimeTabledata'])->where('id', $request->id)->first();
        // ->when($request->id, function ($query) use ($request) {
        //     return $query->where('id', $request->id);
        // })
        // // ->when($request->department_id, function ($query) use ($request) {
        //     return $query->where('department_id', $request->department_id);
        // });
        // $doctorsCount = $doctors->count();
        // $pages = ceil($doctorsCount/8);
        // $doctors = $doctors->limit(8)->get();
        $setting = Setting::find(1);
        $timeTables = 1;
        // $timeTables = $this->getTimeTable($doctor->id);
        // return $timeTables;
        // dd($doctor);
        return view("booking", compact('departments', 'doctor', 'cities', 'hospitals','setting','user','timeTables','brands','categories','topadds'));
    }

}
