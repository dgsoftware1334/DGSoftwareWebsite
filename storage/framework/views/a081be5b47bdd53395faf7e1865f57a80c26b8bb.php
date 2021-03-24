
  
<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed" style="color:black;">Passer Une Commande</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dynamique'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us.css')); ?>">

<div class="cut cut-top"> </div>
		<nav aria-label="breadcrumb">
		    <ol class="breadcrumb">
		      <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"> Home</a></li>
		      <li class="breadcrumb-item"><a href="<?php echo e(url('/service')); ?>">Services</a></li>
		      <li class="breadcrumb-item"><a href="<?php echo e(url('/service/'.$service->id)); ?>"><?php echo e($service->titre); ?></a></li>   
		      <li class="breadcrumb-item active" aria-current="page">Commander</li>
		    </ol>
		</nav>
<section id="contact-form" class="contact-form-area_3 contact-page-version">
	<div class="container">
		<div class="row">
		    	<div class="col-md-12" >
		    	<?php if(session()->has('success')): ?>
						<div class="alert alert-success">
						    <strong><?php echo e(session()->get('success')); ?> </strong>
						    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						      <span aria-hidden="true">&times;</span>
						    </button>
						</div>
				<?php elseif(session()->has('error')): ?>
						<div class="alert alert-danger">
						   <strong><?php echo e(session()->get('error')); ?> </strong>
						   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						     <span aria-hidden="true">&times;</span>
						   </button>
						</div>
				<?php endif; ?>
				</div>
		    </div>	
		<section id="main-content">
	      <section class="wrapper">
	        <!-- BASIC FORM ELELEMNTS -->
	       
	        <div class="row mt">
	          <div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Commencer le changement</span>
					<h2>Passer <span>Une Commande.</span></h2>
			  </div>
	          <div class="col-lg-7 col-md-7 col-sm-7">
	            <h4 class="title">Votre Commande</h4>
	            <div id="message"></div>
	            <form  action="<?php echo e(url('commandes')); ?>" method="POST" class="contact-form php-mail-form" role="form" enctype="multipart/form-data">
	              <?php echo e(csrf_field()); ?>

			      <input type="hidden" name="produit" value="<?php echo e($modele->id); ?>">
	              <div class="form-group">
	                <input type="name" name="nom" class="form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="contact-name" placeholder="Votre Nom*" required value="<?php echo e(old('nom')); ?>">
	                <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>
	              <div class="form-group">
	                <input type="name" name="prenom" class="form-control <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="contact-name" placeholder="Votre Prenom*" required value="<?php echo e(old('prenom')); ?>">
	                <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>
	              <div class="form-group">
	                <input type="number" name="telephone" class="form-control <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="contact-email" placeholder=" Votre Numéro de téléphone*" required value="<?php echo e(old('telephone')); ?>">
	                <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>
	              <div class="form-group">
	                <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="contact-email" placeholder="Votre Adresse Mail*" required value="<?php echo e(old('email')); ?>">
	                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>
	              <div class="form-group">
	                <input type="number" min="500" name="quantité" class="form-control <?php $__errorArgs = ['quantité'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Nombre de pieces*" required title="nous ne prenons que des commandes de 500 pièces ou plus" value="<?php echo e(old('quantité')); ?>">
	                <?php $__errorArgs = ['quantité'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>
	              <div class="form-group">
	                <input type="text" name="adresse" class="form-control <?php $__errorArgs = ['adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="contact-subject" placeholder="Adresse de livraison*" required title="Si vous souhaitez récupérer votre commande chez nous, écrivez simplement notre adresse" value="<?php echo e(old('adresse')); ?>">
	                <?php $__errorArgs = ['adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>

	              <div class="form-group">
	                <textarea class="form-control <?php $__errorArgs = ['details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="details" id="contact-message" placeholder="Faites-nous savoir les coordonnées que vous souhaitez que nous mettions sur les cartes" rows="3" title="veuillez mentionner toutes les coordonnées et remarques que vous souhaitez inclure dans vos cartes"><?php echo e(old('details')); ?></textarea>
	                <?php $__errorArgs = ['details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>
	              <div class="form-group">
	              	<h4 class="title">Logo de votre entreprise</h4>
					<input type="file" name="logo" accept=".png,.jpg,.jpeg,.svg,.bmp" class="form-control  <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" title="veuillez nous donner le logo de votre entreprise que vous souhaitez que nous mettions sur les cartes si vous n'en avez pas, nous pouvons trouver quelque chose à la place" data-default-value="<?php echo e(old('logo')); ?>" value="<?php echo e(old('logo')); ?>"/>
					<?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	              </div>
	 
	          </div>

	          <div class="col-lg-5 col-md-5 col-sm-5">
	            <h4 class="title">Modele Choisis</h4>
	            
	            <img src="<?php echo e(asset('storage/'.$modele->main_image)); ?>" alt="" class="img-responsive img-thumbnail" />
	            <div class="form-group">
	              	<h4 class="title">Paiement Par CCP</h4>
					<input type="file" name="recu" accept=".png,.jpg,.jpeg," class="form-control  <?php $__errorArgs = ['recu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required title="Veuillez télécharger clairement votre reçu de paiement CCP" data-default-value="<?php echo e(old('recu')); ?>" value="<?php echo e(old('recu')); ?>"/>
					<?php $__errorArgs = ['recu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				        <span class="alert alert-danger" role="alert">
			              <strong><?php echo e($message); ?></strong>
			            </span>
			        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	          	</div>
	           </div>
	        </div>
	        <hr>
		    <div class="form-send" align="right">
		        <button type="submit" class="btn btn-large btn-blue"><b>Valider la commande</b> <i class="fa fa-check-circle-o"  ></i></button>
		    </div>
	    </form>

<!-- /row -->


	        <!-- /row -->
	      </section>
      <!-- /wrapper -->
    	</section>
    <!-- /MAIN CONTENT -->
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/commandes/commandeCartes.blade.php ENDPATH**/ ?>