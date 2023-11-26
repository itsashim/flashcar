<div class="categoryGrid px-0 col-12">
    <div class="form-row">
        @foreach ($products as $product)
            <div class="mb-2 col-lg-3 col-md-4 col-sm-6">
                <a title="Show products in category Orthopaedics" href="{{ asset('product_details/' . $product->slug) }}"
                    target="_self" class="">
                    <article class="card mb-2">
                        <img src="{{ asset('public/' . $product->photo) }}" alt="{{ $product->name }}" class="card-img"
                            width="260px" height="260px" />
                        <div class="card-body text-center">
                            <a href="{{ asset('product_details/' . $product->slug) }}">
                                <!---->

                                <h5>{{ $product->name }}</h5>
                            </a>
                            <span>Rs {{ $product->price }}</span> <br>
                            <button style="background-color: #00be9c; text-transform:capitalize; color:#fff;" data-id="{{ $product->id }}"
                                class="btn add_to_cart mt-2">add to cart</button>

                            <!---->
                </a>

            </div>
            </article>

    </div>
    @endforeach
</div>
</div>
