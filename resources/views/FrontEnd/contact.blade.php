@extends('FrontEnd.master')

@section('catchPhrase')
 		<h1 class="white typed" style="color:black;">Contactez-nous</h1>			
@endsection

@section('dynamique')
        <link rel="stylesheet" type="text/css" href="css/about-us.css">
 <div class="cut cut-top"> </div>

		<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
    <div class="row">
    	<div class="col-md-12">
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
		</div>
    </div>

				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Rester en contact</span>
					<h2>Envoyez-nous Un<span> Message.</span></h2>
				</div>
				
				<div class="contact_third_form">
					<form class="contact_form" action="{{ url('contact')}}" method="POST" enctype="multipart/form-data">
				      {{ csrf_field()}}

						<div class="row">
							<div class="col-md-4">
								<div class="contact-info">
									<input class="name form-control @error('nom') is-invalid @enderror" name="nom" type="text" value="{{old('nom')}}" placeholder="Votre Nom*">
								</div>
								@error('nom')
				                  <span class="invalid-feedback" role="alert">
				                      <strong>{{ $message }}</strong>
				                  </span>
				              @enderror
							</div>
							<div class="col-md-4">
								<div class="contact-info">
									<input class="email form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{old('email')}}" placeholder="Votre Mail*">
								</div>
								@error('email')
				                  <span class="invalid-feedback" role="alert">
				                      <strong>{{ $message }}</strong>
				                  </span>
				              @enderror
							</div>
							<div class="col-md-4">
								<div class="contact-info">
									<input class="number form-control @error('tel') is-invalid @enderror" name="tel" type="number" value="{{old('tel')}}" placeholder="Numéro téléphone*">
								</div>
								@error('tel')
				                  <span class="invalid-feedback" role="alert">
				                      <strong>{{ $message }}</strong>
				                  </span>
				              @enderror
							</div>
						</div>
						<textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Message*">{{ old('message') }}</textarea>
						@error('message')
		                  <span class="invalid-feedback" role="alert">
		                      <strong>{{ $message }}</strong>
		                  </span>
  	  	                @enderror

						<div class="nws-button text-center  gradient-bg text-uppercase">
							<button type="submit" value="Submit" class="boutton">ENVOYER UN EMAIL</button> 
						</div>
					</form>
				</div>
			</div>
		</section>
@endsection
