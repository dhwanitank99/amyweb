<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Amyindia</title>
    <!-- Favicon -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	 <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
     <link href="{{asset('css/style.css')}}" rel="stylesheet">
	 
	 <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	 <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
	 <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
	 
    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    @stack('styles')
</head>

<body>
<!-- Search Form Area -->
<div class="fancy-search-form d-flex align-items-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Close Btn -->
                <div class="search-close-btn" id="closeBtn">
                    <i class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
                <!-- Form -->
                <form action="#" method="get">
                    <input type="search" name="fancySearch" id="search" placeholder="| Enter Your Search...">
                    <input type="submit" class="d-none" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header_area" id="header">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg align-items-center">
                    <a class="navbar-brand" href="index.html"><img src="{{Storage::url($general->getLogo())}}" alt="amyindia-top-logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><i style="color:#fff" class="fa fa-bars" aria-hidden="true"></i></button>
                    <div class="collapse navbar-collapse" id="fancyNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('about')}}">About Us</a>
                            </li>
                            <!--<li class="nav-item active">-->
                            <!--    <a class="nav-link" href="{{route('service')}}">Services </a>-->
                            <!--</li>-->
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Services </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('service')}}"> Core Services </a></li>
                                    <li><a class="dropdown-item" href="{{route('employer')}}"> Employers</a></li>
                                    <li><a class="dropdown-item" href="{{route('candidate-connect')}}"> Candidate-Connect</a></li>
                                </ul>
                            </li>
                            <!--<li class="nav-item active">-->
                            <!--    <a class="nav-link" href="{{route('employer')}}">Employers </a>-->
                            <!--</li>-->

                            <!--<li class="nav-item active">-->
                            <!--    <a class="nav-link" href="{{route('candidate-connect')}}">Candidate Connect </a>-->
                            <!--</li>-->


                            <li class="nav-item">
                                <a class="nav-link" href="{{route('event')}}">Events & Seminars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('client')}}">Clients</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                        <!-- Search & Shop Btn Area -->
                        <div class="fancy-search-and-shop-area">
                            <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<!-- Content -->
@yield('content')
<!-- ***** Footer Area Start ***** -->
<footer class="fancy-footer-area fancy-bg-dark">
    <div class="footer-content section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget">
                        <h6>Get in touch</h6>
                        <p><i class="icon_phone" aria-hidden="true"></i> &nbsp; {{$general->getPhone()}} <br>
                            <i class="icon_mail" aria-hidden="true"></i>&nbsp; &nbsp;<a href="mailto:{{$general->getEmail()}}">{{$general->getEmail()}}</a></p>

                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp; {{$general->getAddress()}},{{$general->getCity()}}-{{$general->getPinCode()}},{{$general->getState()}}</p>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget">
                        <h6>Links</h6>
                        <nav>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                                <li><a href="about-us.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</a></li>
                                <li><a href="services.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Services</a></li>
                                <li><a href="candidate.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Candidates</a></li>
                                <li><a href="events-seminars.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Events</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Certifications</a></li>
                                <li><a href="careers.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Careers</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</a></li>
                                <li><a href="clients.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Clients</a></li>
                                <li><a href="privacy-policy.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy Policy</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Footer Widget -->

                <!-- Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>{{$general->getDetails()}}</p>
                        <h5>Get Amy App for Your Mobile</h5>
                        <img src="images/g-play.jpg" alt="g-play">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Copywrite -->
    <div class="footer-copywrite-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>&copy; 2020 Amy HRMS India Pvt Ltd </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ***** Footer Area End ***** -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap-4 js -->

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('js/active.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
@stack('scripts')
</body>