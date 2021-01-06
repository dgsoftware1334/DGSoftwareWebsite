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
              <a class="btn btn-primary btn-round btn-lg text-white pull-right" href="{{url('cours/'.$cours->id.'/edit')}}" title="Ajouter Cours">Modifier</a>
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
                    <video width="700" height="400" controls poster="{{ asset('storage/'.$cours->video) }}" preload="{{ asset('storage/'.$cours->thumbnail)}}"  oncontextmenu="return false;" controlsList="nodownload">
                       <source src="{{ url('getVideo/'.$cours->id) }}" type="video/mp4" >
                       <source src="{{ url('getVideo/'.$cours->id) }}" type="video/ogg" >
                       <source src="{{ url('getVideo/'.$cours->id) }}" type="video/webm" >
                    </video>
      			      </div>
                  <div class="col-md-4 text-right">

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
                      <li class="list-group-item"><h6 class="text-primary">Évaluation :</h6>{{$average}} <i class="fas fa-star"></i> alt="stars" style="color: yellow; font-color:yellow;"> <br> ({{$count}}) votes <br> {{$pourc}}%</li>
                </ul>
              </div>
              <!--element3-->
              <div class="col-md-12">
                 <li class="list-group-item"><h6 class="text-primary">Description</h6> :</h6> {{$cours->Description}}</li>
              </div>
            <!--row2-->
             <div class="row" style="text-align: right;"> 
              
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