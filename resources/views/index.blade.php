@extends('master')


@section('konten')
<div id="about-us" style="background:#f0f0f0">
    <div class="overlay"></div>
    <div class="container wow fadeInRight" data-wow-delay="0.3s">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height:600px">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/img-1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/img-2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/img-3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="section-title wow flipInX">WELCOME TO LPS INTERNATIONAL</h3>
                <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
                    <p>
                        We partner with organizations by delivering learning and performance solutions for
                        optimizing business performance. We partner with our clients in designing and delivering
                        sustainable business solutions that addresses key challenges in the business environment.
                    </p>
                    <p>
                        Our expertise includes change management and the human side of change, leadership
                        development, team building, and executive coaching. We also have the expertise in data
                        analytics for decision making and organizational performance design. We serve primarily
                        Singapore, Indonesia and ASEAN.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Services Section Start -->
<section class="services section-padding">
    <h2 class="section-title wow flipInX" data-wow-delay="0.4s">Our Services</h2>
    <div class="divider-inner wow fadeInDown" data-wow-delay="0.4s"></div>
    <p class="sub-title wow fadeInDown" data-wow-delay="0.4s">WE PROVIDE YOU WITH ONE STOP SOLUTIONS</p>
    <div class="container">
        <div class="row">
            <!-- Services item -->
            <div class="col-md-3 col-lg-3 col-xs-12">
                <button class="our-service wow fadeInDown" data-wow-delay="0.3s">
                    <div class="services-content">
                        <i class="fas fa-users fa-5x"></i>
                    </div>
                </button>
                <p class="info-service wow fadeInDown" data-wow-delay="0.3s">LEADERSHIP & CHANGE MANAGEMENT</p>
            </div>
            <div class="col-md-3 col-lg-3 col-xs-12">
                <button class="our-service wow fadeInDown" data-wow-delay="0.4s">
                    <div class="services-content">
                        <i class="fas fa-chart-line fa-5x"></i>
                    </div>
                </button>
                <p class="info-service wow fadeInDown" data-wow-delay="0.4s">START UP CONSULTANCY AND MANAGEMENT ADVISORY</p>
            </div>
            <div class="col-md-3 col-lg-3 col-xs-12">
                <button class="our-service wow fadeInDown" data-wow-delay="0.5s">
                    <div class="services-content">
                        <i class="fas fa-book-open fa-5x"></i>
                    </div>
                </button>
                <p class="info-service wow fadeInDown" data-wow-delay="0.5s">MARKETING & BRANDING <br />SOLUTION</p>
            </div>
            <div class="col-md-3 col-lg-3 col-xs-12">
                <button class="our-service wow fadeInDown" data-wow-delay="0.6s">
                    <div class="services-content">
                        <i class="fas fa-laptop-code fa-5x"></i>
                    </div>
                </button>
                <p class="info-service wow fadeInDown" data-wow-delay="0.6s">E- LEARNING MEDIA <br />DEVELOPMENT</p>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Resume Section Start -->
<div class="section-padding">
    <div class="container">
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">Our Partners</h2>
        <img src="{{asset('img/logo-partner.png')}}" class="corporate-image wow fadeInUp" data-wow-delay="0.4s" />
        <br />
        <div class="divider-inner wow fadeInDown" data-wow-delay="0.4s"></div>
        <p style="text-align:center; margin-top:30px">
            We are partnering with the local leading training providers to deliver our highest quality
            training program to fulfill clients expectation.
        </p>
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">Our Clients</h2>
        <br />
        <div class="divider-inner wow fadeInDown" data-wow-delay="0.4s"></div>
        <p style="text-align:center; margin-top:30px">
            Our clients in Leadership and Change Management are listed from Fortune 500 companies operate in
            Asia Pacific, the regional leading companies and top companies in ASEAN.
        </p>
    </div>
</div>
<!-- Resume Section End -->

<!-- Portfolio Section -->
<section class="services section-padding">
    <!-- Container Starts -->
    <div class="container">
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">MEET THE TEAM</h2>
        <div class="divider-inner wow fadeInDown" data-wow-delay="0.4s"></div>
        <br />
        <div class="row wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="#" style="cursor:pointer">
                    <img src="{{asset('img/profil-1.png')}}" class="profile-image" />
                    <div class="profile-name">ELAINE GOH ENG LIAN, M.ED</div>
                    <p style="text-align:center">SENIOR CONSULTANT</p>
                    <p style="text-align:center"><a href="#"><i class="icon-social-linkedin"></i></a></p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="#" style="cursor:pointer">
                    <img src="{{asset('img/profil-2.png')}}" class="profile-image" />
                    <div class="profile-name">DESMAN HIDAYAT,S.KOM,M.M</div>
                    <p style="text-align:center">MANAGEMENT CONSULTANT</p>
                    <p style="text-align:center"><a href="#"><i class="icon-social-linkedin"></i></a></p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="#" style="cursor:pointer">
                    <img src="{{asset('img/profil-1.png')}}" class="profile-image" />
                    <div class="profile-name">ELAINE GOH ENG LIAN, M.ED</div>
                    <p style="text-align:center">SENIOR CONSULTANT</p>
                    <p style="text-align:center"><a href="#"><i class="icon-social-linkedin"></i></a></p>
                </a>
            </div>
        </div>
    </div>
    <!-- Container Ends -->
</section>
@endsection