@extends('FrontEnd.master')

  @php 
      $galerie = App\Models\Galerie::all()->where('id_service',$service);
      $s = App\Models\Service::find($service);
    @endphp

@section('catchPhrase')
            <h1 class="white typed" style="color:black;">{{ $s->titre}}</h1>
@endsection

@section('dynamique')

<section>
  <div class="cut cut-top"></div> 
  
  <section id="team" class="section gray-bg">
    <div class="container"> 
      <div class="row">
        @foreach($galerie as $g) 
     
        <div class="col-6 col-md-4">
          <div class="card bg-secondary mb-3">
            <div class="card-header"><h3>Modéle N°{{$g->id}}</h3></div>
              <a data-toggle="modal" data-target="#image{{$g->id}}">
                <div class="card-body">
                  <img src="{{asset('img/'.$g->main_image)}}" alt="{{ $g->catégorie }}"  class="img-responsive img-thumbnail" style="width:100%; height:auto;">
                </div>
              </a>
          <div class="modal fade" id="image{{$g->id}}" data-backdrop="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
            <div class="modal-dialog modal-xl" style="padding-top: 130px; z-index: 1100;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modéle N°{{$g->id}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <div class="row"> 
                      <div class="col-md-12" align="center">
                        <img src="{{asset('img/'.$g->main_image)}}" class="img-fluid image-control img-responsive">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @endforeach

      </div>     
    </div> 
  </section>
</section>

          
@endsection
