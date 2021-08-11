@extends('layouts.main')

@section('title')
    Contact us
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
                        <h1>Contact us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-info-section-two">
        <div class="auto-container">
            <div class="nav-tabs-wrapper">
                <div class="nav nav-tabs tab-btn-style-two">
                    <div class="theme_carousel owl-theme owl-carousel owl-loaded owl-drag" data-options="{&quot;loop&quot;: false, &quot;margin&quot;: 0, &quot;autoheight&quot;:true, &quot;lazyload&quot;:true, &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000, &quot;smartSpeed&quot;: 1000, &quot;responsive&quot;:{ &quot;0&quot; :{ &quot;items&quot;: &quot;1&quot; }, &quot;600&quot; :{ &quot;items&quot; : &quot;1&quot; }, &quot;768&quot; :{ &quot;items&quot; : &quot;2&quot; } , &quot;992&quot;:{ &quot;items&quot; : &quot;2&quot; }, &quot;1200&quot;:{ &quot;items&quot; : &quot;3&quot; }}}">

                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-570px, 0px, 0px); transition: all 1s ease 0s; width: 1140px;"><div class="owl-item" style="width: 190px;"><ul class="item">
                                        <li><a class="active" data-toggle="tab" href="#tab-one">
                                                <h4>Hoxton - HO</h4>
                                            </a></li>
                                    </ul></div><div class="owl-item" style="width: 190px;"><ul class="item">
                                        <li><a data-toggle="tab" href="#tab-two">
                                                <h4>Melbourne</h4>
                                            </a></li>
                                    </ul></div><div class="owl-item" style="width: 190px;"><ul class="item">
                                        <li><a data-toggle="tab" href="#tab-three">
                                                <h4>Houston</h4>
                                            </a></li>
                                    </ul></div><div class="owl-item active" style="width: 190px;"><ul class="item">
                                        <li><a class="active" data-toggle="tab" href="#tab-four">
                                                <h4>Hoxton - HO</h4>
                                            </a></li>
                                    </ul></div><div class="owl-item active" style="width: 190px;"><ul class="item">
                                        <li><a data-toggle="tab" href="#tab-five">
                                                <h4>Melbourne</h4>
                                            </a></li>
                                    </ul></div><div class="owl-item active" style="width: 190px;"><ul class="item">
                                        <li><a data-toggle="tab" href="#tab-six">
                                                <h4>Houston</h4>
                                            </a></li>
                                    </ul></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fadeInUp animated" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@airmartlogistics.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled &amp; demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated active" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h5 class="text-white mb-2"><span class="flaticon-cursor"></span>
                                    Head Office: Molla Gurani Cadesi, Emin Ali Yasin Sk. No:6. Findikzade, Istanbul Turkey<br><br>
                                    Branch office: Unit 19, Mitre Bridge Industrial Park, London, W10 London,United Kingdom
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@airmartlogistics.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled &amp; demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h5 class="text-white mb-2"><span class="flaticon-cursor"></span>
                                    Head Office: Molla Gurani Cadesi, Emin Ali Yasin Sk. No:6. Findikzade, Istanbul Turkey<br><br>
                                    Branch office: Unit 19, Mitre Bridge Industrial Park, London, W10 London,United Kingdom
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="mailto:info@airmartlogistics.com">info@airmartlogistics.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled &amp; demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h5 class="text-white mb-2"><span class="flaticon-cursor"></span>
                                    Head Office: Molla Gurani Cadesi, Emin Ali Yasin Sk. No:6. Findikzade, Istanbul Turkey<br><br>
                                    Branch office: Unit 19, Mitre Bridge Industrial Park, London, W10 London,United Kingdom
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@airmartlogistics.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled &amp; demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-five" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h5 class="text-white mb-2"><span class="flaticon-cursor"></span>
                                    Head Office: Molla Gurani Cadesi, Emin Ali Yasin Sk. No:6. Findikzade, Istanbul Turkey<br><br>
                                    Branch office: Unit 19, Mitre Bridge Industrial Park, London, W10 London,United Kingdom
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@airmartlogistics.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled &amp; demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-six" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>
                                    Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@airmartlogistics.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled &amp; demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Drop a line</div>
                <h2>We’re Always Here for You</h2>
                <div class="text">Please do not hesitate to contact us if you require further information about our logisitc service.</div>
            </div>
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/inc/sendemail.php" id="contact-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="company_name" value="" placeholder="Company Name" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" name="email" value="" placeholder="Your Email" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" name="form_phone" value="" placeholder="PHone Num" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <div class="dropdown bootstrap-select"><select class="selectpicker" name="form_subject" tabindex="-98">
                                    <option value="*">Enquire About</option>
                                    <option value=".category-1">About Company </option>
                                    <option value=".category-3">Leadership Team</option>
                                    <option value=".category-4">Global Networks</option>
                                </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Enquire About"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Enquire About</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="form_message" placeholder="Massage"></textarea>
                        </div>
                        <div class="form-group text-center col-md-12">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span><i class="flaticon-up-arrow"></i>Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form-->
        </div>
    </section>
@endsection
