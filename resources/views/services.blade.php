@extends('layouts.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">
                    <h2 style="color:white;">Services</h2>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- Page Header End -->

    <br>
    <br>
    <div class="col-md-12" id="ser">
        <div class=" ml-6">
            <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Our Services</span></h6></div>
        <h3 style="text-align:center;"><span  class="mb-4 ml-6"> &nbsp;Take a look at our key rental services</span></h3><br><br>
        <center><div class="background">

            </div></center>
        <div class="row" id="services">
            <div class="col-md-3 tc service_box">
                <img src="assets/images/desk2.jpg" width="260" height="200"><br>
                <br><h3>Desktop On Rent</h3>
                <p>Desktop computers are user-friendly and convenient to use. You may rent the desktop of any brand, capacity or features at RM.</p>
                <a href="" class="text-secondary" data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>

            <div class="col-md-3 tc service_box">
                <img src="assets/images/hpp.png" width="260" height="200"><br>
                <br><h3>Laptop On Rent</h3>
                <p>Laptop is a mobile equipment, which makes a popular choice for offices. Rent &nbsp; &nbsp;a laptop now to setup a remote workforce.</p>
                <a href="" class="text-secondary" data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>
            <div class="col-md-3 tc service_box">
                <img src="assets/images/ser-macbook-pro.jpg" width="260" height="200"><br>
                <br><h3>Mac Systems On Rent</h3>
                <p>Overcome the power outage to stop it becoming a hurdle in routine work. Rent Mac Systems with wide range of models and capacity.</p>
                <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>
            <div class="col-md-3 tc service_box">
                <img src="assets/images/server.png" width="260" height="200"><br><br>
                <h3>Workstation On Rent</h3>
                <p>Rent server for your business with 24x7x365 service and support. Personal or office use, we offer the servers at affordable price.</p>
                <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">Enquire</a>
            </div>


        </div>
    </div>


    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="">
                        <h6><span class="section-heading text-secondary">Our Portfolio</span></h6><br>
                        <h2> &nbsp;Services We Offer</h2>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><i class="fa fa-desktop" style="font-size:42px; color:#d23431;"></i></a></li>
                                            <li><a href='#tabs-2'><i class="fa fa-laptop" style="font-size:42px; color:#d23431;"></i></a></a></li>
                                            <li><a href='#tabs-3'><i class="fas fa-mobile" style="font-size:42px; color:#d23431;"></i></a></a></li>
                                            <li><a href='#tabs-4'><i class="fa fa-server" style="font-size:42px; color:#d23431;"></i></a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/system.jpg" class="border mb-2">
                                                <p class="tc">Rental Desktop</p></a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/dell.jpg" class="border mb-2">
                                                <p class="tc">Rental Desktop</p></a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/acer.jpg" class="border mb-2">
                                                <p class="tc">Rental Desktop</p></a>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/dell2.jpg" class="border mb-2">
                                                <p class="tc">Rental Desktop</p></a>
                                        </div>
                                    </div>
                                </article>

                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/dell.jpg" class="border mb-2">
                                                <p class="tc">Rental Dell Laptop</p></a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/dell2.png" class="border mb-2">
                                                <p class="tc">Rental Dell</p></a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/lenovo.jpg" class="border mb-2">
                                                <p class="tc">Rental lenovo</p></a>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/len1.jpg" class="border mb-2">
                                                <p class="tc">Rental hp</p></a>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/hpp.png" class="border mb-2">
                                                <p class="tc">Rental hp</p><a>
                                        </div>
                                    </div>
                                </article>

                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/ups.jpg" class="border mb-2">
                                                <p class="tc">Rental UPS</p></a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/ups2.jpg" class="border mb-2">
                                                <p class="tc">Rental UPS</p></a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/ups3.png" class="border mb-2">
                                                <p class="tc">Rental UPS</p></a>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/ups4.png" class="border mb-2">
                                                <p class="tc">Rental UPS</p></a>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <a href="" class="text-secondary"  data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="img/service/ups-inverter-500x500.jpg" class="border mb-2">
                                                <p class="tc">Rental Ups</p></a>
                                        </div>
                                    </div>
                                </article>

                                <article id='tabs-4'>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="img/service/products.png" class="border mb-2">
                                            <p class="tc">Rental Dell Laptop</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="img/service/server.png" class="border mb-2">
                                            <p class="tc">Rental Dell</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="img/service/server1.jpg" class="border mb-2">
                                            <p class="tc">Rental lenovo</p>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <img src="img/service/server2.png" class="border mb-2">
                                            <p class="tc">Rental hp</p>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <img src="img/service/server5.jpg" class="border mb-2">
                                            <p class="tc">Rental hp</p>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area end ***** -->

    <!-- ***** item Area Starts ***** -->
    <section class="section" id="menu" style="padding-top: 100px;">
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

                        <div class='card card1 cards'>
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
                        <div class='card card2 cards'>
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
                        <div class='card card3 cards'>
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
                        <div class='card card4 cards'>
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
                        <div class='card card5 cards'>
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
                        <div class='card card6 cards'>
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
    <!-- ***** item Area Ends ***** -->



    <!--**** Contact us ****-->
    <br>
    <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Contact Us</span></h6><br>
    <div class="col-md-12" style="background-color: #E8E8E8;"><br>
        <div class="row" style="margin-left:15px; margin-right:15px;">
            <div class="col-md-7">
                <img src="img/contactt.png" width="700" height="500">
            </div>
            <div class="col-md-5 mb-5 mb-lg-0 p4 position"  style="background-color: white;">
                <div class="contact-form"><br>
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate" style="padding-left:20px;">
                        <div class="form-row">

                            <div class="col-sm-6 control-group ta">
                                <label>Full Name<span style="color:red;">*</span> </label><br>
                                <input type="text" class="form-control" id="name" required="required" data-validation-required-message="Please enter your name">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group ta">
                                <label>Email <span style="color:red;">*</span> </label><br>
                                <input type="email" class="form-control" id="email" required="required" data-validation-required-message="Please enter your email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-sm-6 control-group ta">
                                <label>Phone<span style="color:red;">*</span> </label><br>
                                <input type="number" class="form-control" id="name" required="required" data-validation-required-message="Please enter your name">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group ta">
                                <label>Address<span style="color:red;">*</span> </label><br>
                                <input type="email" class="form-control" id="email" required="required" data-validation-required-message="Please enter your email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group ta">
                            <label>Message<span style="color:red;"></span> </label><br>
                            <textarea class="form-control" rows="2" id="message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div style="padding-top:10px;">
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div><br>
    </div>
    <!--**** end contact us ****-->
@endsection
