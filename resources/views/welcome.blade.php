@extends('layouts.front')
@section('content')
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
                        @foreach ($categories as $item)
                            @if ($loop->first)
                                <button class="active" data-filter=".{{ $item->slug }}">{{ $item->nama }}</button>
                            @else
                            <button class="" data-filter=".{{ $item->slug }}">{{ $item->nama }}</button>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">
                @foreach ($movies_per_category as $key => $item)
                    @foreach ($item as $movie)
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer {{ $key }}">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="{{ route('movie.detail', $movie['id']) }}"><img src="{{ $movie['poster_path'] == NULL ? 'https://upload.wikimedia.org/wikipedia/commons/f/fc/No_picture_available.png' : "https://image.tmdb.org/t/p/w500/" . $movie['poster_path'] }}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="{{ route('movie.detail', $movie['id']) }}">{{ $movie['original_title'] }}</a></h5>
                                        <span class="date">{{ \Carbon\Carbon::parse($movie['release_date'])->format('Y') }}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> {{ $movie['vote_average'] }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
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
@endsection
