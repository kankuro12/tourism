@extends('front.layout.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endsection
@section('title')
    event - {{ $event->name }}
@endsection
@section('content')
    <section class="page-banner blog-detail" style="background-image: url({{ asset($event->image) }})">
        <div class="container">
            <div class="page-title-wrapper">
                <div class="page-title-content">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/" class="link home">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('events') }}" class="link">events</a>
                        </li>
                        <li class="active">
                            <a href="#" class="link">{{ $event->name }}</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                    <h1 style="margin-bottom:20px;">
                        {{ $event->name }} <br>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        {{ $event->start }}
                        @if ($event->start !=$event->end)
                            -  {{$event->end}}
                        @endif

                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="page-main padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $event->desc !!}
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


                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
@endsection
