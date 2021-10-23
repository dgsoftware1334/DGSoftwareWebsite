@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu', 'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Commandes</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Commandes</li>
                        </ol>

                        <div class="row">
                            <div class="col">
                                <h3 class="one"></h3>
                            </div>
                            @if($services->count()>0)
                                <div class="col-auto">
                                    <a href="{{route('commandes.create')}}" type="button" class="btn btn-success pull-left mb-3"><i class="fa fa-plus mr-3" aria-hidden="true"></i>Nouveau</a>
                                </div>
                            @endif
                            @if (session('commandeAjt'))
                            
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
                                Liste des commandes
                            </div>


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>N° Commande</th>
                                            <th>Etat</th>
                                            <th>Service</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>N° commande</th>
                                            <th>Etat</th>
                                            <th>Service</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($commandes as $commande)
                                        <tr>
                                            <td>{{$commande['id']}} </td>
                                            <td>{{$commande['etat']}} </td>
                                            <td>{{$commande->infographieService->nom}}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    
                                                    <a href="" class="btn btn-primary  btn-circle btn-circle-sm m-1 "><i class="fa fa-info"></i></a>
                                                    

                                                    <button type="button" class="btn btn-danger  btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$commande['id']}}ModalCenter">
                                                    <i class="fa fa-trash"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="example{{$commande['id']}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$commande['id']}}ModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="example{{$commande['id']}}ModalLongTitle">Suppression de commande</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez-vous vraiment effectuer la suppression ?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <form class="form-inline" action="{{ route('commandes.destroy',$commande['id'])}}"  method="POST">
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