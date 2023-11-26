<table>
    <tr>
        <th style="text-align:left;padding-left: 20px;">Product</th>
        <th></th>
        <th style="min-width:100px;">Quantity</th>
        <th>Subtotal</th>
        <th></th>
    </tr>
    @foreach ($cartDetails as $cartDetail)
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('public/' . $cartDetail->product->photo) }}" alt="">
                </div>
            </td>
            <td class="text-left">
                <div>
                    <p><b>{{ $cartDetail->product->name }}</b></p>
                    @if ($cartDetail->product->offer_price)
                        <small class="small"><span style="text-decoration: line-through;color:red;">Rs.
                                {{ $cartDetail->product->price }}</span> <span style="color:green;font-size:16px;">Rs.
                                {{ $cartDetail->product->offer_price }}</span> </small>
                    @else
                        <small class="small" style="color:green;font-size:16px;">Rs:
                            {{ $cartDetail->product->price }}</small>
                    @endif
                    <br>
                </div>
            </td>
            <td>
                <div class="minus"><span data-id="{{ $cartDetail->product_id }}"
                        class="fa fa-minus-square text-secondary substract sub_from_cart"></span>
                    <span class="sapm">{{ $cartDetail->quantity }}</span>
                    <span data-id="{{ $cartDetail->product_id }}"
                        class="fa fa-plus-square text-secondary model_cart_plus add_to_cart">

                    </span>
                </div>
            </td>
            <td>Rs. {{ $cartDetail->amount }}</td>
            <td>
                <button class="btn btn-sm btn-danger btnRemove" data-id="{{ $cartDetail->product_id }}">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </td>

        </tr>
    @endforeach
</table>
<div class="total-price">
    <table>
        <tr>
            <td>Total</td>
            <td>Rs {{ $cart->total_price }}</td>
        </tr>
    </table>
</div>
<div>
    <a href="{{ asset('checkout') }}" class="checkout">
        <b>Procedure To Checkout</b>
    </a>
</div>
