<?php

use Illuminate\Support\Facades\Route;

Route::get('artisandone',function(){

      \Artisan::call('migrate --path=/database/migrations/2023_06_11_000000_create_otps_table.php');
});

Route::get("/product_details/{slug}", "FrontController@productdetails");
Route::get("/brain", "braintreeController@showbrain");
Route::get("add_doctor_review", "AuthenticatedoctorController@show_product_review_user");
Route::post("checkoutbrain", "braintreeController@checkoutbrain");
Route::get("sendnotification", "FrontController@sendnotification");
Route::get("privacy_policy", "HomeController@privacy");
Route::post('get-sub-category', 'SubCategoryController@getSubCategories')->name('get.subCategory');
Route::get('product-list', 'FrontController@productList');
Route::get('emergency', 'FrontController@emergency');
Route::get('site-search', 'FrontController@siteSearch');
Route::post('site-search/ajax', 'FrontController@ajaxSiteSearch');
Route::get('blogs/{slug}', 'FrontController@blogDetail');
Route::get('blogslist', 'FrontController@bloglist');
Route::get("/about-us", 'FrontController@aboutus');
Route::get('/bluebook-renew','FrontController@bluebook');
Route::post('/bluebook','FrontController@bluebooksubmit')->name('bluebook');
Route::post('/bike','FrontController@bikeformsubmit')->name('bike');
Route::get('/sell-bike','FrontController@sellbike');
Route::get('/bluebook-tax-rates','FrontController@bluebookTaxRates');
Route::get('/used-bike-list','FrontController@usedBikeList');
Route::get('/bike-details/{id}','FrontController@bikeDetails')->name('bikeDetails');
Route::get('accessories', 'FrontController@accessoriesList')->name('accessories');

Route::get('test/count', 'FrontController@count')->name('test.count');

Route::get('become-a-doctor', 'FrontController@becomeADoctor');
Route::get('become-a-health-partner', 'FrontController@becomeAHealthPartner');
Route::get('become-a-seller', 'FrontController@becomeASeller');

// Route::get('/booking','FrontController@booking');
Route::get('/booking/{id}','FrontController@booking');

