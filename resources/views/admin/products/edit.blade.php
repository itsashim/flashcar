@extends('admin.layout')
@section('title')
Update Product
@stop
@section('styles')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Update Product</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/product')}}">{{__('Products')}}</a></li>
               <li class="active">Update Product</li>
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
               <div class="card-body">
                  @if(Session::get("message"))
                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                     {{Session::get("message")}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  <form action="{{ route('product.update',[$product->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="form-group">
                           <label for="name">Photo</label>
                           <img src="{{ asset('public'.$product->photo) }}" style="height: 200px;" />
                           <input type="file" name="photo" placeholder="Select Photo">
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Name</label>
                           <input class="form-control" type="text" name="name" placeholder="Enter Product Name" value="{{ $product->name }}" required>
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Category</label>
                           <select name="category_id" class="form-control" id="categoryID">
                              <option selected disabled>Select Category</option>
                              @foreach($categories as $category)
                              <option @if($product->category_id==$category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Sub Category</label>
                           <select name="sub_category_id" class="form-control" id="subCategoryID">

                              @foreach($categories as $category)
                              @foreach($category->subCategory as $subCategory)
                              <option @if($product->sub_category_id==$subCategory->id) selected @endif value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                              @endforeach
                              @endforeach


                              {{-- @foreach($subcategories as $subcategory)
                                            <option value="{{  $subcategory->id }}">{{ $subcategory->name }}</option>
                              @endforeach --}}
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Bike Brand</label>
                           <select name="bikebrand_id[]" class="form-control" id="brandID" multiple>
                              <option disabled>Select Brand</option>
                              @foreach($brands as $brand)
                              {{-- <option value="{{ $brand->id }}">{{ $brand->name }}</option> --}}

                              <option @if($product->bagbrand_id==$brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->name }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Bike model</label>
                          

                              <select name="bikemodel_id[]" class="form-control" id="modelID" multiple>
                           

                                 @foreach($models as $model)

                                 <option {{ in_array($model->id, $product->bikemodel->pluck('id')->toArray()) ? 'selected' : '' }} value="{{ $model->id }}">{{ $model->name }}</option>
                             
                                 @endforeach

                              </select>
                           </select>
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Price</label>
                           <input class="form-control" type="text" name="price" placeholder="Enter Price" value="{{ $product->price }}">
                        </div>
                     </div>

                     

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Quantity</label>
                           <input class="form-control" type="text" name="quantity" placeholder="Enter Quantity" value="{{ $product->quantity }}">
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Type</label>
                           <select name="type" id="" class="form-control">
                              <option value="Select Type" disabled>Select Type</option>
                              <option @if($product->type=="Piece") selected="selected" @endif value="Piece">Piece</option>
                              <option @if($product->type=="Piece") selected="selected" @endif value="Dozen">Dozen</option>
                              <option @if($product->type=="Piece") selected="selected" @endif value="Packet">Packet</option>
                              <option @if($product->type=="Piece") selected="selected" @endif value="Box">Box</option>
                              <option @if($product->type=="Piece") selected="selected" @endif value="Patta">Patta</option>
                           </select>
                        </div>
                     </div>

                     

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">Expiry</label>
                           <input type="date" name="expiry_date" multiple class="form-control" value="{{ $product->expiry_date }}">
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="form-group">
                           <label for="name">If Accessories Then Select</label>
                           <select name="accessory" id="accessory" class="form-control">
                              <option value="Select Type">Select Type</option>
                              <option value="Yes">Accessories</option>
                              <option value="No">No Accessories</option>
                           </select>
                        </div>
                     </div>

                     <div class="col-sm-12">
                        <div class="form-group">
                           <label>Description</label>
                           <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                        </div>
                     </div>

                     <div class="col-sm-12">
                        <button class="btn btn-primary">Save</button>
                     </div>

                  </div>

                  </form>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>

@stop
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
   //   $('#categoryID').on('change',function(){
   //       let category_id = $(this).val();
   //       let sub_category_id = "{{ $product->sub_category_id }}";
   //       $.ajax({
   //          headers: {
   //               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //             },
   //          url:"{{ route('get.subCategory') }}",
   //          method:"POST",
   //          data:{
   //               "_token": "{{ csrf_token() }}",
   //               'category_id':category_id,
   //               'sub_category_id':sub_category_id,
   //          },
   //          success: function(data){
   //             $('#subCategoryID').empty();
   //             $("#subCategoryID").append('<option value="" selected="selected">Select Sub Category</option>');
   //             $.each(data.data, function (key, value) {
   //               if(value.id==data.sub_category_id)
   //                   $("#subCategoryID").append('<option selected="selected" value="' + value.id + '">' + value.name + '</option>');
   //               else
   //                   $("#subCategoryID").append('<option value="' + value.id + '">' + value.name + '</option>');
   //             });
   //          },
   //          error: function(error){
   //              console.log(error)
   //               // alert('error');
   //          }
   //       });

   //   });
</script>
<script>
   $(document).ready(function() {
      $('#brandID').select2();
      $('#modelID').select2();
      // $('#brandID').on('change', function () {
      //  // debugger;

      //     });
   });
</script>
<script>
   $('#categoryID').on('change', function() {
      let category_id = $(this).val();
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         url: "{{ route('get.subCategory') }}",
         method: "POST",
         data: {
            "_token": "{{ csrf_token() }}",
            'category_id': category_id
         },
         success: function(data) {
            $('#subCategoryID').empty();
            $("#subCategoryID").append('<option value="" selected="selected">Select Sub Category</option>');
            $.each(data.data, function(key, value) {
               $("#subCategoryID").append('<option value="' + value.id + '">' + value.name + '</option>');
            });
         },
         error: function(error) {
            // alert('error');
         }
      });

   });
</script>

<script>
   $('#brandID').on('change', function() {
      let bikebrand_id = $(this).val();
      // var selectedIds = $(this).val();
      // $('#selectedIds').val(selectedIds);
      // console.log(bikebrand_id);

      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         url: "{{ route('bikemodelBrand.filterData') }}",
         method: "POST",
         data: {
            "_token": "{{ csrf_token() }}",
            'bikebrand_id': bikebrand_id
         },
         success: function(data) {
            console.log('megha', data);
            $('#modelID').empty();

            var selectedOptions = $('#brandID').val();
            // if (selectedOptions && selectedOptions.length <= 1) {
            $("#modelID").append('<option value="" disabled>Select Bike Model</option>');
            // }
            $.each(data.data, function(key, value) {
               $("#modelID").append('<option value="' + value.id + '">' + value.name + '</option>');
            });
         },
         error: function(error) {
            // alert('error');
         }
      });

   });
</script>
@endsection