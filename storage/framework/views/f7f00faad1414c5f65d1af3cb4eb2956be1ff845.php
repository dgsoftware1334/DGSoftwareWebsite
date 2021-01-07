

<?php $__env->startSection('catchPhrase'); ?>
 		<h1 class="white typed" style="color:black;">Contactez-nous</h1>			
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dynamique'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us.css')); ?>">
 <div class="cut cut-top"> </div>

		<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<?php if(session()->has('success')): ?>
				  <div class="alert alert-success alert-dismissible fade show" role="alert">
				    <strong><?php echo e(session()->get('success')); ?> </strong>
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				      <span aria-hidden="true">&times;</span>
				    </button>
				  </div>
				<?php elseif(session()->has('error')): ?>
				  <div class="alert alert-danger alert-dismissible fade show" role="alert">
				   <strong><?php echo e(session()->get('error')); ?> </strong>
				   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				     <span aria-hidden="true">&times;</span>
				   </button>
				  </div>
				<?php endif; ?>
		</div>
    </div>

				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Rester en contact</span>
					<h2>Envoyez-nous Un<span> Message.</span></h2>
				</div>
				
				<div class="contact_third_form">
					<form class="contact_form" action="<?php echo e(url('contact')); ?>" method="POST" enctype="multipart/form-data">
				      <?php echo e(csrf_field()); ?>


						<div class="row">
							<div class="col-md-4">
								<div class="contact-info">
									<input class="name form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nom" type="text" value="<?php echo e(old('nom')); ?>" placeholder="Votre Nom*">
								</div>
								<?php $__errorArgs = ['nom'];
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
							<div class="col-md-4">
								<div class="contact-info">
									<input class="email form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" type="email" value="<?php echo e(old('email')); ?>" placeholder="Votre Mail*">
								</div>
								<?php $__errorArgs = ['email'];
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
							<div class="col-md-4">
								<div class="contact-info">
									<input class="number form-control <?php $__errorArgs = ['tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tel" type="number" value="<?php echo e(old('tel')); ?>" placeholder="Numéro téléphone*">
								</div>
								<?php $__errorArgs = ['tel'];
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
						</div>
						<textarea id="message" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="message" placeholder="Message*"><?php echo e(old('message')); ?></textarea>
						<?php $__errorArgs = ['message'];
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

						<div class="nws-button text-center  gradient-bg text-uppercase">
							<button type="submit" value="Submit" class="boutton">ENVOYER UN EMAIL</button> 
						</div>
					</form>
				</div>
			</div>
		</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/contact.blade.php ENDPATH**/ ?>