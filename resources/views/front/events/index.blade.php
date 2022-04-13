@extends('front.layout.app')
@section('css')
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
@endsection
@section('title')
    Events
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
                        <a href="#" class="link">Events</a>
                    </li>
                </ol>
                <div class="clearfix"></div>
                <h1  style="margin-bottom:20px;">Events</h1>
            </div>
        </div>
    </div>
</section>
<section class="page-main padding-top padding-bottom">
    <div class="container">
        <div class="row">

            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-6 " style="padding: 7px; ">
                        <a href="{{ route('event', ['event' => $event->id]) }}" class="chapter-full">
                            <img src="{{ asset($event->image) }}" alt="">
                            <div class="overlay-full">
                                <div class="inner">
                                    <div class="text">
                                        {{ $event->short_desc }}
                                    </div>
                                    <div class="text">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ $event->start }}
                                        @if ($event->start !=$event->end)
                                            -  {{$event->end}}
                                        @endif
                                    </div>
                                    <div class="title">
                                        {{ $event->name }}
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
