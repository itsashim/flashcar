<?php $i=0; ?>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($blog->title); ?></td>
        <td><img height="150px" src="<?php echo e(asset($blog->image)); ?>"></img></td>
        <td><?php echo e($blog->created_at); ?></td>
        <td>
            <a class="btn btn-success btn-sm float-left" href="<?php echo e(route('blog.show',[$blog->id])); ?>"><i class="fa fa-eye"></i></a>
            <a class="btn btn-primary btn-sm float-left" href="<?php echo e(route('blog.edit',[$blog->id])); ?>"><i class="fa fa-edit"></i></a>
            <a class="btn btn-danger btn-sm float-left remove_item" data-id="<?php echo e($blog->id); ?>" data-url="<?php echo e(route('blog.destroy',[$blog->id])); ?>">
                <i class="fa fa-trash"></i>
            </a>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/admin/blog/ajaxlist.blade.php ENDPATH**/ ?>