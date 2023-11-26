<?php $__env->startSection('title','Blog'); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/sweetalert2/sweetalert2.min.css')); ?>">
<style type="text/css">
  .hide{
    display: none;
  }
  .alignright>.dt-buttons{
    float: right;
  }
  .dataTables_paginate{
      float: right;
  }
  #blog_table_filter{
    float: right;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="min-height: 1302.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blog List</h3>
                <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Add Blog</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    
                <table id="blog_table" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Created at</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody id="table_body">
                      <?php $i=0; ?>
                      <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td><?php echo e($blog->title); ?></td>
                            <td><img height="150px" src="<?php echo e(asset('public'.$blog->image)); ?>"></img></td>
                            <td><?php echo e($blog->created_at); ?></td>
                            <td>
                                <a class="btn btn-success btn-sm float-left" href="<?php echo e(route('blog.show',[$blog->id])); ?>"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm float-left" href="<?php echo e(route('blog.edit',[$blog->id])); ?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm text-white float-left remove_item" data-id="<?php echo e($blog->id); ?>" data-url="<?php echo e(route('blog.destroy',[$blog->id])); ?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script src="<?php echo e(asset('public/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/plugins/moment/moment.min.js')); ?>"></script>
<script>
    $(function(){
            $('#blog_table').dataTable();

            $(document).on('click','.remove_item',function(){
                let url = $(this).data('url'); 
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                      $.ajax({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: url,
                        type: "DELETE",
                        data: {
                            "id":id,
                        },
                        beforeSend:function(){
                            console.log('ajax fired');
                        },
                        success: function (data) {
                            if(data.status==true){
                              Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                              );
                              $('#table_body').html(data.blogs);
                              $('#category').destroy();
                              $('#category').dataTable();
                            }else{
                              Swal.fire(
                                'Delete Failed',
                                data.message,
                                'warning'
                              );
                            }
                        },
                        error:function(xhr){
                            console.log(xhr);
                        }
                    });

                    }
                });
            });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/blog/index.blade.php ENDPATH**/ ?>