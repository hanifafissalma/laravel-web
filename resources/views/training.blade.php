@extends('master')


@section('konten')
<div style="background:#333">
    <div class="overlay"></div>
    <div class="container">
        <div class="subhead">
            <h2 class="wow flipInX" data-wow-delay="0.4s">CORPORATE TRAINING</h2>
            <div class="breadcrumbs-inner"><span style="color:grey">HOME / </span>CORPORATE TRAINING</div>
        </div>
    </div>
</div>
<section class="section-padding">
    <div class="container">
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">BRIEF OF OUR TRAINING PROGRAM</h2>
        <div class="divider-inner wow fadeInDown" data-wow-delay="0.4s"></div>
        <br />
        <P class="wow fadeInUp" data-wow-delay="0.4s">
            Our training consultancy program is design to meet today business challenges and helping
            client to do immediate improvement on their business performance, and the progranm is
            describe in the following:
        </P>
        <div style="padding-top:30px" class="wow fadeInUp" data-wow-delay="0.5s">
            <div class="subword">Leadership & Change Management program: </div>
            <img src="{{asset('img/corporate.png')}}" class="corporate-image" />
            <br />
            <p>
                The Leadership program at LPS is designing to help the middle manager and senior manager
                to building their leadership capacity in current business environment and make managers
                have a better preparation to handle day by day organization challenges. The program is
                including Change Management and transition, Team dynamics, Supervisory management, MBTI
                manager profile effectiveness, executive coaching, leadership development courses and
                conflict management & resolution etc. The comprehensive program has created a unique
                learning experience that help participants increasing their understanding current challenges
                and to do an effective corrective action, as the result each manager can able to establish
                his leadership competency and expanding professional networks and seek continual
                self-improvement.
            </p>
            <p>
                For more detail about our Marketing and Brand Solutions, please email your inquiry to
                info@lps.international
            </p>
            <br />
            <div class="subword">Corporate Competency & Training Development:</div>
            <img src="{{asset('img/corporate-2.png')}}" class="corporate-image" />
            <p>
                The Corporate Competency & Training Development is developed to meet the current need
                of organization to be competitive and ahead of competition and at the same times
                fulfill managers with new approaches in meeting customer expectation and enhancing
                company communications strategy. The program design is including marketing strategy,
                branding strategy, product and services, sales management and communication,
                financial and investment management as well as operation management. e-learning
                development Training and social media training enable the company readiness in dealing
                with today challenges. By attending the program managers are able to resolve company
                product and services challenges to win customer preferences. Last but not least, the
                program is create better manager confident in dealing with current markets condition
                and opening profitable opportunities.
            </p>
            <p>
                For more detail about our Start Up Consultancy and Advisory services, please email your
                inquiry to info@lps.international
            </p>
        </div>
    </div>
</section>
@endsection