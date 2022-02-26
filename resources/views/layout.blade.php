<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MediHub - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>SPDPS</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('front/assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('front/style.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inline bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> Panyabungan Kota
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> spdps@gmail.com
                            </li>
                            <li>
                                <a href="https://wa.me/6281377241610" style="color: #fff"><i class="fas fa-phone"></i> 0813 7724 1610</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 social text-right">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed bottom-border dark no-background bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('front/assets/img/logo.png')}}" class="logo logo-display" alt="Logo">
                        <img src="{{asset('front/assets/img/logo.png')}}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown active">
                            <a href="/" >Home</a>
                        </li>
                         <li><a href="diagnostic">Tanya Pakar</a></li>
                         <li><a href="tentang">Tentang</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Akun Saya</a>
                            
                            <ul class="dropdown-menu">
                            @if(Auth::guard('rekammedik')->check())
                                <li><a href="logout">Logout</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="login_pasien">Login</a>
                                </li>
                                <li class="dropdown">
                                    <a href="login">Login Admin</a>
                                </li>
                                <li><a href="registrasi">Register</a></li>
                                @endif
                            </ul>
                        </li>
                       
                      
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   @yield('content')

   

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light active-first">
        
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">SPDPS</a></p>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('front/assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/assets/js/equal-height.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('front/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('front/assets/js/count-to.js')}}"></script>
    <script src="{{asset('front/assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front/assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>

</body>
</html>