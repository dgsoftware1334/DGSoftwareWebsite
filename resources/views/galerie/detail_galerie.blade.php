@extends('layouts.admin')

@section('content')

 <section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              @if (session('success'))
                      <center>  <div class="alert alert-success">
                           <b> {{ session('success') }} </b>
                        </div> </center>
              @endif

              @if (session('delete'))
                      <center>  <div class="alert alert-danger">
                           <b> {{ session('delete') }} </b>
                        </div> </center>
              @endif

              @if ($errors->any())
                       <center> <div class="alert alert-danger">
                            <ul style="list-style-type:disc;">
                                @foreach ($errors->all() as $error)
                                    <b>Une erreur est survenue!</b>
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div></center>
              @endif

              <table class="table table-striped table-advance table-hover" width="100%">
                <h4><i class="fa fa-users"></i> Services <span class="pull-right" style="margin-right: 20px;  margin-top: -10 px;">

                  
                 
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Ajouter</a></span></h4>

                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Titre</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Description</th>
                    <th><i class="fa fa-bookmark"></i>Prix</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($services as $service)
                  <tr>
                    <td>
                      <a href="basic_table.html#">{{ $service->titre }}</a>
                    </td>
                    <td class="hidden-phone"> describe</td>
                    <td>{{ $service->prix }} DA</td>
                    <td><span class="label label-info label-mini"></span></td>
                    <td>

                      <form action="{{ url('/delete/service/'.$service->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer ce service?')">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                      <a class="btn btn-success btn-ms" title="Details"><i class="fa fa-align-justify" data-toggle="modal" data-target="#ShowModel-<?php echo $service->id;  ?>" ></i></a>
                      <a class="btn btn-primary btn-ms" data-toggle="modal" data-target="#Mymodel-<?php echo $service->id;  ?>" title="Modifier"><i class="fa fa-pencil"></i></a>
                      <button class="btn btn-danger btn-ms" type="submit" title="Supprimer"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                </form>

                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>





      </section>
    </section>

@endsection


