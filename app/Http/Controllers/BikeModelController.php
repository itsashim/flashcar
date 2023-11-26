<?php

namespace App\Http\Controllers;

use App\Model\Bikebrand;
use App\Model\Bikemodel;
use App\Model\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BikeModelController extends Controller
{

    function __construct()
    {
        //  $this->middleware('permission:sub-category-view', ['only' => ['index','show']]);
        //  $this->middleware('permission:sub-category-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:sub-category-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:sub-category-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $subcategories = Bikemodel::with('bikebrand')->get();
        return view('admin.bike_model.index', compact('subcategories'));
    }

    public function create()
    {
        $categories = Bikebrand::all();
        return view('admin.bike_model.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $subCategory = new Bikemodel();
        $subCategory->name = $request->name;
        $subCategory->bikebrand_id = $request->bikebrand_id;
        $subCategory->slug = Str::slug($request->name);
        if ($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/model', $fileName, 'public');
            $imagePath =  '/storage/uploads/model/' . $fileName;
        } else {
            $imagePath = '';
        }
        $subCategory->logo_path = $imagePath;

        // dd($subCategory);
        $subCategory->save();
        return redirect()->route('bikemodel.index')->with('message', 'Bike Model Added Successfully');
    }

    public function edit(Bikemodel $bikemodel)
    {
        $categories = Bikebrand::all();
        return view('admin.bike_model.edit', compact('categories', 'bikemodel'));
    }

    public function update(Request $request, Bikemodel $bikemodel)
    {
        $bikemodel->name = $request->name;
        $bikemodel->slug = Str::slug($request->name);
        $bikemodel->bikebrand_id = $request->bikebrand_id;
        if ($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/model', $fileName, 'public');
            $imagePath =  '/storage/uploads/model/' . $fileName;
            $bikemodel->logo_path = $imagePath;
        }
        $bikemodel->save();
        return redirect()->route('bikemodel.index')->with('message', 'Bike Model Updated Successfully');
    }

    public function destroy(Bikemodel $bikemodel)
    {
        $bikemodel->delete();
        return redirect()->route('bikemodel.index')->with('message', 'Bike Model Deleted Successfully');
    }

    public function getSubCategories(Request $request)
    {
        if ($request->sub_category_id) {
            $sub_category_id = $request->sub_category_id;
        } else {
            $sub_category_id = false;
        }
        $subCategories = SubCategory::where('category_id', $request->category_id)->get();
        return response(['status' => true, 'data' => $subCategories, 'sub_category_id' => $sub_category_id]);
    }

    public function productlist($slug)
    {
        $sCategory = SubCategory::where('slug', $slug)->firstOrFail();
        $category = Category::where('id', $sCategory->category_id)->first();
        $subCategories = SubCategory::where('category_id', $category->id)->get();
        $products = Product::where('sub_category_id', $sCategory->id)->paginate(9);
        $categories = Category::all();
        return view('front.productlist', compact('category', 'products', 'categories', 'subCategories', 'sCategory'));
    }

    public function filterData(Request $request)
    {
        $ids = array_map('intval', $request->bikebrand_id);

        $datas = Bikemodel::whereIn('bikebrand_id', $ids)->get(['id', 'name']);

        return response(['status' => true, 'data' => $datas]);
    }
}
