
  
<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed" style="color:black;"><?php echo e($service->titre); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dynamique'); ?>

<section>
  <div class="cut cut-top"></div> 
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo e(url('/service')); ?>"> Services</a></li>
      <li class="breadcrumb-item"><a href="<?php echo e(url('/service/'.$service->id)); ?>"> <?php echo e($service->titre); ?></a></li>
      <li class="breadcrumb-item active" aria-current="page">Demo <?php echo e($cat); ?></li>
    </ol>
  </nav>

 <section class="section gray-bg">
    <div class="container container-fluid"> 
      <div class="row">
           
        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
     
        <div class="col-md-4">
              <button data-toggle="modal" data-target="#image<?php echo e($g->id); ?>" class="btn btn-info">
                  <img src="<?php echo e(asset('img'.$g->main_image)); ?>" alt="<?php echo e($g->catégorie); ?>"  class="img-responsive img-fluid">
              </button>
        </div>

              <!--Modal-->
              <div class="modal fade" id="image<?php echo e($g->id); ?>" data-backdrop="false" style="width:100%;" >
                <div class="modal-dialog modal-lg" style="padding-top: 130px; z-index: 1100;">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title"><?php echo e($g->titre); ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                      </div>

                      <div class="modal-body">
                        <div class="row"> 
                          <div class="col-md-auto" align="center">
                            <img src="<?php echo e(asset('img/'.$g->main_image)); ?>" class="img-fluid image-control img-responsive">
                            
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-blue" data-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>     
    </div> 
  </section>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/services/detailsService.blade.php ENDPATH**/ ?>