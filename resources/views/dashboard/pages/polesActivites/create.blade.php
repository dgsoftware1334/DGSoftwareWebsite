@extends('index')



@section('contenu')


	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">



				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Nouveau pole</span></h4>
					</div>
					<a href="{{url('polesActivitesDash')}} ">
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
										<h2 class="head-after head-after-white">Pole</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<!--div class="get-quote-item"-->

						<form id="get_quote_form" class="col-form" action="{{ route('polesActivites.store') }}" method="post" enctype="multipart/form-data">
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
										<input type="text" class="form-control" name="nomPole" placeholder="Nom de pole" value="{{old('nomPole')}}">
										<span style="color: red">@error('nomPole')        {{$message}}    @enderror</span><br>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" name="introduction" placeholder="Introduction" value="{{old('introduction')}}">
										<span style="color: red">@error('introduction')        {{$message}}    @enderror</span><br>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group" style="background-color: white">
										<textarea class="form-control" id="summernote" name="description" rows="4">{{old('description')}}</textarea>  
                                        <span style="color: red">@error('description')        {{$message}}    @enderror</span><br>
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
      placeholder: 'Description de pole',
      tabsize: 2,
      height: 400,
	  toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],  
        ]
    });
</script>
@endsection



