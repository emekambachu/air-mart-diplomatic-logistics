@extends('layouts.main')

@section('title')
    Track Shipment
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
                        <h1>Track Shipment</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Track Shipment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="getaquote-section style-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Track your shipment with the shipment code</div>
                <h2>Track Shipment</h2>

                @include('includes.alerts')
            </div>

            <form class="getaquote-form" action="{{ url('track-shipment') }}" method="post">
                @csrf
                <div class="row justify-content-center">

                    <div class="col-lg-6 mb-2">
                        <h4>Tracking Code</h4>
                        <div class="form-row-box">
                            <textarea name="tracking_id" placeholder="Tracking code"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group text-center">
                            <div class="row m-0 justify-content-center align-items-center">
                                <button type="submit" class="theme-btn btn-style-one">
                                    <span><i class="flaticon-up-arrow"></i>Track</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </section>

@endsection
