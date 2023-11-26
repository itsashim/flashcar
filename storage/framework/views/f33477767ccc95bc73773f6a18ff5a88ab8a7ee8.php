<?php $__env->startSection('title'); ?>
Create Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Create Product</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/city')); ?>"><?php echo e(__('messages.Cities')); ?></a></li>
               <li class="active">Add Product</li>
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
                  <?php if(Session::get("message")): ?>
                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                     <?php echo e(Session::get("message")); ?>

                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <?php endif; ?>
                  <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                     <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
                  <?php endif; ?>  
                        <form action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Photo</label>
                                    <input type="file" name="photo" placeholder="Select Photo" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Product Name" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Category</label>
                                    <select name="category_id" class="form-control" id="categoryID">
                                       <option selected disabled>Select Category</option>
                                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Sub Category</label>
                                    <select name="sub_category_id" class="form-control" id="subCategoryID">
                                    </select>
                                 </div>
                              </div>
                              

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Price</label>
                                    <input class="form-control" type="text" name="price" placeholder="Enter Price">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="offer_price">Offer Price</label>
                                    <input class="form-control" type="text" name="offer_price" placeholder="Enter Offer Price">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Quantity</label>
                                    <input class="form-control" type="text" name="quantity" placeholder="Enter Quantity">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Type</label>
                                    <select name="type" id="" class="form-control">
                                       <option value="Select Type" disabled >Select Type</option>
                                       <option value="Piece">Piece</option>
                                       <option value="Dozen">Dozen</option>
                                       <option value="Packet">Packet</option>
                                       <option value="Box">Box</option>
                                       <option value="Patta">Patta</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Gallery</label>
                                    <input type="file" name="gallery[]" multiple class="form-control">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Expiry</label>
                                    <input type="date" name="expiry_date" multiple class="form-control">
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
   $('#categoryID').on('change',function(){
      let category_id = $(this).val();
      $.ajax({
         headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
         url:"<?php echo e(route('get.subCategory')); ?>",
         method:"POST",
         data:{
               "_token": "<?php echo e(csrf_token()); ?>",
               'category_id':category_id
         },
         success: function(data){
            $('#subCategoryID').empty();
            $("#subCategoryID").append('<option value="" selected="selected">Select Sub Category</option>');
            $.each(data.data, function (key, value) {
               $("#subCategoryID").append('<option value="' + value.id + '">' + value.name + '</option>');
            });
         },
         error: function(error){
               // alert('error');
         }
      });

   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shahbazali.website/wheelonpalms.shahbazali.website/resources/views/admin/products/create.blade.php ENDPATH**/ ?>