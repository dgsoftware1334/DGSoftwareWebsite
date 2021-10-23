@extends('index')



@section('contenu')


	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">



				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Modifier fondateur</span></h4>
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
										<h1 class="head-back-light">Modifier</h1>
										<h2 class="head-after head-after-white">Fondateur</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="get-quote-item">

						<form id="get_quote_form" class="col-form" action="{{ route('fondateurs.update' ,$fondateur['id']) }}" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}

							<div class="col-lg-12">

                                <div class="blog-img">
                                    <img style="width:100%" src="{{asset($fondateur->Image)}}" alt="">
                                </div>

								<div class="form-group">
									<input type="file" class="form-control" name="image" placeholder="Image" value="{{$fondateur->Image}}">
									<span style="color: red">@error('image')        {{$image}}    @enderror</span><br>
								</div>
							</div>

							<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="nom" placeholder="Nom (*)" value="{{$fondateur['Nom']}}">
									<span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
								</div>
							</div>

                            <div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="prenom" placeholder="Prenom (*)" value="{{$fondateur['Prenom']}}">
									<span style="color: red">@error('introduction')        {{$message}}    @enderror</span><br>
								</div>
							</div>

                            <div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="telephone" placeholder="N° Telephone (*)" value="0{{$fondateur['Telephone']}}">
									<span style="color: red">@error('telephone')        {{$message}}    @enderror</span><br>
								</div>
							</div>

                            <div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Email (*)" value="{{$fondateur['Email']}}">
									<span style="color: red">@error('introduction')        {{$message}}    @enderror</span><br>
								</div>
							</div>

                            <div class="col-lg-12">
								<div class="form-group">
									<input type="text" class="form-control" name="specialite" placeholder="Spécialité (*)" value="{{$fondateur['Specialite']}}">
									<span style="color: red">@error('introduction')        {{$message}}    @enderror</span><br>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<textarea class="form-control" name="details"  placeholder="Details (*)" >{{$fondateur['Details']}}</textarea>
									<span style="color: red">@error('details')        {{$message}}    @enderror</span><br>
								</div>
							</div>

							<div class="col-lg-12">
								<button type="submit" class="btn theme-btn-default btn-icon">
									<span>Modifier</span>
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
		  placeholder: 'Description de pole',
		  tabsize: 2,
		  height: 250
		});
	</script>
	@endsection
