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
						@if( $secteurs->count() > 0)
						<ul>
						@foreach ($secteurs as $TmpSecteur)
							<div class="costumizeCard">
								<h6><i  ></i> Secteur de <b>{{$TmpSecteur->NomSecteur}}</b></h6>
							</div>
						@endforeach
							
						</ul>
						@else
						<p>Aucun Secteur pour le moment</p>
						@endif
						 
							 
						</div>
						

					</div>
				</div>

				 
					
				<div class="col-lg-8 ">
					<div class="whoweare-item pb-60px">
						<div class="whoweare-center ">
							<h5 class="head-after">Evenements<span class="theme-text-default">Pixoraz</span></h5>
							<h1><span>Preparing</span> Own Styles and Ideas.</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a href="about-us.html" class="btn theme-btn-default btn-icon"><span>Read More</span></a>
						</div>

						<div class="whoweare-center ">
							<h5 class="head-after">Evenements<span class="theme-text-default">Pixoraz</span></h5>
							<h1><span>Preparing</span> Own Styles and Ideas.</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a href="about-us.html" class="btn theme-btn-default btn-icon"><span>Read More</span></a>
						</div>
						<div class="whoweare-center ">
							<h5 class="head-after">Evenements<span class="theme-text-default">Pixoraz</span></h5>
							<h1><span>Preparing</span> Own Styles and Ideas.</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a href="about-us.html" class="btn theme-btn-default btn-icon"><span>Read More</span></a>
						</div>
						<div class="whoweare-center ">
							<h5 class="head-after">Evenements<span class="theme-text-default">Pixoraz</span></h5>
							<h1><span>Preparing</span> Own Styles and Ideas.</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a href="about-us.html" class="btn theme-btn-default btn-icon"><span>Read More</span></a>
						</div>
					</div>
				 </div>


			</div>
		</div>
	</div>
	<!-- END WHO WE ARE -->

@stop
