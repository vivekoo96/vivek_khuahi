@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">
                    <h2 style="color:white;">Contact Us</h2>
                </div>


            </div>
        </div>
    </div>
    {{--    </div> --}}
    <!-- Page Header End -->

    <br>
    <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Contact Us</span></h6><br>
    <div class="col-md-12" style="background-color: #003F5F;"><br>
        <div class="row" style="margin-left:15px; margin-right:15px;">
            <div class="col-md-7">
                <img src="{{ asset('assets/img/contactt.png') }}" width="700" height="500">
            </div>
            <div class="col-md-5 mb-5 mb-lg-0 p4 position" style="background-color: white;">
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

    <div class="row">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.5956606310315!2d80.2641153!3d13.0613897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52666a3b499e4f%3A0xb71867bb0ac4e723!2sKhushi%20Trade%20Links!5e0!3m2!1sen!2sin!4v1720627571552!5m2!1sen!2sin"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
