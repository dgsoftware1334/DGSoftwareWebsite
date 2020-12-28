
@extends('FrontEnd.master')

@section('catchPhrase')
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"-->
<header id="intro">
		<div class="container" id="up">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<center><div  style="font-weight: bold; height:250px; width:200px;border-radius: 5px;"><img src="{{ asset('img/logoo.png') }}" height="250px" width="250px"></div></center>
							<h1 class="white typed" style="color:black;">Be Modern To Be Happy.</h1>
							
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
@endsection


@section('dynamique')
<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
                <!--Services-->
                @foreach ($services as $s)

                <div class="col-md-4">
                	<div class="intro-table intro-table-hover" style=" background-image: url('../img/{{$s->photo}}');">
						 <h5 class="black heading hide-hover text-center" style="background-color: #9c1210 ; font-size: 22px; color: white;">{{$s->titre}}
						 </h5>
						<div class="bottom">
						<!--	<h4 class="white heading small-heading no-margin regular">{{$s->titre}}</h4>-->
						
							<a href="#" class="btn btn-white-fill expand">Voir plus</a>
						</div>
					</div>
				    
                </div>

                @endforeach
			</div>
        </div>
        <section class="section section-padded black-bg" style="background-color: grey;">

		<div class="container">
		  <h2></h2>  
		  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:auto; width: auto; padding: 0% 30% 0% 30%;">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" style="height:auto; width:auto; ">
		      <div class="item active">
		        <img src="img/CartesVisites/1.jpg" alt="Los Angeles">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/2.jpg" alt="Chicago">
		      </div>

		      <div class="item">
		        <img src="img/CartesVisites/3.jpg" alt="Chicago">
		      </div>
		      <div class="item">
		        <img src="img/CartesVisites/5.jpg" alt="New york">
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="fa fa-chevron-left" style="padding-top: 350px;"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="fa fa-chevron-right" style="padding-top: 350px;"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>

	</section>
    </section>
            <!-- <div class="owl-carousel owl-theme owl-wrapper">
                     <div class="item" data-merge="1"><h2><img src="img/CartesVisites/C4.jpg" alt=""></h2></div>
                     <div class="item"><h2><img src="img/CartesVisites/C7.jpg" alt="C1"></h2></div>
                     <div class="item"><h2><img src="img/CartesVisites/C6.jpg" alt="C2"></h2></div>
                     <div class="item"><h2><img src="img/CartesVisites/C3.jpg" alt="C3"></h2></div>
                     <div class="item"><h2><img src="img/CartesVisites/C2.jpg" alt=""></h2></div>
                     <div class="item"><h2><img src="img/CartesVisites/C1.jpg" alt=""></h2></div>
             </div>-->

	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Notre travails</h2>
				<h4 class="light muted">Obtenez les meilleurs résultats et choisissez parmi une variété de produits <br> fabriqués avec dévouement et perfection!</h4>
            </div>
            <div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Cardio Training</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Yoga Pilates</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Power Training</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Team</h2>
				<h4 class="light muted">We're a dream team!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Ben Adamson</h4>
							<h5 class="muted regular">Fitness Instructor</h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="img/team/team1.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Eva Williams</h4>
							<h5 class="muted regular">Personal Trainer</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="img/team/team2.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>John Phillips</h4>
							<h5 class="muted regular">Personal Trainer</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
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
					<a href="{{url('/login')}}" class="btn btn-blue">Connexion</a>
				</form>
			</div>
		</div>
	</div>

@endsection