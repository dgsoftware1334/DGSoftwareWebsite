<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed">Nos services</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dynamique'); ?>
    <div class="cut cut-top"></div>

<?php 
 
 	$services = App\Models\Service::all();
 	$photos = App\Models\Galerie::all();


?>
<div class="container">
   <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
   <section id="team" class="section gray-bg">
		<div class="container">
		  <div class="row title text-center">
				<h2 class="margin-top"><?php echo e($service->titre); ?></h2>
				<h4 class="light muted"><?php echo e($service->description); ?></h4>
			</div>  
		  <div id="myCarousel<?php echo e($service->id); ?>" class="carousel slide" data-ride="carousel" style="height:auto; width: auto; padding: 0% 30% 0% 30%;">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		    	<?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    	<?php if($photo->id_service == $service->id): ?> <!--for each picture that belongs to this service-->
			      		<li data-target="#myCarousel<?php echo e($service->id); ?>" data-slide-to="<?php echo e($photo->id); ?>"></li>
			      	<?php endif; ?>
		      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </ol>

		    <!-- Wrapper for slides -->
			    	<div class="carousel-inner" align="center" style="height:auto; width:auto; ">
		    	<?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    	<?php if($photo->id_service == $service->id): ?>
       			      <div class="item  <?php echo e($key == 0 ? 'active' : ''); ?>">
				        <img src="img/<?php echo e($photo->main_image); ?>" id="<?php echo e($photo->id); ?>">
				      </div>
			      	<?php endif; ?>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    		</div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel<?php echo e($service->id); ?>" data-slide="prev">
		      <span class="fa fa-chevron-left" style="padding-top: 150px;"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel<?php echo e($service->id); ?>" data-slide="next">
		      <span class="fa fa-chevron-right" style="padding-top: 150px;"></span>
		      <span class="sr-only">Next</span>
		    </a>    	
		  </div>
		</div>

	</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/services.blade.php ENDPATH**/ ?>