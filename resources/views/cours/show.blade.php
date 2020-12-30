@extends('layouts.app', [
    'namePage' => 'Détails du Cours',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])
@section('content')
  <div class="panel-header panel-header-sm">
  </div>

<div class="container">
  <div class="row">
    <div class="card ">
      
      <div class="row">
         <div class="col-md-11">
          <div class="card-header">
              <a class="btn btn-primary btn-round btn-lg text-white pull-right" href="{{url('cours/create')}}" title="Ajouter Cours">Ajouter</a>
            <h4 class="card-title"> {{$cours->id}}- {{$cours->Cours}}</h4>
            <div class="col-11 mt-2">
               @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session()->get('success')}} </strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
               @elseif(session()->has('error'))
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>{{session()->get('error')}} </strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
                </div>
               @endif
            </div>
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-11">
          <!--card body-->
          <div class="card-body">
            <!--row1-->
            <div class="row"> 
              <!--element1-->
              <div class="col-md-8">
  	          <div class="embed-responsive embed-responsive-16by9">
                <video width="700" height="400" controls poster="{{ asset('storage/'.$cours->video) }}" preload="{{ asset('storage/'.$cours->thumbnail)}}">
                   <source src="{{ url('getVideo/'.$cours->id) }}" type="video/mp4" >
                   <source src="{{ url('getVideo/'.$cours->id) }}" type="video/ogg" >
                   <source src="{{ url('getVideo/'.$cours->id) }}" type="video/webm" >
                </video>Votre navigateur ne prend pas en charge cette vidéo.
  			      </div>
              </div>
              <!--element2-->
              <div class="col-md-4">
                <ul class="list-group">
                      <li class="list-group-item"><h6 class="text-primary">Durée :</h6>   {{$cours->Durée}}</li>
                      <li class="list-group-item"><h6 class="text-primary">Pack:</h6>   {{$cours->offre}}</li>
                      <li class="list-group-item"><h6 class="text-primary">Catégorie :</h6> {{$cours->catégories}}</li>
                      <li class="list-group-item"><h6 class="text-primary">Date de création :</h6> {{$cours->created_at}}</li>
                      <li class="list-group-item"><h6 class="text-primary">Dérniere modification :</h6> {{$cours->updated_at}}</li>
                </ul>
              </div>
              <!--element3-->
              <div class="col-md-12">
                 <li class="list-group-item"><h6 class="text-primary">Description</h6> :</h6> {{$cours->Description}}</li>
              </div>
            <!--row2-->
             <div class="row" style="text-align: right;"> 
              <div class="col-md-4 text-right">
                <span class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" data-size="xs"></span>
              </div>
            </div>
          </div>
          <!--end card body-->
      </div>

 	  </div>
    <!--end card-->
    </div>  
  </div>
    <!--end row-->
</div>
  <!--end container-->

<script type="text/javascript">
    $("#input-id").rating();
</script>

          
@endsection