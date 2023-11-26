<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-title">
                <h3>Order Detail ( #{{ $order->id }} )</h3>
            </div>
            <div class="card-body">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $products = json_decode($order->products) ?>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <?php $productRow = \App\Product::where('id',$product->product_id)->first(); ?>
                                @if($productRow)
                                 <a href="{{asset('product_details/'.$productRow->slug)}}">{{ $productRow->name }}</a> 
                                @else - @endif
                            </td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

