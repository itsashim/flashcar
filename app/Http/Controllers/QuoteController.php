<?php

namespace App\Http\Controllers;

use App\Quote;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::with('product')->get();
        // return $quotes;
        return view('admin.quotes.index',compact('quotes'));
    }

    public function create()
    {
        // return view('admin.quotes.create');
    }
    
    public function store(Request $request)
    {
        // 
    }

    public function edit(Quote $quote){
        // 
    }

    public function update(Request $request, Quote $quote)
    {
        // 
    }

    // public function destroy(Quote $quote)
    // {
    //     return $quote;die();
    //     $quote->delete();
    //     return redirect()->route('category.index')->with('message','Quote Deleted Successfully');
    // }
    public function destroy($id)
    {
       Quote::destroy($id);
       return back()->with("message","Quote Deleted Successfully");
    }
}