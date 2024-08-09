<title>Khushi Trading</title>
<meta name="description" content="Khushi Trading">
<meta name="keywords" content="Khushi Trading" />
<meta name="author" content="rk">
<link rel="canonical" href="https://www.khushitrading.in/" />
<meta name="language" content="en" />
<meta name="googlebot" content="index,follow" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Khushi</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


    <!-- Favicon -->
    <link href="{{ asset('assets/images/Logo11.png') }}" rel="shortcut icon">

    {{--    <script>(function(w, d) { w.CollectId = "65a12213745739dd75eb9867"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> --}}


</head>

<body>

    {{-- <!-- ***** Preloader Start ***** --> --}}
    {{-- <div id="preloader"> --}}
    {{--    <div class="jumper"> --}}
    {{--        <div></div> --}}
    {{--        <div></div> --}}
    {{--        <div></div> --}}
    {{--    </div> --}}
    {{-- </div> --}}
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}"
                        alt=""></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>

                    @php
                        $categories = App\Models\Category::all();

                    @endphp
                    <li><a class="nav-link scrollto active" href="{{ route('home') }}">HOME</a></li>
                    @forelse($categories as $category)
                        <li class="dropdown"><a
                                href="{{ url('category/' . $category->slug) }}"><span>{{ $category->name }}</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @forelse($category->brands as $brand)
                                    <li class="dropdown"><a
                                            href="{{ url('brand/' . $brand->slug) }}"><span>{{ $brand->name }}</span>
                                            <i
                                                class="{{ count($brand->products) ? 'bi bi-chevron-right' : '' }}"></i></a>
                                        @if (!is_null($brand->products) && count($brand->products) > 0)
                                            @forelse($brand->products as $product)
                                                <ul>
                                                    <li><a
                                                            href="{{ url('product/' . $product->slug) }}">{{ $product->name }}</a>
                                                    </li>

                                                </ul>
                                            @empty
                                            @endforelse
                                        @endif

                                    </li>
                                @empty
                                @endforelse

                            </ul>
                        </li>
                    @empty
                    @endforelse


                    {{-- <li class="dropdown"><a href="#"><span>Plumbing</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a class="nav-link" href="#hero">About</a></li>
                    <li><a class="nav-link" href="#hero">Contact</a></li> --}}
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('content')


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary pop_heading" id="exampleModalCenterTitle"> &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; Get A Call Back</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('store_enquery') }}" onsubmit="return validation()">
                        @csrf


                        <div class="col" style="padding-bottom:15px;">
                            <input type="text" class="form-control" placeholder="Full Name" name="name"
                                id="text" required>
                        </div>
                        <div class="col" style="padding-bottom:15px;">
                            <input type="number" class="form-control" placeholder="Mobile Number" name="phone"
                                id="number" required>
                        </div>
                        <div class="col" style="padding-bottom:15px;">
                            <select class="form-control" id="exampleFormControlSelect1" name="quantity"
                                id="text" required>
                                <option value="">Select Quantity</option>
                                <option name="1" id="1">1-6</option>
                                <option name="2" id="2">6-20</option>
                                <option name="3" id="2">20-50</option>
                            </select>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-danger" onclick="clear()">Submit</button>
                        </center>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- new -->

    <!-- end-->
    <div class="enquire">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@getbootstrap">Get A Call Back</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content get">
                <div class="modal-header">
                    <h3 class="modal-title text-secondary pop_heading" id="exampleModalLabel"> &nbsp; &nbsp; &nbsp;
                        &nbsp; Let's Keep In Touch </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('mailer') }}" onsubmit="return validationpopup()">


                        <div class="col" style="padding-bottom:15px;">
                            <input type="text" class="form-control" placeholder="Full Name" name="name"
                                id="text" required>
                        </div>
                        <div class="col" style="padding-bottom:15px;">
                            <input type="number" class="form-control" name="number" id="phone"
                                placeholder="Mobile Number" required>
                        </div>
                        <div class="col" style="padding-bottom:15px;">
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                id="text" required>
                        </div>
                        <div class="col" style="padding-bottom:15px;">
                            <textarea class="form-control" id="text" rows="3" placeholder="Message" name="message" required></textarea>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-danger" onclick="clear()">Submit</button>
                        </center>
                    </form>

                </div>

            </div>
        </div>
    </div>


    <!-- ***** contact icon ***** -->
    <div class="action-btn">
        <div class="phone-icon">
            <a href="tel:+919695502406
"><i class="fa fa-phone"></i></a>
        </div>
    </div>


    <div class="action-btn-whatsapp">
        <div class="whatsapp-icon">
            <a href="https://wa.me/+919695502406"><img src="{{ asset('assets/img/whatsapp.png') }}"></a>
        </div>
    </div>
    <!-- ***** contact icon end***** -->
    <!-- Footer Start -->
    <div class="container-fluid  text-white mt-5 py-1 px-sm-3 px-md-5" style="background-color: #00324c;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5 fw" style="color:white;">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-6 text-secondary">Khushi Trading</h1>
                </a>
                <p class="text-white">Khushi Trading Inc is a leading CCTV camera, Sanitary Ware, Network ccessories
                    and plumbing traders in Chennai. Our projects are managed by a team of professionals. </p><br>
                <h5 class="font-weight-semi-bold text-white mb-2">Opening Hours: 9AM To 7PM</h5>


            </div>

            <div class="col-lg-3 col-md-6 mb-5 fw pl0" style="color:white; padding-left:80px;">
                <h4 class="font-weight-semi-bold text-secondary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start" style="color:white;">
                    <a class="text-white mb-2" href="{{ route('home') }}"><i
                            class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="{{ route('about') }}"><i
                            class="fa fa-angle-right mr-2"></i>About</a>
                    {{-- <a class="text-white mb-2" href="{{ route('home') }}"><i class="fa fa-angle-right mr-2"></i>Our
                        Services</a> --}}
                    {{-- <a class="text-white mb-2" href="{{ route('home') }}"><i
                            class="fa fa-angle-right mr-2"></i>Support</a> --}}
                    <a class="text-white mb-2" href="{{ route('home') }}"><i
                            class="fa fa-angle-right mr-2"></i>Blog</a>
                    <a class="text-white" href="{{ route('contact') }}"><i
                            class="fa fa-angle-right mr-2"></i>Contact
                        Us</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 fw pl0" style="color:white; padding-left:36px;">
                <h4 class="font-weight-semi-bold text-secondary mb-4">Brand</h4>
                <div class="d-flex flex-column justify-content-start" style="color:white;">
                    @php
                        $brands = App\Models\Brand::limit(6)->get();
                    @endphp

                    @forelse($brands as $brand)
                        <a class="text-white mb-2" href="{{ url('brand/' . $brand->slug) }}"><i
                                class="fa fa-angle-right mr-2"></i>{{ $brand->name }} </a>
                    @empty
                    @endforelse

                    <a class="text-white" href="sitemap.html"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mb-5 fw" style="color:white;">
                <h4 class="font-weight-semi-bold text-secondary mb-4">Get In Touch</h4>
                <p class="text-white"><i class="fa fa-map-marker mr-2"></i>New 190 Old 110 Bells road Triplicane,
                    Chennai-600005, Tamil Nadu, India <br>
                    42, Thiru. Vika. Rd, Border Thottam, Padupakkam, Triplicane, Chennai, Tamil Nadu 600002
                </p>
                <!--<p class="text-white"><i class="fa fa-map-marker mr-2"></i>Bangalore :
            #42 royal placid phase 1 PWD quarters HSR Layout Bengaluru Karnataka 5600688</p>-->
                <p class="text-white"><a href="tel:+04442630007" class="text-white"><i
                            class="fa fa-phone mr-2"></i>+04442630007</a></p>
                <!--<p class="text-white"><a href="tel:+918051847691" class="text-white"><i class="fa fa-phone mr-2"></i>+918051847691</a></p>-->
                <p class="text-white"><a href="mailto:info@khushi.com" class="text-white"><i
                            class="fa fa-envelope mr-2"></i>info@khushi.com </p>

                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/khushi/"><i
                            class="fa fa-facebook"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://twitter.com/khushi"><i
                            class="fa fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/company/khushi/"><i
                            class="fa fa-linkedin"></i></a>
                    <a class="btn btn-light btn-social" href="https://www.instagram.com/khushi/"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!--location-
    <div class="row">
        <div class="col-md-12">
            <div class="footer_location">
                <h3 class="text-secondary">Desktop Rental Services</h3>
                <ul>
                    <li><a href="desktop-gurgaon.php">Gurgaon</a></li>
                    <li><a href="desktop-delhi.php">Delhi</a></li>
                    <li><a href="desktop-noida.php">Noida</a></li>
                    <li><a href="desktop-faridabad.php">Faridabad</a></li>
                    <li><a href="desktop-ghaziabad.php">Ghaziabad</a></li>
                    <li><a href="desktop-bengaluru.php">Bengaluru</a></li>
                    <li><a href="desktop-mumbai.php">Mumbai</a></li>
                    <li><a href="desktop-hyderabad.php">Hyderabad</a></li>
                    <li><a href="desktop-pune.php">Pune</a></li>
                    <li><a href="desktop-chandigarh.php">Chandigarh</a></li>
                    <li><a href="desktop-mohali.php">Mohali</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="footer_location">
                <h3 class="text-secondary">Laptop Rental Services</h3>
                <ul>
                    <li><a href="gurgaon.php">Gurgaon</a></li>
                    <li><a href="delhi.php">Delhi</a></li>
                    <li><a href="noida.php">Noida</a></li>
                    <li><a href="faridabad.php">Faridabad</a></li>
                    <li><a href="ghaziabad.php">Ghaziabad</a></li>
                    <li><a href="bengaluru.php">Bengaluru</a></li>
                    <li><a href="Mumbai.php">Mumbai</a></li>
                    <li><a href="hyderabad.php">Hyderabad</a></li>
                    <li><a href="pune.php">Pune</a></li>
                    <li><a href="chandigarh.php">Chandigarh</a></li>
                    <li><a href="mohali.php">Mohali</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="footer_location">
                <h3 class="text-secondary">Mac-System Rental Services</h3>
                <ul>
                    <li><a href="mac-gurgaon.php">Gurgaon</a></li>
                    <li><a href="mac-delhi.php">Delhi</a></li>
                    <li><a href="mac-noida.php">Noida</a></li>
                    <li><a href="mac-faridabad.php">Faridabad</a></li>
                    <li><a href="mac-ghaziabad.php">Ghaziabad</a></li>
                    <li><a href="mac-bengaluru.php">Bengaluru</a></li>
                    <li><a href="mac-mumbai.php">Mumbai</a></li>
                    <li><a href="mac-hyderabad.php">Hyderabad</a></li>
                    <li><a href="mac-pune.php">Pune</a></li>
                    <li><a href="mac-chandigarh.php">Chandigarh</a></li>
                    <li><a href="mac-mohali.php">Mohali</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="footer_location">
                <h3 class="text-secondary">Workstation Rental Services</h3>
                <ul>
                    <li><a href="workstation-gurgaon.php">Gurgaon</a></li>
                    <li><a href="workstation-delhi.php">Delhi</a></li>
                    <li><a href="workstation-noida.php">Noida</a></li>
                    <li><a href="workstation-faridabad.php">Faridabad</a></li>
                    <li><a href="workstation-ghaziabad.php">Ghaziabad</a></li>
                    <li><a href="workstation-bengaluru.php">Bengaluru</a></li>
                    <li><a href="workstation-mumbai.php">Mumbai</a></li>
                    <li><a href="workstation-hyderabad.php">Hyderabad</a></li>
                    <li><a href="workstation-pune.php">Pune</a></li>
                    <li><a href="workstation-chandigarh.php">Chandigarh</a></li>
                    <li><a href="workstation-mohali.php">Mohali</a></li>

                </ul>
            </div>
        </div>
    </div>
   <br> <!-- location end-->
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#" class="text-secondary">Khushi Trading</a>. All
                    Rights Reserved. Designed by <a href="https://lasireneexim.com/"
                        class="text-secondary">lasireneexim.com</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="{{ route('privacy') }}">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="{{ route('terms') }}">Terms</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/nav.js') }}"></script>

    <script>
        function validation() {

            var a = document.getElementById('number').value;
            if (a.length < 10) {
                alert("Mobile number must be 10 digit");
                return false;
            }
            if (a.length > 10) {
                alert("Mobile number must be 10 digit");
                return false;
            }

        }
    </script>
    <script>
        function clear() {
            document.getElementById("text").value = null;
            document.getElementById("number").value = null;

            alert("clear box");
        }
    </script>
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
    <script>
        function validationpopup() {

            var p = document.getElementById('phone').value;
            if (p.length < 10) {
                alert("Mobile number must be 10 digit");
                return false;
            }
            if (p.length > 10) {
                alert("Mobile number must be 10 digit");
                return false;
            }

        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WWKHMGHLHW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WWKHMGHLHW');
    </script>



</body>

</html>
