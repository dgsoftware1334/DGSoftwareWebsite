


<?php $__env->startSection('catchPhrase'); ?>
	<h1 class="white typed" style="color:black;">Be Modern To Be Happy.</h1>						
<?php $__env->stopSection(); ?>


<?php $__env->startSection('dynamique'); ?>
<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
                <!--Services-->
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4">
                	<div class="intro-table intro-table-hover" style=" background-image: url('../img/<?php echo e($s->photo); ?>');">
						 <h5 class="black heading hide-hover text-center" style="background-color: #9c1210 ; font-size: 22px; color: white;"><?php echo e($s->titre); ?>

						 </h5>
						<div class="bottom">
							<a href="<?php echo e(url('/categories/'.$s->id)); ?>" class="btn btn-white-fill expand">Voir plus</a>
						</div>
					</div>
				    
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
        </div>
	<section id="team" class="section gray-bg">
		<div class="container">
		  <div class="row title text-center">
				<h2 class="margin-top">Notre Travail</h2>
				<h4 class="light muted">Une variété de choix rien que pour vous! Et adaptable à votre goût</h4>
			</div>  
		  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:auto; width: auto; padding: 0% 30% 0% 30%;">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4" ></li>
		      <li data-target="#myCarousel" data-slide-to="5"></li>
		      <li data-target="#myCarousel" data-slide-to="6"></li>
		      <li data-target="#myCarousel" data-slide-to="7"></li>
		      <li data-target="#myCarousel" data-slide-to="8"></li>
		      <li data-target="#myCarousel" data-slide-to="9"></li>

		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" align="center" style="height:auto; width:auto; ">
		      <div class="item active">
		        <img src="img/CartesVisites/7.jpg" id="1">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/4.jpg" id="2">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/4819227.jpg" id="3">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/433.jpg" id="4">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/4761354.jpg" id="5">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/18203355.jpg" id="6">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/7905.jpg" id="7">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/14.jpg" id="8">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/305.jpg" id="9">
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="fa fa-chevron-left" style="padding-top: 150px;"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="fa fa-chevron-right" style="padding-top: 150px;"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>

	</section>
    </section>

	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Nos principes</h2>
				<h4 class="light muted">Obtenez les meilleurs résultats et choisissez parmi une variété de produits <br> fabriqués avec dévouement et perfection!</h4>
            </div>
            <div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/quality.png" alt="" class="icon">
						</div>
						<h4 class="heading">Qualité Garantie</h4>
						<p class="description">Nous nous assurons que nos produits sont fabriqués avec dévouement et perfection et livrés à temps.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/customer-service.png" alt="" class="icon">
						</div>
						<h4 class="heading">Service clientèle a votre service</h4>
						<p class="description">Une équipe de service à la clientèle dédiée à répondre à vos besoins et à répondre à vos demandes tout le temps.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/best-price.png" alt="" class="icon">
						</div>
						<h4 class="heading">Meilleurs prix</h4>
						<p class="description">Nos prix sont abordables pour tout le monde car notre objectif le plus important est d'aider les petites entreprises à prospérer et à réussir.</p>
					</div>
				</div>
			
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Nos équipes</h2>
				<h4 class="light muted">Nous sommes là pour vous!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/3426526.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Contact</h3>
								<h5><i class="light-white light text-center-mobile fa fa-phone" aria-hidden="true"></i>&nbsp;0668 01 98 30</h5>
							</div>
						</div>
						<div class="title">
							<h4>ÉQUIPE DE DÉVELOPPEMENT</h4>
							<h5 class="muted regular">Sites Web, applications mobiles, logiciels ...</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/20943607.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Contact</h3>
								<h5><i class="light-white light text-center-mobile fa fa-phone" aria-hidden="true"></i>&nbsp;0665 44 45 91</h5>
							</div>
						</div>
						<div class="title">
							<h4>ÉQUIPE DE SPONSORISATION</h4>
							<h5 class="muted regular">Publicités facebook, instagram, messenger</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/3369515.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Contact</h3>
								<h5><i class="light-white light text-center-mobile fa fa-phone" aria-hidden="true"></i>&nbsp;0558 80 53 27</h5>
							</div>
						</div>
						<div class="title">
							<h4>ÉQUIPE DE DESIGN</h4>
							<h5 class="muted regular">Logo, Cartes Visites, Flyers, Calendrier, Notebook, Dépliants</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/123.jpg">
							<h4 class="white">À propos de nous</h4>
							<a href="<?php echo e(url('/about')); ?>" class="btn btn-white-fill">Voir plus</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>SARL DGSoftware est une société créée à Tlemcen, Algérie qui offre des services divers dans le domaine d'informatiques, tels que: le Design & Graphisme, Développement Logiciel, Développement Web et Application Mobile..</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/123.jpg">
							<h4 class="white regular light">Veuillez nous laisser un message pour toute question </h4>
							<a href="<?php echo e(url('/contact')); ?>" class="btn btn-white-fill">Contactez-nous</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li><img src="img/icons/facebook-logo1.png" alt="Facebook Logo" class="icon"> : DGSoftware</li>
								<li><img src="img/icons/instagram1.png" alt="Instagram Logo" /> : @dgsoftware1334</li>
								<li><img src="img/icons/gmail.png" alt="Gmail Logo" class="icon"> : dgsoftware1334@gmail.com</li>
								<li><img src="img/icons/phone-receiver-silhouette.png" alt="Phone Logo" class="icon"> : <ul> 0558 80 53 27 <br>0665 44 45 91</ul></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Se connecter</h3>
				<form action="" class="popup-form">
					<!--input type="text" class="form-control form-white" placeholder="Full Name"-->
					<input type="text" class="form-control form-white" placeholder="Email/Username" required>
					<input type="password" class="form-control form-white" placeholder="Mot de passe" required>

					<!--div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>
						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div-->
					<!--div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div-->
					<a href="<?php echo e(url('/login')); ?>" class="btn btn-blue">Connexion</a>
				</form>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/FrontEnd/home.blade.php ENDPATH**/ ?>