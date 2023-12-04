@extends('front.layout.front')
@section('title')
    {{ __('messages.My Account') }}
@stop
@section('styles')
<style>
      ul > li {
        list-style-type: none;
      }
      .list {
        padding-left: 2px;
      }
      .viewBox.listBox {
        background: #e3dada;
        z-index: 1;
        margin: 4px 0;
        border-radius: 5px;
        padding: 0.5rem;
        background: #fff;
        box-shadow: 0 0 17px 0px rgb(200 200 200 / 50%);
        border: 1px solid #e3e3e3;
      }
      .active {
        padding: 0;
        margin: 0;
        list-style-type: none;
      }

      .active li {
        list-style-type: none;
        border-left: 2px solid #00be9c;
        margin-right: 1rem;
      }
      .active li {
        padding-left: 1em;
        position: relative;
      }
      .sublist > li a::before {
        content: "";
        position: absolute;
        top: 0;
        left: -2px;
        bottom: 50%;
        width: 0.75em;
        border: 2px solid #00be9c;
        border-top: 0 none transparent;
        border-right: 0 none transparent;
      }
      ul > li:last-child {
        border-left: 2px solid transparent;
      }
      .text-green{
        color: #00be9c;
      }
      .wish_img{
        width: 100%;
        max-width: 275px;
        height: 150px;
        margin: 0 auto;
        display: flex;
        align-items: center;
      }
      .wish_img img{
        width: 100%;
      }
</style>
@endsection
@section('content')
@include('front.members.membernav')

<div class="container">
    <br>
    <h2>Cars list</h2>

    <div class="row mx-0">
        @if($products->count()>0)
    @foreach($products as $product)
        <div class="col-sm-6 col-md-6 col-lg-4 prod_{{ $product->id }} ps-0">
            <div class="card mb-2">
                <div class="card-head wish_img" style="text-align: center;padding:10px;">
                    <a href="{{ asset('car_details/'.$product->id) }}">
                    <img src="{{ asset('public/' . $product->carGalleries[0]->image_path) }}"
                        alt="{{ $product->name }}"
                        class=""
                        style="height:auto;"
                    />
                    </a>
                </div>
                <div class="card-body">
                    <a href="{{ asset('car_details/'.$product->id) }}">
                        <span class="text-success text-uppercase ">{{ $product->name }}</span><br/>

                    </a><span class="text-dark">Price:AED {{ $product->daily_fee }}</span>

                    <button class="btn btn-sm btn-danger float-right removeWishlist" alt="Remove from wishlist" data-id="{{ $product->id }}" style="margin-left:1rem;" >
                        <i class="fa fa-trash"></i>
                    </button>

                </div>
            </div>
        </div>
    @endforeach
    @else
    <div class="col-sm-12 p-0">
    <div class="alert alert-warning">No Cars Found!</div>
    </div>
    @endif
    </div>
    <br/>
    <br/>

</div>

@endsection
@section('scripts')


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).on('click','.removeWishlist',function(){
            RemoveWishList();
        });

        const RemoveWishList = () =>{
            //let element = $('.wishlist');
            let id = $('.removeWishlist').data('id');
            console.log(id)
            let url = "{{ asset('wishlist/remove') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "id":id,
                },
                beforeSend:function(){
                    console.log('ajax fired');
                },
                success: function (data) {
                    if(data.status==true){
                        toastr.success("Product has been removed from wishlist");
                        // alert('Product has been removed from wishlist');
                        $('.prod_'+data.id).remove();
                        $('#wishlistTotalCount').html(data.wishlistCount);
                    }else{
                        console.log('error');
                    }
                },
                error:function(xhr){
                    console.log(xhr);
                }
            });
        }

        $(document).on('click', '.moveToCart', function() {

            @if(auth()->user())

            RemoveWishList();

            let id = $(this).data('id');
            let url = "{{ asset('/add-to-cart') }}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: {
                    "id": id,
                },
                beforeSend: function() {
                    console.log('ajax fired');
                },
                success: function(data) {
                    if (data.status == true) {
                        toastr.success(data.message);
                        // alert(data.message);
                        $('.prod_'+data.id).remove();
                        $('#cartTotalCount').html(data.cartCount);
                    } else {
                        console.log(data.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });

            @else

            $('#userLoginModal').modal('show');

            @endif
        });




	</script>
@endsection
