<?php

namespace App\Http\Controllers\API;

use App\Quote;
use App\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::where('user_id',auth()->user()->id)->get();
        return response(['status'=>true,'data'=>$quotes]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'product_id'=>'required',
            'message' => 'required',
        ]);
        $quote = new Quote();
        $quote->name = auth()->user()->name;
        $quote->phone = auth()->user()->phone_no;
        $quote->email = auth()->user()->email;
        $quote->message = $request->message;
        $quote->product_id = $request->product_id;
        $quote->user_id = auth()->user()->id;
        $quote->save();
        return response([ 'status'=>true,'message'=>'Quote saved Successfully.','data'=>$quote]);
    }
    
    public function publicStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable',
            'product_id'=>'required',
            'message' => 'required',
        ]);
        $quote = new Quote();
        $quote->name = $request->name;
        $quote->phone = $request->phone;
        $quote->email = $request->email;
        $quote->message = $request->message;
        $quote->product_id = $request->product_id;
        $quote->save();
        return response([ 'status'=>true,'message'=>'Quote saved Successfully.','data'=>$quote]);
    }
}