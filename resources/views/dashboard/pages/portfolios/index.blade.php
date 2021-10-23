@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu', 'commentC'])

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Portfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>

                        <div class="row">
                            <div class="col">
                                <h3 class="one"></h3>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('portfolios.create')}}" type="button" class="btn btn-success pull-left mb-3"><i class="fa fa-plus mr-3" aria-hidden="true"></i>Nouveau</a>
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
                                Liste de services
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
                                    @foreach($services_info as $infographie)
                                        <tr>
                                            <td>{{$infographie['nom']}} </td>
                                            <td>{!!$infographie['details']!!} </td>
                                            <td>Infographie</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{url('dashboard/'.$infographie->id.'/portfolio_info')}} " class="btn btn-success  btn-circle btn-circle-sm m-1 "><i class="fa fa-caret-down"></i></a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    @foreach($services as $dev)
                                        <tr>
                                            <td>{{$dev['nom']}} </td>
                                            <td>{!!$dev['details']!!} </td>
                                            <td>Infographie</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{url('dashboard/'.$dev->id.'/portfolio_dev')}} " class="btn btn-success  btn-circle btn-circle-sm m-1 "><i class="fa fa-caret-down"></i></a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>



                    </div>
                </main>

            </div>
@endsection