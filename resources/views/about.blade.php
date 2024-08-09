@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">
                    <h2 style="color:white;">About Us</h2>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- Page Header End -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about" style="background-color: #00324c; margin-top:-45px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12" style="padding-left: 0px;">
                    <div class="right-content">
                        <div class="thumb">
                            <h3><i class="fa fa-group"></i> 200+<p class="mt-n3">Trusted Clients</p>
                            </h3>

                            <img src="{{ asset('assets/img/about-us.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12" style="padding-right: 0px;">
                    <div class="about"><br>
                        <div class="about-heading">
                            <h6>About Us</h6><br>
                        </div>
                        <p>We are one of the finest CCTV Camera traders in Coimbatore. We always believe in Hardwork,
                            Professionalism, and Friendly attitude.
                            Being united as a team enables us to grow and meet the needs of the clients.
                        </p>
                        <p>We work in very unique way which converts our clients into long term customers.</p>
                        <div class="about-heading mt-3">
                            <h6>We care about what we do</h6><br>
                        </div>
                        <p>Our team consists of technical experts, quality analysts, sales and marketing team and others.
                            These people are experts of their domain and also help us in making strong relation with our
                            clients </p>
                        <p>We are engaged in offering a vast range of …. And many more. Our products are highly demanded in
                            the market for their optimum good quality and wide use.</p>
                    </div>

                </div>

            </div>
        </div><br>
    </section>
    <!-- ***** About Area ends ***** -->


    <!--**** why choose us ****-->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-lg-5 pb-3">
                    <center>
                        <h6 class="text-secondary font-weight-semi-bold mb-3"><span class="section-heading">Why Us?</span>
                        </h6><br>
                        <h4 class="mb-4"><span class="section-title">Backed by a rich industry experience, we are engaged
                                in providing a wide supreme quality range of products.</span></h4>

                    </center><br><br>
                    <div class="row py-3">
                        <div class="col-sm-6 about_box d-flex align-items-center">
                            <span class="rs-features-list-icon"><img src="{{ asset('assets/img/infrastructure.png') }}">
                            </span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head">Well-furnished infrastructural facility </h5>
                            </div>


                        </div>
                        <div class="col-sm-6 about_box d-flex align-items-center">
                            <span class="rs-features-list-icon"><img src="{{ asset('assets/img/quality.png') }}"></span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head">Total Quality Management </h5>

                            </div>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-sm-6 about_box d-flex align-items-center">
                            <span class="rs-features-list-icon"><img src="{{ asset('assets/img/review.png') }}"></span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head">Complete client satisfaction </h5>

                            </div>
                        </div>
                        <div class="col-sm-6 about_box d-flex align-items-center">
                            <span class="rs-features-list-icon"><img src="{{ asset('assets/img/management.png') }}"></span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head">Ethical business policiesImmediate delivery </h5>

                            </div>


                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-sm-6 about_box d-flex align-items-center">
                            <span class="rs-features-list-icon"><img src="{{ asset('assets/img/reward.png') }}"></span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head">Competitive pricing </h5>

                            </div>
                        </div>
                        <div class="col-sm-6 about_box d-flex align-items-center">
                            <span class="rs-features-list-icon"><img src="{{ asset('assets/img/principle.png') }}"></span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head">Ethical business policies </h5>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--**** end why choose us ****-->
    <!--*** Team Section ***-->
    {{--    <div class="container-fluid"> --}}
    {{--        <div class="container"> --}}
    {{--            <div class="row"> --}}
    {{--                <div class="col-lg-12 pt-lg-5 pb-3"><center> --}}
    {{--                        <h6 class="text-secondary font-weight-semi-bold mb-3"><span class="section-heading">Our Team</span></h6></center><br> --}}
    {{--                    <div class="row py-5"> --}}
    {{--                        <div class="col-md-4 team"> --}}
    {{--                            <img src="assets/img/team1.jpg" class="team-image"> --}}
    {{--                            <div class="overlay">Pranjal Sharma </div> --}}
    {{--                        </div> --}}
    {{--                        <div class="col-md-4 team"> --}}
    {{--                            <img src="assets/img/team2.png" class="team-image"> --}}
    {{--                            <div class="overlay">Rudhar Singh</div> --}}
    {{--                        </div> --}}

    {{--                        <div class="col-md-4 team"> --}}
    {{--                            <img src="assets/img/team3.jpg" class="team-image"> --}}
    {{--                            <div class="overlay">Sanjay Saha</div> --}}
    {{--                        </div> --}}

    {{--                    </div> --}}

    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </div> --}}

    <!--*** Team Section End ***-->
    <br>
    <!-- ***** Clients Starts ***** -->
    <section class="section" id="menu" style="background-color:#00324c;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-secondary">
                        <h6><span class="section-heading">Top Clients</span></h6><br><br>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">

                        <div class='card client'>
                            <img src="{{ asset('assets/img/ericsson.png') }}" height="120">

                        </div>
                    </div>
                    <div class="item">
                        <div class='card client'>
                            <img src="{{ asset('assets/img/genpact.png') }}" height="120">
                        </div>
                    </div>
                    <div class="item">
                        <div class='card  client'>
                            <img src="{{ asset('assets/img/nokia.png') }}" height="120">
                        </div>
                    </div>
                    <div class="item">
                        <div class='card  client'>
                            <img src="{{ asset('assets/img/samsung.png') }}" height="120">
                        </div>
                    </div>
                    <div class="item">
                        <div class='card client'>
                            <img src="{{ asset('assets/img/tower.png') }}" height="120">
                        </div>
                    </div>
                    <div class="item">
                        <div class='card  client'>
                            <img src="{{ asset('assets/img/xceed.jpg') }}" height="120">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Clients Ends ***** -->

    <br>
    <!--**** Contact us ****-->
    <br>
    <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Contact Us</span></h6>
    <br>
    <div class="col-md-12" style="background-color: #003F5F;"><br>
        <div class="row" style="margin-left:15px; margin-right:15px;">
            <div class="col-md-7">
                <img src="{{ asset('assets/img/contactt.png') }}" width="700" height="500">
            </div>
            <div class="col-md-5 mb-5 mb-lg-0 p4 position" style="background-color: #003F5F;">
                <div class="contact-form"><br>
                    <div id="success"></div>
                    <form method="post" action="contact_mail.php" onsubmit="return validation()"
                        style="padding-left:20px;">
                        <div class="form-row">

                            <div class="col-sm-6 control-group ta">
                                <label>Full Name<span style="color:red;">*</span> </label><br>
                                <input type="text" class="form-control" id="text" name="name" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group ta">
                                <label>Email <span style="color:red;">*</span> </label><br>
                                <input type="email" class="form-control" id="text" name="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-sm-6 control-group ta">
                                <label>Phone<span style="color:red;">*</span> </label><br>
                                <input type="number" class="form-control" id="number" name="number" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group ta">
                                <label>Address<span style="color:red;">*</span> </label><br>
                                <input type="text" class="form-control" id="text" name="address" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group ta">
                            <label>Message<span style="color:red;"></span> </label><br>
                            <textarea class="form-control" rows="2" id="text" name="message" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div style="padding-top:10px;">
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton"
                                onclick="clear()">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div><br>
    </div>
    <!--**** end contact us ****-->
@endsection
