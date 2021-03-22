
  
<?php $__env->startSection('catchPhrase'); ?>
            <h1 class="white typed" style="color:black;"><?php echo e(App\Models\Service::find($service)->titre); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dynamique'); ?>



<section>
  <div class="cut cut-top"></div> 
 
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('/service')); ?>"> Services</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('/service/'.App\Models\Service::find($service)->id)); ?>"><?php echo e(App\Models\Service::find($service)->titre); ?></a></li>
  </ol>
</nav>

  <div class="row text-center title">
        <h2>Nos Cartes Visites</h2>
        <h4 class="light muted">
          Allez-y et choisissez l'un de ces modèles magnifiques et diversifiés, tout ce que vous avez à faire pour aider votre entreprise est d'appuyer sur le bouton "Commander" et de remplir le formulaire affiché, une fois votre commande passée et approuvée, nous vous contacterons pour confirmation.
        </h4>
  </div>
  <div class="row services">
  <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div style="font-weight: bold; color:#5d76b6; border: 1px solid #5d76b6;;border-radius: 4px;
  font-size: 14px; line-height: 1.42857143;">
            <h3 style="color:#5d76b6; text-align: center;">Prix :</h3>
            <ul>
              <span style="color: black; text-decoration:underline;">Recto-Verso :</span>
                <li><span style="color: black;">Quantité <  1000 pièces :</span> 15 DA/18 DA  la pièce (selon la qualité)</li>
                <li><span style="color: black;">Quantité >= 1000 pièces :</span> 13 DA/16 DA  la pièce (selon la qualité)</li>
              <span style="color: black; text-decoration:underline;">Recto :</span>
                <li><span style="color: black;">Quantité  < 1000 pièces :</span> 11 DA/13 DA  la pièce (selon la qualité)</li>
                <li><span style="color: black;">Quantité >= 1000 pièces :</span> 10 DA/12 DA  la pièce (selon la qualité)</li>
                
            </ul>


          </div>
        </div>
        <div class="col-md-6 offset-md-1" align="right">
          <a href="<?php echo e(url('/about')); ?>"  style="background-color:#9c1210;" class="btn btn-secondary" title="Paiement par CCP"> 
            Passer une commande <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      
    </div>
    <hr>
  <section class="section gray-bg">
    <div class="container container-fluid"> 
      <div class="row">
         
        <?php $__currentLoopData = $galerie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
     
        <div class="col-md-4">
            <div class="title"><h3>Modéle N°<?php echo e($g->id); ?></h3></div>

              <button data-toggle="modal" data-target="#image<?php echo e($g->id); ?>" class="btn btn-info">
                  <img src="<?php echo e(asset('img'.$g->main_image)); ?>" alt="<?php echo e($g->catégorie); ?>"  class="img-responsive" style="width:100%; height: 250px;">
              </button>
              <!--Modal-->
              <div class="modal fade" id="image<?php echo e($g->id); ?>" data-backdrop="false" style="width:100%;" >
                <div class="modal-dialog modal-lg" style="padding-top: 130px; z-index: 1100;">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Modéle N°<?php echo e($g->id); ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                      </div>

                      <div class="modal-body">
                        <div class="row"> 
                          <div class="col-md-auto" align="center">
                            <img src="<?php echo e(asset('img/'.$g->main_image)); ?>" class="img-fluid image-control img-responsive">
                            
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button"  data-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>     
    </div> 
  </section>
  </div>
</section>

          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/services/show1.blade.php ENDPATH**/ ?>