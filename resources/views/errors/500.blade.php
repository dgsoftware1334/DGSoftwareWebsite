<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

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
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 p404 centered">
        <img src="{{asset('BackOffice/img/500.png')}}" alt="">
        <h1>ERROR 500</h1>
        <h3>Ouch!! Something Went Wrong!</h3>
        <br>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <input type="text" class="form-control" id="form1Name" name="form1Name">
            <button class="btn btn-theme mt">Search</button>
          </div>
        </div>
        <h5 class="mt">Hey, maybe you will be interested in these pages:</h5>
        <p><a href="index.html">Index</a> | <a href="#">Sitemap</a> | <a href="contact.html"> Contact</a></p>
      </div>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('BackOffice/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('BackOffice/lib/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
