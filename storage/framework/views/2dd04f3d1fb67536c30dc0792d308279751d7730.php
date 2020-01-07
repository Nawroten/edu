<?php $__env->startSection('sidebar'); ?>
<ul class="nav flex-column mt-5">
<li class="nav-item btn btn-light p-2 mt-5">
<h6 class="my-0"><a class="text-danger" href="<?php echo e(url('Group.index')); ?>"> Strona główna</a></h6>
</li>
<li class="nav-item btn btn-light p-2 mt-1">
<h6 class="my-0"><a class="text-danger" href="<?php echo e(route('Group.create')); ?>">Grupy</a></h6>
</li>
<li class="nav-item btn btn-light p-2 mt-1">
<h6 class="my-0"><a class="text-danger" href="<?php echo e(route('Student.create')); ?>">Studenci</a></h6>
</li>
<li class="nav-item btn btn-light p-2 mt-1">
<h6 class="my-0"><a class="text-danger" href="<?php echo e(url('livetable')); ?>"> Przykładowa tabela</a></h6>
</li>          
</ul>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\test5\resources\views/sidebar.blade.php ENDPATH**/ ?>