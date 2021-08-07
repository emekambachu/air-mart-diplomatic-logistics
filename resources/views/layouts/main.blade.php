<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Air Mart Diplomatic Cargo and Logistics</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.js') }}"></script>
    <![endif]-->

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="left-column">
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <div class="search-box">
                            <form class="search-form">
                                <input type="search" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="location">
                            <span class="flaticon-cursor"></span>
                            <form action="#" class="location-switcher">
                                <select class="selectpicker">
                                    <option value="1">Melbourne</option>
                                    <option value="2">New York</option>
                                    <option value="3">Chicago</option>
                                    <option value="4">Boston</option>
                                </select>
                            </form>
                        </div>
                        <div class="phone-number"><i class="flaticon-calling"></i>
                            <a href="tel:(+61)32456789"></a>(+61) 324 56 789</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <img src="{{ asset('assets/images/icons/icon-bar-2.png') }}" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">

                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('about') }}">About</a></li>
                                        <li><a href="{{ url('services') }}">Services</a></li>
                                        <li><a href="{{ url('track-shipment') }}">Track Shipment</a></li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="navbar-right-info">
                            <div class="sign-in"><a href="#"><i class="flaticon-delivery-man"></i>Sign In</a></div>
                            <div class="language">
                                <span class="icon">
                                    <img src="{{ asset('assets/images/resource/flags/de.png') }}" alt="">
                                </span>
                                <form action="#" class="language-switcher">
                                    <select class="selectpicker">
                                        <option value="1">Eng</option>
                                        <option value="2">Fre</option>
                                        <option value="3">Ita</option>
                                        <option value="4">Spa</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <img src="{{ asset('assets/images/icons/icon-bar-2.png') }}" alt=""></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="sign-in"><a href="#"><i class="flaticon-delivery-man-1"></i>Sign In</a></div>
                                <div class="language">
                                    <span class="icon">
                                        <img src="{{ asset('assets/images/resource/flags/de.png') }}" alt="">
                                    </span>
                                    <form action="#" class="language-switcher">
                                        <select class="selectpicker">
                                            <option value="1">Eng</option>
                                            <option value="2">Fre</option>
                                            <option value="3">Ita</option>
                                            <option value="4">Spa</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>

            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a>
                </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->

    @yield('content')

    <!--Main Footer-->
    <footer class="main-footer">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget contact-widget style-two">
                            <h4>Do You Have Any Question? Please <br> Contact Our Team</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrapper-box">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-calling"></span></div>
                                            <div class="text">
                                                <strong>Phone</strong>
                                                <a href="tel:(+61)3245689790">(+61)32456789</a>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text">
                                                <strong>Email</strong>
                                                <a href="tel:(+61)32456789790">info@transida.com</a>
                                            </div>
                                        </div>
                                        <ul class="social-icon">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-mail"></span></div>
                                        <div>
                                            <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                            <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            <div class="text"><span>Sunday-Closed</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget links-widget">
                                    <h4 class="widget_title">Useful Links</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="about.html">About Company</a></li>
                                            <li><a href="contact.html">Get In Touch</a></li>
                                            <li><a href="#">Industries Served</a></li>
                                            <li><a href="service.html">Our Services</a></li>
                                            <li><a href="#">Pricing & Plans</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget instagram-widget">
                                    <h4 class="widget_title">Our Gallery</h4>
                                    <div class="wrapper-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/gallery/gallery-1.jpg') }}" alt="">
                                            <div class="overlay-link">
                                                <a href="{{ asset('assets/images/gallery/gallery-1.jpg') }}"
                                                   class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-plus"></span></a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/gallery/gallery-2.jpg') }}" alt="">
                                            <div class="overlay-link">
                                                <a href="{{ asset('assets/images/gallery/gallery-2.jpg') }}"
                                                   class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-plus"></span></a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/gallery/gallery-3.jpg') }}" alt="">
                                            <div class="overlay-link">
                                                <a href="{{ asset('assets/images/gallery/gallery-3.jpg') }}"
                                                   class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-plus"></span></a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/gallery/gallery-4.jpg') }}" alt="">
                                            <div class="overlay-link">
                                                <a href="{{ asset('assets/images/gallery/gallery-4.jpg') }}"
                                                   class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-plus"></span></a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/gallery/gallery-5.jpg') }}" alt="">
                                            <div class="overlay-link">
                                                <a href="{{ asset('assets/images/gallery/gallery-5.jpg') }}"
                                                   class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-plus"></span></a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/gallery/gallery-6.jpg') }}" alt="">
                                            <div class="overlay-link">
                                                <a href="{{ asset('assets/images/gallery/gallery-6.jpg') }}"
                                                   class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-plus"></span></a>
                                            </div>
                                        </div>
                                    </div><!-- /.gallery-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row m-0 align-items-center justify-content-between">
                <div class="copyright-text">
                    Copyright © {{ date('Y') }} <a href="#"> Air Mart Diplomatic Cargo and Logistics.</a> All Rights Reserved.</div>
                <ul class="menu">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy </a></li>
                    <li><a href="#">  Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="flaticon-right-arrow-6"></span>
</div>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.polyglot.language.switcher.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>













