<?php

namespace App\Http\Controllers;

use App\CompanyLogo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CompanyLogoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:companylogo-view', ['only' => ['index','show']]);
         $this->middleware('permission:companylogo-create', ['only' => ['create','store']]);
         $this->middleware('permission:companylogo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:companylogo-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $companyLogos = CompanyLogo::all();
        return view('admin.company_logo.index',compact('companyLogos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company_logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new CompanyLogo();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/company_logo/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/company_logo/image/' . $fileName;
        } else {
            $imagePath = '';
        }
        $category->image = $imagePath;
        $category->save();
        return redirect()->route('company-logo.index')->with('message','Company Logo Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanyLogo  $companyLogo
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyLogo $companyLogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyLogo  $companyLogo
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyLogo $companyLogo)
    {
        return view('admin.company_logo.edit',compact('companyLogo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyLogo  $companyLogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyLogo $companyLogo)
    {
        $companyLogo->name = $request->name;
        $companyLogo->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/company_logo/image', $fileName, 'public');
            $imagePath =  '/storage/uploads/company_logo/image/' . $fileName;
            $companyLogo->image = $imagePath;
        }
        $companyLogo->save();
        return redirect()->route('company-logo.index')->with('message','Company Logo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyLogo  $companyLogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyLogo $companyLogo)
    {
        $companyLogo->delete();
        return redirect()->route('company-logo.index')->with('message','Company Logo Deleted Successfully');
    }
}
