<?php $__env->startSection('showgroup'); ?>
<div class="row">
  <div class="col-sm-10">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kierunek: <?php echo e($row['kierunek']); ?></h5>
        <p class="card-text">
      <p>Semestr: <?php echo e($row['semestr']); ?></p>
      <p>Grupa dziekańska: <?php echo e($row['gr_dziekanska']); ?></p>
      </p>
     <a href="<?php echo e(url('livetable')); ?>" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\test5\resources\views/showgroup.blade.php ENDPATH**/ ?>