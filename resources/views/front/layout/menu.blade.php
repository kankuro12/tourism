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
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="main-menu">
                                    <span class="text">Destinations</span>
                                    <span class="icons-dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    @foreach (App\Models\DestinationType::all() as $dt)
                                        <li>
                                            <a href="{{route('destinations',['type'=>$dt->id])}}" class="link-page">{{$dt->name}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="main-menu">
                                    <span class="text">Explore Bodoland</span>
                                    <span class="icons-dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="{{route('chapters')}}" class="link-page">Chapters</a>
                                    </li>
                                    <li>
                                        <a href="{{route('experiences')}}" class="link-page">Experiences</a>
                                    </li>
                                    <li>
                                        <a href="{{route('festivals')}}" class="link-page">Festivals</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('galleries')}}" class="main-menu">
                                    <span class="text">Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="about-us.html" class="main-menu">
                                    <span class="text">about</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}" class="main-menu">
                                    <span class="text">contact</span>
                                </a>
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
