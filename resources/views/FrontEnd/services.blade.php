@extends('FrontEnd.master')

@section('catchPhrase')
            <h1 class="white typed">Nos services</h1>
@endsection
@section('dynamique')
    <div class="cut cut-top"></div>

@php 
 
 	$services = App\Models\Service::all();
 	$photos = App\Models\Galerie::all();


@endphp
<div class="container">
   @foreach($services as $service)
  
   <section id="team" class="section gray-bg">
		<div class="container">
		  <div class="row title text-center">
				<h2 class="margin-top">{{$service->titre}}</h2>
				<h4 class="light muted">{{$service->description}}</h4>
			</div>  
		  <div id="myCarousel{{$service->id}}" class="carousel slide" data-ride="carousel" style="height:auto; width: auto; padding: 0% 30% 0% 30%;">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		    	@foreach($photos as $photo)
			    	@if ($photo->id_service == $service->id) <!--for each picture that belongs to this service-->
			      		<li data-target="#myCarousel{{$service->id}}" data-slide-to="{{$photo->id}}"></li>
			      	@endif
		      	@endforeach
		    </ol>

		    <!-- Wrapper for slides -->
			    	<div class="carousel-inner" align="center" style="height:auto; width:auto; ">
		    	@foreach($photos as $key =>  $photo)
			    	@if ($photo->id_service == $service->id)
       			      <div class="item  {{$key == 0 ? 'active' : '' }}">
				        <img src="img/{{$photo->main_image}}" id="{{$photo->id}}">
				      </div>
			      	@endif
			    @endforeach
		    		</div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel{{$service->id}}" data-slide="prev">
		      <span class="fa fa-chevron-left" style="padding-top: 150px;"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel{{$service->id}}" data-slide="next">
		      <span class="fa fa-chevron-right" style="padding-top: 150px;"></span>
		      <span class="sr-only">Next</span>
		    </a>    	
		  </div>
		</div>

	</section>
@endforeach
</div>
@endsection
