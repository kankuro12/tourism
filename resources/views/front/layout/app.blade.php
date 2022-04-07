<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{env('APP_NAME')}} | @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT CSS-->
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
        <link type="text/css" rel="stylesheet" href="{{asset('front/css/color.css')}}">
        <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1/color-1.css', id="color-skins")-->
        <link type="text/css" rel="stylesheet" href="#" id="color-skins">
        <script src="{{asset('front/libs/jquery/jquery-2.2.3.min.js')}}"></script>
        <script src="{{asset('front/libs/js-cookie/js.cookie.js')}}"></script>
        <script>
            if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1'))
            {
                $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '/' + 'color.css');
            }
            else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1'))
            {
                $('#color-skins').attr('href', 'assets/css/color-1/color.css');
            }
        </script>
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

            window.loading_screen = window.pleaseWait(
            {
                logo: logo_str,
                backgroundColor: '#fff',
                loadingHtml: "<div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div>",
            });
        </script>
    </body>
</html>
