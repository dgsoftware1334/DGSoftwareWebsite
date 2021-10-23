@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu', 'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Commentaires</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Commentaire</li>
                        </ol>


                        @if (session('commentVerified'))
                            
                        <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                            La <strong>commentaire</strong> a été publié avec succes
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif
                        
                        @if (session('commentDelete'))
                            
                        <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                            La <strong>commentaire</strong> a été supprimé avec succes
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Liste des commentaires
                            </div>


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Commenatire</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Commenatire</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($comments as $comment)
                                        <tr>
                                            <td>{{$comment['nom']}} </td>
                                            <td>{{$comment['commentaire']}} </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    @if($comment->verified == false)
                                                        <a href="{{ route('comments.show',$comment['id']) }}" class="btn btn-success  btn-circle btn-circle-sm m-1 "><i class="fa fa-check"></i></a>
                                                    @endif
                                                    <button type="button" class="btn btn-danger  btn-circle btn-circle-sm m-1" data-toggle="modal" data-target="#example{{$comment['id']}}ModalCenter">
                                                    <i class="fa fa-trash"></i>
                                                    </button>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="example{{$comment['id']}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$comment['id']}}ModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="example{{$comment['id']}}ModalLongTitle">Suppression de commenatire</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            Voulez-vous vraiment effectuer la suppression ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form class="form-inline" action="{{route('comments.destroy',$comment['id'])}}"  method="POST">
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