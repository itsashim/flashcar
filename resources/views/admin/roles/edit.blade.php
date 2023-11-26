@extends('admin.layout')
@section('title')
Edit Role
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Edit Role</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/city')}}">{{__('messages.Cities')}}</a></li>
               <li class="active">Edit Role</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-10">
            <div class="card">
               <div class="card-head">
                  <h3 class="card-header">{{ $role->name }}</h3>
                  <span class="float-right" style="margin-right:20px;">
                     Mark All: <input type="checkbox" class="check_all" />
                  </span>
               </div>
               <form action="{{ route('role.update',[$role->id]) }}" method="POST">
                  @csrf
                  @method('PUT')
               <div class="card-body">
                  <table class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <td>Modules</td>
                           <td>View</td>
                           <td>Create</td>
                           <td>Update</td>
                           <td>Delete</td>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Album</td>
                           <td>
                              <input type="checkbox" name="album-view" class="permission_check " @if($role->hasPermissionTo('album-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="album-create" class="permission_check " @if($role->hasPermissionTo('album-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="album-edit" class="permission_check " @if($role->hasPermissionTo('album-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="album-delete" class="permission_check " @if($role->hasPermissionTo('album-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Appointment</td>
                           <td>
                              <input type="checkbox" name="appointment-view" class="permission_check " @if($role->hasPermissionTo('appointment-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="appointment-create" class="permission_check " @if($role->hasPermissionTo('appointment-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="appointment-edit" class="permission_check " @if($role->hasPermissionTo('appointment-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="appointment-delete" class="permission_check " @if($role->hasPermissionTo('appointment-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Blog</td>
                           <td>
                              <input type="checkbox" name="blog-view" class="permission_check " @if($role->hasPermissionTo('blog-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="blog-create" class="permission_check " @if($role->hasPermissionTo('blog-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="blog-edit" class="permission_check " @if($role->hasPermissionTo('blog-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="blog-delete" class="permission_check " @if($role->hasPermissionTo('blog-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Channel</td>
                           <td>
                              <input type="checkbox" name="channel-view" class="permission_check " @if($role->hasPermissionTo('channel-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="channel-create" class="permission_check " @if($role->hasPermissionTo('channel-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="channel-edit" class="permission_check " @if($role->hasPermissionTo('channel-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="channel-delete" class="permission_check " @if($role->hasPermissionTo('channel-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>City</td>
                           <td>
                              <input type="checkbox" name="city-view" class="permission_check " @if($role->hasPermissionTo('city-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="city-create" class="permission_check " @if($role->hasPermissionTo('city-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="city-edit" class="permission_check " @if($role->hasPermissionTo('city-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="city-delete" class="permission_check " @if($role->hasPermissionTo('city-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Contact</td>
                           <td>
                              <input type="checkbox" name="contact-view" class="permission_check " @if($role->hasPermissionTo('contact-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="contact-create" class="permission_check " @if($role->hasPermissionTo('contact-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="contact-edit" class="permission_check " @if($role->hasPermissionTo('contact-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="contact-delete" class="permission_check " @if($role->hasPermissionTo('contact-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Category</td>
                           <td>
                              <input type="checkbox" name="category-view" class="permission_check " @if($role->hasPermissionTo('category-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="category-create" class="permission_check " @if($role->hasPermissionTo('category-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="category-edit" class="permission_check " @if($role->hasPermissionTo('category-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="category-delete" class="permission_check " @if($role->hasPermissionTo('category-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Sub Category</td>
                           <td>
                              <input type="checkbox" name="sub-category-view" class="permission_check " @if($role->hasPermissionTo('sub-category-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="sub-category-create" class="permission_check " @if($role->hasPermissionTo('sub-category-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="sub-category-edit" class="permission_check " @if($role->hasPermissionTo('sub-category-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="sub-category-delete" class="permission_check " @if($role->hasPermissionTo('sub-category-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Page</td>
                           <td>
                              <input type="checkbox" name="page-view" class="permission_check " @if($role->hasPermissionTo('page-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-create" class="permission_check " @if($role->hasPermissionTo('page-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-edit" class="permission_check " @if($role->hasPermissionTo('page-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-delete" class="permission_check " @if($role->hasPermissionTo('page-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Page Category</td>
                           <td>
                              <input type="checkbox" name="page-category-view" class="permission_check " @if($role->hasPermissionTo('page-category-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-category-create" class="permission_check " @if($role->hasPermissionTo('page-category-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-category-edit" class="permission_check " @if($role->hasPermissionTo('page-category-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-category-delete" class="permission_check " @if($role->hasPermissionTo('page-category-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Page Sub Category</td>
                           <td>
                              <input type="checkbox" name="page-sub-category-view" class="permission_check " @if($role->hasPermissionTo('page-sub-category-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-sub-category-create" class="permission_check " @if($role->hasPermissionTo('page-sub-category-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-sub-category-edit" class="permission_check " @if($role->hasPermissionTo('page-sub-category-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="page-sub-category-delete" class="permission_check " @if($role->hasPermissionTo('page-sub-category-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Product</td>
                           <td>
                              <input type="checkbox" name="product-view" class="permission_check " @if($role->hasPermissionTo('product-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="product-create" class="permission_check " @if($role->hasPermissionTo('product-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="product-edit" class="permission_check " @if($role->hasPermissionTo('product-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="product-delete" class="permission_check " @if($role->hasPermissionTo('product-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Order</td>
                           <td>
                              <input type="checkbox" name="order-view" class="permission_check " @if($role->hasPermissionTo('order-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="order-create" class="permission_check " @if($role->hasPermissionTo('order-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="order-edit" class="permission_check " @if($role->hasPermissionTo('order-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="order-delete" class="permission_check " @if($role->hasPermissionTo('order-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Department</td>
                           <td>
                              <input type="checkbox" name="department-view" class="permission_check " @if($role->hasPermissionTo('department-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="department-create" class="permission_check " @if($role->hasPermissionTo('department-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="department-edit" class="permission_check " @if($role->hasPermissionTo('department-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="department-delete" class="permission_check " @if($role->hasPermissionTo('department-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Department Service</td>
                           <td>
                              <input type="checkbox" name="department-service-view" class="permission_check " @if($role->hasPermissionTo('department-service-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="department-service-create" class="permission_check " @if($role->hasPermissionTo('department-service-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="department-service-edit" class="permission_check " @if($role->hasPermissionTo('department-service-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="department-service-delete" class="permission_check " @if($role->hasPermissionTo('department-service-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Doctor</td>
                           <td>
                              <input type="checkbox" name="doctor-view" class="permission_check " @if($role->hasPermissionTo('doctor-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="doctor-create" class="permission_check " @if($role->hasPermissionTo('doctor-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="doctor-edit" class="permission_check " @if($role->hasPermissionTo('doctor-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="doctor-delete" class="permission_check " @if($role->hasPermissionTo('doctor-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Gallery</td>
                           <td>
                              <input type="checkbox" name="gallery-view" class="permission_check " @if($role->hasPermissionTo('gallery-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="gallery-create" class="permission_check " @if($role->hasPermissionTo('gallery-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="gallery-edit" class="permission_check " @if($role->hasPermissionTo('gallery-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="gallery-delete" class="permission_check " @if($role->hasPermissionTo('gallery-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Payment Gateway</td>
                           <td>
                              <input type="checkbox" name="payment-gateway-view" class="permission_check " @if($role->hasPermissionTo('payment-gateway-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="payment-gateway-create" class="permission_check " @if($role->hasPermissionTo('payment-gateway-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="payment-gateway-edit" class="permission_check " @if($role->hasPermissionTo('payment-gateway-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="payment-gateway-delete" class="permission_check " @if($role->hasPermissionTo('payment-gateway-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Price Package</td>
                           <td>
                              <input type="checkbox" name="price-package-view" class="permission_check " @if($role->hasPermissionTo('price-package-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="price-package-create" class="permission_check " @if($role->hasPermissionTo('price-package-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="price-package-edit" class="permission_check " @if($role->hasPermissionTo('price-package-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="price-package-delete" class="permission_check " @if($role->hasPermissionTo('price-package-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Review</td>
                           <td>
                              <input type="checkbox" name="review-view" class="permission_check " @if($role->hasPermissionTo('review-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="review-create" class="permission_check " @if($role->hasPermissionTo('review-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="review-edit" class="permission_check " @if($role->hasPermissionTo('review-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="review-delete" class="permission_check " @if($role->hasPermissionTo('review-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Service</td>
                           <td>
                              <input type="checkbox" name="service-view" class="permission_check " @if($role->hasPermissionTo('service-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="service-create" class="permission_check " @if($role->hasPermissionTo('service-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="service-edit" class="permission_check " @if($role->hasPermissionTo('service-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="service-delete" class="permission_check " @if($role->hasPermissionTo('service-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Setting</td>
                           <td>
                              <input type="checkbox" name="setting-view" class="permission_check " @if($role->hasPermissionTo('setting-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="setting-create" class="permission_check " @if($role->hasPermissionTo('setting-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="setting-edit" class="permission_check " @if($role->hasPermissionTo('setting-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="setting-delete" class="permission_check " @if($role->hasPermissionTo('setting-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Hospital</td>
                           <td>
                              <input type="checkbox" name="hospital-view" class="permission_check " @if($role->hasPermissionTo('hospital-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="hospital-create" class="permission_check " @if($role->hasPermissionTo('hospital-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="hospital-edit" class="permission_check " @if($role->hasPermissionTo('hospital-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="hospital-delete" class="permission_check " @if($role->hasPermissionTo('hospital-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Clinic</td>
                           <td>
                              <input type="checkbox" name="clinic-view" class="permission_check " @if($role->hasPermissionTo('clinic-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="clinic-create" class="permission_check " @if($role->hasPermissionTo('clinic-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="clinic-edit" class="permission_check " @if($role->hasPermissionTo('clinic-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="clinic-delete" class="permission_check " @if($role->hasPermissionTo('clinic-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Seller</td>
                           <td>
                              <input type="checkbox" name="seller-view" class="permission_check " @if($role->hasPermissionTo('seller-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="seller-create" class="permission_check " @if($role->hasPermissionTo('seller-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="seller-edit" class="permission_check " @if($role->hasPermissionTo('seller-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="seller-delete" class="permission_check " @if($role->hasPermissionTo('seller-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Patient</td>
                           <td>
                              <input type="checkbox" name="patient-view" class="permission_check " @if($role->hasPermissionTo('patient-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="patient-create" class="permission_check " @if($role->hasPermissionTo('patient-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="patient-edit" class="permission_check " @if($role->hasPermissionTo('patient-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="patient-delete" class="permission_check " @if($role->hasPermissionTo('patient-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Role</td>
                           <td>
                              <input type="checkbox" name="role-view" class="permission_check " @if($role->hasPermissionTo('role-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="role-create" class="permission_check " @if($role->hasPermissionTo('role-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="role-edit" class="permission_check " @if($role->hasPermissionTo('role-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="role-delete" class="permission_check " @if($role->hasPermissionTo('role-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Subscriber</td>
                           <td>
                              <input type="checkbox" name="subscriber-view" class="permission_check " @if($role->hasPermissionTo('subscriber-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="subscriber-create" class="permission_check " @if($role->hasPermissionTo('subscriber-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="subscriber-edit" class="permission_check " @if($role->hasPermissionTo('subscriber-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="subscriber-delete" class="permission_check " @if($role->hasPermissionTo('subscriber-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>Time Table</td>
                           <td>
                              <input type="checkbox" name="time-table-view" class="permission_check " @if($role->hasPermissionTo('time-table-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="time-table-create" class="permission_check " @if($role->hasPermissionTo('time-table-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="time-table-edit" class="permission_check " @if($role->hasPermissionTo('time-table-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="time-table-delete" class="permission_check " @if($role->hasPermissionTo('time-table-delete')) checked @endif />
                           </td>
                        </tr>
                        <tr>
                           <td>User</td>
                           <td>
                              <input type="checkbox" name="user-view" class="permission_check " @if($role->hasPermissionTo('user-view')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="user-create" class="permission_check " @if($role->hasPermissionTo('user-create')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="user-edit" class="permission_check " @if($role->hasPermissionTo('user-edit')) checked @endif />
                           </td>
                           <td>
                              <input type="checkbox" name="user-delete" class="permission_check " @if($role->hasPermissionTo('user-delete')) checked @endif />
                           </td>
                        </tr>
                     </tbody>
                  </table>
                     
               </div>
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

@stop
@section('footer')
<script>
   $(document).on('click','.check_all',function(){
      if($(this).is(':checked')){
         $('.permission_check').prop('checked',true);
      }else{
         $('.permission_check').prop('checked',false);
      }
   });
</script>
@endsection