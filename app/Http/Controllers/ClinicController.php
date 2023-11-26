<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use App\Hospital;
use App\HospitalGallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClinicController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:clinic-view', ['only' => ['index','show']]);
         $this->middleware('permission:clinic-create', ['only' => ['create','store']]);
         $this->middleware('permission:clinic-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:clinic-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = Hospital::where('type','clinic')->get();
        return view('admin.clinic.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::orderBy('name','ASC')->get();
        return view('admin.clinic.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone_no = $request->phone;
        $user->login_type = 1;
        $user->usertype = 4;
        $user->save();

        $hospital = new Hospital;
        $hospital->type = 'clinic';
        $hospital->slug = Str::slug($request->name);
        $hospital->user_id = $user->id;
        $hospital->name = $request->name;
        $hospital->first_name = $request->first_name;
        $hospital->last_name = $request->last_name;
        $hospital->city_id = $request->city_id;
        $hospital->phone = $request->phone;
        $hospital->address = $request->address;
        $hospital->email = $request->email;
        $hospital->detail = $request->detail;
        $hospital->password = Hash::make($request->password);
        if ($request->file('logo')) {
            $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads/hospital/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/hospital/image/' . $fileName;
        } else {
            $imagePath = '';
        }

        $user->assignRole('Clinic');
        
        $hospital->logo = $imagePath;
        $hospital->save();
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
        return redirect()->route('hospital.index')->with('message','Clinic Added Successfully');
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
    public function edit(Hospital $hospital)
    {
        $cities = City::orderBy('name','ASC')->get();
        $hospitalGalleries = HospitalGallery::where('hospital_id',$hospital->id)->get();
        return view('admin.hospital.edit',compact('hospital','cities','hospitalGalleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        $user = User::where('id',$hospital->user_id)->firstOrFail();
        $user->name = $request->name;
        if($request->password)
            $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone_no = $request->phone;
        $user->save();

        $hospital->name = $request->name;
        $hospital->type = 'clinic';
        $hospital->slug = Str::slug($request->name);
        $hospital->city_id = $request->city_id;
        $hospital->phone = $request->phone;
        $hospital->address = $request->address;
        $hospital->email = $request->email;
        $hospital->detail = $request->detail;
        if($request->password)
            $hospital->password = Hash::make($request->password);
        if ($request->file('logo')) {
            $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads/hospital/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/hospital/image/' . $fileName;
        } else {
            $imagePath = '';
        }
        
        $hospital->logo = $imagePath;
        $hospital->save();
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
        return redirect()->route('hospital.index')->with('message','Clinic Added Successfully');
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
        return redirect()->route('hospital.index')->with('message','Clinic Added Successfully');
    }
    
}
