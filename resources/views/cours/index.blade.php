@extends('layouts.app', [
    'namePage' => 'Cours',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])

@section('content')


  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
              <a class="btn btn-primary btn-round btn-lg text-white pull-right" href="{{url('cours/create')}}" title="Ajouter Cours">Ajouter</a>
            <h4 class="card-title">Liste des cours</h4>
            <div class="col-12 mt-2">
                  @include('alerts.success')
                  @include('alerts.errors')
            </div>
          </div>
          <div class="card-body ">
           
            <div class="container">
                <div class="row">
                @foreach($cours as $g)
                  <div class="col-md-4 col-sm-4" style="padding-top: 20px; padding-bottom: 20px; margin-top: 20px; margin-bottom: 20px;">
                    <a href="{{ url('cours/'.$g->id)}}" >
                      <div class="card text-white" style="height: 230px;">
                        <form  action="{{ url('storage/'.$g->thumbnail)}}" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer ce cours?')">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-icon btn-sm pull-right" data-original-title="Suprrimer Profil" title="Supprimer"><i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                        </form>
                      <img class="card-img" src="{{ asset('storage/'.$g->thumbnail) }}" alt="{{ $g->cours }}" style=" height: inherit;">
                      <div class="card-img-overlay">
                        <h4 class="card-title">{{ $g->Cours }}</h4>
                        <p class="card-text">{{Str::limit($g->Description , 200,'...')}}</p>
                        <p class="card-text">{{ $g->Durée }}</p>
                      </div>
                    </div>
                                      
                    </a>
                  </div>
                @endforeach
              </div>
            </div>  
          </div>


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection