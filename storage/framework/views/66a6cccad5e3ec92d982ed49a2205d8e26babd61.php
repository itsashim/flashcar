<div class="row">
    <div class="col-sm-12">
        <h3 class="text-center text-bold mt-5">Book Appointment Now</h3>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <img style="height: 200px;width:200px;" class="img-thumbnail" src="<?php echo e(asset('public/upload/doctor/'.$doctor->image)); ?>" /><br/>
        <div style="width: 200px;" class="text-center">
            <b style="width: 200px;font-size:20px;" class="text-center"><?php echo e($doctor->name); ?></b>
            <span style="width: 200px;"><?php echo e($doctor->department->name); ?></span>

            <h6>Booking Date Time: <?php echo e($date); ?> <?php echo e($time); ?></h6>
        </div>

    </div>
    <div class="col-sm-5">
        <?php if(auth()->check()): ?>

        <div class="form-group">
            <label for="">Name</label> <?php echo e(auth()->user()->name); ?>

            <input type="hidden" hidden id="bookAuthId" value="<?php echo e(auth()->user()->id); ?>"/>
        </div>

        <?php else: ?>

        <div class="form-group">
            <label for="">Name</label>
            <input id="book_name" class="form-control" type="text" name="name" placeholder="Enter Name" />
        </div>

        <div class="form-group">
            <label for="">Contact Number</label>
            <input id="book_contact_number" class="form-control" type="text" name="phone_number" placeholder="Enter Phone Number" />
        </div>

        <div class="form-group">
            <label for="">Message</label>
            <input id="book_message" class="form-control" type="text" name="message" placeholder="Enter Message" />
        </div>
        <?php endif; ?>
        <div class="form-group">
            <input hidden type="hidden" id="book_doc_id" value="<?php echo e($doctor->id); ?>" />
            <input hidden type="hidden" id="book_department_id" value="<?php echo e($doctor->department_id); ?>" />
            <input hidden type="hidden" id="book_date" value="<?php echo e($date); ?>" />
            <input hidden type="hidden" id="book_time" value="<?php echo e($time); ?>" />
            <button id="bookNow" class="btn btn-success">Book Appointment</button>
        </div>
    </div>
</div><?php /**PATH /home2/sathiservice/public_html/resources/views/front/modals/doctordetails.blade.php ENDPATH**/ ?>