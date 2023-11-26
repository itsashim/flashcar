<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use App\Model\Adds;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddsController extends Controller
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
        $topadds = Adds::find(1);
        // dd($topadds);
        return view('admin.topadds.index',compact('topadds'));
    }

    public function create()
    {
        return view('admin.topadds.create');
    }
    
    public function store(Request $request)
    {
        $topadds = Adds::find(1);
        $topadds -> name = $request -> name;

        $topadds -> Update();
        // dd($topadds);
        
        return redirect()->back()->with('adds','Adds Updated Successfully');
    }

    public function edit(Category $category){
        return view('admin.topadds.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/category/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/category/image/' . $fileName;
            $category->image = $imagePath;
        }
        $category->save();
        return redirect()->route('category.index')->with('message','Category Updated Successfully');
    }

    public function destroy(Category $category)
    {
        $subCategory = SubCategory::where('category_id',$category->id)->first();
        if($subCategory)
            return redirect()->route('category.index')->with('alert','Category Deleted Failed');
        $category->delete();
        return redirect()->route('category.index')->with('message','Category Deleted Successfully');
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
