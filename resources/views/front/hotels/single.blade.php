@extends('front.layout.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endsection
@section('title')
    Hotel - {{ $hotel->name }}
@endsection
@section('content')
    <section class="page-banner blog-detail" style="background-image: url({{ asset($hotel->image) }})">
        <div class="container">
            <div class="page-title-wrapper">
                <div class="page-title-content">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/" class="link home">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('hotels') }}" class="link">Hotels</a>
                        </li>
                        <li class="active">
                            <a href="#" class="link">{{ $hotel->name }}</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                    <h1 style="margin-bottom:10px;">{{ $hotel->name }}</h1>
                    <h4 style="margin-bottom:20px;">{{ $hotel->address }}</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="page-main padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    {!! $hotel->desc !!}
                    <h3>
                        Amenities
                    </h3>
                    @php
                        $amenities=json_decode($hotel->amenities);

                    @endphp
                    <div class="row">

                        @foreach ( $amenities as $amenity)
                            <div class="col-md-3">
                                • {{$amenity->value}}
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <style>
                           .guide-social{
                            display: flex;
                            justify-content: start;
                            flex-wrap: wrap;

                        }
                         .guide-social a:hover{
                            background: #d7ba00;
                        }
                         .guide-social a{
                            height: 35px;
                            width:35px;
                            background: #121212;
                            color: #fff;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            margin: 0px 7px;
                            border-radius: 50%;
                            }
                            iframe.map{
                                width: 100%;
                                height: 400px;
                            }
                    </style>
                    <div class="guide-social">
                        <a href="tel:{{$hotel->phone}}">
                            <i class="fa fa-phone" aria-hidden="true"></i>

                        </a>
                        <a href="mailto:{{$hotel->email}}">
                            <i class="fa fa-envelope" aria-hidden="true"></i>

                        </a>
                        <a href="{{$hotel->facebook}}">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>

                        </a>
                        <a href="{{$hotel->instagram}}">
                            <i class="fa fa-instagram" aria-hidden="true"></i>

                        </a>
                        <a href="{{$hotel->twitter}}">
                            <i class="fa fa-twitter" aria-hidden="true"></i>

                        </a>
                    </div>
                    <hr>

                    <div class="row">
                        @foreach ($medias as $media)
                            <div class="col-md-4 col-6" style="padding:5px;">
                                <div class="media">
                                    @if ($media->media == 1)
                                        <img class="w-100" data-fancybox="gallery-image" data-type="image"
                                            src="{{ asset($media->image) }}" href="{{ asset($media->image) }}" alt="">
                                    @else
                                        <div class="video" data-fancybox="gallery-video" data-type="html"
                                            href="https://www.youtube.com/embed/{{ $media->image }}">
                                            <span class="icon">
                                                <i class="fa fa-play"></i>
                                            </span>
                                        </div>
                                        <img class="w-100" src="https://i.ytimg.com/vi/{{ $media->image }}/0.jpg"
                                            alt="">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <div class="map">
                        <iframe src="https://maps.google.com/maps?q={{$hotel->map}}&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" class="map"></iframe>
                    </div>


                </div>
                <div class="col-md-4">
                    <h3>
                        Other Hotels
                    </h3>
                    @foreach ($hotels as $hotel)
                        <div style="margin-bottom:10px;">
                            <a href="{{ route('hotel', ['hotel' => $hotel->id]) }}" class="chapter">
                                <img src="{{ asset($hotel->image) }}" alt="">
                                <div class="overlay">
                                    <div class="inner">
                                        <div class="title">
                                            {{ $hotel->name }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection
