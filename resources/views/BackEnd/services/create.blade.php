@extends('layouts.main')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> AJOUTER SERVICE</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
                <form action="{{url('services')}}" class="cmxform form-horizontal style-form" id="commentForm" method="post" enctype="multipart/form-data">
                    {{ csrf_field()}}
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nom Service*</label>
                    <div class="col-lg-10">
                      <input class="form-control @error('titre') is-invalid @enderror" name="titre" minlength="2" type="text" value="{{old('titre')}}" autofocus required/>
                    @error('titre')
                        <div class="has-error">
                              <p class="help-block"><strong>{{ $message }}</strong></p> 
                        </div>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Description*</label>
                    <div class="col-lg-10">
                       <textarea class="form-control @error('titre') is-invalid @enderror" name="description" rows="4" required>{{old('description')}}</textarea>
                    @error('description')
                        <div class="has-error">
                            <p class="help-block"><strong>{{ $message }}</strong></p> 
                        </div>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Prix (optional)</label>
                    <div class="col-lg-10">
                      <input type="number" min="0" name="prix" class="form-control @error('prix') is-invalid @enderror" value="{{old('prix')}}"/>
                    @error('prix')
                        <div class="has-error">
                            <p class="help-block"><strong>{{ $message }}</strong></p> 
                        </div>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group">  
                    <label for="ccomment" class="control-label col-lg-2">Photo de couverture*</label>
                    <div class="col-lg-10">
                      <input type="file" accept=".png, .jpg, .jpeg" data-default-file="{{old('photo')}}" class="form-group  @error('photo') is-invalid @enderror" name="photo"  value="{{old('photo')}}" required/>
                        @error('photo')
                          <div class="has-error">
                              <p class="help-block"><strong>{{ $message }}</strong></p> 
                           </div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Enregistrer</button>
                      <a href="{{url('/services')}}" class="btn btn-theme04" type="button">Annuler</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
</section>
@endsection
