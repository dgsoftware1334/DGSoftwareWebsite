@extends('index')




@section('contenu')

@include('layouts/partials/_nav',['AllSecteurs','AllPoles'])


<div id="breadcrumb" class="breadcrumb-bg">
    <div class="container">
        <h2 class="head-after">Portfolio</h2>
        <nav>
            <ul>
                <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="mdi mdi-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
            </ul>
        </nav>
    </div>
</div>
	<!-- END BREADCRUMB -->

	<!-- START PORTFOLIO -->
	<div id="portfolio">
		<div class="container">
			<div class="row">

                <div class="col-lg-12 mb-30px text-center">
					<div class="filter-btn-group" data-toggle="buttons">
						<label class="btn btn-link theme-btn-link-default active">
							<input type="radio" class="radio-none" name="shuffle-filter" value="all" checked="checked">
							All
						</label>
                        @foreach($services as $service)
						<label class="btn btn-link theme-btn-link-default">
							<input type="radio" class="radio-none" name="shuffle-filter" value="{{$service->nom}}">
							{{$service->nom}}
						</label>
                        @endforeach

                        @foreach($services_info as $service)
						<label class="btn btn-link theme-btn-link-default">
							<input type="radio" class="radio-none" name="shuffle-filter" value="{{$service->nom}}">
							{{$service->nom}}
						</label>
                        @endforeach

					</div>
				</div>
			</div>

			<div class="row theme-shuffle">

                @foreach($services as $service)
                    @foreach($service->images as $image)
                    <figure class="shuffle-image-item col-3" data-groups="[&quot;{{$service->nom}}&quot;]">
                        <div class="shuffle-inner-warp">
                            <div class="shuffle-inner-img">
                                <img src="{{asset($image->image)}}" alt="">
                                <div class="shuffle-inner-content">
                                    <a class="mfpclick" href="#image{{$image->id}}">
                                        <i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="image{{$image->id}}" class="mfp-hide">
                            <a href="{{asset($image->image)}}"></a>
                            <a href="{{asset($image->image)}}"></a>
                        </div>
                    </figure>
                    @endforeach
                @endforeach

                @foreach($services_info as $service)
                    @foreach($service->images as $image)
                    <figure class="shuffle-image-item col-3" data-groups="[&quot;{{$service->nom}}&quot;]">
                        <div class="shuffle-inner-warp">
                            <div class="shuffle-inner-img">
                                <img src="{{asset($image->image)}}" alt="">
                                <div class="shuffle-inner-content">
                                    <a class="mfpclick" href="#image{{$image->id}}">
                                        <i class="mdi mdi-plus mdi-bg mdi-bg-sm theme-btn-default"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="image{{$image->id}}" class="mfp-hide">
                            <a href="{{asset($image->image)}}"></a>
                            <a href="{{asset($image->image)}}"></a>
                        </div>
                    </figure>
                    @endforeach
                @endforeach




				<div class="col-1 theme-shuffle-result"></div>
			</div>






	</div>
    </div>
	<!-- END WHO WE ARE -->

@endsection

