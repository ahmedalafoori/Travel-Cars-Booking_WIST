
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
    <nav>
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
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
