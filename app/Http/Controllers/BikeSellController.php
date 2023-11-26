<?php

namespace App\Http\Controllers;

use App\Category;
use App\Model\Bike;
use App\Model\BikeSell;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class BikeSellController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:category-view', ['only' => ['index','show']]);
        //  $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $categories = Bike::all();
        return view('admin.bike.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.bike_brand.create');
    }
    
    public function store(Request $request)
    {

        $bike_data = BikeSell::where('bike_id',$request->bike_id)->value('id');
        $bikesell = BikeSell::findOrFail($bike_data);

        // dd($request);
        $bikesell->name = $request->bike_id;
        $bikesell->user_id = Auth::user()->id;
        $bikesell->bike_id = $request->bike_id;
        $bikesell->description = $request->description;
        $bikesell->price = $request->price;
        $bikesell->ownership = $request->ownership;
        $bikesell->bike_condition = $request->bike_condition;
        $bikesell->bike_for = 'Maintainance';
        $bikesell->year = $request->year;
        $bikesell->mileage = $request->mileage;
        $bikesell->run_km = $request->run_km;
        $bikesell->feature = json_encode($request->feature);
        $bikesell->phone = $request->phone;
        $bikesell->tax_cleared = $request->tax_cleared;
        // $bikesell->bike_no = '3';
        $bikesell->save();

        return redirect()->back()->with('message','Bike Brand Added Successfully');
    }


    public function sellStatus(Request $request){
     
        $bikesell_id = BikeSell::where('bike_id',$request->bike_id)->value('id');
        $bikesell = BikeSell::findOrFail($bikesell_id);
      
        $bikesell->bike_for = 'Sale';
        $bikesell->save();
    
        return back();
    }

    public function edit(BikeSell $bikebrand){
        // dd($bikebrand);
        // return $bikebrand;
        return view('admin.bike_brand.edit',compact('bikebrand'));
    }

    public function update(Request $request, BikeSell $bikebrand)
    {

       
        $bikebrand->name = $request->name;
        $bikebrand->slug = Str::slug($request->name);
        if ($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/brand', $fileName, 'public');
            $imagePath =  '/storage/uploads/brand/' . $fileName;
            $bikebrand->logo_path = $imagePath;
        }
        $bikebrand->save();
        // dd($bikebrand);
        return redirect()->route('bikebrand.index')->with('message','Bike Brand Updated Successfully');
    }

    public function destroy(BikeSell $bikebrand)
    {
        
        $bikebrand->delete();
        return redirect()->route('bikebrand.index')->with('message','Category Deleted Successfully');
    }

    public function productList($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug',$slug)->firstOrFail();
        if($category){
            $subCategories = SubCategory::where('category_id',$category->id)->get();
            $products = Product::where('category_id',$category->id)->paginate(9);
        }else{
            $products = Product::paginate(6);
        }
        return view('front.productlist',compact('category','products','categories','subCategories'));
    }
}
