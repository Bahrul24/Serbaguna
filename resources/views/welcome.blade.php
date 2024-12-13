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

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
