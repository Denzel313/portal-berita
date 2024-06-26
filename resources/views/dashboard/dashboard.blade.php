@extends('layout.main')

@section('content')

<div class="trending-area fix pt-25 gray-bg">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="slider-active">
                        <!-- Single -->
                        @foreach ($most_popular as $popular)
                        <div class="single-slider">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('storage/'.$popular->image) }}" alt="">
                                    <div class="trend-top-cap">
                                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                        <h2><a href="{{ route('show.blog',['id' => $popular->id]) }}" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{ Str::words($popular->title, 7, '.') }}</a></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by {{ $popular->writer->username }} - {{ $popular->created_at->isoFormat('D MMMM Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Right content -->
                <div class="col-lg-4">
                    <!-- Trending Top -->
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('style/assets/img/trending/trending_top3.jpg') }}" alt="">
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgb">FASHION</span>
                                        <h2><a href="latest_news.html">Secretart for Economic Air
                                                plane that looks like</a></h2>
                                        <p>by Alice cloe - Jun 19, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('style/assets/img/trending/trending_top4.jpg') }}" alt="">
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgg">TECH </span>
                                        <h2><a href="latest_news.html">Secretart for Economic Air plane that looks like</a></h2>
                                        <p>by Alice cloe - Jun 19, 2020</p>
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

<section class="whats-news-area pt-50 pb-20 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>Whats New</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="whats-news-single mb-40 mb-40">
                                                @foreach ($posts as $post)
                                                <img src="{{ asset('storage/'.$post->image) }}" alt="" width="300">
                                                {{-- <div class="whates-img">
                                                </div> --}}
                                                <div class="whates-caption">
                                                    <h4><a href="{{ route('post',['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                                                    <span>Oleh {{ $post->writer->username }} - {{ $post->created_at->isoFormat('dddd, D MMMM Y') }}</span>
                                                    <p>{!! Str::words($post->news_content, 15, '.') !!}</p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                @foreach ($most_popular as $popular)
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="{{ asset('storage/'.$popular->image) }}" alt="" width="100">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">{{ $popular->title }}</span>
                                                            <h4><a href="{{ route('post',['id' => $post->id]) }}">{{ Str::words($popular->news_content, 6, '.') }}</a></h4>
                                                            <p>{{ $popular->created_at->isoFormat('dddd, D MMMM Y') }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Most Recent Area -->
                <div class="most-recent-area">
                    <!-- Section Tittle -->
                    <div class="small-tittle mb-20">
                        <h4>Most Recent</h4>
                    </div>
                    <!-- Details -->
                    <div class="most-recent mb-40">
                        <div class="most-recent-img">
                            <img src="{{ asset('style/assets/img/gallery/most_recent.png') }}" alt="">
                            <div class="most-recent-cap">
                                <span class="bgbeg">Vogue</span>
                                <h4><a href="latest_news.html">What to Wear: 9+ Cute Work <br>
                                        Outfits to Wear This.</a></h4>
                                <p>Jhon | 2 hours ago</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="most-recent-single">
                        <div class="most-recent-images">
                            <img src="{{ asset('style/assets/img/gallery/most_recent1.png') }}" alt="">
                        </div>
                        <div class="most-recent-capt">
                            <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                            <p>Jhon | 2 hours ago</p>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="most-recent-single">
                        <div class="most-recent-images">
                            <img src="{{ asset('style/assets/img/gallery/most_recent2.png') }}" alt="">
                        </div>
                        <div class="most-recent-capt">
                            <h4><a href="latest_news.html">Most Beautiful Things to Do in Sidney with Your BF</a></h4>
                            <p>Jhon | 3 hours ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Whats New End -->
<!--   Weekly2-News start -->
<div class="weekly2-news-area pt-50 pb-30 gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <div class="row">
                <!-- Banner -->
                <div class="col-lg-3">
                    <div class="home-banner2 d-none d-lg-block">
                        <img src="{{ asset('style/assets/img/gallery/body_card2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="slider-wrapper">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="small-tittle mb-30">
                                    <h4>Most Popular</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly2-news-active d-flex">
                                    @foreach ($most_popular as $popular)
                                    <!-- Single -->
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="{{ asset('storage/'.$popular->image) }}" alt="">
                                            {{-- <img src="{{ url('storage/app/image/'.$post->image) }}" alt=""> --}}
                                        </div>
                                        <div class="weekly2-caption">
                                            <h4><a href="#">{{ $popular->title }}</a></h4>
                                            <p>{{ $popular->writer->username }} | {{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Weekly-News -->
<!--  Recent Articles start -->
<div class="recent-articles pt-80 pb-80">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Trending News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="{{ asset('style/assets/img/gallery/tranding1.png') }}" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="#">
                                        <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                    </a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>

                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="{{ asset('style/assets/img/gallery/tranding2.png') }}" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="{{ asset('style/assets/img/gallery/tranding1.png') }}" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="latest_news.html">
                                        <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                    </a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="{{ asset('style/assets/img/gallery/tranding2.png') }}" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Recent Articles End -->
<!-- Start Video Area -->
<div class="youtube-area video-padding d-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-items-active">
                    <div class="video-items text-center">
                        <video controls>
                            <source src="{{ asset('style/assets/video/news2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="video-items text-center">
                        <video controls>
                            <source src="{{ asset('style/assets/video/news1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="video-items text-center">
                        <video controls>
                            <source src="{{ asset('style/assets/video/news3.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="video-items text-center">
                        <video controls>
                            <source src="{{ asset('style/assets/video/news1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="video-items text-center">
                        <video controls>
                            <source src="{{ asset('style/assets/video/news3.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-info">
            <div class="row">
                <div class="col-12">
                    <div class="testmonial-nav text-center">
                        <div class="single-video">
                            <video controls>
                                <source src="{{ asset('style/assets/video/news2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-intro">
                                <h4>Old Spondon News - 2020 </h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <video controls>
                                <source src="{{ asset('style/assets/video/news1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-intro">
                                <h4>Banglades News Video </h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <video controls>
                                <source src="{{ asset('style/assets/video/news3.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-intro">
                                <h4>Latest Video - 2020 </h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <video controls>
                                <source src="{{ asset('style/assets/video/news1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-intro">
                                <h4>Spondon News -2019 </h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <video controls>
                                <source src="{{ asset('style/assets/video/news3.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-intro">
                                <h4>Latest Video - 2020</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Start Video area-->
<!--   Weekly3-News start -->
<div class="weekly3-news-area pt-80 pb-130">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly3-news-active dot-style d-flex">
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="{{ asset('style/assets/img/gallery/weekly2News1.png') }}" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="{{ asset('style/assets/img/gallery/weekly2News2.png') }}" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="{{ asset('style/assets/img/gallery/weekly2News3.png') }}" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="{{ asset('style/assets/img/gallery/weekly2News4.png') }}" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="{{ asset('style/assets/img/gallery/weekly2News2.png') }}" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                            <p>19 Jan 2020</p>
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
@endsection
