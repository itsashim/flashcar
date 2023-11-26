<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/route-cache', function() {
//     $exitCode = Artisan::call('route:cache');
//     return '<h1>Routes cached</h1>';
// });
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     // return "cache clear";
// });
// Route::get('/config-clear', function(){
//     $exitCode = Artisan::call('config:clear');
//     return 'claer';
// });

Route::post('login','API\AuthController@login');
Route::post('register','API\AuthController@register');
//slider image
Route::get('sliderImages','API\CommonController@sliderImages');

Route::get('serviceDetail','API\CommonController@serviceDetail');

Route::get('blog','API\CommonController@blog');

Route::get('settings','API\CommonController@settings');

//mgh
Route::get('feturedServices','API\CommonController@feturedService');

Route::post('/forgot-password', "FrontController@forgotPassword");
Route::post('/verify-token', "FrontController@verifyToken");
Route::post('/update-password', "FrontController@updatePassword");

Route::get('cities','API\CommonController@cities');
Route::get('hospitals','API\CommonController@hospitals');
Route::get('departments','API\CommonController@departments');
Route::get('doctors','API\CommonController@doctors');
Route::get('doctor/{id}','API\CommonController@doctorDetail');
Route::get('categories','API\CommonController@categories');
Route::get('products','API\CommonController@getProducts');
//all product list
Route::get('productlist','API\CommonController@productlist');
//all accessories list
Route::get('accessorieslist','API\ProductController@accessoriesList');

//all productuser list
Route::get('userproductlist','API\ProductController@productUserList');

Route::get('category/products','API\CommonController@categoryProducts');
Route::get('sub-category/products','API\CommonController@subCategoryProducts');
Route::any("forgotpassword","API\ApiController@forgotpassword");
Route::any("listoffacilities","API\ApiController@listoffacilities");
Route::any("listofgallerycategory","API\ApiController@listofgallerycategory");
Route::any("listofimagebycategoryid","API\ApiController@listofimagebycategoryid");
Route::any("getlistofappointment","API\ApiController@getlistofappointment");
Route::any("gethealthpackage","API\ApiController@gethealthpackage");
Route::any("getuserupconmingappointment","API\ApiController@getuserupconmingappointment");
Route::any("getuserpastappointment","API\ApiController@getuserpastappointment");
Route::any("chatuploadmedia","API\ApiController@chatuploadmedia");
Route::any("healthpackage","API\ApiController@healthpackage");
Route::any("mysubscription","API\ApiController@mysubscription");
Route::any("addsubscription","API\ApiController@addsubscription");
Route::any("editprofile","API\AuthController@editprofile");
Route::any("getdoctorandservicebydeptid","API\ApiController@getdoctorandservicebydeptid");
Route::any("searchterm","API\ApiController@searchdoctor");
Route::any("contactus","API\ApiController@contactus");
Route::any("reviewlistbydoctor","API\ApiController@reviewlistbydoctor");
Route::any("getdepartment","API\ApiController@getdepartment");

Route::post('quote-public/store','API\QuoteController@publicStore');
Route::post('prescription/store','API\PrescriptionController@store');

 //bikebrandlist fetch daata

Route::get("bikebrandlist/{id}", "API\BikeController@bikebrandlist");
Route::get("brandlist", "API\BikeController@brandlist");

Route::post('bike/store', "API\BikeController@store");
Route::post("bike/edit", "API\BikeController@edit");
Route::post('bikesell/store', "API\BikeController@bikesellStore");
Route::post('bikesell/edit', "API\BikeController@bikesellStore");
Route::post("bikesell/status", "API\BikeController@sellStatus");
Route::post("get/bikeModelBrand/filterData", "API\BikeController@filterData");

Route::get('/used-bike-list',"API\BikeController@usedBikeList");

//product list
Route::get("productModal-list/{id}", "API\ProductController@productModalList");
Route::post('product/store', "API\ProductController@store");
Route::post("product/edit", "API\ProductController@update");

Route::get("getbikelistdata", "API\BikeController@bikelist");
Route::get('categorylist', 'API\BikeController@categorylist');

//feature list

Route::get('featurelist', 'API\BikeController@featurelist');


//bluebook
Route::post('/bluebook','API\BluebookController@bluebooksubmit');

Route::group(['middleware'=>'auth:api'],function(){

    Route::get('my-prescriptions','API\PrescriptionController@index');
    //paile ya thyo prescription store //
    // Route::post('prescription/store','API\PrescriptionController@store');

    Route::get('auth-data','API\AuthController@authData');
    Route::post('profile-update','API\AuthController@updateProfile');
    
    Route::get('cart','API\CartController@cart');
    Route::post('cart/add-product-to-cart','API\CartController@addProductToCart');
    Route::post('cart/add-to-cart','API\CartController@addToCart');
    Route::post('cart/quantity','API\CartController@setQuantity');
    Route::post('cart/remove','API\CartController@removeFromCart');
    Route::post('cart/confirm-cash-on-delivery','API\CheckOutController@confirmCashOnDelivery');
    
    // Booking Appointment
    Route::get('my-patients','API\CommonController@mypatients');
    Route::post('patient/register','API\PatientController@patientRegister');
    Route::post('patient/details','API\PatientController@patientDetail');
    Route::post('mypatient/update','API\PatientController@patientUpdate');
    Route::post('appointment/cod','API\AppointmentController@codConfirm');
    Route::get('my-appointments','API\AppointmentController@myAppointments');

    // Orders
    Route::get('my-orders','API\CommonController@myOrders');
    Route::post('order/cancel-order', 'OrderController@cancelOrder');

    // Doctors
    Route::get('doctor-appointment','API\AppointmentController@doctorAppointment');
    Route::post('appointment/status','API\AppointmentController@updateStatus');
    Route::post('doctor/profile/update','API\AppointmentController@doctorUpdate');
    Route::post('doctor/updateworkinghours','API\AppointmentController@updateworkinghours');
    Route::post('doctor/reviews','API\AppointmentController@doctorReviews');

    // Wishlists
    Route::get('my-wishlists','API\WishlistController@myWishlists');
    Route::post('add-to-wishlist', 'FrontController@addToWishlist');
    Route::post("wishlist/remove", "FrontController@wishlistRemove");

    // Quotes
    Route::get('my-quotes','API\QuoteController@index');
    Route::post('quote/store','API\QuoteController@store');

});

Route::any("savetoken","API\ApiController@savetoken");

// Route::get("adddoctosdetail","API\ApiController@adddoctosdetail");
// Route::any("bookappointment","API\ApiController@bookappointment");
// Route::any("userregister","API\ApiController@userregister");
// Route::any("addreview","API\ApiController@postreview");
// Route::any("listofdepartment","API\ApiController@listofdepartment"); //list of department
// Route::any("departmentdetailbyid","API\ApiController@departmentdetailbyid");
// Route::any("userlogin","API\ApiController@showlogin");
// Route::any("listofdoctorbydepartment","API\ApiController@listofdoctorbydepartment");
// Route::any("gettoken","API\ApiController@gettokendata");
// Route::any("topdoctor","API\ApiController@topdoctor");
// Route::any("contactus","API\ApiController@contactus");
Route::any("doctordetails","API\ApiController@doctordetails");
// Route::get("deletemedia",[ApiController::class,"deletemedia"]);
// Route::post("mediaupload","API\ApiController@mediaupload");











