

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
  
  <section id="team" class="section gray-bg">
    <div class="container"> 
      <div class="row">
        <?php $__currentLoopData = $galerie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
     
        <div class="col-6 col-md-4">
          <div class="card bg-secondary mb-3">
            <div class="card-header"><h3>Modéle N°<?php echo e($g->id); ?></h3></div>
              <a data-toggle="modal" data-target="#image<?php echo e($g->id); ?>">
                <div class="card-body">
                  <img src="<?php echo e(asset('img/'.$g->main_image)); ?>" alt="<?php echo e($g->catégorie); ?>"  class="img-responsive img-thumbnail" style="width:100%; height:auto;">
                </div>
              </a>
          <div class="modal fade" id="image<?php echo e($g->id); ?>" data-backdrop="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modéle N°<?php echo e($g->id); ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <div class="row"> 
                      <div class="col-md-12" align="center">
                        <img src="<?php echo e(asset('img/'.$g->main_image)); ?>" class="img-fluid image-control img-responsive">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                  </div>
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