Route::post('add-to-wishlist', 'FrontController@addToWishlist');
//medical-appliances
Route::get('medical-appliances', 'FrontController@medicalAppliances');
Route::group(['prefix' => '/'], function () {
     Route::get('auth/{driver}', 'Auth\FacebookController@redirectToProvider')->name('social.oauth');
     Route::get('auth/{driver}/callback', 'Auth\FacebookController@handleProviderCallback')->name('social.callback');
     Route::get("/", "FrontController@showhome");

     Route::get('/login', "FrontController@login");
     Route::get('/forgot-password', "FrontController@showForgotPassword")->name('forgot.password');
     Route::post('/forgot-password', "FrontController@forgotPassword");
     Route::post('/verify-token', "FrontController@verifyToken");
     Route::post('/update-password', "FrontController@updatePassword");

     Route::get('/register', "FrontController@register");

     Route::get('/hospital/{slug}', "FrontController@showHospital")->name('hospital.details');

    //category route
     Route::get('/categoriesPage', "FrontController@categoriesPage");
    //  Route::get('/hospital/{slug?}', function($slug){
    //         return $slug;
    //  });
    Route::get('categorylist', 'FrontController@categorylist');

    //getfilter daata from list

     Route::get("getFilterBikeModelList", "BikeController@getFilterBikeModelList")->name('getFilterBikeModelList');

     Route::post('hospitallist/search/view', 'FrontController@searchHospital');
     Route::post('departmentlist/search/view', 'FrontController@searchDepartment');

     Route::get('/appoint/doctor', 'FrontController@appointDoctor');
     Route::post('cod/confirm', 'FrontController@codConfirm');

     Route::post('applied-health-partner', 'FrontController@applyHealthPartner');
     Route::post('applied-doctor', 'FrontController@applyDoctor');

     Route::get('/hospitals', 'FrontController@allHospitals');
     Route::post('/user/login', 'FrontController@userLogin');
     //Route::post('/user/register', 'FrontController@userRegister');
      Route::post('/user/register', 'FrontController@userRegister')->name("user.register");
    //recent changes by megha
      Route::get('/services', "FrontController@doctors")->name('user.services');
    //   Route::get('doctors', 'FrontController@doctors');

     // Patient Routes
     Route::post('patient/register', 'FrontController@patientRegister');
     Route::post('patient/details', 'FrontController@patientDetail');
     Route::post('mypatient/show', 'FrontController@patientView');
     Route::post('mypatient/edit', 'FrontController@patientEdit');
     Route::post('mypatient/update', 'FrontController@patientUpdate');
     Route::post('myorder/show', 'FrontController@orderView');

     Route::get('verifyseller/{code}', 'AppliedSellerController@verifySeller');
     Route::post('/gethospitals', 'FrontController@getHospitals');
     Route::post('/getdoctors', 'FrontController@getdoctors');

     Route::get("getserviceanddoctor/{id}", "FrontController@getserviceanddoctor");
     Route::post("bookappoinment", "FrontController@bookappoinment");
     Route::get("allfacilites", "FrontController@allfacilites");
     Route::get("department", "FrontController@department");
     Route::get("brandlist", "FrontController@brandlist");
     Route::get("departmentlist", "FrontController@departmentlist");
     Route::get("departmentdetail/{id}", "FrontController@departmentdetail");
     Route::get("bikebrandlist/{id}", "FrontController@bikebrandlist")->name('bikebrandlist');
     Route::get("doctorlist", "FrontController@doctorlist");
     Route::post('doctorlist/search/view', 'FrontController@searchDoctors');
     //product modal ko list page modal anusar

     Route::get("productModal-list/{id}", "FrontController@productModalList")->name('productModal-list');

     Route::get("gallery", "FrontController@gallery");
     Route::get("contact_us", "FrontController@contact_us");
     Route::any("savecontact", "FrontController@savecontact");
     Route::any("savesubscribe/{email}", "FrontController@savesubscribe");
     Route::any("pricing", "FrontController@pricing");
     Route::any("termcondition", "FrontController@termcondition");
     Route::any("privacypolicy", "FrontController@privacypolicy");
     Route::get("postregister", "FrontController@postregister");
     Route::get("postlogin", "FrontController@postlogin");
     Route::get("userlogout", "FrontController@userlogout");
     Route::get("postforgot", "FrontController@postforgot");

     Route::post('applied-seller', 'AppliedSellerController@store');
     Route::get('upload-prescription', 'PrescriptionController@appshow');
     Route::post('upload-prescription', 'PrescriptionController@store');

     // Front Doctor Page Sections
     // Route::get('find-doctor', 'FrontController@findDoctor');
     Route::get('/find-services/{id}', "FrontController@findDoctor")->name('services.find');

     Route::get('/getAvaiableTime', "FrontController@getAvaiableTime")->name('appointment.getAvaiableTime');

     Route::post('doctor/profile', 'FrontController@doctorProfile');
     Route::get("doctordetails/{id}", "FrontController@doctordetails");
     Route::post("doctor-detail-page", "FrontController@getDoctorDetailPage");
     Route::post('ajax-doctors-page', 'FrontController@ajaxDoctorPage');
     Route::any("addreview", "FrontController@addreview");
     Route::post("mediaupload", "FrontController@mediaupload");
     Route::post("deletemedia", "FrontController@deletemedia");

     Route::get("myaccount", "FrontController@myaccount");
     Route::get("myappointments", "FrontController@myappointments");
     Route::get("mypatients", "FrontController@mypatients");
     Route::get("addbike", "FrontController@addbike");
     Route::get("mypurchases", "FrontController@mypurchases");
     Route::get("mysubscriptions", "FrontController@mysubscriptions");
     Route::get("myprescriptions", "FrontController@myprescriptions");
     Route::get("my-wishlists", "FrontController@mywishlists");
     Route::post("wishlist/remove", "FrontController@wishlistRemove");

     Route::resource("bikesell", "BikeSellController");
     Route::post("bikesell/status", "BikeSellController@sellStatus")->name('bikesell.sellStatus');

     Route::post("updateprofile", "FrontController@updateprofile");
     Route::get("checkcurrentpwd", "FrontController@checkcurrentpwd");
     Route::any("changepasswords", "FrontController@changepasswords");

     Route::any("chat/{id}", "ChatsController@showchat");
     Route::any("chatarea", "FrontController@show_chat_area");
     Route::get("getchannelmessage/{channel_id}/{second_id}", "ChatsController@getchannelmessage");
     // Route::any("chatmediaupload","ChatsController@chatmediaupload");
     Route::any("createchannel/{id}", "ChatsController@createchannel");
     Route::get("token", "ChatsController@gettoken");
     //Route::get("sendnotification","ChatsController@sendnotification");
     Route::get("deletechatmsg/{msg_id}/{channel_id}/{type}/{irow}", "ChatsController@deletechatmsg");
     Route::get("updatechannelmsg", "ChatsController@updatechannelmsg");
     Route::get("getchannelmember", "ChatsController@getchannelmember");
     Route::get("timeformat", "ChatsController@timeformatfront");
     Route::get("settimezone/{time}", "HomeController@settimezone");
     Route::get("getmessagebody/{msg_id}/{channel_id}", "ChatsController@getmessagebody");

     // Checkout Code
     Route::get('checkout', 'CheckOutController@showCheckOutPage');
     Route::post('confirm-cash-on-delivery', 'CheckOutController@confirmCashOnDelivery');

     Route::get("subscription/{package_id}", "SubscriptionController@showorderpage");
     Route::post("userlogin", "FrontController@userlogin");
     Route::post('subscription/cod/store', 'FrontController@addCodSubscription');

     Route::post("paymentsubscription", "SubscriptionController@paymentsubscription");
     Route::get("videosendnotification", "ChatsController@videosendnotification");
     Route::get("resetpassword/{code}", "FrontController@resetpwd");
     Route::any("resetnewpwd", "FrontController@resetpassword");
     Route::Get("getcurrenttime/{offset}", "HomeController@getcurrenttime");

     Route::get('categories/{slug}', 'CategoryController@productList')->name('categorySlug');
     Route::get('sub-categories/{slug}', 'SubCategoryController@productList');

     Route::get('cart', 'CartController@viewCart');
     Route::post('add-to-cart', 'CartController@addToCart');
     Route::post('sub-from-cart', 'CartController@subFromCart');
     Route::post('remove-from-cart', 'CartController@removeFromCart');

     Route::post('quote/store', 'FrontController@quoteStore')->name('front.quote.store');
});

