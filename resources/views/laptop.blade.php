@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">
                    <h2 style="color:white;">Laptops</h2>
                </div>


            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <br>
    <!-- ***** Menu Area Starts ***** -->
    <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Laptop on Rent</span></h6>
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

                        <div class='card laptop1 cards'>
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
                        <div class='card laptop2 cards'>
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
                        <div class='card laptop3 cards'>
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
                        <div class='card laptop4 cards'>
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
                        <div class='card laptop5 cards'>
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
                        <div class='card laptop6 cards'>
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
            <div class="col-md-7"><br>
                <h3>Looking for laptop or computer rentals in Gurgaon, Delhi NCR?</h3><br>
                <p> Look no further! We provide convenient and affordable rental options to meet your business or personal needs. Whether you need a single laptop or a fleet of computers, we've got you covered. Our rental services offer top-quality equipment, flexible rental durations, and prompt delivery. Save on upfront costs and enjoy hassle-free computing with our rental solutions. Contact us today to learn more and get started!
                </p>
                <p>Our laptop and computer rental services in Gurgaon, Delhi NCR are designed to cater to a diverse range of requirements, from short-term projects to long-term business needs. We offer a variety of models to suit your specific preferences and technical specifications, ensuring that you have access to the latest technology without the burden of ownership or maintenance. With competitive pricing and reliable support, we strive to provide a seamless rental experience, including timely assistance with setup, troubleshooting, and any other technical issues that may arise during your rental period. Experience the convenience and flexibility of renting laptops and computers with us - contact us today to discuss your requirements and get a personalized quote.</p>
            </div>
            <div class="col-md-5">
                <img src="{{asset('assets/img/dell.jpg')}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('assets/img/hp2.jpg')}}" width="450" height="450">
            </div>
            <div class="col-md-7"><br>
                <h3>Looking for laptop rental charges, laptop on rent per month, laptop rental charges, laptop on lease, or laptop hire charges in Delhi?</h3><br>
                <p>Our laptop rental services provide cost-effective solutions tailored to your needs. Whether you need laptops for short-term projects, events, or long-term leases, we offer competitive rates and flexible terms. Our diverse inventory includes a range of laptops from leading brands, ensuring reliability and performance. With transparent pricing and no hidden fees, you can easily budget for your rental requirements. Additionally, we offer flexible rental durations to accommodate your project timelines, whether you need laptops for a day, a week, a month, or longer. Our experienced team ensures timely delivery, setup, and ongoing support throughout your rental period, ensuring a seamless experience. Renting laptops from us eliminates the need for upfront investment and maintenance costs, allowing you to focus on your core activities. Experience the convenience and flexibility of renting laptops with us. Contact us today to discuss your requirements and get a personalized quote tailored to your specific needs in Delhi. </p>
            </div>
        </div>
        <br><p>In addition to offering competitive laptop rental charges and flexible terms in Delhi, we prioritize customer satisfaction by providing exceptional service and support. Our dedicated team is committed to ensuring that your rental experience is smooth and hassle-free from start to finish. Whether you require assistance with selecting the right laptop configuration for your needs, setting up your equipment, or troubleshooting any issues that may arise, we are here to help. With our laptop rental services, you can access top-quality equipment without the burden of ownership, allowing you to scale your operations efficiently and cost-effectively. We understand the importance of reliable technology for your projects or business operations, which is why we ensure that our laptops are well-maintained and up-to-date with the latest software. Experience the convenience and reliability of renting laptops with us and unlock new levels of productivity for your business. Contact us today to learn more about our offerings and how we can fulfill your laptop rental needs in Delhi. </p>
    </div>
@endsection
