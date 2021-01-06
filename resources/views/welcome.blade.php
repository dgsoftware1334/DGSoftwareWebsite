<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Easy-ECG</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/video.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progess.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet"  href="assets/css/colors/switch.css">
    <link href="assets/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
    <link href="assets/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
    <link href="assets/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
    <link href="assets/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
    <link href="assets/css/colors/color-6.css" rel="alternate stylesheet" type="text/css" title="color-6">
    <link href="assets/css/colors/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
    <link href="assets/css/colors/color-8.css" rel="alternate stylesheet" type="text/css" title="color-8">
    <link href="assets/css/colors/color-9.css" rel="alternate stylesheet" type="text/css" title="color-9">


</head>

<body>

    <div id="preloader"></div>


    <div id="switch-color" class="color-switcher">
        <div class="open"><i class="fas fa-cog fa-spin"></i></div>
        <h4>COLOR OPTION</h4>
        <ul>
            <li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
            <li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
            <li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
            <li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
            <li><a class="color-6" onclick="setActiveStyleSheet('color-6'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
            <li><a class="color-7" onclick="setActiveStyleSheet('color-7'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
            <li><a class="color-8" onclick="setActiveStyleSheet('color-8'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
            <li><a class="color-9" onclick="setActiveStyleSheet('color-9'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
        </ul>
        <button class="switcher-light">WIDE </button>
        <button class="switcher-dark">BOX </button>
        <a class="rtl-v" href="RTL_Genius/index.html">RTL </a>
    </div>


    <!-- Start of Header section
        ============================================= -->
        <header>
            <div id="main-menu"  class="main-menu-container">
                <div  class="main-menu">
                    <div class="container">
                        <div class="navbar-default">
                            <div class="navbar-header float-left">
                                <a class="navbar-brand text-uppercase" href="#"><img src="assets/img/logo/E-ECG-LOGO-[Converted].png"  alt="logo"></a>
                            </div><!-- /.navbar-header -->

                <!-- Search Bar-->
                        </div>
                            <div class="cart-search float-right ul-li">
                                <ul>
                                    <li><button type="button" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-shopping-bag"></i></button>
                                    </li>
                                    
                                    <li>
                                        <button type="button" class="toggle-overlay search-btn">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <div class="search-body">
                                            <div class="search-form">
                                                <form action="#">
                                                    <input class="search-input" type="search" placeholder="Search Here">
                                                    <div class="outer-close toggle-overlay">
                                                        <button type="button" class="search-close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header  backgroud-style">
                                    <div class="gradient-bg"></div>
                                        <div class="popup-logo">
                                            <img src="assets/img/logo/E-ECG-LOGO-[Converted].png" alt="">
                                        </div>
                                         <div class="popup-text text-center">
                                            <h2 class="modal-title" id="staticBackdropLabel"> <span>Inscrivez-vous </span> dès maintenant !</h2>
                                         </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                  </div>
                                  <div class="modal-body">
                                   <div class="row">
                                        <div class="col-md-5">
                                            <div class="best-course-pic-text relative-position">
                                                <div class="best-course-pic relative-position">
                                                    <img src="assets/img/banner/offer2.png" alt="">
                                                    <div class="trend-badge-2 text-center text-uppercase">
                                                        <i class="fas fa-bolt"></i>
                                                        <span>6 mois</span>
                                                    </div>
                                                    <div class="course-price text-center gradient-bg">
                                                        <span>3500 DA</span>
                                                    </div>
                                                    <div class="course-details-btn">
                                                        <a href="{{url('/inscription')}}">S'inscrir<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                                <div class="best-course-text">
                                                    <div class="course-title mb20 headline relative-position">
                                                        <h3><a href="#">Accés a tous les cours pendant 6mois ! seulement a 3500 DA</a></h3>
                                                          <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">* Accès a l'ensemble des cours ECG</li>
                                                            <li class="list-group-item">* Accès a 5 cas cliniques</li>
                                                            <li class="list-group-item">* 1 nouveau cas clinique publiée chaque semaine .</li>
                                                          </ul>
                                                        
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-md-5">
                                            <div class="best-course-pic-text relative-position">
                                                <div class="best-course-pic relative-position">
                                                    <img src="assets/img/banner/offer1.png" alt="">
                                                    <div class="trend-badge-2 text-center text-uppercase">
                                                        <i class="fas fa-bolt"></i>
                                                        <span>12 mois</span>
                                                    </div>
                                                    <div class="course-price text-center gradient-bg">
                                                        <span>5000 DA</span>
                                                    </div>
                                                    <div class="course-details-btn">
                                                        <a href="{{url('/inscription')}}">S'inscrir<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                                <div class="best-course-text">
                                                    <div class="course-title mb20 headline relative-position">
                                                        <h3><a href="#">Accés pour une année !</a></h3>
                                                          <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">* Accès a l'ensemble des cours ECG</li>
                                                            <li class="list-group-item">* Accès a 5 cas cliniques</li>
                                                            <li class="list-group-item">* 1 nouveau cas clinique publiée chaque semaine .</li>
                                                          </ul>
                                                        
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- /course -->
                                    </div>
                                    <div class="register-form-area">
                                        <div class="nws-button text-center white text-capitalize">
                                        <a href="{{url('/inscription')}}">
                                            <button  class="btn btn-Primary" type="button">Inscription</button>
                                        </a>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer register-form-area">
                                    <div class="nws-button text-center white text-capitalize">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="log-in float-right">
                                <a  data-toggle="modal" data-target="#myModal" href="#">log in</a>
                                <!-- The Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header backgroud-style">
                                                <div class="gradient-bg"></div>
                                                <div class="popup-logo">
                                                    <img src="assets/img/logo/E-ECG-LOGO-[Converted].png" alt="">
                                                </div>
                                                <div class="popup-text text-center">
                                                <h2> <span>Bienvenue!</span> Veuillez connectez à votre compte.</h2>
                                                </div>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                    <x-slot name="logo">
                                                        <x-jet-authentication-card-logo />
                                                    </x-slot>
                                                    <div style="color: red;">
                                                     <x-jet-validation-errors class="mb-4" />
                                                     </div>

                                                @if (session('status'))
                                                    <div class="mb-4 font-medium text-sm text-green-600">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <form class="contact_form" action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                                                     @csrf     
                                                    <div class="contact-info">
                                                        <input id="email" class="name" type="email" name="email" :value="old('email')" required autofocus placeholder="Votre@email.com*">
                                                    </div>
                                                    <div class="contact-info">
                                                        <input id="password" class="pass" type="password" name="password" required autocomplete="current-password" placeholder="Votre mot de passe*">
                                                    </div>
                                                    <div class="nws-button text-center white text-capitalize">

                                                        <button type="submit" value="Submit">Entrer</button>
                                                    </div>
                                                    <div class="log-in-footer" align="right">
                                                    @if (Route::has('password.request'))
                                                        <a style=" font-size: 0.875rem; text-decoration: underline; color: grey;" href="{{ route('password.request') }}"> 
                                                        Mot de passe oublié?
                                                       </a>
                                                    @endif
                                                    </div>
                                                
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <nav class="navbar-menu float-right">
                                <div class="nav-menu ul-li">
                                    <ul >
                                        <li><a href="{{ url('/') }}">Accueil</a></li>
                                        <li><a href="{{ url('/about') }}">A propos</a></li>
                                        <li><a href="{{ url('/coursgratuits')}}">Cours</a></li>
                                        <li><a href="{{ url('/contacts')}}">Contact</a></li>
                                        
                                    </ul>
                                </div>
                            </nav>

                            <div class="mobile-menu">
                                <div class="logo"><a href="{{url('/')}}"><img src="{{asset('assets/img/logo/E-ECG-LOGO-[Converted].png')}}" alt="Logo"></a></div>
                                <nav>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Accueil</a></li>
                                        <li><a href="{{ url('/about') }}">A propos</a></li>
                                        <li><a href="{{ url('/coursgratuits')}}">Cours</a></li>
                                        <li><a href="{{ url('/contacts')}}">Contact</a></li>
                                        
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!-- Start of Header section
    ============================================= -->


    <!-- Start of slider section
        ============================================= -->
        <section id="slide" class="slider-section">
            <div id="slider-item" class="slider-item-details">
                <div  class="slider-area slider-bg-1 relative-position">
                    <div class="slider-text">
                        <div class="section-title mb20 headline text-center ">
                            <div class="layer-1-1">
                                <span class="subtitle text-uppercase">LEARN IT THE EASY WAY</span>
                            </div>
                            <div class="layer-1-3">
                                <h2><span>EASY</span>-<span>ECG</span></h2>
                            </div>
                        </div>
                        <div class="layer-1-4">
                            <div id="course-btn">
                                <div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
                                    <a href="{{ url('/coursgratuits')}}">Nos cours <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="slider-area slider-bg-2 relative-position">
                    <div class="slider-text">
                        <div class="section-title mb20 headline text-center ">
                            <div class="layer-1-1">
                                <span class="subtitle text-uppercase">LEARN IT THE EASY WAY</span>
                            </div>
                            <div class="layer-1-2">
                                <h2 class="secoud-title"> Trouvez les meilleures <span>Cours.</span></h2>
                            </div>
                        </div>
                        <div class="layer-1-3">
                            <div class="search-course mb30 relative-position">
                                <form action="#" method="post">
                                    <input class="course" name="course" type="text" placeholder="Tapez ce que vous voulez apprendre aujourd'hui?">
                                    <div class="nws-button text-center  gradient-bg text-capitalize">
                                        <button type="submit" value="Submit">Rechercher un cours</button>
                                    </div>
                                </form>
                            </div>
                            <div class="layer-1-4">
                                <div class="slider-course-category ul-li text-center">
                                    <span class="float-left">PAR CATÉGORIE:</span>
                                    <ul>
                                        <li>Cours</li>
                                        <li>Cas clinique</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-area slider-bg-4 relative-position">
                    <div class="slider-text">
                        <div class="section-title mb20 headline text-center ">
                            <span class="subtitle text-uppercase">LEARN IT THE EASY WAY</span>
                            <h2>Solution <span>Inventive</span> <br> pour comprendre <span> L'ECG</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of slider section
        ============================================= -->



    <!-- Start of Search Courses
        ============================================= -->
        <section id="search-course" class="search-course-section">
            <div class="container">
                <div class="section-title mb20 headline text-center "  >
                    <span class="subtitle text-uppercase">APPRENEZ DE NOUVELLES ASTUCES</span>
                    <h2><span>Rechercher</span> des cours ECG.</h2>
                </div>
                <div class="search-course mb30 relative-position "  >
                    <form action="#" method="post">
                        <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
                        <div class="nws-button text-center  gradient-bg text-capitalize">
                            <button type="submit" value="Submit">Rechercher un cours</button>
                        </div>
                    </form>
                </div>
            @php
             $abonnés=DB::table('users')
                ->where('users.status','=','Offre 1')
                ->Orwhere('users.status','=','Offre 2')
                ->get();
             $c=DB::table('cours')->get();
             $ratings = DB::table('ratings')->avg('rating');
            @endphp
                <div class="search-counter-up">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="counter-icon-number "  >
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-graduation-hat"></i>
                                </div>
                                <div class="counter-number">
                                    <span class="counter-count bold-font">{{count($abonnés)}}.</span>
                                    <p>Étudiants inscrits</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter -->

                        <div class="col-md-4 col-sm-4">
                            <div class="counter-icon-number " >
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-book"></i>
                                </div>
                                <div class="counter-number">
                                    <span class="counter-count bold-font">50.</span>
                                    <p>Cours Disponibles En ligne</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter   {{count($c)}} -->

                        <div class="col-md-4 col-sm-4">
                            <div class="counter-icon-number " >
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-favorites-button"></i>
                                </div>
                                <div class="counter-number">
                                    <span class="counter-count bold-font">{{$ratings}}</span><span></span>
                                    <p>Cours de qualité</p>
                                </div>
                            </div>
                        </div>
                       
                        <!-- /counter -->
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Search Courses
        ============================================= -->


    <!-- Start popular course
        ============================================= -->
        @php 
        
            $cours= App\Models\Cours::where('offre','=',3)->orderBy('created_at','desc')->get();
            $count=0;
        @endphp

        <section id="popular-course" class="popular-course-section">
            <div class="container">
                <div class="section-title mb20 headline text-left "  >
                    <span class="subtitle text-uppercase">APPRENEZ DE NOUVELLES COMPÉTENCES</span>
                    <h2><span>Derniers</span> Publications.</h2>
                </div>
                <div id="course-slide-item" class="course-slide">
                    @foreach($cours as $c)
                    @if($count < 3)
                    <div class="course-item-pic-text">
                        <div class="course-pic relative-position mb25" style=" height:270px;">
                            <img src="{{ url('storage/'.$c->thumbnail)}}" alt="">
                            <div class="course-price text-center gradient-bg">
                                <span>{{$c->Durée}}</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="{{ url('/cours/'.$c->id.'/details') }}">Voir Cours <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                <span class="course-category bold-font"><a href="{{ url('/cours/'.$c->id.'/details') }}">Gratuit</a></span>
                                <span class="course-author bold-font"><a href="{{ url('/cours/'.$c->id.'/details') }}">{{$c->catégories}}</a></span>
                                <div class="course-rate ul-li">
                                    @if($c->averageRating)
                                    <ul> 
                                        @if($c->averageRating == 1)
                                                                    <i class="fas fa-star"></i>
                                                                @elseif($c->averageRating == 2)
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                @elseif($c->averageRating == 3)
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                @elseif($c->averageRating == 4)
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                @elseif($c->averageRating() == 5)
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                
                                                                @endif
                                                                                  
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="{{ url('/cours/'.$c->id.'/details') }}">{{$c->Cours}}</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> Nouveau</span></h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href="">Ajouté {{$c->created_at->locale('fr')->diffForHumans()}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    @php $count= $count+1 @endphp
                    @endforeach
                </div>
            </div>
        </section>
    <!-- End popular course
        ============================================= -->


    <!-- Start of about us section
        ============================================= -->
        <section id="about-us" class="about-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-resigter-form backgroud-style relative-position">
                            <div class="register-content">
                                <div class=" text-center">
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
                                </div>
                                <div class="register-fomr-title text-center">
                                    <h3 class="bold-font"><span>Inscrivez-vous</span> dès maintenant.</h3>
                                    <p>Plus de 50 Cours disponibles en ligne</p>
                                </div>
                                <div class="register-form-area">
                                    
                                    <form action="{{url('demandes')}}" method="post" class="contact_form" enctype="multipart/form-data">
                                            {{ csrf_field()}}
                                        <div class="contact-info">
                                            <select class="form-control @error('IDoffre') is-invalid @enderror" name="IDoffre" value="{{old('IDoffre')}}" required>
                                                    <option value="">---------Sélectionnez une offre---------</option>
                                                    <option value='1'> Offre 1 (6 mois) </option>
                                                    <option value='2'> Offre 2 (12 mois)</option>
                                                </select>
                                                @if ($errors->has('IDoffre'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('IDoffre') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="contact-info">
                                            <input type="text" class="form-control @error('nom') is-invalid @enderror nbm" name="nom" placeholder="Votre nom" value="{{old('nom')}}" required>
                                            @if ($errors->has('nom'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('nom') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="contact-info">
                                           <input type="text" class="form-control @error('prenom') is-invalid @enderror"  name="prenom" placeholder="Votre prénom" value="{{old('prenom')}}" required>
                                           @if ($errors->has('prenom'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('prenom') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="contact-info">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror email"  name="email" placeholder="Votre adresse mail" value="{{old('email')}}" required unique>
                                            @if ($errors->has('email'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="contact-info">
                                             <input type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" placeholder="Votre pays" value="{{old('pays')}}">
                                                @if ($errors->has('pays'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('pays') }}</strong>
                                                    </span>
                                                @endif
                                        </div>                                  
                                        <div class="contact-info">
                                             <input type="text" class="form-control @error('ville') is-invalid @enderror "  name="ville" placeholder="Votre ville" value="{{old('ville')}}" required>
                                                @if ($errors->has('ville'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('ville') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="contact-info custom-file">
                                              <input type="file" accept=".png,.jpg,.jpeg," class="form-group  @error('recuCCP') is-invalid @enderror" value="{{old('recuCCP')}}" name="recuCCP" required/>
                                                @if ($errors->has('recuCCP'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('recuCCP') }}</strong>
                                                    </span>
                                                @endif
                                           
                                        </div>
                                        <div class="contact-info"> 
                                            <div class="nws-button text-uppercase text-center white text-capitalize">
                                                <button type="submit" value="Submit">VALIDER INSCRIPTION </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="bg-mockup">
                            <img src="{{asset('assets/img/about/phone.png')}}" alt="">
                        </div>
                    </div>
                    <!-- /form -->

                    <div class="col-md-7">
                        <div class="about-us-text">
                            <div class="section-title relative-position mb20 headline text-left "  >
                                <span class="subtitle ml42 text-uppercase">Instructions</span>
                                <h2>Comment devenir  <span>Membre de Eazy-ECG!</span></h2>
                                <p>Les payments sont fait par CCP sur le compte suivant:</p>
                                <h2 class="alert alert-info">0017768801 56 <br> Kourtel Mohamed </h2>
                            </div>
                            <div class="about-content-text">
                                <h5>Etapes d'inscription.</h5>
                                <div class="about-list mb65 ul-li-block "  >
                                    <ul>
                                        <li>Vous pouvez envoyer l'argent de l'offre spécifiée au compte CCP mentioné</li>
                                        <li>Après le paiement, vous prenez une photo du reçu CCP comme preuve.</li>
                                        <li>Et enfin vous remplissez le formulaire avec les informations demandés.</li>
                                        <li>Une fois votre demande soumise et vérifiée par l'administrateur, il vous suffit d'attendre un e-mail contenant les coordonnées nécessaires pour accéder à votre compte.</li>
                                    </ul>
                                <div>
                                    <div class="alert alert-danger">Important !</div>
                                    <p> Vous devez vous assurer que la photo de votre reçu de paiement est valide et claire, sinon votre demande sera supprimée par l'administrateur.
                                    </p>
                                </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of about us section
        ============================================= -->


    <!-- Start of why choose us section
        ============================================= -->
        <section id="why-choose-us" class="why-choose-us-section">
            <div class="jarallax  backgroud-style">
                <div class="container">
                    <div class="section-title mb20 headline text-center "  >
                        <span class="subtitle text-uppercase">AVANTAGES D'EAZY-ECG</span>
                        <h2>Raisons pour lesquelles<span> Choisir E-ECG.</span></h2>
                    </div>
                    <div id="service-slide-item" class="service-slide">
                        <div class="service-text-icon "  >
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Cas clinique Hebdomadaire.</h3>
                                <p>Nouveau cas clinique publié chaque semaine en détail.</p>
                            </div>
                        </div>
                        <div class="service-text-icon">
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-business"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Meilleurs prix dans le marcher.</h3>
                                <p>Les prix ont été fixés pour faciliter et aider mes confrères.</p>
                            </div>
                        </div>
                        <div class="service-text-icon "  >
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-technology"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Sites web réactif et accessible a tout moment</h3>
                                <p>Consultation confortable sur des écrans de tailles différentes.</p>
                            </div>
                        </div>
                        
                        <div class="service-text-icon">
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-dna"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Cours mené par passion et dévouement.</h3>
                                <p>Des connaissances construites par de longues études et de dur travails, et surtout par la pratique!</p>
                            </div>
                        </div>
                    </div>
                    <!-- /service-slide -->
                        @php
                                $comments = App\Models\Commentaire::all();
                        @endphp
@if($comments)
                    <div  class="testimonial-slide">
                        <div class="section-title-2 mb65 headline text-left "  >
                            <h2><span>Témoignage</span>d'étudiants.</h2>
                        </div>
                        <div id="testimonial-slide-item" class="testimonial-slide-area">
                        @foreach($comments as $item)
                            <div class="student-qoute "  >
                                <p>“{{$item->message}}”</p>
                                <div class="student-name-designation">
                                    <span class="st-name bold-font">{{$item->nom}} </span>
                                    <span class="st-designation">Graphic Designer</span>
                                </div>
                            </div> 
                        @endforeach
                        </div>
                    </div>
@endif
                </div>
            </div>
        </section>
    <!-- End of why choose us section
        ============================================= -->


    <!-- Start of best course
        ============================================= -->
        <section id="best-course" class="best-course-section">
            <div class="container">
                <div class="section-title mb45 headline text-center "  >
                    <span class="subtitle text-uppercase">REJOIGNEZ-NOUS</span>
                    <h2>Consultez les titres des <span>COURS PUBLIÉS.</span></h2>
                </div>
                <div class="best-course-area mb45">
                    <div class="row">
                       
                       @php
                        $new =DB::table('cours')
                            ->where('cours.offre','1')
                            ->Orwhere('cours.offre','2')
                            ->orderBy('cours.created_at','desc')
                            ->get()
                        @endphp
                        <!-- /course -->
                       
@foreach ($new as $item)
                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="{{ url('storage/'.$item->thumbnail) }}" alt="">
                                    <div class="course-price text-center gradient-bg">
                                        <span>{{$item->catégories}}</span>
                                    </div>
                                    <div class="course-rate ul-li">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="course-details-btn">
                                       {{$item->catégories}}<i class="fas fa-arrow-right"></i>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3>{{$item->Cours}}.</h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">{{$item->Durée}}</a></span>
                                        <span class="course-author"><a href="#">{{\Carbon\Carbon::parse($c->created_at)->format('d/m/Y')}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /End course -->
@endforeach
                    </div>
                </div>
            </div>
        </section>
    <!-- End of best course
        ============================================= -->



    <!-- Start of footer section
        ============================================= -->
        <footer>
            <section id="footer-area" class="footer-area-section" style="background-image: url(assets/img/banner/footerBackgroundClean.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <div class="container">
                    <div class="footer-social-subscribe mb65">
                        <div class="row">
                            @if (\Session::has('success'))
                              <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                              </div><br />
                             @endif
                             @if (\Session::has('failure'))
                              <div class="alert alert-danger">
                                <p>{{ \Session::get('failure') }}</p>
                              </div><br />
                             @endif
                            <div class="col-md-10">
                                <div class="subscribe-form">
                                    <h2 class="widget-title">Abonnez-vous à la newsletter</h2>

                                    <div class="subs-form relative-position">
                                        <form action="{{url('newsletter/store')}}" method="post">
                                            {{ csrf_field()}}
    
                                            <input type="email" class="course" name="email" placeholder="Adresse mail .">
                                            <div class="nws-button text-center  gradient-bg text-uppercase">
                                                <button type="submit" value="Submit">Abonner</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="footer-content pb10">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="footer-widget">
                                    <div class="footer-logo mb35">
                                        <img src="assets/img/logo/E-ECG-LOGO-[Converted].png" alt="">
                                    </div>
                                    <div class="footer-about-text">
                                        <p>E-ECG prend au sérieux la mission d'accroître les connaissances dans le domaine de la médecine et de fournir une éducation de qualité, en connectons les apprenants aux meilleures offres du marché et à une formation variée.</p>
                                        <p>N'hésitez pas à me rejoindre et à vous abonner à la newsletter pour être à jour chaque semaine avec mes cours d'électrocardiogramme.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                         <div class="footer-social ul-li">
                                             <h2 class="widget-title">Réseau Social</h2>
                                                  <a href="https://www.facebook.com/Eazy.ECG/" target="_blank">
                                                    <div class="category-icon-title text-center" style="height: 110px; width: 140px;">
                                                        <div class="category-icon">
                                                            <i class="text-gradiant fab fa-facebook-f"></i>
                                                        </div>
                                                        <div class="category-title">
                                                            <h4>Facebbok</h4>
                                                        </div>
                                                    </div>
                                                    <div class="category-icon-title text-center" style="height: 110px; width: 140px;">
                                                        <div class="category-icon">
                                                            <i class="text-gradiant fab fa-instagram"></i>
                                                        </div>
                                                        <div class="category-title">
                                                            <h4>Instagram</h4>
                                                        </div>
                                                    </div>
                                                    </a> 
                                        </div>
                            </div>
                            <div class="col-md-5">
                                <div class="footer-widget">
                                    <div class="footer-menu ul-li-block">
                                        <h2 class="widget-title">Liens utiles</h2>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-caret-right"></i>Offres</a></li>
                                            <li><a href="{{url('/cours')}}"><i class="fas fa-caret-right"></i>Cours</a></li>
                                            <li><a href="{{url('/contacts')}}"><i class="fas fa-caret-right"></i>Contact</a></li>
                                            <li><a href="{{url('/about')}}"><i class="fas fa-caret-right"></i>A propos</a></li>
                                            <li><a href="{{url('/inscription')}}"><i class="fas fa-caret-right"></i>S'inscrire</a></li>
                                            <li><a href="{{url('login')}}"><i class="fas fa-caret-right"></i>S'authentifier</a></li>
                                        </ul>
                                    </div>
                                </div>
                             </div>
                              
                        </div>
                        </div>
                    <!-- /footer-widget-content -->
                   
                    
                    <div class="copy-right-menu">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="copy-right-text">
                                    <p>© 2020 - www.DGSoftware.com. Tous les droits sont réservés</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="copy-right-menu-item float-right ul-li">
                                   <p>Développer par Y.MECIFI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </footer>
    <!-- End of footer section
        ============================================= -->



        <!-- For Js Library -->
        <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jarallax.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/lightbox.js')}}"></script>
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/js/gmap3.min.js')}}"></script>
        <script src="{{asset('assets/js/switch.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>

    </body>
    </html>