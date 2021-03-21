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
  
  <section class="section gray-bg">
    <div class="container container-fluid"> 
      <div class="row">
         
        @foreach($galerie as $g) 
     
        <div class="col-md-4">
            <div class="title"><h3>Modéle N°{{$g->id}}</h3></div>

              <button data-toggle="modal" data-target="#image{{$g->id}}" class="btn btn-info">
                  <img src="{{asset('img'.$g->main_image)}}" alt="{{ $g->catégorie }}"  class="img-responsive" style="width:100%; height: 250px;">
              </button>
              <!--Modal-->
              <div class="modal fade" id="image{{$g->id}}" data-backdrop="false" style="width:100%;" >
                <div class="modal-dialog modal-lg" style="padding-top: 130px; z-index: 1100;">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Modéle N°{{$g->id}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                      </div>

                      <div class="modal-body">
                        <div class="row"> 
                          <div class="col-md-auto" align="center">
                            <img src="{{asset('img/'.$g->main_image)}}" class="img-fluid image-control img-responsive">
                            
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button"  data-dismiss="modal">Fermer</button>
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
