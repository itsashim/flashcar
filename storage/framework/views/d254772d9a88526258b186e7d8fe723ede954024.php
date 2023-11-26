<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.My Account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
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
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('front.members.membernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <br>
    <h2>Product list</h2>

    <div class="row mx-0">
        <?php if($products->count()>0): ?>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 col-md-6 col-lg-4 prod_<?php echo e($product->id); ?>">
            <div class="card mb-2">
                <div class="card-head" style="text-align: center;padding:10px;">
                    <a href="<?php echo e(asset('product_details/'.$product->slug)); ?>">
                    <img src="<?php echo e(asset('public/'.$product->photo)); ?>"
                        alt="<?php echo e($product->name); ?>"
                        class="img-thumbnail"
                        style="height:auto;"
                    />
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo e(asset('product_details/'.$product->slug)); ?>">
                        <span class="text-success text-uppercase "><?php echo e($product->name); ?></span><br/>
                        
                    </a><span class="text-dark">Price:Rs <?php echo e($product->price); ?></span>
                     
                    <button class="btn btn-sm btn-danger float-right removeWishlist" alt="Remove from wishlist" data-id="<?php echo e($product->id); ?>" style="margin-left:1rem;" >
                         <i class="fa fa-trash"></i>
                        
                    </button>
                     
                    <button class="btn btn-sm btn-success float-right moveToCart" alt="Add to wishlist" data-id="<?php echo e($product->id); ?>" style="margin-left:1rem;">
                       <i class="fa  fa-shopping-cart"></i>
                    </button> 
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <div class="col-sm-12">
    <div class="alert alert-warning">No Products Found!</div>
    </div>
    <?php endif; ?>
    </div>
    <br/>
    <br/>

</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>


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
            let url = "<?php echo e(asset('wishlist/remove')); ?>";
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

            <?php if(auth()->user()): ?>
            
            RemoveWishList();
            
            let id = $(this).data('id');
            let url = "<?php echo e(asset('/add-to-cart')); ?>";
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

            <?php else: ?>

            $('#userLoginModal').modal('show');

            <?php endif; ?>
        });
        
        
        
        
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/front/members/wishlist.blade.php ENDPATH**/ ?>