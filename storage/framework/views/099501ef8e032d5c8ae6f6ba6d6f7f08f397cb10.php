<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-title">
                <h3>Order Detail ( #<?php echo e($order->id); ?> )</h3>
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
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php $productRow = \App\Product::where('id',$product->product_id)->first(); ?>
                                <?php if($productRow): ?>
                                 <a href="<?php echo e(asset('product_details/'.$productRow->slug)); ?>"><?php echo e($productRow->name); ?></a> 
                                <?php else: ?> - <?php endif; ?>
                            </td>
                            <td><?php echo e($product->quantity); ?></td>
                            <td><?php echo e($product->amount); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxpages/order_detail.blade.php ENDPATH**/ ?>