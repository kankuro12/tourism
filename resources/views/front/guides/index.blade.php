@extends('front.layout.app')
@section('css')
<style>
    .guides{
        display: flex;
        flex-wrap: wrap;
        margin:0px -7px;
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
    .guide-holder{
        width:50%;
        padding: 7px;
    }
    .guide {
        display: flex;
        text-decoration: none;
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom:30px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
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
@endsection
@section('meta')
<meta name="description" content="{{App\SM::getMeta('guides')}}">
@endsection
@section('title')
    Tour Guides
@endsection
@section('content')
<section class="page-banner blog-detail" style="background-image: url({{asset($data->slider_image)}})">
    <div class="container">
        <div class="page-title-wrapper">
            <div class="page-title-content">
                <ol class="breadcrumb">
                    <li>
                        <a href="/" class="link home">Home</a>
                    </li>

                    <li class="active">
                        <a href="#" class="link">Tour Guides</a>
                    </li>
                </ol>
                <div class="clearfix"></div>
                <h1  style="margin-bottom:20px;">Tour Guides</h1>
            </div>
        </div>
    </div>
</section>
<section class="page-main padding-top padding-bottom">
    <div class="container">
        <div class="guides">
            @foreach ($guides as $guide)
            <div class="guide-holder">
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
        <div style="padding:10px;">
            {{ $guides->links() }}
        </div>
    </div>
</section>
@endsection
