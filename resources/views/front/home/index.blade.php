@extends('front.layout.app')
@section('meta')
<meta name="description" content="{{App\SM::getMeta('home')}}">
@endsection
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
    <div class="journey-block">


        <style>

            .chapter-row{
                margin: 0px -5px;
                display: flex;
                flex-wrap: wrap;
            }


            .chapter-row>.col-md-6.main{
                padding-bottom: 0px !important;
            }

            .chapter-row>.col-md-6{
                width: 50%;
                padding-right:5px;
                padding-left: 5px;
                padding-bottom: 10px;


            }
            .chapter-row>.col-md-12.main{
                padding-bottom: 0px !important;
            }
            .chapter-row>.col-md-12{
                width: 100%;
                padding-right:5px;
                padding-left: 5px;
                padding-bottom: 10px;


            }
            .single-chapter{
                position: relative;
                display: block;
            }
            .single-chapter>.feature-image{
                width: 100%;
            }
            .single-chapter>.chapter-info{
                position: absolute;
                bottom: 0px;
                left: 0px;
                right: 0px;
                top: 0px;
                padding: 15px;
                display: flex;
                align-items: flex-end;
                background: rgba(0, 0, 0, 0.1);

            }
            /* .single-chapter>.chapter-info>.logo{
                height: 30px;
                widows: 30px;

            } */
            .single-chapter>.chapter-info>.logo>img{
                height: 50px;
                widows: 50px;
                border-radius: 50%;
            }
            .single-chapter>:hover.chapter-info>.logo>img{
                background: rgba(255, 255, 255, 0.5);
            }
            .single-chapter>.chapter-info>.title{
                line-height: 50px;
                padding-left: 10px;
                color:white;
                font-size: 20px;
            }
            .chapter-top{
                margin-top: 70px;
                padding-left:40px;
            }

            .chapters-mobile{
                display: none;
            }
            @media (max-width:425px){

                .chapter-row>div{
                    width: 100% !important;
                }
                .chapters-desktop{
                    display: none;
                }
                .chapter-top{
                    padding-left: 0px;
                    margin-left:10px;
                }
                .chapters-mobile{
                    display: block;
                }
                .chapters-mobile>.chapter-row>.col-md-6{
                    width: 50% !important;
                }
                .single-chapter>.chapter-info{
                    flex-direction: column;
                    align-items: flex-start;
                    justify-content: flex-end;
                    padding: 10px;
                }
                .single-chapter>.chapter-info>.logo>img{
                height: 30px;
                widows: 30px;
                border-radius: 50%;
            }
            .single-chapter>:hover.chapter-info>.logo>img{
                background: rgba(255, 255, 255, 0.5);
            }
            .single-chapter>.chapter-info>.title{
                line-height: 25px;
                color:white;
                font-size: 17px;
                padding-left: 0px;
                margin-right: 10px;

            }
            }

        </style>
         <h3 class="title-style-2 chapter-top">{{ $data->chapter_title ?? '' }}
            <span> {{ $data->chapter_subtitle ?? '' }}</span>
        </h3>
        @include('front.home.chapter')

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
                            <div class="tours-layout">
                                <div class="image-wrapper">
                                    <a href="{{route('experience',['experience'=>$experience->slug])}}" class="link">
                                        <img src="{{ asset($experience->image) }}" alt="" class="img-responsive">
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="{{route('experience',['experience'=>$experience->slug])}}" class="title">{{ $experience->name }}</a>
                                        <i class="icons flaticon-circle"></i>
                                    </div>

                                </div>
                                <div class="content-wrapper">

                                    <div class="content">

                                        <p class="text">{{ $experience->short_desc }}</p>
                                        <a href="{{route('experience',['experience'=>$experience->slug])}}" class="left-btn">View Detail</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{route('experiences')}}" class="btn btn-transparent margin-top70">more experiences</a>
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
                        <a href="{{ route('gallery', ['gallery' => $gallery->slug]) }}" class="chapter">
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
                        <a href="{{ route('destination', ['destination' => $destination->slug]) }}" class="chapter">
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
               {{$data->guide_title??''}}
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
                                            {{$guide->about}}
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
                                            <a href="{{$guide->instagram}}">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>

                                            </a>
                                            <a href="{{$guide->twitter}}">
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

    <style>
        .hotels{
            padding:30px 0px;
            background: white;
        }
        .hotels .view-more>a{
            padding: 5px 10px;
            color: white;
            font-size: 0.9rem;
            background: #121212;
            width: 150px;
            display: inline-block;
            border-radius: 5px;
            font-weight: 600;
            text-align: center;
        }
        .single-hotel{
            padding-bottom: 15px;
        }
        .single-hotel>img{
            width: 100%;
            border-radius: 3px;
        }
        .single-hotel>.address{
            color: #555E69;
            font-size: .0.9rem;
            line-height: 1.16666em;
            margin-top: 10px;
        }
        .single-hotel>.name{
            font-size: calc(1rem + .29851vw - .09328em);
            color: #292929;
            line-height: 1.16666em;
            margin-top: 5px;
            font-weight: 700;
        }
        .single-hotel>.short_desc{
            font-size: 1rem;
            color: #555E69;
            line-height: 1.2em;
            margin-top: 5px;
            height: 3.6rem;
            overflow: hidden;
        }
        .single-hotel>.bottom{
            display: flex;
        }
        .single-hotel>.bottom>a{
            flex:1;
            text-align: center;
            padding: 8px;
            text-decoration: none;
            color: #121212;
            font-weight: 500;
            cursor: pointer;
        }
        .single-hotel>.bottom>a.call{
            border:1px solid ;
            border: 2px solid #b12029;
            border-radius: 5px;
        }
        .single-hotel>.bottom>a.call:hover{
            color: white !important;
            background: #b12029;
        }

    </style>
    <div class="bg-white hotels">
        <div class="container">
            <h2>Hotels</h2>
            <div class="row">
                @foreach ($hotels as $hotel)
                    <div class="col-md-4 col-lg-3 col-12">
                        <div class="single-hotel">
                            <img src="{{asset($hotel->image)}}" alt="">
                            <div class="address">{{$hotel->address}}</div>
                            <div class="name">{{$hotel->name}}</div>
                            <div class="short_desc">{{$hotel->short_desc}}</div>
                            <div class="bottom">
                                <a href="tel:{{$hotel->phone}}" class="call">Call Now</a>
                                <a class="detail" href="{{route('hotel',['hotel'=>$hotel->slug])}}">View Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <div class="view-more text-center">
                <a href="">View all hotels</a>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset('front/js/pages/home-page.js') }}"></script>
@endsection
