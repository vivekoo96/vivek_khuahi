@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">
                    <h2 style="color:white;">Support</h2>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- Page Header End -->



    <div class="col-md-12"><br>

        <h6 class="text-secondary font-weight-semi-bold mb-3 text-center"><span class="section-heading">Raise A Complaints</span></h6><br>
        <center>


            <div class="col-lg-7 mb-5 mb-lg-0 position p4">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  method="post" action="support_mail.php" onsubmit="return validation()">
                        <div class="form-row">

                            <div class="col-sm-6 control-group ta">
                                <label>Full Name<span style="color:red;">*</span> </label><br>
                                <input type="text" class="form-control" name="name" id="text" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group ta">
                                <label>Email <span style="color:red;">*</span> </label><br>
                                <input type="email" class="form-control" name="email" id="text" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-sm-6 control-group ta">
                                <label>Phone<span style="color:red;">*</span> </label><br>
                                <input type="number" class="form-control" name="number" id="number" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group ta">
                                <label> Organization Name<span style="color:red;">*</span> </label><br>
                                <input type="text" class="form-control" id="text" name="organization" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group ta">
                            <label>Issue<span style="color:red;">*</span> </label><br>
                            <input type="text" class="form-control" id="text" name="issue"  required>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group ta">
                            <label> Device ID / Serial Number<span style="color:red;">*</span> </label><br>
                            <input type="text" class="form-control" name="device" id="text" required>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group ta">
                            <label>Address<span style="color:red;">*</span> </label><br>
                            <textarea class="form-control" rows="2" name="address" id="text" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div><br>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton"  onclick="clear()">Send</button>
                        </div>
                    </form>
                </div>
            </div>
    </div></center>
    </div>

@endsection
