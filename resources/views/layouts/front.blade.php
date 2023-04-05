<!doctype html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <meta name="description" content="{{ env('APP_NAME') }} - Test Coding - Muhamad Ahmadin">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_theme') }}/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/odometer.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/aos.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/slick.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/default.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/style.css">
        <link rel="stylesheet" href="{{ asset('front_theme') }}/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="{{ asset('front_theme') }}/img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="{{ route('welcome') }}">
                                            <img src="{{ asset('front_theme') }}/img/logo/logo.png" alt="Logo" style="width: 200px;">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="{{ route('welcome') }}">Home</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Movie</a>
                                                <ul class="submenu">
                                                    @php
                                                        $categories = App\Models\Kategori::all();
                                                    @endphp
                                                    @foreach ($categories as $item)
                                                        <li><a href="{{ route('movie.per_category', $item->slug) }}">{{ $item->nama }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#easy_access">Easy Access</a></li>
                                            <li><a href="#subscription">Subscription</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-btn"><a href="{{ route('login') }}" class="btn">Sign In</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo">
                                        <a href="{{ route('welcome') }}">
                                            <img src="{{ asset('front_theme') }}/img/logo/logo.png" alt="" title="" style="width: 150px;">
                                        </a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search-end -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->

@yield('content')

   <!-- footer-area -->
   <footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-menu-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('front_theme') }}/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer-menu">
                            <nav>
                                <ul class="navigation">
                                    <li><a href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="{{ route('welcome') }}">Movie</a></li>
                                    <li><a href="{{ route('welcome') }}">Easy Access</a></li>
                                </ul>
                                <div class="footer-search">

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-quick-link-wrap">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="quick-link-list">
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2023. All Rights Reserved By <a href="{{ route('welcome') }}">{{ env('APP_NAME') }}</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="payment-method-img text-center text-md-right">
                        <img src="{{ asset('front_theme') }}/img/images/card_img.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->





<!-- JS here -->
<script src="{{ asset('front_theme') }}/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('front_theme') }}/js/popper.min.js"></script>
<script src="{{ asset('front_theme') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('front_theme') }}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('front_theme') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('front_theme') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('front_theme') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('front_theme') }}/js/jquery.odometer.min.js"></script>
<script src="{{ asset('front_theme') }}/js/jquery.appear.js"></script>
<script src="{{ asset('front_theme') }}/js/slick.min.js"></script>
<script src="{{ asset('front_theme') }}/js/ajax-form.js"></script>
<script src="{{ asset('front_theme') }}/js/wow.min.js"></script>
<script src="{{ asset('front_theme') }}/js/aos.js"></script>
<script src="{{ asset('front_theme') }}/js/plugins.js"></script>
<script src="{{ asset('front_theme') }}/js/main.js"></script>
</body>
</html>
