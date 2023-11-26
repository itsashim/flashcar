<?php

namespace App\Http\Controllers\API;

use App\Model\Bluebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BluebookController extends Controller
{
   public function bluebooksubmit(Request $request)
   {

       // return "helo";

       // dd($request);
       $rules = [
           'name' => 'required',
           'phone' => 'required', // Adjust the max length as needed
           'date' => 'required',
           'vehicle_type' => 'required',
           'vehicle_name' => 'required',
           'vehicle_reg_no' => 'required', // Adjust the max length as needed
           'vehicle_engine' => 'required',
           'pickup_address' => 'required',
           'insurance' => 'required',
           'bluebook_qty' => 'required',
           'service_charge' => 'required',
       ];

       // Create a validator instance
       $validator = Validator::make($request->all(), $rules);

       // Check if the validation fails
       if ($validator->fails()) {
        // dd('lol');
           // If validation fails, redirect back with errors
        return response([ 'status'=>true,'message'=>'Bluebook Data Enter Successfully.','validator'=>$validator->messages()]);
           // return redirect()->back()->withErrors($validator)->withInput();
       }


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
       
       // Session::flash('message', __('Bluebook Data Enter Successfully'));
       // Session::flash('alert-class', 'alert-success');
       // return redirect()->back();

       return response([ 'status'=>true,'message'=>'Bluebook Data Enter Successfully.','data'=>$bluebook]);
   }

   
}