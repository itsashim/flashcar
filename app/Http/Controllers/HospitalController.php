<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use App\Hospital;
use App\HospitalGallery;
use App\Model\Department;
use App\HospitalDepartment;
use App\HospitalFacility;
use App\Model\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class HospitalController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:hospital-view', ['only' => ['index','show']]);
        $this->middleware('permission:hospital-create', ['only' => ['create','store']]);
        $this->middleware('permission:hospital-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:hospital-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $cities = City::all();
        $data = Hospital::where('type','hospital')->get();
        return view('admin.hospital.index',compact('data',"cities"));
    }

    public function approvedHospital(Request $request)
    {
        $cities = City::all();
        $data = Hospital::when($request->city_id,function($q)use($request){
                                $q->where('city_id',$request->city_id);
                            })
                            ->where('type','hospital')
                            ->where('status','Approved')
                            ->get();
        return view('admin.hospital.index',compact('data','cities'));
    }
    
    public function pendingHospital(Request $request)
    {
        $cities = City::all();
        $data = Hospital::when($request->city_id,function($q)use($request){
                            $q->where('city_id',$request->city_id);
                        })
                        ->where('type','hospital')
                        ->where('status','Pending')
                        ->get();
        return view('admin.hospital.index',compact('data','cities'));
    }
    
    public function disabledHospital(Request $request)
    {
        $cities = City::all();
        $data = Hospital::when($request->city_id,function($q)use($request){
            $q->where('city_id',$request->city_id);
        })->where('type','hospital')->where('status','Disabled')->get();
        return view('admin.hospital.index',compact('data','cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::orderBy('name','ASC')->get();
        $departments = Department::all();
        $facilities = Service::all();
        return view('admin.hospital.create',compact('cities','departments','facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $name = $request->name;
        $parts = explode(" ",$name);
        $fname = $parts[0];
        if(isset($parts[1]))
        {
            $lname = $parts[1];
        }
        else{
            $lname = "-";
        }
    

    //   return [$name , $fname , $lname];
       
        $this->validate($request,[
            'name'=>'required',
            'password'=>'required|min:8',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'detail' => 'required',
            'sub_title' => 'required',
            'appointment_fee' => 'required',
            'status' => 'required',
            // 'logo'   => 'required',
            
        ]);

        try{
            
            DB::beginTransaction();
            $user = new User;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->phone_no = $request->phone;
            $user->login_type = 1;
            $user->usertype = 4;
            $user->save();

            $hospital = new Hospital;
            $hospital->slug = Str::slug($request->name);
            $hospital->user_id = $user->id;
            $hospital->name = $request->name;
            $hospital->first_name = $fname;
            $hospital->last_name = $lname;
            $hospital->city_id = $request->city_id;
            $hospital->phone = $request->phone;
            $hospital->address = $request->address;
            $hospital->email = $request->email;
            $hospital->detail = $request->detail;
            $hospital->sub_title = $request->sub_title;
            $hospital->password = Hash::make($request->password);
            if($request->department_ids=="null"){
                $hospital->department_ids = null;
            }else{
                $hospital->department_ids = json_encode($request->department_ids);
            }
            if($request->facility_ids == "null"){
                $hospital->facility_ids = null;
            }else{
                $hospital->facility_ids = json_encode($request->facility_ids);
            }
            $hospital->appointment_fee = $request->appointment_fee;
            $hospital->status = $request->status;
            $hospital->facebook_url = $request->facebook_url;
            $hospital->twitter_url = $request->twitter_url;
            $hospital->linkedin_url = $request->linkedin_url;
            $hospital->instagram_url = $request->instagram_url;
            if ($request->file('logo')) {
                $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $request->file('logo')->storeAs('uploads/hospital/image', $fileName, 'public');
                $imagePath =  '/storage/uploads/hospital/image/' . $fileName;
            } else {
                $imagePath = '';
            }

            $user->assignRole('Hospital');
            $hospital->logo = $imagePath;
            $hospital->save();
            
            if(count($request->department_ids)>0){
                foreach($request->department_ids as $department_id){
                    $hospitalDepartment = new HospitalDepartment;
                    $hospitalDepartment->hospital_id = $hospital->id;
                    $hospitalDepartment->department_id = $department_id;
                    $hospitalDepartment->save();
                }
            }
            
            // if(count($request->facility_ids)>0){
            
            //     foreach($request->facility_ids as $facility_id){
            //         $hospitalFacility = new HospitalFacility();
            //         $hospitalFacility->hospital_id = $hospital->id;
            //         $hospitalFacility->facility_id = $facility_id;
            //         $hospitalFacility->save();
            //     }
                
            // }

            if ($files = $request->file('gallery')) {
                foreach ($files as  $key => $file) {
                    $gallery = new HospitalGallery;
                    $name = time() . $file->getClientOriginalName();
                    $file->move('storage/app/public/uploads/hospital/galleries', $name);
                    $gallery->hospital_id = $hospital->id;
                    $gallery->image_path = 'uploads/hospital/galleries/' . $name;
                    $gallery->save();
                }
            }
            DB::commit();
            return redirect()->route('hospital.index')->with('message','Hospital Added Successfully');
        }catch(\Exception $e){
            DB::rollBack();
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $serviceProvider)
    {
        $cities = City::orderBy('name','ASC')->get();
        $departments = Department::all();
        $facilities = Service::all();
        $hospitalGalleries = HospitalGallery::where('hospital_id',$serviceProvider->id)->get();
        $hospital= $serviceProvider;
       
        return view('admin.hospital.edit',compact('hospital','cities','hospitalGalleries','departments','facilities'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $serviceProvider)
    {
    //   return $serviceProvider;
        $user = User::where('id', $serviceProvider->user_id)->firstOrFail();
        $user->name = $request->name;
        if($request->password)
            $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone_no = $request->phone;
        $user->save();

        $serviceProvider->name = $request->name;
        $serviceProvider->slug = Str::slug($request->name);
        $serviceProvider->city_id = $request->city_id;
        $serviceProvider->phone = $request->phone;
        $serviceProvider->address = $request->address;
        $serviceProvider->email = $request->email;
        $serviceProvider->detail = $request->detail;
        $serviceProvider->status = $request->status;
        $serviceProvider->facebook_url = $request->facebook_url;
        $serviceProvider->twitter_url = $request->twitter_url;
        $serviceProvider->linkedin_url = $request->linkedin_url;
        $serviceProvider->instagram_url = $request->instagram_url;
        if($request->password)
            $serviceProvider->password = Hash::make($request->password);
        if ($request->file('logo')) {
            $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads/hospital/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/hospital/image/' . $fileName;
            $serviceProvider->logo = $imagePath;
        }
        $serviceProvider->appointment_fee = $request->appointment_fee;
        if($request->facility_ids){
            $serviceProvider->facility_ids = json_encode($request->facility_ids);
        }else{
            $serviceProvider->facility_ids = null;
        }
        if($request->department_ids){
            $serviceProvider->department_ids = json_encode($request->department_ids);
        }else{
            $serviceProvider->department_ids = null;
        }
        
        $serviceProvider->status = $request->status?$request->status:$serviceProvider->status;
        
        $serviceProvider->save();
        DB::table('hospital_departments')->where('hospital_id',$serviceProvider->id)->delete();
        DB::table('hospital_facilities')->where('hospital_id',$serviceProvider->id)->delete();
        
        if(count((array)$request->department_ids)>0){
            foreach($request->department_ids as $department_id){
                $hospitalDepartment = new HospitalDepartment;
                $hospitalDepartment->hospital_id = $serviceProvider->id;
                $hospitalDepartment->department_id = $department_id;
                $hospitalDepartment->save();
            }
        }
        
        if(count((array)$request->facility_ids)>0){
            foreach($request->facility_ids as $facility_id){
                $hospitalFacility = new HospitalFacility();
                $hospitalFacility->hospital_id = $serviceProvider->id;
                $hospitalFacility->facility_id = $facility_id;
                $hospitalFacility->save();
            }
        }
        if ($files = $request->file('gallery')) {
            foreach ($files as  $key => $file) {

                $gallery = new HospitalGallery;
                $name = time() . $file->getClientOriginalName();
                $file->move('storage/app/public/uploads/hospital/galleries', $name);
                $gallery->hospital_id = $serviceProvider->id;
                $gallery->image_path = 'uploads/hospital/galleries/' . $name;
                $gallery->save();
            }
        }
        if(auth()->user()->usertype==4){
            return redirect()->back()->with('message','Hospital Updated successfully');
        }
        return redirect()->route('serviceProvider.index')->with('message','Service Provider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        $hospitalGalleries = HospitalGallery::where('hospital_id',$hospital->id)->get();
        foreach($hospitalGalleries as $hospitalGallery){
            $hospitalGallery->delete();
        }
        $hospital->delete();
        return redirect()->route('hospital.index')->with('message','Hospital Deleted Successfully');
    }
    
    public function removebanner(Request $request)
    {
        $hospitalGalleries = HospitalGallery::where('id',$request->img_data)->get();
        foreach($hospitalGalleries as $h) {
            $file_path = $h->image_path;
        }
    
        if (Storage::disk('public')->exists($file_path)) {
            Storage::disk('public')->delete('public/'.$file_path);
            HospitalGallery::find($request->img_data)->delete();
            return back()->with(["message" => "Image Deleted Successfully"]);
        } else {
            return back()->with(["message" => "File Not Found"]);
        }
    }
}
