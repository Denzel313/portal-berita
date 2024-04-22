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
        <!-- About US Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{ asset('storage/'.$posts->image) }}" alt="">
                            </div>
                            <div class="heading-news mb-30 pt-30">
                                <h3>{{ $posts->title }}</h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25">{{ $posts->news_content }}</p>
                            </div>
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <li><a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('style/assets/img/news/icon-fb.png') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('style/assets/img/news/icon-tw.png') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('style/assets/img/news/icon-yo.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- From -->
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button button-contactForm boxed-btn boxed-btn2">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="{{ asset('style/assets/img/news/news_card.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
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
                                        <a href="index.html"><img src="{{ asset('style/assets/img/logo/logo2_footer.png') }}" alt=""></a>
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
                                @foreach ($most_popular as $popular)
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="{{ asset('storage/'.$popular->image) }}" alt="" width="100">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="details.html">{{ $popular->title }}</a></h4>
                                        <p>{{ $popular->writer->username }} | {{ $popular->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="banner">
                                    <img src="{{ asset('style/assets/img/gallery/body_card4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom aera -->
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

    <!-- JS here -->

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
