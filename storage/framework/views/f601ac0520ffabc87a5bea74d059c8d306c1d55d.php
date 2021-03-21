

  <?php 
      $galerie = App\Models\Galerie::all()->where('id_service',$service);
      $s = App\Models\Service::find($service);
    ?>

<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed" style="color:black;"><?php echo e($s->titre); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dynamique'); ?>

<section>
  <div class="cut cut-top"></div> 
  
  <section class="section gray-bg">
    <div class="container container-fluid"> 
      <div class="row">
         
        <?php $__currentLoopData = $galerie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
     
        <div class="col-md-4">
            <div class="title"><h3>Modéle N°<?php echo e($g->id); ?></h3></div>

              <button data-toggle="modal" data-target="#image<?php echo e($g->id); ?>" class="btn btn-info">
                  <img src="<?php echo e(asset('img'.$g->main_image)); ?>" alt="<?php echo e($g->catégorie); ?>"  class="img-responsive" style="width:100%; height: 250px;">
              </button>
              <!--Modal-->
              <div class="modal fade" id="image<?php echo e($g->id); ?>" data-backdrop="false" style="width:100%;" >
                <div class="modal-dialog modal-lg" style="padding-top: 130px; z-index: 1100;">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Modéle N°<?php echo e($g->id); ?></h5>
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
                        <button type="button"  data-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>     
    </div> 
  </section>
</section>

          
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/show.blade.php ENDPATH**/ ?>