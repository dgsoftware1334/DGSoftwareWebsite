@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Liste des demandes',
    'activePage' => 'demandes',
    'activeNav' => '',
])
@section('content')
<div class="panel-header panel-header-sm"></div>

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
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
          <div class="card-header">
            <h4 class="card-title">Demandes d'abonnement</h4>
            <div class="col-12 mt-2"></div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
             <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Emplacement</th>
                    <th>Offres</th>
                    <th class="text-right">Payment</th>
                    <th class="text-right">Etat</th>
                </tr>
            </thead>
            <tbody>
              @foreach($demandes as $demande)
               @if($demande->etat == "En attente")
                <tr>
                    <td>{{$demande->id}}
                    <p class="text-muted text-right" style="font-size:10px">Envoyée {{$demande->created_at->locale('fr')->diffForHumans()}}</p>
                    </td>
                    <td  class="text-center">{{$demande->nom}} {{$demande->prenom}}</td>
                    <td>{{$demande->email}}</td>
                    <td>{{$demande->pays}}, {{$demande->ville}}</td>
                    <td class="text-right">{{$demande->ID_offre}}</td>
                    <td class="text-right">
                      <a href="{{ url('recu/'.$demande->id)}}" target=_blank style=cursor:pointer; class='btn btn-outline-info' data-toggle='tooltip' data-placement='bottom' title='Voir le recu de paiment' >Voir recu </a>
                    </td>
                    <td>{{$demande->etat}}</td>
                    <td class="td-actions text-right">
                      <form  action="{{ url('demandes/'.$demande->id)}}" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer cet demande définitivement?')">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                          <a href="{{url('demande/confirmer/'.$demande->id)}}" type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon" title="Confirmer"><i class="now-ui-icons ui-1_check"></i>
                          </a>
                          <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" title="Refuser">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                      </form>
                      
                    </td>
                </tr>
                @else
                <tr class="bg-confirm">
                    <td>{{$demande->id}}
                    <p class="text-muted text-right" style="font-size:10px">Envoyée {{$demande->created_at->locale('fr')->diffForHumans()}}</p>
                    </td>
                    <td  class="text-center">{{$demande->nom}} {{$demande->prenom}}</td>
                    <td>{{$demande->email}}</td>
                    <td>{{$demande->pays}}, {{$demande->ville}}</td>
                    <td class="text-right">{{$demande->ID_offre}}</td>
                    <td class="text-right">
                      <a href="{{ url('recu/'.$demande->id)}}" target=_blank style=cursor:pointer; class='btn btn-outline-info' data-toggle='tooltip' data-placement='bottom' title='Voir le recu de paiment' >Voir recu </a>
                    </td>
                    <td>{{$demande->etat}}</td>
                    <td class="td-actions text-right">
                      <form  action="{{ url('demandes/'.$demande->id)}}" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer cet demande définitivement?')">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                          <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" title="Supprimer définitivement">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                      </form>
                      
                    </td>
                </tr>
                @endif
                @endforeach
            
            </tbody>
        </table>
            </table>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>

@endsection