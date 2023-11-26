<?php $__env->startSection('title'); ?>
Update Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Update Product</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/product')); ?>"><?php echo e(__('Products')); ?></a></li>
               <li class="active">Update Product</li>
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
                        <form action="<?php echo e(route('product.update',[$product->id])); ?>" method="POST" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field('PUT'); ?>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Photo</label>
                                    <img src="<?php echo e(asset('public'.$product->photo)); ?>" style="height: 200px;" />
                                    <input type="file" name="photo" placeholder="Select Photo">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Product Name" value="<?php echo e($product->name); ?>" required>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Category</label>
                                    <select name="category_id" class="form-control" id="categoryID">
                                       <option selected disabled>Select Category</option>
                                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option <?php if($product->category_id==$category->id): ?> selected <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Sub Category</label>
                                    <select name="sub_category_id" class="form-control" id="subCategoryID">
                                       
                                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $category->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($product->sub_category_id==$subCategory->id): ?> selected <?php endif; ?> value="<?php echo e($subCategory->id); ?>"><?php echo e($subCategory->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                       
                                       
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Price</label>
                                    <input class="form-control" type="text" name="price" placeholder="Enter Price" value="<?php echo e($product->price); ?>">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="offer_price">Offer Price</label>
                                    <input class="form-control" type="text" name="offer_price" placeholder="Enter Offer Price" value="<?php echo e($product->offer_price); ?>">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Quantity</label>
                                    <input class="form-control" type="text" name="quantity" placeholder="Enter Quantity" value="<?php echo e($product->quantity); ?>">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Type</label>
                                    <select name="type" id="" class="form-control">
                                       <option value="Select Type" disabled >Select Type</option>
                                       <option <?php if($product->type=="Piece"): ?> selected="selected" <?php endif; ?> value="Piece">Piece</option>
                                       <option <?php if($product->type=="Piece"): ?> selected="selected" <?php endif; ?> value="Dozen">Dozen</option>
                                       <option <?php if($product->type=="Piece"): ?> selected="selected" <?php endif; ?> value="Packet">Packet</option>
                                       <option <?php if($product->type=="Piece"): ?> selected="selected" <?php endif; ?> value="Box">Box</option>
                                       <option <?php if($product->type=="Piece"): ?> selected="selected" <?php endif; ?> value="Patta">Patta</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Gallery</label><br>
                                    <?php $__currentLoopData = $productGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productGallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <img class="col-sm-4" src="<?php echo e(asset('public/storage/'.$productGallery->image_path)); ?>" height="200px" />
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <input type="file" name="gallery[]" multiple class="form-control">
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="name">Expiry</label>
                                    <input type="date" name="expiry_date" multiple class="form-control" value="<?php echo e($product->expiry_date); ?>">
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"><?php echo e($product->description); ?></textarea>
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
//   $('#categoryID').on('change',function(){
//       let category_id = $(this).val();
//       let sub_category_id = "<?php echo e($product->sub_category_id); ?>";
//       $.ajax({
//          headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
//          url:"<?php echo e(route('get.subCategory')); ?>",
//          method:"POST",
//          data:{
//               "_token": "<?php echo e(csrf_token()); ?>",
//               'category_id':category_id,
//               'sub_category_id':sub_category_id,
//          },
//          success: function(data){
//             $('#subCategoryID').empty();
//             $("#subCategoryID").append('<option value="" selected="selected">Select Sub Category</option>');
//             $.each(data.data, function (key, value) {
//               if(value.id==data.sub_category_id)
//                   $("#subCategoryID").append('<option selected="selected" value="' + value.id + '">' + value.name + '</option>');
//               else
//                   $("#subCategoryID").append('<option value="' + value.id + '">' + value.name + '</option>');
//             });
//          },
//          error: function(error){
//              console.log(error)
//               // alert('error');
//          }
//       });

//   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/admin/products/edit.blade.php ENDPATH**/ ?>