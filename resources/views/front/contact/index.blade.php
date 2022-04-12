@extends('front.layout.app')
@section('css')

@endsection
@section('title')
    Contact
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
                            <a href="#" class="link">Contact</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                    <h1 style="margin-bottom:20px;">Contact</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-top padding-bottom contact-organization">
        <div class="container">
            <h3 class="title-style-2">Our organization</h3>
            <div class="row">
                <div class="wrapper-organization">
                    @foreach ($data->others as $other)

                    @endforeach
                    <div class="col-md-4 col-sm-4 col-xs-4 md-organization">
                        <div class="content-organization">

                            <div class="main-organization">
                                <div class="organization-title">
                                    <a href="#" class="title">{{$other->name}}</a>
                                    <p class="text">{{$other->designation}}</p>
                                </div>
                                <div class="content-widget">
                                    <div class="info-list">
                                        <ul class="list-unstyled">

                                            <li class="main-list">
                                                <i class="icons fa fa-phone"></i>
                                                <a href="tel:{{$other->phone}}" class="link">{{$other->phone}}</a>
                                            </li>
                                            <li class="main-list">
                                                <i class="icons fa fa-envelope-o"></i>
                                                <a href="mailto:{{$other->email}}" class="link">{{$other->email}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="contact style-1 page-contact-form padding-top padding-bottom" style="background-image: url({{asset($data->contact_bg)}})">
        <div class="container">
            <div class="wrapper-contact-form">
                <div data-wow-delay="0.5s" class="contact-wrapper wow fadeInLeft">
                    <div class="contact-box">
                        <h5 class="title">{{$data->contact_title}}</h5>
                        <p class="text">{{$data->contact_subtitle}}</p>
                        <form class="contact-form">
                            <input type="text" placeholder="Your Name" class="form-control form-input">
                            <!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                            <input type="email" placeholder="Your Email" class="form-control form-input">
                            <!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                            <textarea placeholder="Your Message" class="form-control form-input"></textarea>
                            <div class="contact-submit">
                                <button type="submit" data-hover="SEND NOW" class="btn btn-slide">
                                    <span class="text">send message</span>
                                    <span class="icons fa fa-long-arrow-right"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="wrapper-form-images wow fadeInRight">
                    <img src="{{asset($data->contact_image)}}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section class="page-contact-map" >
        <div class="map-block">
            <div class="wrapper-info" style="background-image: url({{asset($data->map_bg)}})">
                <div class="map-info">
                    <h3 class="title-style-2">HOW TO FIND US</h3>
                    <p class="address">
                        <i class="fa fa-map-marker"></i> {{$data->addr}}</p>
                    <p class="phone">
                        <i class="fa fa-phone"></i> {{$data->phone}}</p>
                    <p class="mail">
                        <a href="mailto:domain@expooler.com">
                            <i class="fa fa-envelope-o"></i>{{$data->email}}</a>
                    </p>
                    <div class="footer-block">
                        <a href="https://maps.google.com/maps?q={{$data->map}}" class="btn btn-open-map">Open Map</a>
                    </div>
                </div>
            </div>
            <div id="googleMap">
                <iframe src="https://maps.google.com/maps?q={{$data->map}}&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width:100%;height:100%"  frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </section>
@endsection

