@extends('front.layout.app')
@section('css')

@endsection
@section('title')
    Notices
@endsection
@section('content')
    <section class="page-banner blog-detail" style="background-image: url({{ asset($data->slider_image) }})">
        <div class="container">
            <div class="page-title-wrapper">
                <div class="page-title-content">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/" class="link home">Home</a>
                        </li>

                        <li class="active">
                            <a href="#" class="link">Notices</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                    <h1 style="margin-bottom:20px;">Notices</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="page-main padding-top padding-bottom">
        <div class="container">
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
            <div style="padding:10px;">
                {{ $notices->links() }}
            </div>
        </div>
    </section>
@endsection

