@extends('index')




@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])

	<!-- START WHO WE ARE -->
	<div id="who-we-are">
	<div id="team">
		<div class="container">
			<div class="row d-flex align-items-center">


				@foreach($fondateurs as $fondateur)
				<div class="col-lg-4">
					<div class="team-item">
						<div class="team-img">
							<img style="height:400px" src="{{asset($fondateur->Image)}}" alt="">
						</div>
						<div class="team-content">
							<div class="team-header">
								<h3>{{$fondateur->Nom}}  {{$fondateur->Prenom}}</h3>
								<p>{{$fondateur->Specialite}}</p>

							</div>
							<div class="team-footer">
								<ul class="smedia-icons animated fadeInUp">
									<li><button type="button" data-toggle="modal" data-target="#example{{$fondateur}}ModalCenter"><i class="mdi mdi-details mdi-bg mdi-bg-sm theme-btn-default"></i></button></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="example{{$fondateur}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$fondateur}}ModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="example{{$fondateur}}ModalLongTitle">Profile de fondateur</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- START PORTFOLIO -->
						    <div class="container emp-profile">
							
								<div class="row">
									<div class="col-md-4">
										<div class="profile-img">
											<img id="image" class="rounded mx-auto d-block" src="{{asset($fondateur->Image)}} " alt=""/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="profile-head">
													<h5>
														{{$fondateur->Nom}} {{$fondateur->Prenom}}
													</h5>
													<h6>
														{{$fondateur->Specialite}}
													</h6>
													<p class="proile-rating">RANKINGS : <span>8/10</span></p>
											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="profile-work">
											<p style="color:black; margin-top:-0.5px">Details</p>
											<p>{{$fondateur->Details}}</p>
										</div>
									</div>
									<div class="col-md-8">
										<div class="tab-content profile-tab" id="myTabContent">
											<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												<div class="row">
													<div class="col-md-6">
														<label>Nom</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Nom}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Prenom</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Prenom}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Email</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Email}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>N° Téléphone</label>
													</div>
													<div class="col-md-6">
														<p>0{{$fondateur->Telephone}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Spécialté</label>
													</div>
													<div class="col-md-6">
														<p>{{$fondateur->Specialite}}</p>
													</div>
												</div>
									        </div>
											
										</div>
									</div>
								</div>
						    </div>
							<!-- END PORTFOLIO -->


					</div>
					</div>
                
				</div>
				</div>
				@endforeach



			</div>
		</div>
	</div>
	<!-- END WHO WE ARE -->

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection

<style>
label{
    color: black;
}
#image{
   
    border: 3px solid rgb(49, 112, 228);
    padding: 0;

}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
