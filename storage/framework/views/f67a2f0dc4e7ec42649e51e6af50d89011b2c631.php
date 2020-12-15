<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy-ECG</title>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/video.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/progess.css">
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
                                    <li><button type="button" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-shopping-bag"></i></button></li>
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
                                                        <a href="<?php echo e(url('/demande/1')); ?>">S'inscrir<i class="fas fa-arrow-right"></i></a>
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
                                                        <a href="<?php echo e(url('/demande/2')); ?>">S'inscrir<i class="fas fa-arrow-right"></i></a>
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
                                                        <a style=" font-size: 0.875rem; text-decoration: underline; color: grey;" href="<?php echo e(route('password.request')); ?>"> 
                                                        Mot de passe oublié?
                                                       </a>
                                                    </div>
                                                 <?php if(Route::has('password.request')): ?>
                                                      
                                                    <?php endif; ?>
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
                                        <li><a href="<?php echo e(url('/about')); ?>">À propos</a></li>
                                        <li><a href="<?php echo e(url('/cours')); ?>">Cours</a></li>
                                        <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                                        <!--<li class="menu-item-has-children ul-li-block">
                                            <a href="#!">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="teacher.html">Teacher</a></li>
                                                <li><a href="teacher-details.html">Teacher Details</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                                <li><a href="course.html">Course</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="check-out.html">Check Out</a></li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                </div>
                            </nav>

                            <div class="mobile-menu">
                                <div class="logo"><a href="<?php echo e(url('/')); ?>"><img src="assets/img/logo/E-ECG-LOGO-[Converted].png" alt="Logo"></a></div>
                                <nav>
                                    <ul>
                                        <li><a href="index-1.html">Accueil</a>
                                        </li>
                                        <li><a href="<?php echo e(url('/about')); ?>">A propos</a></li>
                                        <li><a href="<?php echo e(url('/cours')); ?>">Cours</a></li>
                                        <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                                      
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

        <?php echo $__env->yieldContent('content'); ?>

        
    <!-- Start of footer section
        ============================================= -->
        <footer>
            <section id="footer-area" class="footer-area-section">
                <div class="container">
                     <div class="footer-social-subscribe mb65">
                        <div class="row">
                           
                            <div class="col-md-10">
                                <div class="subscribe-form">
                                    <h2 class="widget-title">Abonnez-vous à la newsletter</h2>

                                    <div class="subs-form relative-position">
                                        <form action="#" method="post">
                                            <input class="course" name="course" type="email" placeholder="Adresse mail .">
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
                                            <li><a href="<?php echo e(url('/contact')); ?>"><i class="fas fa-caret-right"></i>Contact</a></li>
                                            <li><a href="<?php echo e(url('/about')); ?>"><i class="fas fa-caret-right"></i>A propos</a></li>
                                            <li><a href="#"><i class="fas fa-caret-right"></i>S'inscrire</a></li>
                                            <li><a href="#"><i class="fas fa-caret-right"></i>S'authentifier</a></li>
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
    </html>


<?php /**PATH C:\laragon\www\E-ECG\resources\views\layouts\static.blade.php ENDPATH**/ ?>