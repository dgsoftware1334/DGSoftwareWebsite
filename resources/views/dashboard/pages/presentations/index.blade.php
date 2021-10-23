@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu' ,'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Presentation</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> / Presentation</li>
                        </ol>
                       

                        @if (session('nomMdf'))
                            
                        <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                            Votre <strong>presentation</strong> a été modifier avec succes
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif
                        <div class="row">
                            <div class="col">
                                <h3 class="one"></h3>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Presentation de l'entreprise
                            </div>


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Adresse</th>
                                            <th>N° Téléphone</th>
                                            <th>Slogan</th>
											<th>Notion</th>
											<th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Adresse</th>
                                            <th>N° Téléphone</th>
                                            <th>Slogan</th>
											<th>Notion</th>
											<th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    
                                        <tr>
                                            <td>{{$presentation[0]->Nom}} </td>
                                            <td>{{$presentation[0]->address}} </td>
                                            <td>{{$presentation[0]->telephone}} </td>
                                            <td>{{$presentation[0]->Slogan}} </td>
											<td>{{$presentation[0]->Notion}} </td>
											<td>{{$presentation[0]->Description}} </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('presentations.index') }}" class="btn btn-primary  btn-circle btn-circle-sm m-1 "><i class="fa fa-info"></i></a>
                                                    <a href="{{ route('presentations.edit',$presentation[0]->id) }}" class="btn btn-warning  btn-circle btn-circle-sm m-1 "><i class="fa fa-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
@endsection