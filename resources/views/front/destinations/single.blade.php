@extends('front.layout.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endsection
@section('meta')
@php
$content=strip_tags($destination->desc);
$meta=substr($content,0,250);
@endphp
<meta name="description" content="{{$meta}}">
@endsection
@section('title')
    {{ $type->name }} {{ $destination->name }}
@endsection
@section('content')
    <section class="page-banner blog-detail" style="background-image: url({{ asset($destination->image) }})">
        <div class="container">
            <div class="page-title-wrapper">
                <div class="page-title-content">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/" class="link home">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('destinations', ['type' => $type->id]) }}"
                                class="link">{{ $type->name }}</a>
                        </li>
                        <li class="active">
                            <a href="#" class="link">{{ $destination->name }}</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                    <h1 style="margin-bottom:20px;">{{ $destination->name }}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="page-main padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    {!! $destination->desc !!}
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
                                            <span class="icon" >
                                                <i class="fa fa-play"></i>
                                            </span>
                                        </div>
                                        <img class="w-100"
                                            src="https://i.ytimg.com/vi/{{ $media->image }}/0.jpg" alt="">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <h3>
                        Contacts Around {{ $destination->name }}
                    </h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Phone
                            </th>
                        </tr>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>
                                    {{ $contact->name }}
                                </td>
                                <td>
                                    {{ $contact->address }}
                                </td>
                                <td>
                                    <a href="tel:+{{ $contact->phone }}">{{ $contact->phone }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <hr>
                    <style>
                         iframe.map{
                                width: 100%;
                                height: 400px;
                            }
                    </style>
                    <div class="map">
                        <iframe src="https://maps.google.com/maps?q={{$destination->map}}&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" class="map"></iframe>
                    </div>

                </div>
                <div class="col-md-4">
                    <h3>
                        Other {{ $type->name }}
                    </h3>
                    @foreach ($destinations as $destination)
                        <div  style="margin-bottom:10px;">
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
    </section>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

@endsection
