@extends('master')


@section('konten')
<div style="background:#333">
    <div class="overlay"></div>
    <div class="container">
        <div class="subhead">
            <h2 class="wow flipInX" data-wow-delay="0.4s">CONTACT US</h2>
            <div class="breadcrumbs-inner"><span style="color:grey">HOME / </span>CONTACT US</div>
        </div>
    </div>
</div>
<section class="section-padding">
    <div class="container">
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">WE’D LOVE TO HEAR FROM YOU!</h2>
        <p class="sub-title wow fadeInDown" data-wow-delay="0.4s">Thank you for your interest in Learning and
            Performance Systems. Please contact us using the information below.
        </p>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-4 col-sm-12">
                <h2>Our Location</h2>
                <object style="border:0; height: 450px; width: 100%;" data="https://maps.google.com/maps?q=summarecon%20mall%20bekasi&t=&z=13&ie=UTF8&iwloc=&output=embed"></object>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="footer-right-area wow fadeIn">
                    <h2>Contact Address</h2>
                    <div class="footer-right-contact">
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p>Learning & Performance Systems<br />5 Kovan Road | #13-18, Kovan Residences - Singapore</p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <p><a href="mailto:info@lps.international">info@lps.international</a></p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <p><a href="#">+65 96 8899 72</a></p>
                            <p><a href="#">+62 821 1331 6330</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <h2>Request a Consultation</h2>
                <div class="contact-block">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button">
                                    <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection