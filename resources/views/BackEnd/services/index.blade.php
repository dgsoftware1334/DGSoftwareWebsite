@extends('layouts.main')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt mb">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i> SERVICES</h3>
            @if(session()->has('success'))
            <div class="alert alert-success"><b>C'est fait! </b><strong>{{session()->get('success')}} </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> 
            @elseif(session()->has('error'))
              <div class="alert alert-danger" role="alert">
               <strong>{{session()->get('error')}} </strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
              </div>
            @endif
            <div align="right">
            	<a href="{{url('services/create')}}" type="button" class="btn btn-theme03"><i class="fa fa-plus-square"></i> Ajouter Service</a>
            </div>
            <br>
            @foreach($services as $service)
            <div class="col-lg-4 col-md-4 col-sm-12" style="padding-bottom: 10px;"> 
              <div class="dmbox" style="height:400px;">
              	<div align="right">  
		              <form  action="{{ url('services/'.$service->id)}}" method="post" onsubmit="return confirm('Voulez-vous vraiment supprimer le service: {{$service->titre}} avec sa galerie et ses commandes?')">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
		              	<a href="{{url('services/'.$service->id.'/edit')}}" type="button" class="btn btn-theme02">
		              		<i class="fa fa-edit"></i>
		              	</a>
		              	<button type="submit" class="btn btn-theme04"><i class="fa fa-trash-o"></i></button>
		              	
		              </form>
		            </div>

              	<div class="service-icon">
                  <a  href="{{url('services/'.$service->id)}}" class="">
                  	<img src="{{asset('storage/'.$service->photo)}}" class="dm-icon img-thumbnail" alt="photo de couverture du service">
                  </a>
                </div>
                <h4 style="color:black;">{{$service->id}}. {{$service->titre}}</h4>
                <p>{{$service->description}}</p>
                <div class="footer">
                	<a href="{{url('services/'.$service->id)}}" type="button" class="btn btn-primary"><i class="fa fa-picture-o"></i> Galerie</a>
                </div>
	              
              </div>
            </div>
            @endforeach
            <!-- end dmbox -->
             
          </div>
          <!--  /col-lg-12 -->
        </div>
         
    </section>
    <!-- /wrapper -->
</section>

@endsection