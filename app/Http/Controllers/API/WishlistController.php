<?php

namespace App\Http\Controllers\API;
use App\Product;
use App\Wishlist;
use App\Model\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function myWishlists()
    {
        if(auth()->user()){

            $wishlistIDs = Wishlist::where('user_id',auth()->user()->id)->pluck('product_id');
            $products = Product::whereIn('id',$wishlistIDs)->get();
            return response(['status'=>true,'data'=>$products]);
        }else{
            return response(['status'=>false,'message'=>'Please login to continue']);
        }   
    }    
}
