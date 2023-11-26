<?php

namespace App\Http\Controllers;

use App\Order;
use App\CartDetail;
use App\OrderDetail;
use App\Seller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:order-view', ['only' => ['index', 'show']]);
        $this->middleware('permission:order-create', ['only' => ['create', 'show']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'updatestatus']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $dataCount = Order::count();
        return view('admin.orders.index', compact('dataCount'));
    }

    public function ajaxTable(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'user_id',
            2 => 'seller_id',
            3 => 'total_price',
            4 => 'payment_method',
            5 => 'status',
            6 => 'created_at',
            7 => 'action',
        );

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];;
        $dir   = $request->input('order.0.dir');

        if ($request->input('search.value'))
            $search = $request->input('search.value');

        $totalData = Order::count();
        $orders  = Order::select('orders.*', 'users.name as user_name')->leftJoin('users', 'orders.user_id', 'users.id')->orderBy("id","desc");
       

        if (auth()->user()->usertype == 5) {
            $seller = Seller::where('user_id', auth()->user()->id)->first();
            $orderIds = OrderDetail::where('seller_id', $seller->id)->pluck('order_id');
            $orders = $orders->whereIn('orders.id', $orderIds);
        }

        if ($request->input('search.value')) {
            $orders = $orders->where(function ($qSearch) use ($search) {
                $qSearch = $qSearch->where('orders.id', 'LIKE', "%{$search}%")
                    ->orWhere('users.name', 'LIKE', "%{$search}%")
                    ->orWhere('orders.payment_method', 'LIKE', "%{$search}%")
                    ->orWhere('orders.created_at', 'LIKE', "%{$search}%");
            });
        }

        $totalFiltered = $orders->get()->count();
        if ($order != "action") {
            $orders   = $orders->orderBy($order, $dir)->offset($start)
                ->limit($limit)
                ->get();
        } else {
            $orders   = $orders->offset($start)
                ->limit($limit)
                ->get();
        }

        $data = array();
        if (!empty($orders)) {
            $i = $start;
            foreach ($orders as $order) {
                $nestedData['id']               =  ++$i;
                $nestedData['user_id']          = $order->user_name;
                $nestedData['seller_id'] = $order->orderDetail->first()->seller_name;
                $nestedData['total_price']      = $order->total_price;
                $nestedData['payment_method']      = $order->payment_method;
                $nestedData['status']      = '<span class="badge badge-success order_status" data-status="' . $order->status . '" data-id="' . $order->id . '">' . $order->status . '</span>';
                $nestedData['created_at']       = $order->created_at;

                $nestedData['action'] = '<div class="btn-group" role="group" aria-label="actions">';

                $nestedData['action'] = $nestedData['action'] . '<a href="' . route('order.show', $order->id) . '" class="btn btn-sm btn-success text-white rowView" data-id="' . $order->id . '"><i class="fa fa-eye"></i></a>';

                // $nestedData['action'] = $nestedData['action'].'<a href="'.route('order.edit',$order->id).'" class="btn btn-sm btn-primary text-white rowEdit" data-id="'.$order->id.'"><i class="fa fa-edit"></i></a>';

                $nestedData['action'] = $nestedData['action'] . '<button class="btn btn-sm btn-danger text-white rowDelete" data-link="' . route('order.destroy', $order->id) . '" data-id="' . $order->id . '"><i class="fa fa-trash"></i></button>';
        
                $nestedData['action'] = $nestedData['action'] . '</div>';
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data,
        );

        echo json_encode($json_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        $seller_name = OrderDetail::where('order_id', $order->id)->value('seller_name');
        return view('admin.orders.show', compact('order', 'orderDetails','seller_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    public function cancelOrder(Request $request){
        if(auth()->user()){
            $order = Order::whereId($request->id)->where('user_id',auth()->user()->id)->first();
            if(!$order)
                return response(['status'=>false,'message'=>'Order not found']);
            $order->status = "Cancelled";
            $order->save();
            return response(['status'=>true,'message'=>'Order cancelled successfully']);
        }
        return response(['status'=>false,'message'=>'Please Login to continue']);
    }

    public function updateStatus(Request $request)
    {
        $order = Order::findOrFail($request->id);
        $order->status = $request->status;
        $order->save();
        return redirect()->back();
    }
    
    public function cancelorderfromuserside(Request $request,$id)
    {
         if(auth()->user()){
            $order = Order::whereId($id)->where('user_id',auth()->user()->id)->first();
            if(!$order)
                return response(['status'=>false,'message'=>'Order not found']);
            $order->status = "Cancelled";
            $order->save();
            return response(['status'=>true,'message'=>'Order cancelled successfully']);
        }
        return response(['status'=>false,'message'=>'Please Login to continue']);
    }
    
    public function updateDetailStatus(Request $request)
    {
        $orderDetail = OrderDetail::findOrFail($request->id);
        $orderDetail->status = $request->status;
        $orderDetail->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Order $order)
    // {
    //     $order->delete();
    //     return redirect()->route('order.index');
    // }
    
    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        
        return  back()->with("success","Deleted Successfully");
    }
}
