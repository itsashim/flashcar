<?php

namespace App\Http\Controllers;

use App\PageCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PageCategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:page-category-view', ['only' => ['index','show']]);
         $this->middleware('permission:page-category-create', ['only' => ['create','store']]);
         $this->middleware('permission:page-category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:page-category-delete', ['only' => ['destroy']]);
    }
     
    public function index()
    {
        $pageCategories = PageCategory::all();
        return view('admin.page_category.index',compact('pageCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pageCategory = new PageCategory();
        $pageCategory->name = $request->name;
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
        return redirect()->route('page-category.index')->with('message','Page Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageCategory  $pageCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PageCategory $pageCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageCategory  $pageCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PageCategory $pageCategory)
    {
        return view('admin.page_category.edit',compact('pageCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageCategory  $pageCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageCategory $pageCategory)
    {
        $pageCategory->name = $request->name;
        $pageCategory->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/page_category/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/page_category/image/' . $fileName;
            $pageCategory->image = $imagePath;
        }
        $pageCategory->save();
        return redirect()->route('page_category.index')->with('message','Page Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageCategory  $pageCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageCategory $pageCategory)
    {
        $pageCategory->delete();
        return redirect()->route('page_category.index')->with('message','Page Category Deleted Successfully');
    }
}
