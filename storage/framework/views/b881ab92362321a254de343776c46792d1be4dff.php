<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Easy-ECG</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicon-32x32.png')); ?>">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/video.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/progess.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

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

                        <!--    <div class="select-lang">
                                <select>
                                    <option value="9" selected="">ENG</option>
                                    <option value="10">BAN</option>
                                    <option value="11">ARB</option>
                                    <option value="12">FRN</option>
                                </select>
                        -->
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
                                                        <a href="<?php echo e(url('/inscription')); ?>">S'inscrir<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                                <div class="best-course-text">
                                                    <div class="course-title mb20 headline relative-position">
                                                        <h3><a href="#">Accés a tous les cours pendant 6mois ! seulement a 3500 DA</a></h3>
                                                          <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">* Accès a l'ensemble des cours ECG</li>
                                                            <li class="list-group-item">* Accès a 10 cas cliniques</li>
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
                                                        <a href="<?php echo e(url('/inscription')); ?>">S'inscrir<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                                <div class="best-course-text">
                                                    <div class="course-title mb20 headline relative-position">
                                                        <h3><a href="#">Accés pour une année !</a></h3>
                                                          <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">* Accès a l'ensemble des cours ECG</li>
                                                            <li class="list-group-item">* Accès a 10 cas cliniques</li>
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
                                        <a href="<?php echo e(url('/inscription')); ?>">
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
                                                     <?php $__env->slot('logo'); ?> 
                                                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.authentication-card-logo','data' => []]); ?>
