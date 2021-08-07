@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <section class="page-title" style="background-image: url({{ asset('assets/images/background/bg-20.jpg') }});">
        <div class="background-text">
            <div data-parallax="{&quot;x&quot;: 100}" style="transform:translate3d(18.973px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(18.973px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>About Company</h1>
                    </div>
                    <ul class="bread-crumb style-two">
                        <li class="active">
                            <a href="">About Company <i class="flaticon-up-arrow"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="who-we-are-section">
        <div class="top-content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-title mb-30">
                            <div class="sub-title">Company</div>
                            <h2>Provide a <br> Reliable Services <br> Since 1942</h2>
                        </div>
                        <div class="experience-year">
                            <div class="icon"><i class="flaticon-package-1"></i></div>
                            <div class="content">
                                <h3>78 <span>+ Years</span></h3>
                                <h5>Experience In Logistics</h5>
                            </div>

                        </div>
                        <div class="link mb-30"><a href="" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Our History</span></a></div>
                    </div>
                    <div class="col-lg-8">
                        <div class="image mb-30">
                            <img src="{{ asset('assets/images/resource/image-34.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
                    <h2>Transida has been operating in the US now, for over 78 years and are part <br>  of a reliable, global integrated network.</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                                <p>If your 3PL or distribution center is seeking to grow, Future Logistic Transnational Company is the place to be. When you choose Future Logistic Transnational Company, you are choosing a solid foundation of air, land and sea transportation that will enhance your business growth and keep you competitive in the global marketplace.</p>
                            </div>
                            <div class="author-info wow fadeInUp animated" data-wow-duration="1500ms"
                                 style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                                       class="overlay-link lightbox-image video-fancybox">
                                        <i class="flaticon-play-arrow"></i></a>
                                </div>
                                <div class="signature">
                                    <img src="{{ asset('assets/images/resource/sign.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row m-10">
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft animated" data-wow-delay="0ms"
                                         data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms;
                                          animation-delay: 0ms; animation-name: fadeInLeft;">
                                        <div class="content">
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="3000" data-stop="6.5">
                                                    6.5</span><span>k</span>
                                            </div>
                                            <h4>Parcel <br> Delivered</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft animated" data-wow-delay="0ms"
                                         data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms;
                                          animation-delay: 0ms; animation-name: fadeInLeft;">
                                        <div class="content">
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="3000" data-stop="3.4">
                                                    3.4</span><span>k</span>
                                            </div>
                                            <h5>Air</h5>
                                            <div class="icon"><span class="flaticon-airplane"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft animated" data-wow-delay="0ms"
                                         data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms;
                                          animation-delay: 0ms; animation-name: fadeInLeft;">
                                        <div class="content">
                                            <div class="icon"><span class="flaticon-cargo-ship-1"></span></div>
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="3000" data-stop="1.7">
                                                    1.7</span><span>k</span>
                                            </div>
                                            <h5>Ocean</h5>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft animated" data-wow-delay="0ms"
                                         data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms;
                                          animation-delay: 0ms; animation-name: fadeInLeft;">
                                        <div class="content">
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="3000" data-stop="1.4">
                                                    1.4</span><span>k</span>
                                            </div>
                                            <h5>Road</h5>
                                            <div class="icon"><span class="flaticon-box-1"></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statement-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="{{ asset('assets/images/resource/image-35.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="badge">
                            <img src="{{ asset('assets/images/resource/badge-3.png') }}" alt="">
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp animated" data-wow-delay="200ms"
                             data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms;
                              animation-delay: 200ms; animation-name: fadeInUp;">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel"
                                 aria-labelledby="tab-one">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Mission Statement</h2>
                                    </div>
                                    <div class="text">Our goal is not to be in all locations, but the right locations to serve the global needs of our customers and partners. Future Logistic Transnational Company was formed to ‘fill a gap’ in the SE Asia market (ASEAN) as well as locate in all key global trading lanes.</div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Vision Statement</h2>
                                    </div>
                                    <div class="text">
                                        We need to be excellent at what we do. A talent pool experienced, well-trained logisticians provides the key driver to sustainable, consistent and quality execution. Measured metrics drive internal process, continuous improvement and tie to our internal incentive plans.</div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Company Value</h2>
                                    </div>
                                    <div class="text">Our global network of locations like Southern California, USA, Singapore, The Netherlands or Dubai, UAE allows our team to move your products quickly and efficiently from one country to another supporting your supply chain.</div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab"
                                   href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab"
                                   href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area" data-toggle="tab"
                                   href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Value</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="whychooseus-section-four"
             style="background-image: url({{ asset('assets/images/background/bg-23.jpg') }});">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="sub-title">Why Choose Us</div>
                <h2>6 Reasons Why to Choose Our <br> Freight Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated animated" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon">
                            <span class="flaticon-shield"></span>
                            <i class="fas fa-check"></i></div>
                        <h4>Transparent Pricing</h4>
                        <div class="text">The lowest prices with the fastest service ensures you get the best deal faster.</div>
                        <div class="count">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated animated" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-delivery"></span>
                            <i class="fas fa-check"></i>
                        </div>
                        <h4>On - Time Delivery</h4>
                        <div class="text">
                            The shortest transit time between seaport, airport and industrial zones in the Gulf.</div>
                        <div class="count">02</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated animated" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-box"></span>
                            <i class="fas fa-check"></i></div>
                        <h4>Widest Network</h4>
                        <div class="text">
                            Partnerships with more than 120+ carriers spanning across all of North America.</div>
                        <div class="count">03</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated animated" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-24-hours"></span>
                            <i class="fas fa-check"></i>
                        </div>
                        <h4>24/7 Online Support</h4>
                        <div class="text">
                            The highest levels of customer service and personalized shipments in the industry.</div>
                        <div class="count">04</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
