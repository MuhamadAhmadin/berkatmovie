@extends('layouts.front')
@section('content')
    <!-- main-area -->
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('front_theme') }}/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Category <span>{{ $category->nama }}</span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Movie</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $category->nama }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- movie-area -->
        <section class="movie-area movie-bg" data-background="{{ asset('front_theme') }}/img/bg/movie_bg.jpg">
            <div class="container">
                <div class="row align-items-end mb-60">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-left">
                            <span class="sub-title">ONLINE STREAMING</span>
                            <h2 class="title">{{ $category->nama }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="movie-page-meta">
                        </div>
                    </div>
                </div>
                <div class="row tr-movie-active">
                    @if ($movies_per_category)

                        @foreach ($movies_per_category as $movie)
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer">
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
                    @else
                        <div class="col-xl-12 col-lg-2 col-sm-12 text-center grid-item grid-sizer">
                            <h4>Tidak ada film dengan kategori: {{ $category->nama }}</h4>

                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">
                        @if ($movies_per_category)
                            <div class="pagination-wrap mt-30">
                                <nav>
                                    <ul>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <li class="{{ $page == $i ? 'active' : '' }}"><a href="?page={{ $i }}">{{ $i }}</a></li>
                                        @endfor
                                    </ul>
                                </nav>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- movie-area-end -->

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
    <!-- main-area-end -->
@endsection
