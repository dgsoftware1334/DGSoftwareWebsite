

<?php $__env->startSection('content'); ?>

	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">E-ECG <span>Contact</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Accueil</a></li>
							<li class="breadcrumb-item active">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
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
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of contact section
		============================================= -->
		<!--<section id="contact-page" class="contact-page-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SEND US A MESSAGE</span>
					<h2>Keep<span> In Touch.</span></h2>
				</div>
				<div class="social-contact">
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-facebook-f"></i>
						</div>
						<div class="category-title">
							<h4>Facebbok</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-twitter"></i>
						</div>
						<div class="category-title">
							<h4>Twitter</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-google-plus-g"></i>
						</div>
						<div class="category-title">
							<h4>Google +</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-behance"></i>
						</div>
						<div class="category-title">
							<h4>Behance</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-instagram"></i>
						</div>
						<div class="category-title">
							<h4>Instagram</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-dribbble"></i>
						</div>
						<div class="category-title">
							<h4>Dribble</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-deviantart"></i>
						</div>
						<div class="category-title">
							<h4>Devianart</h4>
						</div>
					</div>
				</div>
			</div>
		</section>-->
	<!-- End of contact section
		============================================= -->

	<!-- Start of contact area form
		============================================= -->
		<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Rester en contact</span>
					<h2>Envoyez-nous Un<span> Message.</span></h2>
				</div>
				
				<div class="contact_third_form">
					<form class="contact_form" action="<?php echo e(url('contacts')); ?>" method="POST" enctype="multipart/form-data">
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
							<button type="submit" value="Submit">ENVOYER UN EMAIL<i class="fas fa-caret-right"></i></button> 
						</div>
					</form>
				</div>
			</div>
		</section>
	<!-- End of contact area form
		============================================= -->


	<!-- Start of contact area
		============================================= -->
	<!--	<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Get in Touch</span></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet  ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>

								<div class="contact-address">
									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>Last Vegas, 120 Graphic Street, US</li>
												<li><span>Second: </span>Califorinia, 88 Design Street, US</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-phone"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>(100) 3434 55666</li>
												<li><span>Second: </span>(20) 3434 9999</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>info@geniuscourse.com</li>
												<li><span>Second: </span>mail@genius.info</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
							</div>
						</div>

						<div class="col-md-6">
							<div id="contact-map" class="contact-map-section">
								<div id="google-map">
									<div id="googleMaps" class="google-map-container"></div>
								</div /#google-map-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
	<!-- End of contact area
		============================================= -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.static', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/contact.blade.php ENDPATH**/ ?>