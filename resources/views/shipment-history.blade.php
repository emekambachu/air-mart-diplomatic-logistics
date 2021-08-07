@extends('layouts.main')

@section('title')
    Shipment History
@endsection

@section('top-assets')
    <style>
        .shipment-header{
            background-color: #352D66;
            color: #FFFFFF;
            padding: 10px;
            border-radius: 7px;
        }
    </style>
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
                        <h1>Shipment History</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Shipment History</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 50px;">

        <div class="row shipment-header" style="background-color: #293E9C;">
            <div class="col-md-12"><h3 class="text-white text-center">Shipment Details</h3></div>
            <div class="col-md-4">
                <p class="text-white"><strong>Tracking ID:</strong> {{ $shipment->tracking_id }}</p>
                <p class="text-white"><strong>Carrier Reference No.:</strong> {{ $shipment->carrier_ref }}</p>
                <p class="text-white"><strong>Origin:</strong> {{ $shipment->userDetail->sender_country }}</p>
                <p class="text-white"><strong>Destination:</strong> {{ $shipment->userDetail->receiver_country }}</p>
                <p class="text-white"><strong>Parcel Type:</strong> {{ $shipment->parcel }}</p>
                <p class="text-white"><strong>Product Description:</strong> {{ $shipment->product }}</p>
                <p class="text-white"><strong>Product Quantity:</strong> {{ $shipment->quantity }}</p>
                <p class="text-white"><strong>Parcel Weight:</strong> {{ $shipment->parcel_weight }}KG</p>
                <p class="text-white"><strong>Shipment Mode:</strong> {{ $shipment->shipment_mode }}</p>
                <p class="text-white"><strong>Payment Mode:</strong> {{ $shipment->payment_mode }}</p>
                <p class="text-white"><strong>Shipment Date:</strong> {{ $shipment->created_at }}</p>
            </div>

            <div class="col-md-4">
                <p class="text-white"><strong>Sender Information</strong></p>
                <p class="text-white"><strong>Name:</strong> {{ $shipment->userDetail->sender_name }}</p>
                <p class="text-white"><strong>Mobile:</strong> {{ $shipment->userDetail->sender_mobile }}</p>
                <p class="text-white"><strong>Address:</strong> {{ $shipment->userDetail->sender_address }}</p>
            </div>

            <div class="col-md-4">
                <p class="text-white"><strong>Receiver Information</strong></p>
                <p class="text-white"><strong>Name:</strong> {{ $shipment->userDetail->receiver_name }}</p>
                <p class="text-white"><strong>Mobile:</strong> {{ $shipment->userDetail->receiver_mobile }}</p>
                <p class="text-white"><strong>Address:</strong> {{ $shipment->userDetail->receiver_address }}</p>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Country</th>
                <th scope="col">Location</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>

            @if($checkpoints)
                @foreach($checkpoints as $checkpoint)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $checkpoint->country }}</td>
                        <td>{{ $checkpoint->location }}</td>
                        <td>{{ $checkpoint->description }}</td>
                        <td>{{ $checkpoint->status }}</td>
                        <td>{{ $checkpoint->created_at }}</td>
                    </tr>
                @endforeach
            @else
                <p>Awaiting Shipment</p>
            @endif
            </tbody>
        </table>

    </div><!-- /.col-lg-8 -->
@endsection
