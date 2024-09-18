@extends('user.layouts.app')

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg py-5" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h3 class="title">Daftar Mentor</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Daftar Mentor</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
        <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- instructor-area -->
<section class="instructor__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="assets/img/instructor/instructor01.png" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Mark Jukarberg</a></h2>
                        <span class="designation">UX Design Lead</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor02.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Olivia Mia</a></h2>
                        <span class="designation">Web Design</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor03.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Sophia Ava</a></h2>
                        <span class="designation">Digital Marketing</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor04.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">William Hope</a></h2>
                        <span class="designation">Web Development</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor05.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Ronald S. Staton</a></h2>
                        <span class="designation">Web Design</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor06.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Dennis L. Turner</a></h2>
                        <span class="designation">UX Design Lead</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor07.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Timothy S. Reed</a></h2>
                        <span class="designation">Digital Marketing</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor08.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Barbara D. Rice</a></h2>
                        <span class="designation">Web Development</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__thumb">
                        <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor09.png') }}" alt="img"></a>
                    </div>
                    <div class="instructor__content">
                        <h2 class="title"><a href="instructor-datails.html">Sandy J. Rankin</a></h2>
                        <span class="designation">Web Development</span>
                        <p class="avg-rating">
                            <i class="fas fa-star"></i>
                            (4.8 Ratings)
                        </p>
                        <div class="instructor__social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instructor-area-end -->

@endsection
