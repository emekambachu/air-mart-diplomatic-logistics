@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="">
                            <img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    </div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/icons/icon-8.png') }}" alt="">
                                </div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/icons/icon-8.png') }}" alt="">
                                </div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong>
                            <a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong>
                            <a href="mailto:info@airmartlogistics.com">info@airmartlogistics.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="left-panel">
            <div class="side-menu-nav sidemenu-nav-toggler"><span class="flaticon-interface"></span>More</div>
            <div class="option-box">
                <div class="icon"><span class="flaticon-tracking"></span></div>
                <h4>Track <br> Shipment</h4>
                <div class="order-form-area">
                    <div class="wrapper-box">
                        <h4>Track Your Shipment</h4>
                        <form class="order-form">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Shipment Number *">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" name="make">
                                    <option value="*">Type of Reference *</option>
                                    <option value=".category-1">Package</option>
                                    <option value=".category-3">Freight</option>
                                    <option value=".category-4">Mail of Innovations</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Track Now</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="option-box">
                <a href="">
                    <div class="icon"><span class="flaticon-logistics"></span></div>
                    <h4>Pricing <br> Plan</h4>
                </a>
            </div>
            <div class="option-box">
                <a href="">
                    <div class="icon"><span class="flaticon-test"></span></div>
                    <h4>Get A <br>Quote</h4>
                </a>
            </div>
        </div>
        <div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>
        </div>
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{ asset('assets/images/main-slider/image-1.jpg') }});">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h2>Air Mart Diplomatic</h2>
                                <h4>Cargo and Logistics</h4>
                                <div class="text">We denounce with righteous indignation & dislike beguiled</div>
                                <div class="link-box">
                                    <a href="{{ url('about') }}" class="theme-btn btn-style-one">
                                        <span><i class="flaticon-up-arrow"></i>More Details </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{ asset('assets/images/main-slider/image-2.jpg') }});">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>Your logistic partner </h4>
                                <h1>make easy distribution</h1>
                                <div class="text">To take a trivial example which of us ever undertakes laborious.</div>
                                <div class="link-box">
                                    <a href="{{ url('about') }}" class="theme-btn btn-style-one">
                                        <span><i class="flaticon-up-arrow"></i>More Details </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{ asset('assets/images/main-slider/image-3.jpg') }});">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>It’s possible here</h4>
                                <h1>Shipments delivered on time</h1>
                                <div class="text">Right to find fault with a man who chooses to enjoy a pleasure.</div>
                                <div class="link-box">
                                    <a href="{{ url('about') }}" class="theme-btn btn-style-one">
                                        <span><i class="flaticon-up-arrow"></i>More Details </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="banner-slider-nav style-two">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i>Prev</span></div>
            <div class="banner-slider-control banner-slider-button-next"><span>Next<i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Our Services</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 service-block-one">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <h4>Air Freight</h4>
                        <div class="text">
                            <p>Air Mart Diplomatic Cargo and Logistics partners with airlines and freight forwarders to offer seamless air freight solutions to clients globally. We offer a competitive and quick service which includes our air express, high priority (24 hours) delivery.</p>
                        </div>
                        <div class="count"><span>01</span></div>
                        <div class="image" data-parallax='{"y": 30}'>
                            <img src="{{ asset('assets/images/resource/image-1.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4 service-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <h4>Ocean Freight</h4>
                        <div class="text">
                            <p>Wherever your cargo is going, we can arrange the shipment for you and remain competitive with the market.</p>
                        </div>
                        <div class="count"><span>02</span></div>
                        <div class="image" data-parallax='{"y": 30}'>
                            <img src="{{ asset('assets/images/resource/image-2.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4 service-block-one">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <h4>Road Freight</h4>
                        <div class="text">
                            <p>We work close with strategic partners to ensure our domestic trucking offers clients everything they need. We utilize track and trace capabilities to keep customers informed on their shipments at all times.</p>
                        </div>
                        <div class="count"><span>03</span></div>
                        <div class="image" data-parallax='{"y": 30}'>
                            <img src="{{ asset('assets/images/resource/image-3.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" style="background-image: url({{ asset('assets/images/background/bg-1.jpg') }});">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Company</div>
                        <h2>About<br> Us</h2>
                        <div class="text">
                            Air Mart Diplomatic Cargo and Logistics is the logistics and transportation hub of the Southeast and your direct access to the world. With an extensive line-up of distribution and warehousing facilities, world-class supply chain infrastructure, and the nation’s fastest-growing port, Air Mart Diplomatic Cargo and Logistics is ready to move your product efficiently and seamlessly.
                        </div>
                        <a href="{{ url('about') }}" class="readmore-link">
                            <i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-package"></span></div>
                                <div class="content">
                                    <a href=""><h4>About <br>Our Company</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-goal"></span></div>
                                <div class="content">
                                    <a href=""><h4>Statement of <br> Mission</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1700ms">
                                <div class="icon"><span class="flaticon-binoculars"></span></div>
                                <div class="content">
                                    <a href=""><h4>Statement of <br> Vision</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1900ms">
                                <div class="icon"><span class="flaticon-gold"></span></div>
                                <div class="content">
                                    <a href=""><h4>Statement of <br> Value</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('assets/images/resource/image-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whychooseus Section -->
    <section class="Whychooseus-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Why Choose Us</div>
                <h2>We Aim to Contribute Well to <br> Your Company</h2>
            </div>
            <div class="row">

                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">01</span><i class="flaticon-shield"></i></div>
                        <div class="content">
                            <h4>Connected</h4>
                            <div class="text">
                                Air Mart Diplomatic Cargo and Logistics Port offers the fastest customs clearance of any country in the GCC.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">02</span><i class="flaticon-delivery"></i></div>
                        <div class="content">
                            <h4>On - Time Delivery</h4>
                            <div class="text">
                                Treacherously far condescending invidiously menially and constitutionally into capriciously.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">03</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>Real Time Tracking</h4>
                            <div class="text">
                                Air Mart Diplomatic Cargo and Logistics Port is the most efficient port in the region, with a sub-3 hour turnaround.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">04</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>24/7 Online Support</h4>
                            <div class="text">
                                The shortest transit time between seaport, airport and industrial zones in the Gulf.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Work-process Section -->
    <section class="work-process-section">
        <div class="bg" style="background-image: url({{ asset('assets/images/background/bg-2.jpg') }});"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title text-center">How We Work</div>
                <h2>We Aim to Contribute Well to <br> Your Company</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">01</div>
                        <div class="icon"><span class="flaticon-shipping"></span></div>
                        <h4>Replenishment <br> & Picking</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                        <div class="count">02</div>
                        <div class="icon"><span class="flaticon-warehouse"></span></div>
                        <h4>Warehousing <br> Operation</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">03</div>
                        <div class="icon"><span class="flaticon-packing-list"></span></div>
                        <h4>Packaging <br> & Distribution</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="count">04</div>
                        <div class="icon"><span class="flaticon-delivery-1"></span></div>
                        <h4>Transportation <br> Process</h4>
                    </div>
                </div>

            </div>
            <div class="bottom-text">
                Simplifying Your Freight & Logistics Needs With a Personal Approach.<a href="{{ url('services') }}"> Services</a>
            </div>
        </div>
    </section>

    <!-- Industries Covered -->
    <section class="industries-covered" style="background-image: url({{ asset('assets/images/background/bg-3.jpg') }});">
        <div class="background-text" data-parallax='{"x": 100}'>industries</div>
        <div class="outer-box side-container">
            <div class="outer-container">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url({{ asset('assets/images/resource/image-2.jpg') }});">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Warehouse</h4>
                                <div class="text">
                                    EFulfillment is on the rise more than ever. While many warehouses can do it, not many can do it right! We specialize in e-commerce work and have highly trained experience teams.</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url({{ asset('assets/images/resource/image-4.jpg') }});">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Construction <br> Companies</h4>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image"
                                 style="background-image: url({{ asset('assets/images/resource/image-5.jpg') }});">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-box-1"></span></div>
                                <h4>Vehicle <br> Manufacturing</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Pricing & Plans</div>
                <h2>Our Effective and Affordable <br> Pricing Plans</h2>
            </div>
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Basic Plan</div></div>
                        <div class="price">$89.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block style-two">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms"
                         style="background-image: url({{ asset('assets/images/resource/image-3.jpg') }});">
                        <div class="category-wrapper"><div class="category">Standard Plan</div></div>
                        <div class="price">$129.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Advanced Plan</div></div>
                        <div class="price">$149.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facts Section -->
    <section class="facts-section">
        <div class="auto-container">
            <div class="wrapper-box" style="background-image: url({{ asset('assets/images/background/bg-4.jpg') }});">
                <div class="shape">
                    <div class="shape-one"><img src="{{ asset('assets/images/resource/image-4.png') }}" alt=""></div>
                    <div class="shape-two"><img src="{{ asset('assets/images/resource/image-5.png') }}" alt=""></div>
                    <div class="shape-three"><img src="{{ asset('assets/images/resource/image-6.png') }}" alt=""></div>
                    <div class="shape-four"><img src="{{ asset('assets/images/resource/image-7.png') }}" alt=""></div>
                    <div class="shape-five"><img src="{{ asset('assets/images/resource/image-8.png') }}" alt=""></div>
                </div>
                <div class="sec-title text-center light">
                    <div class="sub-title text-center">Interesting Facts</div>
                    <h2>The Numbers Speak for <br> themselves</h2>
                </div>
                <div class="outer-box">
                    <div class="row">
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/icon-3.png') }}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="6500">0</span>
                                    </div>
                                    <div class="text">Parcel Delivered</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/icon-4.png') }}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="254">0</span>
                                    </div>
                                    <div class="text">Expert Employee</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/icon-5.png') }}" alt="">
                                    </div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="2495">0</span>
                                    </div>
                                    <div class="text">Satisfied Clients</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/icon-3.png') }}">
                                    </div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="145">0</span>
                                    </div>
                                    <div class="text">Branches Across</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/icon-3.png') }}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3879">0</span>
                                    </div>
                                    <div class="text">Tons of Goods</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-top row m-0 justify-content-md-between align-items-center">
                <div class="sec-title">
                    <div class="sub-title">News & Updates</div>
                    <h2>Latest From Our Blog Post</h2>
                </div>
                <div class="link">
                    <a href="" class="readmore-link"><i class="flaticon-up-arrow"></i>Read All News</a>
                </div>
            </div>
            <div class="row">
                <!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here -->
                <script type="text/javascript" src="https://news.24-7pressrelease.com/247pr-news-widget.js?widgettitle=&amp;categories=181,243,279,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=2d57a1&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=11&amp;width=auto&amp;headlinesepstyle=dotted&amp;showimages=1&amp;numstories=5&amp;bgcolor=ffffff&amp;urldest=247pr">
                </script> <!-- 24-7 Press Release News wire Landing Page Widget Code Ends Here -->
            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form class="ajax-sub-form" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
