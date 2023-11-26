<?php

namespace App\Http\Controllers;

use App\User;
use App\Prescription;
use Illuminate\Http\Request;
use App\Model\QuickNotification;
use Illuminate\Support\Facades\Mail;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescription::all();
        return view('admin.prescription.index',compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()){
            $this->validate($request,[
                'message'=>'nullable',
                'delivery_address'=>'required',
                'path' => 'required|mimes:jpeg,png,jpg|max:5000',
            ]);
        }else{
            $this->validate($request,[
                'name'=>'required',
                'mobile'=>'required',
                'message'=>'nullable',
                'delivery_address'=>'required',
                'path' => 'required|mimes:jpeg,png,jpg|max:5000',
            ]);
        }
        $prescription = new Prescription();
        /********** Original Code *******************/
            // if(auth()->user()){
            //     $user = User::where('id',auth()->user()->id)->first();
            //     $prescription->name = auth()->user()->name;
            //     $prescription->mobile = $user->phone_no;
            //     $prescription->user_id = auth()->user()->id;
            //     // echo $prescription->user_id;
            // }else{
            //     $prescription->name = $request->name;
            //     $prescription->mobile = $request->mobile;
            //     // echo $prescription->mobile;
            // }
        /********** Original Code *******************/
        
        /*********** New One ***********************/
            $prescription->name = $request->name;
            $prescription->mobile = $request->mobile;
        /*********** New One ***********************/
        
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
        QuickNotification::create([
            'title'=>'New Prescription',
            'detail'=>$prescription->name.' Requested',
            'date_time'=>date('Y-m-d H:i:s'),
            'status'=>0,
            'module'=>'prescription',
            'module_id'=>$prescription->id
        ]);
        Mail::send('email.newprescription', ['prescription' => $prescription], function ($message) use ($prescription) {
            $message->to(env('MAIL_ADMIN'), $prescription->name)->subject(__("Prescription has been requested"))->from(env('MAIL_USERNAME'));
        });
        return redirect()->back()->with('message','Prescription Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prescription = Prescription::findOrFail($id);
        return view('admin.prescription.show',compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $prescription = Prescription::findOrFail($request->id);
        $prescription->delete();
        return redirect()->back()->with('message','Prescription Deleted Successfully');
    }

    public function appshow()
    {
        return view('front.pages.upload_prescription');
    }
}