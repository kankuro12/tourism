<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{env('APP_NAME')}} | @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('meta')
        <!-- FONT CSS-->
        <link rel="preconnect" href="https://fonts.gstatic.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
        <link type="text/css" rel="stylesheet" href="{{asset('front/font/font-icon/font-awesome/css/font-awesome.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/font/font-icon/font-flaticon/flaticon.css')}}">
        <!-- LIBRARY CSS-->
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/animate/animate.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/slick-slider/slick.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/slick-slider/slick-theme.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/selectbox/css/jquery.selectbox.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/please-wait/please-wait.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/fancybox/css/jquery.fancybox.css?v=2.1.5')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/fancybox/css/jquery.fancybox-buttons.css?v=1.0.5')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/libs/fancybox/css/jquery.fancybox-thumbs.css?v=1.0.7')}}">
        <!-- STYLE CSS-->
        <link type="text/css" rel="stylesheet" href="{{asset('front/css/layout.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/css/components.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
        {{-- <link type="text/css" rel="stylesheet" href="{{asset('front/css/color.css')}}"> --}}
        <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1/color-1.css', id="color-skins")-->
        <link type="text/css" rel="stylesheet" href="#" id="color-skins">
        <script src="{{asset('front/libs/jquery/jquery-2.2.3.min.js')}}"></script>
        <script src="{{asset('front/libs/js-cookie/js.cookie.js')}}"></script>

        <style>
            .chapters {
                padding: 40px 0px;
                min-height: 400px;
            }

            .chapters .col-md-4 {
                padding: 5px;
            }

            .chapter {
                display: block;
                text-decoration: none;
                position: relative;
            }

            .chapter>.overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.3);
            }

            .chapter>.overlay>.inner {
                position: absolute;
                color: white;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 15px 10px;



            }

            .chapter>.overlay>.inner>.text {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;

            }

            .chapter>.overlay>.inner>.title {
                font-weight: 600;
                font-size: 18px;
            }

            .chapter img {
                width: 100%;
            }

            .destination-bar {
                height: 60px;
            }

            .notice {
                border: 1px solid #F6F6F6;
                padding: 10px 20px;
                background-color: white;

            }

            .notice .date {
                padding: 5px 10px;
                color: white;
                font-size: 0.9rem;
                background: #FFDD00;
                width: 150px;
                display: inline-block;
                border-radius: 5px;
                font-weight: 600;
                text-align: center;
            }

            .notice a {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                text-decoration: none;
                font-weight: 500;
                color: #434A54;
                display: block;
                overflow: hidden;
                padding-top:  5px;
            }

            .w-100 {
                width: 100%;
            }

            .media{
                position: relative;
                height: 170px;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                background: #222222;
            }
            .media .video{
                position: absolute;
                top: 0px;
                left: 0;
                right: 0;
                bottom: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(0, 0, 0, 0.4)
            }
            .media .video .icon{
                font-size: 50px;
                color:white;
            }




            @media(max-width:425px) {
                .media .video .icon{
                    font-size: 30px;
                    color:white;
                }
                .col-6{
                    width: 50%;
                    float: left;
                }
                .chapters{
                    min-height: 0px;
                }
                .destination-bar {
                    height: 0px;
                }

                .media{
                    height: 100px;
                }
            }

        </style>
        @yield('css')
    </head>
    <body>
        <div class="body-wrapper">
            <!-- MENU MOBILE-->
            @include('front.layout.mobilemenu')
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">
                <!-- HEADER-->
               @include('front.layout.menu')
                <!-- WRAPPER-->
                <div id="wrapper-content">
                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        @yield('content')
                    </div>
                    <!-- BUTTON BACK TO TOP-->
                    <div id="back-top">
                        <a href="#top" class="link">
                            <i class="fa fa-angle-double-up"></i>
                        </a>
                    </div>
                </div>
                <!-- FOOTER-->
               @include('front.layout.footer')
            </div>
        </div>


        <!-- LIBRARY JS-->
        <script src="{{asset('front/libs/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/libs/detect-browser/browser.js')}}"></script>
        <script src="{{asset('front/libs/smooth-scroll/jquery-smoothscroll.js')}}"></script>
        <script src="{{asset('front/libs/wow-js/wow.min.js')}}"></script>
        <script src="{{asset('front/libs/slick-slider/slick.min.js')}}"></script>
        <script src="{{asset('front/libs/selectbox/js/jquery.selectbox-0.2.js')}}"></script>
        <script src="{{asset('front/libs/please-wait/please-wait.min.js')}}"></script>
        <script src="{{asset('front/libs/fancybox/js/jquery.fancybox.js')}}"></script>
        <script src="{{asset('front/libs/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
        <script src="{{asset('front/libs/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
        <!--script(src="{{asset('front/libs/parallax/jquery.data-parallax.min.js')}}")-->
        <!-- MAIN JS-->
        <script src="{{asset('front/js/main.js')}}"></script>
        <!-- LOADING JS FOR PAGE-->
        @yield('script')
        <script>
            window.loading_screen={
                finish:function(){}
            }
            $(document).ready(function () {
                $(".wp-gallery").fancybox();
            });
            // window.loading_screen = window.pleaseWait(
            // {
            //     logo: logo_str,
            //     backgroundColor: '#fff',
            //     loadingHtml: "<div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div>",
            // });
        </script>
    </body>
</html>
