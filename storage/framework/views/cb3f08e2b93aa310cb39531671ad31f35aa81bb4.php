<?php $__env->startSection('title'); ?>
Create Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Create Page</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/page')); ?>"><?php echo e(__('Page')); ?></a></li>
               <li class="active">Add Page</li>
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
                        <form action="<?php echo e(route('page.store')); ?>" method="POST" enctype="multipart/form-data">
                           <?php echo csrf_field(); ?>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="name">Title</label>
                                    <input class="form-control" type="text" name="title" placeholder="Enter Title Name">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <label for="">Page Category</label>
                                 <select name="page_category_id" class="form-control" id="pageCategory">
                                    <option selected disabled>Select Page Category</option>
                                    <?php $__currentLoopData = $pageCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($pageCategory->id); ?>"><?php echo e($pageCategory->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                              <div class="col-sm-12">
                                 <label for="">Sub Page Category</label>
                                 <select name="page_sub_category_id" id="subPageCategory" class="form-control">
                                    <option selected disabled>Select Sub Page Category</option>
                                 </select>
                              </div>
                              <div class="col-sm-12">
                                 <label for="">Content</label>
                                 <textarea class="summernote" id="textContent" name="content"></textarea>
                              </div>
                              




                              <button class="btn btn-primary">Save</button>
                              
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
   $('.summernote').summernote();

   $("#pageCategory").change(function(){
      let url = "<?php echo e(route('getSubPageCategory')); ?>";
      let id = $(this).val();
      $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: {
                "id":id
            },
            beforeSend:function(){
                console.log('ajax fired');
            },
            success: function (data) {
                if(data.status==true){
                    $("#subPageCategory").empty();
                    $("#subPageCategory").append('<option value="" selected="selected" disabled>Select a Sub Page Category</option>');
                    $.each(data.data, function (key, value) {
                        $("#subPageCategory").append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }else{
                  console.log(data.data);
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });

   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/pages/create.blade.php ENDPATH**/ ?>