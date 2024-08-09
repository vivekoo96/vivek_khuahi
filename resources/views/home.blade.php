@extends('layouts.app')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 hf1" style="padding-left:0px; padding-right:0px;">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">

                            @php
                                $banners = App\Models\Banner::where('status', 1)->get();
                            @endphp

                            @forelse($banners as $banner)
                                <!-- Item -->
                                <div class="item banner_height1">
                                    <div class="img-fill">
                                        <img src="{{ asset('storage/' . $banner->image) }}" alt=""
                                            style="  width: 100%; /* Adjust width as needed */
                                                height: 100%; object-fit: cover; /* Ensures the image covers the entire frame */
                                                background-position: center;
                                                background-size: cover;">
                                    </div>
                                </div>

                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <br>
    <br>

    <div class="col-md-12" id="ser">

        <h3 style="text-align:center;"><span class="mb-4 ml-6">Khushi Trading Inc is a leading CCTV camera, Sanitary Ware,
                Network ccessories and plumbing traders in Chennai. Our projects are managed by a team of professionals.
            </span></h3>
        <p class="py-3 px-3"> Our primary aim is to bridge the gap between reputed manufacturers and consumers and also
            update the product trends and prices on a real time basis. A large part of our approach was to enable work flow
            Integration both on a large scale in business to user and configure good administration. We offer a wide range
            of products and will provide complete information about the product and its features. As per your choice we
            suggest you the product at cost effective.</p>
        <center>
            <div class="background">

            </div>
        </center>
        <div class="row" id="services">
            <div class="col-md-3 tc service_box">
                <img src="{{ asset('assets/img/cctv.jpg') }}" width="260" height="200"><br>
                <br>
                <h3>CCTV Camera</h3>
                <p>We offer a wide range of security systems of various brands and will provide complete information about
                    the product and its features.</p>
                <a href="" class="text-secondary" data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>

            <div class="col-md-3 tc service_box">
                <img src="{{ asset('assets/img/bathroom.webp') }}" width="260" height="200"><br>
                <br>
                <h3>Sanitary ware</h3>
                <p>We are leading and well recognized traders and suppliers of exclusively design and quality finished range
                    of Sanitary Ware Collection. These are made available in best of finishes and designs and match up with
                    the aesthetic Sanitary Ware expectations of the customers. </p>
                <a href="" class="text-secondary" data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>
            <div class="col-md-3 tc service_box">
                <img src="{{ asset('assets/img/hdpe-pipes.webp') }}" width="260" height="200"><br>
                <br>
                <h3>HDPE pipes</h3>
                <p>We are the most trusted name of the market who is passionately engaged in trading superior quality HDPE
                    Pipes. These HDPE pipes are used in chemical, agriculture and gas industries for different applications.
                </p>
                <a href="" class="text-secondary" data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>
            <div class="col-md-3 tc service_box">
                <img src="{{ asset('assets/img/server.png') }}" width="260" height="200"><br><br>
                <h3>Networking Accessories</h3>
                <p>We offers a variety of network Accessories capable of meeting the needs of various industries by
                    integrating Routing, Switching, Security, and more into a single, power-efficient form factor.</p>
                <a href="" class="text-secondary" data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>


        </div>
    </div>

    <br><br>
    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about" style="background-color: #003f5f;">
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
                    <div class="about">
                        <div class="about-heading">
                            <h6>About Us</h6><br>

                        </div>
                        <p>We are one of the finest CCTV Camera traders in Coimbatore. We always believe in Hardwork,
                            Professionalism, and Friendly attitude.
                            Being united as a team enables us to grow and meet the needs of the clients.
                            We work in very unique way which converts our clients into long term customers.
                            “We care about what we do”
                            Our team consists of technical experts, quality analysts, sales and marketing team and others.
                            These people are experts of their domain and also help us in making strong relation with our
                            clients
                            We are engaged in offering a vast range of …. And many more. Our products are highly demanded in
                            the market for their optimum good quality and wide use.
                        </p>
                        <a href="{{ route('about') }}"><button type="button" class="mt-3 bp">Learn More</button></a>

                    </div>

                </div>

            </div>
        </div><br>
    </section>


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="menu" style="padding-top: 100px;background-color: #003f5f;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">

                        <div class='card card1 cards'>
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal" data-target="#exampleModalCenter"
                                        class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class='card card2 cards'>
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal"
                                        data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3 cards'>
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal"
                                        data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4 cards'>
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal"
                                        data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5 cards'>
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal"
                                        data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6 cards'>
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal"
                                        data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *****Product Area Ends ***** -->
    <!-- location section-->
    {{-- <br>
    <br>

    <br>
    <br> --}}

    <!-- end section-->

    <!-- benefits section -->
    {{-- <br> --}}
    {{-- <br>
    <br>
    <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Benefits of Buy from
            Us ?</span></h6><br><br>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 content">

                <h5><i class="fa fa-check"></i> Minimal operational expense.</h5>
                <h5><i class="fa fa-check"></i> Flexibility to choose / upgrade services.</h5>
                <h5><i class="fa fa-check"></i> Leasing - No need to think again.</h5>
                <h5><i class="fa fa-check"></i> depreciation is OURS.</h5>
                <h5><i class="fa fa-check"></i> Tension-Free maintenance.</h5>
                <h5><i class="fa fa-check"></i> Lease expiry - New equipments on renewal.</h5>
                <h5><i class="fa fa-check"></i> Liquid Money available.</h5>

            </div>
            <div class="col-md-6">
                <center>
                    <img src="{{ asset('assets/img/benefits.jpg') }}" class="imgs">
                </center>
            </div>
        </div>
    </div> --}}

    <!-- end section -->

    <!--**** why choose us ****-->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 pt-lg-5 pb-3">
                    <center>
                        <h6 class="text-secondary font-weight-semi-bold mb-3"><span class="section-heading">Why Choose
                                Us?</span></h6><br>
                        <h4 class="mb-4"><span class="section-title">Backed by a rich industry experience.</span></h4>
                        <p class="mb-4">we are engaged in providing a wide supreme quality range of products.</p>
                    </center><br><br>
                    <div class="row">
                        <div class="col-sm-6 about_box">
                            <span class="why_icon">
                                <h4>1</h4>
                            </span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head" style="padding-top: 12px;">Well-furnished
                                    infrastructural facility </h5>

                            </div>
                        </div>
                        <div class="col-sm-6 about_box">
                            <span class="why_icon">
                                <h4>2</h4>
                            </span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head" style="padding-top: 12px;">Total Quality Management
                                </h5>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-6 about_box">
                            <span class="why_icon">
                                <h4>3</h4>
                            </span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head" style="padding-top: 12px;">Complete client satisfaction
                                </h5>

                            </div>
                        </div>
                        <div class="col-sm-6 about_box">
                            <span class="why_icon">
                                <h4>4</h4>
                            </span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head" style="padding-top: 12px;">Ethical business policies
                                </h5>

                            </div>


                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-6 about_box">
                            <span class="why_icon">
                                <h4>5</h4>
                            </span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head" style="padding-top: 12px;">Competitive pricing </h5>

                            </div>
                        </div>
                        <div class="col-sm-6 about_box">
                            <span class="why_icon">
                                <h4>6</h4>
                            </span>
                            <div class="rs-features-list-content">
                                <h5 class="rs-features-list-head" style="padding-top: 12px;">Immediate delivery</h5>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!--**** end why choose us ****-->
    <!--**** Contact us ****-->
    <center>
        <h6 class="text-secondary font-weight-semi-bold mb-3"><span class="section-heading">Industry We Serve</span></h6>
    </center>
    <br>
    <div class="industry"
        style="background-image: url({{ asset('assets/img/rm1.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="industry-mini">
            <div class="container py-5"><br><br>
                <div class="row" style="margin-left:15px; margin-right:15px;">

                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-graduation-cap" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Education</p>
                    </div>
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-calendar" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Tower</p>
                    </div>
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-server" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Data Center</p>
                    </div>
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-building" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">IT & MNC's</p>
                    </div>
                </div>
                <div class="row" style="margin-left:15px; margin-right:15px; padding-top:30px;">
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-camera-retro" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Media</p>
                    </div>
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-fighter-jet" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Travel</p>
                    </div>
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-bank" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Store</p>
                    </div>
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-building-o" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Real Estate</p>
                    </div>
                </div>
                <div class="row" style="margin-left:15px; margin-right:15px; padding-top:30px; padding-bottom:30px;">
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-hotel" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Hotels</p>
                    </div>
                    <div class="col-md-2 industry-box" style="text-align: center;">
                        <i class="fa fa-heartbeat" style="color:white; font-size:46px;"></i>
                        <p style="color:white; padding-top:5px;">Hospitals</p>
                    </div>

                </div>
            </div><br>
        </div>
    </div>
    </div>
    <!--**** end contact us ****-->
    <br>
    <br>


    <!-- ***** Clients Starts ***** -->
    <section class="section" id="menu" style="background-color: #003f5f;">
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


    <!--**** testimonial start ****-->
    <!--<br><br>
                                                                                                                                                                                            <div class="text-center text-secondary">
                                                                                                                                                                                                <h6><span class="section-heading">Testimonials</span></h6>
                                                                                                                                                                                                <h2></h2>
                                                                                                                                                                                            </div>

                                                                                                                                                                                                <section class="testim" id="testim">
                                                                                                                                                                                                    <div class="wrap">

                                                                                                                                                                                                        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                                                                                                                                                                                                        <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

                                                                                                                                                                                                        <ul class="dots" id="testim-dots">
                                                                                                                                                                                                            <li class="dot active"></li>
                                                                                                                                                                                                            <li class="dot"></li>
                                                                                                                                                                                                            <li class="dot"></li>
                                                                                                                                                                                                            <li class="dot"></li>
                                                                                                                                                                                                            <li class="dot"></li>
                                                                                                                                                                                                        </ul>

                                                                                                                                                                                                        <div class="cont" id="testim-content">

                                                                                                                                                                                                            <div class="active">
                                                                                                                                                                                                                <div class="img"><img src="img/testimonial-1.jpg"></div>
                                                                                                                                                                                                                <br>

                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <h2>Roma Ghai</h2>
                                                                                                                                                                                                                <p>I had taken laptop on rent from them and I felt very satisfied as they gave me excellent service as and when it was required. True to nature. Very honest and also reasonable with the services and price.</p>
                                                                                                                                                                                                            </div>

                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                <div class="img"><img src="img/testimonial-2.jpg"></div>
                                                                                                                                                                                                                <br>

                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star"></span>
                                                                                                                                                                                                                <h2>Manjeet Singh</h2>
                                                                                                                                                                                                                <p>A very good and reliable company from you can take Laptop or Desktop computer on rent in Gurugram. Price is reasonable. Very honest and also reasonable with the services and price.</p>
                                                                                                                                                                                                            </div>

                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                <div class="img"><img src="img/testimonial-3.jpg"></div>
                                                                                                                                                                                                                <br>

                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <h2>Ayush Johry</h2>
                                                                                                                                                                                                                <p>Very amazing service. The laptop quality was good. One day there was a problem in the laptop’s software due to update issues (which usually happens in a windows pc). I talked to Faizan and he sent his repair guy the same night who changed the hard disk of the laptop. They genuinely care about a customer’s comfort and convenience. Highly recommended!!</p>
                                                                                                                                                                                                            </div>

                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                <div class="img"><img src="img/testimonial-1.jpg"></div>
                                                                                                                                                                                                                <br>

                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star"></span>
                                                                                                                                                                                                                <h2>Gaurav Mehta</h2>
                                                                                                                                                                                                                <p>Absolutely amazing service. Provided me the laptop on rent at my doorstep at the peak of the lockdown. Helped me tremendously in managing my work from home. The problem was addressed immediately and the replacement was also sent very promptly.</p>
                                                                                                                                                                                                            </div>

                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                <div class="img"><img src="img/testimonial-2.jpg"></div>
                                                                                                                                                                                                                <br>

                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <span class="fa fa-star checked"></span>
                                                                                                                                                                                                                <h2>Ram Murti Joshi</h2>
                                                                                                                                                                                                                <p>They are a trust worthy brand. All my three locations offices have their laptop and desktop installed more than 25 plus one tab at each reception. They gave new name to renting solutions.</p>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>

                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </section>
                                                                                                                                                                                            <!--**** testimonial end ****-->
    <br>
    <!--**** Blog section start ****-->
    <div class="text-center text-secondary">
        <h6><span class="section-heading">Latest Blog</span></h6>
        <h2></h2>
    </div><br><br>
    <div class="container">
        <div class="row">

            @php

                $blogs = App\Models\Blog::limit(3)->get();

            @endphp

            @foreach ($blogs as $blog)
                <div class="col-md-4">
                    <div class="news-container position-relative p4">
                        <img src="{{ asset('storage/' . $blog->image) }}">

                        <h5 class="blog_h">{{ $blog->title }}</h5>
                        </h5>
                        <div class="news_date news_p"><a href="">
                                <span></span></a><a href="#" target="_blank" rel="nofollow"
                                class="posted_on">Admin</a> |
                            <span>{{ Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</span>
                        </div>
                        <p class="news_p">{{ Str::words(strip_tags($blog->short_description), 25, '...') }} </p>
                        <a href="{{ url('blog/' . $blog->slug) }}">Read More</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--**** Blog section end ****-->
@endsection
