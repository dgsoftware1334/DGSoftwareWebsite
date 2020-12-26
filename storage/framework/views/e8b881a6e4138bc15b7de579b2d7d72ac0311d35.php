<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="info-area info-horizontal mt-5">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-2_sound-wave"></i>
            </div>
            <div class="description">
              <h5 class="info-title"><?php echo e(__('Marketing')); ?></h5>
              <p class="description">
                <?php echo e(__("We've created the marketing campaign of the website. It was a very interesting collaboration.")); ?>

              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-1_button-pause"></i>
            </div>
            <div class="description">
              <h5 class="info-title"><?php echo e(__('Fully Coded in HTML5')); ?></h5>
              <p class="description">
                <?php echo e(__("We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.")); ?>

              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-info">
              <i class="now-ui-icons users_single-02"></i>
            </div>
            <div class="description">
              <h5 class="info-title"><?php echo e(__('Built Audience')); ?></h5>
              <p class="description">
                <?php echo e(__('There is also a Fully Customizable CMS Admin Dashboard for this product.')); ?>

              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mr-auto">
          <div class="card card-signup text-center">
            <div class="card-header ">
              <h4 class="card-title"><?php echo e(__('Register')); ?></h4>
              <div class="social">
                <button class="btn btn-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
                <button class="btn btn-icon btn-round btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
                <button class="btn btn-icon btn-round btn-facebook">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <h5 class="card-description">  <?php echo e(__('or be classical')); ?></h5>
              </div>
            </div>
            <div class="card-body ">
              <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <!--Begin input name -->
                <div class="input-group <?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </div>
                  </div>
                  <input class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Name')); ?>" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                  <?php if($errors->has('name')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                  <?php endif; ?>
                </div>
                <!--Begin input email -->
                <div class="input-group <?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </div>
                  </div>
                  <input class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                 </div>
                 <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
                <!--Begin input user type-->
                
                <!--Begin input password -->
                <div class="input-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </div>
                  </div>
                  <input class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Password')); ?>" type="password" name="password" required>
                  <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                  <?php endif; ?>
                </div>
                <!--Begin input confirm password -->
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                  </div>
                  <input class="form-control" placeholder="<?php echo e(__('Confirm Password')); ?>" type="password" name="password_confirmation" required>
                </div>
                <div class="row">
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
                <div class="form-check text-left">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    <?php echo e(__('I agree to the')); ?>

                    <a href="#something"><?php echo e(__('terms and conditions')); ?></a>.
                  </label>
                </div>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary btn-round btn-lg"><?php echo e(__('Get Started')); ?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', [
    'namePage' => 'Register page',
    'activePage' => 'register',
    'backgroundImage' => asset('assets') . "/img/bg16.jpg",
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/auth/register.blade.php ENDPATH**/ ?>