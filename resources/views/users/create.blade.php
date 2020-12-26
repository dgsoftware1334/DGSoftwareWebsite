@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Nouveau utilisateur',
    'activePage' => '',
    'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
  </div>


  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__("Ajouter Nouveau Gérant")}}</h5>
          </div>
          <div class="card-body">
          	
            <form method="post" action="{{ route('profile.store') }}" autocomplete="off" enctype="multipart/form-data">
              @csrf
              @method('put')
              @include('alerts.success', ['key' => 'password_status'])
              @include('alerts.success')
              @include('alerts.errors')
              <div class="row">
              </div>
                <div class="row">
                	<div class="col-md-3">
                		 <label style="font-size: 14px; font-weight:bold; color: #C49052;">{{__(" Nom")}}</label>
                    </div>
                    <div class="col-md-7 pr-1">
                        <div class="form-group">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Votre nom complet" value="{{ old('name') }}">
                                @include('alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                </div>
                <div class="row">
              		<div class="col-md-3">
               			<label style="font-size: 14px; font-weight:bold; color: #C49052;">{{__(" Adresse mail")}}</label>
               		</div>
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email pour s'authentifier" value="{{ old('email') }}">
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                </div>
                <div class="row">
               	<div class="col-md-3">
               		 <label style="font-size: 14px; font-weight:bold; color: #C49052;">{{__("Mot de passe")}}</label>
                 </div>
                <div class="col-md-7 pr-1">
                  <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                   <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('********') }}" type="password" name="password" required>
                    @include('alerts.feedback', ['field' => 'password'])
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-3">
               	<label style="font-size: 14px; font-weight:bold; color: #C49052;">{{__(" Confirmer Mot de passe")}}</label>
       	      </div>
              <div class="col-md-7 pr-1">
                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <input class="form-control" placeholder="{{ __('********') }}" type="password" name="password_confirmation" required>
                </div>
              </div>
            </div>
            <div class="row">
            	<div class="col-md-3">
               		<label style="font-size: 14px; font-weight:bold; color: #C49052;">{{__(" Role")}}</label>
       	      	</div>
              	<div class="col-md-7 pr-1">
                    <div class="form-group">
                                <div class="form-check form-check-radio form-check-inline">
								    <label class="form-check-label">
								        <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="exampleRadios1" value="Admin">
								        Admin
								        <span class="form-check-sign"></span>
								    </label>
								</div>
								<div class="form-check form-check-radio form-check-inline">
								    <label class="form-check-label">
								        <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="exampleRadios2" value="Gérant" checked>
									    Gérant
								        <span class="form-check-sign"></span>
								    </label>
								</div>
                                @include('alerts.feedback', ['field' => 'status'])
                    </div>
                </div>
             </div>
             <div class="row">
             	 <div class="col-md-3">
               		<label style="font-size: 14px; font-weight:bold; color: #C49052;">{{__("Photo de Profil")}}</label>
       	      	</div>
				<div class="col-md-7 pr-1">
					<div class="form-group">
						<div class="custom-file">
					    	<input type="file" accept=".png,.jpg,.jpeg," data-default-file="{{old('profile_photo_path')}}"  class="custom-file-input form-group @error('profile_photo_path') is-invalid @enderror" name="profile_photo_path" value="{{old('profile_photo_path')}}" placeholder="Choisir ..." id="validatedCustomFile">
					    	<label class="custom-file-label" for="validatedCustomFile">Choisir ...</label>
			 			</div>
			 			@include('alerts.feedback', ['field' => 'profile_photo_path'])
					</div>
			 	</div>             	
             </div>
            
              <div class="card-footer " align="center">
                <button type="submit" class="btn btn-success btn-round">{{__('Save')}}</button>
                <a href="{{  url('user')}}" class="btn btn-primary btn-round">Annuler</a>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
          
      </div>
    </div>
     
    </div>
  </div>

@endsection