




<?php $__env->startSection('dynamique'); ?>

<style type="text/css">
	.caard{
		margin-top: 200px;
		margin-bottom: 200px;
		box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3);
		padding-top: 30px;
       padding-bottom: 20px;
	}
	.column{
		margin: 3px 3px 3px 3px;
		padding: 10px;
		width: 570px;
		height: 500px;

	}
   .card{
       text-align: justify-all;
   }
</style>

<section>

<div class="container caard">
	
<h2 style="text-align: center;"><?php echo e($service->titre); ?></h2>
    <div class="row">
	<?php $__currentLoopData = $galeries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
  <div class="col-sm-6 column"  style=" background-color:  rgba(255, 255, 255, .4); background-image: url('../storage/public/img/Galerie/<?php echo e($g->main_image); ?>'); background-size: 100%; background-repeat: no-repeat; ">
    <div class="card" style="background-color:  rgba(255, 255, 255, .4); ">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center;padding-top: 5px; color: #9c1210;"><?php echo e($g->titre); ?></h3>
        <p class="card-text" style="text-align: justify-all;color: black; font-size: 20px;"><?php echo e($g->description); ?></p>
        <center><a href="<?php echo e(url('/show/categorie/'.$g->id)); ?>" class="btn btn-primary" style="background-color:#345da7;text-align: center;">Voir</a></center>
      </div>
    </div>
  </div>
 

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
  

</div>

</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/indexCategorie.blade.php ENDPATH**/ ?>