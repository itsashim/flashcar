<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:seller-view', ['only' => ['index', 'show']]);
        $this->middleware('permission:seller-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:seller-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:seller-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = Seller::when($request->status,function($q)use($request){
                            $q->where('status',$request->status);
                        })
                        ->orderBy('id', 'DESC')->get();
        return view('admin.applied-seller.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seller.create');
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

        $user->assignRole('Seller');

        $seller = new Seller;
        $seller->user_id = $user->id;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;
        $seller->address = $request->address;
        $seller->city_ids = json_encode($request->city_ids);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/seller/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/seller/image/' . $fileName;
        } else {
            $imagePath = '';
        }
        $seller->image_path = $imagePath;
        $seller->save();
        return redirect()->route('seller.index')->with('message', 'Seller Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        $cities = City::all();
        return view('admin.seller.edit', compact('seller', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        $user = User::where('id', $seller->user_id)->firstOrFail();
        $user->name = $request->name;
        if ($request->password)
            $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone_no = $request->phone;
        $user->save();

        $user->assignRole('Seller');

        $seller->user_id = $user->id;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;
        $seller->address = $request->address;
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/seller/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/seller/image/' . $fileName;
            $seller->image_path = $imagePath;
        }
        $seller->save();

        return redirect()->route('seller.index')->with('message', 'Seller Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller = Seller::find($id);
        $seller->delete();
        return redirect()->route('seller.index')->with('message', 'Seller Deleted Successfully');
    }
}
