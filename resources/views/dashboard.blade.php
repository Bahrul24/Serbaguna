
@extends('layouts.app')

@section('title', 'Cycle')

@section('content')
<!-- Header Section Start -->
<div class="header_section header_bg">
    <!-- Banner Section Start -->
    <div class="banner_section layout_padding">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="best_text">Best</div>
                                <div class="image_1"><img src="{{ asset('images/indomie.jpg') }}" alt="Indomie"></div>
                            </div>
                            <div class="col-md-5">
                                <h1 class="banner_taital">Indomie</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content.</p>
                                <div class="contact_bt"><a href="{{ route('home.contact') }}">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="best_text">Best</div>
                                <div class="image_1"><img src="{{ asset('images/bimoli.png') }}" alt="Bimoli"></div>
                            </div>
                            <div class="col-md-5">
                                <h1 class="banner_taital">New Model Cycle</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content.</p>
                                <div class="contact_bt"><a href="{{ route('home.contact') }}">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="best_text">Best</div>
                                <div class="image_1"><img src="{{ asset('images/aqua.jpg') }}" alt="Aqua"></div>
                            </div>
                            <div class="col-md-5">
                                <h1 class="banner_taital">New Model Cycle</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content.</p>
                                <div class="contact_bt"><a href="{{ route('home.contact') }}">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- Banner Section End -->
</div>
<!-- Header Section End -->
@endsection

<!-- Footer Section Start -->
@section('footer')
<div class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>About Us</h4>
                <p>We provide high-quality cycles designed to meet your needs and style. Join us for an amazing cycling experience.</p>
            </div>
            <div class="col-md-4">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('home.cycle') }}">Our Cycle</a></li>
                    <li><a href="{{ route('home.about') }}">About Us</a></li>
                    <li><a href="{{ route('home.contact') }}">Contact</a></li>
                  
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Contact Us</h4>
                <p><i class="fa fa-map-marker"></i> 123 Cycle Street, Cityname</p>
                <p><i class="fa fa-phone"></i> +1 234 567 890</p>
                <p><i class="fa fa-envelope"></i> info@cycle.com</p>
                <div class="social_icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Copyright Section Start -->
@section('copyright')
<div class="copyright_section">
    <p>Copyright © 2019 All Rights Reserved By Cycle.</p>
</div>
@endsection

@section('scripts')
<!-- JavaScript files-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/plugin.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }

    $("#main").click(function(){
        $("#navbarSupportedContent").toggleClass("nav-normal")
    });
</script>
@endsection
