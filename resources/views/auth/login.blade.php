<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard"> 
  <title>DG Software Plus</title>


  <!-- Favicons (created with http://realfavicongenerator.net/)-->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-touch-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-touch-icon-60x60.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-16x16.png') }}" sizes="16x16">
  <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
  <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.ico') }}">
  <meta name="msapplication-TileColor" content="#00a8ff">
  <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  
  <!-- Bootstrap core CSS -->
  <link href="{{asset('BackOffice/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('BackOffice/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('BackOffice/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('BackOffice/css/style-responsive.css')}}" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session()->get('success')}} </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @elseif(session()->has('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>{{session()->get('error')}} </strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
              </div>
            @endif
            <form action="{{ route('login') }}" method="POST" class="form-login">
            @csrf
              <h2 class="form-login-heading">Authentifier</h2>
              <div class="login-wrap">
                <input type="email" name="email" :value="old('email')" placeholder="Votre email*"  id="email" class="form-control @error('email') is-invalid @enderror" required autofocus>
                  @error('email')
                            <span class="has-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                  @enderror
                <br>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="Votre mote de passe*" required>
                  @error('email')
                            <span class="has-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                  @enderror
                <hr>
                <button type="submit" class="btn btn-theme btn-block"><i class="fa fa-lock"></i> LOGIN</button>
                <label class="checkbox"> 
                  <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Mot de Passe Oublié?</a>
                  </span>
                </label>
              </div>
            </form>
              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Mot de passe oublié ?</h4>
                    </div>
                    <form method="POST" action="{{ route('password.email') }}">
                    <div class="modal-body">
                        @csrf
                       <p>Entrez votre adresse e-mail ci-dessous pour réinitialiser votre mot de passe.</p>
                      <input type="email" name="email" placeholder="Email" :value="old('email')" autocomplete="off" class="form-control placeholder-no-fix @error('email') is-invalid @enderror"  required autofocus>
                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Annuler</button>
                      <button class="btn btn-theme" type="submit">Soumettre</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- modal -->
      
        </div>
    </div> 


  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('BackOffice/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('BackOffice/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{asset('BackOffice/lib/jquery.backstretch.min.js')}}"></script>
  <script>
    $.backstretch("{{asset('img/login.jpg')}}", {
      speed: 500
    });
  </script>
</body>

</html>