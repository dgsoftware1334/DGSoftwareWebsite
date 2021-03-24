<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('img/favicons/apple-touch-icon-57x57.png')); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('img/favicons/apple-touch-icon-60x60.png')); ?>">
  <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicons/favicon-32x32.png')); ?>" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicons/favicon-16x16.png')); ?>" sizes="16x16">
  <link rel="manifest" href="<?php echo e(asset('img/favicons/manifest.json')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('img/favicons/favicon.ico')); ?>">
  <meta name="msapplication-TileColor" content="#00a8ff">
  <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">


  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('BackOffice/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo e(asset('BackOffice/lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('BackOffice/css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('BackOffice/css/style-responsive.css')); ?>" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 p404 centered">
        <img src="<?php echo e(asset('BackOffice/img/404.png')); ?>" alt="">
        <h1>Oups!!</h1>
        <h3>La page que vous recherchez n'existe pas.</h3>
        <br>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <input type="text" class="form-control" id="form1Name" name="form1Name">
            <button class="btn btn-theme mt">Chercher</button>
          </div>
        </div>
        <h5 class="mt">Hé, peut-être que ces pages vous intéresseront:</h5>
        <p><a href="<?php echo e(url('/home')); ?>">Home</a> | <a href="<?php echo e(url('/commandes')); ?>">Commandes</a> | <a href="<?php echo e(url('/services')); ?>">Services</a></p>
      </div>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(asset('BackOffice/lib/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('BackOffice/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\laragon\www\DGSoftware\resources\views/errors/404.blade.php ENDPATH**/ ?>