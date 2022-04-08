@extends('front.layout.app')
@section('css')
@endsection
@section('title')
    {{$type->name}}
@endsection
@section('content')
<section class="page-banner blog-detail" style="background-image: url({{asset($type->image)}})">
    <div class="container">
        <div class="page-title-wrapper">
            <div class="page-title-content">
                <ol class="breadcrumb">
                    <li>
                        <a href="/" class="link home">Home</a>
                    </li>

                    <li class="active">
                        <a href="#" class="link">{{$type->name}}</a>
                    </li>
                </ol>
                <div class="clearfix"></div>
                <h1  style="margin-bottom:20px;">{{$type->name}}</h1>
            </div>
        </div>
    </div>
</section>
<section class="page-main padding-top padding-bottom">
    <div class="container">
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
</section>
@endsection
