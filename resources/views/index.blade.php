<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Travial</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="{{ asset('/client/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/client/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/client/lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('/client/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Template Stylesheet -->
        <link href="{{ asset('/client/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Topbar -->

        <!-- Navbar start -->
        <div class="container-fluid bg-white nav-bar">
            <div class="px-xl-5">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <img src="{{ asset('/client/img/logo.svg') }}" alt="Travial Logo" style="max-height: 400px">
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <!-- Nav items go here -->
                        </div>
                        <!-- This div will push the buttons to the right -->
                        <div class="ms-auto d-flex align-items-center">
                            @guest
                                <a href="{{ route('login') }}" class="btn btn-outline-primary py-2 px-4 rounded-pill me-3">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 rounded-pill me-3">Register</a>
                            @else
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary py-2 px-4 rounded-pill me-3">Logout</button>
                                </form>
                            @endguest
                            <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill auto-width me-3">
                                Become Local Expert
                            </a>
                            <a href="#" class="d-flex justify-content-center align-items-center me-3 bg-yellow p-2 rounded">
                                <img src="{{ asset('/client/img/menu.svg') }}" alt="Local Icon" class="icon-local">
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


      <!-- Navbar End -->
<!-- Hero Start -->
<div class="container-fluid bg-white" style="
background-image: url({{ asset('client/img/hero2.png.jpg') }});
background: url({{ asset('client/img/hero2.png.jpg') }}) no-repeat center center;
background-size: cover; /* Ensure the background image covers the entire container */
padding: 20px; /* Add padding inside the container */
box-sizing: border-box;">
<div class="container2">
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-12">
            <small class="d-inline-block bg-yellow fw-bold text-dark text-uppercase border rounded-pill px-4 py-3 mb-4 animated bounceInDown">
                <img src="{{ asset('client/img/earth.svg') }}" alt="googleplay">
                Explore the World
            </small>
            <h1 class="mb-4 animated bounceInDown">
                Unveil the Beauty
                of the World Every Day
            </h1>
            <p class="fs-3 animated bounceInDown">
                Travel Without Limits Browse, Book, Explore
            </p>
            <a href="#" class="btn border-0 rounded-pill py-3 me-4 animated bounceInLeft">
                <img src="{{ asset('client/img/appstore.png') }}" alt="appstore">
            </a>
            <a href="#" class="btn border-0 rounded-pill py-3 animated bounceInLeft">
                <img src="{{ asset('client/img/googleplay.png') }}" alt="googleplay">
            </a>
        </div>
        <div class="col-lg-8 col-md-12">
            <img src="{{ asset('client/img/car.png') }}" class="img-fluid rounded animated zoomIn" alt="">
        </div>
    </div>
