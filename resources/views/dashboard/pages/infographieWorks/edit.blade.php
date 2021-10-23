@extends('index')



@section('contenu')

 
	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">

				 

				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Modifier {{$info_work->infographieService->nom}}</span></h4>
					</div>
                    
                    <a href="{{url('dashboard/'.$info_work->infographieService->id.'/infographieWork')}}">
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
										<h2 class="head-after head-after-white">{{$info_work->infographieService->nom}}</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="get-quote-item">

						<form id="get_quote_form" class="col-form" action="{{ route('infographieWorks.update' ,$info_work['id']) }}" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}

							<div class="col-lg-12">

                                <div class="blog-img">
                                    <img style="width:100%" src="{{asset($info_work->image)}}" alt="">
                                </div>

								<div class="form-group">
									<input type="file" class="form-control" name="image" placeholder="Image" value="{{$info_work['image']}}">
									<span style="color: red">@error('image')        {{$image}}    @enderror</span><br>
								</div>
							</div>

							<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="nom" placeholder="Nom (*)" value="{{$info_work['nom']}}">
										<span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-12">
									<div class="form-group">
										<select class="form-select col-lg-12" name="infoService" aria-label="Default select example">
                                            <option value="{{$info_work->infographieService->id}}" selected>{{$info_work->infographieService->nom}}</option>
                                            @foreach($info_services as $service)
                                                @if($service->id != $info_work->infographieService->id)
                                                <option value="{{$service->id}}">{{$service->nom}}</option>
                                                @endif
                                            @endforeach
                                        </select>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group" style="background-color: white">
										<textarea class="form-control" id="summernote" name="details" rows="4" placeholder="details (*)" value="">{{$info_work->details}}</textarea>
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
		  placeholder: 'Détails (*)',
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
