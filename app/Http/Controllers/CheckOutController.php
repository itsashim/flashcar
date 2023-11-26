<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Cart;
use validate;
use App\Order;
use App\Seller;
use DataTables;
use App\Product;
use App\CartDetail;
use App\OrderDetail;
use App\Model\Package;
use App\Model\Setting;
use App\Model\Department;
use App\Model\Subscription;
use Illuminate\Http\Request;
use App\Model\Paymentgateway;
use App\Model\QuickNotification;
use App\Category;
use App\Model\Bikebrand;
use App\Model\Adds;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class CheckOutController extends Controller
{
 
     public function showCheckOutPage(){
        $department=Department::all();
        $setting = Setting::find(1);
        $token="";
        $payment=Paymentgateway::where("is_active",'1')->get();
        if(count($payment)>0){
          foreach ($payment as $k) {
              if($k->id==2 &&$k->is_active==1){
               
                 $gateway = new \Braintree\Gateway([
                      'environment' => $k->mode,
                      'merchantId' => $k->merchant_key,
                      'publicKey' => $k->key,
                      'privateKey' => $k->secert
                 ]);
                 $token=$gateway->ClientToken()->generate();
                 break;
              } 
          }
        }

        $cart = Cart::where('user_id',auth()->user()->id)->where('status','Pending')->first();
        $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
        $setting = Setting::find(1);

        $categories = Category::with('subCategory')->get();
        $brands = Bikebrand::all();
        $topadds = Adds::all();
        return view("front.showcheckoutpage")->with('cartDetails',$cartDetails)->with("department",$department)->with("payment",$payment)->with("token",$token)->with("setting",$setting)->with('cart',$cart)->with('categories',$categories)->with('brands',$brands)->with('topadds',$topadds);
     }

     public function showsubscription(){
        $data=Subscription::with('userdata','packagedata','paymentdata')->get();
        
        return view("admin.subscription")->with("data",$data);

     }
  
     public function paymentsubscription(Request $request){

            $payment=Paymentgateway::find(2);
            $package=Package::find($id);
     	      $input = $request->input();
            $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
            $merchantAuthentication->setName($payment->key);
            $merchantAuthentication->setTransactionKey($payment->secert);
            $refId = 'ref' . time();
            $cardNumber = preg_replace('/\s+/', '', $input['cardNumber']);
            $creditCard = new AnetAPI\CreditCardType();
            $creditCard->setCardNumber($cardNumber);
            $creditCard->setExpirationDate($input['expiration-year'] . "-" .$input['expiration-month']);
            $creditCard->setCardCode($input['cvv']);
            $paymentOne = new AnetAPI\PaymentType();
            $paymentOne->setCreditCard($creditCard);
            $transactionRequestType = new AnetAPI\TransactionRequestType();
            $transactionRequestType->setTransactionType("authCaptureTransaction");
            $transactionRequestType->setAmount($package->price);
            $transactionRequestType->setPayment($paymentOne);
            $requests = new AnetAPI\CreateTransactionRequest();
            $requests->setMerchantAuthentication($merchantAuthentication);
            $requests->setRefId($refId);
            $requests->setTransactionRequest($transactionRequestType);
            $controller = new AnetController\CreateTransactionController($requests);
            $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
            if ($response != null) {
            if ($response->getMessages()->getResultCode() == "Ok") {
                $tresponse = $response->getTransactionResponse();
                if ($tresponse != null && $tresponse->getMessages() != null) {
                    $message_text = $tresponse->getMessages()[0]->getDescription().", Transaction ID: " . $tresponse->getTransId();
                    $msg_type = "success_msg";  
                      $store=new Subscription();  
                      $store->name=trim($input['owner']);
                      $store->user_id=Auth::id();
                      $store->package_id=$input['package_id'];
                      $store->transaction_id=$tresponse->getTransId();
                      $store->date=$input['package_date'];
                      $store->time=$input['package_time'];
                      $store->payment_type='1';
                      $store->amount=$package->price;
                      $store->save(); 
                      Session::flash("payment_done",1);
                      return redirect()->back();
                } else {
                    $message_text = __('messages.There were some issue with the payment. Please try again later');
                    $msg_type = "error_msg";
                    if ($tresponse->getErrors() != null) {
                        $message_text = $tresponse->getErrors()[0]->getErrorText();
                        $msg_type = "error_msg";                                    
                    }
                }
            } else {
                $message_text = __('messages.There were some issue with the payment. Please try again later');;
                $msg_type = "error_msg";                                    

                $tresponse = $response->getTransactionResponse();

                if ($tresponse != null && $tresponse->getErrors() != null) {
                    $message_text = $tresponse->getErrors()[0]->getErrorText();
                    $msg_type = "error_msg";                    
                } else {
                    $message_text = $response->getMessages()->getMessage()[0]->getText();
                    $msg_type = "error_msg";
                }                
            }
        } else {
            $message_text = __('messages.No response returned');
            $msg_type = "error_msg";
        }
        return back()->with($msg_type, $message_text);
     }

     public function changepackagestatus($status,$id){
        $store=Subscription::find($id);
        $store->status=$status;
        $store->save();
        Session::flash('message',__('messages.Subscription Status Changes Successfully')); 
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
     }

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
            $order->payment_method = $request->payment_method;
            $order->save();
            
            $cartDetails = CartDetail::where('user_id',auth()->user()->id)->where('status','Pending')->get();
            foreach($cartDetails as $cartDetail){
                $orderDetail = new OrderDetail;
                $orderDetail->order_id = $order->id;
                $orderDetail->user_id = auth()->user()->id;
                $product = Product::whereId($cartDetail->product_id)->first();
                if($product){
                    $seller = Seller::whereId($product->seller_id)->first();
                    if($seller){
                        $orderDetail->seller_id = $seller->id;
                        $orderDetail->seller_name = $seller->name;
                        $orderDetail->seller_phone = $seller->phone;
                    }
                }
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
            return response(['status'=>true,'message'=>'Order successfully completed.']);
        }catch(\Exception $e){
            DB::rollBack();
            return response(['status'=>false,'message'=>$e->getMessage()]);
        }
    }
}