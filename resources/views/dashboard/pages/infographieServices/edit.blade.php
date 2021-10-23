@extends('index')



@section('contenu')

 
	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">

				 

				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Modifier service d'infographie</span></h4>
					</div>
                    
                    <a href="{{url('infographieDash')}} ">
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
										<h2 class="head-after head-after-white">Service d'infographie</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="">

						<form id="get_quote_form" class="col-form" action="{{ route('infographieServices.update' ,$infographieService['id']) }}" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}

							<div class="col-lg-12">

                                <div class="blog-img">
                                    <img style="width:100%" src="{{asset($infographieService->image)}}" alt="">
                                </div>

								<div class="form-group">
									<input type="file" class="form-control" name="image" placeholder="Image" value="{{$infographieService['image']}}">
									<span style="color: red">@error('image')        {{$image}}    @enderror</span><br>
								</div>
							</div>

							<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" class="form-control" name="nom" placeholder="Nom (*)" value="{{$infographieService['nom']}}">
									<span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
								</div>
							</div>
							
							<div class="col-lg-12">
								<div class="form-group" style="background-color: white">
									<textarea class="form-control" id="summernote" name="details" rows="4" placeholder="Detaisl (*)" value="">  {{$infographieService['details']}}  </textarea>
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
		  placeholder: 'Details (*)',
		  tabsize: 2,
		  height: 200,
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