Route::group(['prefix' => 'admin'], function () {
     Route::get("/", "HomeController@showlogin");
     Route::post("postlogin", "HomeController@postlogin");
     Route::get('/role', 'RoleController@index')->name('role.index');
     Route::get('/role/create', 'RoleController@create')->name('role.create');
     Route::post('/role/store', 'RoleController@store')->name('role.store');
     Route::get('/role/edit/{id}', 'RoleController@edit')->name('role.edit');
     Route::put('/role/update-permission/{id}', 'RoleController@update')->name('role.update');
     Route::post('/role/delete', 'RouteController@delete')->name('role.destroy');
     Route::resource('blog', 'BlogController');
     Route::resource('company-logo', 'CompanyLogoController');
     Route::resource('category', 'CategoryController');
     Route::resource('sub-category', 'SubCategoryController');
     Route::resource('product', 'ProductController');
     Route::resource('seller', 'SellerController');
     Route::delete("delete/seller/{id}","SellerController@destroy")->name("seller.destroy");
     Route::resource('customer', 'CustomerController');
     Route::resource('quote', 'QuoteController');
     Route::post("quote/delete/{id?}",'QuoteController@destroy')->name('quote.destroy');
     Route::resource('page-category', 'PageCategoryController');
     Route::resource('page-sub-category', 'PageSubCategoryController');
     Route::post('get/page-sub-category', 'PageSubCategoryController@getPageSubCategories')->name('getSubPageCategory');
     Route::resource('page', 'PageController');
     Route::resource('order', 'OrderController');
     Route::post('orders/ajax-datatable', 'OrderController@ajaxTable')->name('orders.ajaxTable');

      Route::get('/contactReq', 'HomeController@contactReq')->name('user.contactReq');
    Route::delete('/deleteContactReq/{id}', 'HomeController@deleteContactReq')->name('contactReq.delete');

     //Route::post('order/delete', 'OrderController@destroy')->name('order.destroy'); //old one
    Route::delete('order/delete/{id}', 'OrderController@delete')->name('order.destroy'); //new one

     Route::post('order/status/change', 'OrderController@updateStatus')->name('order.status'); //old one
     Route::delete('order/status/cancel/{id?}', 'OrderController@cancelorderfromuserside')->name('order.status.cancel'); //newly added
     Route::post('order-detail/status', 'OrderController@updateDetailStatus')->name('order.detail.status');

     Route::group(['middleware' => ['admincheckexiste']], function () {
          Route::get("dashboard", "HomeController@showdashboard")->name("dashboard");
          Route::get("logout", "HomeController@logout");
          Route::get("settimezone/{time}", "HomeController@settimezone");
          //service
          Route::resource("service", "ServiceController");
          Route::get("saveservice/{id}", "ServiceController@saveservice");
          Route::post("updateservice", "ServiceController@updateservice");
          Route::get("deleteservice/{id}", "ServiceController@deleteservice");
          Route::get("settimezone/{time}", "HomeController@settimezone");
          //department
          Route::resource("department", "DepartmentController");
          Route::get("savedepartment/{id}", "DepartmentController@saveddepartment");
          Route::post("updatedepartment", "DepartmentController@updatedepartment");
          Route::get("deletedepartment/{id}", "DepartmentController@deletedepartment");
          Route::get("departmentservice/{id}", "DepartmentController@departmentservice");
          Route::get("savedepartmentservice/{dept_id}/{id}", "DepartmentController@savedepartmentservice");
          Route::post("updatedepartmentservice", "DepartmentController@updatedepartmentservice");
          Route::get("deletedepartmentservice/{id}", "DepartmentController@deletedepartmentservice");

          // Bike Brand
          Route::resource('bikebrand', 'BikeBrandController');

          // Bike Model
          Route::resource('bikemodel', 'BikeModelController');

          Route::post("get/bikeModelBrand/filterData", "BikeModelController@filterData")->name('bikemodelBrand.filterData');

          //Top adds Section
          Route::resource('topadds', "AddsController");


          //  Cities
          Route::resource('city', "CityController");

          //Bluebook Route admin
          Route::resource('bluebook', "BluebookController");
          Route::post('bluebook/approve-now', 'BluebookController@approveNow')->name('bluebook.approve-now');
          Route::post('bluebook/reject-now', 'BluebookController@rejectNow')->name('bluebook.reject-now');
          Route::resource('bike', "BikeController");
          Route::resource('bike-brand', "BikeBrandController");
          Route::resource('bike-model', "BikeModelController");

          // Hospital
        //   Route::resource('hospital', 'HospitalController');
          Route::resource('serviceProvider', 'HospitalController');


          Route::post('hospital/remove/banner/{id?}', 'HospitalController@removebanner')->name('remove.banner');
          Route::resource('clinic', 'ClinicController');
          //chaged by m
          Route::get('servicesProvider-approved','HospitalController@approvedHospital')->name('servicesProvider.approved');
          Route::get('servicesProvider-pending','HospitalController@pendingHospital')->name('servicesProvider.pending');
          Route::get('servicesProvider-disabled','HospitalController@disabledHospital')->name('servicesProvider.disabled');
          Route::get('servicesProvider-appointment','AppointmentController@hospitalAppointment')->name('servicesProvider.appointment');


          Route::get('prescription', 'PrescriptionController@index')->name('prescription.index');
          Route::get('prescription/{id}', 'PrescriptionController@show')->name('prescription.show');
          Route::post('prescription/delete', 'PrescriptionController@destroy')->name('prescription.delete');

          // Applied Sellers list and approve
          Route::get('applied-seller', 'AppliedSellerController@index');
          Route::post('applied-sellers/approve-now', 'AppliedSellerController@approveNow');
          Route::post('applied-sellers/reject-now', 'AppliedSellerController@rejectNow');
          Route::get('applied-seller/{id}', 'AppliedSellerController@show')->name('applied-seller.show');
          Route::put('applied-seller', 'AppliedSellerController@update');
          Route::delete('applied-seller', 'AppliedSellerController@destroy')->name('applied-seller.destroy');

          //doctor
          //car is service

          Route::resource("doctor", "DoctorController");
          Route::get('service-approved','DoctorController@approvedDoctor')->name('services.approved');
          //   Route::get('doctor-approved','DoctorController@approvedDoctor');
          Route::get('service-pending','DoctorController@pendingDoctor');
          Route::get('doctor-disabled','DoctorController@disabledDoctor');

          Route::get("save-service/{id}/{tab_id}", "DoctorController@savedoctor");
          //megha
          Route::post("updatedoctorprofile", "DoctorController@updatedoctorprofile")->name('services.store');
          Route::get("deletedoctor/{id}", "DoctorController@deletedoctor");
          Route::post("updateworkinghours", "DoctorController@updateworkinghours");
          Route::post("statusToggle/{id}", "DoctorController@statusToggle");

          Route::get("editprofile", "HomeController@editprofile");
          Route::post("updateprofile", "HomeController@updateprofile");
          Route::get("changepassword", "HomeController@changepassword")->name("changepassword");
          Route::get("samepwd/{id}", "HomeController@check_password_same");
          Route::post("updatepassword", "HomeController@updatepassword");

          Route::resource("notification", "NotificationController");
          Route::post("savenotification", "NotificationController@savenotification");

          //album
          Route::resource("gallery", "GalleryController");
          Route::get("savealbum/{id}", "GalleryController@savealbum");
          Route::post("updatealbum", "GalleryController@updatealbum");
          Route::get("deletealbum/{id}", "GalleryController@deletealbum");
          Route::get("addphoto/{album_id}", "GalleryController@addphoto");


          Route::any("uploadimage/{album_id}", "GalleryController@uploadimage");
          Route::get("deletegalleryphoto/{id}", "GalleryController@deletegalleryphoto");

          Route::get("setting/{id}", "NotificationController@showsetting");
          Route::post("savebasicsetting", "NotificationController@savebasicsetting");
          Route::post("saveserverkey", "NotificationController@saveserverkey");
          Route::post("savesitesetting", "NotificationController@savesitesetting");
          Route::post("saveterms", "NotificationController@saveterms");
          Route::post("saveprivacy", "NotificationController@saveprivacy");
          Route::post("saveuploadsection", "NotificationController@saveuploadsection");


          Route::get('doctor-appointment','AppointmentController@doctorAppointment');

          Route::get("appointment/{start_date}/{end_date}", "AppointmentController@showappointment");
          Route::post('appointment/status/update', 'AppointmentController@update')->name('appointment.update');
          Route::get('appointments/detail/{id}', 'AppointmentController@detail')->name('appointment.detail');

          Route::resource("package", "PackageController");
          Route::get("savepackage/{id}", "PackageController@savepackage");
          Route::post("updatepackage", "PackageController@updatepackage");
          Route::get("deletepackage/{id}", "PackageController@deletepackage");
          Route::get("changesettingstatus/{fields}", "NotificationController@changesettingstatus");

          Route::get("review", "DoctorController@showreview");
          Route::get("deletereview/{id}", "DoctorController@deletereview");

          Route::get("news", "NotificationController@shownews");
          Route::post("sennews", "NotificationController@sendnews");
          Route::get("contactus", "HomeController@showcontactus");

          Route::get("patient", "HomeController@showpatient");
          Route::get("delete/patient/{id?}","HomeController@deletePatient")->name("delete.patient");

          Route::get("paymentgateway", "PackageController@getpaymentgateway");
          Route::get("editpaymentgateway/{id}", "PackageController@editpaymentgateway");
          Route::post("updatepaymentgateway", "PackageController@updatepaymentgateway");
          Route::get("changestatuspayment/{pay_id}/{status}", "PackageController@changestatuspayment");

          Route::get("subscription", "SubscriptionController@showsubscription");
          Route::get("changepackagestatus/{status}/{id}", "SubscriptionController@changepackagestatus");
          Route::any("chat", "HomeController@showchat")->name("chat");

          Route::get("quick-notification", "QuickNotificationController@index");
          Route::get("quick-notification/show/{id}", "QuickNotificationController@show");
          Route::post("quick-notification/ajaxdata", "QuickNotificationController@ajaxData");
          Route::get('/reset/all', 'FrontController@resetAll');

     });
});

