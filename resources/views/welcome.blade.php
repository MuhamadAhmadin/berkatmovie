<!doctype html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Movflx - Online Movies & TV Shows Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
                                        <a href="index.html">
                                            <img src="{{ asset('front_theme') }}/img/logo/logo.png" alt="Logo" style="width: 200px;">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#">Home</a>
                                                <ul class="submenu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Movie</a>
                                                <ul class="submenu">
                                                    @php
                                                        $categories = App\Models\Kategori::all();
                                                    @endphp
                                                    @foreach ($categories as $item)
                                                        <li><a href="movie.html">{{ $item->nama }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="tv-show.html">Easy Access</a></li>
                                            <li><a href="pricing.html">Subscription</a></li>
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
                                        <a href="index.html">
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


        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section class="banner-area banner-bg" data-background="{{ asset('front_theme') }}/img/banner/banner_bg01.jpg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">{{ env('APP_NAME') }}</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Unlimited <span>Movie</span>, TVs Shows, & More.</h2>
                                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> 2021</span>
                                            <span><i class="far fa-clock"></i> 128 min</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->

            <!-- services-area -->
            <section class="services-area services-bg" data-background="{{ asset('front_theme') }}/img/bg/services_bg.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="services-img-wrap">
                                <img src="{{ asset('front_theme') }}/img/images/services_img.jpg" alt="">
                                <a href="#" class="download-btn">Download <img src="fonts/download.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-content-wrap">
                                <div class="section-title title-style-two mb-20">
                                    <span class="sub-title">Our Services</span>
                                    <h2 class="title">Download Your Shows Watch Offline.</h2>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem
                                Ipsum available, but the majority have suffered alteration in some injected humour.</p>
                                <div class="services-list">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-television"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Enjoy on Your TV.</h5>
                                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-video-camera"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Watch Everywhere.</h5>
                                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->

            <!-- top-rated-movie -->
            <section class="top-rated-movie tr-movie-bg" data-background="{{ asset('front_theme') }}/img/bg/tr_movies_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">Movie Category</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="tr-movie-menu-active text-center">
                                <button class="active" data-filter="*">TV Shows</button>
                                <button class="" data-filter=".cat-one">Movies</button>
                                <button class="" data-filter=".cat-two">documentary</button>
                                <button class="" data-filter=".cat-three">sports</button>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster01.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster02.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4k</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster03.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster04.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">8K</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster05.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Cooking</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">3D</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster06.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Hikaru</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster07.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Life Quotes</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4K</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('front_theme') }}/img/poster/ucm_poster08.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Beachball</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4K</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- top-rated-movie-end -->

            <!-- live-area -->
            <section class="live-area live-bg fix" data-background="{{ asset('front_theme') }}/img/bg/live_bg.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title title-style-two mb-25">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">Live Movie & TV Shows For Friends & Family</h2>
                            </div>
                            <div class="live-movie-content">
                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod There are many variations of passages of lorem Ipsum
                                available, but the majority have suffered alteration.</p>
                                <div class="live-fact-wrap">
                                    <div class="resolution">
                                        <h2>HD 4K</h2>
                                    </div>
                                    <div class="active-customer">
                                        <h4><span class="odometer" data-count="20"></span>K+</h4>
                                        <p>Active Customer</p>
                                    </div>
                                </div>
                                <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="live-movie-img wow fadeInRight" data-wow-delay=".2s" data-wow-duration="1.8s">
                                <img src="{{ asset('front_theme') }}/img/images/live_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- live-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="{{ asset('front_theme') }}/img/bg/newsletter_bg.jpg">
                <div class="container">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="newsletter-content">
                                    <h4>Trial Start First 30 Days.</h4>
                                    <p>Enter your email to create or restart your membership.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="#" class="newsletter-form">
                                    <input type="email" required placeholder="Enter your email">
                                    <button class="btn">get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('front_theme') }}/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="index.html">Movie</a></li>
                                            <li><a href="index.html">Easy Access</a></li>
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
