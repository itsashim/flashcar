<?php

namespace App\Http\Controllers\API;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function patientRegister(Request $request)
    {
        if(auth()->user() && auth()->user()->hasRole("Customer")){
            $this->validate($request,[
                'first_name'=>'required',
                'last_name'=>'required',
                'age'=>'required',
                'gender'=>'required',
                'location'=>'required',
                'relation'=>'required',
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
            $patient->address = $request->address;
            $patient->user_id = auth()->user()->id;
            $patient->save();
            return response(['status'=>true,'data'=>$patient,'message'=>'Patient Added Successfully']);
        }
    }

    public function patientDetail(Request $request)
    {
        $patient = Patient::whereId($request->id)->first();
        if(!$patient){
            return response(['status'=>false,'message'=>'No patient Found']);
        }
        return response(['status'=>true,'data'=>$patient]);
    }

    public function patientUpdate(Request $request)
    {
        $patient = Patient::whereId($request->id)->where('user_id',auth()->user()->id)->first();
        if(!$patient)
            return response(['status'=>false,'message'=>'Patient not found']);
        if($request->first_name)
            $patient->first_name = $request->first_name;
        if($request->last_name)
            $patient->last_name = $request->last_name;
        if($request->age)
            $patient->age = $request->age;
        if($request->phone)
            $patient->phone = $request->phone;
        if($request->email)
            $patient->email = $request->email;
        if($request->dob)
            $patient->dob = $request->dob;
        if($request->gender)
            $patient->gender = $request->gender;
        if($request->location)
            $patient->location = $request->location;
        if($request->address)
            $patient->address = $request->address;
        $patient->save();
        return response(['status'=>true,'data'=>$patient,'message'=>'Patient Updated Successfully']);
    }
}
