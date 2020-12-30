

<?php $__env->startSection('content'); ?>


  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="row">
            <div class="col-md-12">
              <div class="card-header">
                  <a class="btn btn-primary btn-round btn-lg text-white pull-right" href="<?php echo e(url('cours/create')); ?>" title="Ajouter Cours">Ajouter</a>
                <h4 class="card-title">Liste des cours</h4>
                <div class="col-12 mt-2">
                   <?php if(session()->has('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong><?php echo e(session()->get('success')); ?> </strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   <?php elseif(session()->has('error')): ?>
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <strong><?php echo e(session()->get('error')); ?> </strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                    </div>
                   <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body ">
           <div class="row">
                <?php $__currentLoopData = $cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4" style="padding: 0px 15px 230px 15px;">
                        <div class="best-course-pic-text relative-position" style=" height: 230px;" >
                        <div class="best-course-pic relative-position" style=" height: inherit; width: inherit;">
                            <img src="<?php echo e(asset('storage/'.$g->thumbnail)); ?>" alt="" style="height : inherit; width: 100%;">
                            <div class="course-price text-center gradient-bg">
                              <span><?php echo e($g->titre); ?></span>
                            </div>
                            <div class="course-details-btn">
                              <a href="<?php echo e(url('cours/'.$g->id.'/show')); ?>">Voir Cours <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="blakish-overlay"></div>
                          </div>
                          <div class="best-course-text">
                            <div class="course-title mb20 headline relative-position">
                              <h3><?php echo e($g->Cours); ?></h3>
                            </div>
                            <div class="course-meta">
                              <span class="course-category"><?php echo e(Str::limit($g->Description , 100,'...')); ?></span>
                              <form  action="<?php echo e(url('cours/'.$g->id)); ?>" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer ce cours?')">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                                  <button type="submit" class="btn btn-danger btn-round pull-right" data-original-title="Supprimer cours" title="Supprimer"><i class="fas fa-trash"></i></button>
                                  <a href="<?php echo e(url('cours/'.$g->id.'/edit')); ?>" class="btn btn-info btn-round pull-right" data-original-title="Modifier cours" title="Modifier"><i class="fas fa-edit"></i></a>
                               </form>
                            </div>

                          </div>
                        </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
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