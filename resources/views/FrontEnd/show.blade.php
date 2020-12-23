@extends('FrontEnd.master')



@section('dynamique')

<style type="text/css">
  .caard{
    margin-top: 200px;
    margin-bottom: 200px;
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3);
    padding-top: 20px;
    padding-bottom: 20px;
  }
  .column{
    margin: 3px 3px 3px 3px;
    width: 570px;
    height: 500px;

  }
   .card{
       text-align: justify-all;
   }
   .gal{
    margin-top: 1px;
   }
</style>

    <div class="container caard">

      <h2 style="text-align: center;">{{$galerie->titre}}</h2>
  <div class="row mt">
  
    <div class="container">
      <div class="row">
    @foreach($liens as $l)
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc gal" >
     <a class="btn btn-primary btn-ms" data-toggle="modal" data-target="#Mymodel-<?php echo $l->id;  ?>" ><img src="{{asset('/storage/public/img/Galerie/'.$l->nom)}}" height="300px" width="300px" /></a> 
     
      
    </div>

    @endforeach
                                 
 </div>

  </div>

                      <div class="container">
                         <div class="row">
                            <div class="col-sm-4 ">
                                      <div class="btn-group">
                                        {{ $liens->links() }}
                                      </div>
                                  </div>                    
                            
                          </div>
                          </div>
    </div>
 </div>

   <!--   SHOW   IMAGE-->
 @foreach($liens as $l)

                  <!-- Modal -->
  <div class="modal fade" id="Mymodel-<?php echo $l->id; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><b>&times;</b></button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          
          

                                <div class="row">
                                  <div class="col-sm-12">
                                   <center><img src="{{asset('/storage/public/img/Galerie/'.$l->nom)}}" height="500px" width="500px" /></center> 
                                  </div>
                                </div>

             
        
          
      </div>
        
      </div>
      
      
    </div>
  </div>


@endforeach





@endsection