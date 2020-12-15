@extends('layouts.static')


@section('content')
	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">E-<span>ECG</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
							<li class="breadcrumb-item active">Cours</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->
<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">rejoignez nous</span>
					<h2>Veuillez remplir cette <span> Demande.</span></h2>
			</div>
			<div class="order-payment">
								<div class="payment-method" style="background-image: url('/assets/img/banner/blue.jpg'); background-size: cover; background-attachment: inherit;">
									<div class="payment-method-header">
										<div class="row">
											<div class="col-md-12">
												<div class="method-header-text">
													<div class="checkbox">
														<label>
															Paiement uniquement par CCP! veuillez envoyer une photo de votre reçu de paiement
														</label><br>
														<span style="color: red;">Important: </span>
														<span>
															La photo doit être de bonne qualité et nette avec la somme exacte de votre abonnement souhaité
														</span>
													</div>
												</div>
											</div>

										</div>
									</div>

@php
    $offres=DB::table('offres')
   		 ->select('offres.*')
   		 ->get();
@endphp

									<div class="check-out-form">
										<form action="{{url('/demandes')}}" method="post" enctype="multipart/form-data">
          									{{ csrf_field()}}
	
											<div class="payment-info input-2">
												<select class="form-control @error('IDoffre') is-invalid @enderror" name="IDoffre" value="{{old('IDoffre')}}" required>
													<option value="">---------Sélectionnez une offre---------</option>
													 @foreach($offres as $f)
									                 <option value="<?php echo $f->id ?>"> <?php echo $f->titre ?> ( <?php echo $f->durée ?>) </option>
									                 @endforeach
												</select>
											</div>
											<div class="payment-info">
												<label class=" control-label">Nom*:</label>
												<input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Entrer votre nom" value="{{old('nom')}}" required>
											</div>
											<div class="payment-info">
												<label class=" control-label">Prénom* :</label>
												<input type="text" class="form-control @error('prenom') is-invalid @enderror"  name="prenom" placeholder="Entrer votre prénom" value="{{old('prenom')}}" required>
											</div>
											<div class="payment-info">
												<label class=" control-label">Numero de Téléphone*:</label>
												<input type="text" class="form-control @error('num') is-invalid @enderror" name="num" placeholder="Entrer votre numero de téléphone" value="{{old('num')}}" required>
											</div>
											<div class="payment-info">
												<label class=" control-label">Email* :</label>
												<input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="Entrer votre adresse mail" value="{{old('email')}}" required>
											</div>
											<div class="payment-info input-2">
												<label class=" control-label">Emplacement :</label>
												<input type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" placeholder="votre pays" value="{{old('pays')}}">
												<input type="text" class="form-control @error('ville') is-invalid @enderror "  name="ville" placeholder="Votre ville" value="{{old('ville')}}" required>
											</div>
											<div class="payment-info">
												<label class="control-label">Payment* :</label>
												 <input type="file" accept=".png,.jpg,.jpeg," data-default-file="{{old('recuCCP')}}" class="form-group  @error('recuCCP') is-invalid @enderror" name="recuCCP"  value="{{old('recuCCP')}}" placeholder="Veuillez envoyer une image de votre recu de payment CCP" required/>
											</div>
											<div >
	                                    		<button type="submit" value="Submit" class="genius-btn mt25 gradient-bg text-center text-uppercase  bold-font" style=" font-weight: 700; color: #fff;">
	                                    			Entrer  <i class="fas fa-caret-right"></i>
	                                    		</button>
                                			</div>	
										</form>
										
									</div>
								</div>
								


		</div>
	</div>
</section>

@endsection