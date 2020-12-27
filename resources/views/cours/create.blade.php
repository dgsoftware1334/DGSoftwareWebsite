@extends('layouts.app', [
    'namePage' => 'Ajouter Cours',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title">Ajouter un cours</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body ">
           <form method="POST" action="{{ url('/cours') }}" autocomplete="off" enctype="multipart/form-data">
              @csrf
              @method('put')
              @include('alerts.success')
              @include('alerts.errors')

              <div class="form-group">
                <label for="exampleFormControlInput1">Titre de cours</label>
                <input type="text" class="form-control @error('cours') is-invalid @enderror" name="cours" id="exampleFormControlInput1" value="{{old('cours')}}" autofocus required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect2">Pour</label>
                <select class="form-control  @error('offre') is-invalid @enderror" multiple="multiple" name="offre" value="{{old('offre')}}" required>
                  <option align="center" class=" bg-warning" style="font-size:15px; font-weight:bold">--------------------------------------------------------Offres--------------------------------------------------------</option>
                 
                 @foreach($offres as $o)
                 <option value="{{$o->id}}"  {{(old('offre') ==$o->id) ? 'selected' : '' }}> {{$o->titre}} </option>
                 @endforeach
               </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Durée</label> 
                <input type="time" class="form-control @error('durée') is-invalid @enderror" value="{{old('durée')}}" name="durée" required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Catégorie</label>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="catégories" id="exampleRadios1" value="Cours" value="{{old('catégories')}}" checked required>
                        Cours
                        <span class="form-check-sign"></span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="catégories" id="exampleRadios2" value="Cas clinique" value="{{old('catégories')}}" required>
                         Cas clinique
                        <span class="form-check-sign"></span>
                    </label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label> 
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" value="{{old('description')}}" rows="5" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Vignette</label> 
                <div class="custom-file">
                  <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" value="{{old('thumbnail')}}" name="thumbnail" nullable>
                  <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                  
                </div>
              </div>
               <div class="card-footer " align="center">
                <button type="submit" class="btn btn-primary btn-round">{{__('Enregistrer')}}</button>
                <a href="{{  url('cours')}}" class="btn btn-default btn-round">Annuler</a>
              </div>
              <hr class="half-rule"/>

           </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection