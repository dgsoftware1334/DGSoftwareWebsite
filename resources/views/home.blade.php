@extends('index')

@section('contenu')


@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])


<div id="slider-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000">
		<ol class="carousel-indicators">
            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#slider-carousel" data-slide-to="1"></li>
            @if ($evenements->count() >0)
                @for($i=1; $i>=$evenements->count(); $i=$i+1)
                    <li data-target="#slider-carousel" data-slide-to="{{$i+1}}"></li>
                @endfor
            @endif
		</ol>
		<div class="carousel-inner" role="listbox">
			<!-- Slider N° -->
			<div class="carousel-item active" style="background-image: url('assets/images/slider/slid2.jpg')">
				<div class="carousel-caption">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<h1 class="animated fadeInDown">SARL OPTIMUS LPE <span class="theme-text-default">Sécurité Industrielle</span> et Protection de l'environnement</h1>
								<p class="animated fadeIn">Bureau d'étude  spécialisé dans le domaine de la sécurité industrielle</p>
								<div class="slider-btn animated fadeInUp">
									<a href="{{url('contact')}}" class="btn theme-btn-default btn-icon"><span>Countactez-Nous</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="carousel-item " style="background-image: url('assets/images/slider/cover1.jpg')">
				<div class="carousel-caption">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<h1 class="animated fadeInDown">SARL OPTIMUS LPE <span class="theme-text-default">Sécurité Industrielle</span> et Protection de l'environnement</h1>
								<p class="animated fadeIn">Bureau d'étude  spécialisé dans le domaine de la sécurité industrielle</p>
								<div class="slider-btn animated fadeInUp">
									<a href="{{url('presentations')}}" class="btn theme-btn-default btn-icon"><span>Voir Plus</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


            @if ($evenements->count() >0)

                @foreach ($evenements as $evenement)

                <div class="carousel-item" style="background-image: url('{{asset($evenement->Image)}}')">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="animated fadeInDown"><span class="theme-text-default">{{$evenement->titre}} </span></h1>
                                    <p class="animated fadeIn">

                                        @if(strlen($evenement->description) >= 150)
                                        {!!$chaine = substr($evenement->description, 0, 150)!!} ...
                                        @else
                                        {!!$evenement->description!!}
                                        @endif

                                    </p>
                                    <div class="slider-btn animated fadeInUp">
                                        <a href="{{route('evenements.show',$evenement->id)}}" class="btn theme-btn-default btn-icon"><span>Voir Plus</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            @endif
		</div>

		<div class="slider-after"></div>

		<!-- Previous Btn -->
		<a class="carousel-control-prev" href="#slider-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<!-- Next Btn -->
		<a class="carousel-control-next" href="#slider-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

    	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container">
			<div class="row d-flex align-items-center">
                @if ($presentation[0]->count() > 0)
				<div class="col-lg-5">
					<div class="whoweare-item">
						<div class="whoweare-left">
                            
							<h5 class="head-after">Bienvenue dans <span class="theme-text-default">{{$presentation[0]->Nom}}</span></h5>
							<h1>{{$presentation[0]->Slogan}}.</h1>
							<p style="text-align: justify;">
                                @if(strlen($presentation[0]->Notion) >= 250)
                                {{$chaine = substr($presentation[0]->Notion, 0, 250)}} ...
                                @else
                                {{$presentation[0]->Notion}}
                                @endif
                            </p>
							<a href="{{url('presentations')}}" class="btn theme-btn-default btn-icon"><span>Voir plus</span></a>
						</div>
					</div>
				</div>
                
                

				<div class="col-lg-4">
					<div class="whoweare-item pb-60px">
						<div class="whoweare-center">
							<div class="whoweare-center-img1">
								<img src="{{asset($presentation[0]->Image)}}" alt="">

							</div>

						    <div class="whoweare-center-img2">
								<img src="{{asset($presentation[0]->Image)}}" alt="">
							</div>
						</div>
					</div>
				</div>
                @endif
				<div class="col-lg-3">
					<div class="whoweare-item">
						<div class="whoweare-right">
                            @if ($AllPoles->count() > 0)
                            <a href="{{route('polesActivites.show', $AllPoles[0]->id)}} " style="text-decoration:none;">
                                <div class="card">
                                    <h6><i class="flaticon-checked theme-text-default"></i> Nos <b>Poles</b></h6>
                                </div>
                            </a>
                            @endif

                            @if ($AllSecteurs->count() > 0)
                            <a href="{{route('secteurs.show', $AllSecteurs[0]->id)}} " style="text-decoration:none;">
                                <div class="card">
                                    <h6><i class="flaticon-checked theme-text-default"></i> Nos <b>Secteurs</b></h6>
                                </div>
                            </a>
                            @endif

                            <a href="{{url('fondateurs')}} " style="text-decoration:none;">
                                <div class="card">
                                    <h6><i class="flaticon-checked theme-text-default"></i> Nos <b>Fondateurs</b></h6>
                                </div>
                            </a>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END WHO WE ARE -->



	<!-- START COUNTER -->
	<div id="counter" class="theme-bg-default">
		<div class="container">
			<div class="row d-flex align-items-center">

				<div class="col-lg-4">
					<div class="counter-item theme-d-flex align-items-center">
						<div class="counter-icon mdi-rotating-bg rotating-bg-light">
							<i class="flaticon-like-2 mdi-bg mdi-bg-md"></i>
						</div>
						<div class="counter-content">
							<h2><i class="mdi mdi-plus"></i> <span class="counter-up">{{$articles->count()}}</span></h2>
							<h5>Articles</h5>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="counter-item theme-d-flex align-items-center">
						<div class="counter-icon mdi-rotating-bg rotating-bg-light">
							<i class="flaticon-team mdi-bg mdi-bg-md"></i>
						</div>
						<div class="counter-content">
							<h2><i class="mdi mdi-plus"></i> <span class="counter-up">15</span></h2>
							<h5>Team Members</h5>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="counter-item theme-d-flex align-items-center">
						<div class="counter-icon mdi-rotating-bg rotating-bg-light">
							<i class="flaticon-trophy mdi-bg mdi-bg-md"></i>
						</div>
						<div class="counter-content">
							<h2><i class="mdi mdi-plus"></i> <span class="counter-up">{{$evenements->count()}}</span></h2>
							<h5>Evenements</h5>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END COUNTER -->

	<!-- START SERVICES -->
	<div id="services">
		<div class="container">
			<div class="row d-flex align-items-center">

				<div class="col-lg-12">
					<div class="mb-30px">
						<div class="section-heading theme-text-center">
							<h1 class="head-back-light">Poles d'activités</h1>
							<h2 class="head-after">Nos Poles</h2>
						</div>
					</div>
				</div>
                @if ($AllPoles->count() > 0)
                    @foreach ($AllPoles as $pole)
                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="card">
                                    <div class="service-count-text">
                                        <span>{{$pole->NomPole}}</span>
                                    </div>

                                    <h4> {{$pole->NomPole}}</h4>
                                    <p>{{$pole->Introduction}}</p>
                                    <a href="{{route('polesActivites.show', $pole->id)}}" class="btn btn-icon"><span>Voir plus</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
				@endif



			</div>
		</div>
	</div>
	<!-- END SERVICES -->

	<!-- START PORTFOLIO -->
	<div id="portfolio" class="theme-bg-default-light">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class="mb-30px">
						<div class="section-heading theme-text-center">
							<h1 class="head-back-light">Secteurs d'activités</h1>
							<h2 class="head-after">Nos Secteurs</h2>
						</div>
					</div>
				</div>


			</div>

			<div class="row theme-shuffle">
                @if($AllSecteurs->count() > 0)
                    @foreach($AllSecteurs as $secteur)
                        @if ($secteur == $AllSecteurs[0])
                        <figure class="shuffle-image-item col-4" data-groups="[&quot;uiux&quot;]">
                            <div class="shuffle-inner-warp filter-lg">
                                <div class="shuffle-inner-img">
                                    <img src="{{asset($secteur->Image)}}" alt="">
                                    <div class="shuffle-inner-content">
                                        <h3>{{$secteur->NomSecteur}}</h3>
                                        <a class="" href="{{route('secteurs.show', $secteur->id)}}">
                                            <i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="uiux1" class="mfp-hide">
                                <a href="{{asset($secteur->Image)}}"></a>
                                <a href="{{asset($secteur->Image)}}"></a>
                            </div>
                        </figure>
                        @else
                        <figure class="shuffle-image-item col-4" data-groups="[&quot;webdesign&quot;]">
                            <div class="shuffle-inner-warp">
                                <div class="shuffle-inner-img">
                                    <img src="{{asset($secteur->Image)}}" alt="">
                                    <div class="shuffle-inner-content">
                                        <h3>{{$secteur->NomSecteur}}</h3>
                                        <a class="" href="{{route('secteurs.show', $secteur->id)}}">
                                            <i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        @endif
                    @endforeach
                @endif
				<div class="col-1 theme-shuffle-result"></div>
			</div>

		</div>
	</div>
	<!-- END PORTFOLIO -->

	<!-- START TEAM -->
	<div id="team">
		<div class="container">
			<div class="row d-flex align-items-center">

				<div class="col-lg-12">
					<div class="mb-30px">
						<div class="section-heading theme-text-center">
							<h1 class="head-back-light">Fondateurs</h1>
							<h2 class="head-after">Nos Fondateurs</h2>
						</div>
					</div>
				</div>
                @foreach ($fondateurs as $fondateur)
                <div class="col-lg-4">
					<div class="team-item">
						<div class="team-img">
							<img style="height:400px" src="{{asset($fondateur->Image)}}" alt="">
						</div>
						<div class="team-content">
							<div class="team-header">
								<h3>{{$fondateur->Nom}}  {{$fondateur->Prenom}}</h3>
								<p>{{$fondateur->Specialite}}</p>

							</div>
							<div class="team-footer">
								<ul class="smedia-icons animated fadeInUp">
									<li><button type="button" data-toggle="modal" data-target="#example{{$fondateur}}ModalCenter"><i class="mdi mdi-details mdi-bg mdi-bg-sm theme-btn-default"></i></button></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="example{{$fondateur}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$fondateur}}ModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="example{{$fondateur}}ModalLongTitle">Profile de fondateur</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- START PORTFOLIO -->
						    <div class="container emp-profile">

								<div class="row">
									<div class="col-md-4">
										<div class="profile-img">
											<img id="image" class="rounded mx-auto d-block" src="{{asset($fondateur->Image)}} " alt=""/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="profile-head">
													<h5>
														{{$fondateur->Nom}} {{$fondateur->Prenom}}
													</h5>
													<h6>
														{{$fondateur->Specialite}}
													</h6>
													<p class="proile-rating">RANKINGS : <span>8/10</span></p>
											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
												</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="profile-work">
											<p style="color:black; margin-top:-0.5px">Details</p>
											<p>{{$fondateur->Details}}</p>
										</div>
									</div>
									<div class="col-md-8">
										<div class="tab-content profile-tab" id="myTabContent">
											<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												<div class="row">
													<div class="col-md-6">
														<label>Nom</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Nom}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Prenom</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Prenom}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Email</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Email}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>N° Téléphone</label>
													</div>
													<div class="col-md-6">
														<p>0{{$fondateur->Telephone}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Spécialté</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Specialite}}</p>
													</div>
												</div>
									        </div>

										</div>
									</div>
								</div>
						    </div>
							<!-- END PORTFOLIO -->
					</div>
					</div>

				</div>
				</div>
                @endforeach


			</div>
		</div>
	</div>
	<!-- END TEAM -->

	<!-- START GET A QUOTE -->
	<div id="get-quote" class="get-quote-bg">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class="mb-30px">
						<div class="section-heading theme-text-center">
							<h1 class="head-back-light">Contactez-Nous</h1>
							<h2 class="head-after head-after-white">Contactez-Nous</h2>
						</div>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="get-quote-item">
                        @if (session('messageAjt'))

                            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                Votre <strong>message</strong> a été envoyer. Nous allons vous
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        @endif
						<form id="get_quote_form" class="col-form" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
									 <div class="form-group">
                                        <label for="exampleFormControlFile1">Choisir une image</label>
                                        <input type="file" class="form-control" name="image">
                                        <span style="color: red">@error('image')        {{$message}}    @enderror</span><br>
                                    </div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="nom" placeholder="Nom (*)" value="{{old('nom')}}">
                                        <span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="prenom" placeholder="Prenom (*)" value="{{old('prenom')}}">
                                        <span style="color: red">@error('prenom')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="telephone" placeholder="N° Téléphone (*)" value="{{old('telephone')}}">
                                        <span style="color: red">@error('telephone')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control"  name="email" placeholder="Email (*)" value="{{old('email')}}">
                                        <span style="color: red">@error('email')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control"  name="sujet" placeholder="Sujet" value="{{old('sujet')}}">
                                        <span style="color: red">@error('sujet')        {{$message}}    @enderror</span><br>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<textarea class="form-control" name="message" rows="4" placeholder="Message (*)">{{old('message')}}</textarea>
                                        <span style="color: red">@error('message')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								<div class="col-lg-12">
									<button type="submit" class="btn theme-btn-default btn-icon">
										<span>Envoyer</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END GET A QUOTE -->

	<!-- START BLOG -->
	<div id="blog" class="theme-bg-default-light">
		<div class="container">
			<div class="row row d-flex align-items-center">

				<div class="col-lg-12">
					<div class="mb-30px">
						<div class="section-heading theme-text-center">
							<h1 class="head-back-light">Nos Articles</h1>
							<h2 class="head-after">Articles</h2>
						</div>
					</div>
				</div>

                @foreach($articles as $article)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="card">
                                <div class="blog-img">
                                    <img src="{{asset($article->Image)}}" alt="">
                                    <div class="blog-icon">
                                        <a class="mfpclick" href="#blog1">
                                            <i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
                                        </a>
                                    </div>

                                    <div id="blog1" class="mfp-hide">
                                        <a href="{{asset($article->Image)}}"></a>
                                        <a href="{{asset($article->Image)}}"></a>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <ul class="blog-list">
                                        <li>Admin</li>
                                        <li>{{$article->created_at->format('d-M-Y')}}</li>
                                    </ul>
                                    <div class="blog-title">
                                        <p>{{$article->Titre}}</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="{{ route('articles.show',$article['id']) }}" class="btn-icon"><span>Voir plus</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
				@endforeach

			</div>
		</div>
	</div>
	<!-- END BLOG -->

	<!-- START PEOPLE SAYS -->
	<div id="people-says">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class="section-heading theme-text-center">
						<h1 class="head-back-light">Commentaires</h1>
						<h2 class="head-after">Vos commentaires</h2>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="row people-says-carousel">
                        @if ($comments->count() > 2)
                            @foreach($comments as $comment)
                            <div class="people-says-item">
                                <div class="people-says-content">
                                    <div class="card">
                                        <p>{{$comment->commentaire}} </p>
                                    </div>
                                </div>
                                <div class="people-says-bottom">
                                    <div class="people-says-bottom-icon">
                                        <img src="assets/images/icons/icon-1.png" alt="">
                                    </div>
                                    <div class="people-says-bottom-title">
                                        <h5>{{$comment->nom}}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END PEOPLE SAYS -->

    <!-- START FAQ -->
	<div id="faq">
		<div class="container">
			<div class="row d-flex align-items-center">

				<div class="col-lg-12">
					<div class="mb-30px">
						<div class="section-heading theme-text-center">
							<h1 class="head-back-light">Commentaires</h1>
							<h2 class="head-after">Ajouter un commenaire</h2>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="faq-item">
						<div class="faq-img">
							<img style="height:420px" src="{{asset('images/commnetImage.png')}}" alt="">
						</div>
					</div>
				</div>

				<div class="col-lg-8">
					<div id="accordion" class="faq-accordion">

						<div class="collapse-head">
							<div class="collapse-btn">
								<button class="collapsed" data-toggle="collapse" data-target="#content-one" aria-expanded="true"><i class="mdi mdi-plus mdi-24px"></i>Ecriver votre propre commentaire sur nous?</button>
							</div>
							<div id="content-one" class="collapse show" data-parent="#accordion">
								<div>
									<p>Vous pouvez ajouter un commentaire qui représente vos avis sur notre société. veuillez remplir les champs suivants:</p>
								</div>
							</div>
						</div>
                        <form id="get_quote_form" class="col-form" action="{{ route('comments.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
                            <div class="row">

								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="nom" placeholder="Nom Complet (*)" value="{{old('nom')}}">
                                        <span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-12">
									<div class="form-group">
										<textarea class="form-control" name="commentaire" rows="4" placeholder="Commentaire (*)">{{old('commentaire')}}</textarea>
                                        <span style="color: red">@error('commentaire')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								<div class="col-lg-12">
									<button type="submit" class="btn theme-btn-default btn-icon">
										<span>Donner votre avis</span>
									</button>
								</div>

                            </div>
                        </form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END FAQ -->

	@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection

<style>
label{
    color: black;
}
#image{

    border: 3px solid rgb(49, 112, 228);
    padding: 0;

}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>