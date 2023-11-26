<?php

namespace App\Http\Controllers;

use App\User;
use App\Seller;
use App\AppliedSeller;
use App\Model\QuickNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AppliedSellerController extends Controller
{
    // function __construct()
    // {
        //  $this->middleware('permission:seller-view', ['only' => ['index','show']]);
        //  $this->middleware('permission:seller-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:seller-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:seller-delete', ['only' => ['destroy']]);
    // }
    
    public function index()
    {
        $data =AppliedSeller::orderBy('id','DESC')->get();
        return view('admin.applied-seller.index',compact('data'));
    }

    public function approveNow(Request $request)
    {
        $appliedSeller = AppliedSeller::find($request->id);
        if(!isset($appliedSeller)){
           $appliedSeller = Seller::find($request->id);
           $appliedSeller->update([
                "status"=>"Disabled",
               ]);
            return ["status"=>true,"message"=>"Seller Approved"];
        }
        else{
            try{
            //$appliedSeller = AppliedSeller::findOrFail($request->id);
            DB::beginTransaction();

                $user = User::where('email',$appliedSeller->email)->first();
                if($user)
                    return response(['status'=>false,'message'=>'Applied Seller with this email been already registered']);
                $user = User::where('phone_no',$appliedSeller->phone)->first();
                if($user)
                    return response(['status'=>false,'message'=>'Applied Seller with this phone been already registered']);
                
                $user = new User;
                $user->name       = $appliedSeller->name;
                $user->password   = $appliedSeller->password;
                $user->email      = $appliedSeller->email;
                $user->phone_no   = $appliedSeller->phone;
                $user->login_type = 1;
                $user->usertype   = 5;
                $user->save();
                
                $user->assignRole('Seller');

                $seller = new Seller;
                $seller->user_id = $user->id;
                $seller->name = $appliedSeller->name;
                $seller->email = $appliedSeller->email;
                $seller->phone = $appliedSeller->phone;
                $seller->address = $appliedSeller->address;
                $seller->image_path = $appliedSeller->image_path;
                $seller->city_ids = $appliedSeller->city_ids;
                $seller->status = "Approved";
                $seller->save();

                $appliedSeller->delete();

            DB::commit();
            return response(['status'=>true,'message'=>'Applied seller has been successfully approved']);
            }catch(\Exception $e){
                DB::rollback();
                return response(['status'=>false,'message'=>$e->getMessage()]);
            }

        }
    }

    public function rejectNow(Request $request)
    {
        $appliedSeller = AppliedSeller::findOrFail($request->id);
        $appliedSeller->delete();
        return response(['status'=>true,'message'=>'Applied Seller rejected successfully']); 
        try{
            DB::beginTransaction();
                $appliedSeller = AppliedSeller::find($request->id);
                if(!isset($appliedseller)){
                    $appliedSeller = Seller::find($request->id);
                }
                else{
                    $seller = new Seller;
                    //$seller->user_id = $user->id;
                    $seller->user_id = $request->id;
                    $seller->name = $appliedSeller->name;
                    $seller->email = $appliedSeller->email;
                    $seller->phone = $appliedSeller->phone;
                    $seller->address = $appliedSeller->address;
                    $seller->image_path = $appliedSeller->image_path;
                    $seller->city_ids = $appliedSeller->city_ids;
                    $seller->status = "Disabled";
                    $seller->save();
    
                    $appliedSeller->delete();
                }
                $appliedSeller->update([
                    "status"=>"Disabled",
                ]);
            DB::commit();
            return response(['status'=>true,'message'=>'Seller has been successfully rejected']);
            // return response(['status'=>true,'message'=>'Applied seller has been successfully rejected']);
        }catch(\Exception $e){
            DB::rollback();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }

        
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

    public function verifySeller($code)
    {
        $appliedSeller = AppliedSeller::where('code',$code)->where('email_verified',0)->firstOrFail();
        $appliedSeller->email_verified = 1;
        $appliedSeller->save();
        return view('front.email_verified');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'address'=>'required',
        ]);
        $seller = new AppliedSeller;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;
        $seller->address = $request->address;
        $code = rand(100000,999999);
        $seller->code = $code;
        $seller->password = Hash::make($request->password);
        $seller->city_ids = json_encode($request->city_ids);
        if ($request->file('image_path')) {
            $fileName = time() . '_' . $request->file('image_path')->getClientOriginalName();
            $filePath = $request->file('image_path')->storeAs('uploads/seller/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/seller/image/' . $fileName;
        } else {
            $imagePath = '';
        }
        $seller->image_path = $imagePath;
        $seller->save();
        Mail::send('email.verifyseller', ['code' => $code], function ($message) use ($seller) {
            $message->to($seller->email, $seller->name)->subject(__("Verify Seller"))->from(env('MAIL_USERNAME'));
        });
        Mail::send('email.newsellerapplied', ['seller' => $seller], function ($message) use ($seller) {
            $message->to(env('MAIL_ADMIN'), $seller->name)->subject(__("Seller has Applied"))->from(env('MAIL_USERNAME'));
        });
        QuickNotification::create([
            'title'=>'New Seller Request',
            'detail'=>$seller->name.' ('.$seller->phone.') has applied',
            'date_time'=>date('Y-m-d H:i:s'),
            'status'=>0,
            'module'=>'seller',
            'module_id'=>$seller->id
        ]);

        return redirect()->back()->with('message','Applied for Seller Account Successfully. Please check your email to verify email');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AppliedSeller  $appliedSeller
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appliedSeller = AppliedSeller::find($id);
        $title = "Applied Seller";
        if(!$appliedSeller)
        // if($appliedSeller->count() == 0)
        {
            $appliedSeller = Seller::find($id);
             $title = "Seller";
        }
        //return view('admin.applied-seller.show',compact('appliedSeller'));
        return view('admin.applied-seller.show',compact('appliedSeller',"title"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AppliedSeller  $appliedSeller
     * @return \Illuminate\Http\Response
     */
    public function edit(AppliedSeller $appliedSeller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppliedSeller  $appliedSeller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppliedSeller $appliedSeller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppliedSeller  $appliedSeller
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appliedSeller = Seller::find($id);
        
        $appliedSeller->delete();
        return redirect()->back()->with('message','Applied Seller Deleted Successfully');
    }
}
