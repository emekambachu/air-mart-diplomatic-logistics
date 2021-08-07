@extends('layouts.main')

@section('title')
    Services
@endsection

@section('content')
    <section class="page-title" style="background-image: url({{ asset('assets/images/background/bg-20.jpg') }});">
        <div class="background-text">
            <div data-parallax="{&quot;x&quot;: 100}" style="transform:translate3d(56.831px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(56.831px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Services</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Services</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel owl-loaded owl-drag" data-options="{&quot;loop&quot;: true, &quot;margin&quot;: 0, &quot;autoheight&quot;:true, &quot;lazyload&quot;:true, &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000, &quot;smartSpeed&quot;: 1000, &quot;responsive&quot;:{ &quot;0&quot; :{ &quot;items&quot;: &quot;1&quot; }, &quot;600&quot; :{ &quot;items&quot; : &quot;1&quot; }, &quot;768&quot; :{ &quot;items&quot; : &quot;2&quot; } , &quot;992&quot;:{ &quot;items&quot; : &quot;2&quot; }, &quot;1200&quot;:{ &quot;items&quot; : &quot;3&quot; }}}">



                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1513px, 0px, 0px);
                        transition: all 1s ease 0s; width: 3532px;">

                            <div class="owl-item cloned" style="width: 504.5px;">
                                <div class="col-lg-12 service-block">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/images/resource/image-13.jpg') }}" alt="">
                                            <div class="content">
                                                <div>
                                                    <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                                    <h4>Ocean Freight</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                Wherever your cargo is going, we can arrange the shipment for you and remain competitive with the market.</div>
                                        </div>
                                        <div class="overlay"
                                             style="background-image: url({{ asset('assets/images/resource/image-13-2.jpg') }});">
                                            <div>
                                                <div class="content">
                                                    <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                                    <h4>Ocean Freight</h4>
                                                </div>
                                                <div class="text">
                                                    Wherever your cargo is going, we can arrange the shipment for you and remain competitive with the market.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item cloned" style="width: 504.5px;"><div class="col-lg-12 service-block">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/images/resource/image-14.jpg') }}" alt="">
                                            <div class="content">
                                                <div>
                                                    <div class="icon"><span class="flaticon-airplane"></span></div>
                                                    <h4>Road Freight</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">We work close with strategic partners to ensure our domestic trucking offers clients everything they need.</div>
                                        </div>
                                        <div class="overlay"
                                             style="background-image: url({{ asset('assets/images/resource/image-14-2.jpg') }});">
                                            <div>
                                                <div class="content">
                                                    <div class="icon"><span class="flaticon-airplane"></span></div>
                                                    <h4>Road Freight</h4>
                                                </div>
                                                <div class="text">
                                                    We work close with strategic partners to ensure our domestic trucking offers clients everything they need.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item" style="width: 504.5px;"><div class="col-lg-12 service-block">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/images/resource/image-12.jpg') }}" alt="">
                                            <div class="content">
                                                <div>
                                                    <div class="icon"><span class="flaticon-airplane"></span></div>
                                                    <h4>Air Freight</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                Future Logistic Transnational Company partners with airlines and freight forwarders to offer seamless air freight solutions to clients globally. We offer a competitive and quick service which includes our air express, high priority (24 hours) delivery.
                                            </div>
                                        </div>
                                        <div class="overlay"
                                             style="background-image: url({{ asset('assets/images/resource/image-12-2.jpg') }});">
                                            <div>
                                                <div class="content">
                                                    <div class="icon"><span class="flaticon-airplane"></span></div>
                                                    <h4>Air Freight</h4>
                                                </div>
                                                <div class="text">
                                                    Future Logistic Transnational Company partners with airlines and freight forwarders to offer seamless air freight solutions to clients globally. We offer a competitive and quick service which includes our air express, high priority (24 hours) delivery.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev">
                            <span aria-label="Previous">‹</span></button>
                        <button type="button" role="presentation" class="owl-next">
                            <span aria-label="Next">›</span></button></div>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot active">
                            <span></span></button>
                        <button role="button" class="owl-dot">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="services-section-two style-two mx-30">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Value Added Services</div>
                <h2>We offer various value added <br>services in logisitcs</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ asset('cash/cash1.jpg') }}" alt="">
                            <div class="icon"><span class="flaticon-insurance"></span></div>
                        </div>
                        <div class="content">
                            <h4>Cash Delivery</h4>
                            <div class="text">
                                Cash in the amounts and denominations you want, delivered to your business premises.</div>
                            <div class="link">
                                <a href="#" class="readmore-link"><span><i class="flaticon-up-arrow"></i>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ asset('cash/cash2.jpg') }}" alt="">
                            <div class="icon"><span class="flaticon-import"></span></div>
                        </div>
                        <div class="content">
                            <h4>Cash Collection</h4>
                            <div class="text">
                                Cash collected from your business premises and deposited into your account.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
