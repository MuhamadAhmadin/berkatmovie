@extends('layouts.front')
@section('content')
<!-- main-area -->
<main>

    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="{{ asset('front_theme') }}/img/bg/movie_details_bg.jpg">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <img src="{{ $movie['poster_path'] == NULL ? 'https://upload.wikimedia.org/wikipedia/commons/f/fc/No_picture_available.png' : "https://image.tmdb.org/t/p/w500/" . $movie['poster_path'] }}" alt="" style="width: 100%;">
                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><img src="img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h5>{{ $movie['tagline'] }}</h5>
                        <h2>{{ $movie['original_title'] }}</h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="quality">
                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    @foreach ($movie['genres'] as $genre)
                                        <a href="#">{{ $genre['name'] }},</a>
                                    @endforeach
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($movie['release_date'])->format('Y') }}</span>
                                    <span><i class="far fa-clock"></i> {{ $movie['runtime'] }} min</span>
                                </li>
                            </ul>
                        </div>
                        <p>{{ $movie['overview'] }}</p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                <li class="streaming">
                                    <h6>Prime Video</h6>
                                    <span>Streaming Channels</span>
                                </li>
                                <li class="watch"><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="movie-details-btn">
                    <a href="" class="download-btn" >Download <img src="fonts/download.svg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- tv-series-area -->
    <section class="tv-series-area tv-series-bg" data-background="{{ asset('front_theme') }}/img/bg/tv_series_bg02.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Similar Movies</span>
                        <h2 class="title">Movies are similar to {{ $movie['original_title'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($similar_movies as $movie)
                    @if ($movie['poster_path'] == null)
                        @php
                            $movie['poster_path'] = "https://upload.wikimedia.org/wikipedia/commons/f/fc/No_picture_available.png";
                        @endphp
                    @else
                        @php
                            $movie['poster_path'] = "https://image.tmdb.org/t/p/w500/". $movie['poster_path'];
                        @endphp
                    @endif
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{ route('movie.detail', $movie['id']) }}"><img src="{{ $movie['poster_path'] }}" style="width: 100%;" alt=""></a>
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
            </div>
        </div>
    </section>
    <!-- tv-series-area-end -->

</main>
<!-- main-area-end -->
@endsection
