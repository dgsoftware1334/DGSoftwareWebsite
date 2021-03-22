@extends('FrontEnd.master')
  
@section('catchPhrase')
            <h1 class="white typed" style="color:black;">{{$service->titre}}</h1>
@endsection

@section('dynamique')

<section>
  <div class="cut cut-top"></div> 
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('/service')}}"> Services</a></li>
      <li class="breadcrumb-item"><a href="{{url('/service/'.$service->id)}}"> {{$service->titre}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">Demo {{$cat}}</li>
    </ol>
  </nav>

 <section class="section gray-bg">
    <div class="container container-fluid"> 
      <div class="row">
           
        @foreach($photos as $g) 
     
        <div class="col-md-4">
              <button data-toggle="modal" data-target="#image{{$g->id}}" class="btn btn-info">
                  <img src="{{asset('img'.$g->main_image)}}" alt="{{ $g->catégorie }}"  class="img-responsive img-fluid">
              </button>
        </div>

              <!--Modal-->
              <div class="modal fade" id="image{{$g->id}}" data-backdrop="false" style="width:100%;" >
                <div class="modal-dialog modal-lg" style="padding-top: 130px; z-index: 1100;">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">{{$g->titre}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                      </div>

                      <div class="modal-body">
                        <div class="row"> 
                          <div class="col-md-auto" align="center">
                            <img src="{{asset('img'.$g->main_image)}}" class="img-fluid image-control img-responsive">
                            
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-blue" data-dismiss="modal">Fermer</button>
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