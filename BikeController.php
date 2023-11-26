<?php

namespace App\Http\Controllers\API;

use App\Bikebrand;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BikeController extends Controller
{
    
    public function bikebrandlist(Request $request,$id)
    {
        
        $brand = Bikebrand::find($id);
        $categories = Category::with('subCategory')->get();
        $subCategory = SubCategory::with('product')->where('category_id',11)->limit(6)->get();

        $bikemodels = $brand->bikemodels;

        return response(['status'=>true,'brand'=>$brand,'bikemodels'=>$bikemodels,'categories'=>$categories,'subCategory'=>$subCategory]);
        
    }

}