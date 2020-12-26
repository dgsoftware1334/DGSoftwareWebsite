<?php $__env->startSection('content'); ?>
<div class="panel-header panel-header-sm"></div>

<div class="content">
    <div class="col-md-12">        
        <div class="card">	
			<div class="page-content d-flex align-items-center justify-content-center">
			  <div class="row w-100 mx-0 auth-page">
			    <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
			      <img src="<?php echo e(url('assets/img/404.svg')); ?>" class="img-fluid mb-2" alt="404">
			      <h1 class="font-weight-bold mb-22 mt-2 tx-80 text-muted">403</h1>
			      <h4 class="mb-2">Action non autorisée</h4>
			      <h6 class="text-muted mb-3 text-center">Vous n'avez pas le droit d'administrateur pour réaliser cette action</br>Veuillez Contacter l'admin</h6>
			      <a href="<?php echo e(url('/dashboard')); ?>" class="btn btn-primary">Retour</a>
			    </div>
			  </div>
			</div>

 	</div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Liste des demandes',
    'activePage' => 'demandes',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/errors/403.blade.php ENDPATH**/ ?>