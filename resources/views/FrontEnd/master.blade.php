<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DG Software</title>
	<meta name="description" content="DG Software est une société informatique qui fournit plusieurs services et technologies." />
    <meta name="keywords" content="DG software, DGSoftware, Cartes de visite, caméra de surveillance, fiche publicitaire, gestionnaire de stock, gestionnaire de gym, gestionnaire de pharmacie, gestionnaire de bibliothèque, développement web, application web, application mobile, service de conception, logo personnalisé, dépliants, Publicités, Montage video, Développement des  Logiciels, Vente logiciel de pièces détachées, Formation, Installation Réseaux Informatique, Installation des  Caméras de surveillance, startup, DEGDEG Hichem,  Hamlili Ennebati, Meguenni Rafik  Tlemcen, Algérie " />
    <meta name="author" content="MECIFI Youssera Zoukha" />

	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-touch-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-touch-icon-60x60.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-32x32.png') }}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-16x16.png') }}" sizes="16x16">
	<link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
	<link rel="shortcut icon" href="{{ asset('img/favicons/dg-software.ico') }}">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.css') }}">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/eleganticons/et-icons.css') }}">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cardio.css') }}">

	<style type="text/css">
		.boutton:hover{
			background-color: #5d76b6;
			
			border-radius: 5px 5px 5px 5px;
			
		}
		.boutton{
			color: white;
			background-color:#345da7; 
			font-size: 15px;
		}
	</style>
</head>

<body>
	<div class="preloader">
		<img src="{{ asset('img/loader.gif') }} " alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/home')}}"><img src="{{ asset('img/logoo.png') }}" data-active-url="{{ asset('img/logoo.png') }}"  hight="60" width="70" ></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="{{url('/home')}}" class="boutton">Accueil</a></li>
					<li><a href="{{url('/service')}}" class="boutton" >Services</a></li>
                <li><a href="{{url('/aboutUs')}}" class="boutton">About</a></li>
                <li><a href="{{url('/contact')}}" class="boutton" >Contact</a></li>
					<li><a href="{{url('/login')}}"   style="background-color: #345da7;">Connexion</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	@yield('catchPhrase')

	@yield('dynamique')

    <footer>
		<div class="container">
			<div class="row">

				<div class="col-sm-4 text-center-mobile">
					<h3 class="white">Horaires d'ouvertures<span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-12 text-center-mobile">
							<h5 class="light-white light">Dimanche - Jeudi</h5>
							<h4 class="regular white">8h:30 - 16h:00</h4>
						</div>

					</div>
                </div>

                <div class="col-sm-4 text-center-mobile">
					<h3 class="white">Découvrez nos services</h3>
					<div class="row opening-hours">
                        <div class="col-sm-12 text-center-mobile">
                            <h5 class="light-white light col-sm-12 text-center-mobile">Nos services sont garantis par la qualité de nos produits fabriqués par l'élite d'un jeune personnel ambitieux et dévoué.</h5>
                            <p align="center"><a href="#" class="btn btn-blue ripple trial-button">Voir</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 text-center-mobile">
                    <h3 class="white">Contact</h3>
                    <div class="row opening-hours">
					    <div class="col-sm-12 text-center-mobile" style="padding: 0; margin: 0 0 10px 0; display: block; ">
                            <li><p class="regular white"><i class="light-white light text-center-mobile fa fa-map-marker" aria-hidden="true"></i>&nbsp;<a href="https://www.google.com/maps/dir/?api=1&destination=34.8782%2C-1.315&fbclid=IwAR05FgOXK0HTuo4Kzpi2Egwe05PBCqLDsZ_UuvkNsOfd_CSYKJZPxVJd0Rs" style="color:white">Imama en face palais de culture <br> 13000 Tlemcen, Algérie</a> </p></li>
                         	<li><p class="regular white"><i class="light-white light text-center-mobile fa fa-envelope" aria-hidden="true"></i>&nbsp;<a href="https://mail.google.com/mail/u/0/"  style="color:white">dgsoftware1334@gmail.com</a> </p></li>
                         	<li><p class="regular white"><i class="light-white light text-center-mobile fa fa-phone" aria-hidden="true"></i>&nbsp;0558 80 53 27 / 0668 50 20 50</p></li>
                        </div>
                    </div>
                </div>


            </div>

			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-12  text-center text-center-mobile">
                    <ul class="social-footer">
						<li><a href="https://www.facebook.com/DGSoftware" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/dgsoftware1334/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://github.com/dgsoftware1334" target="_blank"><i class="fa fa-github"></i></a></li>
					</ul>
					<p>&copy; 2020 All Rights Reserved. Powered by <a href="http://localhost">DG Software</a></p>
                </div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{ asset('js/typewriter.js') }}"></script>
	<script src="{{ asset('js/jquery.onepagenav.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
