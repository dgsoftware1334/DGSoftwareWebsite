<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="MECIFI Youssera Zoukha">
  <meta name="keyword" content="Cartes visites, Dévloppement, Dévloppement web, logiciels, sites web, logo, Conceptions, Installation réseaux, Sponsorisation facebook, Sponsorisation instagram, Sponsorisation, Applications mobiles,DG software, DGSoftware plus, Cartes de visite, caméra de surveillance, fiche publicitaire, gestionnaire de stock, gestionnaire de gym, gestionnaire de pharmacie, gestionnaire de bibliothèque, développement web, application web, application mobile, service de conception, logo personnalisé, dépliants, Publicités, Montage video, Développement des  Logiciels, Vente logiciel de pièces détachées, Formation, Installation Réseaux Informatique, Installation des  Caméras de surveillance, startup, DEGDEG Hichem,  Hamlili Ennebati, Tlemcen, Algérie ">
  <title>DG Software</title>

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
  <link rel="stylesheet" type="text/css" href="{{asset('BackOffice/css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('BackOffice/lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('BackOffice/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('BackOffice/css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('BackOffice/lib/chart-master/Chart.js')}}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
     @include('layouts.mainHeader')
    <!--header end-->

    <!-- *****************************************************MAIN SIDEBAR************************************************-->
    <!--sidebar start-->
     @include('layouts.mainSideBar')
    <!--sidebar end-->

    <!-- *****************************************************MAIN CONTENT************************************************-->
    <!--main content start-->
        @yield('content')
    
    <!--main content end-->
    <!--footer start-->
    <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
    </a>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('BackOffice/lib/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('BackOffice/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('BackOffice/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('BackOffice/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('BackOffice/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('BackOffice/lib/jquery.sparkline.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('BackOffice/lib/common-scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('BackOffice/lib/gritter/js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('BackOffice/lib/gritter-conf.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('BackOffice/lib/sparkline-chart.js')}}"></script>
  <script src="{{asset('BackOffice/lib/zabuto_calendar.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
