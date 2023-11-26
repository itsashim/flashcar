<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:blog-view|role-create', ['only' => ['index','show']]);
         $this->middleware('permission:blog-create', ['only' => ['create','store']]);
         $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $blogs = Blog::all();
        session()->flash('tab', 'blog');
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = Str::slug($blog->title);
        $blog->description = $request->description;

        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/blog/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/blog/image/' . $fileName;
        } else {
            $imagePath = '';
        }
        $blog->image = $imagePath;
        $blog->save();
        return redirect()->route('blog.index')->with('message', 'Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->title = $request->title;
        $blog->slug = Str::slug($blog->title);
        $blog->description = $request->description;

        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/blog/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/blog/image/' . $fileName;
            $blog->image = $imagePath;
        }
        $blog->save();
        return redirect()->route('blog.index')->with('message', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        $blogs = Blog::all();
        $blogs = view('admin.blog.ajaxlist', compact('blogs'))->render();
        return response(['status' => true, 'message' => 'Blog deleted Successfully', 'blogs' => $blogs]);
    }
}