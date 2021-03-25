

<?php $__env->startSection('content'); ?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt mb">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i> SERVICES</h3>
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success"><b>C'est fait! </b><strong><?php echo e(session()->get('success')); ?> </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> 
            <?php elseif(session()->has('error')): ?>
              <div class="alert alert-danger" role="alert">
               <strong><?php echo e(session()->get('error')); ?> </strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
              </div>
            <?php endif; ?>
            <div align="right">
            	<a href="<?php echo e(url('services/create')); ?>" type="button" class="btn btn-theme03"><i class="fa fa-plus-square"></i> Ajouter Service</a>
            </div>
            <br>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-4 col-sm-12" style="padding-bottom: 10px;"> 
              <div class="dmbox" style="height:400px;">
              	<div align="right">  
		              <form  action="<?php echo e(url('services/'.$service->id)); ?>" method="post" onsubmit="return confirm('Voulez-vous vraiment supprimer le service: <?php echo e($service->titre); ?> avec sa galerie et ses commandes?')">
                                  <?php echo e(csrf_field()); ?>

                                  <?php echo e(method_field('DELETE')); ?>

		              	<a href="<?php echo e(url('services/'.$service->id.'/edit')); ?>" type="button" class="btn btn-theme02">
		              		<i class="fa fa-edit"></i>
		              	</a>
		              	<button type="submit" class="btn btn-theme04"><i class="fa fa-trash-o"></i></button>
		              	
		              </form>
		            </div>

              	<div class="service-icon">
                  <a  href="<?php echo e(url('services/'.$service->id)); ?>" class="">
                  	<img src="<?php echo e(asset('storage/'.$service->photo)); ?>" class="dm-icon img-thumbnail" alt="photo de couverture du service">
                  </a>
                </div>
                <h4 style="color:black;"><?php echo e($service->id); ?>. <?php echo e($service->titre); ?></h4>
                <p><?php echo e($service->description); ?></p>
                <div class="footer">
                	<a href="<?php echo e(url('services/'.$service->id)); ?>" type="button" class="btn btn-primary"><i class="fa fa-picture-o"></i> Galerie</a>
                </div>
	              
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- end dmbox -->
             
          </div>
          <!--  /col-lg-12 -->
        </div>
         
    </section>
    <!-- /wrapper -->
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/BackEnd/services/index.blade.php ENDPATH**/ ?>