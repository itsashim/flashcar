
@if(Auth::user())

@foreach ($products as $data)

  @if($data->product)
    @foreach($data->product as $key=>$value)
 <div class="col-lg-3 col-md-4 col-sm-6 col-10 p-2">
     <div class="product">
         <!--<div class="product_sale">-->
         <!--  <p class="m-0">Save Rs.100</p>-->
         <!--</div>-->
         <div class="product_img mx-auto">

             <img src="{{ asset('public/' . $value->photo) }}" alt="{{ $value->name }}" />
         </div>
         <div class="product_price d-flex align-items-end  flex-wrap">

             @if ($value->offer_price)
                 <span style="text-decoration:line-through;color:red;display: block">Rs
                     {{ $value->price }}</span>
                 <span class="discount_price me-2">Rs. {{ $value->offer_price }}</span>
             @else
                 <span class="discount_price mt-2">Rs. {{ $value->price }}</span>
             @endif

        
         </div>
         <h5 class="mt-2 product_title">
             <a href="{{ asset('product_details/' . $value->slug) }}">
                 {{ $value->name }}
             </a>
         </h5>
         <!--<p class="mb-0 value_subtitle">BAJAJ OE</p>-->

         @if($value->cartDetails)
         
             @if($value->cartDetails->where('user_id',Auth::user()->id)->count() == 1)
                <p>Already in list</p>

             @endif

         @else   

         <button type="submit" data-id="{{ $value->id }}"
             class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
             data-id="{{ $value->id }}">
             Add to Cartm
         </button>
         
         @endif
      
     </div>
 </div>
    @endforeach

  @endif

@endforeach

@else


@foreach ($products as $product)
    <div class="col-lg-3 col-md-4 col-sm-6 col-10 p-2">
        <div class="product">
            <!--<div class="product_sale">-->
            <!--  <p class="m-0">Save Rs.100</p>-->
            <!--</div>-->
            <div class="product_img mx-auto">

                <img src="{{ asset('public/' . $product->photo) }}" alt="{{ $product->name }}" />
            </div>
            <div class="product_price d-flex align-items-end  flex-wrap">

                @if ($product->offer_price)
                    <span style="text-decoration:line-through;color:red;display: block">Rs
                        {{ $product->price }}</span>
                    <span class="discount_price me-2">Rs. {{ $product->offer_price }}</span>
                @else
                    <span class="discount_price mt-2">Rs. {{ $product->price }}</span>
                @endif

                <!--<span class="discount_price me-2">Rs. {{ $product->offer_price }}</span>-->
                <!--<span class="original_price">Rs. {{ $product->price }}</span>-->
            </div>
            <h5 class="mt-2 product_title">
                <a href="{{ asset('product_details/' . $product->slug) }}">
                    {{ $product->name }}
                </a>
            </h5>
            <!--<p class="mb-0 product_subtitle">BAJAJ OE</p>-->

            @if(Auth::user())
            
              @if($product->cartDetails->where('user_id',Auth::user()->id)->count() == 1)
                 <p>Already in list</p>

              @else   

              <button type="submit" data-id="{{ $product->id }}"
                  class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                  data-id="{{ $product->id }}">
                  Add to Cart
              </button>
             
              @endif

            @else

            <button type="submit" data-id="{{ $product->id }}"
                class="btn btn_add_cart rounded-pill text-white w-100 mt-2 add_to_cart"
                data-id="{{ $product->id }}">
                Add to Cart
            </button>

            @endif 
         
        </div>
    </div>
@endforeach

@endif