</div>
<div class="container-fluid event py-6">
    <div class="container">
        <div class="tab-class py-3 px-xl-5 px-5" style="position: relative; background: white; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.05); border-radius: 16px; border: 1px #E4E6E8 solid">
            <div class="d-flex">
                <ul class="nav nav-pills d-inline-flex mb-5 flex-grow-1 wow bounceInUp" data-wow-delay="0.1s">
                    <li class="nav-item p-1">
                        <a class="d-flex mx-1 py-1 rounded-pill text-center p-4 active" data-bs-toggle="pill" href="#tab-1">
                            Tours
                        </a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="d-flex mx-1 py-1 rounded-pill text-center p-4" data-bs-toggle="pill" href="#tab-2">
                            Hotels
                        </a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="d-flex mx-1 py-1 rounded-pill text-center p-4" data-bs-toggle="pill" href="#tab-3">
                            Tickets
                        </a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="d-flex mx-1 py-1 rounded-pill text-center p-4" data-bs-toggle="pill" href="#tab-4">
                            Rental
                        </a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="d-flex mx-1 py-1 rounded-pill text-center p-4" data-bs-toggle="pill" href="#tab-5">
                            Activities
                        </a>
                    </li>
                </ul>
                <a class="d-flex mx-1 py-1 rounded-pill text-center p-4" href="#help">
                    <img src="{{ asset('client/img/user.svg.png') }}" alt="user" class="icon me-2" style="width: 24px; height: 24px;">
                    <span class="text-dark">Need some help?</span>
                </a>
            </div>
            <div class="tab-content border border-radius rounded">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-5">
                                <div class="col-md-6 col-lg-2 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="">
                                        <div class="p-4">
                                            <p class="fs-6 animated bounceInDown fw-bold px-3">
                                                Location
                                            </p>
                                            <div class="nav-item dropdown me-3">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="bi bi-geo-alt"></i>
                                                    New York, USA
                                                </a>
                                                <div class="dropdown-menu bg-light">
                                                    <!-- Dropdown items go here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="pt-4 pb-4">
                                        <div class="border-start">
                                            <p class="fs-6 animated bounceInDown fw-bold px-3">
                                                Check In
                                            </p>
                                            <div class="nav-item dropdown me-3">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="bi bi-geo-alt"></i>
                                                    02 January 2024
                                                </a>
                                                <div class="dropdown-menu bg-light">
                                                    <!-- Dropdown items go here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="pt-4 pb-4">
                                        <div class="border-start">
                                            <p class="fs-6 animated bounceInDown fw-bold px-3">
                                                Check Out
                                            </p>
                                            <div class="nav-item dropdown me-3">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="bi bi-calendar-day"></i>
                                                    02 January 2024
                                                </a>
                                                <div class="dropdown-menu bg-light">
                                                    <!-- Dropdown items go here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="pt-4 pb-4">
                                        <div class="border-start">
                                            <p class="fs-6 animated bounceInDown fw-bold px-3">
                                                Guest
                                            </p>
                                            <div class="nav-item dropdown me-3">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="bi bi-person"></i>
                                                    2 adults, 2 children
                                                </a>
                                                <div class="dropdown-menu bg-light">
                                                    <!-- Dropdown items go here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="pt-4 pb-4">
                                        <div class="p-4 d-flex justify-content-end">
                                            <p class="fs-6 animated bounceInDown fw-bold px-3">
                                                <!-- Content goes here -->
                                            </p>
                                            <a href="#" class="btn btn-primary py-3 px-5 rounded-pill">
                                                About Us
                                                <i class="fas fa-arrow-right ps-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Hero End -->
<!-- Cars Start -->

<div class="container-fluid py-6">
    <div class="container">
        <div class="wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5">Recent Launched Cars</h1>
            <p class="fs-4 animated bounceInDown">
                The world's leading car brands
            </p>
        </div>
        <div class="row g-4">
            @foreach($recentCars as $car)
            <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                <div class="team-item rounded border border-radius">
                    <img class="img-fluid rounded-top" src="{{ asset($car->image) }}" alt="{{ $car->name }}">
                    <div class="team-content">
                        <div class="py-6 p-4">
                            <h4 class="mb-3">{{ $car->name }}</h4>
                            <a href="#" class="nav-link">
                                <i class="fa fa-map-marker-alt" style="color: #D6D7D8;"></i>
                                {{ $car->launch_date ? $car->launch_date->format('d F Y') : 'Date not available' }}
                            </a>
                            <hr>
                            <div class="row g-4 text-dark mb-5 text-md-start">
                                <div class="col-sm-6">
                                    <img src="{{ asset('/client/img/Clip path group.png') }}" alt="Share Icon" class="icon me-2">
                                    {{ number_format($car->model) }} model
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/client/img/speed.svg.svg') }}" alt="Automatic Icon" class="icon me-2">
                                    {{ $car->transmission_type }}
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/client/img/fuel.svg.svg') }}" alt="Diesel Icon" class="icon me-2">
                                    {{ $car->fuel_type }}
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/client/img/seat.svg.svg') }}" alt="Seats Icon" class="icon me-2">
                                    {{ $car->seats }} seats
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>
                                    from
                                    <span class="fs-3 text-dark fw-bold">
                                        ${{ number_format($car->price_per_day, 2) }}
                                    </span>
                                </p>
                                <a href="{{ auth()->check() ? route('book.car', $car->id) : route('login') }}"
                                    class="btn btn-primary py-3 px-4 rounded-pill"
                                    style="background-color: #D6D7D8; color: #000;">
                                     {{ auth()->check() ? 'Book Now' : 'Login to Book' }}
                                 </a>

                            </div>
                        </div>
                        <div class="rating-badge">
                            <span class="rating-icon">
                                <i class="bi bi-star-fill" style="color: rgb(255, 196, 0);"></i>
                            </span>
                            <span class="rating-value">{{ number_format($car->rating, 2) }}</span>
                            <span class="rating-reviews">({{ $car->reviews_count }} reviews)</span>
                        </div>
                    </div>
                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                        <a class="share btn btn-md-square rounded-circle mb-2" href="">
                            <i class="bi bi-heart" style="font-size:30px; color: #000;"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="Section">
    <img class="BestCarPng" src="{{ asset('/client/img/best-car.png') }}">
    <img class="BestCar2Png" src="{{ asset('/client/img/best-car2.png') }}">
    <img class="BestCar3Png" src="{{ asset('/client/img/best-car3.png') }}">
    <img class="BestCar4Png" src="{{ asset('/client/img/best-car4.png') }}">
    <img class="BestCar5Png" src="{{ asset('/client/img/best-car5.png') }}">
    <img class="BestCar6Png" src="{{ asset('/client/img/best-car6.png') }}">
