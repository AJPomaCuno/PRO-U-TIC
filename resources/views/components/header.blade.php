 <!-- Header Area Start -->
 <header>
    <div id="header-sticky" class="header-1 header-2">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html" class="header-logo-2">
                                <img src="{{ asset('assets/img/logo/footer-logo.svg')}}" alt="logo-img">
                           </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('index') }}">
                                            INICIO
                                            <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu">
                                                <li class="border-none">
                                                    <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-5">
                                                        <div class="col homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="{{ asset('assets/img/header/home-1.jpg')}}" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index.html" class="theme-btn">Multi Page</a>
                                                                    <a href="index-one-page.html" class="theme-btn">One Page</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 01
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col  homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="assets/img/header/home-2.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-2.html" class="theme-btn">Multi Page</a>
                                                                    <a href="index-two-page.html" class="theme-btn">One Page</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 02
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="assets/img/header/home-3.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-3.html" class="theme-btn">Multi Page</a>
                                                                    <a href="index-three-page.html" class="theme-btn">One Page</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 03
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="assets/img/header/home-4.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-4.html" class="theme-btn">Multi Page</a>
                                                                    <a href="index-four-page.html" class="theme-btn">One Page</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 04
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="assets/img/header/home-5.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-5.html" class="theme-btn">Multi Page</a>
                                                                    <a href="index-five-page.html" class="theme-btn">One Page</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 05
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            <a href="index.html" class="border-none">
                                               INICIO
                                            <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index-2.html">Home 02</a></li>
                                                <li><a href="index-3.html">Home 03</a></li>
                                                <li><a href="index-4.html">Home 04</a></li>
                                                <li><a href="index-5.html">Home 05</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#u-tic">U-TIC</a>
                                        </li>
                                        <li>
                                            <a href="#documentos">DOCUMENTOS - SIE</a>
                                        </li>
                                        <li>
                                            <a href="#paginas">PAGINAS WEBS</a>
                                        </li>
                                        <li>
                                            <a href="#carreras">CARRERAS</a>
                                        </li>
                                        <li>
                                            <a href="#contact">ATENCION VIRTUAL</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                       <div class="icon-items">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>Solicita tu llamada:</p>
                                <h4><a href="https://wa.me/67159697" target="_blank">67159697</a></h4>
                            </div>
                       </div>
                        
                        <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                        <a href="{{ route('login') }}" id="idlogin">LOGIN</a>
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                
                               <img src="assets/img/bar.svg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>