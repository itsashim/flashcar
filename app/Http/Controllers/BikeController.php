<?php

namespace App\Http\Controllers;

use App\Category;
use App\Model\Bike;
use App\Model\Bikebrand;
use App\Model\Bikemodel;
use App\Product;
use App\SubCategory;
use App\Model\BikeSell;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BikeController extends Controller
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
        // dd($request);
        $bike = new Bike;
        $bike->bikebrand_id = $request->bikebrand_id;
        $bike->bikemodel_id = $request->bikemodel_id;
        $bike->color = $request->color;
        $bike->user_id = $request->user_id;
        $bike->register_no = $request->register_no;

        if($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/bike', $fileName, 'public');
            $imagePath =  '/storage/uploads/bike/' . $fileName;
        } else {
            $imagePath = '';
        }
        $bike->logo_path = $imagePath;
        $bike->save();

        $bikesell = new BikeSell;
        $bikesell->bike_id = $bike->id;
        $bikesell->user_id = $request->user_id;
        $bikesell->bike_no = $request->bike_no;
        $bikesell->bike_for = 'Maintainance';
        $bikesell->save();

        return redirect()->back()->with('message','Bike Added Successfully');
    }

    public function edit(Bikebrand $bikebrand){
        // dd($bikebrand);
        // return $bikebrand;
        return view('admin.bike_brand.edit',compact('bikebrand'));
    }

    public function update(Request $request, Bikebrand $bikebrand)
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

    public function destroy(Bikebrand $bikebrand)
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

    public function getFilterBikeModelList(Request $request)
    {


        $ids = $request->bikebrand_id;

        $datas = Bikemodel::where('bikebrand_id', $ids)->get(['id', 'name']);

        return response(['status' => true, 'data' => $datas]);
    }
}
