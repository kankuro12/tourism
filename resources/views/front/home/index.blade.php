@extends('front.layout.app')
@section('css')

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
                    {{-- <div class="group-btn">
                        <a href="#" data-hover="CLICK ME" class="btn-click">
                            <span class="text">go explore now</span>
                            <span class="icons fa fa-long-arrow-right"></span>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="hotel-view-main padding-top padding-bottom">
            <div class="container">
                <div class="journey-block">
                    <h3 class="title-style-2">{{ $data->chapter_title ?? '' }}
                        <span> {{ $data->chapter_subtitle ?? '' }}</span>
                    </h3>
                    <style>
                        .chapter-full {
                            display: block;
                            text-decoration: none;
                            width: 100%;
                            position: relative;
                            margin-bottom: 50px;
                            border-radius: 10px;
                            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);


                        }

                        .chapter-full img {
                            width: 100%;
                            border-radius: 10px;
                        }

                        .chapter-full .overlay-full {
                            position: absolute;
                            left: 7%;
                            right: 7%;
                            bottom: -30px;
                            background: white;
                            color: #222;
                            border-radius: 10px;
                            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
                            padding: 10px;
                        }

                        .chapter-full .overlay-full:hover {
                            color: #d7ba00;
                        }

                        .chapter-full .overlay-full .title {
                            font-weight: 600;
                            font-size: 18px;
                        }

                        .chapter-full .overlay-full .text {
                            font-weight: 500;
                            font-size: 16px;
                            white-space: nowrap;
                            overflow: hidden;

                        }

                    </style>
                    <div class="row">
                        @foreach ($chapters as $chapter)
                            <div class="col-md-6 " style="padding: 7px; ">
                                <a href="{{ route('chapter', ['chapter' => $chapter->id]) }}" class="chapter-full">
                                    <img src="{{ asset($chapter->image) }}" alt="">
                                    <div class="overlay-full">
                                        <div class="inner">
                                            <div class="text">
                                                {{ $chapter->short_desc }}
                                            </div>
                                            <div class="title">
                                                {{ $chapter->name }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>


                </div>
            </div>


        </div>
    </section>
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
                            <div class="tours-layout">
                                <div class="image-wrapper">
                                    <a href="tour-view.html" class="link">
                                        <img src="{{ asset($experience->image) }}" alt="" class="img-responsive">
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="tour-view.html" class="title">{{ $experience->name }}</a>
                                        <i class="icons flaticon-circle"></i>
                                    </div>

                                </div>
                                <div class="content-wrapper">

                                    <div class="content">

                                        <p class="text">{{ $experience->short_desc }}</p>
                                        <a href="tour-view.html" class="left-btn">View Detail</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="about-us.html" class="btn btn-transparent margin-top70">more experiences</a>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white chapters">
        <div class="container">
            {{-- <div class="destination-bar"></div> --}}
            <h2>
                Galleries
            </h2>
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4 ">
                        <a href="{{ route('gallery', ['gallery' => $gallery->id]) }}" class="chapter">
                            <img src="{{ asset($gallery->image) }}" alt="">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="title">
                                        {{ $gallery->name }}
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
                        {{-- <a href="tour-result.html" class="btn btn-maincolor">read more</a> --}}
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
    <div class="bg-white chapters">
        <div class="container">
            <div class="destination-bar"></div>
            <h2 class="text-left">
                Latest Notices
            </h2>
            @foreach ($notices as $notice)
                <div class="notice">
                    <div class="date">{{ $notice->created_at->toFormattedDateString() }}</div>
                    <a href="">{{ $notice->name }}</a>
                    <div>
                        {{ $notice->desc }}
                    </div>
                    <div>
                        <a target="_blank" href="{{ asset($notice->image) }}">Download</a>
                    </div>
                </div>
            @endforeach
            @if ($hasmore)
                <div class="text-center">
                    <a href="{{ route('notices') }}">View More</a>
                </div>
            @endif
        </div>
    </div>

    <section class="travelers" style="background-image: url('{{ asset($data->festival_image) }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="traveler-wrapper padding-top padding-bottom">
                        <div class="group-title white">
                            <div class="sub-title">
                                <p class="text">Celibrate with us</p>
                                <i class="icons flaticon-people"></i>
                            </div>
                            <h2 class="main-title">OUR FESTIVALS</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="traveler-list">
                        @foreach ($festivals as $festival)
                            <div class="traveler">
                                <div>
                                    <img class="w-100" src="{{ asset($festival->image) }}" alt="">
                                </div>
                                <div class="wrapper-content">
                                    <br>
                                    <p class="name">{{ $festival->name }}</p>
                                    <p class="description" style="margin:0px;">{{ $festival->short_desc }}</p>
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
            <h2>
                Top Destinations
            </h2>
            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col-md-4 ">
                        <a href="{{ route('destination', ['destination' => $destination->id]) }}" class="chapter">
                            <img src="{{ asset($destination->image) }}" alt="">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="title">
                                        {{ $destination->name }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

            <style>
                .guides{
                    background-size: cover;
                    background-position: bottom;
                }
                .guides .view-more{
                    text-align: center;
                    padding: 10px 0px;

                }
                .guides .view-more a{
                    padding: 5px 10px;
                    color: white;
                    font-size: 0.9rem;
                    background: #121212;
                    width: 150px;
                    display: inline-block;
                    border-radius: 5px;
                    font-weight: 600;
                    text-align: center
                }
                .chapters.guides h2{
                    color: white;


                }
                .guide {
                    display: flex;
                    text-decoration: none;
                    width: 100%;
                    position: relative;
                    border-radius: 10px;
                    overflow: hidden;
                    margin-bottom:30px;
                }
                .guide .image-holder{
                    flex:1;
                    padding:10px;
                    background: white;

                }


                .guide img{
                    width:100%;

                }
                .guide .overlay{
                    background:white;
                    color:#434a54;
                    padding:10px;
                    text-align: left;
                    height: 100%;
                }

                .guide .overlay .title{
                    font-weight: 500;
                    font-size: 17px;
                }
                .guide .overlay hr{
                    margin: 5px 0px !important;
                }
                .guide .overlay .about{
                    font-weight: 400;
                    font-size: 15px;
                    line-height: 18px;
                    height: 36px;
                    overflow: hidden;
                }
                .guide .overlay .guide-contact{
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }
                .guide .overlay .guide-social{
                    display: flex;
                    justify-content: start;

                }
                .guide .overlay .guide-social a:hover{
                    background: #d7ba00;
                }
                .guide .overlay .guide-social a{
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
                @media(max-width:425px){
                    .guide {
                        margin-bottom: 15px;
                        display: block;
                    }
                    .guide .overlay .about{
                        display: none;
                    }
                    .guide .image-holder{
                        flex:1;
                        padding:0px;
                    }
                    .guide img{
                        border-radius: 0;
                    }

                    .guide .overlay .guide-contact{
                        display: block;

                    }
                    .guide .overlay .guide-contact a{
                        display: block;

                    }
                }
            </style>
    <div class=" chapters guides" style="background-image: url('{{ asset($data->guide_image??'') }}')">
        <div class="container">
            <div class="destination-bar"></div>
            <h2>
               {{$data->guide_title}}
            </h2>
            <div class="row">
                @foreach ($guides as $guide)
                    <div class="col-md-6 ">
                        <div href="{{ route('guide', ['guide' => $guide->id]) }}" class="guide">
                            <div class="image-holder">
                                <img src="{{ asset($guide->image) }}" alt="">
                            </div>
                            <div  style="flex:2;">
                                <div class="overlay" >
                                    <div class="inner">
                                        <div class="title">
                                            {{ $guide->name }}
                                        </div>
                                        <div class="guide-address">
                                            {{ $guide->address }}
                                        </div>
                                        <div class="about">
                                            {{$guide->about}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic doloribus sapiente molestias perferendis nemo animi praesentium harum fugit itaque repellendus cumque eveniet, earum libero maiores necessitatibus quia tenetur suscipit nam!
                                        </div>
                                        <hr>
                                        <div class="guide-contact">
                                            <a href="tel:{{$guide->phone}}">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                {{$guide->phone}}
                                            </a>
                                            <a href="mailto:{{$guide->email}}">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                {{$guide->email}}
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="guide-social">
                                            <a href="{{$guide->facebook}}">
                                                <i class="fa fa-facebook-f" aria-hidden="true"></i>

                                            </a>
                                            <a href="mailto:{{$guide->instagram}}">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>

                                            </a>
                                            <a href="mailto:{{$guide->twitter}}">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <div class="clearfix"></div>
            <div class="text-center view-more">
                <a href="{{route('guides')}}">View More
                </a>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset('front/js/pages/home-page.js') }}"></script>
@endsection