Route::group(['prefix' => 'doctor'], function () {

     Route::get("/", "HomeController@doctorlogin");

     Route::group(['middleware' => ['Doctorcheck']], function () {
          Route::get("settimezone/{time}", "HomeController@settimezone");
          Route::get("dashboard", "AuthenticatedoctorController@showdashboard");
          Route::get("logout", "AuthenticatedoctorController@showlogout");

          Route::any("chat", "AuthenticatedoctorController@showchat")->name("chat");

          Route::get("editprofile/{tab_id}", "AuthenticatedoctorController@editprofile");
          Route::any("updatedoctorprofile", "AuthenticatedoctorController@updatedoctorprofile");
          Route::post("updateworkinghours", "AuthenticatedoctorController@updateworkinghours");
          // Route::get("sendnotification","ChatsController@sendnotification");

          Route::get("appointment", "AppointmentController@showdoctorappointment");
          Route::get("orderstatus/{order_id}/{appointment_id}", "AppointmentController@changeorderstatus");
          Route::any("apmreschedule", "AppointmentController@apmreschedule");
          Route::get("getreferdoctor/{id}", "AppointmentController@getreferdoctor");
          Route::any("apmrefer", "AppointmentController@apmrefer");
          Route::get("review", "AuthenticatedoctorController@showreview");
          Route::get('sender', function () {
               event(new App\Events\FormSubmitted("hetal", "New Messages"));
          });
     });
});