</div>
<!-- Work Start -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5">How It Work ?</h1>
            <p class="fs-4 animated bounceInDown">
                Just 4 easy and quick steps
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{ asset('/client/img/img-how.png.png') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <div class="menu-item d-flex align-items-center pb-4">
                    <div class="d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid #000; font-size: 1.25rem; background-color: #f8f9fa;">
                        1
                    </div>
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex">
                            <h4>Browse and Select</h4>
                        </div>
                        <p class="mb-0">
                            Easily find your perfect car. Filter by model, brand, and size for a seamless selection process.
                        </p>
                    </div>
                </div>
                <div class="menu-item d-flex align-items-center pb-4">
                    <div class="d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid #000; font-size: 1.25rem; background-color: #f8f9fa;">
                        2
                    </div>
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex">
                            <h4>Booking and Reservation</h4>
                        </div>
                        <p class="mb-0">
                            Quickly reserve with flexible dates and locations. Real-time availability updates ensure a smooth booking experience.
                        </p>
                    </div>
                </div>
                <div class="menu-item d-flex align-items-center pb-4">
                    <div class="d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid #000; font-size: 1.25rem; background-color: #f8f9fa;">
                        3
                    </div>
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex">
                            <h4>Payment and Confirmation</h4>
                        </div>
                        <p class="mb-0">
                            Secure payments, various methods accepted. Instant confirmation for a hassle-free rental process.
                        </p>
                    </div>
                </div>
                <div class="menu-item d-flex align-items-center pb-4">
                    <div class="d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid #000; font-size: 1.25rem; background-color: #f8f9fa;">
                        4
                    </div>
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex">
                            <h4>Pickup and Return</h4>
                        </div>
                        <p class="mb-0">
                            Effortless pickup and return. Simple documentation, optional services like delivery, and excellent customer support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Work End -->

<!-- Services Start -->
<div class="container-fluid blog py-6">
    <div class="container">
        <div class="wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5">Our Services</h1>
            <div class="d-flex justify-content-between pb-2 mb-2">
                <p class="fs-4 animated bounceInDown">
                    Just 4 easy and quick steps
                </p>
                <a href="" class="btn btn-primary py-3 px-5 rounded-pill">
                    View More
                    <i class="fas fa-arrow-right ps-2"></i>
                </a>
            </div>
        </div>
        <div class="row gx-4 justify-content-center">
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                <div class="blog-item position-relative overflow-hidden rounded">
                    <div class="blog-image">
                        <img src="{{ asset('/client/img/Link-service.png') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                    <div class="blog-content position-absolute bottom-0 start-0 end-0 bg-light mx-4 d-flex p-4 rounded ">
                        <div class="ps-3">
                            <h4 class="mb-0">Sara Mohamed</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="m-0">Jakatar</p>
                                <div class="d-flex align-items-center justify-content-center bg-secondary rounded-circle p-2">
                                    <i class="fas fa-arrow-right text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat similar blocks as necessary -->
        </div>
    </div>
</div>
<!-- Services End -->

<div class="container-fluid blog py-6 p-4 mb-5">
    <div class="container" style="
            border-radius: 32px;
            background-image: url({{asset('/client/img/background.png')}});
            background: url({{asset('/client/img/background.png')}}) no-repeat center center;
            background-size: cover; /* Ensure the background image covers the entire container */
            padding: 20px; /* Add padding inside the container */
            box-sizing: border-box;">
        <div class="row gx-4 justify-content-center pt-4 pb-4 text-center">
            <div class="col-lg-8 pt-4 pb-4">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-5">
                            <!-- Repeatable Item Start -->
                            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                <div class="pt-4 pb-4">
                                    <div class="border-start">
                                        <p class="fs-2 animated bounceInDown text-white fw-bold px-3">
                                            168k
                                        </p>
                                        <p class="fs-6 animated bounceInDown text-white fw-bold px-3">
                                            Happy Clients
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeatable Item End -->
                            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                <div class="pt-4 pb-4">
                                    <div class="border-start">
                                        <p class="fs-2 animated bounceInDown text-white fw-bold px-3">
                                            168k
                                        </p>
                                        <p class="fs-6 animated bounceInDown text-white fw-bold px-3">
                                            Happy Clients
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- More Items... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Start -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border rounded-pill px-4 py-1 mb-3">Testimonial</small>
            <h1 class="display-5 mb-5">Don't take our word for it</h1>
        </div>
        <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
            <div class="testimonial-item rounded-3 bg-light">
                <div class="testimonial-content">
                    <h4 class="mb-0">The best booking system</h4>
                    <p class="fs-6 m-0 pt-5">I've been using the hotel booking system for several years now, and it's become my go-to platform for planning my trips.</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="{{asset('/client/img/testimonial-1.jpg')}}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="ps-3">
                        <h4 class="mb-0">Sara Mohamed</h4>
                        <p class="m-0">Jakatar</p>
                        <div class="d-flex px-xl-5">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeatable Testimonial Items -->
        </div>
    </div>
</div>
<!-- Testimonial End -->



      <!-- Menu Start -->
<div class="container-fluid menu  py-6 my-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5 ">Frequently Asked Questions</h1>
            <p class="fs-4 animated bounceInDown">
                You need to come at least once in your life
            </p>
        </div>
        <div class="tab-class text-center bg-light">
            <div class="accordion" id="faqAccordion">
                <div class="card">
                    <div class="card-header card-header-custom" id="headingOne">
                        <h1>01</h1>
                        <h5 class="mb-0 d-flex align-items-center">
                            <span>How do I make a reservation on your website?</span>
                        </h5>
                        <i
                            class="fas fa-plus faq-icon"
                            data-toggle="collapse"
                            data-target="#collapseOne"
                            aria-expanded="false"
                            aria-controls="collapseOne"
                            style="font-size: 2em;color: #F2F4F6; background-color: #000000; padding: 10px"
                        ></i>
                    </div>
                    <div
                        id="collapseOne"
                        class="collapse"
                        aria-labelledby="headingOne"
                        data-parent="#faqAccordion"
                    >
                        <div class="card-body px-xl-5 container p-4 mb-5">
                            Provide a step-by-step guide on how users can browse and book travel services on your platform. Include information on searching for destinations, selecting dates, choosing accommodation, and completing the booking process.
                            Mention any special features or tools that can help users find the best deals.
                        </div>
                    </div>
                </div>
                <!-- Add more FAQ items here as needed -->
            </div>
            <!-- Repeat accordion items if needed -->
        </div>
    </div>
</div>
<!-- Menu End -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.faq-icon').click(function () {
            var $icon = $(this);
            if ($icon.hasClass('fa-plus')) {
                $icon.removeClass('fa-plus').addClass('fa-times');
            } else {
                $icon.removeClass('fa-times').addClass('fa-plus');
            }
        });

        // To handle collapse and expand icon properly
        $('#faqAccordion').on('shown.bs.collapse', function (e) {
            $(e.target).prev().find('.faq-icon').removeClass('fa-plus').addClass('fa-times');
        });

        $('#faqAccordion').on('hidden.bs.collapse', function (e) {
            $(e.target).prev().find('.faq-icon').removeClass('fa-times').addClass('fa-plus');
        });
    });
