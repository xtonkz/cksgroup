<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link href="images/company_logo/favicon.png" rel="icon" type="image/png" />

    <!-- CSS -->
    <link rel="stylesheet" href="css//bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/plugins/animate-css/animate.css">
    <link rel="stylesheet" href="css/plugins/colorbox/colorbox.css">
    <link rel="stylesheet" href="css/plugins/slick/slick.css">
    <link rel="stylesheet" href="css/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css" >
    
    <title>{{ $title }}</title>
  </head>


<body data-gr-ext-installed="" data-new-gr-c-s-check-loaded="14.1078.0">
    <div class="body-inner">
        <div class="top-bar" id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li>
                            <p class="info-text">Jl. Permata Harapan Baru Blok G1 No.22, Bekasi</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->
                </div><!--/ Top social end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
        <!--/ Topbar end --><!-- Header start -->
        
        <header class="header-one" id="header">
            <div class="bg-white">
                <div class="container">
                    <div class="logo-area">
                        <div class="row align-items-center">
                            <div class="logo col-lg-3">
                                <a class="d-block" href="/">
                                    <img alt="cks" loading="lazy" src="images/company_logo/cks_logo.png" /> 
                                </a>
                            </div>
                            <!-- logo end -->
        
                            <div class="col-lg-9 header-right">
                                <ul class="top-info-box">
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Call Us</p>
                                                <p class="info-box-subtitle"><a href="tel:(+62) 813-1629-8671">(+62) 813-1629-8671</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Email Us</p>
                                                <p class="info-box-subtitle"><a href="mailto:office@cksgroup.co.id">office@cksgroup.co.id</a></p>
                                            </div>
                                        </div>
                                    </li>
           
                                </ul>
                            </div><!-- Ul end -->
                        </div><!-- header right end -->
                    </div><!-- logo area end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        
            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-dark p-0"><button aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button"></button>
                                <div class="collapse navbar-collapse" id="navbar-collapse">
                                    <ul class="nav navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/">Home </a> 
                                        </li>
                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/company">Company </a>
                                            <ul class="dropdown-menu" role="menu">
                                                {{-- <li><a href="/about">About Us</a></li>
                                                <li><a href="/team">Our People</a></li> --}}
                                            </ul>
                                            </li>
                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Projects </a>
                                            <ul class="dropdown-menu" role="menu">
                                                {{-- <li><a href="projects.html">Reserved 1</a></li>
                                                <li><a href="projects-single.html">Reserved 2</a></li> --}}
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Services </a>
                                        <ul class="dropdown-menu" role="menu">
                                            {{-- <li><a href="services.html">Reserved 1</a></li>
                                            <li><a href="service-single.html">Reserved 2</a></li> --}}
                                        </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/loginpage">Login</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div><!--/ Col end -->
                    <!--/ Row end -->
                
                        <div class="nav-search"></div>
                        <!-- Search end -->
                
                        <div class="search-block" style="display: none;">
                            <label class="w-100 mb-0" for="search-field">
                                <input class="form-control" id="search-field" placeholder="Type what you want and enter" type="text" /> 
                            </label> 
                            <span class="search-close">&times;</span>
                        </div>
                </div><!-- Site search end -->
            </div><!--/ Container end -->
        </header><!--/ Navigation end -->
        <!--/ Header end -->
   
        
        {{-- content --}}
            @yield('content')
        {{-- endcontent --}}
       
        {{-- footer --}}
        @include('compro.footer')
        {{-- endfooter --}}

        @stack('scripts')    
        <!-- Javascript Files================================================== -->
        <!-- initialize jQuery Library -->
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
        <script src="css/plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="css/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="css/plugins/slick/slick.min.js"></script>
        <script src="css/plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="css/plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="css/plugins/shuffle/shuffle.min.js" defer></script>
        <!-- Template custom -->
        <script src="js/script.js"></script>
  </body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>
