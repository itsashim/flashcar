<?php

namespace App\Http\Controllers;

use App\PageCategory;
use App\PageSubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PageSubCategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:page-sub-category-view', ['only' => ['index','show']]);
         $this->middleware('permission:page-sub-category-create', ['only' => ['create','store']]);
         $this->middleware('permission:page-sub-category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:page-sub-category-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $pageSubCategories = PageSubCategory::all();
        return view('admin.page_sub_category.index',compact('pageSubCategories'));
    }

    public function getPageSubCategories(Request $request)
    {
        $pageSubCategories = PageSubCategory::where('page_category_id',$request->id)->get();
        return response(['status'=>true,'data'=>$pageSubCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageCategories = PageCategory::all();
        return view('admin.page_sub_category.create',compact('pageCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pageCategory = new PageSubCategory();
        $pageCategory->name = $request->name;
        $pageCategory->page_category_id = $request->page_category_id;
        $pageCategory->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/page_category/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/page_category/image/' . $fileName;
        } else {
            $imagePath = '';
        }
        $pageCategory->image = $imagePath;
        $pageCategory->save();
        return redirect()->route('page-sub-category.index')->with('message','Page Sub Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageSubCategory  $pageSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PageSubCategory $pageSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageSubCategory  $pageSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PageSubCategory $pageSubCategory)
    {
        return view('admin.page_sub_category.edit',compact('pageSubCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageSubCategory  $pageSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageSubCategory $pageSubCategory)
    {
        $pageSubCategory->name = $request->name;
        $pageSubCategory->category_id = $request->category_id;
        $pageSubCategory->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/page_category/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/page_category/image/' . $fileName;
            $pageSubCategory->image = $imagePath;
        }
        $pageSubCategory->save();
        return redirect()->route('page_sub_category.index')->with('message','Page Sub Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageSubCategory  $pageSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageSubCategory $pageSubCategory)
    {
        $pageSubCategory->delete();
        return redirect()->route('page_sub_category.index')->with('message','Page Sub Category Deleted Successfully');
    }
}