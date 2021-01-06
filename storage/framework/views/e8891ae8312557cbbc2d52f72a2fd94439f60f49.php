
<?php $__env->startSection('content'); ?>
  <div class="panel-header panel-header-sm">
  </div>

<div class="container">
  <div class="row">
    <div class="card ">
      
      <div class="row">
         <div class="col-md-11">
          <div class="card-header">
              <a class="btn btn-primary btn-round btn-lg text-white pull-right" href="<?php echo e(url('cours/'.$cours->id.'/edit')); ?>" title="Ajouter Cours">Modifier</a>
            <h4 class="card-title"> <?php echo e($cours->id); ?>- <?php echo e($cours->Cours); ?></h4>
            <div class="col-11 mt-2">
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
      <div class="row">
        <div class="col-md-11">
          <!--card body-->
          <div class="card-body">
            <!--row1-->
            <div class="row"> 
              <!--element1-->
              <div class="col-md-8">
      	          <div class="embed-responsive embed-responsive-16by9">
                    <video width="700" height="400" controls poster="<?php echo e(asset('storage/'.$cours->video)); ?>" preload="<?php echo e(asset('storage/'.$cours->thumbnail)); ?>"  oncontextmenu="return false;" controlsList="nodownload">
                       <source src="<?php echo e(url('getVideo/'.$cours->id)); ?>" type="video/mp4" >
                       <source src="<?php echo e(url('getVideo/'.$cours->id)); ?>" type="video/ogg" >
                       <source src="<?php echo e(url('getVideo/'.$cours->id)); ?>" type="video/webm" >
                    </video>
      			      </div>
                  <div class="col-md-4 text-right">

                  </div>
              </div>
              <!--element2-->
              <div class="col-md-4">
                <ul class="list-group">
                      <li class="list-group-item"><h6 class="text-primary">Durée :</h6>   <?php echo e($cours->Durée); ?></li>
                      <li class="list-group-item"><h6 class="text-primary">Pack:</h6>   <?php echo e($cours->offre); ?></li>
                      <li class="list-group-item"><h6 class="text-primary">Catégorie :</h6> <?php echo e($cours->catégories); ?></li>
                      <li class="list-group-item"><h6 class="text-primary">Date de création :</h6> <?php echo e($cours->created_at); ?></li>
                      <li class="list-group-item"><h6 class="text-primary">Dérniere modification :</h6> <?php echo e($cours->updated_at); ?></li>
                      <li class="list-group-item"><h6 class="text-primary">Évaluation :</h6><?php echo e($average); ?> <i class="fas fa-star"></i> alt="stars" style="color: yellow; font-color:yellow;"> <br> (<?php echo e($count); ?>) votes <br> <?php echo e($pourc); ?>%</li>
                </ul>
              </div>
              <!--element3-->
              <div class="col-md-12">
                 <li class="list-group-item"><h6 class="text-primary">Description</h6> :</h6> <?php echo e($cours->Description); ?></li>
              </div>
            <!--row2-->
             <div class="row" style="text-align: right;"> 
              
            </div>
          </div>
          <!--end card body-->
      </div>

 	  </div>
    <!--end card-->
    </div>  
  </div>
    <!--end row-->
</div>
  <!--end container-->

<script type="text/javascript">
    $("#input-id").rating();
</script>

          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'namePage' => 'Détails du Cours',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/cours/show.blade.php ENDPATH**/ ?>