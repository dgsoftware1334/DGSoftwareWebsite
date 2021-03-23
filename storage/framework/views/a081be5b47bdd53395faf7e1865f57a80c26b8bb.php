
  
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
		      <li class="breadcrumb-item"><a href="<?php echo e(url('/service/1')); ?>">INFOGRAPHIE ET DESIGN</a></li>  
		      <li class="breadcrumb-item active" aria-current="page">Commander</li>
		    </ol>
		</nav>
<section id="contact-form" class="contact-form-area_3 contact-page-version">
	<div class="container">
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
	                <input type="name" name="nom" class="form-control" id="contact-name" placeholder="Votre Nom*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
	                <div class="validate"></div>
	              </div>
	              <div class="form-group">
	                <input type="name" name="prenom" class="form-control" id="contact-name" placeholder="Votre Prenom*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required>
	                <div class="validate"></div>
	              </div>
	              <div class="form-group">
	                <input type="number" name="telephone" class="form-control" id="contact-email" placeholder=" Votre Numéro de téléphone" data-rule="telephone" data-msg="Please enter a valid number" required>
	                <div class="validate"></div>
	              </div>
	              <div class="form-group">
	                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Votre Adresse Mail" data-rule="email" data-msg="Please enter a valid email" required>
	                <div class="validate"></div>
	              </div>
	              <div class="form-group">
	                <input type="number" min="500" name="quantité" class="form-control"  placeholder="Nombre de pieces" required >
	                <div class="validate"></div>
	              </div>
	              <div class="form-group">
	                <input type="text" name="adresse" class="form-control" id="contact-subject" placeholder="Adresse de livraison" required>
	                <div class="validate"></div>
	              </div>

	              <div class="form-group">
	                <textarea class="form-control" name="details" id="contact-message" placeholder="Faites-nous savoir si vous avez des remarques concernant votre commande" rows="3" data-rule="required" data-msg="Please write something for us"></textarea>
	                <div class="validate"></div>
	              </div>
	 
	          </div>

	          <div class="col-lg-5 col-md-5 col-sm-5">
	            <h4 class="title">Modele Choisis</h4>
	            
	            <img src="<?php echo e(asset('storage/'.$modele->main_image)); ?>" alt="" class="img-responsive img-thumbnail" />
	            <div class="form-group">
	              	<h4 class="title">Paiement Par CCP</h4>
					<input type="file" name="recu" accept=".png,.jpg,.jpeg," class="form-control"  required/>
	          	</div>
	           </div>
	        </div>
	        <hr>
		    <div class="form-send" align="right">
		        <button type="submit" class="btn btn-large btn-blue">Valider la commande <i class="fa fa-check-circle-o" aria-hidden="true"></i></button>
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