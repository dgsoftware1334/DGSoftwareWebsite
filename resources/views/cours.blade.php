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
		<section id="course-page" class="course-page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="short-filter-tab">
							<div class="tab-button blog-button ul-li text-center float-right">
								<ul class="product-tab">
									<li class="active" rel="tab1"><i class="fas fa-th"></i></li>
									<li rel="tab2"> <i class="fas fa-list"></i></li>
								</ul>
							</div>
							
						</div>

						<div class="genius-post-item">
							<div class="tab-container">
								<div id="tab1" class="tab-content-1 pt35">
									<div class="best-course-area best-course-v2">
										<div class="row">
													<div class="section-title-2  headline text-left">
														<h2><span>Cours</span></h2>
													</div>
										</div>	
										<div class="row">
											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-1.jpg" alt="">
														<div class="trend-badge-2 text-center text-uppercase">
															<i class="fas fa-bolt"></i>
															<span>Gratuit</span>
														</div>
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->

											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-2.jpg" alt="">
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->

											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-3.jpg" alt="">
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->

											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-4.jpg" alt="">
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->

											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-5.jpg" alt="">
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->

											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-6.jpg" alt="">
														<div class="trend-badge-2 text-center text-uppercase">
															<i class="fas fa-bolt"></i>
															<span>Gratuit</span>
														</div>
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->
											</div>
											<div class="row">
												<div class="section-title-2  headline text-left">
													<h2><span>Cas cliniques</span></h2>
												</div>
											</div>
											<div class="row">
											
											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-7.jpg" alt="">
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->

											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-8.jpg" alt="">
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->

											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="assets/img/course/bc-4.jpg" alt="">
														<div class="course-price text-center gradient-bg">
															<span>$99.00</span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
																<li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
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
											<!-- /course -->
										</div>
									</div>
								</div><!-- /tab-1 -->

								<div id="tab2" class="tab-content-1">
									<div class="course-list-view">
										<table>
											<tr class="list-head">
												<th>COURSE NAME</th>
												<th>COURSE TYPE</th>
												<th>STARTS</th>
												<th>LENGTH</th>
											</tr>
											<tr>
												<td>
													<div class="course-list-img-text">
														<div class="course-list-img">
															<img src="assets/img/course/cl-1.jpg" alt="">
														</div>
														<div class="course-list-text">
															<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
															<div class="course-meta">
																<span class="course-category bold-font"><a href="#">$120.25</a></span>
																<div class="course-rate ul-li">
																	<ul>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="course-type-list">
														<span>Graphic Design & 3D</span>
													</div>
												</td>
												<td>6-06-2018</td>
												<td>3 Months</td>
											</tr>
											<tr>
												<td>
													<div class="course-list-img-text">
														<div class="course-list-img">
															<img src="assets/img/course/cl-2.jpg" alt="">
														</div>
														<div class="course-list-text">
															<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
															<div class="course-meta">
																<span class="course-category bold-font"><a href="#">$120.25</a></span>
																<div class="course-rate ul-li">
																	<ul>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="course-type-list">
														<span>Graphic Design & 3D</span>
													</div>
												</td>
												<td>6-06-2018</td>
												<td>3 Months</td>
											</tr>
											<tr>
												<td>
													<div class="course-list-img-text">
														<div class="course-list-img">
															<img src="assets/img/course/cl-3.jpg" alt="">
														</div>
														<div class="course-list-text">
															<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
															<div class="course-meta">
																<span class="course-category bold-font"><a href="#">$120.25</a></span>
																<div class="course-rate ul-li">
																	<ul>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="course-type-list">
														<span>Graphic Design & 3D</span>
													</div>
												</td>
												<td>6-06-2018</td>
												<td>3 Months</td>
											</tr>
											<tr>
												<td>
													<div class="course-list-img-text">
														<div class="course-list-img">
															<img src="assets/img/course/cl-4.jpg" alt="">
														</div>
														<div class="course-list-text">
															<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
															<div class="course-meta">
																<span class="course-category bold-font"><a href="#">$120.25</a></span>
																<div class="course-rate ul-li">
																	<ul>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="course-type-list">
														<span>Graphic Design & 3D</span>
													</div>
												</td>
												<td>6-06-2018</td>
												<td>3 Months</td>
											</tr>
											<tr>
												<td>
													<div class="course-list-img-text">
														<div class="course-list-img">
															<img src="assets/img/course/cl-5.jpg" alt="">
														</div>
														<div class="course-list-text">
															<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
															<div class="course-meta">
																<span class="course-category bold-font"><a href="#">$120.25</a></span>
																<div class="course-rate ul-li">
																	<ul>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="course-type-list">
														<span>Graphic Design & 3D</span>
													</div>
												</td>
												<td>6-06-2018</td>
												<td>3 Months</td>
											</tr>
											<tr>
												<td>
													<div class="course-list-img-text">
														<div class="course-list-img">
															<img src="assets/img/course/cl-1.jpg" alt="">
														</div>
														<div class="course-list-text">
															<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
															<div class="course-meta">
																<span class="course-category bold-font"><a href="#">$120.25</a></span>
																<div class="course-rate ul-li">
																	<ul>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="course-type-list">
														<span>Graphic Design & 3D</span>
													</div>
												</td>
												<td>6-06-2018</td>
												<td>3 Months</td>
											</tr>
										</table>
									</div>
								</div><!-- /tab-2 -->
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="side-bar">

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
			</div>
		</section>
	<!-- End of course section
		============================================= -->


		<section id="best-course" class="best-course-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
					<h2>Nos<span> Offres.</span></h2>
				</div>
				<div class="best-course-area mb45">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<div class="best-course-pic-text relative-position">
								<div class="best-course-pic relative-position">
									<img src="assets/img/banner/offer2.png" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
			   							<i class="fas fa-bolt"></i>
										<span>6 mois</span>
									</div>
							    	<div class="course-price text-center gradient-bg">
										<span>3500 DA</span>
									</div>
									<div class="course-details-btn">
										<a href="{{url('/inscription')}}">S'inscrir<i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Accés a tous les cours pendant 6mois ! seulement a 3500 DA</a></h3>
										  <ul class="list-group list-group-flush">
										    <li class="list-group-item">* Accès a l'ensemble des cours ECG</li>
										    <li class="list-group-item">* Accès a 10 cas cliniques</li>
										    <li class="list-group-item">* 1 nouveau cas clinique publiée chaque semaine .</li>
										  </ul>
										
									</div>
								
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<div class="best-course-pic-text relative-position">
								<div class="best-course-pic relative-position">
									<img src="assets/img/banner/offer1.png" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
			   							<i class="fas fa-bolt"></i>
										<span>12 mois</span>
									</div>
							    	<div class="course-price text-center gradient-bg">
										<span>5000 DA</span>
									</div>
									<div class="course-details-btn">
										<a href="{{url('/inscription')}}">S'inscrir<i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Accés pour une année !</a></h3>
										  <ul class="list-group list-group-flush">
										    <li class="list-group-item">* Accès a l'ensemble des cours ECG</li>
										    <li class="list-group-item">* Accès a 10 cas cliniques</li>
										    <li class="list-group-item">* 1 nouveau cas clinique publiée chaque semaine .</li>
										  </ul>
										
									</div>
								
								</div>
							</div>
						</div>
						
						<div class="col-md-1"></div>
						<!-- /course -->
					</div>
				</div>
			</div>
		</section>

@endsection