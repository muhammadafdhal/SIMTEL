<!doctype html>
<html lang="en">

<head>
    <title>LuxuryHotel a Hotel Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700"
        rel="stylesheet">

    <link rel="stylesheet" href="/front/css/bootstrap.css">
    <link rel="stylesheet" href="/front/css/animate.css">
    <link rel="stylesheet" href="/front/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/front/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/front/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/front/css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/front/css/style.css">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">The Nancy's Home Stay</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/login">login Pegawai</a>
                        </li> --}}

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">login Pegawai</a>
                        </li>

                        <li class="nav-item cta">
                            <a class="nav-link" href="/login_tamu"><span>Login Tamu</span></a>
                        </li>


                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(/front/images/main.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>Selamat Datang</h1>
                        <p>Di The Nancy's Home Stay</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        {{-- konten start --}}
        @yield('content')
        {{-- konten end --}}
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Phone Support</h3>
                    <p>24/7 Call us now.</p>
                    <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>We are socialized. Follow us</p>
                    <p>
                        <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    
                    <form action="#" class="subscribe">
                        <div class="form-group">
                            <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" /></svg></div>

    <script src="/front/js/jquery-3.2.1.min.js"></script>
    <script src="/front/js/jquery-migrate-3.0.0.js"></script>
    <script src="/front/js/popper.min.js"></script>
    <script src="/front/js/bootstrap.min.js"></script>
    <script src="/front/js/owl.carousel.min.js"></script>
    <script src="/front/js/jquery.waypoints.min.js"></script>
    <script src="/front/js/jquery.stellar.min.js"></script>

    <script src="/front/js/jquery.magnific-popup.min.js"></script>
    <script src="/front/js/magnific-popup-options.js"></script>

    <script src="/front/js/main.js"></script>
</body>

</html>
