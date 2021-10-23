@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu', 'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Secteur activités</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Secteur activités</li>
                        </ol>
                        @if (session('secteurAjt'))
                            
                        <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                            Votre nouveau <strong>secteur</strong> a été bien créer 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif

                        @if (session('secteurMdf'))
                            
                        <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                            Votre <strong>secteur</strong> a été modifier avec succes
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif
                        
                        @if (session('secteurSupp'))
                            
                        <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                            Votre <strong>secteur</strong> a été supprimer
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif
                        <div class="row">
                            <div class="col">
                                <h3 class="one"></h3>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('secteurs.create')}}" type="button" class="btn btn-success pull-left mb-3"><i class="fa fa-plus mr-3" aria-hidden="true"></i>Nouveau</a>
                            </div>
                            
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Liste des secteurs
                            </div>


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Introduction</th>
											<th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Introduction</th>
											<th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($AllSecteurs as $secteur)
                                        <tr>
                                            <td>{{$secteur['NomSecteur']}} </td>
                                            <td>{{$secteur['Introduction']}} </td>
											<td>{{$secteur['Description']}} </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('secteurs.show',$secteur['id']) }}" class="btn btn-primary  btn-circle btn-circle-sm m-1 "><i class="fa fa-info"></i></a>
                                                    <a href="{{ route('secteurs.edit',$secteur['id']) }}" class="btn btn-warning  btn-circle btn-circle-sm m-1 "><i class="fa fa-edit"></i></a>
                                                    
                                                    
                                                    
                                                    <button type="button" class="btn btn-danger  btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$secteur['id']}}ModalCenter">
                                                    <i class="fa fa-trash"></i>
                                                    </button>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="example{{$secteur['id']}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$secteur['id']}}ModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="example{{$secteur['id']}}ModalLongTitle">Suppression de presentation</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            Voulez-vous vraiment effectuer la suppression ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form class="form-inline" action="{{route('secteurs.destroy',$secteur['id'])}}"  method="POST">
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


