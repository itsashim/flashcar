<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Model\Bike;
use App\Model\Bikemodel;
use App\Order;
use App\Product;
use App\CartDetail;
use App\OrderDetail;
use App\Category;
use App\Model\Bikebrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function viewCart()
    {
        if(auth()->user()){
            $cartDetails = CartDetail::with('product')->where('user_id',auth()->user()->id)->where('status','Pending')->get();
            $cart = Cart::where('user_id',auth()->user()->id)->where('status','Pending')->first();
            $categories = Category::with('subCategory')->get();
            $brands = Bikebrand::all();
            return view('front.cart',compact('cartDetails','cart','categories','brands'));
        }else{
            session()->flash('cart','1');
            return redirect()->intended('/login')->with('showlogin','true');
        }
    }

    public function addToCart(Request $request){
        try{
            DB::beginTransaction();
            $cartDetail = CartDetail::where('user_id',auth()->user()->id)->where('product_id',$request->id)->where('status','Pending')->first();
            if($cartDetail){

                $product = Product::where('id',$request->id)->firstOrFail();
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
                $view = view('front.ajaxpages.ajaxcart',compact('cartDetails','cart'))->render();

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
                $view = view('front.ajaxpages.ajaxcart',compact('cartDetails','cart'))->render();

            }
            DB::commit();
            $cartCount = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('quantity');
            // dd(auth()->user());

            if(auth()->user()){
                // dd('lol');
             
                $user_id = auth()->user()->id;

                $bikemodel_ids = Bike::where('user_id', $user_id)
                                  ->pluck('bikemodel_id')
                                  ->toArray();

                $products = Bikemodel::with('product')->whereIn('id',$bikemodel_ids)->orderBy('id', 'DESC')->with('product.cartDetails')->limit(6)->get(); 
                // return $products;

                $productView = view('front.pages.ssr.bike_list_render', compact('products'))->render();  

            }
            else{
                $products = Product::orderBy('id', 'DESC')->limit(6)->get();

                $productView = view('front.pages.ssr.product_list_render', compact('products'))->render();

            }

     

            return response(['status'=>true,'message'=>'Product has been added to cart','view'=>$view,'cartCount'=>$cartCount,'productView'=>$productView]);
            // return response(['status'=>true,'cartCount'=>$cartCount])->with(['message'=>'Product has been added to cart']);
        }catch(\Exception $e){
            DB::rollback();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function subFromCart(Request $request)
    {
        try{
            DB::beginTransaction();
            $cartDetail = CartDetail::where('user_id',auth()->user()->id)->where('product_id',$request->id)->where('status','Pending')->firstOrFail();
            if($cartDetail){
                if($cartDetail->quantity>1){
                    $product = Product::where('id',$cartDetail->product_id)->firstOrFail();
                    $cartDetail->quantity = $cartDetail->quantity - 1;

                    if($product->offer_price)
                        $cartDetail->amount = $product->offer_price * $cartDetail->quantity;
                    else
                        $cartDetail->amount = $product->price * $cartDetail->quantity;
                    $cartDetail->save();
                }
            }
            $cartDetails = CartDetail::with('product')->where('user_id',auth()->user()->id)->where('status','Pending')->get();
            foreach($cartDetails as $cartDetail){
                $cartDetail->product_name = Product::where('id',$cartDetail->product_id)->first()->name;
            }
            $cart = Cart::where('id',$cartDetail->cart_id)->first();   
            $cart->products = json_encode($cartDetails);
            $cart->total_price = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('amount');
            $cart->save();
            DB::commit();
            $view = view('front.ajaxpages.ajaxcart',compact('cartDetails','cart'))->render();
            $cartCount = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('quantity');
            return response(['status'=>true,'message'=>'Product has been subtracted from cart','view'=>$view,'cartCount'=>$cartCount]);
        }catch(\Exception $e){
            DB::rollBack();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function removeFromCart(Request $request){
        try{
            DB::beginTransaction();
            $cartProduct = CartDetail::where('user_id',auth()->user()->id)->where('product_id',$request->product_id)->where('status','Pending')->firstOrFail();
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
            $view = view('front.ajaxpages.ajaxcart',compact('cartDetails','cart'))->render();
            $cartCount = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('quantity');
            return response(['status'=>true,'message'=>'Product has been removed from cart','view'=>$view,'cartCount'=>$cartCount]);
        }catch(\Exception $e){
            DB::rollBack();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function confirmCheckout()
    {
        try{
            DB::beginTransaction();

            $cart = Cart::where('user_id',auth()->user()->id)->where('status','Pending')->firstOrFail();
            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->products = "";
            $order->total_price = $cart->total_price;
            $order->status = "Pending";
            $order->save();

            $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
            foreach($cartDetails as $cartDetail){
                $orderDetail = new OrderDetail;
                $orderDetail->order_id = $order->id;
                $orderDetail->user_id = auth()->user()->id;
                $orderDetail->product_id = $cartDetail->product_id;
                $orderDetail->quantity = $cartDetail->quantity;
                $orderDetail->amount = $cartDetail->amount;
                $orderDetail->status = "Pending";
                $orderDetail->save();
            }

            $orderDetails = OrderDetail::where('order_id',$order->id)->where('user_id',auth()->user()->id)->whereStatus('Pending')->get();
            foreach($orderDetails as $orderDetail){
                $orderDetail->product_name = Product::where('id',$orderDetail->product_id)->first()->name;
            }
            $order->products = json_encode($orderDetails);
            $order->save();
            DB::commit();
            $cartCount = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->sum('quantity');
            return response(['status'=>true,'message'=>'Checkout successfully done','cartCount'=>$cartCount]);
        }catch(\Exception $e){
            DB::rollBack();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }
}