<table>
    <tr>
        <th style="text-align:left;padding-left: 20px;">Product</th>
        <th></th>
        <th style="min-width:100px;">Quantity</th>
        <th>Subtotal</th>
        <th></th>
    </tr>
    <?php $__currentLoopData = $cartDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="<?php echo e(asset('public/' . $cartDetail->product->photo)); ?>" alt="">
                </div>
            </td>
            <td class="text-left">
                <div>
                    <p><b><?php echo e($cartDetail->product->name); ?></b></p>
                    <?php if($cartDetail->product->offer_price): ?>
                        <small class="small"><span style="text-decoration: line-through;color:red;">Rs.
                                <?php echo e($cartDetail->product->price); ?></span> <span style="color:green;font-size:16px;">Rs.
                                <?php echo e($cartDetail->product->offer_price); ?></span> </small>
                    <?php else: ?>
                        <small class="small" style="color:green;font-size:16px;">Rs:
                            <?php echo e($cartDetail->product->price); ?></small>
                    <?php endif; ?>
                    <br>
                </div>
            </td>
            <td>
                <div class="minus"><span data-id="<?php echo e($cartDetail->product_id); ?>"
                        class="fa fa-minus-square text-secondary substract sub_from_cart"></span>
                    <span class="sapm"><?php echo e($cartDetail->quantity); ?></span>
                    <span data-id="<?php echo e($cartDetail->product_id); ?>"
                        class="fa fa-plus-square text-secondary model_cart_plus add_to_cart">

                    </span>
                </div>
            </td>
            <td>Rs. <?php echo e($cartDetail->amount); ?></td>
            <td>
                <button class="btn btn-sm btn-danger btnRemove" data-id="<?php echo e($cartDetail->product_id); ?>">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<div class="total-price">
    <table>
        <tr>
            <td>Total</td>
            <td>Rs <?php echo e($cart->total_price); ?></td>
        </tr>
    </table>
</div>
<div>
    <a href="<?php echo e(asset('checkout')); ?>" class="checkout">
        <b>Procedure To Checkout</b>
    </a>
</div>
<?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxpages/ajaxcart.blade.php ENDPATH**/ ?>