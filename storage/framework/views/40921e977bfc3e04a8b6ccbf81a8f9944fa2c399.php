<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="BackOffice/img/favicon.png" rel="icon">
  <link href="BackOffice/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <div id="login-page">
        <div class="container">
            <form method="POST" class="form-login" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
              <h2 class="form-login-heading">Authentifier</h2>
              <div class="login-wrap">
                <input type="email" name="email" :value="old('email')" placeholder="Votre email*"  id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autofocus>
                <br>
                <input type="password" id="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="current-password" placeholder="Votre mote de passe*" required>
                <hr>
                <button type="submit" class="btn btn-theme btn-block"><i class="fa fa-lock"></i> LOGIN</button>
                <label class="checkbox"> 
                  <span class="pull-right">
                  <a data-toggle="modal" href="login.html#myModal"> Mot de Passe Oublié?</a>
                  </span>
                </label>
                
                
              </div>
              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                      <p>Enter your e-mail address below to reset your password.</p>
                      <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                      <button class="btn btn-theme" type="button">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal -->
      </form>
        </div>
    </div> 


  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(asset('BackOffice/lib/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('BackOffice/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo e(asset('BackOffice/lib/jquery.backstretch.min.js')); ?>"></script>
  <script>
    $.backstretch("<?php echo e(asset('BackOffice/img/login-bg.jpg')); ?>", {
      speed: 500
    });
  </script>
</body>

</html><?php /**PATH C:\laragon\www\DGSoftware\resources\views/auth/login.blade.php ENDPATH**/ ?>