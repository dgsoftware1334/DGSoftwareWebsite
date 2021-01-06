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
							<li class="breadcrumb-item"><a href="{{url('/coursgratuits')}}">Cours</a></li>
							<li class="breadcrumb-item active">{{$cours->Cours}}</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->
	<!-- Start of course details section
		============================================= -->
		<section id="course-details" class="course-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="course-details-item">
							<div class="course-single-text">
								<div class="course-title mt10 headline relative-position">
									<h3><b>{{$cours->Cours}}</b> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> Gratuit</span></h3>
								</div>
								<div class="course-details-content">
									   <div class="embed-responsive embed-responsive-16by9">
					                    <video controls poster="{{ asset('storage/'.$cours->video) }}" autoplay="true" preload="{{ asset('storage/'.$cours->thumbnail)}}"  oncontextmenu="return false;" controlsList="nodownload">
					                       <source src="{{ url('cours/'.$cours->id.'/lire') }}" type="video/mp4" >
					                       <source src="{{ url('cours/'.$cours->id.'/lire') }}" type="video/ogg" >
					                       <source src="{{ url('cours/'.$cours->id.'/lire') }}" type="video/webm" >
					                    </video>
					      			      </div>
					                  <div class="col-md-4 text-right">

					                  </div>
					              
								</div>
							</div>
						</div>
						<!-- /course-details -->

						<div class="affiliate-market-guide mb65">
							<div class="section-title-2 mb20 headline text-left">
								<h2><span>Description</span></h2>
							</div>

							<div class="affiliate-market-accordion">
								<div id="accordion" class="panel-group">
									<div class="panel">
										<div class="panel-title" id="headingOne">
											<div class="ac-head">
											{{$cours->Description}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /market guide -->
@if($cours->averageRating)
                                    
						<div class="course-review">
							<div class="section-title-2 mb20 headline text-left">
								<h2><span>Avis </span>sur le cours:</h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="ratting-preview">
										<div class="row">
											<div class="col-md-4">
												<div class="avrg-rating ul-li">
													<b>Note moyenne</b>
													<span class="avrg-rate">{{round($cours->averageRating(),1)}}</span>
													<ul>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
													</ul>
													<b>{{$cours->timesRated()}} Évaluations</b>
												</div>
											</div>
											<div class="col-md-8">
												<div class="avrg-rating ul-li">
													<span>Details</span>
													<div class="rating-overview">
														<span class="start-item">5 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">
															@php
																 $courses =App\Models\Rating::Where([['rateable_id',$cours->id],['rating','5']])->pluck('rating')->count();  
												            @endphp
												        {{$courses}}</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">4 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">
															@php
																 $courses =App\Models\Rating::Where([['rateable_id',$cours->id],['rating','4']])->pluck('rating')->count();  
												            @endphp
												        {{$courses}}</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">3 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">
															@php
																 $courses =App\Models\Rating::Where([['rateable_id',$cours->id],['rating','3']])->pluck('rating')->count();  
												            @endphp
												        {{$courses}}</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">2 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">
															@php
																 $courses =App\Models\Rating::Where([['rateable_id',$cours->id],['rating','2']])->pluck('rating')->count();  
												            @endphp
												        {{$courses}}</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">1 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">
															@php
																 $courses =App\Models\Rating::Where([['rateable_id',$cours->id],['rating','1']])->pluck('rating')->count();  
												            @endphp
												        {{$courses}}</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
 @endif
						<!-- /review overview -->

						<div class="couse-comment">
							<div class="blog-comment-area ul-li about-teacher-2">
								<ul class="comment-list">
									@php
										$comments = App\Models\Commentaire::where('cours_ID',$cours->id);
									@endphp
									@foreach($comments as $comment)
									<li>
										<div class=" comment-avater">
											<img src="assets/img/blog/ath-2.jpg" alt="">
										</div>

										<div class="author-name-rate">
											<div class="author-name float-left">
												PAR: <span>{{$comment->nom}}</span> 
											</div>
											<div class="comment-ratting float-right ul-li">
												<ul>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
											<div class="time-comment float-right">{{$comment->created_at->locale('fr')->diffForHumans()}}</div>
										</div>
										<div class="author-designation-comment">
											<p>
												{{$comment->message}}
											</p>
										</div>
									</li>
								@endforeach
								</ul>

								<div class="reply-comment-box">
									<div class="review-option">
										<div class="section-title-2  headline text-left float-left">
											<h2>Ajouter des <span>Avis</span></h2>
										</div>
										<div class="review-stars-item float-right mt15">
											<span>Your Rating: </span>
											<form class="rating" action="{{ url('/comment') }}" method="POST">
                                                     @csrf 
												<label>
													<input type="radio" name="stars" value="1" />
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="2" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="3" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>   
												</label>
												<label>
													<input type="radio" name="stars" value="4" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="5" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
											
										</div>
									</div>
									<div class="teacher-faq-form">
										<div class="col-12 mt-2">
						                   @if(session()->has('success'))
						                    <div class="alert alert-success alert-dismissible fade show" role="alert">
						                      <strong>{{session()->get('success')}} </strong>
						                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						                        <span aria-hidden="true">&times;</span>
						                      </button>
						                    </div>
						                   @elseif(session()->has('error'))
						                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
						                     <strong>{{session()->get('error')}} </strong>
						                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						                       <span aria-hidden="true">&times;</span>
						                     </button>
						                    </div>
						                   @endif
						                </div>
											<div class="row">
												<div class="col-md-6">
													<label for="name">Nom</label>
													<input type="text" name="nom" id="name" required="required">
												</div>
												<div class="col-md-6">
													<label for="phone">Email</label>
													<input type="tel" name="email" id="phone" required="required">
												</div>
											</div>
											<label for="comments">Message</label>
											<textarea name="comments" id="comments" rows="2" cols="20" required="required"></textarea>
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" value="Submit">Envoyer commentaire</button> 
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="side-bar">

							<div class="side-bar-widget first-widget">
							<h2 class="widget-title text-capitalize"><span>Trouvez un cours </span>&amp; inscrivez-vous aujourd'hui !</h2>
							<div class="course-img">
								<img src="{{asset('assets/img/banner/inscription.jpg')}}" alt="">
							</div>
							<div class="course-desc">
								<p>Consultez nos cours gratuits et découvrez vous-même pourquoi nos cours sont ce dont vous avez besoin.</p>
							</div>
							<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a href="{{url('/inscription')}}">Voir les cours enligne<i class="fas fa-caret-right"></i></a>
							</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Cours </span>Récents.</h2>
								<div class="latest-news-posts">
									
@php
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
@endphp
								@foreach($courses as $c)
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="{{ asset('storage/'.$c->thumbnail) }}" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> {{\Carbon\Carbon::parse($c->created_at)->format('d/m/Y')}}
										</div>
										<h3 class="latest-title bold-font"><a href="{{ url('cours/'.$c->id.'/details') }}">{{$c->Cours}}</a></h3>
									</div>
								@endforeach
								<!-- /post -->
									<div class="view-all-btn bold-font">
										<a href="{{url('/coursgratuits')}}">Voir tous les cours <i class="fas fa-chevron-circle-right"></i></a>
									</div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Cas clinique</span> récents. </h2>
								
								@foreach($casCliniques as $cc)
								<div class="featured-course">
									<div class="best-course-pic-text relative-position">
										<div class="best-course-pic relative-position">
											<img src="{{ asset('storage/'.$c->thumbnail) }}" alt="">
											<div class="trend-badge-2 text-center text-uppercase">
												<i class="fas fa-bolt"></i>
												<span>Gratuit</span>
											</div>
										</div>
										<div class="best-course-text">
											<div class="course-title mb20 headline relative-position">
												<h3><a href="{{ url('cours/'.$cc->id.'/details') }}">{{$cc->Cours}}</a></h3>
											</div>
											<div class="course-meta">
												<span class="course-author"><a href="{{ url('cours/'.$cc->id.'/details') }}"><i class="fas fa-calendar-alt"></i> {{\Carbon\Carbon::parse($c->created_at)->format('d/m/Y')}}</a></span>
												<span class="course-category"><a href="{{ url('cours/'.$cc->id.'/details') }}">{{$cc->Durée}}</a></span>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of course details section
		============================================= -->	






<script type="text/javascript">
    $("#input-id").rating();
</script>

@endsection