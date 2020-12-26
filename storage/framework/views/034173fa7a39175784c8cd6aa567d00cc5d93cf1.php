

<?php $__env->startSection('content'); ?>
<div class="panel-header panel-header-sm">
  </div>


  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><?php echo e(__("Ajouter Nouveau Gérant")); ?></h5>
          </div>
          <div class="card-body">
          	
            <form method="post" action="<?php echo e(route('profile.store')); ?>" autocomplete="off" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
              <?php echo $__env->make('alerts.success', ['key' => 'password_status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="row">
              </div>
                <div class="row">
                	<div class="col-md-3">
                		 <label style="font-size: 14px; font-weight:bold; color: #C49052;"><?php echo e(__(" Nom")); ?></label>
                    </div>
                    <div class="col-md-7 pr-1">
                        <div class="form-group">
                                <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Votre nom complet" value="<?php echo e(old('name')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
              		<div class="col-md-3">
               			<label style="font-size: 14px; font-weight:bold; color: #C49052;"><?php echo e(__(" Adresse mail")); ?></label>
               		</div>
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email pour s'authentifier" value="<?php echo e(old('email')); ?>">
                      <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
               	<div class="col-md-3">
               		 <label style="font-size: 14px; font-weight:bold; color: #C49052;"><?php echo e(__("Mot de passe")); ?></label>
                 </div>
                <div class="col-md-7 pr-1">
                  <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                   <input class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('********')); ?>" type="password" name="password" required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-3">
               	<label style="font-size: 14px; font-weight:bold; color: #C49052;"><?php echo e(__(" Confirmer Mot de passe")); ?></label>
       	      </div>
              <div class="col-md-7 pr-1">
                <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                  <input class="form-control" placeholder="<?php echo e(__('********')); ?>" type="password" name="password_confirmation" required>
                </div>
              </div>
            </div>
            <div class="row">
            	<div class="col-md-3">
               		<label style="font-size: 14px; font-weight:bold; color: #C49052;"><?php echo e(__(" Role")); ?></label>
       	      	</div>
              	<div class="col-md-7 pr-1">
                    <div class="form-group">
                                <div class="form-check form-check-radio form-check-inline">
								    <label class="form-check-label">
								        <input class="form-check-input <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="status" id="exampleRadios1" value="Admin">
								        Admin
								        <span class="form-check-sign"></span>
								    </label>
								</div>
								<div class="form-check form-check-radio form-check-inline">
								    <label class="form-check-label">
								        <input class="form-check-input <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="status" id="exampleRadios2" value="Gérant" checked>
									    Gérant
								        <span class="form-check-sign"></span>
								    </label>
								</div>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
             </div>
             <div class="row">
             	 <div class="col-md-3">
               		<label style="font-size: 14px; font-weight:bold; color: #C49052;"><?php echo e(__("Photo de Profil")); ?></label>
       	      	</div>
				<div class="col-md-7 pr-1">
					<div class="form-group">
						<div class="custom-file">
					    	<input type="file" accept=".png,.jpg,.jpeg," data-default-file="<?php echo e(old('profile_photo_path')); ?>"  class="custom-file-input form-group <?php $__errorArgs = ['profile_photo_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="profile_photo_path" value="<?php echo e(old('profile_photo_path')); ?>" placeholder="Choisir ..." id="validatedCustomFile">
					    	<label class="custom-file-label" for="validatedCustomFile">Choisir ...</label>
			 			</div>
			 			<?php echo $__env->make('alerts.feedback', ['field' => 'profile_photo_path'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
			 	</div>             	
             </div>
            
              <div class="card-footer " align="center">
                <button type="submit" class="btn btn-success btn-round"><?php echo e(__('Save')); ?></button>
                <a href="<?php echo e(url('user')); ?>" class="btn btn-primary btn-round">Annuler</a>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
          
      </div>
    </div>
     
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Nouveau utilisateur',
    'activePage' => '',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/users/create.blade.php ENDPATH**/ ?>