</script>
<!-- Hero Start -->
<div class="container-fluid py-6 my-6 mt-0">
    <div class="container bg-secondary">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <small class="d-inline-block fw-bold text-dark text-uppercase px-4 py-3 mb-4 animated bounceInDown">
                    Install APP & Get discount code
                </small>
                <h1 class="mb-4 animated bounceInDown">
                    Discover Seamless Travel with Travila
                </h1>
                <p class="fs-3 animated bounceInDown">
                    Embark on a journey like never before with Travila – your ultimate travel companion.
                </p>
                <a href="" class="btn border-0 rounded-pill py-3 me-4 animated bounceInLeft">
                    <img src="{{ asset('client/img/appstore.png') }}" alt="appstore">
                </a>
                <a href="" class="btn border-0 rounded-pill py-3 animated bounceInLeft">
                    <img src="{{ asset('client/img/googleplay.png') }}" alt="googleplay">
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('client/img/laptop.png') }}" class="img-fluid rounded animated zoomIn" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Hero End -->
<!-- Footer Start -->
<div class="container-fluid footer py-6 my-6 mb-0 bg-dark wow bounceInUp" data-wow-delay="0.1s">
    <div class="px-xl-5">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item text-white">
                    <img src="{{ asset('client/img/logo2.png') }}" alt="Travial Logo" style="max-height: 400px ">
                    Travial
                    <p class="lh-lg mb-4 text-white">
                        Dive into local recommendations for a truly authentic experience.
                    </p>
                    <span class="me-3 d-block text-white">
                        <img src="{{ asset('client/img/phone.svg') }}" alt="phone" style="max-height: 400px">
                        Need help? Call us
                    </span>
                    <span class="me-3 d-block fs-3" style="color: #F09814;">
                        1-800-222-8888
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Company</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href="">About Us</a>
                                <a class="text-body mb-3" href="">Community Blog</a>
                                <a class="text-body mb-3" href="">Jobs & Careers</a>
                                <a class="text-body mb-3" href="">Contact Us</a>
                                <a class="text-body mb-3" href="">Our Awards</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Services</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href="">Tour Guide</a>
                                <a class="text-body mb-3" href="">Tour Booking</a>
                                <a class="text-body mb-3" href="">Hotel Booking</a>
                                <a class="text-body mb-3" href="">Ticket Booking</a>
                                <a class="text-body mb-3" href="">Rental Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Legal</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href="">Terms of Service</a>
                                <a class="text-body mb-3" href="">Privacy Policy</a>
                                <a class="text-body mb-3" href="">Cookies Policy</a>
                                <a class="text-body mb-3" href="">Data Processing</a>
                                <a class="text-body mb-3" href="">Data Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Support</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href="">Forum support</a>
                                <a class="text-body mb-3" href="">Help Center</a>
                                <a class="text-body mb-3" href="">How it works</a>
                                <a class="text-body mb-3" href="">Security</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4 text-white">Newsletter</h4>
                    <div class="d-flex flex-column align-items-start">
                        <div class="form-group has-search py-2">
                            <span class="fa fa-envelope form-control-feedback"></span>
                            <input type="text" class="form-control rounded-pill" placeholder="Search">
                        </div>
                        <a href="#" class="btn btn-Subscribe px-4 py-2 rounded-pill">
                            Subscribe
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="px-xl-5">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light">
                    © 2024 Travila Inc. All rights reserved.
                </span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                Follow us
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
<!-- Back to Top -->
<a href="#" class="btn btn-md-square rounded-circle back-to-top" style="background-color: #313131;">
    <i class="fa fa-arrow-up" style="color: #FEFA17;"></i>
</a>
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('client/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('client/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('client/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('client/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('client/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('client/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<!-- Template Javascript -->
<script src="{{ asset('client/js/main.js') }}"></script>
</body>
</html>
