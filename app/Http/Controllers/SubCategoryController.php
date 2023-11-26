<?php

namespace App\Http\Controllers;

use App\Model\Bikebrand;
use App\Product;
use App\Model\Adds;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class SubCategoryController extends Controller
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
        $subcategories = SubCategory::with('category')->get();
        return view('admin.subcategories.index',compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategories.create',compact('categories'));
    }
    
    public function store(Request $request)
    {
        $subCategory = new SubCategory();
        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category_id;
        $subCategory->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/subcategory/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/subcategory/image/' . $fileName;
        } else {
            $imagePath = '';
        }
        $subCategory->image = $imagePath;
        $subCategory->save();
        return redirect()->route('sub-category.index')->with('message','Category Added Successfully');
    }

    public function edit(SubCategory $subCategory){
        $categories = Category::all();
        return view('admin.subcategories.edit',compact('categories','subCategory'));
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->category_id = $request->category_id;
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/subcategory/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/subcategory/image/' . $fileName;
            $subCategory->image= $imagePath;
        }
        $subCategory->save();
        return redirect()->route('sub-category.index')->with('message','Category Updated Successfully');
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('sub-category.index')->with('message','Category Deleted Successfully');
    }

    public function getSubCategories(Request $request)
    {
        if($request->sub_category_id){
            $sub_category_id = $request->sub_category_id;
        }else{
            $sub_category_id = false;
        }
        $subCategories = SubCategory::where('category_id',$request->category_id)->get();
        return response(['status'=>true,'data'=>$subCategories,'sub_category_id'=>$sub_category_id]);
    }

    public function productlist($slug)
    {
        $sCategory = SubCategory::where('slug',$slug)->firstOrFail();
        $category = Category::where('id',$sCategory->category_id)->first();
        $subCategories = SubCategory::where('category_id',$category->id)->get();        
        $products = Product::where('sub_category_id',$sCategory->id)->paginate(9);
        $categories = Category::all();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view('front.productlist',compact('brands','category','products','categories','subCategories','sCategory', 'topadds'));
    }
}