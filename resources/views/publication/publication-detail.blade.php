@extends('master')


@section('konten')
<div id="about-us" style="background:#333">
    <div class="overlay"></div>
    <div class="container">
        <div class="subhead">
            <h2 class="wow flipInX" data-wow-delay="0.4s">MANAGING THE HUMAN SIDE OF CHANGE</h2>
            <div class="breadcrumbs-inner"><span style="color:grey">HOME / PUBLICATIONS / </span>MANAGING THE HUMAN SIDE OF CHANGE</div>
        </div>
    </div>
</div>
<div class="next-btn"><i class="fas fa-chevron-right"></i></div>
<section class="section-padding">
    <div class="container wow fadeInUp" data-wow-delay="0.5s">
        <div class="pull-right" style="display:flex">
            <a href="#" style="margin:5px"><i class="fas fa-print"></i></a>
            <a href="#" style="margin:5px"><i class="fas fa-share-alt"></i></a>
            <a href="#" style="margin:5px"><i class="far fa-heart"></i> 0</a>
        </div>
        <br />
        <h5 style="font-weight: 600">CHANGE AND TRANSITION</h5>
        <p>
            The pace of change is accelerating, and individuals and businesses must adapt. Radical
            change can threaten our assumptions about the world and ourselves. Change challenges our
            identities. In response to this challenge, we need to rethink and sharpen our definitions
            of who we are.
        </p>
        <p>
            Most of the time people know that they have to change. Cognitively, they know that change
            is constant, and that they have to adapt to the environment. However, it seems that the
            heart is not engaged. People resist change, or do they? Schein (1971) believes resistance
            to change to be one of the most ubiquitous of organization phenomena. A number of authors
            have defined resistance. For example, Ansoff (1998) defines resistance as a multifaceted
            phenomenon, which introduces unanticipated delays, costs and instabilities into the process
            of a strategic change, whilst Zaltman and Duncan (1977) define resistance as any conduct that
            serves to maintain the status quo in the face of pressure to alter the status quo.
        </p>
        <blockquote>Published by: <span class="text-blue">Learning & Performance Systems</span></blockquote>
        <p class="text-blue"><b>References</b></p>
        <ul>
            <li>Ansoff, I. (1988). The new corporate strategy. New York: John Wiley & Sons.</li>
            <li>Bridges, W. (1986). “Managing organizational transitions.” Organizational Dynamics 15(1): 24-33.</li>
            <li>Bridges, W. M. (2003). Managing transitions: Making the most of change, 2nd edition. Cambridge, MA. Perseus Publishing. p. 5.</li>
        </ul>
        <br /><br />
        <div style="display:flex">
            <span style="margin-top:5px">Tags:</span>
            <button class="btn-tag">Change Management</button>
            <button class="btn-tag">Leadership</button>
        </div>
        <hr />
        <h3 class="sub-title wow flipInX" data-wow-delay="0.4s">RECOMMENDED POSTS</h3>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body image-hover-overlay">
                    </div>
                    <div class="card-footer">
                        <a href="#" style="font-weight: 600">RESULT SURVEY: CHANGE MANAGEMENT, AWARENESS AND PRACTICAL ASPECT</a>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <hr />
        <h3 class="sub-title wow flipInX" data-wow-delay="0.4s">LEAVE A COMMENT</h3>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name (Required)" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <input type="email" class="form-control" id="name" name="name" placeholder="Email (Required)" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Website" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="submit-button">
            <button class="btn btn-common" id="submit" type="submit">POST COMMENT</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
@endsection