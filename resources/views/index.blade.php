<!DOCTYPE html>
<html lang="en">
<head>

<!-- Browser Bar Icon -->
<link rel="shortcut icon" href="{{asset('assets/images/Logo.png')}}">

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Title -->
<title>OPTIMUS || Home</title>


<!-- START CSS -->

	<!-- Bootstrap -->
	<link href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Main custom CSS -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

	<!-- Magnific popup CSS -->
	<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">

	<!-- Font awesome CSS -->
	<link href="{{asset('assets/font/materialdesignicons/css/materialdesignicons.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/font/flaticon/flaticon.css')}}" rel="stylesheet">

	<!-- Theme responsive CSS -->
	<link href="{{asset('assets/css/theme-responsive.css')}}" rel="stylesheet">

	<!-- Animation CSS -->
	<link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/custom-animate.css')}}" rel="stylesheet">

	<!-- Owl carousel CSS -->
	<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">

	<!-- Slick carousel CSS -->
	<link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/custom-slick.css')}}" rel="stylesheet">

	<!-- Colors -->
	<link id="colors-id" href="{{asset('assets/css/colors/orange-color.css')}}" rel="stylesheet">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,600,700,800,900" rel="stylesheet">
    <!-- SUMMER NOTES LINKS -->
    <!--link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- END CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body id="body-top">

	<!-- START LOADER -->
	<div id="loader">
		<div class="rotating-bg">
			<div>O</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- START NAV MENU -->


	<!-- END NAV MENU -->

	<!-- START SLIDER -->
	@yield('contenu')
	<!-- END SLIDER -->



	<!-- START FOOTER -->
	<div id="footer" class="theme-bg-default">
		<div class="container">
			<div class="row">

				<div class="col-lg-4">
					<div class="footer-item">
						<div class="footer-logo">
							<a class="navbar-brand logo" href="{{ route('accueil') }}">
								<span class="logo-icon mdi-bg mdi-bg-sm theme-bg-white">O</span>
								<span class="logo-text">Optimus</span>
							</a>
						</div>
						<div class="footer-about-content" style="text-align: justify;">
							<p>Optimus LPE est un bureau d'étude spécialisé dans le domaine de la sécurité industrielle
							et la protection de l'onvionnement. La mission principale est la réalisation des études
							réglementaire et techniques dans le deomaine de la prévention et la protection contre les risque
							majeur ainsi que l'accompagnement de la formation dans le domaine.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="footer-item-list">
						<div class="mb-30px">
							<h3 class="head-after head-after-white">Footer Links</h3>
						</div>
						<div class="footer-list">
							<div class="row">
								<div class="col-lg-5">
									<ul>
										<li><a class="btn-icon" href="{{url('/')}}"><span>Acceuil</span></a></li>
										<li><a class="btn-icon" href="{{url('articles')}}"><span>Articles</span></a></li>
										<li><a class="btn-icon" href="{{url('evenements')}}"><span>Evenements</span></a></li>
										<li><a class="btn-icon" href="{{url('fondateurs')}}"><span>Fondateurs</span></a></li>
										<li>
                                            @if ($AllSecteurs->count() > 0 )
                                                <a class="btn-icon" href="{{route('secteurs.show',$AllSecteurs[0]->id)}}"><span>Secteurs Activités</span></a>
                                            @endif     
                                        </li>
										<li>
                                            @if($AllPoles->count() > 0)
                                            <a class="btn-icon" href="{{route('polesActivites.show',$AllPoles[0]->id)}}"><span>Poles Activités</span></a>
                                            @endif
                                        </li>

									</ul>
								</div>
								<div class="col-lg-7">
									<ul>
										<li><a class="btn-icon" href="{{url('presentations')}}"><span>À propos</span></a></li>
										<li><a class="btn-icon" href="{{url('contact')}}"><span>Contactez-nous</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="footer-item">
						<div class="mb-30px">
							<h3 class="head-after head-after-white">Contactez-nous</h3>
						</div>
						<div class="footer-contact">
							<div class="footer-contact-info-div">
								<h6><i class="mdi mdi-map-marker mdi-bg mdi-bg-sm-sm theme-bg-dark"></i> Address</h6>
								<p>{{$presentation[0]->address}}.</p>
							</div>
							<div class="footer-contact-info-div">
								<h6><i class="mdi mdi-phone mdi-bg mdi-bg-sm-sm theme-bg-dark"></i> N° Téléphones</h6>
								<p>{{$presentation[0]->telephone}}</p>
							</div>
							<div class="footer-contact-info-div">
								<h6><i class="mdi mdi-email-open mdi-bg mdi-bg-sm-sm theme-bg-dark"></i> Emails</h6>
								<p>{{$presentation[0]->email}}</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END FOOTER -->

	<!-- START SUB FOOTER -->
	<div id="sub-footer" class="theme-bg-dark">

		<div class="col-lg-12">
			<div class="text-center">
				<a class="mdi mdi-bg mdi-bg-sm theme-btn-default backto-top-btn easing-click" href="#body-top">
					<i class="mdi mdi-chevron-double-up"></i>
				</a>
			</div>
		</div>

		<div class="container">
			<div class="row">



				<div class="col-lg-12">
					<div class="sub-footer-right">
						<p>&copy; 2021 <a href="https://www.dgsoftwareplus.com/">SARL DGSoftware</a> Tous droits réservés.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END SUB FOOTER -->

<!-- START SCRIPTS -->
    <!-- Ajax -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- Jquery -->
    <script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery.touchSwipe.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap-touch-slider.js')}}"></script>

    <!-- Isotope -->
	<script src="{{asset('assets/js/magnific/jquery.magnific-popup.min.js')}}"></script>

	 <!-- Waypoints -->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>

    <!-- Jquery Validate -->
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/additional-methods.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-jquery.validate.js')}}"></script>

    <!-- Counter -->
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>

    <!-- Isotope -->
	<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

	<!-- Shuffle -->
	<script src="{{asset('assets/js/shuffle.min.js')}}"></script>
	<script src="{{asset('assets/js/custom-shuffle.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

    <!-- Wow Min -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>

    <!-- Slick Carousel -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!-- Custom Script -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- summernote css/js -->
    <!--script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @yield('scripts')
<!-- END SCRIPTS -->

</body>
</html>
