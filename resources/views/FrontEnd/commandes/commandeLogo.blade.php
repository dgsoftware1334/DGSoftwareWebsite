@extends('layouts.master')
  
@section('catchPhrase')
            <h1 class="white typed" style="color:black;">Passer Une Commande</h1>
@endsection

@section('dynamique')
<link rel="stylesheet" type="text/css" href="{{asset('css/about-us.css')}}">

<div class="cut cut-top"> </div>
		<nav aria-label="breadcrumb">
		    <ol class="breadcrumb">
		      <li class="breadcrumb-item"><a href="{{url('/')}}"> Home</a></li>
		      <li class="breadcrumb-item"><a href="{{url('/service')}}">Services</a></li>
		      <li class="breadcrumb-item"><a href="{{url('/service/'.$service->id)}}">{{$service->titre}}</a></li>  
		      <li class="breadcrumb-item active" aria-current="page">Commander</li>
		    </ol>
		</nav>
<section id="contact-form" class="contact-form-area_3 contact-page-version">
	<div class="container">
		<div class="row">
		    	<div class="col-md-12" >
		    	@if(session()->has('success'))
						  <div class="alert alert-success">
						    <strong>{{session()->get('success')}} </strong>
						    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						      <span aria-hidden="true">&times;</span>
						    </button>
						  </div>
				@elseif(session()->has('error'))
						  <div class="alert alert-danger">
						   <strong>{{session()->get('error')}} </strong>
						   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						     <span aria-hidden="true">&times;</span>
						   </button>
						  </div>
				@endif
				</div>
		    </div>	
		<section id="main-content">
	      <section class="wrapper">
	        <!-- BASIC FORM ELELEMNTS -->
	       
	        <div class="row mt">
	          <div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Commencer le changement</span>
					<h2>Passer <span>Une Commande.</span></h2>
			  </div>
	          <div class="col-lg-7 col-md-7 col-sm-7">
	            <h4 class="title">Vos Coordonnées</h4>
	            <div id="message"></div>
	            <form  action="{{url('commandes')}}" method="POST" class="contact-form" enctype="multipart/form-data">
	              {{ csrf_field()}} 
	              <input type="hidden" name="produit" class="form-control @error('produit') is-invalid @enderror" value="0">
	              <input type="hidden" name="quantité" class="form-control @error('quantité') is-invalid @enderror" value="1">
	              <input type="hidden" name="service" value="{{$service->id}}">
	              <div class="form-group">
	                <input type="name" name="nom" class="form-control @error('nom') is-invalid @enderror" id="contact-name" placeholder="Votre Nom*" required value="{{old('nom') }}">
	                @error('nom')
				        <span class="alert alert-danger" role="alert">
			              <strong>{{ $message }}</strong>
			            </span>
			        @enderror
	              </div>
	              <div class="form-group">
	                <input type="name" name="prenom" class="form-control @error('prenom') is-invalid @enderror" id="contact-name" placeholder="Votre Prenom*" required value="{{old('prenom') }}">
	                @error('prenom')
				        <span class="alert alert-danger" role="alert">
			              <strong>{{ $message }}</strong>
			            </span>
			        @enderror
	              </div>
	              <div class="form-group">
	                <input type="number" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="contact-email" placeholder=" Votre Numéro de téléphone*" required value="{{old('telephone') }}">
	                @error('telephone')
				        <span class="alert alert-danger" role="alert">
			              <strong>{{ $message }}</strong>
			            </span>
			        @enderror
	              </div>
	              <div class="form-group">
	                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="contact-email" placeholder="Votre Adresse Mail*" required value="{{old('email')}}">
	                @error('email')
				        <span class="alert alert-danger" role="alert">
			              <strong>{{ $message }}</strong>
			            </span>
			        @enderror
	              </div>

	              <div class="form-group">
	                <textarea class="form-control @error('details') is-invalid @enderror" name="details" id="contact-message" placeholder="Faites-nous savoir se que vous voullez*" rows="3" title="Veuillez nous décrire en détail ce que vous avez en tête comme logo et la nature de votre entreprise ">{{old('details')}}</textarea>
	                @error('details')
				        <span class="alert alert-danger" role="alert">
			              <strong>{{ $message }}</strong>
			            </span>
			        @enderror
	              </div>
	          </div>

	          <div class="col-lg-5 col-md-5 col-sm-5">
	          	
	            <div class="form-group">
	             	<h4 class="title">Pièce joints </h4>
					<input type="file" name="logo" accept=".png,.jpg,.jpeg,.svg,.bmp" class="form-control  @error('logo') is-invalid @enderror" title="ici, vous pouvez télécharger un fichier pour nous aider à comprendre vos besoins ou si vous avez un exemple que vous souhaitez que nous suivions" data-default-value="{{ old('logo') }}" value="{{old('logo') }}"/>
					@error('logo')
				        <span class="alert alert-danger" role="alert">
			              <strong>{{ $message }}</strong>
			            </span>
			        @enderror
	            </div>
	            <div class="form-group">
	              	<h4 class="title">Paiement Par CCP*</h4>
					<input type="file" name="recu" accept=".png,.jpg,.jpeg," class="form-control"  required/>
	          	</div>
	           </div>
	        </div>
	        <hr>
		    <div class="form-send" align="right">
		        <button type="submit" class="btn btn-large btn-blue"><b>Valider la commande</b> <i class="fa fa-check-circle-o"  ></i></button>
		    </div>
	    </form>

<!-- /row -->


	        <!-- /row -->
	      </section>
      <!-- /wrapper -->
    	</section>
    <!-- /MAIN CONTENT -->
	</div>
</section>

@endsection