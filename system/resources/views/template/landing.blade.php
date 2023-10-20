<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Landing</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/landing/html') }}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/landing/html') }}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ url('public/landing/html') }}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{ url('public/landing/html') }}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ url('public/landing/html') }}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ url('public/landing/html') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('public/landing/html') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.html"><img
                            src="{{ url('public/landing/html') }}/images/logo.png"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </nav>
        </div>
        <!--banner section start -->
        <div class="banner_section layout_padding">
            <div class="container-fluid">
                <section class="slide-wrapper">
                    <div class="container-fluid">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <h1 class="banner_taital">Penyewaan Tenda</h1>
                                        <p class="banner_text">Tenda yang tersedia dengan berbagai maacam warna</p>
                                        <div class="btn_main">
                                            <div class="number_text">01</div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <h1 class="banner_taital">Penyewaan Perhiasan</h1>
                                            <p class="banner_text">Tersedia 10 tema</p>
                                            <div class="number_text">02</div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <h1 class="banner_taital">Penyewaan Alat Komsumsi</h1>
                                            <p class="banner_text">Alat Komsumsi tersedia dengan jumlah yang banyak</p>
                                            <div class="number_text">03</div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <h1 class="banner_taital">Penyewaan Baju Pengantin</h1>
                                            <p class="banner_text">Kebaya dan Toxedo tersedia dengan berbagai warna dan
                                                ukuran</p>
                                            <div class="btn_main">
                                                <div class="number_text">04</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </section>
            </div>
        </div>
        <!--banner section end -->
    </div>
    <!--header section end -->
    <!--about section start -->
    <div class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 padding_0">
                    <div class="abiut_images_main">
                        <div><img src="{{ url('public/landing/html') }}/images/img-1.png" class="image_1"></div>
                        <div><img src="{{ url('public/landing/html') }}/images/img-2.png" class="image_2"></div>
                        <div class="main"><img src="{{ url('public/landing/html') }}/images/img-3.png"
                                class="image_3"></div>
                    </div>
                </div>
                <div class="col-lg-6 padding_0">
                    @foreach ($list_AboutUs as $AboutUs)
                        <div class="about_taital_main">
                            <h1 class="about_taital">About</h1>
                            <p class="about_text">{{ $AboutUs->judul }}</p>
                            <p class="about_text">{{ $AboutUs->isi }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--about section end -->
    <!-- marriage section start -->
    <div class="marriage_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 padding_left_0">
                    <div class="marriage_img"><img src="{{ url('public/landing/html') }}/images/marriage-img.png">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="marriage_taital_main">
                       @foreach ($list_produk as $produk)
                        <h3 class="marriage_taital">{{ $produk->nama_produk }}</h3>
                        <div class="marriage_section_2">
                                <div class="marriage_taital_left">
                                    <div class="car_box">
                                        <img src="{{ url('public/landing/html') }}/images/balls-img.png"
                                            class="car_image">
                                    </div>
                                </div>
                                <div class="marriage_taital_right">
                                    <p class="long_text">It is a long established fact that a reader will be distracted
                                        by
                                        the readable content of a page </p>
                                </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
    <!-- marriage section end -->
    <!-- blog section start -->
    <div class="blog_section layout_padding">
        <div class="container">
            <h1 class="blog_taital">Artikel</h1>
            <p class="blog_text">Artikel ini berisikan saran dari pelanggan </p>
            <div class="blog_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="date_text">06<br>Feb</h6>
                        <div class="image_4"><img src="{{ url('public/landing/html') }}/images/img-4.png"></div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="liya_text">Artikel</h4>
                        <p class="ipsum_text">Perusahaan ini merupakan perusahaan yang bergerak di bidan perhiasaan pernikahan</p>
                        <div class="follow_btn_main">
                            <div class="like_bt"><a href="#">Like</a></div>
                            <div class="comment_bt active"><a href="#">Comment</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="jonas_box">
                            <h4 class="jonas_text">Galeri</h4>
                            <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            <div class="follow_btn_main">
                                <div class="like_bt"><a href="#">Like</a></div>
                                <div class="comment_bt active"><a href="#">Comment</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_5"><img src="{{ url('public/landing/html') }}/images/img-4.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->
    <!-- contact section start -->
    <!-- contact section end -->
    <!-- news section start -->

    <!-- news section end -->
    <!-- footer section start -->
    <div class="footer_section">
        <div class="container">
            <div class="social_icon">
                <a class="padding_10" href="#"><img
                        src="{{ url('public/landing/html') }}/images/fb-icon.png"></a>
                <a class="padding_10" href="#"><img
                        src="{{ url('public/landing/html') }}/images/twitter-icon.png"></a>
                <a class="padding_10" href="#"><img
                        src="{{ url('public/landing/html') }}/images/linkedin-icon.png"></a>
                <a class="padding_10" href="#"><img
                        src="{{ url('public/landing/html') }}/images/youtub-icon.png"></a>
            </div>
            <div class="location_main">
                <div class="location_text"><img src="{{ url('public/landing/html') }}/images/map-icon.png"><span
                        class="padding10"><a href="#">Gb road 123 london Uk </a></span></div>
                <div class="location_text center"><img
                        src="{{ url('public/landing/html') }}/images/call-icon.png"><span class="padding10"><a
                            href="#">Call : (+01) 123456789012</a></span></div>
                <div class="location_text right"><img
                        src="{{ url('public/landing/html') }}/images/mail-icon.png"><span class="padding10"><a
                            href="#">demo@gmail.com</a></span></div>
            </div>
            <div class="Enter_mail_main">
                <input type="text" class="Enter_text" placeholder="Enter Your Name" name="Enter Your Name">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2020 All Rights Reserved.<a href="https://html.design"> Free html
                    Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ url('public/landing/html') }}/js/jquery.min.js"></script>
    <script src="{{ url('public/landing/html') }}/js/popper.min.js"></script>
    <script src="{{ url('public/landing/html') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/landing/html') }}/js/jquery-3.0.0.min.js"></script>
    <script src="{{ url('public/landing/html') }}/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="{{ url('public/landing/html') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ url('public/landing/html') }}/js/custom.js"></script>
    <!-- javascript -->
    <script src="{{ url('public/landing/html') }}/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
