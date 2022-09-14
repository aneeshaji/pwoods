<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav.png') }}" />
    <title>PWOODS Interior Design</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/modules/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/modules/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/modules/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div id="arcprime-page-loading" class="arcprime-pageloading">
        <div class="arcprime-pageloading-inner">
            <a class="arcprime-pageloading" href="#"> <img src="{{ asset('assets/images/logo.png') }}" alt=" "> </a>
        </div>
    </div>
    <!-- Header -->
    <header>
        <div class="arcprime-header-navbar">
            <div class="container arcprime-navbar-container">
                <div class="arcprime-navigation-wrap bg-light arcprime-start-header start-style">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-expand-md navbar-light">
                                    <!-- Logo -->
                                    <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </a>
                                    <!-- Menu -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active"> <a class="nav-link" href="{{ url('/') }}">Home</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{ url('/about-us') }}">Who we are</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{ url('/services') }}">What we provide</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{ url('/projects') }}">Projects</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li>
                                             <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{ url('/carrer') }}">Carrer</a></li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"> <a class="nav-link" href="{{ url('/contact') }}">Contact</a> </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="brand"> <img src="{{ asset('assets/images/logo.png') }}" class="logo" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <p><b>Get in touch</b>{{ isset($contact_contents->contact_email) ? $contact_contents->contact_email : '' }}
                        <br />{{ isset($contact_contents->contact_phone) ? $contact_contents->contact_phone : '' }}</p>
                </div>
                <div class="col-md-3">
                    <p><b>Location</b>{!! isset($contact_contents->contact_address) ? $contact_contents->contact_address : '' !!}<br> </p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0"><b>FOLLOW US</b></p>
                    <ul class="footer-social-link">
                        <li><a href="{{ $footer_contents->fb_link }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $footer_contents->insta_link }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ $footer_contents->twitter_link }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- toTop -->
    <a href="#" class="totop"><i class="fa fa-angle-up" aria-hidden="true"></i> <br>TOP</a>
    <!-- Js -->
    <script src="{{ asset('assets/js/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/modules/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/modules/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/modules/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script type="text/javascript">
        $('#test-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
        });
    </script>
</body>

</html>