@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu', 'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Developpements</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Developpements</li>
                        </ol>

                        <div class="row">
                            <div class="col">
                                <h3 class="one"></h3>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('developpements/'.$service->id.'/create')}}" type="button" class="btn btn-success pull-left mb-3"><i class="fa fa-plus mr-3" aria-hidden="true"></i>Nouveau</a>
                            </div>
                            @if (session('titreAjt'))

                            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                Votre nouveau <strong>développement</strong> a été bien créer
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                            @if (session('titreMdf'))

                            <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                Votre <strong>développement</strong> a été modifier
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                            @if (session('titreSupp'))

                            <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                                Votre <strong>développement</strong> a été supprimer
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Liste de développements
                            </div>


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Détails</th>
                                            <th>Service</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Détails</th>
                                            <th>Service</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($developpements as $developpement)

                                        <tr>
                                            <td>{{$developpement['nom']}} </td>
                                            <td>{!!$developpement['details']!!} </td>
                                            <td>{{$developpement->service->nom}} </td>
                                            <td>

                                                <div class="d-flex justify-content-center">
                                                    <button type="button" class="btn btn-success  btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$developpement}}ModalVideo"><i class="fa fa-caret-down"></i></button>

                                                    <a href="{{ route('developpements.show',$developpement->id) }}" class="btn btn-primary  btn-circle btn-circle-sm m-1 "><i class="fa fa-info"></i></a>
                                                    <a href="{{ route('developpements.edit',$developpement['id']) }}" class="btn btn-warning  btn-circle btn-circle-sm m-1 "><i class="fa fa-edit"></i></a>

                                                    <button type="button" class="btn btn-danger  btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$developpement['id']}}ModalCenter">
                                                    <i class="fa fa-trash"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="example{{$developpement['id']}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$developpement['id']}}ModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="example{{$developpement['id']}}ModalLongTitle">Suppression de développement</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez-vous vraiment effectuer la suppression ?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <form class="form-inline" action="{{ route('developpements.destroy',$developpement['id'])}}"  method="POST">
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
                                                <!-- Modal Videos -->
                                                <div class="modal fade" id="example{{$developpement}}ModalVideo" tabindex="-1" role="dialog" aria-labelledby="example{{$developpement}}ModalVideoTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="example{{$developpement}}ModalLongTitle">Liste de videos de {{$developpement->nom}} </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <!-- START PORTFOLIO -->
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Lien Image</th>
                                                                        <th>Lien video</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="table">
                                                                    @foreach ($developpement->videos as $video)
                                                                        <tr>
                                                                            <td>{{$video->image}}</td>
                                                                            <td>{{$video->video}}</td>
                                                                            <td>
                                                                                <form class="form-inline" action="{{ route('videos.destroy',$video['id'])}}"  method="POST">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-danger  btn-circle" data-toggle="modal" data-target="#example{{$video['id']}}ModalSupp">
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                </form>
                                                                            </td>
                                                                            </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            <!-- END PORTFOLIO -->
                                                        </div>
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

@endsection

