@extends('FrontEnd.master')


@section('catchPhrase')
            <h1 class="white typed">Nos services</h1>
@endsection

@section('dynamique')


    @php 
      $galerie = App\Models\Galerie::all()->where('id_service',$service);
    @endphp
<div class="container">
<div class="row">
   <section id="services" class="section section-padded">
    <div class="container">
    @foreach($galerie as $g)
      <div class="row services">
       <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Détails</h5>
                 <img class="d-block img-fluid" src="{{asset('img/'.$g->main_image)}}" alt="{{ $g->catégorie }}">
       
          </div>
        </div>
      </div>
    </div>
    @endforeach

    </div>
  </section>
</div>
</div> 


@endsection