<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th><?php echo e($patient->first_name); ?></th>
        </tr>
        <tr>
            <th>Last Name</th>
            <th><?php echo e($patient->last_name); ?></th>
        </tr>
        <tr>
            <th>Age</th>
            <th><?php echo e($patient->age); ?></th>
        </tr>
        <tr>
            <th>DOB</th>
            <th><?php echo e($patient->dob); ?></th>
        </tr>
        <tr>
            <th>Gender</th>
            <th><?php echo e($patient->gender); ?></th>
        </tr>
        <tr>
            <th>Address</th>
            <th><?php echo e($patient->address); ?></th>
        </tr>
    </thead>
</table><?php /**PATH /home/sansarhealth/public_html/resources/views/front/ajaxpages/patient_detail.blade.php ENDPATH**/ ?>