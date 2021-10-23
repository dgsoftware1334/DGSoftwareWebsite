@extends('index')



@section('contenu')


@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])
 

	 	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">

				 

				<div class="col-lg-3">

					<div>
						 <h5 class="myPagesStyleText"><span>Nos Secteurs d'Activité</span></h5>
					</div>

					<div  class="whoweare-item pb-60px">
						<div  >
						@if( $AllSecteurs->count() > 0)
						<ul>
						@foreach ($AllSecteurs as $secteur)
                        <a href="{{route('secteurs.show', $secteur->id)}}">
							<div class="costumizeCard">
								<h6><i></i> <b>{{$secteur->NomSecteur}}</b></h6>
							</div>
                        </a>
						@endforeach
							
						</ul>
						@else
						<p>Aucun secteur pour le moment</p>
						@endif
						 	 
						</div>
					</div>
				</div>

				 
					
				<div class="col-lg-8 ">
					<div class="whoweare-item pb-60px">

<!-- START PORTFOLIO -->
						<div id="portfolio">                    
                            <div class="portfolio-item-single-item">
                                @if ($SelectedSecteurs->Image)
                                <div class="portfolio-item-single portfolio-item-single-position-relative">
                                    <img src="{{asset($SelectedSecteurs->Image)}}" alt="">
                                    <div class="portfolio-item-single-icon">
                                        <a class="mfpclick" href="#blog1">
                                            <i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
                                        </a>
                                    </div>
                                    <div id="blog1" class="mfp-hide">
                                        <a href="{{asset($SelectedSecteurs->Image)}}"></a>
                                    </div>
                                </div>
                                @endif
                                
                                <div class="portfolio-item-single">
                                    <div class="portfolio-item-card">
                                        <h5>{{$SelectedSecteurs->NomSecteur}}</h5>
                                        </div>
                                </div>

                                <div class="portfolio-item-single">
                                    <blockquote class="mb-0 theme-bg-default">
                                        {{$SelectedSecteurs->Introduction}}
                                        
                                    </blockquote>
                                </div>

                                <div class="portfolio-item-single">
                                    {!! $SelectedSecteurs->Description !!}
                                </div>
                            </div>
						</div>
<!-- END PORTFOLIO -->
					 
					 
					</div>
				 </div>


			</div>
		</div>
	</div>
	<!-- END WHO WE ARE -->

@stop