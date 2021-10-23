@extends('index')


@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])

<!-- START BLOG -->
	<!-- START BREADCRUMB -->
    <div id="breadcrumb" class="breadcrumb-bg">
        <div class="container">
            <h2 class="head-after">Contactez-Nous</h2>
            <nav>
                <ul>
                    <li class="breadcrumb-item"><a href="index.html"><i class="mdi mdi-home"></i> Acceuil</a></li>
                    <li class="breadcrumb-item active">Contactez-Nous</li>
                    
                </ul>
            </nav>
        </div>
    </div>
	<!-- END BREADCRUMB -->
 	<!-- START CONTACT US -->
     <div id="contact-us">

		<div class="col-lg-12 contact-us-col">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62275.766696495986!2d-1.3259834460694893!3d34.88217972099931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78c8258f86a3af%3A0xf7f41737ca2e9a06!2zQsOpbmkgQm91YmzDqG5lLCBNYW5zb3VyYWg!5e0!3m2!1sfr!2sdz!4v1633880049943!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<div class="container">
			<div id="bottom-contact-us" class="row d-flex align-items-center">

				<div class="col-lg-5">
					<div class="bottom-contact-us-item">

						<div class="bottom-contact-us-item-info">
							<div class="card">
								<div class="bottom-contact-us-item-info-head">
									<h3 class="head-after">Contact Info</h3>
								</div>
								<div class="bottom-contact-us-item-info-div">
									<h6><i class="mdi mdi-map-marker mdi-bg mdi-bg-sm-sm theme-bg-dark"></i> Address</h6>
									<p>{{$presentation[0]->address}}.</p>
								</div>
								<div class="bottom-contact-us-item-info-div">
									<h6><i class="mdi mdi-phone mdi-bg mdi-bg-sm-sm theme-bg-dark"></i> N° Téléphone</h6>
									<p>{{$presentation[0]->telephone}}</p>
								</div>
								<div class="bottom-contact-us-item-info-div">
									<h6><i class="mdi mdi-email-open mdi-bg mdi-bg-sm-sm theme-bg-dark"></i> Email</h6>
									<p>{{$presentation[0]->email}}</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-7">
					<div class="bottom-contact-us-item">
                    @if (session('messageAjt'))
                            
                        <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                            Votre <strong>message</strong> a été envoyer 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    @endif
						<form id="contact_form" class="col-form" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
									 <div class="form-group">
                                        <label for="exampleFormControlFile1">Choisir une image</label>
                                        <input type="file" class="form-control" name="image">
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
										<input type="text" class="form-control" name="telephone" placeholder="N° Téléphone (*)" value="{{old('telephone')}}">
                                        <span style="color: red">@error('telephone')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control"  name="email" placeholder="Email (*)" value="{{old('email')}}">
                                        <span style="color: red">@error('email')        {{$message}}    @enderror</span><br>
									</div>
								</div>

                                <div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control"  name="sujet" placeholder="Sujet" value="{{old('sujet')}}">
                                        <span style="color: red">@error('sujet')        {{$message}}    @enderror</span><br>
									</div>
								</div>
								
								<div class="col-lg-12">
									<div class="form-group">
										<textarea class="form-control" name="message" rows="4" placeholder="Message (*)">{{old('message')}}</textarea>
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
	<!-- END CONTACT US --
						
<!-- END PORTFOLIO -->



<!-- End WHO WE ARE -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection 

@section('scripts')
<script>
$(document).ready(function() {
    $("#input-folder-1").fileinput({
        browseLabel: 'Select Folder...'
    });
});

setTimeout(function(){
  $('#alert').remove();
}, 5000);
</script>
@endsection