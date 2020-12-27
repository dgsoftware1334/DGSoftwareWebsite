

<?php $__env->startSection('content'); ?>


  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
              <a class="btn btn-primary btn-round btn-lg text-white pull-right" href="<?php echo e(url('cours/create')); ?>" title="Ajouter Cours">Ajouter</a>
            <h4 class="card-title">Liste des cours</h4>
            <div class="col-12 mt-2">
                  <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
          <div class="card-body ">
           
            <div class="container">
                <div class="row">
                <?php $__currentLoopData = $cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-4 col-sm-4" style="padding-top: 20px; padding-bottom: 20px; margin-top: 20px; margin-bottom: 20px;">
                    <a href="<?php echo e(url('cours/'.$g->id)); ?>" >
                      <div class="card text-white" style="height: 230px;">
                        <form  action="<?php echo e(url('storage/'.$g->thumbnail)); ?>" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer ce cours?')">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" class="btn btn-danger btn-icon btn-sm pull-right" data-original-title="Suprrimer Profil" title="Supprimer"><i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                        </form>
                      <img class="card-img" src="<?php echo e(asset('storage/'.$g->thumbnail)); ?>" alt="<?php echo e($g->cours); ?>" style=" height: inherit;">
                      <div class="card-img-overlay">
                        <h4 class="card-title"><?php echo e($g->Cours); ?></h4>
                        <p class="card-text"><?php echo e(Str::limit($g->Description , 200,'...')); ?></p>
                        <p class="card-text"><?php echo e($g->Durée); ?></p>
                      </div>
                    </div>
                                      
                    </a>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>  
          </div>


          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'namePage' => 'Cours',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/cours/index.blade.php ENDPATH**/ ?>