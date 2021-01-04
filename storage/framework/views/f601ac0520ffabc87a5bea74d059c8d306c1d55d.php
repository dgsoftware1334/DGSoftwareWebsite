

  <?php 
      $galerie = App\Models\Galerie::all()->where('id_service',$service);
      $s = App\Models\Service::find($service);
    ?>

<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed" style="color:black;"><?php echo e($s->titre); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dynamique'); ?>
<div class="container">
 
  <div class="container">
    <div class="row">
    <?php $__currentLoopData = $galerie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4" style="height:300px; margin-bottom:20px;">
         <div class="row">
        <div class="card"> 
          <div class="card-body">
            <img src="<?php echo e(asset('img/'.$g->main_image)); ?>" alt="<?php echo e($g->catégorie); ?>" style="width:100%; height:auto;" >
          </div>
        </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>   
  </div>  
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/show.blade.php ENDPATH**/ ?>