<?php

namespace App\Http\Controllers;

use App\Category;
use App\Model\Bikebrand;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BikeBrandController extends Controller
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
        $categories = Bikebrand::all();
        return view('admin.bike_brand.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.bike_brand.create');
    }
    
    public function store(Request $request)
    {
        $category = new Bikebrand();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        if ($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/brand', $fileName, 'public');
            $imagePath =  '/storage/uploads/brand/' . $fileName;
        } else {
            $imagePath = '';
        }
        $category->logo_path = $imagePath;
        // dd($category);
        $category->save();
        return redirect()->route('bikebrand.index')->with('message','Bike Brand Added Successfully');
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
}
