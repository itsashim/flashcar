<?php $__env->startSection('title'); ?>
Order Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Order Detail</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/order')); ?>"><?php echo e(__('Orders')); ?></a></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">

   <div class="row">

      
      
      <div class="col-sm-12">
         <div class="card">
            <div class="card-head">
               <?php $user = \App\User::whereId($order->user_id)->first(); ?>

               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Order ID</th>
                        <th>#<?php echo e($order->id); ?></th>
                     </tr>
                     <?php if(auth()->user()->usertype==2): ?>
                     <tr>
                        <th>Customer</th>
                        <th><?php echo e($user->name); ?></th>
                     </tr>
                     <tr>
                        <th>Email</th>
                        <th><?php echo e($user->email); ?></th>
                     </tr>
                     <tr>
                        <th>Phone No</th>
                        <th><?php echo e($user->phone_no); ?></th>
                     </tr>
                     <tr>
                        <th>Address</th>
                        <th><?php echo e($user->address); ?></th>
                     </tr>
                    <tr>
                        <th>Seller</th>
                        <th><?php echo e(($seller_name)?$seller_name :"-"); ?></th>
                    </tr>
                     <?php endif; ?>
                     
                     
                  </thead>
               </table>

            </div>
            <div class="card-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th style="text-align:left;padding-left: 20px;">Products</th>
                        <th></th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $totalAmount = 0; ?>
                     <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(auth()->user()->usertype==2): ?>
                           <tr>
                              <td>
                                 <div class="cart-info">
                                    <img src="<?php echo e(asset('public/'.$cartDetail->product->photo)); ?>"
                                          alt="">
                                    </div>
                                    </td>
                                    <td  class="text-left">
                                          <div>
                                          <p><b><?php echo e($cartDetail->product->name); ?></b></p>
                                          <?php if($cartDetail->seller_id): ?>
                                          <small class="small">Seller: <?php echo e($cartDetail->seller_name); ?> ( <?php echo e($cartDetail->seller_phone); ?> )</small>
                                          <?php endif; ?>
                                          <br>
                                    </div>
                                    </td>
                              <td>
                                 <?php echo e($cartDetail->quantity); ?>

                              </td>
                              <td>Rs. <?php echo e($cartDetail->amount); ?></td>
                              <td>
                                 <?php if($cartDetail->status=="Pending"): ?>
                                    <span class="badge badge-primary switch_status" data-status="<?php echo e($cartDetail->status); ?>" data-id="<?php echo e($cartDetail->id); ?>"><?php echo e($cartDetail->status); ?> </span>
                                 <?php elseif($cartDetail->status == "Delivered"): ?>
                                    <span class="badge badge-success switch_status" data-status="<?php echo e($cartDetail->status); ?>" data-id="<?php echo e($cartDetail->id); ?>"><?php echo e($cartDetail->status); ?> </span>
                                 <?php elseif($cartDetail->status == "Not Available"): ?>
                                    <span class="badge badge-danger switch_status" data-status="<?php echo e($cartDetail->status); ?>" data-id="<?php echo e($cartDetail->id); ?>"><?php echo e($cartDetail->status); ?> </span>
                                 <?php else: ?>
                                    <span class="badge badge-success"><?php echo e($cartDetail->status); ?></span>
                                 <?php endif; ?>
                              </td>
                           </tr>
                        <?php elseif(auth()->user()->usertype==5): ?>
                           <?php
                              $seller = \App\Seller::where('user_id',auth()->user()->id)->first();
                           ?>
                              <?php if($seller && $seller->id==$cartDetail->seller_id): ?>
                              <tr>
                                 <td>
                                    <div class="cart-info">
                                       <img src="<?php echo e(asset('public/'.$cartDetail->product->photo)); ?>" alt="">
                                    </div>
                                 </td>
                                 <td  class="text-left">
                                    <div>
                                       <p><b><?php echo e($cartDetail->product->name); ?></b></p>
                                       <br>
                                    </div>
                                 </td>
                                 <td>
                                    <?php echo e($cartDetail->quantity); ?>

                                 </td>
                                 <td>
                                    Rs. <?php echo e($cartDetail->amount); ?>

                                    <?php $totalAmount = $totalAmount + $cartDetail->amount; ?>
                                 </td>
                                 <td>
                                    <?php if($cartDetail->status=="Pending"): ?>
                                       <span class="badge badge-primary switch_status" data-status="<?php echo e($cartDetail->status); ?>" data-id="<?php echo e($cartDetail->id); ?>"><?php echo e($cartDetail->status); ?> </span>
                                    <?php elseif($cartDetail->status == "Delivered"): ?>
                                       <span class="badge badge-success" data-status="<?php echo e($cartDetail->status); ?>" data-id="<?php echo e($cartDetail->id); ?>"><?php echo e($cartDetail->status); ?> </span>
                                    <?php elseif($cartDetail->status == "Not Available"): ?>
                                       <span class="badge badge-danger" data-status="<?php echo e($cartDetail->status); ?>" data-id="<?php echo e($cartDetail->id); ?>"><?php echo e($cartDetail->status); ?> </span>
                                    <?php else: ?>
                                       <span class="badge badge-success"><?php echo e($cartDetail->status); ?></span>
                                    <?php endif; ?>
                                 </td>
                              </tr>
                              <?php endif; ?>
                        <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                     <tr>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td>
                           <?php if(auth()->user()->usertype==2): ?>
                           Rs. <?php echo e($order->total_price); ?>

                           <?php elseif(auth()->user()->usertype==5): ?>
                           Rs. <?php echo e($totalAmount); ?>

                           <?php endif; ?>
                        </td>
                     </tr>
                     <tr>
                        <td>Status
                           <span class="badge badge-success"><?php echo e($order->status); ?></span>
                           <button  class="btn btn-primary order_status" data-id="<?php echo e($order->id); ?>" data-status="<?php echo e($order->status); ?>">
                              Change Status
                           </button>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </tfoot>
      
                </table>
            </div>
         </div>
         
      </div>
   </div>
</div>
<div id="orderStatusModal" class="modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form action="<?php echo e(route('order.status')); ?>" method="POST">
         <?php echo csrf_field(); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Order Status</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <input type="text" style="display:none;" id="orderID" name="id" />
         <select class="form-control" id="orderStatus" name="status">
            <option value="Pending">Pending</option>
            <option value="Complete">Complete</option>
            <option value="Cancelled">Cancelled</option>
         </select>
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Update</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       </div>
     </div>
      </form>
   </div>
 </div>
<div id="orderDetailStatusModal" class="modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form action="<?php echo e(route('order.detail.status')); ?>" method="POST">
         <?php echo csrf_field(); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Order Detail Status</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <input type="text" style="display:none;" id="orderDetailID" name="id" />
         <select class="form-control" id="orderDetailStatus" name="status">
            <option value="Pending">Pending</option>
            <option value="Delivered">Delivered</option>
            <option value="Not Available">Not Available</option>
         </select>
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Update</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       </div>
     </div>
      </form>
   </div>
 </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
   $(document).on('click','.order_status',function(){
      let id = $(this).data('id');
      let status = $(this).data('status');
      $("#orderID").val(id);
      $('#orderStatus').val(status);
      $('#orderStatusModal').modal('show');
   });
   
   $(document).on('click','.switch_status',function(){
      let id = $(this).data('id');
      let status = $(this).data('status');
      $('#orderDetailID').val(id);
      $('#orderDetailStatus').val(status);
      $('#orderDetailStatusModal').modal('show');
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/orders/show.blade.php ENDPATH**/ ?>