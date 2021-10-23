@extends('index')



@section('contenu')


	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">



				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Nouveau développement</span></h4>
					</div>
					<a href="{{url('dashboard/'.$service->id.'/developpements')}} ">
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
										<h2 class="head-after head-after-white">Développement</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="">

						<form id="get_quote_form" class="col-form" action="{{ route('developpements.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="row">

								

								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="nom" placeholder="Nom (*)" value="{{old('nom')}}">
										<span style="color: red">@error('nom')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-12">
									<div class="form-group">
										<select class="form-select col-lg-12" name="service" aria-label="Default select example">
                                            
                                            
                                            <option value="{{$service->id}}" Selected>{{$service->nom}}</option>
                                            
                                        </select>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group" style="background-color: white">
										<textarea class="form-control" id="summernote" name="details" rows="4" placeholder="details (*)" value="">{{old('details')}}</textarea>
										<span style="color: red">@error('details')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <<div class="col-lg-12">
									<div class="form-group">
                                        <label style="color: white">Executable</label>
										<input type="file" class="form-control" name="executable" placeholder="Executable">
										<span style="color: red">@error('executable')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            
                                            <div class="row form-group">
                                                <div class="col-12 col-md-12">
                                                    <div class="control-group" id="fields">
                                                        <label class="control-label" for="field1">
                                                            Video (*)      |       Image (*)
                                                        </label>
                                                        <div class="controls">
                                                            <div class="entry input-group upload-input-group">
                                                                <input class="form-control" name="videos[]" type="file">
                                                                <input class="form-control" name="images[]" type="file">
                                                                <button class="btn btn-upload btn-success btn-add" type="button">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                  

								<div class="col-lg-12" style="margin-top: 20px">
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

    <style>
        .card {
  margin-top: 100px;
}
.btn-upload {
    padding: 10px 20px;
    margin-left: 10px;
}
.upload-input-group {
    margin-bottom: 10px;
}

.input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) {
  height: 45px;
}
</style>
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
        
        $(function () {
            $(document).on('click', '.btn-add', function (e) {
                e.preventDefault();

                var controlForm = $('.controls:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash"></span>');
            }).on('click', '.btn-remove', function (e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
        });

		
	</script>
	@endsection
