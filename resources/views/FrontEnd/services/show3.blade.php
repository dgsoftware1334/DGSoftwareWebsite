@extends('FrontEnd.master')
  
@section('catchPhrase')
            <h1 class="white typed" style="color:black;">{{ App\Models\Service::find($service)->titre}}</h1>
@endsection

@section('dynamique')

<section>
  <div class="cut cut-top"></div> 
  <div class="row text-center title">
        <h2>Nos Sites Web</h2>
        <h4 class="light muted">
          Allez-y et choisissez l'un de ces modèles magnifiques et diversifiés, tout ce que vous avez à faire pour aider votre entreprise est d'appuyer sur le bouton "Commander" et de remplir le formulaire affiché, une fois votre commande passée et approuvée, nous vous contacterons pour confirmation.
        </h4>
  </div>
  <div class="row services">
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h3 style="color:#5d76b6; ">Prix :</h3>
          <div >
            <h5>
            Afin d'estimer le prix de votre site web nous vous recommandons de nous écrire une description détaillée de vos besoins et fonctionnalités que vous souhaiteriez avoir dans votre site, ainsi que le type de votre site internet (e-learning, e-commerce, site vitrine ..) chaque petit détail compte alors essayez d'être aussi descriptif que possible, notre équipe fixera le prix de votre site Web et vous répondra dans les plus brefs délais.</h5>
          </div>
        </div>
        <div class="col-md-5 offset-md-1" align="right">
          <a href="{{url('/about')}}"  style="background-color:#9c1210;" class="btn btn-secondary" title="Paiement par CCP"> 
            Passer une commande <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      
    </div>
    <hr>
  <section class="section gray-bg">
    <div class="container container-fluid"> 
      <div class="row">
         
        @foreach($galerie as $g) 
     
        <a type="button" class="btn btn-white-fill expand">
          <div class="col-md-10"> 
                    <h3>{{$g->catégorie}}</h3>
          </div>
        </a>
             
        
        @endforeach

      </div>     
    </div> 
  </section>
  </div>
</section>

          
@endsection