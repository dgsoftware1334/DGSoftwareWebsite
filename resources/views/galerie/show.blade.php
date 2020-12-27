@extends('layouts.admin')

@section('content')


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
  width: 850px;
  height: 1500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  font-size: 20px;
  margin-top: 10px;
  border-radius: 4px 4px 4px 4px;
  padding-right: 15px;
  padding-left: 15px;
  color: black;
}

</style>


<section id="main-content">
 <section class="wrapper">

                 



                             <div class="card" style="padding-top: 5px;" >
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
                             	
                             	<h2 style="padding-bottom: 5px; background-color: #9c1210; color: white;"><b>{{$galeries->titre}}</b></h2>
                             	
                                <div class="row">
                                  <div class="col-sm-12" style="text-align: center;">
                                    
                                    <img src="{{asset('/storage/public/img/Galerie/'.$galeries->main_image)}}" height="200px" width="200px" >
                                
                                  </div>
                                  
                                </div>

                                 <div class="row">
                                  <div class="col-sm-12">
                                    <b><hr></b>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-4">
                                    <b>Description:</b>
                                  </div>
                                  <div class="col-sm-8 pull-left">
                                    {{$galeries->description}}
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                    <b><hr></b>
                                  </div>
                                </div>
                              

                                 <div class="row">
                                  <form action="{{ url('/liens/'.$galeries->id) }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                  <div class="col-sm-4">
                                    <label for="myfile">Ajouter un fichier:</label>
                                    <input type="file" name="files" id="fileToUpload">
                                  </div>
                                  <div class="col-sm-8">
                                    <input type="submit" class="btn btn-success" value="Confirmer">
                                  </div>
                                   </form>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                    <b><hr></b>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                    <b>Photo</b>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                    @foreach($lien as $l)
                                    
                                    
                                    <form action="{{ url('/delete/photo/'.$l->id.'/'.$galeries->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cette photo?')">
					                  {{ csrf_field() }}
					                  {{ method_field('DELETE') }}
					                  <div class="col-sm-3">
					                  <img src="{{asset('/storage/public/img/Galerie/'.$l->nom)}}" width="150" height="180" /><br>
					                    <button class="btn btn-danger" type="submit" title="Supprimer"><i class="fa fa-trash-o "></i></button>
					                  </div>
					      			 </form>
                                   
                                    @endforeach
                                    <div class="col-12 ">
	                                    <div class="btn-group float-right text-right">
	                                      {{ $lien->links() }}
	                                    </div>
                                    </div>
                                </div>
                                
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                    <b><hr></b>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                    <b>Videos</b>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                     <video width="200" height="240" controls>
                                        <source src="#" type="video/mp4">
                                        <source src="#" type="video/ogg"> 
                                      </video>
                                  </div>
                                </div>
                                

                                <div class="row">
                                  <div class="col-sm-12">
                                    <b><hr></b>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                    <b>Autres</b>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-6">
                                   
                                </div>
                                </div>

                                 <div class="row">
                                  <div class="col-sm-12">
                                    <b><hr></b>
                                  </div>
                                </div>
                                <footer>
                                	<a href="#" class="btn btn-info">Galerie</a>
                                </footer>
    
                  
          
        </div>
     
      
      
   





</section>    
   </section>   

@endsection