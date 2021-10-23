@extends('index')


@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])

<!-- START BLOG -->
	<!-- START BREADCRUMB -->
        <div id="breadcrumb" class="breadcrumb-bg">
            <div class="container">
                <h2 class="head-after">Aritcle</h2>
                <nav>
                    <ul>
                        <li class="breadcrumb-item"><a href="index.html"><i class="mdi mdi-home"></i> Acceuil</a></li>
                        <li class="breadcrumb-item"><a href="portfolio.html">Articles</a></li>
                        <li class="breadcrumb-item active">{{$article->Titre}}</li>
                    </ul>
                </nav>
            </div>
        </div>
	<!-- END BREADCRUMB -->
 	<!-- START WHO WE ARE -->

		


	<!-- START PORTFOLIO -->
						<div id="portfolio">
							<div class="container">
								<div class="row">

									<div class="col-lg-4">
										<div class="sidebar">

											

											@if(Auth::User())
											<div class="sidebar-item">
												<div class="sidebar-card">
													<div class="section-heading">
														<h4 class="head-after">Dashboard</h4>
													</div>
													<ul class="sidebar-categories">
														<li><a class="btn-icon" href="{{url('articlesDash')}}"><span>Articles</span></a></li>
														<li><a class="btn-icon" href="{{url('evenementsDash')}}"><span>Evenements</span></a></li>
														<li><a class="btn-icon" href="{{url('fondateursDash')}}"><span>Fondateurs</span></a></li>
														<li><a class="btn-icon" href="{{url('polesActivitesDash')}}"><span>Poles d'activités</span></a></li>
														<li><a class="btn-icon" href="{{url('secteursDash')}}"><span>Secteurs d'activités</span></a></li>
														<li><a class="btn-icon" href="{{url('messagesRecu')}}"><span>Messagerie</span></a></li>
													</ul>
												</div>
											</div>
											@endif

											<div class="sidebar-item">
												<div class="sidebar-card">
													<div class="section-heading">
														<h4 class="head-after">Search</h4>
													</div>
													<form id="search_form">
														<div class="input-group">
															<input type="text" name="search_input" class="form-control" placeholder="Enter your keywords...">
															<div class="input-group-append">
																<button type="submit" class="btn theme-btn-default"><i class="mdi mdi-magnify input-group-btn-icon"></i></button>
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="sidebar-item sidebar-item-tags">
												<div class="sidebar-card">
													<div class="section-heading">
														<h3 class="head-after">articles précédents</h3>
													</div>
													<ul class="sidebar-tags">
													@foreach($articles as $art)
													<li>
														<a href="{{route('articles.show',$art->id)}}" class="btn btn-sm theme-btn-default">
															@if(strlen($art->Titre) >= 38)
															{{$chaine = substr($art->Titre, 0, 38)}} ...
															@else
															{{$art->Titre}}
															@endif
														</a>
													</li>
														
													@endforeach
													</ul>
												</div>
											</div>

											<div class="sidebar-item sidebar-item-tags">
												<div class="sidebar-card">
													<div class="section-heading">
														<h3 class="head-after">Evenements précédents</h3>
													</div>
													<ul class="sidebar-tags">
													@foreach($evenements as $evn)
														<li>
															<a href="{{route('evenements.show', $evn->id)}}" class="btn btn-sm theme-btn-default">
																@if(strlen($evn->titre) >= 38)
																{{$chaine = substr($evn->titre, 0, 38)}} ...
																@else
																{{$evn->titre}}
																@endif
															</a>
														</li>
													@endforeach
													</ul>
												</div>
											</div>

										</div>
									</div>

									<div class="col-lg-8">
										<div class="portfolio-item-single-item">
											<div class="portfolio-item-single portfolio-item-single-position-relative">
												<img src="{{asset($article->Image)}}" alt="">
												<div class="portfolio-item-single-icon">
													<a class="mfpclick" href="#blog1">
														<i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
													</a>
												</div>
												<div class="portfolio-item-single-date">
													<a href="#" class="btn theme-bg-default">{{$article->created_at->format('d-M-Y')}}</a>
												</div>
												<div id="blog1" class="mfp-hide">
													<a href="{{asset($article->Image)}}"></a>
												</div>
											</div>
											<div class="portfolio-item-single">
												<div class="portfolio-item-card">
													<h5>{{$article->Titre}}</h5>
													</div>
											</div>
                                            <div class="portfolio-item-single">
                                                <blockquote class="mb-0 theme-bg-default">
                                                    {{$article->SousTitre}}
                                                    <span>- {{$article->Chapeau}}</span>
                                                </blockquote>
                                            </div>
											<div class="portfolio-item-single">
												{{$article->Corp}}
											</div>
                                            <div class="portfolio-item-single">
												{!!$article->Chute!!}
											</div>
											
											
										</div>
									</div>

								</div>
							</div>
						</div>
<!-- END PORTFOLIO -->



<!-- End WHO WE ARE -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop