@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu', 'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    @if($info_works->count()> 0)
                        <h1 class="mt-4">{{$info_service->nom}}s</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">{{$info_service->nom}}s</li>
                        </ol>
                    @else
                    <h1 class="mt-4"> </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active"> </li>
                        </ol>
                    @endif
                        <div class="row">
                            <div class="col">
                                <h3 class="one"></h3>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('work/'.$info_service->id.'/create')}}" type="button" class="btn btn-success pull-left mb-3"><i class="fa fa-plus mr-3" aria-hidden="true"></i>Nouveau</a>
                            </div>
                            @if (session('titreAjt'))
                            
                            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                Votre nouveau <strong>{{$info_service->nom}}</strong> a été bien créer 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                            @if (session('titreMdf'))
                            
                            <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                Votre <strong>{{$info_service->nom}}</strong> a été modifier
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                            @if (session('titreSupp'))
                            
                            <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                                Votre <strong>{{$info_service->nom}}</strong> a été supprimer 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                @if($info_works->count()> 0)
                                Liste de {{$info_service->nom}}s
                                @endif
                            </div>


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Détails</th>
                                            <th>Service infographie</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Détails</th>
                                            <th>Service infographie</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($info_works as $work)
                                        <tr>
                                            <td>{{$work['nom']}} </td>
                                            <td>{!!$work['details']!!} </td>
                                            <td>{{$work->infographieService->nom}} </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <button type="button"  class="btn btn-primary btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$work}}ModalDetails"><i class="fa fa-info"></i></button>
                                                    <a href="{{route('infographieWorks.edit', $work->id)}} " class="btn btn-warning  btn-circle btn-circle-sm m-1 "><i class="fa fa-edit"></i></a>

                                                    <button type="button" class="btn btn-danger  btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$work['id']}}ModalCenter">
                                                    <i class="fa fa-trash"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="example{{$work['id']}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$work['id']}}ModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="example{{$work['id']}}ModalLongTitle">Suppression de développement</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez-vous vraiment effectuer la suppression ?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <form class="form-inline" action="{{ route('infographieWorks.destroy',$work['id'])}}"  method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                                            <button type="submit" class="btn btn-danger ml-4">Oui</button>
                                                        </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>


                                                <!-- Modal -->
                                                <div class="modal fade" id="example{{$work}}ModalDetails" tabindex="-1" role="dialog" aria-labelledby="example{{$work}}ModalDetailsTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="example{{$work}}ModalLongTitle">détails de {{$work->infographieService->nom}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- START PORTFOLIO -->

                                                        <div class="service-item-single">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <img src="{{asset($work->image)}}" style="width:350px; height:300px" alt="">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h4>{{$work->nom}} </h4>
                                                                    <p class="mb-30px">{!!$work->details!!}</p>
                                                                    <button class="btn btn-primary">Commander votre {{$work->infographieService->nom}} </button>
                                                                </div>
                                                            
                                                            
                                                        </div>

                                                        <!-- END PORTFOLIO -->
                                                    </div>
                                                    </div>
                                                
                                                </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
@endsection