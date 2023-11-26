<?php

namespace App\Http\Controllers\API;


use App\User;
use App\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    public function index()
    {
        $prescription = Prescription::where('user_id',auth()->user()->id)->get();
        return response(['status'=>true,'data'=>$prescription]);
    }

    public function store(Request $request)
    {
        // return $request;
        $prescription = new Prescription();
        /*****  old one ******/
            // if(auth()->user()){
            //     $user = User::where('id',auth()->user()->id)->first();
            //     $prescription->name = auth()->user()->name;
            //     $prescription->mobile = $user->phone_no;
            //     $prescription->user_id = auth()->user()->id;
            // }else{
            //     $prescription->name = $request->name;
            //     $prescription->mobile = $request->mobile;
            // }
        /*****  old one ******/
        
        /*****  new one ******/
            $prescription->name = $request->name;
            $prescription->mobile = $request->mobile;
            $prescription->message = $request->message;
            $prescription->delivery_address = $request->delivery_address;
        /*****  new one ******/
        
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
        return response([ 'status'=>true,'message'=>'Prescription Uploaded Successfully.','data'=>$prescription]);
    }
}