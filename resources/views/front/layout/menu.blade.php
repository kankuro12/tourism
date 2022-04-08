 <!-- HEADER-->
 <header>
    <div class="bg-transparent {{Route::is('home')?'header-01':''}}">
        {{-- <div class="header-topbar">
            <div class="container">
                <ul class="topbar-left list-unstyled list-inline pull-left">
                    <li>
                        <a href="javascript:void(0)" class="country dropdown-text">
                            <span>Country</span>
                            <i class="topbar-icon icons-dropdown fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-topbar list-unstyled hide">
                            <li>
                                <a href="#" class="link">Vietnam</a>
                            </li>
                            <li>
                                <a href="#" class="link">Japan</a>
                            </li>
                            <li>
                                <a href="#" class="link">Korea</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="language dropdown-text">
                            <span>English</span>
                            <i class="topbar-icon icons-dropdown fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-topbar list-unstyled hide">
                            <li>
                                <a href="#" class="link">Vietnam</a>
                            </li>
                            <li>
                                <a href="#" class="link">Japan</a>
                            </li>
                            <li>
                                <a href="#" class="link">Korea</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="monney dropdown-text">
                            <span>USD</span>
                            <i class="topbar-icon icons-dropdown fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-topbar list-unstyled hide">
                            <li>
                                <a href="#" class="link">VND</a>
                            </li>
                            <li>
                                <a href="#" class="link">Euro</a>
                            </li>
                            <li>
                                <a href="#" class="link">JPY</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="topbar-right pull-right list-unstyled list-inline login-widget">
                    <li>
                        <a href="sign-up.html" class="item">login</a>
                    </li>
                    <li>
                        <a href="register.html" class="item">register</a>
                    </li>
                </ul>
            </div>
        </div> --}}
        <div class="header-main">
            <div class="container">
                <div class="header-main-wrapper">
                    <div class="hamburger-menu">
                        <div class="hamburger-menu-wrapper">
                            <div class="icons"></div>
                        </div>
                    </div>
                    <div class="navbar-header">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="assets/images/logo/logo-white-color-1.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <nav class="navigation">
                        <ul class="nav-links nav navbar-nav">
                            <li>
                                <a href="/" class="main-menu">
                                    <span class="text">Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="about-us.html" class="main-menu">
                                    <span class="text">about</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="main-menu">
                                    <span class="text">Tour</span>
                                    <span class="icons-dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </a>
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
                                <a href="javascript:void(0)" class="main-menu">
                                    <span class="text">packages</span>
                                    <span class="icons-dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </a>
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
                                <a href="javascript:void(0)" class="main-menu">
                                    <span class="text">blog</span>
                                    <span class="icons-dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </a>
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
                                <a href="javascript:void(0)" class="main-menu">
                                    <span class="text">page</span>
                                    <span class="icons-dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="car-rent-result.html" class="link-page">car rent result</a>
                                    </li>
                                    <li>
                                        <a href="car-detail.html" class="link-page">car detail</a>
                                    </li>
                                    <li>
                                        <a href="cruises-result.html" class="link-page">cruises result</a>
                                    </li>
                                    <li>
                                        <a href="cruises-detail.html" class="link-page">cruises detail</a>
                                    </li>
                                    <li>
                                        <a href="team-detail.html" class="link-page">team detail</a>
                                    </li>
                                    <li>
                                        <a href="404.html" class="link-page">page 404</a>
                                    </li>
                                    <li>
                                        <a href="faq.html" class="link-page">faq</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html" class="main-menu">
                                    <span class="text">contact</span>
                                </a>
                            </li>
                            <li class="button-search">
                                <p class="main-menu">
                                    <i class="fa fa-search"></i>
                                </p>
                            </li>
                        </ul>
                        <div class="nav-search hide">
                            <form>
                                <input type="text" placeholder="Search" class="searchbox" />
                                <button type="submit" class="searchbutton fa fa-search"></button>
                            </form>
                        </div>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</header>
