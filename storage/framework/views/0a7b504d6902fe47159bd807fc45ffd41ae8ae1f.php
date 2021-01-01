
 <link href="img/dg-software.jpg" rel="icon" style="background-color: white">
  <link href="img/dg-software.jpg" rel="apple-touch-icon" style="background-color: white">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">

body {
  margin: 0;
  padding: 0;
  background-size: 100% 110%;
  background-repeat: no-repeat;
  height: 100vh;
  margin-top: 50px;
  background-image: url('img/clement-h-95YRwf6CNw8-unsplash.jpg');
}
#login .container #login-row #login-column #login-box {
  margin-top: 90px;
  max-width: 600px;
  height: 380px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

</style>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <!--h1 class="text-center pt-5" style="color:#345da7;">Se connecter</h1-->
        <div class="container">

             

            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        

                        <form id="login-form" class="form" action="<?php echo e(url('/login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <h3 class="text-center"  style="color:#345da7;">Login</h3>

                            <?php if(count($errors)): ?>
                            <div class="text-center alert alert-danger" role="alert">
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <?php echo e($msg); ?>

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endif; ?>

                            <div class="form-group">
                                <label for="username"  style="color:#345da7;">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username/Email" required>
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="password"  style="color:#345da7;">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control"  placeholder="Password" required>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="remember-me"  style="color:#345da7;"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                              <center><input type="submit" name="submit" class="btn btn-info btn-lx"  style="background-color:#345da7; border-style: none;" value="submit"></center>
                            </div>
                            <!--div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><?php /**PATH C:\laragon\www\DGSoftware\resources\views/Login/login.blade.php ENDPATH**/ ?>