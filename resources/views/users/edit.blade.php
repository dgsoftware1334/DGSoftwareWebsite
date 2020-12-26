@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => ' Modifier Profil',
    'activePage' => '',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="card card-user">
          
           <div class="image" style="background-color:black;">   
           <video src="assets/heartbeat.mp4" width="100%" height="100%" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
              <img src="assets/img/banner/heartBeat.png">
           </video>
             </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
               <image src="{{ asset('storage/'.auth()->user()->profile_photo_path)}}" class="avatar border-gray"></image>
                <h5 class="title">{{ auth()->user()->name }}</h5>
              </a>
              <p class="description">
                  {{ auth()->user()->email }}
              </p>
            </div>
            <form method="post" action="{{ url('profileUpdate/'.auth()->user()->id) }}" autocomplete="off" enctype="multipart/form-data">
              @csrf
              @method('put')
              @include('alerts.success')
              @include('alerts.errors')
              <div class="row" align="center">
                <div class="col-md-7 pr-1">
                  <input type="file" accept=".png,.jpg,.jpeg,.svg,.bmp" data-default-file="{{ asset('storage/'.auth()->user()->profile_photo_path) }}"
                  name="profile_photo_path" class="form-group  @error('profile_photo_path') is-invalid @enderror" value="{{old('profile_photo_path', auth()->user()->profile_photo_path)}}" unique/>
              
                </div>
              </div>

              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-7 pr-1">
                        <div class="form-group">
                            <label>{{__(" Nom")}}</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__(" Address mail")}}</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', auth()->user()->email) }}">
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                </div>
             <!--   <div class="row">
                  <div class="col-md-7 pr-1">
                      <label for="exampleInputEmail1">{{__(" Role")}}</label>
                    <div class="form-group">
                      <div class="form-check form-check-radio form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="exampleRadios1" value="{{ old('status') }}, auth()->user()->status) }}" value="Admin">
                            Admin
                            <span class="form-check-sign"></span>
                        </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="exampleRadios2" value="{{ old('status', auth()->user()->status) }}" value="Gérant">
                              Gérant
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                                @include('alerts.feedback', ['field' => 'status'])
                    </div>
                  </div>
                </div>
                -->

              <div class="card-footer ">
                <button type="submit" class="btn btn-success btn-round">{{__('Enregistrer')}}</button>
               <a href="{{route('home')}}" class="btn btn-primary btn-round">{{__('Annuler')}}</a> 
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
          
      </div>
      </div>
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__("Mot de passe ")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
              @csrf
              @method('put')
              @include('alerts.success', ['key' => 'password_status'])
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label>{{__(" Mot de passe actuel")}}</label>
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="old_password" type="password"  required>
                    @include('alerts.feedback', ['field' => 'old_password'])
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label>{{__(" Nouveau Mot de passe")}}</label>
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
                    @include('alerts.feedback', ['field' => 'password'])
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-7 pr-1">
                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <label>{{__(" Confirmer le nouveau mot de passe")}}</label>
                  <input class="form-control" type="password" name="password_confirmation" required>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <button type="submit" class="btn btn-primary btn-round ">{{__('Modifier Mot de passe')}}</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection