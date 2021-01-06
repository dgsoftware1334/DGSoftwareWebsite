
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
							<li class="breadcrumb-item active">A propos</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of about us content
		============================================= -->
		<section id="about-page" class="about-page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="about-us-content-item">
							<div class="about-gallery">
								<div class="about-gallery-img grid-1">
									<img src="assets/img/banner/Asset2.jpg" alt="">
								</div>
							</div>
							<!-- /gallery -->

							<div class="about-text-item">
								<div class="section-title-2  headline text-left">
									<h2><span>A propos de moi</span> </h2>
								</div>
								<p>

									En tant que résidente en médecine interne, l'ECG pour moi a été et restera toujours un simple examen qui peut fournir beaucoup d'informations, j'ai donc toujours essayé de le maîtriser,
									J'ai lu plusieurs livres, vu des vidéos sur YouTube et même suivi une formation. Et en travaillant, j'ai remarqué que la plupart d'entre nous, médecins généralistes, stagiaires ou externes, avions un problème d'interprétation des ECG, c'est vrai que c'est un peu difficile, mais le fait est de voir plusieurs ECG à chaque fois avec une bonne interprétation, bien sûr après avoir une bonne base.
									C'est ce qui fait la différence avec un cardiologue, il a un bon bagage, mais surtout il interprète plusieurs ECG chaque jour, c'est pourquoi il le maîtrise!
								</p>
									<div class="section-title-2  headline text-left">
										<h2><span>E-ECG </span> Votre assistant pour surmonter les défis de l'électrocardiogramme!</h2>
									</div>
								<p>
									E-ECG est un site e-learning destiné aux médecins généralistes et aux étudiants en médecine
									Parce que les formations données par les professeurs sont bonnes, mais en même temps elles coûtent très cher! J'ai donc eu l'idée de créer une formation en ligne avec un prix symbolique par rapport à d'autres formations, pour aider mes confrères. Vous pouvez avoir accès à tout moment à des cours et des cas cliniques, vous pouvez également voir des cas réels fréquents et rares, avec des tracés de haute qualité, en sorte de vidéo, c'est la méthode la plus efficace pour la maîtriser. Un cas clinique sera publié chaque
									semaine, ce sera donc une sorte de formation continue. nous veulent être une bonne source d’apprentissage de l’électrocardiogramme en français.
								</p>
							</div>
							<!-- /about-text -->

							<div class="course-teacher about-teacher-2">
								<div class="course-advantage about-teacher-2">
									<div class="section-title-2  headline text-left">
										<h2>Pourquoi choisir <span>E-ECG ?</span></h2>
									</div>
									<div class="service-slide_3">
										<div class="service-text-icon">
											<div class="service-icon float-left">
												<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
											</div>
											<div class="service-text">
												<h3 class="bold-font">Cas clinique Hebdomadaire.</h3>
												<p>Nouveau cas clinique publié chaque semaine en détail.</p>
											</div>
										</div>
										<div class="service-text-icon">
											<div class="service-icon float-left">
												<i class="text-gradiant flaticon-business"></i>
											</div>
											<div class="service-text">
												<h3 class="bold-font">Meilleurs prix dans le marcher.</h3>
												<p>Les prix ont été fixés pour faciliter et aider mes confrères.</p>
											</div>
										</div>
										<div class="service-text-icon">
											<div class="service-icon float-left">
												<i class="text-gradiant flaticon-technology"></i>
											</div>
											<div class="service-text">
												<h3 class="bold-font">Sites web réactif et accessible a tout moment</h3>
												<p>Consultation confortable sur des écrans de tailles différentes</p>
											</div>
										</div>
										<div class="service-text-icon">
											<div class="service-icon float-left">
												<i class="text-gradiant flaticon-dna"></i>
											</div>
											<div class="service-text">
												<h3 class="bold-font">Cours mené par passion et dévouement.</h3>
												<p>Des connaissances construites par de longues études et de dur travails, et surtout par la pratique!</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /course-advantage -->
<!-- 							<div class="about-course-categori about-teacher-2">
									<div class="section-title-2  headline text-left">
										<h2>Course <span>Categories</span></h2>
									</div>
									<div class="category-slide text-center">
										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-technology"></i>
											</div>
											<div class="category-title">
												<h4>Responsive Website</h4>
											</div>
										</div>

										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-app-store"></i>
											</div>
											<div class="category-title">
												<h4>IOS Applications</h4>
											</div>
										</div>

										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-artist-tools"></i>
											</div>
											<div class="category-title">
												<h4>Graphic Design</h4>
											</div>
										</div>

										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-business"></i>
											</div>
											<div class="category-title">
												<h4>Marketing</h4>
											</div>
										</div>

										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-dna"></i>
											</div>
											<div class="category-title">
												<h4>Science</h4>
											</div>
										</div>

										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-cogwheel"></i>
											</div>
											<div class="category-title">
												<h4>Enginering</h4>
											</div>
										</div>

										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-technology-1"></i>
											</div>
											<div class="category-title">
												<h4>Photography</h4>
											</div>
										</div>

										<div class="category-icon-title text-center">
											<div class="category-icon">
												<i class="text-gradiant flaticon-technology-2"></i>
											</div>
											<div class="category-title">
												<h4>Mobile Application</h4>
											</div>
										</div>
									</div>
								</div>
							 /course-categori -->

							</div>
						</div>
					</div>

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
											<span>Gratuit</span>
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
				</div>
			</div>
		</section>
	<!-- End of about us content
		============================================= -->


	<!-- Start of best product section
		============================================= -->
		<!--<section id="best-product" class="best-product-section best-product-4">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left">
					<h2>Genius <span>Best Products.</span></h2>
				</div>
				<div  id="best-product-slide-item" class="best-product-slide">
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-1.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>

					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-2.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-3.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-4.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-1.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-2.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-3.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	<!-- End  of best product section
		============================================= -->



@endsection