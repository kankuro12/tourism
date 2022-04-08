@php
$footer = App\SM::getFooter();
$data = $footer['data'];
@endphp
<footer>
    <div class="subscribe-email">
        <div class="container">
            <div class="subscribe-email-wrapper">
                <div class="subscribe-email-left">
                    <p class="subscribe-email-title">Subscribe
                        <span class="logo-text">{{ $data->sub_title }}
                    </p>
                    <p class="subscribe-email-text">{{ $data->sub_subtitle }}</p>
                </div>
                <div class="subscribe-email-right">
                    <form action="index.html">
                        <div class="input-group form-subscribe-email">
                            <input type="text" placeholder="Write your email" class="form-control" />
                            <span class="input-group-btn">
                                <button type="submit" class="btn-email">&#8594;</button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="footer-main padding-top padding-bottom" style="background-image: url({{ asset($data->bg) }})">
        <div class="container">
            <div class="footer-main-wrapper">
                <a href="index.html" class="logo-footer">
                    <img src="{{ asset($data->logo) }}" alt="" class="img-responsive" />
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
                                                <a href="#" class="link">{{ $data->address }}</a>
                                            </li>
                                            <li>
                                                <i class="icons fa fa-phone"></i>
                                                <a href="tel:{{ $data->phone }}"
                                                    class="link">{{ $data->phone }}</a>
                                            </li>
                                            <li>
                                                <i class="icons fa fa-envelope-o"></i>
                                                <a href="mailto:{{ $data->email }}"
                                                    class="link">{{ $data->email }}</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <div class="explore-widget widget">
                                <div class="title-widget">Destinations</div>
                                <div class="content-widget">
                                    <ul class="list-unstyled">
                                        @foreach ($footer['destinations'] as $destination)
                                            <li>
                                                <a href="#" class="link">{{ $destination->name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">

                        <div class="col-md-3 col-xs-6">
                            <div class="destination-widget widget">
                                <div class="title-widget">Festivals</div>
                                <div class="content-widget main-gallery-fancybox">
                                    <ul class="list-unstyled list-inline">
                                        @foreach ($footer['festivals'] as $festival)
                                            <li class="festival-content" title="{{$festival->name}}">

                                                <a href="{{ asset($festival->image) }}"
                                                    class="wp-festival glry-relative  thumb">
                                                    <img src="{{ asset($festival->image) }}" alt=""
                                                        class="img-responsive" />
                                                </a>
                                            </li>
                                        @endforeach




                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="destination-widget widget">
                                <div class="title-widget">Gallary</div>
                                <div class="content-widget main-gallery-fancybox">
                                    <ul class="list-unstyled list-inline">
                                        @foreach ($footer['galleries'] as $gallery)
                                            <li class="gallery-content" title="{{$gallery->name}}">

                                                <a href="{{ asset($gallery->image) }}"
                                                    class="wp-gallery glry-relative  thumb">
                                                    <img src="{{ asset($gallery->image) }}" alt=""
                                                        class="img-responsive" />
                                                </a>
                                            </li>
                                        @endforeach




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
        <div class="container " style="padding-top:1rem;">
            {{-- <div class="slide-logo-wrapper">
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
            </div> --}}
            <div class="social-footer">
                <ul class="list-inline list-unstyled">
                    <li>
                        <a href="{{$data->fb}}" class="link facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$data->twitter}}" class="link twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$data->insta}}" class="link pinterest">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="name-company">&copy; {{env('APP_NAME')}}</div>
        </div>
    </div>
</footer>
