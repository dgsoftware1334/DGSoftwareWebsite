@extends('index')



@section('contenu')


	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">



				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Nouveau fondateur</span></h4>
					</div>
					<a href="{{url('fondateursDash')}} ">
						<div  class="whoweare-item pb-60px">
							<div>
								<div class="costumizeCard">
									<h6><i></i><b>Retour</b></h6>
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
										<h1 class="head-back-light">Nouveau</h1>
										<h2 class="head-after head-after-white">Fondateur</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="get-quote-item">

						<form id="get_quote_form" class="col-form" action="{{ route('fondateurs.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="row">

								<div class="col-lg-12">
									<div class="form-group">
										<input type="file" class="form-control" name="image" placeholder="Image">
										<span style="color: red">@error('image')        {{$message}}    @enderror</span><br>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="nom" placeholder="Nom (*)" value="{{old('nom')}}">
										<span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="prenom" placeholder="Prenom (*)" value="{{old('prenom')}}">
										<span style="color: red">@error('prenom')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="telephone" placeholder="N° Telephone (*)" value="{{old('telephone')}}">
										<span style="color: red">@error('telephone')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="email" placeholder="Email (*)" value="{{old('email')}}">
										<span style="color: red">@error('email')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="specialite" placeholder="Specialite (*)" value="{{old('specialite')}}">
										<span style="color: red">@error('specialite')        {{$message}}    @enderror</span><br>
									</div>
								</div>	

                                <div class="col-lg-12">
									<div class="form-group">
										<textarea class="form-control" name="details" rows="4" placeholder="Présentation(*)">{{old('details')}}</textarea>  
                                        <span style="color: red">@error('details')        {{$message}}    @enderror</span><br>
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
      height: 250
    });
</script>
@endsection



