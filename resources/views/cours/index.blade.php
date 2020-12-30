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
          <div class="row">
            <div class="col-md-12">
              <div class="card-header">
                  <a class="btn btn-primary btn-round btn-lg text-white pull-right" href="{{url('cours/create')}}" title="Ajouter Cours">Ajouter</a>
                <h4 class="card-title">Liste des cours</h4>
                <div class="col-12 mt-2">
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
          <div class="card-body ">
           <div class="row">
                @foreach($cours as $g)
                <div class="col-md-4" style="padding: 0px 15px 230px 15px;">
                        <div class="best-course-pic-text relative-position" style=" height: 230px;" >
                        <div class="best-course-pic relative-position" style=" height: inherit; width: inherit;">
                            <img src="{{ asset('storage/'.$g->thumbnail) }}" alt="" style="height : inherit; width: 100%;">
                            <div class="course-price text-center gradient-bg">
                              <span>{{ $g->titre }}</span>
                            </div>
                            <div class="course-details-btn">
                              <a href="{{ url('cours/'.$g->id.'/show')}}">Voir Cours <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="blakish-overlay"></div>
                          </div>
                          <div class="best-course-text">
                            <div class="course-title mb20 headline relative-position">
                              <h3>{{ $g->Cours }}</h3>
                            </div>
                            <div class="course-meta">
                              <span class="course-category">{{Str::limit($g->Description , 100,'...')}}</span>
                              <form  action="{{ url('cours/'.$g->id)}}" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer ce cours?')">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-round pull-right" data-original-title="Suprrimer Profil" title="Supprimer"><i class="fas fa-trash"></i></button>
                               </form>
                          
                            </div>

                          </div>
                        </div>
                  </div>
                @endforeach
            
            </div>  
          </div>


          </div>
        </div>
      </div>
    </div>

@endsection