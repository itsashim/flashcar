<?php $__env->startSection('title'); ?>
    Edit Hospital
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/summernote/summernote.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Service Provider</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="<?php echo e(url('admin/city')); ?>"><?php echo e(__('messages.Cities')); ?></a></li>
                        <li class="active">Edit Hospital</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal -->
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are You Sure You Want To Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
          <!--&times;-->
        </button>
      </div>
      <div class="modal-body">
            <form method="post" id="banner-form">
                <span class="text-light bg-info p-2 m-1" style="border-radius:10px;position:relative;text-align:center">Banner Image Will Get Permanently Deleted!</span><br><br>
                <?php echo csrf_field(); ?>
                <div id="banner_content"></div>    
                <button type="submit" class="btn btn-danger ">Yes Remove</button>
            </form>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary float-right p-1 m-1" onclick="removeElement();" data-dismiss="modal">Close</button>
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
                            <?php if(Session::get('message')): ?>
                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    <?php echo e(Session::get('message')); ?>

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
                            <form action="<?php echo e(route('serviceProvider.update', ['serviceProvider' =>$hospital->id])); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Logo</label><br />
                                            <?php if($hospital->logo): ?>
                                                <img src="<?php echo e(asset('public' . $hospital->logo)); ?>" height="200px" />
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('public/images/hospital.png')); ?>" height="200px" />
                                            <?php endif; ?>
                                            <input type="file" name="logo" placeholder="Select Logo">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Enter Hospital Name" value="<?php echo e($hospital->name); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">FirstName</label>
                                            <input class="form-control" type="text" name="first_name"
                                                placeholder="Enter Hospital FirstName" value="<?php echo e($hospital->first_name); ?>"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">LastName</label>
                                            <input class="form-control" type="text" name="last_name"
                                                placeholder=" Enter Hospital LastName" value="<?php echo e($hospital->last_name); ?>"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="appointment_fee">Appointment Fee</label>
                                            <input class="form-control" type="text" name="appointment_fee"
                                                placeholder="Enter Appointment Fee"
                                                value="<?php echo e($hospital->appointment_fee); ?>" >
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">City</label>
                                            <select name="city_id" class="form-control" required>
                                                <option disabled>Select City</option>
                                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if($city->id == $hospital->city_id): ?> selected="selected" <?php endif; ?>
                                                        value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="facebook_url">Facebook</label>
                                            <input type="text" name="facebook_url" class="form-control"
                                                value="<?php echo e($hospital->facebook_url); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="twitter_url">Twitter</label>
                                            <input type="text" name="twitter_url" class="form-control"
                                                value="<?php echo e($hospital->twitter_url); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="instagram_url">Instagram</label>
                                            <input type="text" name="instagram_url" class="form-control"
                                                value="<?php echo e($hospital->instagram_url); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="linkedin_url">LinkedIn</label>
                                            <input type="text" name="linkedin_url" class="form-control"
                                                value="<?php echo e($hospital->linkedin_url); ?>" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="department">Select Department</label>
                                            <?php
                                            $department_ids = [];
                                            $department_ids = json_decode($hospital->department_ids);
                                            ?>
                                            <?php if($department_ids != null): ?>
                                                <select name="department_ids[]" required class="form-control select2" multiple >
                                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php if(in_array($department->id, $department_ids)): ?> selected="selected" <?php endif; ?>
                                                            value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            <?php else: ?>
                                                <select name="department_ids[]" required class="form-control select2" multiple>
                                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input class="form-control" type="text" name="phone"
                                                placeholder="Enter Phone Number" value="<?php echo e($hospital->phone); ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <input class="form-control" type="text" name="address"
                                                placeholder="Enter Address" value="<?php echo e($hospital->address); ?>">
                                        </div>
                                    </div>
                                    <select class="form-control" id="type" name="partner_type">
                                        <option value="lab">Lab</option>
                                        <option value="clinic">PolyClinic</option>
                                        <option value="pharmacy">Pharmacy</option>
                                    </select>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Enter Email" required value="<?php echo e($hospital->email); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Password( Only fill to update new password )</label>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Enter Password">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Banner Images</label>
                                            <input type="file" name="gallery[]" multiple class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                            <div class="card__container" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem;">
                                        <?php $__currentLoopData = $hospitalGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- card -->
                                                <div class="card my-3" >
                                                  <img class="card-img-top" src="<?php echo e(asset('public/storage/'.$gallery->image_path)); ?>" height="200px" alt="Hospital Banner Image">
                                                  <div class="card-body text-center">
                                                        <a href="javascript:void(0)" class="btn btn-danger" id="banner-<?php echo e($gallery->id); ?>" data="<?php echo e($gallery->id); ?>" data-toggle="modal" data-target="#exampleModal-<?php echo e($gallery->id); ?>" >Delete</a>
                                                  </div>
                                                </div>

                                            <script>
                                                let banner_<?php echo e($gallery->id); ?> = document.querySelector('#banner-<?php echo e($gallery->id); ?>')
                                                let data_<?php echo e($gallery->id); ?> = banner_<?php echo e($gallery->id); ?>.getAttribute('data')
                                                let modal_<?php echo e($gallery->id); ?> = document.querySelector('.modal')
                                                let form_<?php echo e($gallery->id); ?> = document.querySelector("#banner-form")
                                                let banner_content_<?php echo e($gallery->id); ?> = document.querySelector("#banner_content")
                                                let url_<?php echo e($gallery->id); ?> = "<?php echo e(route('remove.banner',['id'=> $gallery->id])); ?>"
                                                banner_<?php echo e($gallery->id); ?>.addEventListener("click",()=>{
                                                    modal_<?php echo e($gallery->id); ?>.setAttribute("id","exampleModal-<?php echo e($gallery->id); ?>")
                                                    form_<?php echo e($gallery->id); ?>.setAttribute("action",url_<?php echo e($gallery->id); ?>)
                                                    let input = document.createElement("input")
                                                    input.setAttribute("type","hidden")
                                                    input.setAttribute("id","img_data_<?php echo e($gallery->id); ?>")
                                                    input.setAttribute("name","img_data")
                                                    input.setAttribute("class","banner-form-data")
                                                    input.setAttribute("value",data_<?php echo e($gallery->id); ?>)
                                                    banner_content_<?php echo e($gallery->id); ?>.appendChild(input)
                                                    // console.log(data_<?php echo e($gallery->id); ?>)
                                                });
                                            </script>
                                            <!-- card end -->

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Detail</label>
                                            <textarea name="detail" class="form-control summernote" id="" cols="30" rows="10"><?php echo e($hospital->detail); ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Document <a href="<?php echo e(asset('public/'.$hospital->document)); ?>">View Document</a> </label>
                                            <input type="file" name="document" placeholder="Select Document" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12" <?php if(auth()->user()->usertype == 4): ?> style="display:none;" <?php endif; ?>>
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <select name="status" class="form-control">
                                                <option <?php if($hospital->status == 'Pending'): ?> selected="selected" <?php endif; ?>>Pending
                                                </option>
                                                <option <?php if($hospital->status == 'Approved'): ?> selected="selected" <?php endif; ?>>
                                                    Approved</option>
                                                <option <?php if($hospital->status == 'Disabled'): ?> selected="selected" <?php endif; ?>>
                                                    Disabled</option>
                                            </select>
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
    <script src="<?php echo e(asset('public/select2/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/summernote/summernote.min.js')); ?>"></script>
    <script>
        $('.select2').select2({
            "tags": true,
        });

        $('.summernote').summernote();
    </script>
    <script>
         const removeElement = ()=>{
            let inputs = document.querySelectorAll(".banner-form-data")
            inputs.forEach(input => {
                input.remove()
            })
        }
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/admin/hospital/edit.blade.php ENDPATH**/ ?>