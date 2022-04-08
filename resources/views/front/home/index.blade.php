@extends('front.layout.app')
@section('css')
    <style>
        .chapters {
            padding: 40px 0px;
        }

        .chapters .col-md-4 {
            padding: 5px;
        }

        .chapter {
            display: block;
            text-decoration: none;
            position: relative;
        }

        .chapter>.overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
        }

        .chapter>.overlay>.inner {
            position: absolute;
            color: white;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 15px 10px;



        }

        .chapter>.overlay>.inner>.text {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;

        }

        .chapter>.overlay>.inner>.title {
            font-weight: 600;
            font-size: 18px;
        }

        .chapter img {
            width: 100%;
        }

        .destination-bar{
            height:60px;
        }

    </style>
@endsection
@section('title', 'Home')
@section('content')
    <section class="page-banner homepage-default" style="background-image: url('{{ asset($data->slider_image) }}')">
        <div class="container">
            <div class="homepage-banner-warpper">
                <div class="homepage-banner-content">
                    <div class="group-title">
                        <h1 class="title">{{ $data->slider_title }}</h1>
                        <p class="text">{{ $data->slider_subtitle }}
                            <span class="boder"></span>
                        </p>
                    </div>
                    <div class="group-btn">
                        <a href="#" data-hover="CLICK ME" class="btn-click">
                            <span class="text">go explore now</span>
                            <span class="icons fa fa-long-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white chapters">
        <div class="container">

            <div class="row">
                @foreach ($chapters as $chapter)
                    <div class="col-md-4 col-6">
                        <a href="{{route('chapter',['chapter'=>$chapter->id])}}" class="chapter">
                            <img src="{{ asset($chapter->image) }}" alt="">
                            <div class="overlay">
                                <div class="inner">

                                    <div class="text">
                                        {{$chapter->short_desc}}
                                    </div>
                                    <div class="title">
                                        {{$chapter->name}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <section class="tours padding-top padding-bottom" style="background-image: url('{{ asset($data->exp_image) }}')">
        <div class="container">
            <div class="tours-wrapper">
                <div class="group-title">
                    <div class="sub-title">
                        <p class="text">PACK AND GO</p>
                        <i class="icons flaticon-people"></i>
                    </div>
                    <h2 class="main-title">awesome experiences</h2>
                </div>
                <div class="tours-content margin-top70">
                    <div class="tours-list">
                        @foreach ($experiences as $experience)

                        @endforeach
                        <div class="tours-layout">
                            <div class="image-wrapper">
                                <a href="tour-view.html" class="link">
                                    <img src="{{asset($experience->image)}}" alt="" class="img-responsive">
                                </a>
                                <div class="title-wrapper">
                                    <a href="tour-view.html" class="title">{{$experience->name}}</a>
                                    <i class="icons flaticon-circle"></i>
                                </div>

                            </div>
                            <div class="content-wrapper">

                                <div class="content">

                                    <p class="text">{{$experience->short_desc}}</p>
                                    <a href="tour-view.html" class="left-btn">View Detail</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about-us.html" class="btn btn-transparent margin-top70">more experiences</a>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white chapters">
        <div class="container">
            {{-- <div class="destination-bar"></div> --}}
            <h2 class="text-center">
                Galleries
            </h2>
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4 col-6">
                        <a href="{{route('chapter',['chapter'=>$gallery->id])}}" class="chapter">
                            <img src="{{ asset($gallery->image) }}" alt="">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="title">
                                        {{$gallery->name}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <section class="videos layout-1" style="background-image: url('{{ asset($data->explore_bg) }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="video-wrapper padding-top padding-bottom">
                        <h5 class="sub-title">{{ $data->explore_title }}</h5>
                        <h2 class="title">go explore</h2>
                        <div class="text">
                            {{ $data->explore_text }}
                        </div>
                        <a href="tour-result.html" class="btn btn-maincolor">read more</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="video-thumbnail">
                        <div class="video-bg">
                            <img src="{{ asset($data->explore_image) }}" alt="" class="img-responsive">
                        </div>
                        <div class="video-button-play">
                            <i class="icons fa fa-play"></i>
                        </div>
                        <div class="video-button-close"></div>
                        <iframe src="{{ $data->explore_video }}" allowfullscreen="allowfullscreen"
                            class="video-embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="travelers">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="traveler-wrapper padding-top padding-bottom">
                        <div class="group-title white">
                            <div class="sub-title">
                                <p class="text">RELAX AND ENJOY</p>
                                <i class="icons flaticon-people"></i>
                            </div>
                            <h2 class="main-title">Travel Guides</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="traveler-list">
                        @foreach ($guides as $guide)

                        <div class="traveler">
                            <div class="cover-image">
                                <img src="{{asset($guide->image)}}" alt="">
                            </div>
                            <div class="wrapper-content">
                                <div class="avatar">
                                    <img src="{{asset($guide->image)}}" alt="" class="img-responsive">
                                </div>
                                <p class="name">{{$guide->name}}</p>
                                <p class="address">{{$guide->address}}</p>
                                <p class="description">{{$guide->about}}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white chapters">
        <div class="container">
            <div class="destination-bar"></div>
            <h2 class="text-center">
                Top Destinations
            </h2>
            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col-md-4 col-6">
                        <a href="{{route('chapter',['chapter'=>$destination->id])}}" class="chapter">
                            <img src="{{ asset($destination->image) }}" alt="">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="title">
                                        {{$destination->name}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset('front/js/pages/home-page.js') }}"></script>
@endsection
