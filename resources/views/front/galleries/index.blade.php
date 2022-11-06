@extends('front.layout.app')
@section('css')
@endsection
@section('meta')
<meta name="description" content="{{App\SM::getMeta('galleries')}}">
@endsection
@section('title')
    {{-- Galleries --}}
    Bodoland Tourism Gallery
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
                        <a href="#" class="link">Bodoland Tourism Gallery</a>
                    </li>
                </ol>
                <div class="clearfix"></div>
                <h1  style="margin-bottom:20px;">Bodoland Tourism Gallery</h1>
            </div>
        </div>
    </div>
</section>
<section class="page-main padding-top padding-bottom">
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 " style="padding-bottom:10px">
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
</section>
@endsection
