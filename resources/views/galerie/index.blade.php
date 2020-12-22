@extends('layouts.admin')

@section('content')




<style type="text/css">

.gall{
  padding: 5px 50px 0px 115px; 
  height: 230px;
  background-color: #C0C0C0;
  margin: 5px 5px 5px 5px;
  width: 350px;
  font-size: 150px;

}

.gal{

  height: 230px;
  width: 350px;
  background-color: #C0C0C0;
  margin: 5px 5px 5px 5px;



}


.plusicon{
  color: white;

}
.plusicon:hover{
font-size: 160px;
color: #345da7;
}
  
</style>
<section id="main-content">
 <section class="wrapper">




                  @if (session('success'))
                      <center>  <div class="alert alert-success">
                            {{ session('success') }}
                        </div> </center>
                  @endif
                 
                 @if (session('delete'))
                      <center>  <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div> </center>
                @endif
  
        <h3><i class="fa fa-angle-right"></i> Gallery</h3>
        <hr>
    <div class="container">
  <div class="row mt">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc gall" >
      <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle plusicon" ></i></a>
    </div>

    @foreach($galeries as $g)
    <a href="{{ url('Show/galeire/'.$g->id)}}" ><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc gal" style=" background-image: url('../storage/public/img/Galerie/{{$g->main_image}}'); background-size:100%; background-repeat: no-repeat;">
      <div style="  background-color: rgba(0, 0, 255, 0.45); text-align: center;margin-top: 50px;padding-bottom: 5px; background-size: 100%; ">
        <p style="font-size: 25px; color: white;"><b>{{ $g->titre }}</b></p> 

       <form action="{{ url('/delete/galerie/'.$g->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cette galerie?')">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  
                      <a class="btn btn-success" data-toggle="modal" data-target="#Mymodel-<?php echo $g->id; ?>" title="Modifier"><i class="fa fa-pencil"></i></a>
                      <button class="btn btn-danger" type="submit" title="Supprimer"><i class="fa fa-trash-o "></i></button>
                  </div>
       </form>


     
    </div></a>
    @endforeach

  
  </div>
</div>

<!---                                 Ajouter galerie                                -->


 <div class="container">
  
  <!-- Trigger the modal with a button -->
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nouvelle galerie</h4>
        </div>
        <div class="modal-body">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{ route('upload.upload_file')}}" enctype="multipart/form-data">
                      @csrf

                          <div class="form-group ">
                    <label for="titre" class="control-label col-lg-2">Titre</label>
                    <div class="col-lg-10">
                      <input class=" form-control @error('titre') is-invalid @enderror" id="titre" name="titre" type="text" />
                    </div>
                  </div>

                   <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                     <textarea type="text" name="description"  value="{{old('description')}}"></textarea>
                   
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="photo" class="control-label col-lg-2">Photo principal</label>
                    <div class="col-lg-10">
                     <input type="file" name="files" id="fileToUpload">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="prix" class="control-label col-lg-2">Service</label>
                    <div class="col-lg-10">
                      <input list="browsers" name="srvname" class="form-control" value="{{ old('srvname') }}" required>

                            <datalist id="browsers">

                            @foreach($services as $s)
                                <option value="{{ $s->titre }}">

                            @endforeach

                            </datalist>
                    </div>
                  </div>
                  
                  
          
        </div>
        <div class="modal-footer">
         <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  
</div>




</section>    
   </section>   

@endsection