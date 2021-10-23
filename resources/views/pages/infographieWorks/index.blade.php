@extends('index')

@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])

<!-- START BLOG -->
	<!-- START BREADCRUMB -->
<div id="breadcrumb" class="breadcrumb-bg">
    <div class="container">
        <h2 class="head-after">{{$info_service->nom}}</h2>
        <nav>
            <ul>
                <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="mdi mdi-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item"><a href="{{route('services.index')}}">services</a></li>
                <li class="breadcrumb-item "><a href="{{route('infographieServices.index')}}">services d'infographie</a></li>
                <li class="breadcrumb-item active">{{$info_service->nom}}</</li>
            </ul>
        </nav>
    </div>
</div>
	<!-- END BREADCRUMB -->




     <!-- START WHO WE ARE -->
<div id="who-we-are">

	<div id="team">
		<div class="container">

            @if (session('commandeAjt'))
                            
            <div id="alert" class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                Votre <strong>commande</strong> a été effectuer, Nous vous contacterons dans les prochaines heures.<br/>Merci. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endif

			<div class="row d-flex align-items-center">

                <div class="container">
                    <div class="row float-right">
                        <a href="{{url('commandes/'.$info_service->id.'/createe')}} " class="btn btn-primary btn-lg" style="margin-buttom: 17%;">Commander votre {{$info_service->nom}}</a>
                       
                    </div>
                </div>

				@foreach($info_works as $work)
				<div class="col-lg-3">
					<div class="team-item">
						<div class="team-img">
							<img style="height:300px" src="{{asset($work->image)}}" alt="">
						</div>
						<div class="team-content">
							<div class="team-header">
								<h3>{{$work->nom}}</h3>

							</div>
							<div class="team-footer">
								<ul class="smedia-icons animated fadeInUp">
									<li><button type="button" data-toggle="modal" data-target="#example{{$work}}ModalCenter"><i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i></button></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

                <!-- Modal -->
				<div class="modal fade" id="example{{$work}}ModalCenter" tabindex="-1" role="dialog" aria-labelledby="example{{$work}}ModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="example{{$work}}ModalLongTitle">détails de {{$work->infographieService->nom}}</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- START PORTFOLIO -->

                        <div class="service-item-single">
							<div class="row">
								<div class="col-md-6">
									<img src="{{asset($work->image)}}" style="width:350px; height:300px" alt="">
								</div>
								<div class="col-md-6">
                                    <h4>{{$work->nom}} </h4>
									<p class="mb-30px">{!!$work->details!!}</p>
                                    <a href="{{url('commandes/'.$info_service->id.'/create')}} " class="btn btn-primary btn-lg" style="margin-buttom: 17%;">Commander votre {{$info_service->nom}}</a>
								</div>


						</div>

						<!-- END PORTFOLIO -->
					</div>
					</div>

				</div>
				</div>

				@endforeach
            </div>
            <div class="container">
             <div class="row float-right">
                <a href="{{url('commandes/'.$info_service->id.'/create')}} " class="btn btn-primary btn-lg" style="margin-buttom: 17%;">Commander votre {{$info_service->nom}}</a>
             </div>
            </div>


           
		</div>
	</div>
</div>


	<!-- END WHO WE ARE -->
<style>


</style>


@endsection
@section('scripts')

<script>

/**$(document).ready(function(){

    /**$("#submitCommande").click(function(event){
      event.preventDefault();
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }});

      let nom = $("input[name=nom]").val();
      let prenom = $("input[name=prenom]").val();
      let adresse = $("input[name=adresse]").val();
      let telephone = $("input[name=telephone]").val();
      let reseau = $("input[name=reseau]").val();
      let email = $("input[name=email]").val();
      let type = $("input[name=type]").val();
      let activite = $("input[name=activite]").val();

      $.ajax({
        url: {{url('commande/store')}},
        type:"post",
        data:{
          nom:nom,
          prenom:prenom,
          adresse:adresse,
          telephone:telephone,
          reseau:email,
          type:type,
          activite:activite,
          email:email,
        },
        success:function(response){
          console.log(response);
          if(response) {
            //$('.success').text(response.success);
            $("#commande")[0].reset();
            alert('successfully submitted')
          }
        },
       });
  });
});
$(function(){
    $('#commande').on('submit', function(e){
        e.preventDefault();
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('input[name="_token"]').val()
          }
        });
        $.ajax({
            url: {{route('commandes.store')}}, //this is the submit URL
            type: 'POST', //or POST
            data: $('#commande').serialize(),
            success: function(data){
                alert('successfully submitted')
            }
        });
    });
});
});**/
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection

