<?php $__env->startSection('title'); ?>
<?php echo e(__('Save Service')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<style>
    .toggle {
    cursor: pointer;
    display: inline-block;
  }

  .toggle-switch {
    display: inline-block;
    background-color: #ccc;
    border-radius: 16px;
    width: 58px;
    height: 32px;
    position: relative;
    vertical-align: middle;
    transition: background-color 0.25s;
  }
  .toggle-switch:before, .toggle-switch:after {
    content: "";
  }
  .toggle-switch:before {
    display: block;
    background: linear-gradient(to bottom, #fff 0%, #eee 100%);
    border-radius: 50%;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.25);
    width: 24px;
    height: 24px;
    position: absolute;
    top: 4px;
    left: 4px;
    transition: left 0.25s;
  }
  .toggle:hover .toggle-switch:before {
    background: linear-gradient(to bottom, #fff 0%, #fff 100%);
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.5);
  }
  .toggle-checkbox:checked + .toggle-switch {
    background: #56c080;
  }
  .toggle-checkbox:checked + .toggle-switch:before {
    left: 30px;
  }

  .toggle-checkbox {
    position: absolute;
    visibility: hidden;
  }

  .toggle-label {
    margin-left: 5px;
    position: relative;
    top: 2px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('Save Service')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/doctor')); ?>"><?php echo e(__('Services')); ?></a></li>
               <li class="active"><?php echo e(__('Save Service')); ?></li>
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
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link <?= $tab_id == 1 ? 'active' : "" ?>" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo e(__('messages.Basic Information')); ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?= $tab_id == 2 ? 'active' : "" ?>" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('messages.Working Hours')); ?></a>
                     </li>
                  </ul>
                  <div class="tab-content pl-3 p-1" id="myTabContent">
                     <div class="tab-pane fade <?= $tab_id == 1 ? 'show active' : "" ?>" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="<?php echo e(route('services.store')); ?>" method="post"  enctype="multipart/form-data">
                           <?php echo e(csrf_field()); ?>

                           <input type="hidden" name="id" id="id" value="<?php echo e($doctor_id); ?>"/>
                           <input type="hidden" name="real_image" id="real_image" value="<?php echo e(isset($data->image)?$data->image:''); ?>"/>
                           <div class="form-group">
                              <div class="col-md-6" >
                                 <label for="name" class=" form-control-label">
                                 <?php echo e(__('messages.Select Department')); ?>

                                 <span class="reqfield" >*</span>
                                 </label>
                                 <select id="department" name="department" required class="form-control">
                                    <option value=""><?php echo e(__('messages.Select Department')); ?></option>
                                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($d->id); ?>" <?= isset($data->department_id) && $data->department_id == $d->id ? "selected='selected'" : "" ?> ><?php echo e($d->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                              <div class="col-md-6"> 
                                 <label for="name" class=" form-control-label">
                                 <?php echo e(__('messages.Service Name')); ?>

                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="name" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Service Name')); ?>" class="form-control" required name="name" value="<?php echo e(isset($data->name)?$data->name:''); ?>" >
                              </div>
                           </div>
                           
                         
                           
                           <div class="form-group">
                           
                              <div class="col-md-6">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-6">
                                 <label for="phone" class=" form-control-label">
                                 <?php echo e(__('Service Charge')); ?>

                                 <!--<span class="reqfield" >*</span>-->
                                 </label>
                                 <input type="text" id="appointmentFee" placeholder="<?php echo e(__('messages.Enter').' '.__('Service Fee')); ?>" class="form-control" required name="appointment_fee" value="<?php echo e(isset($data->appointment_fee)?$data->appointment_fee:''); ?>" >
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div>
                       
                           
                       
                      
                           <div class=" col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              <?php echo e(__('messages.About us')); ?>

                              </label>
                              <textarea required id="description" name="aboutus" class="form-control" ><?php echo e(isset($data->about_us)?$data->about_us:''); ?></textarea>
                           </div>
                           
                           
                            <div class="col-md-12 form-group">
                              <label for="city_id" class=" form-control-label">
                                   <?php echo e(__('city')); ?><span class="reqfield" >*</span>
                                   </label>
                                    <select name="city_id" class="form-control">
                                            
                                        <?php if(isset($data->city->name)): ?>
                                            <option value="<?php echo e($data->city->id); ?>" ><?php echo e($data->city->name); ?></option> 
                                        <?php else: ?>
                                             <option value="#">Select City</option>
                                        <?php endif; ?>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 </div>
                           <?php if(auth()->user()->usertype==1 || auth()->user()->usertype==2 || auth()->user()->usertype==4): ?>                           
                           <div class="col-md-12 form-group">
                              <label for="status" class=" form-control-label">
                              <?php echo e(__('messages.Status')); ?><span class="reqfield" >*</span>
                              </label>
                              <select name="status" class="form-control">
                                 <option <?php if(isset($data->status) && $data->status=="Pending"): ?> selected <?php endif; ?>>Pending</option>
                                 <option <?php if(isset($data->status) && $data->status=="Approved"): ?> selected <?php endif; ?>>Approved</option>
                                 <option <?php if(isset($data->status) && $data->status=="Disabled"): ?> selected <?php endif; ?>>Disabled</option>

                              </select>
                           </div>
                           <?php endif; ?>
                           <div class="col-md-12 form-group">
                              <label for="file" class=" form-control-label">  
                              <?php echo e(__('messages.Image')); ?>

                              <!--<span class="reqfield" >*</span>-->
                              </label>
                              <?php if($doctor_id!=0): ?>
                                 <?php if($data->image): ?>
                                 <img src="<?php echo e(asset('public/upload/doctor').'/'.$data->image); ?>" class="imgsize1 btndepartwarning" /> 
                                 <?php else: ?>
                                 <img src="<?php echo e(asset('public/images/doctor.png')); ?>" class="imgsize1 btndepartwarning" /> 
                                 <?php endif; ?>
                              <?php endif; ?>
                              <div>
                                 <input type="file" id="file" name="image" class="form-control-file" accept="image/*">
                              </div>
                           </div>
                           <div>
                              <?php if(Session::get("is_demo")=='1'): ?>
                              <button id="payment-button" type="button" onclick="disablebtn()"  class="btn btn-lg btn-info floatright">
                              <?php echo e(__('messages.Submit')); ?>

                              </button>
                        <?php else: ?>
                             <button id="payment-button" type="submit" class="btn btn-lg btn-info floatright">
                              <?php echo e(__('messages.Submit')); ?>

                              </button>
                        <?php endif; ?>
                             
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane fade <?= $tab_id == 2 ? 'show active' : "" ?> btnsaveoption" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="<?php echo e(url('admin/updateworkinghours')); ?>" method="post"  enctype="multipart/form-data">
                           <?php echo e(csrf_field()); ?>

                           <input type="hidden" name="id" id="id" value="<?php echo e($doctor_id); ?>"/>
                           <div class="table-responsive">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('messages.Day')); ?></th>
                                    <th><?php echo e(__('messages.From')); ?></th>
                                    <th><?php echo e(__('messages.To')); ?></th>
                                    <th><?php echo e(__('Token')); ?></th>
                                    <th><?php echo e(__('messages.Status')); ?></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $arr = [ __('messages.Sunday'),__('messages.Monday'), __('messages.Tuesday'), __('messages.Wednesday'), __('messages.Thursday'), __('messages.Friday'), __('messages.Saturday')]; ?>
                                 <?php $i = 0; ?>
                                 <?php if(count($workinghour)>0): ?>
                                 
                                 <?php $__currentLoopData = $workinghour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr id="tr_<?php echo e($work->id); ?>">
                                    <td><input type="hidden"  name="work_id[]" id="id<?php echo e($i); ?>" value="<?= isset($work->id) ? $work->id : 0 ?>"></td>
                                    <td><input type="text" name="day[]" id="day<?php echo e($i); ?>"  value="<?php echo e($i+1); ?>" class="form-control" />
                                       <?php if(($i+1)==1): ?>
                                       <span><?php echo e($arr[0]); ?></span>
                                       <?php elseif(($i+1)==2): ?>
                                       <span> <?php echo e($arr[1]); ?></span>
                                       <?php elseif(($i+1)==3): ?>
                                       <span><?php echo e($arr[2]); ?></span>
                                       <?php elseif(($i+1)==4): ?>
                                       <span> <?php echo e($arr[3]); ?></span>
                                       <?php elseif(($i+1)==5): ?>
                                       <span> <?php echo e($arr[4]); ?></span>
                                       <?php elseif(($i+1)==6): ?>
                                       <span> <?php echo e($arr[5]); ?></span>
                                       <?php else: ?>
                                       <span> <?php echo e($arr[6]); ?></span>
                                       <?php endif; ?>
                                    </td>
                                    <td><input type="time" name="from[]" id="from<?php echo e($i); ?>" required <?php echo e($work->status==0? 'readonly':''); ?> class="form-control na-field" value='<?= isset($work->from) ? $work->from : "" ?>'  /></td>
                                    <td><input type="time"  name="to[]" id="to<?php echo e($i); ?>" required <?php echo e($work->status==0? 'readonly':''); ?> value="<?= isset($work->to) ? $work->to : "" ?>" class="form-control na-field" onchange="checktime(this.value,'<?php echo e($i); ?>')" /></td>
                                    
                                    <td><input type="number"  name="token[]" required <?php echo e($work->status==0? 'readonly':''); ?> id="token<?php echo e($i); ?>" value="<?= isset($work->token) ? $work->token : "" ?>" min="0" class="form-control na-field" /></td>
                                    
                                     
                           
                                     <td>
                                           <!--<div class="form-check form-switch form-check-custom form-check-solid">-->
                                           <!--     <input class="form-check-input h-25px w-50px" type="checkbox" value=""-->
                                           <!--     id="statusId" checked="<?php echo e($work->status==1? 'checked':''); ?>" data-id="' . $work->id . '" />-->
                                           <!--     <label class="form-check-label" for="flexSwitchChecked">-->
                                           <!--     </label>-->
                                           <!-- </div>-->
                                          <label class="toggle">
                                            <input id="statusId" data-id="<?php echo e($work->id); ?>" <?php echo e($work->status==1? 'checked':''); ?> class="toggle-checkbox" type="checkbox">
                                            <div class="toggle-switch"></div>
                                        </label>
                                     </td>
                                 </tr>
                                 <?php $i++; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                 <?php else: ?>
                                 <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr>
                                    <td><input type="hidden" name="work_id[]" id="id<?php echo e($i); ?>" >#</td>
                                    <td><input type="hidden" name="day[]" id="day<?php echo e($i); ?>"  value="<?php echo e($i+1); ?>" class="form-control" />
                                       <span><?php echo e($a); ?></span>
                                    </td>
                                    <td><input type="time"  name="from[]" id="from<?php echo e($i); ?>" class="form-control"  required /></td>
                                    <td><input type="time"  name="to[]" id="to<?php echo e($i); ?>"  class="form-control" onchange="checktime(this.value,'<?php echo e($i); ?>')" required /></td>
                                    <td><input type="number"  name="token[]" id="token<?php echo e($i); ?>"  class="form-control" onchange="checktime(this.value,'<?php echo e($i); ?>')" required /></td>
                                    
                                 </tr>
                                 <?php $i++; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                 <?php endif; ?>
                              </tbody>
                           </table>
                        </div>
                         <?php if(Session::get("is_demo")=='1'): ?>
                            <button id="payment-button" type="button" onclick="disablebtn()"  class="btn btn-lg btn-info floatright">
                              <?php echo e(__('Submit')); ?>

                            </button>
                        <?php else: ?>
                             <button id="payment-button" type="submit" class="btn btn-lg btn-info floatright">
                              <?php echo e(__('Submit')); ?>

                             </button>
                        <?php endif; ?>
                           
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
  <script>
    
        let na = document.querySelectorAll(".na")
        let na_field = document.querySelectorAll(".na-field")
        na.forEach(element => {
          element.addEventListener("click",()=>{
              na_field.forEach(el => {
                if(element.checked == true)
                {
                    
                    el.disabled=true
                     
                }
                else{
                    el.disabled = false
                }
              })
            })
        })
 </script>
 <script>
 
      $('body').on('click', '#statusId', function() {
         
        const id=$(this).attr("data-id");
        const rowId="tr_"+id;
        const selectedRow=document.getElementById(rowId);
        const fromInput=selectedRow.querySelector('[name="from[]"]');
        const toInput=selectedRow.querySelector('[name="to[]"]');
        const tokenInput=selectedRow.querySelector('[name="token[]"]');
        if($(this).is(':checked')) {
                fromInput.readOnly=false;
                toInput.readOnly=false;
                tokenInput.readOnly=false;
                
        }else{
                fromInput.readOnly=true;
                toInput.readOnly=true;
                tokenInput.readOnly=true;
                tokenInput.value=0;
        }
        
        activeInactiveSave(id, $(this).is(':checked'));
        
    })
    function activeInactiveSave(id, toggleBool){
            $.ajax({
                type: "POST",
                url:" <?php echo e(url('/admin/statusToggle')); ?>/"+ id,
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    'status': toggleBool,
                },
            })
    }
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wheelonpalm.com/public_html/resources/views/admin/doctor/savedoctor.blade.php ENDPATH**/ ?>