@extends('index')

@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])

<!-- START BLOG -->
	<!-- START BREADCRUMB -->
<div id="breadcrumb" class="breadcrumb-bg">
    <div class="container">
        <h2 class="head-after">Services d'infographie</h2>
        <nav>
            <ul>
                <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="mdi mdi-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item"><a href="{{route('services.index')}}">services</a></li>
                <li class="breadcrumb-item active">services d'infographie</li>
            </ul>
        </nav>
    </div>
</div>
	<!-- END BREADCRUMB -->
 	<!-- START WHO WE ARE -->

	<!-- START WHO WE ARE -->
<div id="who-we-are">
	<div id="team">
		<div class="container">
			<div class="row d-flex align-items-center">

				@foreach($services_info as $infographie)
				<div class="col-lg-4">
					<div class="team-item">
						<div class="team-img">
							<img style="height:400px" src="{{asset($infographie->image)}}" alt="">
						</div>
						<div class="team-content">
							<div class="team-header">
								<h3>{{$infographie->nom}}</h3>

							</div>
							<div class="team-footer">
								<ul class="smedia-icons animated fadeInUp">
									<li><a href="{{url('infographie/'.$infographie->id.'/produits')}} " ><i class="mdi mdi-details mdi-bg mdi-bg-sm theme-btn-default"></i></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

				@endforeach



			</div>
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

