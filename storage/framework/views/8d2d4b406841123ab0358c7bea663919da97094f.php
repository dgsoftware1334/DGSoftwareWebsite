<!DOCTYPE html>
<html>
<head>
  <title>LRIT Dashboard </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="_token" content="<?php echo e(csrf_token()); ?>">

  <link rel="shortcut icon" href="<?php echo e(asset('/favicon_dark.ico')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

  <!-- plugin css -->
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
  <link href="<?php echo e(asset('assets/fonts/feather-font/css/iconfont.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/plugins/flag-icon-css/css/flag-icon.min.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" />
  <!-- end plugin css -->

  <?php echo $__env->yieldPushContent('plugin-styles'); ?>
  <!-- common css -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/materialdesignicons.min.css')); ?>" rel="stylesheet" />
  <!-- end common css -->
  <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body data-base-url="<?php echo e(url('/')); ?>">

  <script src="<?php echo e(asset('assets/js/spinner.js')); ?>"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>


  <div class="main-wrapper" id="app">
    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-wrapper">
      <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="page-content" >
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
  </div>

    <!-- base js -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <!-- <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script> -->
    <script src="<?php echo e(asset('assets/plugins/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <!-- end base js -->

    <script src="<?php echo e(asset('assets/plugins/promise-polyfill/polyfill.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/sweet-alert.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('plugin-scripts'); ?>
    <script src="<?php echo e(asset('assets/js/template.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('custom-scripts'); ?>
</body>
</html>

<?php /**PATH C:\laragon\www\E-ECG\resources\views/layouts/master.blade.php ENDPATH**/ ?>