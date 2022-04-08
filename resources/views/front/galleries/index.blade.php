@extends('front.layout.app')
@section('css')
@endsection
@section('title')
    Galleries
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
                        <a href="#" class="link">Galleries</a>
                    </li>
                </ol>
                <div class="clearfix"></div>
                <h1  style="margin-bottom:20px;">Galleries</h1>
            </div>
        </div>
    </div>
</section>
<section class="page-main padding-top padding-bottom">
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 " style="padding-bottom:10px">
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
</section>
@endsection
