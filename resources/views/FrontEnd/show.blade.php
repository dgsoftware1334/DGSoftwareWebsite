@extends('FrontEnd.master')

@section('catchPhrase')
            <h1 class="white typed">About Us</h1>
@endsection
@section('dynamique')



    <div class="container" style="margin-top: 20px; margin-bottom: 30px;">
  <div class="row mt">
  
    <div class="container">
      <div class="row">
    @foreach($liens as $l)
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc gal" >
     <a href="#" data-toggle="modal" data-target="#Mymodel-<?php echo $l->id;  ?>" title="Modifier"> <img src="{{asset('/storage/public/img/Galerie/'.$l->nom)}}" height="300px" width="" /></a>
     
      
    </div>
    @endforeach
                          
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary"> {{ $liens->links() }}</button>
                                </div>
                              </div>

</div>
</div>
  
 

   <!--   SHOW   IMAGE-->

<div class="container">
                  <!-- Modal -->
  <div class="modal fade" id="Mymodel-<?php echo $lien->id; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifier employé</h4>
        </div>
        <div class="modal-body">
          
                     
        
          
        </div>
        
      </div>
    
      
    </div>
  </div>

</div>

 </div>
</div>




@endsection