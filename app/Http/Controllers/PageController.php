<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:page-view', ['only' => ['index','show']]);
         $this->middleware('permission:page-create', ['only' => ['create','store']]);
         $this->middleware('permission:page-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:page-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageCategories = PageCategory::all();
        return view('admin.pages.create',compact('pageCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->title = $request->title;
        $page->page_category_id = $request->page_category_id;
        $page->page_sub_category_id = $request->page_sub_category_id;
        $page->slug = Str::slug($request->title);
        $page->content = $request->content;
        $page->save();
        return redirect()->route('page.index')->with('message','Page Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $pageCategories = PageCategory::all();
        return view('admin.pages.edit',compact('page','pageCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->title = $request->title;
        $page->page_category_id = $request->page_category_id;
        $page->page_sub_category_id = $request->page_sub_category_id;
        $page->slug = Str::slug($request->title);
        $page->content = $request->content;
        $page->save();
        return redirect()->route('page.index')->with('message','Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('page.index')->with('message','Page Destroyed Successfully');

    }
}
