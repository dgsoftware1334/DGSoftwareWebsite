@extends('index')



@section('contenu')


	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">



				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Nouveau Image</span></h4>
					</div>
					<a href="{{url('dashboard/'.$service->id.'/portfolio_dev')}} ">
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
										<h1 class="head-back-light">Nouvelle</h1>
										<h2 class="head-after head-after-white">Image</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="get-quote-item">

						<form id="get_quote_form" class="col-form" action="{{ route('portfolios.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="row">

                            <div class="col-lg-12">
									<div class="form-group">
                                        <label style="color: white">Image</label>
										<input type="file" class="form-control" name="image" placeholder="Image">
										<span style="color: red">@error('image')        {{$message}}    @enderror</span><br>
									</div>
								</div>


                                <div class="col-lg-12">
									<div class="form-group">
										<select class="form-select col-lg-12" name="service" aria-label="Default select example">
                                            
                                            
                                            <option value="{{$service->id}}" Selected>{{$service->nom}}</option>
                                            
                                        </select>
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

	@endsection
