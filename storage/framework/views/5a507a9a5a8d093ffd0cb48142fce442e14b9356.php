<?php $__env->startSection('content'); ?>

  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
   <p><?php echo e($message); ?></p>
  </div>
  <?php endif; ?>
<div class="container mt-2">
<br />
  <h3 class="text-center">Wybierz Grupę:</h3>
  <br />
<div class="row">
<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kierunek: <?php echo e($row['kierunek']); ?></h5>
        <p class="card-text">
      <p>Semestr: <?php echo e($row['semestr']); ?></p>
      <p>Grupa dziekańska: <?php echo e($row['gr_dziekanska']); ?></p>
      <p>Id grupy: <?php echo e($row['id_groups']); ?></p> 
      </p>
     <a href="<?php echo e(url('livetable')); ?>" class="btn btn-primary">Wybierz</a>
    </div>
  </div>
  </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<!--  <br />

      <table class="table table-striped table-bordered">
       <tbody>
       
       </tbody>
      </table>
      <?php echo e(csrf_field()); ?>



 
<script>
$(document).ready(function(){
 
 fetch_data();
 
 function fetch_data()
 {
  $.ajax({
   url:"/livetable/fetch_data",
   dataType:"json",
   success:function(data)
   
   {
    var html = '';


 
 
    for(var count=0; count < data.length; count++)
    {
    html +='<tr>';
    html +='<td contenteditable class="column_name" data-column_name="id_group" data-id="'+data[count].id_group+'">'+data[count].id_group+'</td>';
    html +='<td contenteditable class="column_name" data-column_name="kierunek" data-id="'+data[count].id_Student+'">'+data[count].kierunek+'</td>';
    html += '<td contenteditable class="column_name" data-column_name="semestr" data-id="'+data[count].id_Student+'">'+data[count].semestr+'</td>';
    html += '<td contenteditable class="column_name" data-column_name="gr_dziekanska" data-id="'+data[count].id_Student+'">'+data[count].gr_dziekanska+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }
});
</script> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test5\resources\views/Group/index.blade.php ENDPATH**/ ?>