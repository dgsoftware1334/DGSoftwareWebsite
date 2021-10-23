@extends('index')



@section('contenu')

 
	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">

				 

				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Modifier presentation</span></h4>
					</div>
                    
                    <a href="{{url('presentationsDash')}} ">
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
										<h2 class="head-after head-after-white">Presentations</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="">

						<form id="get_quote_form" class="col-form" action="{{ route('presentations.update' ,$presentations['id']) }}" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}

							<div class="col-lg-12">
                                
                                <div class="blog-img">
                                    <img style="width:100%" src="{{asset($presentations->Image)}}" alt="">
                                </div>

								<div class="form-group">
									<input type="file" class="form-control" name="image" placeholder="Image" value="{{$presentations->Image}}">
									<span style="color: red">@error('image')        {{$image}}    @enderror</span><br>
								</div>
							</div>

							<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" name="nom" placeholder="Nom" value="{{$presentations['Nom']}}">
									<span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
								</div>
							</div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Adresse (*)" value="{{$presentations['address']}}">
                                    <span style="color: red">@error('address')        {{$message}}    @enderror</span><br>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telephone" placeholder="N° Téléphone" value="{{$presentations['telephone']}}">
                                    <span style="color: red">@error('telephone')        {{$message}}    @enderror</span><br>
                                </div>
                            </div>
                 
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email (*)" value="{{$presentations['email']}}">
                                    <span style="color: red">@error('email')        {{$message}}    @enderror</span><br>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
								<div class="form-group">
									<input type="text" class="form-control" name="slogan" placeholder="Slogan" value="{{$presentations['Slogan']}}">
									<span style="color: red">@error('slogan')        {{$message}}    @enderror</span><br>
								</div>
							</div>

                            <div class="col-lg-12">
								<div class="form-group">
									<textarea class="form-control" name="notion" rows="5" placeholder="Déscription de la société (*)" value="">  {{$presentations['Notion']}}  </textarea>
									<span style="color: red">@error('notion')        {{$message}}    @enderror</span><br>
								</div>
							</div>
							
							<div class="col-lg-12">
								<div class="form-group" style="background-color: white">
									<textarea  class="form-control" id="summernote" name="details" rows="8" placeholder="Détails" value="">  {{$presentations['Description']}}  </textarea>
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
