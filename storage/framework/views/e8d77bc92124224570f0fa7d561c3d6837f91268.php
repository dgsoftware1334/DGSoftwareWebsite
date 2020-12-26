<?php $__env->startSection('content'); ?>
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="card card-user">
          
           <div class="image" style="background-color:black;">   
           <video src="assets/heartbeat.mp4" width="100%" height="100%" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
              <img src="assets/img/banner/heartBeat.png">
           </video>
             </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
               <image src="<?php echo e(asset('storage/'.auth()->user()->profile_photo_path)); ?>" class="avatar border-gray"></image>
                <h5 class="title"><?php echo e(auth()->user()->name); ?></h5>
              </a>
              <p class="description">
                  <?php echo e(auth()->user()->email); ?>

              </p>
            </div>
            <form method="post" action="<?php echo e(url('profileUpdate/'.auth()->user()->id)); ?>" autocomplete="off" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="row" align="center">
                <div class="col-md-7 pr-1">
                  <input type="file" accept=".png,.jpg,.jpeg,.svg,.bmp" data-default-file="<?php echo e(asset('storage/'.auth()->user()->profile_photo_path)); ?>"
                  name="profile_photo_path" class="form-group  <?php $__errorArgs = ['profile_photo_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('profile_photo_path', auth()->user()->profile_photo_path)); ?>" unique/>
              
                </div>
              </div>

              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-7 pr-1">
                        <div class="form-group">
                            <label><?php echo e(__(" Nom")); ?></label>
                                <input type="text" name="name" class="form-control" value="<?php echo e(old('name', auth()->user()->name)); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo e(__(" Address mail")); ?></label>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email', auth()->user()->email)); ?>">
                      <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
             <!--   <div class="row">
                  <div class="col-md-7 pr-1">
                      <label for="exampleInputEmail1"><?php echo e(__(" Role")); ?></label>
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
unset($__errorArgs, $__bag); ?>" type="radio" name="status" id="exampleRadios1" value="<?php echo e(old('status')); ?>, auth()->user()->status) }}" value="Admin">
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
unset($__errorArgs, $__bag); ?>" type="radio" name="status" id="exampleRadios2" value="<?php echo e(old('status', auth()->user()->status)); ?>" value="Gérant">
                              Gérant
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
                -->

              <div class="card-footer ">
                <button type="submit" class="btn btn-success btn-round"><?php echo e(__('Enregistrer')); ?></button>
               <a href="<?php echo e(route('home')); ?>" class="btn btn-primary btn-round"><?php echo e(__('Annuler')); ?></a> 
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
          
      </div>
      </div>
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><?php echo e(__("Mot de passe ")); ?></h5>
          </div>
          <div class="card-body">
            <form method="post" action="<?php echo e(route('profile.password')); ?>" autocomplete="off">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
              <?php echo $__env->make('alerts.success', ['key' => 'password_status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                    <label><?php echo e(__(" Mot de passe actuel")); ?></label>
                    <input class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="old_password" type="password"  required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'old_password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                    <label><?php echo e(__(" Nouveau Mot de passe")); ?></label>
                    <input class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" type="password" name="password" required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-7 pr-1">
                <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                  <label><?php echo e(__(" Confirmer le nouveau mot de passe")); ?></label>
                  <input class="form-control" type="password" name="password_confirmation" required>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <button type="submit" class="btn btn-primary btn-round "><?php echo e(__('Modifier Mot de passe')); ?></button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => ' Modifier Profil',
    'activePage' => '',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/users/edit.blade.php ENDPATH**/ ?>