@extends('layouts.master')
  
@section('catchPhrase')
            <h1 class="white typed" style="color:black;">{{ App\Models\Service::find($service)->titre}}</h1>
@endsection

@section('dynamique')

<section>
  <div class="cut cut-top"></div> 
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('/service')}}"> Services</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{App\Models\Service::find($service)->titre}}</li>
    </ol>
  </nav>
  <div class="row text-center title">
        <h2>Nos Logos</h2>
        <h4 class="light muted">
          Allez-y et dites-nous ce que vous avez en tête comme idées et nous y arriverons avec un logo unique et qui représente l'essence de votre entreprise.
        </h4>
  </div>
  <div class="row services">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6">
          <button  style="border-color:#5d76b6; font-weight: bold; color:#5d76b6;" class="btn btn-outline-primary">
            Prix : 7000 DA
          </button>
        </div>
        <div class="col-md-6 offset-md-1" align="right">
          <a href="{{url('/commandes/'.$service.'/create/0')}}"  style="background-color:#9c1210;" class="btn btn-secondary">
            Passer une commande <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      
    </div>
    <hr>
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
  </div>
</section>

          
@endsection
