<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('style/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('style/assets/img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-mid gray-bg">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('style/assets/img/logo/logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{ asset('style/assets/img/gallery/header_card.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="{{ asset('style/assets/img/logo/logo.png') }}" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">about</a></li>
                                            <li><a href="{{ route('dashboard') }}">Category</a></li>
                                            <li><a href="{{ route('blog') }}">Blog</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="header-right f-right d-none d-lg-block">
                                    <!-- Heder social -->
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <!-- Search Nav -->
                                    <div class="nav-search search-switch">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        {{-- @foreach ($posts as $post) --}}
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="card-img rounded-0" src="{{ asset('storage/'.$posts->image) }}" alt="">
                            </div>
                            <div class="blog_details">
                                <h2>{{ $posts->title }}</h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> {{ $count }} Comments</a></li>
                                </ul>
                                <p class="excert">
                                    {{ Str::words($posts->news_content, 100, '.') }}
                                </p>
                                <p>
                                    {{ Str::words($posts->news_content, 100, '.') }}
                                </p>
                                <div class="quote-wrapper">
                                    <div class="quotes">
                                        {{ Str::words($posts->news_content, 100, '.') }}
                                    </div>
                                </div>
                                <p>
                                    {{ Str::words($posts->news_content, 100, '.') }}
                                </p>
                                <p>
                                    {{ Str::words($posts->news_content, 100, '.') }}
                                </p>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">
                                <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                                    people like this</p>
                                <div class="col-sm-4 text-center my-2 my-sm-0">
                                    <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                                </div>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="media align-items-center">
                                <img src="{{ asset('style/assets/img/blog/author.png') }}" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h4>{{ $posts->writer->username }}</h4>
                                    </a>
                                    <p>{{ Str::words($posts->news_content, 20, '.') }}</p>
                                </div>
                            </div>
                        </div>
                        @if($count > 0)
                        <div class="comments-area">
                            <h4>{{ $count }} Comments</h4>
                            @foreach ($comments as $comment)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{ asset('style/assets/img/comment/comment_1.png') }}" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                {{ $comment->comments_content }}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">{{ $comment->commentator->username }}</a>
                                                    </h5>
                                                    <p class="date" {{ $comment->created_at }}> </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form class="form-contact comment_form" action="{{ route('store.comment') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                            @error('comment')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" type="text" placeholder="Name" value="{{ $posts->writer->username }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Category</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Resaurant food</p>
                                            <p>(37)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Travel news</p>
                                            <p>(10)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Modern technology</p>
                                            <p>(03)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Product</p>
                                            <p>(11)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Inspiration</p>
                                            <p>(21)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Health Care</p>
                                            <p>(21)</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">project</a>
                                    </li>
                                    <li>
                                        <a href="#">love</a>
                                    </li>
                                    <li>
                                        <a href="#">technology</a>
                                    </li>
                                    <li>
                                        <a href="#">travel</a>
                                    </li>
                                    <li>
                                        <a href="#">restaurant</a>
                                    </li>
                                    <li>
                                        <a href="#">life style</a>
                                    </li>
                                    <li>
                                        <a href="#">design</a>
                                    </li>
                                    <li>
                                        <a href="#">illustration</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Blog Area end =================-->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-main footer-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Lorem ipsum dolor sit amet, nsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            <p class="info2">198 West 21th Street, Suite 721 New York,NY 10010</p>
                                            <p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Popular post</h4>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="assets/img/gallery/footer_post1.png" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="details.html">Scarlett’s disappointment at latest accolade</a></h4>
                                        <p>Jhon | 2 hours ago</p>
                                    </div>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="assets/img/gallery/footer_post2.png" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="details.html">Scarlett’s disappointment at latest accolade</a></h4>
                                        <p>Jhon | 2 hours ago</p>
                                    </div>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="assets/img/gallery/footer_post3.png" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="details.html">Scarlett’s disappointment at latest accolade</a></h4>
                                        <p>Jhon | 2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="banner">
                                    <img src="assets/img/gallery/body_card4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom aera -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());

                                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Search model Begin -->
    <div class="search-model-box">
        <div class="d-flex align-items-center h-100 justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- All JS Custom Plugins Link Here here -->

    <script src="{{ asset('style/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('style/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('style/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('style/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('style/assets/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('style/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('style/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('style/assets/js/contact.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

</body>
</html>
