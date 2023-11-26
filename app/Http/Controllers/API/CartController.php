<?php

namespace App\Http\Controllers\API;

use App\Cart;
use App\CartDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;

class CartController extends Controller
{
    public function cart()
    {
        $cartDetails = CartDetail::with('product')->where('user_id',auth()->user()->id)->where('status','Pending')->get();
        return response(['status'=>true,'data'=>$cartDetails]);
    }

    public function addProductToCart(Request $request){
        try{
            DB::beginTransaction();
            $cartDetail = CartDetail::where('user_id',auth()->user()->id)->where('product_id',$request->product_id)->where('status','Pending')->first();
            if($cartDetail){

                $product = Product::where('id',$request->product_id)->firstOrFail();
                $cartDetail->quantity = $cartDetail->quantity+1;
                if($product->offer_price)
                    $cartDetail->amount = $product->offer_price * $cartDetail->quantity;
                else
                    $cartDetail->amount = $product->price * $cartDetail->quantity;
                $cartDetail->save();

                $cart = Cart::where('id',$cartDetail->cart_id)->where('status','Pending')->first();
                $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
                foreach($cartDetails as $cartDetail){
                    $cartDetail->product_name = Product::where('id',$cartDetail->product_id)->first()->name;
                }
                $cart->products = json_encode($cartDetails);
                $cart->total_price = CartDetail::where('user_id',auth()->user()->id)->where('cart_id',$cart->id)->sum('amount');
                $cart->save();
                DB::commit();
                return response(['status'=>true,'data'=>$cartDetail,'finalCart'=>$cart]);
                // $view = view('front.ajaxpages.ajaxcart',compact('cartDetails','cart'))->render();

            }else{

                $cartExists = Cart::where('user_id',auth()->user()->id)->where('status','Pending')->first();
                if(!$cartExists){
                    $cartExists = new Cart();
                    $cartExists->user_id = auth()->user()->id;
                    $cartExists->products = "";
                    $cartExists->total_price = 0;
                    $cartExists->status = "Pending";
                    $cartExists->save();
                }
                $product = Product::where('id',$request->product_id)->firstOrFail();
                $cartDetail = new CartDetail();
                $cartDetail->cart_id = $cartExists->id;
                $cartDetail->user_id = auth()->user()->id;
                $cartDetail->product_id = $product->id;
                $cartDetail->quantity = 1;
                if($product->offer_price)
                    $cartDetail->amount = $product->offer_price * $cartDetail->quantity;
                else
                    $cartDetail->amount = $product->price * $cartDetail->quantity;
                $cartDetail->save();
                $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
                foreach($cartDetails as $cartDetail){
                    $cartDetail->product_name = Product::where('id',$cartDetail->product_id)->first()->name;
                }
                $cartExists->products = json_encode($cartDetails);
                $cartExists->total_price = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('amount');
                $cartExists->save();
                $cart = $cartExists;
                DB::commit();
                return response(['status'=>true,'data'=>$cartDetail,'finalCart'=>$cart]);
                // $view = view('front.ajaxpages.ajaxcart',compact('cartDetails','cart'))->render();

            }
            
            // $cartCount = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('quantity');
            // return response(['status'=>true,'message'=>'Product has been added to cart','view'=>$view,'cartCount'=>$cartCount]);
        }catch(\Exception $e){
            DB::rollback();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function addToCart(Request $request){
        $this->validate($request,[
            'quantity'=>'numeric|sometimes',
            'id'=>'numeric|sometimes'
        ]);
        try{
            DB::beginTransaction();
            $cartDetailExists = CartDetail::where('user_id',auth()->user()->id)->where('product_id',$request->id)->where('status','Pending')->first();
            if($cartDetailExists){

                $product = Product::where('id',$request->id)->firstOrFail();
                if($request->quantity){
                    $cartDetailExists->quantity = $request->quantity;
                }else{
                    $cartDetailExists->quantity = $cartDetailExists->quantity+1;
                }
                if($product->offer_price)
                    $cartDetailExists->amount = $product->offer_price * $cartDetailExists->quantity;
                else
                    $cartDetailExists->amount = $product->price * $cartDetailExists->quantity;
                $cartDetailExists->save();

                $cart = Cart::where('id',$cartDetailExists->cart_id)->where('status','Pending')->first();
                $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
                foreach($cartDetails as $cartDetail){
                    $cartDetail->product_name = Product::where('id',$cartDetail->product_id)->first()->name;
                }
                $cart->products = json_encode($cartDetails);
                $cart->total_price = CartDetail::where('user_id',auth()->user()->id)->where('cart_id',$cart->id)->sum('amount');
                $cart->save();

            }else{

                $cartExists = Cart::where('user_id',auth()->user()->id)->where('status','Pending')->first();
                if(!$cartExists){
                    $cartExists = new Cart();
                    $cartExists->user_id = auth()->user()->id;
                    $cartExists->products = "";
                    $cartExists->total_price = 0;
                    $cartExists->status = "Pending";
                    $cartExists->save();
                }
                $product = Product::where('id',$request->id)->firstOrFail();
                $cartDetail = new CartDetail();
                $cartDetail->cart_id = $cartExists->id;
                $cartDetail->user_id = auth()->user()->id;
                $cartDetail->product_id = $product->id;
                if($request->quantity){
                    $cartDetail->quantity = $request->quantity;
                }else{
                    $cartDetail->quantity = $cartDetail->quantity + 1;
                }
                if($product->offer_price)
                    $cartDetail->amount = $product->offer_price * $cartDetail->quantity;
                else
                    $cartDetail->amount = $product->price * $cartDetail->quantity;
                $cartDetail->save();
                $cartDetailExists = $cartDetail;
                $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
                foreach($cartDetails as $cartDetail){
                    $cartDetail->product_name = Product::where('id',$cartDetail->product_id)->first()->name;
                }
                $cartExists->products = json_encode($cartDetails);
                $cartExists->total_price = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('amount');
                $cartExists->save();
                $cart = $cartExists;
            }
            DB::commit();
            return response(['status'=>true,'data'=>$cartDetailExists,'finalCart'=>$cart]);
        }catch(\Exception $e){
            DB::rollback();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function setQuantity(Request $request)
    {
        $this->validate($request,[
                'id'=>'required|numeric',
                'quantity'=>'required|numeric',
        ]);
        try{
            DB::beginTransaction();
            $cartDetailExists = CartDetail::whereId($request->id)->whereStatus('Pending')->firstOrFail();
            $product = Product::whereId($cartDetailExists->product_id)->first();
            $cartDetailExists->quantity = $request->quantity;
            if($product->offer_price)
                    $cartDetailExists->amount = $product->offer_price * $cartDetailExists->quantity;
                else
                    $cartDetailExists->amount = $product->price * $cartDetailExists->quantity;
            $cartDetailExists->save();

            $cart = Cart::where('id',$cartDetailExists->cart_id)->where('status','Pending')->first();
            $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
            foreach($cartDetails as $cartDetail){
                $cartDetail->product_name = Product::where('id',$cartDetail->product_id)->first()->name;
            }
            $cart->products = json_encode($cartDetails);
            $cart->total_price = CartDetail::where('user_id',auth()->user()->id)->where('cart_id',$cart->id)->sum('amount');
            $cart->save();
            DB::commit();
            return response(['status'=>true,'data'=>$cartDetailExists,'finalCart'=>$cart]);
        }catch(\Exception $e){
            DB::rollback();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function removeFromCart(Request $request){
        $this->validate($request,[
            'id'=>'required',
        ]);
        try{
            DB::beginTransaction();
            $cartProduct = CartDetail::where('user_id',auth()->user()->id)->where('product_id',$request->id)->where('status','Pending')->firstOrFail();
            $cart = Cart::where('id',$cartProduct->cart_id)->first();
            $cartProduct->delete();
            $cartDetails = CartDetail::with('product')->where('user_id',auth()->user()->id)->where('status','Pending')->get();
            foreach($cartDetails as $cartDetail){
                $cartDetail->product_name = Product::where('id',$cartDetail->product_id)->first()->name;
            }
            $cart->products = json_encode($cartDetails);
            $cart->total_price = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('amount');
            $cart->save();
            DB::commit();
            return response(['status'=>true,'message'=>'Item removed from cart','finalCart'=>$cart]);
        }catch(\Exception $e){
            DB::rollBack();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }
}