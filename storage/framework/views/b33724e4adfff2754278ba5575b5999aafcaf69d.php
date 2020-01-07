<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $Group->Student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li><?php echo e($Student->name); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test5\resources\views/Group/show.blade.php ENDPATH**/ ?>