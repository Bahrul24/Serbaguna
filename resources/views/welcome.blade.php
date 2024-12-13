<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Meta -->
    <title>News</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Raleway:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

</head>

<style>
    
</style>

<body>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="text-center p-5 bg-white rounded shadow-lg w-100 w-md-50">
            <h1 class="header-title display-4 mb-4">Selamat datang di Websitesaya</h1>
            <p class="lead text-muted mb-4">Kami senang Anda di sini! Jika sudah memiliki akun, Anda bisa langsung masuk.
                Jika belum, silakan daftar untuk memulai.</p>

            <div class="d-grid gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-success btn-lg">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-warning btn-lg">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>

    <!-- Footer Section -->
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="cycle.html">Our Cycle</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <p><i class="fa fa-map-marker-alt"></i> 123 Cycle Street, Cityname</p>
                    <p><i class="fa fa-phone-alt"></i> +1 234 567 890</p>
                    <p><i class="fa fa-envelope"></i> info@cycle.com</p>
                    <div class="social_icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="copyright_section">
        <p>Copyright © 2019 All Rights Reserved By Cycle.</p>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
