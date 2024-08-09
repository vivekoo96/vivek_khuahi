@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">
                    <h2 style="color:white;">Workstation on Rent</h2>
                </div>


            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <br>
    <!-- ***** Menu Area Starts ***** -->
    <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Workstation on Rent</span></h6>
    <section class="section" id="desk">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!--<div class="section-heading">
                        <h6>Our service</h6>
                        <h2>Services We Offer</h2>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">

                        <div class='card server1 cards'>
                            <!--<div class="price"><h6>$22</h6></div>-->
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal" data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card server2 cards'>
                            <!--<div class="price"><h6>$22</h6></div>-->
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal" data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card server3 cards'>
                            <!--<div class="price"><h6>$18</h6></div>-->
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal" data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card server4 cards'>
                            <!--<div class="price"><h6>$10</h6></div>-->
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal" data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card server5 cards'>
                            <!--<div class="price"><h6>$8.50</h6></div>-->
                            <div class='info'>
                                <h3 class='title tc'><a href="" data-toggle="modal" data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card server6 cards'>
                            <!--<div class="price"><h6>$7.25</h6></div>-->
                            <div class='info'>
                                <h3 class='title tc'><a href=""  data-toggle="modal" data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                                <div class="main-text-button" style="opacity:0;">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
    <div class="col-md-12 px-md-5" style="text-align:justify;">
        <div class="row">
            <div class="col-md-6"><br>
                <h3>Looking for workstation rentals in Gurgaon, Delhi NCR?</h3><br>
                <p>Look no further! Our workstation rental services offer a comprehensive range of high-performance desktop computers tailored to meet your business needs. Whether you require workstations for short-term projects, temporary office setups, or long-term leases, we have the solution for you. Our extensive inventory includes top brands and models, equipped with the latest hardware and software to ensure optimal performance and productivity. From powerful processors and ample memory to advanced graphics capabilities, our workstations are designed to handle demanding tasks with ease. Additionally, we provide flexible rental terms to accommodate your specific requirements, whether you need workstations for a few days, weeks, or months. Our experienced team is dedicated to providing exceptional service, from timely delivery and setup to ongoing technical support throughout your rental period. With our workstation rental services, you can streamline your operations without the hassle of purchasing, maintaining, or upgrading equipment. Save on upfront costs and enjoy the convenience of renting high-quality workstations tailored to your business needs. Contact us today to discuss your requirements and discover how our workstation rental services can benefit your organization.</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/img/server5.jpg')}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('assets/img/server.png')}}" width="450" height="450">
            </div>
            <div class="col-md-7">
                <h3>Looking for workstation rental charges, workstation on rent per month, workstation rental charges, workstation on lease, or workstation hire charges in Delhi?</h3><br>
                <p>Our workstation rental services offer competitive rates and flexible terms to meet your business needs. Whether you need workstation rentals for short-term projects or long-term leases, we provide affordable solutions tailored to your requirements. Our inventory includes a wide range of high-performance workstations equipped with the latest hardware and software to ensure seamless operation and productivity. With transparent pricing and no hidden fees, you can easily budget for your workstation rental needs. Additionally, we offer flexible rental durations to accommodate your project timelines, whether you need workstations for a few days, weeks, or months. Our experienced team ensures timely delivery, setup, and ongoing technical support throughout your rental period, allowing you to focus on your core business activities without worrying about equipment maintenance or upgrades. Experience the convenience and cost-effectiveness of renting workstations with us. Contact us today to discuss your requirements and get a personalized quote tailored to your specific needs. </p>
            </div>
        </div>
        <br><p>In addition to offering competitive workstation rental charges and flexible terms in Delhi, we prioritize customer satisfaction by providing exceptional service and support. Our dedicated team is committed to ensuring that your rental experience is smooth and hassle-free from start to finish. Whether you require assistance with selecting the right workstation configuration for your needs, setting up your equipment, or troubleshooting any issues that may arise, we are here to help. With our workstation rental services, you can access top-quality equipment without the burden of ownership, allowing you to scale your operations efficiently and cost-effectively. Experience the convenience and reliability of renting workstations with us and unlock new levels of productivity for your business. Contact us today to learn more about our offerings and how we can fulfill your workstation rental needs in Delhi. </p>
    </div>
@endsection
