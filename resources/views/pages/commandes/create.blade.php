@extends('index')



@section('contenu')


	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">



				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Nouvelle commande</span></h4>
					</div>
					<a href="{{url('infographie/'.$service->id.'/produits')}} ">
						<div  class="whoweare-item pb-60px">
							<div>
								<div class="costumizeCard">
									<h6><i></i><b>Annuler</b></h6>
								</div>

							</div>
						</div>
					</a>
				</div>



				<div class="col-lg-8 ">
					<div class="whoweare-item pb-60px">

                        	<!-- START GET A QUOTE -->
				<div id="get-quote" class="get-quote-bg">
					<div class="container">
						<div class="row">

							<div class="col-lg-12">
								<div class="mb-30px">
									<div class="section-heading theme-text-center">
										<h1 class="head-back-light">Nouvelle</h1>
										<h2 class="head-after head-after-white">Commande {{$service->nom}}</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="">

						<form id="get_quote_form" class="col-form" action="{{ route('commandes.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="row">

								<div class="col-lg-6">
									<div class="form-group">
                                        <label style="color: white" for="inputEmail4">Nom (*)</label>
                                        <input type="text" class="form-control" name="nom" placeholder="Nom (*)">
                                        <span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
                                    </div>
								</div>

								<div class="col-lg-6">
									<label style="color: white" for="inputPassword4">Prénom (*)</label>
                                  <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                                  <span style="color: red">@error('prenom')        {{$message}}    @enderror</span><br>
								</div>

                                <div class="col-lg-6">
									<label style="color: white" for="inputAddress">Adresse (*)</label>
                                <input type="text" class="form-control" name="adresse" placeholder="Exemple: 1234 Main St">
                                <span style="color: red">@error('adresse')        {{$message}}    @enderror</span><br>
                                </div>

                                <div class="col-lg-6">
									<label style="color: white" for="inputPassword4">N° Téléphone (*)</label>
                                    <input type="text" class="form-control" name="telephone" placeholder="N° Téléphone">
                                    <span style="color: red">@error('telephone')        {{$message}}    @enderror</span><br>
								</div>

                                <div class="col-lg-12">
									<label style="color: white" for="inputEmail4">Email (*)</label>
                                <input type="email" class="form-control" name="email" placeholder="exemple@exemple.com">
                                <span style="color: red">@error('email')        {{$message}}    @enderror</span><br>
								</div>

                                <div class="col-lg-12">
								    <label style="color: white" for="inputEmail4">Réseaux sociaux</label>
                                    <input type="text" class="form-control" name="reseau" placeholder="Lien de votre compte Facebook, Instagram, Twitter, ect. ">
								</div>


                                <div class="col-lg-12">
									<div class="form-group">
										<label style="color: white" for="inputState">Type de commande (*)</label>
                                        <select id="inputState" name="type" class="form-control"  style="height:45px">
                                        <option value="{{$service->id}}" selected>{{$service->nom}}</option>
                                        @foreach($services as $servicee)
                                            @if ($servicee->id != $service->id)
                                                <option value="{{$servicee->id}}">{{$servicee->nom}}</option>
                                            @endif
                                        @endforeach
                                        </select>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group" style="background-color: white">
                                        <textarea type="text" class="form-control" row="4" name="activite" placeholder="Parlez-nous de votre activité"></textarea>

									</div>
								</div>

								<div class="col-lg-12">
									<button type="submit" class="btn theme-btn-default btn-icon">
										<span>Valider</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- END GET A QUOTE -->

					</div>
				 </div>


			</div>
		</div>
	</div>
	<!-- END WHO WE ARE -->

	@endsection

	@section('scripts')
	
	<script>
		$('#summernote').summernote({
		  placeholder: 'Details (*)',
		  tabsize: 2,
		  height: 250,
		  toolbar: [
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['height', ['height']],  
			]
		});
		$('#summernote').summernote('backColor', 'white');
	
		
	</script>
	@endsection
