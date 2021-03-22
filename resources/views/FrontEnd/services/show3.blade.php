@extends('FrontEnd.master')
  
@section('catchPhrase')
            <h1 class="white typed" style="color:black;">{{ App\Models\Service::find($service)->titre}}</h1>
@endsection

@section('dynamique')

<section>
  <div class="cut cut-top"></div> 
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('/service')}}"> Services</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{App\Models\Service::find($service)->titre}}</li>
    </ol>
  </nav>
  <div class="row text-center title">
        <h2>Notre travail</h2>
        <h4 class="light muted">
          Allez-y et choisissez l'un de ces modèles magnifiques et diversifiés, tout ce que vous avez à faire pour aider votre entreprise est d'appuyer sur le bouton "Commander" et de remplir le formulaire affiché, une fois votre commande passée et approuvée, nous vous contacterons pour confirmation.
        </h4>
  </div>
  <div class="row services">
    <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3 style="color:#5d76b6; ">Prix :</h3>
              <h5>
              Afin d'estimer le prix de votre site web/Logiciel nous vous recommandons de nous écrire une description détaillée de vos besoins et fonctionnalités que vous souhaiteriez avoir, 
              Chaque petit détail compte alors essayez d'être aussi descriptif que possible, notre équipe fixera le prix de votre site Web et vous répondra dans les plus brefs délais.</h5>
          </div>
          <div class="col-md-4" align="right">
            <a href="{{url('/commandes/create')}}"  style="background-color:#9c1210;" class="btn btn-secondary" title="Paiement par CCP"> 
              Passer une commande <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
          </div>
        </div>
         <div class="container">
              <div class="row services">
                @foreach($catégorie as $g)
                <a href="{{url('/services/'.$g->catégorie.'/details')}}">
                <div class="col-md-4">
                  <div class="service">
                    <div class="icon-holder">
                      <img src="{{asset('img/icons/quality.png')}}" alt="" class="icon">
                    </div>
                    <h4 class="heading">{{$g->catégorie}}</h4>
                    <p class="description">{{$g->titre}}.</p>
                  </div>
                </div>
                </a>
                @endforeach
              
              </div>
            </div>
    </div> 
  </div>
</section>

          
@endsection