@extends('index')


@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- START BLOG -->
	<!-- START BREADCRUMB -->
    <div id="breadcrumb" class="breadcrumb-bg">
        <div class="container">
            <h2 class="head-after">{{$developpement->nom}}</h2>
            <nav>
                <ul>
                    <li class="breadcrumb-item"><a href="index.html"><i class="mdi mdi-home"></i> Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{route('services.index')}}"> Services</a></li>

                    <li class="breadcrumb-item"><a href="{{url('services/'.$developpement->service->id.'/produits')}}">{{$developpement->service->nom}}</a></li>

                    <li class="breadcrumb-item active">{{$developpement->nom}}</li>
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


										</div>
									</div>

									<div class="col-lg-8" >
										<div class="portfolio-item-single-item">
											<div class="portfolio-item-single portfolio-item-single-position-relative">
												
                                                    
                                                    <div class="container">
                                                        <div class="row">
                                                        <div id="myCarousel" class="carousel slide">
                                                        <div class="carousel-inner">

                                                            @if ($videos->count() > 0)
                                                            @foreach ($videos as $video)

                                                            @if ($video->id == $videos[0]->id)
                                                            <div class="item active">
                                                                <video  width="700" height="400" controls>
                                                                    <source src="{{asset($video->video)}}" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                                </video>
                                                            </div>

                                                            @else
                                                            <div class="item">
                                                                <video  width="700" height="400" controls>
                                                                    <source src="{{asset($video->video)}}" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                                </video>
                                                            </div>

                                                            @endif
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                        <div class="portfolio-item-card" style="height: 120px">
                                                            <ul style="margin-top:65px; " class="carousel-indicators">
                                                            @if ($videos->count() > 1)
                                                            @php $i = 0 @endphp
                                                            @foreach ($videos as $video)

                                                            @if ($video->id == $videos[0]->id)
                                                                <li style="width: 150px; height: 80px;" data-target="#myCarousel" data-slide-to="0" class="active"><img src="{{asset($video->image)}} "></li>
                                                            @else
                                                                <li style="width: 150px; height: 80px;" data-target="#myCarousel" data-slide-to="{{$i}}" ><img src="{{asset($video->image)}} "></li>
                                                            @endif
                                                            @php $i = $i+1 @endphp
                                                            @endforeach
                                                            @endif
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                
											</div>
											<div class="portfolio-item-single">
												{!!$developpement->details!!}
											</div>

                                            @if($developpement->file != null)
                                            <div class="portfolio-item-single">
                                                <a href="{{asset($developpement->file)}}"> <button class="btn1"><i class="fa fa-download"></i> Télécharger la version d'essai</button></a>
											</div>
                                            @endif

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
<style>
/* Style buttons */
.btn1 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn1:hover {
  background-color: RoyalBlue;
}
body {
padding-top: 20px;
}
.carousel{
position: relative;
}
.carousel-indicators{
position: absolute;
top:385px;
left:300px;
height:105px;
width: 100%;
}
.carousel-indicators li{
text-indent:0;
display:inherit;
float:left;
width: 10%;
height: 100px;
margin:5px 0px;
}
.carousel-indicators li img{
width: 95%;
height: 100px;
border:2px solid #CCCCCC;
padding: 2px;
}
.carousel-indicators .active img{
border:2px solid #04BEF5;
}
.carousel-indicators .active{
margin:5px 0px;
width: 10%;
height: 100px;
}
.carousel-control.right,
.carousel-control.left{
background-image: none;
}
@media screen and (min-width:320px) and (max-width:360px) {
.carousel-indicators{
top:115px;
left:95px;
}
.carousel-indicators li img{
width:95%;
height:50px;
}
.carousel-indicators li{
width:20%;
height:50px;
}
.carousel-indicators .active{
width:20%;
height:50px;
}
}
@media screen and (min-width:768px) and (max-width:980px){
.carousel-indicators{
top:240px;
left:213px;
}
}
</style>
@endsection
@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    
    

</script>
@endsection

