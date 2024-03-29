@extends('dashboard.dashboard')

@include('dashboard/partials/_menu', ['messagesRecu','commentC'])

@section('content')
<div id="layoutSidenav_content">
<main>
<div class="container bootdey">
<div class="email-app mb-4">
    <nav>
        <a href="{{route('messages.create')}}" class="btn btn-danger btn-block"><i class="fa fa-plus"></i>       Nouveau message</a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('messagesRecu')}} "><i class="fa fa-inbox"></i> Inbox @if($contacts->where('Verified',false)->count()>0)<span class="badge badge-danger">{{$contacts->where('Verified',false)->count()}} </span>@endif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('messages.index')}} "><i class="fa fa-rocket"></i> Envoyer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('brouillons')}}"><i class="fa fa-trash"></i> Brouillons</a>
            </li>
        </ul>
    </nav>
    <main class="inbox">
        <div class="toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-light">
                    <span class="fa fa-envelope"></span>
                </button>

            </div>


            <div class="btn-group float-right">
                <button type="button" class="btn btn-light">
                    <span class="fa fa-chevron-left"></span>
                </button>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-chevron-right"></span>
                </button>
            </div>
        </div>

        @if (session('supprimerMsg'))
                            
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Votre <strong>message</strong> a été supprimer 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif

        <ul class="messages">
            @foreach($brouillons as $brouillon)
             <li class="message">
                <input type="button" class="fa fa-trash pull-right" data-toggle="modal" data-target="#example{{$brouillon->id}}ModalCenter"/>
                <a href="{{url('brouillons/'.$brouillon->id.'/details')}}" style="text-decoration:none;">
                    <div class="header">
                        <span class="from"><b>{{$brouillon->Sujet}}</b> </span>
                        <span class="date">Le
                        <span class=""></span> {{$brouillon->created_at}}</span>
                    </div>
                    <div class="title">
                        A: {{$brouillon->Contact_email}}
                    </div>
                    <div class="description">
                        @if(strlen($brouillon->Message) >= 100)
                        {{$chaine = substr($brouillon->Message, 0, 100)}} ...
                        @else
                            {{$brouillon->Message}}
                        @endif
                    </div>
                </a>
            </li>

            <!-- Modal -->
            <div class="modal fade" id="example{{$brouillon->id}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$brouillon->id}}ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example{{$brouillon->id}}ModalLongTitle">Suppression de message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        Voulez-vous vraiment supprimer ce message définitivement ?
                    </div>
                    <div class="modal-footer">
                        <form class="form-inline" action="{{url('brouillons/'.$brouillon->id.'/delete')}}"  method="POST">
                            @method('DELETE')
                            @csrf
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-danger ml-4">Oui</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
            
        </ul>
    </main>
</div>
</div>
</main>
</div>

@endsection

<style>
body{
background:#eee
}
.email-app {
    display: flex;
    flex-direction: row;
    background: #fff;
    border: 1px solid #e1e6ef;
}

.email-app nav {
    flex: 0 0 200px;
    padding: 1rem;
    border-right: 1px solid #e1e6ef;
}

.email-app nav .btn-block {
    margin-bottom: 15px;
}

.email-app nav .nav {
    flex-direction: column;
}

.email-app nav .nav .nav-item {
    position: relative;
}

.email-app nav .nav .nav-item .nav-link,
.email-app nav .nav .nav-item .navbar .dropdown-toggle,
.navbar .email-app nav .nav .nav-item .dropdown-toggle {
    color: #151b1e;
    border-bottom: 1px solid #e1e6ef;
}

.email-app nav .nav .nav-item .nav-link i,
.email-app nav .nav .nav-item .navbar .dropdown-toggle i,
.navbar .email-app nav .nav .nav-item .dropdown-toggle i {
    width: 20px;
    margin: 0 10px 0 0;
    font-size: 14px;
    text-align: center;
}

.email-app nav .nav .nav-item .nav-link .badge,
.email-app nav .nav .nav-item .navbar .dropdown-toggle .badge,
.navbar .email-app nav .nav .nav-item .dropdown-toggle .badge {
    float: right;
    margin-top: 4px;
    margin-left: 10px;
}

.email-app main {
    min-width: 0;
    flex: 1;
    padding: 1rem;
}

.email-app .inbox .toolbar {
    padding-bottom: 1rem;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .inbox .messages {
    padding: 0;
    list-style: none;
}

.email-app .inbox .message {
    position: relative;
    padding: 1rem 1rem 1rem 2rem;
    cursor: pointer;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .inbox .message:hover {
    background: #f9f9fa;
}

.email-app .inbox .message .actions {
    position: absolute;
    left: 0;
    display: flex;
    flex-direction: column;
}

.email-app .inbox .message .actions .action {
    width: 2rem;
    margin-bottom: 0.5rem;
    color: #c0cadd;
    text-align: center;
}

.email-app .inbox .message a {
    color: #000;
}

.email-app .inbox .message a:hover {
    text-decoration: none;
}

.email-app .inbox .message.unread .header,
.email-app .inbox .message.unread .title {
    font-weight: bold;
}

.email-app .inbox .message .header {
    display: flex;
    flex-direction: row;
    margin-bottom: 0.5rem;
}

.email-app .inbox .message .header .date {
    margin-left: auto;
}

.email-app .inbox .message .title {
    margin-bottom: 0.5rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.email-app .inbox .message .description {
    font-size: 12px;
}

.email-app .message .toolbar {
    padding-bottom: 1rem;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .message .details .title {
    padding: 1rem 0;
    font-weight: bold;
}

.email-app .message .details .header {
    display: flex;
    padding: 1rem 0;
    margin: 1rem 0;
    border-top: 1px solid #e1e6ef;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .message .details .header .avatar {
    width: 40px;
    height: 40px;
    margin-right: 1rem;
}

.email-app .message .details .header .from {
    font-size: 12px;
    color: #9faecb;
    align-self: center;
}

.email-app .message .details .header .from span {
    display: block;
    font-weight: bold;
}

.email-app .message .details .header .date {
    margin-left: auto;
}

.email-app .message .details .attachments {
    padding: 1rem 0;
    margin-bottom: 1rem;
    border-top: 3px solid #f9f9fa;
    border-bottom: 3px solid #f9f9fa;
}

.email-app .message .details .attachments .attachment {
    display: flex;
    margin: 0.5rem 0;
    font-size: 12px;
    align-self: center;
}

.email-app .message .details .attachments .attachment .badge {
    margin: 0 0.5rem;
    line-height: inherit;
}

.email-app .message .details .attachments .attachment .menu {
    margin-left: auto;
}

.email-app .message .details .attachments .attachment .menu a {
    padding: 0 0.5rem;
    font-size: 14px;
    color: #e1e6ef;
}

@media (max-width: 767px) {
    .email-app {
        flex-direction: column;
    }
    .email-app nav {
        flex: 0 0 100%;
    }
}

@media (max-width: 575px) {
    .email-app .message .header {
        flex-flow: row wrap;
    }
    .email-app .message .header .date {
        flex: 0 0 100%;
    }
}
</style>
