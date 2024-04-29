<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="Oraxis - Architecture & Interior Html Template">
        <!-- ======== Page title ============ -->
        <title>Oraxis - Architecture & Interior Html Template</title>
        <!--<< Favicon >>-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg')}}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css')}}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
        <!--<< Style.css >>-->
        <link rel="stylesheet" href="{{ asset('style.css')}}">
    </head>

    <body class="background-black">

        <!-- Back To Top Start -->
        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="-" class="letters-loading">
                        -
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="" class="letters-loading">
                        
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/header-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mobile-menu fix mb-3"></div>
                        <p class="text d-none d-xl-block mb-5">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@azent.com"><span class="mailto:info@azent.com">info@oraxis.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="contact.html" class="theme-btn text-center">
                                    Contact Us
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Area Start -->
       @include('components.header')
s

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Hero Section Start -->
        <section class="hero-section hero-2 bg-cover" style="background-image: url('assets/img/hero/01.jpeg');">
            <div class="line">
                <img src="assets/img/hero/line.png" alt="img">
            </div>
            <div class="star-shape">
                <img src="assets/img/hero/star.png" alt="shape-img">
            </div>
            <div class="star-shape-2">
                <img src="assets/img/hero/star-2.png" alt="shape-img">
            </div>
            <div class="text">
                <p>
                    AREA DE DESARROLLO DE SISTEMAS DE INFORMACION, AREA DE INFRAESTRUCTURA TECNOLOGICA,
                    AREA DE REDES Y COMUNICACIONES, AREA DE SOPORTE Y MASTENIMIENTO. <br> 
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                <span>UNIDAD DE TECNOLOGÍA DE</span> INFORMACIÓN Y COMUNICACIÓN
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">INNOVANDO SERVICIOS TECNOLOGICOS PARA NUESTRA COMUNIDAD UNIVERSITARIA</p>
                            <a href="#administrativo" class="theme-btn padding-style wow fadeInUp" data-wow-delay=".7s">
                                ADMINISTRATIVO
                                <i class="fas fa-long-arrow-right"></i>
                            </a>
                            <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay=".9s">
                                <a href="https://www.facebook.com/sieupea" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://bo.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section Start -->
      @include('components.utic_sie')

        <!-- Service Section Start documentos-->
       @include('components.documentos')
        <!-- Portfolio Section Start -->
       @include('components.supervisor')

        <!-- Brand Section Start -->
        <div class="brand-section section-padding section-bg-2 pt-0 fix">
            <div class="container">
                <div class="brand-wrapper">
                    <div class="swiper brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-image">
                                    <img src="assets/img/brand/01.png" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                    <img src="assets/img/brand/03.png" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                    <img src="assets/img/brand/04.png" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                    <img src="assets/img/brand/05.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shop Section Start -->
        @include('components.paginas_web')

        <!-- Work Process Section Start -->
        <section class="work-process-section fix section-padding pt-0">
            <div class="container">
                <div class="work-process-wrapper">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">work Process</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            GALERIA <br> <span>Interior</span> of living
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="work-process-items-2">
                                <div class="work-process-content">
                                    <h3>Blueprint Builders</h3>
                                    <h2 class="number">01</h2>
                                    <p>This category focuses on the design construction of buildings and the arrangement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="work-process-items-2">
                                <div class="work-process-content">
                                    <h3>Artistic Architecture</h3>
                                    <h2 class="number">02</h2>
                                    <p>This category focuses on the design construction of buildings and the arrangement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="work-process-items-2">
                                <div class="work-process-content">
                                    <h3>Interior scape Design</h3>
                                    <h2 class="number">03</h2>
                                    <p>This category focuses on the design construction of buildings and the arrangement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="work-process-items-2">
                                <div class="work-process-content">
                                    <h3>Conceptual Spaces</h3>
                                    <h2 class="number">04</h2>
                                    <p>This category focuses on the design construction of buildings and the arrangement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="work-process-items-2">
                                <div class="work-process-content">
                                    <h3>Inspire Design Group</h3>
                                    <h2 class="number">05</h2>
                                    <p>This category focuses on the design construction of buildings and the arrangement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                            <div class="work-process-items-2">
                                <div class="work-process-content">
                                    <h3>Modern Living Spaces</h3>
                                    <h2 class="number">06</h2>
                                    <p>This category focuses on the design construction of buildings and the arrangement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Video Section Start -->
        <div class="cta-video">
            <div class="cta-video-wrapper bg-cover" style="background-image: url('assets/img/pri1920.jpg');">
                <div class="video-box">
                    <a href="https://www.youtube.com/watch?v=7eWIwFFwzZo" class="video-btn ripple video-popup">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Team Section Start -->
        <section class="team-section section-padding fix" id="team">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Our Creative Team Member</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Style and Redefining <br> concept of living</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/team/04.jpg" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3>
                                    <a href="https://matriculacion.upea.bo/">VISITAR</a>
                                </h3>
                                <p>Matriculacion UPEA</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/team/04.jpg" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3>
                                    <a href="https://disbedc.upea.bo/">VISITAR</a>
                                </h3>
                                <p>Disbedc UPEA</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/team/06.jpg" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3>
                                    <a href="team-details.html">Shikhon Haque</a>
                                </h3>
                                <p>SpaceCraft Studio</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/team/07.jpg" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3>
                                    <a href="team-details.html">Alex Carry</a>
                                </h3>
                                <p>Marketing Coordinator</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     
        <!-- News Section Start -->
       @include('components.carreras') 
          <!-- Contact Section Start -->
          <section class="contact-section fix section-padding pt-0" id="contact">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row align-items-center g-0">
                        <div class="col-xl-6">
                            <div class="contact-left">
                                <div class="section-title">
                                    <span class="wow fadeInUp">ATENCION VIRTUAL</span>
                                    <p>
                                        Para tramites de matriculación FORM. 01, sistema FORM. 02.
                                    </p>
                                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">SOLICITAR ATENCION VIRTUAL</h2>
                                    <P>
                                        01. MAE: VERIFICACIÓN DE PROCESO DE ADMISIÓN Y MATRICULACIÓN
                                    </P>
                                    <P>
                                        02. PREFAS: VERIFICACIÓN DE APROBACIÓN DE CERT. MATRICULACIÓN
                                    </P>
                                </div>
                                <form action="#" id="contact-form" method="POST" class="contact-form-items mt-4 mt-md-0">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="number" id="number" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <div class="nice-select" tabindex="0">
                                                   <span class="current">
                                                     Choose Services
                                                   </span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected focus">
                                                            Default sorting
                                                        </li>
                                                        <li data-value="1" class="option">
                                                            Sort by popularity
                                                        </li>
                                                        <li data-value="1" class="option">
                                                            Sort by average rating
                                                        </li>
                                                        <li data-value="1" class="option">
                                                            Sort by latest
                                                        </li>
                                                    </ul>
                                                </div>
                                             </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Message here.."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                            <button type="submit" class="theme-btn padding-style">
                                               ENVIAR SOLICITUD <i class="fas fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6 mt-5 mt-xl-0">
                            <div class="contact-image bg-cover" style="background-image: url('assets/img/utic.jpg');"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Cta Section Start -->
        <section class="cta-banner-section-2">
            <div class="container">
                <div class="cta-banner-wrapper-2">
                    <div class="cta-image wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/cta-img.png" alt="cta-img">
                        <div class="circle-shape">
                            <img src="assets/img/circle-border.png" alt="shape-img">
                        </div>
                    </div>
                    <!--<div class="section-title-area">
                        <div class="section-title mb-0">
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".5s">
                                Crafting spaces that <br> the reflect style
                            </h2>
                        </div>
                        <a href="#" class="theme-btn bg-white padding-style wow fadeInUp" data-wow-delay=".7s" target="_blank">
                            Get In Touch
                            <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d302.61461320619253!2d-68.19401530679583!3d-16.49342945321201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf007fbce719%3A0x96ef234f182cb9cf!2sUnidad%20U-TIC!5e1!3m2!1ses-419!2sbo!4v1713765083926!5m2!1ses-419!2sbo" width="1155" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <!-- Footer Section Start -->
        @include('components.footer')

        <!--<< All JS Plugins >>-->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <!--<< Viewport Js >>-->
        <script src="assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="assets/js/wow.min.js"></script>
        <!--<< Main.js >>-->
        <script src="assets/js/main.js"></script>
    </body>
</html>