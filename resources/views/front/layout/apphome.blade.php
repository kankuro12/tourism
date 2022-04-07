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
    </head>
    <body>

        <div class="body-wrapper">
            <!-- MENU MOBILE-->
            <div class="wrapper-mobile-nav">
                <div class="header-topbar">
                    <div class="topbar-search search-mobile">
                        <form class="search-form">
                            <div class="input-icon">
                                <i class="btn-search fa fa-search"></i>
                                <input type="text" placeholder="Search here..." class="form-control" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-main">
                    <div class="menu-mobile">
                        <ul class="nav-links nav navbar-nav">
                            <li class="dropdown">
                                <a href="index.html" class="main-menu">
                                    <span class="text">Home</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="index.html" class="link-page">Homepage default</a>
                                    </li>
                                    <li>
                                        <a href="homepage-02.html" class="link-page">Homepage 02</a>
                                    </li>
                                    <li>
                                        <a href="homepage-03.html" class="link-page">Homepage 03</a>
                                    </li>
                                    <li>
                                        <a href="homepage-04.html" class="link-page">Homepage 04</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html" class="main-menu">
                                    <span class="text">about</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="tour-result.html" class="main-menu">
                                    <span class="text">Tour</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="tour-result.html" class="link-page">tour result</a>
                                    </li>
                                    <li>
                                        <a href="tour-view.html" class="link-page">tour view</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="hotel-result.html" class="main-menu">
                                    <span class="text">packages</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="hotel-result.html" class="link-page">hotel result</a>
                                    </li>
                                    <li>
                                        <a href="hotel-view.html" class="link-page">hotel view</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="blog.html" class="main-menu">
                                    <span class="text">blog</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="blog.html" class="link-page">blog list</a>
                                    </li>
                                    <li>
                                        <a href="blog-detail.html" class="link-page">blog detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="car-rent-result.html" class="main-menu">
                                    <span class="text">page</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="car-rent-result.html" class="link-page">car rent result</a>
                                    </li>
                                    <li>
                                        <a href="cruises-result.html" class="link-page">cruises result</a>
                                    </li>
                                    <li>
                                        <a href="404.html" class="link-page">page 404</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html" class="main-menu">
                                    <span class="text">contact</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="list-unstyled list-inline login-widget">
                            <li>
                                <a href="#" class="item">login</a>
                            </li>
                            <li>
                                <a href="#" class="item">register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">

                <!-- WRAPPER-->
                <div id="wrapper-content">
                    <!-- MAIN CONTENT-->
                    <div class="main-content">

                    </div>
                    <!-- BUTTON BACK TO TOP-->
                    <div id="back-top">
                        <a href="#top" class="link">
                            <i class="fa fa-angle-double-up"></i>
                        </a>
                    </div>
                </div>
                <!-- FOOTER-->
                <footer>
                    <div class="footer-main padding-top padding-bottom">
                        <div class="container">
                            <div class="footer-main-wrapper">
                                <a href="index.html" class="logo-footer">
                                    <img src="assets/images/logo/logo-white-color-1.png" alt="" class="img-responsive" />
                                </a>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="col-md-3 col-xs-5">
                                            <div class="contact-us-widget widget">
                                                <div class="title-widget">contact us</div>
                                                <div class="content-widget">
                                                    <div class="info-list">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <i class="icons fa fa-map-marker"></i>
                                                                <a href="#" class="link">132, My Street, Kingston, New York 12401</a>
                                                            </li>
                                                            <li>
                                                                <i class="icons fa fa-phone"></i>
                                                                <a href="#" class="link">270 - 188 - 6026</a>
                                                            </li>
                                                            <li>
                                                                <i class="icons fa fa-envelope-o"></i>
                                                                <a href="#" class="link">domain@expooler.com</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-email">
                                                        <p class="text">Sign up for our mailing list to get latest updates and offers.</p>
                                                        <form action="index.html">
                                                            <div class="input-group">
                                                                <input type="text" placeholder="Email address" class="form-control form-email-widget" />
                                                                <span class="input-group-btn">
                                                                    <button type="submit" class="btn-email">&#10004;</button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-3">
                                            <div class="booking-widget widget text-center">
                                                <div class="title-widget">book now</div>
                                                <div class="content-widget">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">Flights</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tours</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Packages</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Transfer</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Car Rent</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Cruises</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <div class="explore-widget widget">
                                                <div class="title-widget">explore</div>
                                                <div class="content-widget">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">Tour Singapore City</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Manila City</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour New York City</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Sanghai City</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Hongkong City</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Tokyo City</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="col-md-2 col-xs-6">
                                            <div class="top-deals-widget widget">
                                                <div class="title-widget">top deals</div>
                                                <div class="content-widget">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">Tour Packages Singapore</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Packages Manila</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Packages New York</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Packages Sanghai</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Packages Hongkong</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Tour Packages Tokyo</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-6">
                                            <div class="destination-widget widget">
                                                <div class="title-widget">Destination</div>
                                                <div class="content-widget">
                                                    <ul class="list-unstyled list-inline">
                                                        <li>
                                                            <a href="#" class="thumb">
                                                                <img src="assets/images/footer/gallery-01.jpg" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="thumb">
                                                                <img src="assets/images/footer/gallery-02.jpg" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="thumb">
                                                                <img src="assets/images/footer/gallery-03.jpg" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="thumb">
                                                                <img src="assets/images/footer/gallery-04.jpg" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="thumb">
                                                                <img src="assets/images/footer/gallery-05.jpg" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="thumb">
                                                                <img src="assets/images/footer/gallery-06.jpg" alt="" class="img-responsive" />
                                                            </a>
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
                    <div class="hyperlink">
                        <div class="container">
                            <div class="slide-logo-wrapper">
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-01.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-02.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-03.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-04.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-05.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-06.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-01.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-02.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-03.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-04.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-05.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="assets/images/footer/logo-06.png" alt="" class="img-responsive" />
                                    </a>
                                </div>
                            </div>
                            <div class="social-footer">
                                <ul class="list-inline list-unstyled">
                                    <li>
                                        <a href="#" class="link facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link pinterest">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link google">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="name-company">&copy; Designed by SWLABS.</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="theme-setting">
            <div class="theme-loading">
                <div class="theme-loading-content">
                    <div class="dots-loader"></div>
                </div>
            </div>
            <a href="javascript:;" class="btn-theme-setting">
                <i class="fa fa-tint"></i>
            </a>
            <div class="content-theme-setting">
                <h2 class="title">setting color</h2>
                <ul class="list-unstyled list-inline color-skins">
                    <li data-color="color-1"></li>
                    <li data-color="color-2"></li>
                    <li data-color="color-3"></li>
                    <li data-color="color-4"></li>
                    <li data-color="color-5"></li>
                    <li data-color="color-6"></li>
                    <li data-color="color-7"></li>
                    <li data-color="color-8"></li>
                    <li data-color="color-9"></li>
                    <li data-color="color-10"></li>
                </ul>
            </div>
        </div>
        <script>
            if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1'))
            {
                $('.logo .header-logo img ,.logo-footer img, .group-logo .img-logo').attr('src', 'assets/images/logo/logo-white-' + Cookies.get('color-skin') + '.png');
                $('.logo-black img').attr('src', 'assets/images/logo/logo-black-' + Cookies.get('color-skin') + '.png');
            }
            else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1'))
            {
                $('.logo .header-logo img , .logo-footer img, .group-logo .img-logo').attr('src', 'assets/images/logo/logo-white-color-1.png');
                $('.logo-black img').attr('src', 'assets/images/logo/logo-black-color-1.png');
            }
        </script>
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
        <script src="{{asset('front/js/pages/faq.js')}}"></script>
        <script>
            var logo_str = 'assets/images/logo/logo-black-color-1.png';
            if (Cookies.set('color-skin'))
            {
                logo_str = 'assets/images/logo/logo-black-' + Cookies.set('color-skin') + '.png';
            }
            window.loading_screen = window.pleaseWait(
            {
                logo: logo_str,
                backgroundColor: '#fff',
                loadingHtml: "<div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div>",
            });
        </script>
    </body>
</html>
