<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Model\Doctor;
use App\Model\QuickNotification;
use App\Seller;
use Illuminate\Http\Request;


class QuickNotificationController extends Controller
{
    public function index(Request $request){
        if(auth()->user()->usertype==2){
            $data = QuickNotification::where('reader_id',auth()->user()->id)->latest()->paginate(20);
        }elseif(auth()->user()->usertype==3){
            $doctor = Doctor::where('user_id',auth()->user()->id)->first();
            $data = QuickNotification::where('reader_id',$doctor->id)->latest()->paginate(20);
        }elseif(auth()->user()->usertype==4){
            $hospital = Hospital::where('user_id',auth()->user()->id)->first();
            $data = QuickNotification::where('reader_id',$hospital->id)->latest()->paginate(20);
        }elseif(auth()->user()->usertype==5){
            $seller = Seller::where('user_id',auth()->user()->id)->first();
            $data = QuickNotification::where('reader_id',$seller->id)->latest()->paginate(20);
        }else{
            $data = QuickNotification::where('reader_id',0)->paginate(20);
        }
        return view('admin.quicknotification.index',compact('data'));
    }
    
    public function show($id)
    {
        $quickNotification = QuickNotification::findOrFail($id);
        $quickNotification->status = 1;
        $quickNotification->save();

        if($quickNotification->module=="seller"){
            return redirect()->intended('admin/applied-seller/'.$quickNotification->module_id);
        }elseif($quickNotification->module=="doctor"){
            return redirect()->intended('admin/savedoctor/'.$quickNotification->module_id.'/1');            
        }elseif($quickNotification->module=="hospital"){
            return redirect()->intended('admin/hospital/'.$quickNotification->module_id.'/edit');
        }elseif($quickNotification->module=="prescription"){
            return redirect()->intended('admin/prescription/'.$quickNotification->module_id);
        }elseif($quickNotification->module=="appointment"){
            return redirect()->intended('admin/appointments/detail/'.$quickNotification->module_id);
        }elseif($quickNotification->module=="order"){
            return redirect()->intended('admin/order/'.$quickNotification->module_id);
        }
    }

    public function ajaxData()
    {
        if(auth()->user()->usertype==2){
            $unreadCount = \App\Model\QuickNotification::where('reader_id',auth()->user()->id)->where('status',0)->count();
            $notifications = \App\Model\QuickNotification::where('reader_id',auth()->user()->id)->latest()->limit(10)->get();
        }elseif(auth()->user()->usertype==3){
                $doctor = \App\Model\Doctor::where('user_id',auth()->user()->id)->first();
                $unreadCount = \App\Model\QuickNotification::where('reader_id',$doctor->id)->where('status',0)->count();
                $notifications = \App\Model\QuickNotification::where('reader_id',$doctor->id)->latest()->limit(10)->get();
        }elseif(auth()->user()->usertype==4){
                $hospital = \App\Hospital::where('user_id',auth()->user()->id)->first();
                $unreadCount = \App\Model\QuickNotification::where('reader_id',$hospital->id)->where('status',0)->count();
                $notifications = \App\Model\QuickNotification::where('reader_id',$hospital->id)->latest()->limit(10)->get();
        }elseif(auth()->user()->usertype==5){
                $seller = \App\Seller::where('user_id',auth()->user()->id)->first();
                $unreadCount = \App\Model\QuickNotification::where('reader_id',$seller->id)->where('status',0)->count();
                $notifications = \App\Model\QuickNotification::where('reader_id',$seller->id)->latest()->limit(10)->get();
        }else{
                $unreadCount = \App\Model\QuickNotification::where('reader_id',0)->where('status',0)->count();
                $notifications = \App\Model\QuickNotification::where('reader_id',0)->limit(10)->get();
        }
        $notificationView = view('admin.dashboardajax',compact('notifications'))->render();
        return response(['status'=>true,'unreadCount'=>$unreadCount,'notificationView'=>$notificationView]);
    }
}
