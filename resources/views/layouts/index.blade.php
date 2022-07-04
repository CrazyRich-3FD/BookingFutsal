<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking Lapangan Futsal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset ('template/img/logo.jpeg ') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ asset ('https://fonts.gstatic.com ') }}">
    <link href="{{ asset ('https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap ') }}" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css ') }}" rel="stylesheet">
    <link href="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css ') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset ('template/lib/owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">
    <link href="{{ asset ('template/lib/animate/animate.min.css ') }}" rel="stylesheet">
    <link href="{{ asset ('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css ') }}" rel="stylesheet" />
    <link href="{{ asset ('template/lib/twentytwenty/twentytwenty.css ') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset ('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset ('template/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start loading  -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End loading -->

    <!-- Topbar Start -->
    {{-- @include ('layouts.header') --}}
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include ('layouts.menu')
    <!-- Navbar End -->

    @yield('content')
    
    <!-- Footer Start -->
    @include ('layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset ('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset ('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset ('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('template/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset ('template/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset ('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset ('template/lib/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset ('template/lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset ('template/js/main.js') }}"></script>
</body>

</html>