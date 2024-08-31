<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home - Tabuk Haraj</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/ass/img/favicon.png" rel="icon">
    <link href="assets/ass/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/ass/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="assets/ass/css/font-awesome.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="assets/ass/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="assets/ass/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/ass/css/style.css" rel="stylesheet">
    <link href="assets/ass/css/skin-default.css" rel="stylesheet"> 

   
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/ass/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/ass/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/ass/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/ass/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/ass/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Main CSS File -->
    <link href="assets/ass/css/main.css" rel="stylesheet">
    <style>
        .hero-video {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }

        .hero-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 767px) {
            .hero-video-desktop {
                display: none;
            }
        }

        @media (min-width: 768px) {
            .hero-video-mobile {
                display: none;
            }
        }

        .stats-card {
            text-align: center;
            padding: 20px;
            border: 1px solid #f1f1f1;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .stats-card img {
            width: 50px;
            height: 50px;
        }

        .stats-card h3 {
            margin-top: 15px;
        }

        .stats-card p {
            color: gray;
        }

        .contact-section {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #f1f1f1;
            border-radius: 10px;
        }

        .call-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, #ff512f, #f09819);
            border-radius: 50%;
            color: white;
            font-size: 2.5em;
        }

        .contact-button {
            display: flex;
            align-items: center;
            background-color: #000;
            color: #fff;
            border-radius: 25px;
            padding: 1.5px 15px 1.5px 1.5px;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            text-decoration: none;
            position: fixed;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
        }

        @media (min-width: 992px) {
            .contact-button {
                visibility: hidden;
            }
        }

        /* social icons */
        .social-share {
            display: flex;
            align-items: center;
        }

        .social-share span {
            margin-right: 10px;
        }

        .social-icons a {
            color: white;
            margin: 0 5px;
            font-size: 24px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .social-icons .pinterest {
            background-color: #bd081c;
        }

        .social-icons .linkedin {
            background-color: #0077b5;
        }

        .social-icons .tumblr {
            background-color: #35465c;
        }

        .social-icons .twitter {
            background-color: #1da1f2;
        }

        .social-icons .facebook {
            background-color: #1877f2;
        }

        .social-icons .reddit {
            background-color: #ff4500;
        }

        .social-icons .instagram {
            background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);
        }
        .social-icons .snapchat {
            color: #6c757d;
            background: #fffc00;
        }
        /* slider */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* video section */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .business-image {
            height: 500px;
            object-fit: cover;
            width: 100%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .section-title p {
            font-size: 1.25rem;
            color: #6c757d;
        }

        .keywords {
            list-style-position: ;
            padding-right: 0;
            text-align: right;
            list-style: none;
        }

        .keywords li {
            margin-bottom: 10px;
        }

        .content {
            text-align: right;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="d-flex align-items-center">
                <img src="{{ asset('assets/ass/img/logo.png') }}" style="width: 100px; padding: 8px 0" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                </ul>
                <i class="mobile-nav-toggle d-none bi bi-list">يتم شراء الأثاث المستعمل من تبوك</i>
                <p style="color: #feb900" class="d-lg-none">يتم شراء الأثاث المستعمل من تبوك</p>
            </nav>

        </div>
    </header>

    <main class="main">

        <section class="hero">
            <div class="container">
                <div class="row">
                    <!-- Video for desktop -->
                    <div class="col-12 hero-video hero-video-desktop">
                        <iframe src="{{ asset('assets/ass/video/desktop.mp4') }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- Video for mobile -->
                    <div class="col-12 hero-video hero-video-mobile">
                        <iframe src="{{ asset('assets/ass/video/moble.mp4') }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->
        <section>
            <div class="container">
                <div class="section-title">
                    <h2>شركة شراء أثاث مستعمل بتبوك </h2>
                    {{-- <p>Explore our latest projects and business activities</p> --}}
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('assets/ass/img/hero-carousel/hero-carousel-1.jpg') }}"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/ass/img/hero-carousel/hero-carousel-2.jpg') }}"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/ass/img/hero-carousel/hero-carousel-3.jpg') }}"
                                alt=""></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="section-title">
                    <h2>اهلا وسهلا بكم فى شركة شراء الاثاث المستعمل بتبوك ، شركة متخصصة لبيع وشراء الأثاث المستعمل حيث
                        تعد محلات شراء اثاث مستعمل بتبوك ، من أهم وأفضل محلاث ومعارض شراء وبيع الاثاث المنزلى والمكتبى
                        وشراء وبيع الاجهزة الكهربائية ،وشراء وبيع المكيفات المستعملة والخربانة وشراء وبيع الكنب والمجالس
                        المستعملة الموجودة داخل تبوك ، كما تقدة شركة شراء الاثاث المستعمل بتبوك افضل اسعار شراء اثاث
                        مستعمل بتبوك ، ونقوم بشراء المكيفات المستعملة والخربانة بأعلي الأسعار لاننا افضل شركات شراء
                        الاثاث المستعمل بتبوك فى سوق حقين شراء الاثاث المستعمل داخل تبوك .</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="video-container">
                            <iframe src="{{ asset('assets/ass/video/video-1.mp4') }}" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="video-container">
                            <iframe src="{{ asset('assets/ass/video/video-2.mp4') }}" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <div class="section-title">
                    <h2>خدمات شراء وبيع الأثاث المستعمل في تبوك</h2>
                    <p>يبحث العملاء عن العديد من الكلمات خلال عملية بيع الأثاث المستعمل</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="keywords">
                            <li>شركة شراء الأثاث المستعمل في تبوك</li>
                            <li>شركة شراء أثاث مستعمل بتبوك</li>
                            <li>محلات الأثاث المستعمل بتبوك</li>
                            <li>أرقام الأثاث المستعمل بتبوك</li>
                            <li>محلات شراء الأثاث المستعمل</li>
                            <li>أرقام شراء الأثاث المستعمل داخل تبوك</li>
                            <li>حقين الأثاث المستعمل بتبوك</li>
                            <li>حقين أثاث مستعمل في تبوك</li>
                            <li>أرقام الي يشترون الأثاث المستعمل بتبوك</li>
                            <li>معارض شراء وبيع أثاث مستعمل في تبوك</li>
                            <li>محلات ومعارض الأثاث المستعمل بتبوك</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 content">
                        <p>
                            محلات شراء وبيع الأثاث المستعمل بتبوك هي فروع متعددة وموجودة بكثرة في تبوك تقدم خدمات
                            للمواطنين الذين يريدون أثاث مستعمل بمبلغ بسيط أو للعملاء الذين يريدون اقتناء الأثاث والعفش
                            المستعمل ذات مميزات وتاريخية. تقدم محلات ومعارض الأثاث المستعمل بتبوك تلك الخدمة للعملاء
                            بحيث يمكن التواصل معها أو البحث عنها في محركات البحث بعبارات بحث مثل محلات شراء أثاث مستعمل
                            بتبوك أو معارض شراء وبيع الأثاث المستعمل أو حقين الأثاث المستعمل بتبوك.
                        </p>
                        <p>
                            حراج تبوك أثاث مستعمل يمكن أن يطلب العميل باسم حراج تبوك للأثاث المستعمل لغرف النوم أو حراج
                            تبوك للمجالس أو حراج تبوك للمطابخ أو حراج تبوك للأثاث المستعمل أو حراج تبوك أثاث مستعمل
                            إنستقرام. كل هذه مسميات لشركة أو لخدمة شراء الأثاث المستعمل بتبوك. نسعد بتقديم خدماتنا من
                            خلال تلك المحلات أو محلات بيع وشراء الأثاث المنزلي والمكتبي والمفروشات ومحلات بيع وشراء
                            الأجهزة الكهربائية المستعملة وأيضاً محلات شراء الكنب والمجالس العربية المستعملة والصالونات
                            والمفروشات المستعملة. كما أننا نشتري المكيفات المستعملة والخربانة بأفضل أسعار شراء الأثاث
                            المستعمل بتبوك من خلال حقين شراء أثاث مستعمل داخل تبوك.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <img src="{{ asset('assets/ass/img/b-1.jpg') }}" class="img-fluid business-image" alt="">
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <img src="{{ asset('assets/ass/img/b-2.jpg') }}" class="img-fluid business-image" alt="">
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <img src="{{ asset('assets/ass/img/b-3.jpg') }}" class="img-fluid business-image"
                            alt="">
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <img src="{{ asset('assets/ass/img/b-4.jpg') }}" class="img-fluid business-image"
                            alt="">
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <img src="{{ asset('assets/ass/img/b-5.jpg') }}" class="img-fluid business-image"
                            alt="">
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <img src="{{ asset('assets/ass/img/b-6.jpg') }}" class="img-fluid business-image"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="d-flex justify-content-center align-item-center">
               <h1>OUR BLOG</h1> 
            </div>
            <div class="blog-main-wrapper">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-wrapper-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item mb-26">
                                            <div class="blog-thumb img-full fix">
                                                <a href="blog-details.html">
                                                    <img src="assets/ass/img/blog/img_blog1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h3><a href="blog-details.html">post format audio</a></h3>
                                                <div class="blog-meta">
                                                    <span class="posted-author">by: admin</span>
                                                    <span class="post-date">25 Nov, 2018</span>
                                                </div>
                                                <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                            </div>
                                            <a href="/blog_details">read more <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item mb-26">
                                            <div class="blog-thumb img-full fix">
                                                <a href="blog-details.html">
                                                    <img src="assets/ass/img/blog/img_blog3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h3><a href="blog-details.html">post format image</a></h3>
                                                <div class="blog-meta">
                                                    <span class="posted-author">by: admin</span>
                                                    <span class="post-date">25 Nov, 2018</span>
                                                </div>
                                                <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                            </div>
                                            <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item mb-26">
                                            <div class="blog-thumb img-full fix">
                                                <a href="blog-details.html">
                                                    <img src="assets/ass/img/blog/img_blog4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h3><a href="blog-details.html">post format audio</a></h3>
                                                <div class="blog-meta">
                                                    <span class="posted-author">by: admin</span>
                                                    <span class="post-date">25 Nov, 2018</span>
                                                </div>
                                                <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                            </div>
                                            <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item mb-26">
                                            <div class="blog-thumb img-full fix">
                                                <a href="blog-details.html">
                                                    <img src="assets/ass/img/blog/img_blog1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h3><a href="blog-details.html">post format audio</a></h3>
                                                <div class="blog-meta">
                                                    <span class="posted-author">by: admin</span>
                                                    <span class="post-date">25 Nov, 2018</span>
                                                </div>
                                                <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                            </div>
                                            <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item mb-26">
                                            <div class="blog-thumb img-full fix">
                                                <a href="blog-details.html">
                                                    <img src="assets/ass/img/blog/img_blog3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h3><a href="blog-details.html">post format image</a></h3>
                                                <div class="blog-meta">
                                                    <span class="posted-author">by: admin</span>
                                                    <span class="post-date">25 Nov, 2018</span>
                                                </div>
                                                <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                            </div>
                                            <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item mb-26">
                                            <div class="blog-thumb img-full fix">
                                                <a href="blog-details.html">
                                                    <img src="assets/ass/img/blog/img_blog4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h3><a href="blog-details.html">post format audio</a></h3>
                                                <div class="blog-meta">
                                                    <span class="posted-author">by: admin</span>
                                                    <span class="post-date">25 Nov, 2018</span>
                                                </div>
                                                <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                            </div>
                                            <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- start pagination area -->
                            {{-- <div class="paginatoin-area text-center pt-30 pb-30">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="pagination-box">
                                            <li><a class="Previous" href="#">Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a class="Next" href="#"> Next </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- end pagination area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}" class="d-flex align-items-center">
                        <img src="{{ asset('assets/ass/img/logo.png') }}" style="width: 100px; padding: 8px 0"
                            alt="">
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Tabuk, Saudi Arabia</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+9660501702732</span></p>
                        <p><strong>Email:</strong> <span>rubel786325@gmail.com</span></p>
                    </div>
                    <p style="padding-bottom: 3px">Share this topic:</p>
                    <div class="social-share">
                        <div class="social-icons">
                            {{-- <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a> --}}
                            <a href="https://www.snapchat.com/add/tabukharej" class="snapchat"><i class="fab fa-snapchat"></i></a>
                            <a href="https://www.instagram.com/haraj_tabuk" class="instagram"><i
                                    class="fab fa-instagram"></i></a>
                            {{-- <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="tumblr"><i class="fab fa-tumblr"></i></a>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="reddit"><i class="fab fa-reddit"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Tabuk Haraj</strong> <span>All Rights
                    Reserved</span></p>
                    <p>Developed By <a href="https://www.bestsheba.com.bd" class="text-white font-semibold">Best Sheba</a></p>
        </div>

    </footer>
    <div class="whatsapp-position">
        <a href="https://wa.me/+9660501702732" class="whatsapp">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="wicon">
                <path
                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
        </a>
    </div>
    <div class="contact-button"><a href="tel:+9660501702732" class="fixed-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="wicon">
                <path
                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
        </a>
        <span style="margin-left: 10px">اتصل بنا</span>
    </div>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="assets/ass/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/ass/vendor/aos/aos.js"></script>
    <!-- Main JS File -->
    <script src="assets/ass/js/main.js"></script>

</body>

</html>