<?php $component->withName('jet-authentication-card-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                                     <?php $__env->endSlot(); ?>
                                                    <div style="color: red;">
                                                      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                                     </div>

                                                <?php if(session('status')): ?>
                                                    <div class="mb-4 font-medium text-sm text-green-600">
                                                        <?php echo e(session('status')); ?>

                                                    </div>
                                                <?php endif; ?>
                                                <form class="contact_form" action="<?php echo e(route('login')); ?>" method="POST" enctype="multipart/form-data">
                                                     <?php echo csrf_field(); ?>     
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
                                                  <?php if(Route::has('password.request')): ?>
                                                        <a style=" font-size: 0.875rem; text-decoration: underline; color: grey;" href="<?php echo e(route('password.request')); ?>"> 
                                                        Mot de passe oublié?
                                                       </a>
                                                    <?php endif; ?>
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
                                        <li><a href="<?php echo e(url('/')); ?>">Accueil</a></li>
                                        <li><a href="<?php echo e(url('/about')); ?>">A propos</a></li>
                                        <li><a href="<?php echo e(url('/coursgratuits')); ?>">Cours</a></li>
                                        <li><a href="<?php echo e(url('/contacts')); ?>">Contact</a></li>
                                        
                                    </ul>
                                </div>
                            </nav>

                            <div class="mobile-menu">
                                <div class="logo"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/img/logo/E-ECG-LOGO-[Converted].png')); ?>" alt="Logo"></a></div>
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo e(url('/')); ?>">Accueil</a></li>
                                        <li><a href="<?php echo e(url('/about')); ?>">A propos</a></li>
                                        <li><a href="<?php echo e(url('/coursgratuits')); ?>">Cours</a></li>
                                        <li><a href="<?php echo e(url('/contacts')); ?>">Contact</a></li>
                                        
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
                                    <a href="<?php echo e(url('/coursgratuits')); ?>">Nos cours <i class="fas fa-caret-right"></i></a>
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
                                <h2 class="secoud-title"> Browse The <span>Best Courses.</span></h2>
                            </div>
                        </div>
                        <div class="layer-1-3">
                            <div class="search-course mb30 relative-position">
                                <form action="#" method="post">
                                    <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
                                    <div class="nws-button text-center  gradient-bg text-capitalize">
                                        <button type="submit" value="Submit">Search Course</button>
                                    </div>
                                </form>
                            </div>
                            <div class="layer-1-4">
                                <div class="slider-course-category ul-li text-center">
                                    <span class="float-left">BY CATEGORY:</span>
                                    <ul>
                                        <li>Graphics Design</li>
                                        <li>Web Design</li>
                                        <li>Mobile Application</li>
                                        <li>Enginering</li>
                                        <li>Science</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="slider-area slider-bg-3 relative-position">
                    <div class="slider-text">
                        <div class="layer-1-2">
                            <div class="coming-countdown ul-li">
                                <ul>
                                    <li class="days">
                                        <span class="number"></span>
                                        <span class>Days</span>
                                    </li>
                                    <li class="hours">
                                        <span class="number"></span>
                                        <span class>Hours</span>
                                    </li>
                                    <li class="minutes">
                                        <span class="number"></span>
                                        <span class>Minutes</span>
                                    </li>
                                    <li class="seconds">
                                        <span class="number"></span>
                                        <span class>Seconds</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="section-title mb20 headline text-center ">
                            <div class="layer-1-3">
                                <h2 class="third-slide"> Mobile Application Experiences : <br> <span>Mobile App Design.</span></h2>
                            </div>
                        </div>
                        <div class="layer-1-4">
                            <div class="about-btn text-center">
                                <div class="genius-btn text-center text-uppercase ul-li-block bold-font">
                                    <a href="#">About Us <i class="fas fa-caret-right"></i></a>
                                </div>
                                <div class="genius-btn text-center text-uppercase ul-li-block bold-font">
                                    <a href="#">contact us <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="slider-area slider-bg-4 relative-position">
                    <div class="slider-text">
                        <div class="section-title mb20 headline text-center ">
                            <span class="subtitle text-uppercase">LEARN IT THE EASY WAY</span>
                            <h2 class=""  ><span>Inventive</span> Solution <br> for <span>Education</span></h2>
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
                    <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
                    <h2><span>Search</span> Genius Courses.</h2>
                </div>
                <div class="search-course mb30 relative-position "  >
                    <form action="#" method="post">
                        <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
                        <div class="nws-button text-center  gradient-bg text-capitalize">
                            <button type="submit" value="Submit">Search Course</button>
                        </div>
                    </form>
                </div>
                <div class="search-counter-up">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter-icon-number "  >
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-graduation-hat"></i>
                                </div>
                                <div class="counter-number">
                                    <span class="counter-count bold-font">5 </span><span>M+</span>
                                    <p>Students Enrolled</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter -->

                        <div class="col-md-3 col-sm-6">
                            <div class="counter-icon-number " >
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-book"></i>
                                </div>
                                <div class="counter-number">
                                    <span class="counter-count bold-font">122</span><span>.500+</span>
                                    <p>Online Available Courses</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter -->

                        <div class="col-md-3 col-sm-6">
                            <div class="counter-icon-number " >
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-favorites-button"></i>
                                </div>
                                <div class="counter-number">
                                    <span class="counter-count bold-font">15</span><span>.000+</span>
                                    <p>Premium Quality Products</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter -->

                        <div class="col-md-3 col-sm-6">
                            <div class="counter-icon-number " >
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-group"></i>
                                </div>
                                <div class="counter-number">
                                    <span class="counter-count bold-font">7</span><span>.500+</span>
                                    <p>Teachers Registered</p>
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
        <section id="popular-course" class="popular-course-section">
            <div class="container">
                <div class="section-title mb20 headline text-left "  >
                    <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
                    <h2><span>Popular</span> Courses.</h2>
                </div>
                <div id="course-slide-item" class="course-slide">
                    <div class="course-item-pic-text " >
                        <div class="course-pic relative-position mb25">
                            <img src="assets/img/course/c-1.jpg" alt="">
                            <div class="course-price text-center gradient-bg">
                                <span>$99.00</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                <span class="course-category bold-font"><a href="#">Web Design</a></span>
                                <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    <li><a href="">125k Unrolled</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <div class="course-item-pic-text " >
                        <div class="course-pic relative-position mb25">
                            <img src="assets/img/course/c-2.jpg" alt="">
                            <div class="course-price text-center gradient-bg">
                                <span>$99.00</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                <span class="course-category bold-font"><a href="#">Mobile Apps</a></span>
                                <span class="course-author bold-font"><a href="#">Fernando Torres</a></span>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="#">Introduction to Mobile Application Development.</a></h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    <li><a href="">125k Unrolled</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <div class="course-item-pic-text " >
                        <div class="course-pic relative-position mb25">
                            <img src="assets/img/course/c-3.jpg" alt="">
                            <div class="course-price text-center gradient-bg">
                                <span>$99.00</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                <span class="course-category bold-font"><a href="#">Motion Graphic </a></span>
                                <span class="course-author bold-font"><a href="#">enny Garcias</a></span>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="#">Learning IOS Apps Programming & Development.</a></h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    <li><a href="">125k Unrolled</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <div class="course-item-pic-text">
                        <div class="course-pic relative-position mb25">
                            <img src="assets/img/course/c-2.jpg" alt="">
                            <div class="course-price text-center gradient-bg">
                                <span>$99.00</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                <span class="course-category bold-font"><a href="#">Web Design</a></span>
                                <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    <li><a href="">125k Unrolled</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <div class="course-item-pic-text">
                        <div class="course-pic relative-position mb25">
                            <img src="assets/img/course/c-3.jpg" alt="">
                            <div class="course-price text-center gradient-bg">
                                <span>$99.00</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                <span class="course-category bold-font"><a href="#">Web Design</a></span>
                                <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    <li><a href="">125k Unrolled</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <div class="course-item-pic-text">
                        <div class="course-pic relative-position mb25">
                            <img src="assets/img/course/c-1.jpg" alt="">
                            <div class="course-price text-center gradient-bg">
                                <span>$99.00</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                <span class="course-category bold-font"><a href="#">Web Design</a></span>
                                <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    <li><a href="">125k Unrolled</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->
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
                                <div class="register-fomr-title text-center">
                                    <h3 class="bold-font"><span>Get a</span> Free Registration.</h3>
                                    <p>More Than 122K Online Available Courses</p>
                                </div>
                                <div class="register-form-area">
                                    <form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                        <div class="contact-info">
                                            <input class="name" name="name" type="text" placeholder="Your Name.">
                                        </div>
                                        <div class="contact-info">
                                            <input class="nbm" name="nbm" type="number" placeholder="Your Number">
                                        </div>
                                        <div class="contact-info">
                                            <input class="email" name="email" type="email" placeholder="Email Address.">
                                        </div>
                                        <select>
                                            <option value="9" selected="">Select Course.</option>
                                            <option value="10">Web Design</option>
                                            <option value="11">Web Development</option>
                                            <option value="12">Php Core</option>
                                        </select>
                                        <div class="contact-info">
                                            <input type="text" id="datepicker" placeholder="Date.">
                                        </div>
                                        <textarea  placeholder="Message."></textarea>
                                        <div class="nws-button text-uppercase text-center white text-capitalize">
                                            <button type="submit" value="Submit">SUBMIT REQUEST </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="bg-mockup">
                            <img src="assets/img/about/phone.png" alt="">
                        </div>
                    </div>
                    <!-- /form -->

                    <div class="col-md-7">
                        <div class="about-us-text">
                            <div class="section-title relative-position mb20 headline text-left "  >
                                <span class="subtitle ml42 text-uppercase">SORT ABOUT US</span>
                                <h2>We are <span>Genius Course</span>
                                work since 1980.</h2>
                                <p>We take our mission of increasing global access to quality education seriously. We connect learners to the best universities and institutions from around the world.</p>
                            </div>
                            <div class="about-content-text">
                                <p class=""  >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam. magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                <div class="about-list mb65 ul-li-block "  >
                                    <ul>
                                        <li>Professional And Experienced Since 1980</li>
                                        <li>We Connect Learners To The Best  Universities From Around The World</li>
                                        <li>Our Mission Increasing Global Access To Quality Aducation</li>
                                        <li>100K Online Available Courses</li>
                                    </ul>
                                </div>
                                <div class="about-btn "  >
                                    <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                        <a href="#">About Us <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                        <a href="#">contact us <i class="fas fa-caret-right"></i></a>
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
                        <span class="subtitle text-uppercase">GENIUS ADVANTAGES</span>
                        <h2>Reason <span>Why Choose Genius.</span></h2>
                    </div>
                    <div id="service-slide-item" class="service-slide">
                        <div class="service-text-icon "  >
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">The Power Of Education.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon "  >
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Best Online Education.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon "  >
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-list"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Education For All Student.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon "  >
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">The Power Of Education.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon">
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Best Online Education.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon">
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-list"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Education For All Student.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon">
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">The Power Of Education.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon">
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Best Online Education.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                        <div class="service-text-icon">
                            <div class="service-icon float-left">
                                <i class="text-gradiant flaticon-list"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="bold-font">Education For All Student.</h3>
                                <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /service-slide -->
                    <div  class="testimonial-slide">
                        <div class="section-title-2 mb65 headline text-left "  >
                            <h2>Students <span>Testimonial.</span></h2>
                        </div>

                        <div id="testimonial-slide-item" class="testimonial-slide-area">
                            <div class="student-qoute "  >
                                <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                                <div class="student-name-designation">
                                    <span class="st-name bold-font">Robertho Garcia </span>
                                    <span class="st-designation">Graphic Designer</span>
                                </div>
                            </div>

                            <div class="student-qoute "  >
                                <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                                <div class="student-name-designation">
                                    <span class="st-name bold-font">Robertho Garcia </span>
                                    <span class="st-designation">Graphic Designer</span>
                                </div>
                            </div>

                            <div class="student-qoute "  >
                                <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                                <div class="student-name-designation">
                                    <span class="st-name bold-font">Robertho Garcia </span>
                                    <span class="st-designation">Graphic Designer</span>
                                </div>
                            </div>

                            <div class="student-qoute">
                                <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                                <div class="student-name-designation">
                                    <span class="st-name bold-font">Robertho Garcia </span>
                                    <span class="st-designation">Graphic Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of why choose us section
        ============================================= -->


    <!-- Start latest section
        ============================================= -->
        <section id="latest-area" class="latest-area-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="latest-area-content  " >
                            <div class="section-title-2 mb65 headline text-left">
                                <h2>Latest <span>News.</span></h2>
                            </div>
                            <div class="latest-news-posts">
                                <div class="latest-news-area">
                                    <div class="latest-news-thumbnile relative-position">
                                        <img src="assets/img/blog/lb-1.jpg" alt="">
                                        <div class="hover-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <div class="blakish-overlay"></div>
                                    </div>
                                    <div class="date-meta">
                                        <i class="fas fa-calendar-alt"></i> 26 April 2018
                                    </div>
                                    <h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
                                    <div class="course-viewer ul-li">
                                        <ul>
                                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /post -->

                                <div class="latest-news-posts">
                                    <div class="latest-news-area">
                                        <div class="latest-news-thumbnile relative-position">
                                            <img src="assets/img/blog/lb-2.jpg" alt="">
                                            <div class="hover-search">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            <div class="blakish-overlay"></div>
                                        </div>
                                        <div class="date-meta">
                                            <i class="fas fa-calendar-alt"></i> 26 April 2018
                                        </div>
                                        <h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
                                        <div class="course-viewer ul-li">
                                            <ul>
                                                <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                                <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /post -->
                                </div>

                                <div class="view-all-btn bold-font">
                                    <a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /latest-news -->
                    <div class="col-md-4">
                        <div class="latest-area-content " >
                            <div class="section-title-2 mb65 headline text-left">
                                <h2>Upcoming <span>Events.</span></h2>
                            </div>
                            <div class="latest-events">
                                <div class="latest-event-item">
                                    <div class="events-date  relative-position text-center">
                                        <div class="gradient-bdr"></div>
                                        <span class="event-date bold-font">22</span>
                                        April 2018
                                    </div>
                                    <div class="event-text">
                                        <h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design & Development.</a></h3>
                                        <div class="course-meta">
                                            <span class="course-category"><a href="#">Web Design</a></span>
                                            <span class="course-author"><a href="#">Koke</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="latest-events">
                                <div class="latest-event-item">
                                    <div class="events-date  relative-position text-center">
                                        <div class="gradient-bdr"></div>
                                        <span class="event-date bold-font">07</span>
                                        August 2018
                                    </div>
                                    <div class="event-text">
                                        <h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application Development.</a></h3>
                                        <div class="course-meta">
                                            <span class="course-category"><a href="#">Web Design</a></span>
                                            <span class="course-author"><a href="#">Koke</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="latest-events">
                                <div class="latest-event-item">
                                    <div class="events-date  relative-position text-center">
                                        <div class="gradient-bdr"></div>
                                        <span class="event-date bold-font">30</span>
                                        Sept 2018
                                    </div>
                                    <div class="event-text">
                                        <h3 class="latest-title bold-font"><a href="#">IOS Apps Programming & Development.</a></h3>
                                        <div class="course-meta">
                                            <span class="course-category"><a href="#">Web Design</a></span>
                                            <span class="course-author"><a href="#">Koke</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="view-all-btn bold-font">
                                <a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /events -->

                    <div class="col-md-4">
                        <div class="latest-area-content " >
                            <div class="section-title-2 mb65 headline text-left">
                                <h2>Latest <span>Video.</span></h2>
                            </div>
                            <div class="latest-video-poster relative-position mb20">
                                <img src="assets/img/banner/v-1.jpg" alt="">
                                <div class="video-play-btn text-center gradient-bg">
                                    <a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="vidoe-text">
                                <h3 class="latest-title bold-font"><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
                                <p class="mb25">Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam nonummy.</p>
                            </div>
                            <div class="view-all-btn bold-font">
                                <a href="#">View All Videos <i class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /. -->
                </div>
            </div>
        </section>
    <!-- End latest section
        ============================================= -->


    <!-- Start of sponsor section
        ============================================= -->
    <!--    <section id="sponsor" class="sponsor-section">
            <div class="container">
                <div class="section-title-2 mb65 headline text-left "  >
                    <h2>Genius <span>Sponsors.</span></h2>
                </div>
                <div class="sponsor-item sponsor-1 " >
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-1.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-2.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-3.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-4.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-5.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-6.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-6.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-6.jpg" alt="">
                    </div>
                    <div class="sponsor-pic text-center">
                        <img src="assets/img/sponsor/s-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    <!-- End of sponsor section
        ============================================= -->
    -->

    <!-- Start of best course
        ============================================= -->
        <section id="best-course" class="best-course-section">
            <div class="container">
                <div class="section-title mb45 headline text-center "  >
                    <span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
                    <h2>Browse Our<span> Best Course.</span></h2>
                </div>
                <div class="best-course-area mb45">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-1.jpg" alt="">
                                    <div class="trend-badge-2 text-center text-uppercase">
                                        <i class="fas fa-bolt"></i>
                                        <span>Trending</span>
                                    </div>
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->

                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-2.jpg" alt="">
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->

                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-3.jpg" alt="">
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->

                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-4.jpg" alt="">
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->

                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-5.jpg" alt="">
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->

                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-6.jpg" alt="">
                                    <div class="trend-badge-2 text-center text-uppercase">
                                        <i class="fas fa-bolt"></i>
                                        <span>Trending</span>
                                    </div>
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->

                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-7.jpg" alt="">
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->

                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position "  >
                                <div class="best-course-pic relative-position">
                                    <img src="assets/img/course/bc-8.jpg" alt="">
                                    <div class="course-price text-center gradient-bg">
                                        <span>$99.00</span>
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
                                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                    </div>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">250 Students</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /course -->
                    </div>
                </div>


            </div>
        </section>
    <!-- End of best course
        ============================================= -->

    <!-- Start of course teacher
        ============================================= -->
        <!--<section id="course-teacher" class="course-teacher-section">
            <div class="jarallax">
                <div class="container">
                    <div class="section-title mb20 headline text-center "  >
                        <span class="subtitle text-uppercase">OUR PROFESSIONAL</span>
                        <h2>Genius Courses <span>Teachers.</span></h2>
                    </div>
                    <div class="teacher-list">
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <div class="teacher-img-content "  >
                                    <div class="teacher-cntent">
                                        <div class="teacher-social-name ul-li-block">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                            <div class="teacher-name">
                                                <span>Daniel
                                                Alvares</span>
                                            </div>
                                        </div>
                                        <div class="teacher-img-category">
                                            <div class="teacher-img">
                                                <img src="assets/img/teacher/t-1.jpg" alt="">
                                                <div class="course-price text-uppercase text-center gradient-bg">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="teacher-category float-right">
                                                <span class="st-name">Mobile Apps </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            /teacher
                            <div class="col-md-3">
                                <div class="teacher-img-content "  >
                                    <div class="teacher-cntent">
                                        <div class="teacher-social-name ul-li-block">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                            <div class="teacher-name">
                                                <span>Juliana Hernandes</span>
                                            </div>
                                        </div>
                                        <div class="teacher-img-category">
                                            <div class="teacher-img">
                                                <img src="assets/img/teacher/t-2.jpg" alt="">
                                                <div class="course-price text-uppercase text-center gradient-bg">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="teacher-category float-right">
                                                <span class="st-name">Mobile Apps </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             /teacher
                            <div class="col-md-3">
                                <div class="teacher-img-content "  >
                                    <div class="teacher-cntent">
                                        <div class="teacher-social-name ul-li-block">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                            <div class="teacher-name">
                                                <span>Berliana
                                                Luis</span>
                                            </div>
                                        </div>
                                        <div class="teacher-img-category">
                                            <div class="teacher-img">
                                                <img src="assets/img/teacher/t-3.jpg" alt="">
                                                <div class="course-price text-uppercase text-center gradient-bg">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="teacher-category float-right">
                                                <span class="st-name">IOS Apps </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             /teacher
                            <div class="col-md-3">
                                <div class="teacher-img-content "  >
                                    <div class="teacher-cntent">
                                        <div class="teacher-social-name ul-li-block">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                            <div class="teacher-name">
                                                <span>Johansen
                                                Doe</span>
                                            </div>
                                        </div>
                                        <div class="teacher-img-category">
                                            <div class="teacher-img">
                                                <img src="assets/img/teacher/t-4.jpg" alt="">
                                                <div class="course-price text-uppercase text-center gradient-bg">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="teacher-category float-right">
                                                <span class="st-name">Graphic </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            /teacher
                            <div class="col-md-3">
                                <div class="teacher-img-content "  >
                                    <div class="teacher-cntent">
                                        <div class="teacher-social-name ul-li-block">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                            <div class="teacher-name">
                                                <span>Lisha
                                                Chambelt</span>
                                            </div>
                                        </div>
                                        <div class="teacher-img-category">
                                            <div class="teacher-img">
                                                <img src="assets/img/teacher/t-6.jpg" alt="">
                                                <div class="course-price text-uppercase text-center gradient-bg">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="teacher-category float-right">
                                                <span class="st-name">Mobile Apps </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            /teacher
                            <div class="col-md-3">
                                <div class="teacher-img-content "  >
                                    <div class="teacher-cntent">
                                        <div class="teacher-social-name ul-li-block">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                            <div class="teacher-name">
                                                <span>Checilia
                                                Yeoung</span>
                                            </div>
                                        </div>
                                        <div class="teacher-img-category">
                                            <div class="teacher-img">
                                                <img src="assets/img/teacher/t-5.jpg" alt="">
                                                <div class="course-price text-uppercase text-center gradient-bg">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="teacher-category float-right">
                                                <span class="st-name">Mobile Apps </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            /teacher
                            <div class="col-md-3">
                                <div class="teacher-img-content "  >
                                    <div class="teacher-cntent">
                                        <div class="teacher-social-name ul-li-block">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                            <div class="teacher-name">
                                                <span>Sean
                                                Fernandes</span>
                                            </div>
                                        </div>
                                        <div class="teacher-img-category">
                                            <div class="teacher-img">
                                                <img src="assets/img/teacher/t-7.jpg" alt="">
                                                <div class="course-price text-uppercase text-center gradient-bg">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="teacher-category float-right">
                                                <span class="st-name">Mobile Apps </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         /teacher
                        </div>
                        <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font "  >
                            <a href="#">All teacher <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->
    <!-- End of course teacher
        ============================================= -->



    <!-- Start of best product section
        ============================================= -->
        <!--<section id="best-product" class="best-product-section">
            <div class="container">
                <div class="section-title-2 mb65 headline text-left "  >
                    <h2>Genius <span>Best Products.</span></h2>
                </div>
                <div id="best-product-slide-item" class="best-product-slide">
                    <div class="product-img-text "  >
                        <div class="product-img text-center mb20">
                            <img src="assets/img/product/bp-1.png" alt="">
                        </div>
                        <div class="product-text-content relative-position">
                            <div class="best-title-price float-left">
                                <div class="course-title headline">
                                    <h3><a href="#">Mobile Apps Books.</a></h3>
                                </div>
                                <div class="price-start">
                                    Start from
                                    <span>$55.25</span>
                                </div>
                            </div>
                            <div class="add-cart text-center">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-img-text "  >
                        <div class="product-img text-center mb20">
                            <img src="assets/img/product/bp-2.png" alt="">
                        </div>
                        <div class="product-text-content relative-position">
                            <div class="best-title-price float-left">
                                <div class="course-title headline">
                                    <h3><a href="#">Mobile Apps Books.</a></h3>
                                </div>
                                <div class="price-start">
                                    Start from
                                    <span>$55.25</span>
                                </div>
                            </div>
                            <div class="add-cart text-center">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-img-text "  >
                        <div class="product-img text-center mb20">
                            <img src="assets/img/product/bp-3.png" alt="">
                        </div>
                        <div class="product-text-content relative-position">
                            <div class="best-title-price float-left">
                                <div class="course-title headline">
                                    <h3><a href="#">Mobile Apps Books.</a></h3>
                                </div>
                                <div class="price-start">
                                    Start from
                                    <span>$55.25</span>
                                </div>
                            </div>
                            <div class="add-cart text-center">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-img-text "  >
                        <div class="product-img text-center mb20">
                            <img src="assets/img/product/bp-4.png" alt="">
                        </div>
                        <div class="product-text-content relative-position">
                            <div class="best-title-price float-left">
                                <div class="course-title headline">
                                    <h3><a href="#">Mobile Apps Books.</a></h3>
                                </div>
                                <div class="price-start">
                                    Start from
                                    <span>$55.25</span>
                                </div>
                            </div>
                            <div class="add-cart text-center">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-img-text "  >
                        <div class="product-img text-center mb20">
                            <img src="assets/img/product/bp-1.png" alt="">
                        </div>
                        <div class="product-text-content relative-position">
                            <div class="best-title-price float-left">
                                <div class="course-title headline">
                                    <h3><a href="#">Mobile Apps Books.</a></h3>
                                </div>
                                <div class="price-start">
                                    Start from
                                    <span>$55.25</span>
                                </div>
                            </div>
                            <div class="add-cart text-center">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-img-text">
                        <div class="product-img text-center mb20">
                            <img src="assets/img/product/bp-2.png" alt="">
                        </div>
                        <div class="product-text-content relative-position">
                            <div class="best-title-price float-left">
                                <div class="course-title headline">
                                    <h3><a href="#">Mobile Apps Books.</a></h3>
                                </div>
                                <div class="price-start">
                                    Start from
                                    <span>$55.25</span>
                                </div>
                            </div>
                            <div class="add-cart text-center">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-img-text">
                        <div class="product-img text-center mb20">
                            <img src="assets/img/product/bp-3.png" alt="">
                        </div>
                        <div class="product-text-content relative-position">
                            <div class="best-title-price float-left">
                                <div class="course-title headline">
                                    <h3><a href="#">Mobile Apps Books.</a></h3>
                                </div>
                                <div class="price-start">
                                    Start from
                                    <span>$55.25</span>
                                </div>
                            </div>
                            <div class="add-cart text-center">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End  of best product section
        ============================================= -->-->


    <!-- Start FAQ section
        ============================================= -->
        <section id="faq" class="faq-section">
            <div class="container">
                <div class="section-title mb45 headline text-center "  >
                    <span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
                    <h2>Frequently<span> Ask & Questions</span></h2>
                </div>
                <div class="faq-tab">
                    <div class="faq-tab-ques ul-li">
                        <div class="tab-button text-center mb65 "  >
                            <ul class="product-tab">
                                <li class="active" rel="tab1">GENERAL </li>
                                <li rel="tab2"> COURSES </li>
                                <li rel="tab3"> TEACHERS </li>
                                <li rel="tab4">  EVENTS  </li>
                                <li rel="tab5">  OTHERS  </li>
                            </ul>
                        </div>
                        <!-- /tab-head -->

                        <!-- tab content -->
                        <div class="tab-container">

                            <!-- 1st tab -->
                            <div id="tab1" class="tab-content-1 pt35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline "  >
                                            <h3> What is Genius Courses?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline "  >
                                            <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline "  >
                                            <h3> How to Register or Make An Account in Genius?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline "  >
                                            <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #tab1 -->

                            <div id="tab2" class="tab-content-1 pt35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline "  >
                                            <h3> What is Genius Courses?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline "  >
                                            <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline "  >
                                            <h3> How to Register or Make An Account in Genius?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline "  >
                                            <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #tab2 -->

                            <div id="tab3" class="tab-content-1 pt35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline">
                                            <h3> What is Genius Courses?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline">
                                            <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline">
                                            <h3> How to Register or Make An Account in Genius?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline">
                                            <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #tab3 -->

                            <div id="tab4" class="tab-content-1 pt35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline">
                                            <h3> What is Genius Courses?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline">
                                            <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline">
                                            <h3> How to Register or Make An Account in Genius?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline">
                                            <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #tab3 -->

                            <div id="tab5" class="tab-content-1 pt35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline">
                                            <h3> What is Genius Courses?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline">
                                            <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="ques-ans mb45 headline">
                                            <h3> How to Register or Make An Account in Genius?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>

                                        <div class="ques-ans mb45 headline">
                                            <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #tab3 -->
                        </div>
                        <div class="view-all-btn bold-font "  >
                            <a href="#">Make a Question <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End FAQ section
        ============================================= -->


    <!-- Start Course category
        ============================================= -->
    <!--    <section id="course-category" class="course-category-section">
            <div class="container">
                <div class="section-title mb45 headline text-center "  >
                    <span class="subtitle text-uppercase">COURSES CATEGORIES</span>
                    <h2>Browse Courses<span> By Category.</span></h2>
                </div>
                <div class="category-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-technology"></i>
                                </div>
                                <div class="category-title">
                                    <h4>Responsive Website</h4>
                                </div>
                            </div>
                        </div>
                        /category
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-app-store"></i>
                                </div>
                                <div class="category-title">
                                    <h4>IOS Applications</h4>
                                </div>
                            </div>
                        </div>
                         /category
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-artist-tools"></i>
                                </div>
                                <div class="category-title">
                                    <h4>Graphic Design</h4>
                                </div>
                            </div>
                        </div>
                         /category
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-business"></i>
                                </div>
                                <div class="category-title">
                                    <h4>Marketing</h4>
                                </div>
                            </div>
                        </div>
                         /category
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-dna"></i>
                                </div>
                                <div class="category-title">
                                    <h4>Science</h4>
                                </div>
                            </div>
                        </div>
                        /category
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-cogwheel"></i>
                                </div>
                                <div class="category-title">
                                    <h4>Enginering</h4>
                                </div>
                            </div>
                        </div>
                        /category
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-technology-1"></i>
                                </div>
                                <div class="category-title">
                                    <h4>Photography</h4>
                                </div>
                            </div>
                        </div>
                         /category
                        <div class="col-md-3">
                            <div class="category-icon-title text-center "  >
                                <div class="category-icon">
                                    <i class="text-gradiant flaticon-technology-2"></i>
                                </div>
                                <div class="category-title">
                                    <h4>Mobile Application</h4>
                                </div>
                            </div>
                        </div>
                         /category
                    </div>
                </div>
            </div>
        </section>-->
    <!-- End Course category
        ============================================= -->


    <!-- Start of contact area
        ============================================= -->
        <section id="contact-area" class="contact-area-section backgroud-style">
            <div class="container">
                <div class="contact-area-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-left-content " >
                                <div class="section-title  mb45 headline text-left">
                                    <span class="subtitle ml42  text-uppercase">CONTACT US</span>
                                    <h2><span>Get in Touch</span></h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet  ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>

                                <div class="contact-address">
                                    <div class="contact-address-details">
                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                <li><span>Primary: </span>Last Vegas, 120 Graphic Street, US</li>
                                                <li><span>Second: </span>Califorinia, 88 Design Street, US</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="contact-address-details">
                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                <li><span>Primary: </span>(100) 3434 55666</li>
                                                <li><span>Second: </span>(20) 3434 9999</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="contact-address-details">
                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                <li><span>Primary: </span>info@geniuscourse.com</li>
                                                <li><span>Second: </span>mail@genius.info</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font ">
                                <a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="contact-map" class="contact-map-section">
                                <div id="google-map">
                                    <div id="googleMaps" class="google-map-container"></div>
                                </div><!-- /#google-map-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of contact area
        ============================================= -->



    <!-- Start of footer section
        ============================================= -->
        <footer>
            <section id="footer-area" class="footer-area-section" style="background-image: url(assets/img/banner/footerBackgroundClean.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <div class="container">
                    <div>
                     <!--<video class="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
                        <source src="assets/heartbeat.mp4" type="video/mp4">
                        <img src="assets/img/banner/Asset2.png" width="100%" height="100%" >
                        </video>-->
                    </div>
                     <div class="footer-social-subscribe mb65">
                        <div class="row">
                            <?php if(\Session::has('success')): ?>
                              <div class="alert alert-success">
                                <p><?php echo e(\Session::get('success')); ?></p>
                              </div><br />
                             <?php endif; ?>
                             <?php if(\Session::has('failure')): ?>
                              <div class="alert alert-danger">
                                <p><?php echo e(\Session::get('failure')); ?></p>
                              </div><br />
                             <?php endif; ?>
                            <div class="col-md-10">
                                <div class="subscribe-form">
                                    <h2 class="widget-title">Abonnez-vous à la newsletter</h2>

                                    <div class="subs-form relative-position">
                                        <form action="<?php echo e(url('newsletter/store')); ?>" method="post">
                                            <?php echo e(csrf_field()); ?>

    
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
                        <div class="row" style="background-image: url(assets/heartbeat.mp4);">
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
                                            <li><a href="<?php echo e(url('/cours')); ?>"><i class="fas fa-caret-right"></i>Cours</a></li>
                                            <li><a href="<?php echo e(url('/contacts')); ?>"><i class="fas fa-caret-right"></i>Contact</a></li>
                                            <li><a href="<?php echo e(url('/about')); ?>"><i class="fas fa-caret-right"></i>A propos</a></li>
                                            <li><a href="<?php echo e(url('/inscription')); ?>"><i class="fas fa-caret-right"></i>S'inscrire</a></li>
                                            <li><a href="<?php echo e(url('login')); ?>"><i class="fas fa-caret-right"></i>S'authentifier</a></li>
                                        </ul>
                                    </div>
                                </div>
                             </div>
                              
                            
                          <!--  <div class="col-md-3">
                                <div class="footer-widget">
                                    <h2 class="widget-title">Photo Gallery</h2>
                                    <div class="photo-list ul-li">
                                        <ul>
                                            <li>
                                                <img src="assets/img/gallery/g-1.jpg" alt="">
                                                <div class="blakish-overlay"></div>
                                                <div class="pop-up-icon">
                                                    <a href="assets/img/gallery/g-1.jpg" data-lightbox="roadtrip">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/img/gallery/g-2.jpg" alt="">
                                                <div class="blakish-overlay"></div>
                                                <div class="pop-up-icon">
                                                    <a href="assets/img/gallery/g-2.jpg" data-lightbox="roadtrip">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/img/gallery/g-3.jpg" alt="">
                                                <div class="blakish-overlay"></div>
                                                <div class="pop-up-icon">
                                                    <a href="assets/img/gallery/g-3.jpg" data-lightbox="roadtrip">  <i class="fas fa-search"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/img/gallery/g-4.jpg" alt="">
                                                <div class="blakish-overlay"></div>
                                                <div class="pop-up-icon">
                                                    <a href="assets/img/gallery/g-4.jpg" data-lightbox="roadtrip">  <i class="fas fa-search"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/img/gallery/g-5.jpg" alt="">
                                                <div class="blakish-overlay"></div>
                                                <div class="pop-up-icon">
                                                    <a href="assets/img/gallery/g-5.jpg" data-lightbox="roadtrip">  <i class="fas fa-search"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/img/gallery/g-6.jpg" alt="">
                                                <div class="blakish-overlay"></div>
                                                <div class="pop-up-icon">
                                                    <a href="assets/img/gallery/g-6.jpg" data-lightbox="roadtrip">  <i class="fas fa-search"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>-->
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
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jarallax.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/gmap3.min.js"></script>
        <script src="assets/js/switch.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
        <script src="assets/js/script.js"></script>

    </body>
    </html><?php /**PATH C:\laragon\www\E-ECG\resources\views/welcome.blade.php ENDPATH**/ ?>