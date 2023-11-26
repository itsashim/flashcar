<?php

namespace App\Providers;

use App\Model\Setting;
use App\Model\Department;

use App\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $setting = Setting::find(1);
        $departmentsForFooter= Department::all();
        if(auth()->user()){
            $cartCount = Cart::where('user_id',auth()->user()->id)->count();
            View::share('cartCount',$cartCount);
        }
        View::share('departmentsForFooter',$departmentsForFooter);
        View::share('setting',$setting);
    }
}
