<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LPS International</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/slicknav.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nivo-lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('ttps://use.fontawesome.com/releases/v5.8.2/css/all.css')}}" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <header id="header-wrap">
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="icon-menu"></span>
                        <span class="icon-menu"></span>
                        <span class="icon-menu"></span>
                    </button>
                    <a href="/" class="navbar-brand"><img src="{{asset('img/LPSLogo2.png')}}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{URL::to('./')}}">
                                ABOUT US
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('./consultant')}}">
                                OUR CONSULTANT
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('./training')}}">
                                TRAINING
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('./consulting')}}">
                                CONSULTING SERVICES
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('./publication')}}">
                                PUBLICATIONS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('./contact')}}">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Menu Start -->
            <ul class="onepage-nev mobile-menu">
                <li>
                    <a href="{{URL::to('./')}}">ABOUT US</a>
                </li>
                <li>
                    <a href="{{URL::to('./consultant')}}">OUR CONSULTANT</a>
                </li>
                <li>
                    <a href="{{URL::to('./training')}}">TRAINING</a>
                </li>
                <li>
                    <a href="{{URL::to('./consulting')}}">CONSULTING SERVICES</a>
                </li>
                <li>
                    <a href="{{URL::to('./publication')}}">PUBLICATIONS</a>
                </li>
                <li>
                    <a href="{{URL::to('./contact')}}">CONTACT US</a>
                </li>
            </ul>
            <!-- Mobile Menu End -->
        </nav>
    </header>
    @yield('konten')
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
                        <ul class="social-icon">
                            <li>
                                <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="#"><i class="icon-social-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="#"><i class="icon-social-google"></i></a>
                            </li>
                        </ul>
                        <p>Copyright © 2019 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
        <i class="icon-arrow-up"></i>
    </a>
    <script src="{{asset('js/jquery-min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/jquery.nav.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/utils.js')}}"></script>
</body>

</html>