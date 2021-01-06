@extends('layouts.static')

@section('content')

	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">E-ECG <span>Contact</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
							<li class="breadcrumb-item active">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
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


	<!-- Start of contact area form
		============================================= -->
		<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Rester en contact</span>
					<h2>Envoyez-nous Un<span> Message.</span></h2>
				</div>
				
				<div class="contact_third_form">
					<form class="contact_form" action="{{ url('contacts')}}" method="POST" enctype="multipart/form-data">
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
							<button type="submit" value="Submit">ENVOYER UN EMAIL<i class="fas fa-caret-right"></i></button> 
						</div>
					</form>
				</div>
			</div>
		</section>
	<!-- End of contact area form
		============================================= -->



@endsection