<div class="wrapper-mobile-nav">

    <div class="header-main">
        <div class="menu-mobile">
            <ul class="nav-links nav navbar-nav">
                <li>
                    <a href="/" class="main-menu">
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)"  class="main-menu">

                        <span class="text">Destinations</span>
                    </a>
                    <span class="icons-dropdown">
                        <i class="fa fa-angle-down"></i>
                    </span>
                    <ul class="dropdown-menu dropdown-menu-1">
                        @foreach (App\Models\DestinationType::all() as $dt)
                            <li>
                                <a href="{{ route('destinations', ['type' => $dt->slug]) }}"
                                    class="link-page">{{ $dt->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <a href="{{ route('chapters') }}" class="main-menu">Chapters</a>
                </li>
                <li>
                    <a href="{{route('experiences')}}" class="main-menu">Experiences</a>
                </li>
                <li>
                    <a href="{{route('festivals')}}" class="main-menu">Festivals</a>
                </li>
                <li>
                    <a href="{{route('guides')}}" class="main-menu">Tour Guides</a>
                </li>
                <li>
                    <a href="{{route('events')}}" class="main-menu">Events</a>
                </li>
                <li>
                    <a href="{{route('notices')}}" class="main-menu">Notices</a>
                </li>
                <li>
                    <a href="{{route('hotels')}}" class="main-menu">Hotels</a>
                </li>
                <li>
                    <a href="{{route('tenders')}}" class="main-menu">tenders</a>
                </li>
                <li>
                    <a href="{{route('galleries')}}" class="main-menu">
                        <span class="text">Gallery</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('contact')}}" class="main-menu">
                        <span class="text">Who is Who</span>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</div>
