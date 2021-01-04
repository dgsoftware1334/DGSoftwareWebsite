@extends('FrontEnd.master')

  @php 
      $galerie = App\Models\Galerie::all()->where('id_service',$service);
      $s = App\Models\Service::find($service);
    @endphp

@section('catchPhrase')
            <h1 class="white typed" style="color:black;">{{ $s->titre}}</h1>
@endsection

@section('dynamique')
<div class="container">
 
  <div class="container">
    <div class="row">
    @foreach($galerie as $g)
      <div class="col-md-4" style="height:300px; margin-bottom:20px;">
         <div class="row">
        <div class="card"> 
          <div class="card-body">
            <img src="{{asset('img/'.$g->main_image)}}" alt="{{ $g->catégorie }}" style="width:100%; height:auto;" >
          </div>
        </div>
        </div>
      </div>
    @endforeach
      </div>   
  </div>  
</div> 
@endsection