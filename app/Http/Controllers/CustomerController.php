<?php

namespace App\Http\Controllers;

use App\City;

use App\User;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:seller-view', ['only' => ['index','show']]);
        //  $this->middleware('permission:seller-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:seller-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:seller-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = User::where('usertype',1)->orderBy('id','DESC')->get();
        return view('admin.customer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
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
        $user->usertype = 5;
        $user->save();
        
        $user->assignRole('Customer');

        // $seller = new Seller;
        // $seller->user_id = $user->id;
        // $seller->name = $request->name;
        // $seller->email = $request->email;
        // $seller->phone = $request->phone;
        // $seller->address = $request->address;
        // if ($request->file('image')) {
        //     $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
        //     $filePath = $request->file('image')->storeAs('uploads/seller/image', $fileName, 'public');
        //     $imagePath =  '/storage/uploads/seller/image/' . $fileName;
        // } else {
        //     $imagePath = '';
        // }
        // $seller->image_path = $imagePath;
        // $seller->save();
        return redirect()->route('customer.index')->with('message','User Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
         $data = Patient::where('user_id',$customer->id)->orderBy('id')->get();
        return view('admin.customer.show',compact('data'));
    }
 
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        $cities = City::all();
        return view('admin.customer.edit',compact('customer','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        if($request->password)
            $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone_no = $request->phone;
        $user->save();

        $user->assignRole('Customer');

        // $seller->user_id = $user->id;
        // $seller->name = $request->name;
        // $seller->email = $request->email;
        // $seller->phone = $request->phone;
        // $seller->address = $request->address;
        // if ($request->file('image')) {
        //     $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
        //     $filePath = $request->file('image')->storeAs('uploads/seller/image', $fileName, 'public');
        //     $imagePath =  '/storage/uploads/seller/image/' . $fileName;
        //     $seller->image_path = $imagePath;
        // }
        // $seller->save();
        
        return redirect()->route('customer.index')->with('message','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('customer.index')->with('message','User Deleted Successfully');
    }
}
