@extends('FrontEnd.master')

@section('catchPhrase')
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"-->
<h1 class="white typed" style="color:black;">Be Modern To Be Happy.</h1>
@endsection


@section('dynamique')

<style type="text/css">
	.container{
		margin: 40px 40px 40px 40px;
	}
	.column{
		margin: 3px 3px 3px 3px;
		width: 570px;
		height: 500px;

	}
   .card{
       text-align: justify-all;
   }
</style>

<section>

<div class="container">
	

    <div class="row">
	@foreach($galeries as $g)
	
  <div class="col-sm-6 column"  style=" background-color:  rgba(255, 255, 255, .4); background-image: url('../storage/public/img/Galerie/{{$g->main_image}}'); background-size: 100%; background-repeat: no-repeat; ">
    <div class="card" style="background-color:  rgba(255, 255, 255, .4); ">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center;padding-top: 5px; color: #9c1210;">{{$g->titre}}</h3>
        <p class="card-text" style="text-align: justify-all;color: black; font-size: 30px;">{{$g->description}}</p>
        <a href="{{url('/show/categorie/'.$g->id)}}" class="btn btn-primary" style="background-color:#345da7;text-align: center;">Voir</a>
      </div>
    </div>
  </div>
 

	@endforeach
	</div>
  

</div>

</section>




@endsection