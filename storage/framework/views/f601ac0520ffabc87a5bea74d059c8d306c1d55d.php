


<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed">Nos services</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dynamique'); ?>


<div class="container">
    <?php 
      $galerie = App\Models\Galerie::all()->where('id_service',$service);
    ?>
<div class="row">
   <section id="services" class="section section-padded">
    <div class="container">
      <div class="row title text-center">
        <h2 class="margin-top">Détails</h2>
      </div>
    <?php $__currentLoopData = $galerie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row services">
       <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"> </h5>
                 <img class="d-block img-fluid" src="<?php echo e(asset('img/'.$g->main_image)); ?>" alt="<?php echo e($g->catégorie); ?>">
       
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </section>
</div>
</div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/show.blade.php ENDPATH**/ ?>