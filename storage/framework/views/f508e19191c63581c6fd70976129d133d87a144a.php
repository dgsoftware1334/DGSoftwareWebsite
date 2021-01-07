<?php $__env->startSection('catchPhrase'); ?>
  <h1 class="white typed" style="color:black;">A Propos De Nous.</h1>            
<?php $__env->stopSection(); ?>


<?php $__env->startSection('dynamique'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us.css')); ?>">
    <div class="cut cut-top"></div>
<div class="container">
  <div class="ct-pageWrapper" id="ct-js-wrapper">
  <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
    <div class="container text-center">
      <h2 style="color: #00a8ff;">QUI SOMMES NOUS</h2>
      <h3>20/11/2020</h3>
      <div class="col-md-8 col-md-offset-2">
        <div class="red-border"></div>
        <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">Bienvenue chez DG Software, votre source numéro un pour tout [produit]. Nous nous engageons à vous offrir le meilleur de [produit], en mettant l'accent sur [caractéristique du magasin 1], [caractéristique du magasin 2], [caractéristique du magasin 3].</p>
        <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
      </div>
    </div>
  </section>
  <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>CE QUE NOUS OFFRONS</h2>
          <h3>Notre entreprise dispose d'une diversité de services</h3>
          <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
          Praesent sed libero vel ex maximus vulputate nec eu ligula. Vestibulum elementum nisi ut fermentum lobortis.</p>
        </div>
      </div>
      <div class="row ct-u-paddingBoth20">
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <p>LOREM IPSUM</p>
            <p class="company-icons-subtext hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-money" aria-hidden="true"></i>
            <p>DOLOR SIT AMET</p>
            <p class="company-icons-subtext hidden-xs">Praesent sed libero vel ex maximus vulputate nec eu ligula.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <p>SED TRISTIQUE</p>
            <p class="company-icons-subtext hidden-xs">Vestibulum elementum nisi ut fermentum lobortis.</p>
          </div>
        </div>
      </div>
      <div class="row ct-u-paddingBoth20">
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-coffee" aria-hidden="true"></i>
            <p>SEMPER IPSUM</p>
            <p class="company-icons-subtext hidden-xs">Nullam bibendum felis non laoreet rutrum.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <p>NEC MATTIS</p>
            <p class="company-icons-subtext hidden-xs">Etiam diam mi, lacinia eu sapien in, dapibus sodales erat.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-cutlery" aria-hidden="true"></i>
            <p>CRAS MOLLIS</p>
            <p class="company-icons-subtext hidden-xs">Etiam varius porttitor tellus et aliquet.</p>
          </div>
        </div>
      </div>
      <a class="ct-u-marginTop60 btn btn-solodev-red-reversed btn-fullWidth-sm ct-u-size19" href="/careers/">Ready to Learn More?</a>
    </div>
  </section>

<h2 style="text-align:center"> Fondateurs </h2>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="card">
        <img src="<?php echo e(asset('/img/team/hamlili.jpg')); ?>" alt="Jane" style="width:100%">
        <div class="containerB">
          <h2>ENNEBATI Hamlili</h2>
          <p class="title">Co-fondateur</p>
          <p>Responsable service réseaux sociaux et réseaux informatiques.</p>
          <p>hamliliv14@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
      <div class="card">
        <img src="<?php echo e(asset('/img/team/hicham.jpg')); ?>" alt="Mike" style="width:100%">
        <div class="containerB">
          <h2>DEGDEG Hichem</h2>
          <p class="title">PDG et fondateur</p>
          <p>Gérant de la societé et des relations exterieurs.</p>
          <p>hdegdeg24@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

  </div>
</div>




</div>
<main>
  <div class="container ct-u-paddingTop40 ct-u-paddingBottom100">
    <div class="row">
      <div class="col-md-12 ct-content">
        <section class="clients-home">
         
        </section>
      </div>
    </div>
  </div>
</main>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/about.blade.php ENDPATH**/ ?>