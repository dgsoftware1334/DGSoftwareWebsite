<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('assets/img/favicon-32x32.png')); ?>">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Extra details for Live View on GitHub Pages -->
  <title>
    E-ECG
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo e(asset('assets')); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo e(asset('assets')); ?>/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo e(asset('assets')); ?>/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
</head>

<body class="<?php echo e($class ?? ''); ?>">
  <div class="wrapper">
    <?php if(auth()->guard()->check()): ?>
      <?php echo $__env->make('layouts.page_template.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
      <?php echo $__env->make('layouts.page_template.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo e(asset('assets')); ?>/js/core/jquery.min.js"></script>
  <script src="<?php echo e(asset('assets')); ?>/js/core/popper.min.js"></script>
  <script src="<?php echo e(asset('assets')); ?>/js/core/bootstrap.min.js"></script>
  <script src="<?php echo e(asset('assets')); ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo e(asset('assets')); ?>/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo e(asset('assets')); ?>/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(asset('assets')); ?>/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
 
  <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\E-ECG\resources\views/layouts/app.blade.php ENDPATH**/ ?>