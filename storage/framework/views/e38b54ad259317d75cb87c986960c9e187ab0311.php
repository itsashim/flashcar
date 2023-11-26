<section>
    <form action="<?php echo e(asset('mypatient/update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-grouup">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value="<?php echo e($patient->first_name); ?>" />
        </div>
        <div class="form-grouup">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo e($patient->last_name); ?>" />
        </div>
        <div class="form-grouup">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" value="<?php echo e($patient->phone); ?>" />
        </div>
        <div class="form-grouup">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo e($patient->email); ?>"  />
        </div>
        <div class="form-grouup">
            <label for="age">Age</label>
            <input type="text" class="form-control" name="age" value="<?php echo e($patient->age); ?>" />
        </div>
        <div class="form-grouup">
            <label for="dob">DOB</label>
            <input type="text" class="form-control" name="dob" value="<?php echo e($patient->dob); ?>" />
        </div>
        <div class="form-grouup">
            <label for="dob">Gender</label>
            <input type="text" class="form-control" name="gender" value="<?php echo e($patient->gender); ?>" />
        </div>
        <div class="form-grouup">
            <label for="dob">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo e($patient->address); ?>" />
        </div>
        <div class="form-group">
            <input type="text" name="id" value="<?php echo e($patient->id); ?>" style="display: none;" />
            <button type="submit" class="btn btn-primary" >Update</button>
        </div>

    </form>

</section><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxpages/patient_edit.blade.php ENDPATH**/ ?>