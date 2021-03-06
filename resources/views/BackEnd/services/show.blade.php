@extends('layouts.main')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Galerie {{$s->titre}}</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- The file upload form used as target for the file upload widget -->
            <form action="{{url('galeries')}}" method="POST" enctype="multipart/form-data">
               {{ csrf_field()}}
               <input type="hidden" name="service_id" value="{{$s->id}}" />
              <div class="row fileupload-buttonbar">
                <div class="col-lg-8">
                  <!-- The fileinput-button span is used to style the file input field as button -->
                  <span class="btn btn-success">
                  	<input type="file" name="files[]" multiple>
                  </span>
                  
                  <button type="submit" class="btn btn-theme start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Télécharger</span>
                  </button>
                  <button type="reset" class="btn btn-theme02 cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Effacer</span>
                  </button>
                     
                </div> 
              </div>
              <!-- /row -->
              
            </form>
            <br>
            <div class="content-panel">
              <div class="panel-body">
              	<h4><i class="fa fa-comments-o"></i> Remarques</h4>
                <ul>
                  <li>La taille de fichier maximale pour les importations est de <strong> 2 Mo </strong>.</li>
                  <li>Seuls les fichiers image (<strong>JPG, GIF, PNG </strong>) sont autorisés.</li>
                  <li>Vous pouvez <strong> glisser-déposer </strong> des fichiers depuis votre bureau sur cette page Web.</li> 
                  
                </ul>
              </div>
            </div>
            <!-- /panel -->
          
          </div>
        </div>


        <hr>
        <!--Affichage-->
        <div class="row mt">
	        @foreach($photos as $photo)
	          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc" style="padding-bottom: 10px;">
	            <div class="project-wrapper">
	              <div class="project">
	                <div class="photo-wrapper">
	                  <div class="photo">
	                    <a href="{{url('storage'.$photo->main_image)}}" class="fancybox">
	                    	<img class="img-responsive" src="{{url('storage/'.$photo->main_image)}}" alt="" style="height:300px; width:100%;">
	                    </a>
	                  </div>
	                  <div class="overlay"></div>
	                </div>
	              </div>
	            </div>
	          </div>
	        @endforeach   
          <!-- col-lg-4 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@endsection