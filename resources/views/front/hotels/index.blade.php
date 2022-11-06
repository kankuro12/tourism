@extends('front.layout.app')
@section('css')
@endsection
@section('meta')
<meta name="description" content="{{App\SM::getMeta('hotels')}}">
@endsection
@section('title')
    Hotels
@endsection
@section('content')
    <section class="page-banner blog-detail" style="background-image: url({{ asset($data->slider_image) }})">
        <div class="container">
            <div class="page-title-wrapper">
                <div class="page-title-content">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/" class="link home">Home</a>
                        </li>

                        <li class="active">
                            <a href="#" class="link">Hotels</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                    <h1 style="margin-bottom:20px;">Hotels</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="page-main padding-top padding-bottom">
        <style>
            .single-hotel {
                padding-bottom: 15px;
            }

            .single-hotel>img {
                width: 100%;
                border-radius: 3px;
            }

            .single-hotel>.address {
                color: #555E69;
                font-size: .0.9rem;
                line-height: 1.16666em;
                margin-top: 10px;
            }

            .single-hotel>.name {
                font-size: calc(1rem + .29851vw - .09328em);
                color: #292929;
                line-height: 1.16666em;
                margin-top: 5px;
                font-weight: 700;
            }

            .single-hotel>.short_desc {
                font-size: 1rem;
                color: #555E69;
                line-height: 1.2em;
                margin-top: 5px;
                height: 3.6rem;
                overflow: hidden;
            }

            .single-hotel>.bottom {
                display: flex;
            }

            .single-hotel>.bottom>a {
                flex: 1;
                text-align: center;
                padding: 8px;
                text-decoration: none;
                color: #121212;
                font-weight: 500;
                cursor: pointer;
            }

            .single-hotel>.bottom>a.call {
                border: 1px solid;
                border: 2px solid #b12029;
                border-radius: 5px;
            }

            .single-hotel>.bottom>a.call:hover {
                color: white !important;
                background: #b12029;
            }
        </style>
        <div class="container">

            <div class="row" >
                @foreach ($hotels as $hotel)
                    <div class="col-md-4 col-lg-3 col-12">
                        <div class="single-hotel">
                            <img src="{{ asset($hotel->image) }}" alt="">
                            <div class="address">{{ $hotel->address }}</div>
                            <div class="name">{{ $hotel->name }}</div>
                            <div class="short_desc">{{ $hotel->short_desc }}</div>
                            <div class="bottom">
                                <a href="tel:{{ $hotel->phone }}" class="call">Call Now</a>
                                <a class="detail" href="{{route('hotel',['hotel'=>$hotel->slug])}}">View Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
