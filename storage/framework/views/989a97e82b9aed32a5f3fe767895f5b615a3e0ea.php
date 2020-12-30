 
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-9">
                                <p class="text-lead text-light mt-3 mb-0">
                                    <?php echo $__env->make('alerts.migrations_check', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-auto mr-auto">
            <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
            <div class="card card-login card-plain">
                <div class="card-header">
                <div class="logo-container">
                    <img src="<?php echo e(asset('assets/img/logo/E-ECG-LOGO-[Converted].png')); ?>" alt="">
                </div>
                </div>
                <div class="card-body ">
                <div class="input-group no-border form-control-lg <?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                    <span class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                    </span>
                    <input class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                </div>
                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
                <div class="input-group no-border form-control-lg <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                    </div>
                    <input placeholder="Password" class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="<?php echo e(__('Password')); ?>" type="password" value="<?php echo e(old('password')); ?>" required>
                </div>
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
                </div>
                <div class="card-footer ">
                <button  type = "submit" class="btn btn-primary btn-round btn-lg btn-block mb-3"><?php echo e(__("S'autehntifier")); ?></button>
                <div class="pull-right">
                    <h6>
                    <a href="<?php echo e(route('password.request')); ?>" class="link footer-link"><?php echo e(__('Forgot Password?')); ?></a>
                    </h6>                
                </div>
                </div>
            </div>
            </form>
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
    'namePage' => 'Login page',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'login',
    'backgroundImage' => asset('assets') . "/img/banner/library.jpg",
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/auth/login.blade.php ENDPATH**/ ?>