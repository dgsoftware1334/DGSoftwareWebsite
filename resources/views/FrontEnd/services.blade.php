@extends('FrontEnd.master')

@section('catchPhrase')
            <h1 class="white typed" style="color:black;">Nos services</h1>
@endsection
@section('dynamique')
    <div class="cut cut-top"></div>

@php 
 	$services = App\Models\Service::all();
 @endphp

<div class="container">
 @foreach($services as $service)
  		@php
     		$photos = App\Models\Galerie::all()->where('id_service','=',$service->id);
	  	@endphp

<div class="row">
   <section id="team" class="section gray-bg">
		<div class="container">
		  <div class="row title text-center">
				<h2 class="margin-top">{{$service->titre}}</h2>
				<h4 class="light muted">{{$service->description}}</h4>
		  </div>  
		  <div class="row">
			<div class="col-md-12" align="right">
				<a type="button" href="{{ url('/service/'.$service->id) }}" class="btn btn-primary boutton">Voir Plus  <span class="fa fa-plus"></span>
		      </a>
  			</div>
		  </div>
		  <div id="myCarousel{{$service->id}}" class="carousel slide" data-ride="carousel" style="height:auto; width: auto; padding: 0% 30% 0% 30%;">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		    	@foreach($photos as $photo)
			    	<li data-target="#myCarousel{{$service->id}}" data-slide-to="{{$photo->id}}"></li>
			   	@endforeach
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox" align="center">
		    	
			    @foreach( $photos as $photo )
			    	<div class="item {{ $loop->first ? 'active' : '' }}">
			    	   <img class="d-block img-fluid" src="{{asset('img/'.$photo->main_image)}}" alt="{{ $photo->catégorie }}">
			       </div>
			       
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
	</div>
	
@endforeach
</div>
@endsection
