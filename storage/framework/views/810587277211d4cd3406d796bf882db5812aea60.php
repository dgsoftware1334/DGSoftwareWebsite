<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed" style="color:black;">Nos services</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dynamique'); ?>
    <div class="cut cut-top"></div>

<?php 
 	$services = App\Models\Service::all();
 ?>

<div class="container">
 <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		<?php
     		$photos = App\Models\Galerie::all()->where('id_service','=',$service->id);
	  	?>

<div class="row">
   <section id="team" class="section gray-bg">
		<div class="container">
		  <div class="row title text-center">
				<h2 class="margin-top"><?php echo e($service->titre); ?></h2>
				<h4 class="light muted"><?php echo e($service->description); ?></h4>
		  </div>  
		  <div class="row">
			<div class="col-md-12" align="right">
				<a type="button" href="<?php echo e(url('/service/'.$service->id)); ?>" class="btn btn-primary boutton">Voir Plus  <span class="fa fa-plus"></span>
		      </a>
  			</div>
		  </div>
		  <div id="myCarousel<?php echo e($service->id); ?>" class="carousel slide" data-ride="carousel" style="height:auto; width: auto; padding: 0% 30% 0% 30%;">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		    	<?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    	<li data-target="#myCarousel<?php echo e($service->id); ?>" data-slide-to="<?php echo e($photo->id); ?>"></li>
			   	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox" align="center">
		    	
			    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    	<div class="item <?php echo e($loop->first ? 'active' : ''); ?>">
			    	   <img class="d-block img-fluid" src="img<?php echo e($photo->main_image); ?>" alt="<?php echo e($photo->catégorie); ?>">
			       </div>
			       
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
	</div>
	
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/services.blade.php ENDPATH**/ ?>