@extends('index')



@section('contenu')

 
	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">

				 

				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Modifier article</span></h4>
					</div>
                    
                    <a href="{{url('articlesDash')}} ">
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
										<h2 class="head-after head-after-white">Article</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="get-quote-item">

						<form id="get_quote_form" class="col-form" action="{{ route('articles.update' ,$article['id']) }}" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}

							<div class="col-lg-12">

                                <div class="blog-img">
                                    <img style="width:100%" src="{{asset($article->Image)}}" alt="">
                                </div>

								<div class="form-group">
									<input type="file" class="form-control" name="image" placeholder="Image" value="{{$article['image']}}">
									<span style="color: red">@error('image')        {{$image}}    @enderror</span><br>
								</div>
							</div>

							<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="titre" placeholder="Titre" value="{{$article['Titre']}}">
									<span style="color: red">@error('titre')        {{$message}}    @enderror</span><br>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="sous_titre" placeholder="Sous titre" value="{{$article['SousTitre']}}">
									<span style="color: red">@error('sous_titre')        {{$message}}    @enderror</span><br>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" class="form-control" name="chapeau" placeholder="Chapeau" value="{{$article['Chapeau']}}">
									<span style="color: red">@error('chapeau')        {{$message}}    @enderror</span><br>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<textarea class="form-control" name="corp" rows="4" placeholder="Corp" value=""> {{$article['Corp']}} </textarea>
									<span style="color: red">@error('corp')        {{$message}}    @enderror</span><br>
								</div>
							</div>
							
							<div class="col-lg-12">
								<div class="form-group" style="background-color: white">
									<textarea class="form-control" id="summernote" name="chute" rows="4" placeholder="Chute" value="">  {{$article['Chute']}}  </textarea>
									<span style="color: red">@error('chute')        {{$message}}    @enderror</span><br>
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
		  placeholder: 'Chute (*)',
		  tabsize: 2,
		  height: 500,
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
