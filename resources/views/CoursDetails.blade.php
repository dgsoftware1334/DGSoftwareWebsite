@extends('layouts.static')

@section('content')
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
							<li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
							<li class="breadcrumb-item active">Cours</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

		<div class="col-md-3">
						<div class="side-bar-widget first-widget">
							<h2 class="widget-title text-capitalize"><span>Trouvez un cours </span>&amp; inscrivez-vous aujourd'hui !</h2>
							<div class="course-img">
								<img src="assets/img/banner/inscription.jpg" alt="">
							</div>
							<div class="course-desc">
								<p>Consultez nos cours gratuits et découvrez vous-même pourquoi nos cours sont ce dont vous avez besoin.</p>
							</div>
							<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a href="{{url('/cours')}}">Voir les cours enligne<i class="fas fa-caret-right"></i></a>
							</div>
						</div>

						<div class="side-bar-widget">
							<h2 class="widget-title text-capitalize"><span>Cours </span>Récents.</h2>
							<div class="latest-news-posts">
								<div class="latest-news-area">
									<div class="latest-news-thumbnile relative-position">
										<img src="assets/img/blog/lb-1.jpg" alt="">
										<div class="hover-search">
											<i class="fas fa-search"></i>
										</div>
										<div class="blakish-overlay"></div>
									</div>
									<div class="date-meta">
										<i class="fas fa-calendar-alt"></i> 26 April 2018
									</div>
									<h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
								</div>
								<!-- /post -->

								<div class="latest-news-posts">
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="assets/img/blog/lb-2.jpg" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> 26 April 2018
										</div>
										<h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
									</div>
									<!-- /post -->
								</div>

								<div class="view-all-btn bold-font">
									<a href="#">Voir tous les cours <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>
						</div>

						<div class="side-bar-widget">
							<h2 class="widget-title text-capitalize"><span>Cas clinique</span> récents. </h2>
							<div class="featured-course">
								<div class="best-course-pic-text relative-position">
									<div class="best-course-pic relative-position">
										<img src="assets/img/banner/casClinique.png" alt="">
										<div class="trend-badge-2 text-center text-uppercase">
											<i class="fas fa-bolt"></i>
											<span>Trending</span>
										</div>
									</div>
									<div class="best-course-text">
										<div class="course-title mb20 headline relative-position">
											<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
										</div>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">250 Students</a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					



@endsection