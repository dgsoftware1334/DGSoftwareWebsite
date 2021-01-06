

<?php $__env->startSection('content'); ?>
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
							<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Accueil</a></li>
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
<?php 
	$items = DB::table('cours')
                ->where([['cours.catégories','Cours'],['cours.offre',3]])
                ->orderBy('cours.created_at','desc')
                ->get();
?>
											<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="<?php echo e(url('storage/'.$item->thumbnail)); ?>" alt="">
														<div class="trend-badge-2 text-center text-uppercase">
															<i class="fas fa-bolt"></i>
															<span>Gratuit</span>
														</div>
														<div class="course-price text-center gradient-bg">
															<span> <?php echo e($item->Durée); ?></span>
														</div>
														<div class="course-rate ul-li">
															<ul>
																 <li><i class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="course-details-btn">
															<a href="<?php echo e(url('cours/'.$item->id.'/details')); ?>">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
													</div>
													<div class="best-course-text">
														<div class="course-title mb20 headline relative-position">
															<h3><a href="<?php echo e(url('cours/'.$item->id.'/details')); ?>"> <?php echo e($item->Cours); ?>.</a></h3>
														</div>
														<div class="course-meta">
															<span class="course-category"><a href="<?php echo e(url('cours/'.$item->id.'/details')); ?>"> <?php echo e(\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')); ?></a></span>
														</div>
													</div>
												</div>
											</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<!-- /course -->

											
											<!-- /course -->
										</div>
											<div class="row">
												<div class="section-title-2  headline text-left">
													<h2><span>Cas cliniques</span></h2>
												</div>
											</div>
											<div class="row">
<?php 
	$collection = DB::table('cours')
                ->where([['cours.catégories','Cas Clinique'],['cours.offre',3]])
                ->orderBy('cours.created_at','desc')
                ->get()
?>
										<?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="<?php echo e(asset('storage/'.$item->thumbnail)); ?>" alt="">
														<div class="course-price text-center gradient-bg">
															<span><?php echo e($item->Durée); ?></span>
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
															<a href="<?php echo e(url('cours/'.$item->id.'/details')); ?>">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
													</div>
													<div class="best-course-text">
														<div class="course-title mb20 headline relative-position">
															<h3><a href="<?php echo e(url('cours/'.$item->id.'/details')); ?>"><?php echo e($item->Cours); ?>.</a></h3>
														</div>
														<div class="course-meta">
															<span class="course-category"><a href="<?php echo e(url('cours/'.$item->id.'/details')); ?>"><?php echo e(\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')); ?></a></span>
														</div>
													</div>
												</div>
											</div>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<!-- /course -->
										</div>
									</div>
								</div><!-- /tab-1 -->

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
								<a href="<?php echo e(url('/inscription')); ?>">Voir les cours enligne<i class="fas fa-caret-right"></i></a>
							</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Cours </span>Récents.</h2>
								<div class="latest-news-posts">
									
<?php
	$courses =DB::table('cours')
                ->where([['cours.offre','=','3'],['cours.catégories','=','Cours']])
                ->orderBy('cours.created_at','desc')
                ->get()
                ->take(3); 
    $casCliniques = DB::table('cours')
                ->where([['cours.offre','=','3'],['cours.catégories','=','Cas clinique']])
                ->orderBy('cours.created_at','desc')
                ->get()
                ->take(3); 
?>
								<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="<?php echo e(asset('storage/'.$c->thumbnail)); ?>" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> <?php echo e(\Carbon\Carbon::parse($c->created_at)->format('d/m/Y')); ?>

										</div>
										<h3 class="latest-title bold-font"><a href="<?php echo e(url('cours/'.$c->id.'/details')); ?>"><?php echo e($c->Cours); ?></a></h3>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<!-- /post -->
									<div class="view-all-btn bold-font">
										<a href="<?php echo e(url('/coursgratuits')); ?>">Voir tous les cours <i class="fas fa-chevron-circle-right"></i></a>
									</div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Cas clinique</span> récents. </h2>
								
								<?php $__currentLoopData = $casCliniques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="featured-course">
									<div class="best-course-pic-text relative-position">
										<div class="best-course-pic relative-position">
											<img src="<?php echo e(asset('storage/'.$c->thumbnail)); ?>" alt="">
											<div class="trend-badge-2 text-center text-uppercase">
												<i class="fas fa-bolt"></i>
												<span>Gratuit</span>
											</div>
										</div>
										<div class="best-course-text">
											<div class="course-title mb20 headline relative-position">
												<h3><a href="<?php echo e(url('cours/'.$cc->id.'/details')); ?>"><?php echo e($cc->Cours); ?></a></h3>
											</div>
											<div class="course-meta">
												<span class="course-author"><a href="<?php echo e(url('cours/'.$cc->id.'/details')); ?>"><i class="fas fa-calendar-alt"></i> <?php echo e(\Carbon\Carbon::parse($c->created_at)->format('d/m/Y')); ?></a></span>
												<span class="course-category"><a href="<?php echo e(url('cours/'.$cc->id.'/details')); ?>"><?php echo e($cc->Durée); ?></a></span>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
										<a href="<?php echo e(url('/inscription')); ?>">S'inscrir<i class="fas fa-arrow-right"></i></a>
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
										<a href="<?php echo e(url('/inscription')); ?>">S'inscrir<i class="fas fa-arrow-right"></i></a>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.static', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/cours.blade.php ENDPATH**/ ?>