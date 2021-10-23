@extends('index')




@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])

@section('contenu')
	<!-- START WHO WE ARE -->
	<div id="who-we-are">
		<div class="container">
			<div class="row d-flex align-items-center">

			
			<div id="blog">
				<div class="container">
					<div class="row">
						@foreach($evenements as $evenement)
						<div class="col-lg-4">
							<div class="blog-item">
							
								<div class="card">
									<div class="blog-img">
										<img src="{{asset($evenement->Image)}}" alt="">
										<div class="blog-icon">
											<a class="mfpclick" href="#blog1">
												<i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
											</a>
										</div>
										
										<div id="blog1" class="mfp-hide">
											<a href="{{asset($evenement->Image)}}"></a>
										</div>
									</div>
									<div class="blog-content">
										<ul class="blog-list">
											<li>Admin</li>
											<li>{{$evenement->created_at->format('d-M-Y')}}</li>
										</ul>
										<div class="blog-title">
											<p>{{$evenement->titre}}</p>
										</div>
										<div class="blog-btn">
											<a href="{{ route('evenements.show',$evenement['id']) }}" class="btn-icon"><span>Voir plus</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach


			</div>
		</div>
	</div>
	<!-- END WHO WE ARE -->
</div>
</div>
</div></div>
</div>
</div>

@stop
