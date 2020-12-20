


<?php $__env->startSection('content'); ?>
	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">E-<span>ECG</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Accueil</a></li>
							<li class="breadcrumb-item active">Cours</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->
<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">rejoignez nous</span>
					<h2>Veuillez remplir cette <span> Demande.</span></h2>
			</div>
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
			<div class="order-payment">
								<div class="payment-method" style="background-image: url('/assets/img/banner/blue.jpg'); background-size: cover; background-attachment: inherit;">
									<div class="payment-method-header">
										<div class="row">
											<div class="col-md-12">
												<div class="method-header-text">
													<div class="checkbox">
														<label>
															Paiement uniquement par CCP! veuillez envoyer une photo de votre reçu de paiement
														</label><br>
														<span style="color: red;">Important: </span>
														<span>
															La photo doit être de bonne qualité et nette avec la somme exacte de votre abonnement souhaité
														</span>
													</div>
												</div>
											</div>

										</div>
									</div>

						<div class="check-out-form">
										<form action="<?php echo e(url('demandes')); ?>" method="post" enctype="multipart/form-data">
          									<?php echo e(csrf_field()); ?>

	
											<div class="payment-info input-2">
												<select class="form-control <?php $__errorArgs = ['IDoffre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="IDoffre" value="<?php echo e(old('IDoffre')); ?>" required>
													<option value="">---------Sélectionnez une offre---------</option>
													 <?php if(count($offres) == 1): ?>
														 <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										                <option value="<?php echo e($f->id); ?>" selected> <?php echo e($f->titre); ?> (<?php echo e($f->durée); ?>) </option>
										                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									                 <?php else: ?>
														 <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										                 <option value="<?php echo e($f->id); ?>"> <?php echo e($f->titre); ?> (<?php echo e($f->durée); ?>) </option>
										                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									                 <?php endif; ?>
												</select>
											</div>
											<div class="payment-info">
												<label class=" control-label">Nom*:</label>
												<input type="text" class="form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nom" placeholder="Entrer votre nom" value="<?php echo e(old('nom')); ?>" required>
											</div>
											<div class="payment-info">
												<label class=" control-label">Prénom* :</label>
												<input type="text" class="form-control <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="prenom" placeholder="Entrer votre prénom" value="<?php echo e(old('prenom')); ?>" required>
											</div>
											<div class="payment-info">
												<label class=" control-label">Email* :</label>
												<input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="email" placeholder="Entrer votre adresse mail" value="<?php echo e(old('email')); ?>" required>
											</div>
											<div class="payment-info input-2">
												<label class=" control-label">Emplacement :</label>
												<input type="text" class="form-control <?php $__errorArgs = ['pays'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pays" placeholder="votre pays" value="<?php echo e(old('pays')); ?>">
												<input type="text" class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "  name="ville" placeholder="Votre ville" value="<?php echo e(old('ville')); ?>" required>
											</div>
											<div class="payment-info">
												<label class="control-label">Payment* :</label>
												 <input type="file" accept=".png,.jpg,.jpeg," data-default-file="<?php echo e(old('recuCCP')); ?>" class="form-group  <?php $__errorArgs = ['recuCCP'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="recuCCP"  value="<?php echo e(old('recuCCP')); ?>" placeholder="Veuillez envoyer une image de votre recu de payment CCP" required/>
											</div>
											<div >
	                                    		<button type="submit" value="Submit" class="genius-btn mt25 gradient-bg text-center text-uppercase  bold-font" style=" font-weight: 700; color: #fff;">
	                                    			Entrer  <i class="fas fa-caret-right"></i>
	                                    		</button>
                                			</div>	
										</form>
										
									</div>
								</div>
								


		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.static', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/inscription.blade.php ENDPATH**/ ?>