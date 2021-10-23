@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu', 'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Infographie</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Infographie</li>
                        </ol>

                        <div class="row">
                            <div class="col">
                                <h3 class="one"></h3>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('infographieServices.create')}}" type="button" class="btn btn-success pull-left mb-3"><i class="fa fa-plus mr-3" aria-hidden="true"></i>Nouveau</a>
                            </div>
                            @if (session('titreAjt'))
                            
                            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                Votre nouveau <strong>service d'infographie</strong> a été bien créer 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                            @if (session('titreMdf'))
                            
                            <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                Votre <strong>service d'infographie</strong> a été modifier
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                            @if (session('titreSupp'))
                            
                            <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                                Votre <strong>service d'infographie</strong> a été supprimer 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Liste de services infrographie
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
                                    @foreach($infographieServices as $infographie)
                                        <tr>
                                            <td>{{$infographie['nom']}} </td>
                                            <td>{!!$infographie['details']!!} </td>
                                            <td>Infographie</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{url('dashboard/'.$infographie->id.'/infographieWork')}} " class="btn btn-success  btn-circle btn-circle-sm m-1 "><i class="fa fa-caret-down"></i></a>
                                                    <a href="{{url('infographie/'.$infographie->id.'/produits')}}" class="btn btn-primary  btn-circle btn-circle-sm m-1 "><i class="fa fa-info"></i></a>
                                                    <a href="{{route('infographieServices.edit', $infographie->id)}}" class="btn btn-warning  btn-circle btn-circle-sm m-1 "><i class="fa fa-edit"></i></a>

                                                    <button type="button" class="btn btn-danger  btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$infographie['id']}}ModalCenter">
                                                    <i class="fa fa-trash"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="example{{$infographie['id']}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$infographie['id']}}ModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="example{{$infographie['id']}}ModalLongTitle">Suppression de développement</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez-vous vraiment effectuer la suppression ?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <form class="form-inline" action="{{ route('infographieServices.destroy',$infographie['id'])}}"  method="POST">
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