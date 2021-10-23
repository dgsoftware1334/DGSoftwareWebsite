@extends('index')



@section('contenu')


	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container myPagesStyle">
			<div class="row d-flex ">



				<div class="col-lg-3">

					<div>
						 <h4 class="myPagesStyleText"><span>Nouveau message</span></h4>
					</div>
					<a href="{{url('messagesRecu')}} ">
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
										<h2 class="head-after head-after-white">Message</h2>
									</div>
								</div>
							</div>

				<div class="col-lg-12">
					<div class="get-quote-item">

						<form id="get_quote_form" class="col-form" action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<div class="row">

								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="contact_email" placeholder="A:" value="{{old('contact_email')}}">
										<span style="color: red">@error('contact_email')        {{$message}}    @enderror</span><br>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="sujet" placeholder="Sujet:" value="{{old('sujet')}}">
										<span style="color: red">@error('sujet')        {{$message}}    @enderror</span><br>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<textarea class="form-control" name="message" rows="4" placeholder="Message" value="">{{old('message')}}</textarea>
										<span style="color: red">@error('message')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								<div class="col-lg-12">
									<button type="submit" class="btn theme-btn-default btn-icon">
										<span>Envoyer</span>
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

@stop
