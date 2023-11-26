<?php

namespace App\Http\Controllers\API;

use App\Cart;
use App\Order;
use App\Seller;
use App\CartDetail;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Model\QuickNotification;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    
    public function confirmCashOnDelivery(Request $request)
    {
        try{
            DB::beginTransaction();

            $cart = Cart::where('user_id',auth()->user()->id)->where('status','Pending')->firstOrFail();
            $cart->status = "Checkout";
            $cart->save();
            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->products = "";
            $order->total_price = $cart->total_price;
            $order->status = "Pending";
            $order->address = $request->address;
            $order->city = $request->city;
            $order->zip_code = $request->zip_code;
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
                $cartDetail->status = "Checkout";
                $cartDetail->save();
            }

            $orderDetails = OrderDetail::where('order_id',$order->id)->where('user_id',auth()->user()->id)->get();
            $order->products = json_encode($orderDetails);
            $order->save();
            DB::commit();
            $sellerIds = $orderDetail->pluck('seller_id');
            $sellers = Seller::whereIn('id',$sellerIds)->get();
            foreach($sellers as $seller){
                QuickNotification::create([
                    'title'=>'New Order',
                    'detail'=>'#'.$order->id.' order received',
                    'date_time'=>date('Y-m-d H:i:s'),
                    'status'=>0,
                    'module'=>'order',
                    'module_id'=>$order->id,
                    'reader_id'=>$seller->id
                ]);
                Mail::send('email.neworder', ['order' => $order,'seller'=>$seller,], function ($message) use ($order,$seller) {
                    $message->to($seller->email, $order->id)->subject(__("New Order Received"))->from(env('MAIL_USERNAME'));
                });
            }
            QuickNotification::create([
                'title'=>'New Order',
                'detail'=>'#'.$order->id.' order received',
                'date_time'=>date('Y-m-d H:i:s'),
                'status'=>0,
                'module'=>'order',
                'module_id'=>$order->id
            ]);
            Mail::send('email.neworder', ['order' => $order,'seller'=>$seller,], function ($message) use ($order) {
                $message->to(env('MAIL_ADMIN'), $order->id)->subject(__("New Order Received"))->from(env('MAIL_USERNAME'));
            });
            return response(['status'=>true,'message'=>'Checkout successfully done']);
        }catch(\Exception $e){
            DB::rollBack();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

}