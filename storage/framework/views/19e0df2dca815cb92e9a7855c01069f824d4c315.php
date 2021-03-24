
<?php $__env->startSection('content'); ?>


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 510px;
  height: 700px;
  margin: auto;
  text-align: center;
  font-family: arial;
  font-size: 15px;
}

</style>
<section id="main-content">
 <section class="wrapper">


 	<div class="card">

 		

 		<div class="row">
 			<div class="col-sm-12" style="text-align: center;">
 				<img src="../storage/<?php echo e($users->photo); ?>" style="border-radius: 50%;width:200px;">
 			</div>
 		</div>

		<div class="row">
 			<div class="col-sm-12">
 				<hr>
 			</div>
 		</div>

<br>

<div class="row">
 			<div class="col-sm-4">
 				<b>Nom</b>
 			</div>
 			<div class="col-sm-8">	
 				<?php echo e($users->name); ?>

 			</div>
 		</div>
 		
 		<br>

 		<div class="row">
 			<div class="col-sm-4">
 				<b>Prénom</b>
 			</div>
 			<div class="col-sm-8">
 			<?php echo e($users->prenom); ?>	
 			</div>
 		</div>

 		<br>

 		<div class="row">
 			<div class="col-sm-4">
 				<b>Username</b>
 			</div>
 			<div class="col-sm-8">
 			<?php echo e($users->username); ?>	
 			</div>
 		</div>

 		<br>

 		<div class="row">
 			<div class="col-sm-4">
 				<b>Date de naissance</b>
 			</div>
 			<div class="col-sm-8">
 			<?php echo e($users->dateNaissance); ?>	
 			</div>
 		</div>

 		<br>

 		<div class="row">
 			<div class="col-sm-4">
 				<b>Téléphone</b>
 			</div>
 			<div class="col-sm-8">
 			<?php echo e($users->telephone); ?>	
 			</div>
 		</div>

 		<br>

 		<div class="row">
 			<div class="col-sm-4">
 				<b>Email</b>
 			</div>
 			<div class="col-sm-8">
 			<?php echo e($users->email); ?>	
 			</div>
 		</div>

 		<br>

 		<div class="row">
 			<div class="col-sm-4">
 				<b>adresse</b>
 			</div>
 			<div class="col-sm-8">
 			<?php echo e($users->address); ?>	
 			</div>
 		</div>

 		<br>

 		<div class="row">
 			<div class="col-sm-4">
 				<b>profil</b>
 			</div>
 			<div class="col-sm-8">
 			<?php echo e($users->profil); ?>	
 			</div>
 		</div>

 		<br>

 		<div class="row">
 			<div class="col-sm-6">
 				<a href="#" class="btn btn-primary pull-right" >Modifier</a>
 			</div>
 			<div class="col-sm-6">	
 				<a href="#" class="btn btn-danger pull-left">Retour</a>
 			</div>
 		</div>

 		

 	</div>






 	



  </section>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/employes/profil.blade.php ENDPATH**/ ?>