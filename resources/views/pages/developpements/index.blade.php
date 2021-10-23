@extends('index')




@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])
<div id="breadcrumb" class="breadcrumb-bg">
    <div class="container">
        <h2 class="head-after">{{$service->nom}}</h2>
        <nav>
            <ul>
                <li class="breadcrumb-item"><a href="index.html"><i class="mdi mdi-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item"><a href="{{route('services.index')}}"> Services</a></li>
                <li class="breadcrumb-item active">{{$service->nom}}</li>
            </ul>
        </nav>
    </div>
</div>

	<!-- START WHO WE ARE -->
<div id="services">
		<div class="container">
			<div class="row d-flex align-items-center">
			


				@foreach($developpements as $developpement)
				<div class="col-lg-4">
					<div class="service-item">
						<div class="card">
							<div class="service-count-text">
								<span>{{$developpement->service->nom}}</span>
							</div>
							
							<div class="service-icon">
								<i class="flaticon-graphic-design"></i>
							</div>
							<h4>{{$developpement->nom}}</h4>
							<p style="text-align: justify;">
                                @if(strlen($developpement->details) >= 250)
                                {!!$chaine = substr($developpement->details, 0, 250)!!} ...
                                @else
                                {!!$developpement->details!!}
                                @endif
                            </p>
							<a href="{{route('developpements.show', $developpement->id)}} " class="btn btn-icon"><span>Voir plus</span></a>
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

