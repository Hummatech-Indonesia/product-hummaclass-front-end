@extends('user.layouts.app')

@section('style')
<style>
    .btn {
        background: #9425FE none repeat scroll 0 0;
    }

    :root {
        --tg-theme-primary: #9425FE;
    }

    .section__title.white-title .sub-title {
        background: var(--tg-common-color-white);
        color: var(--tg-theme-primary);
    }

    .icon h1:hover {
        color: #FFFFFF !important;
        /* Warna putih ketika di-hover */
    }

    /* Default: sebelum di-hover, panah berwarna putih */
    .arrow-btn img {
        filter: brightness(0) invert(1);
        transition: filter 0.3s ease;
    }

    .arrow-btn:hover img {
        filter: brightness(0);
    }

    body {
        transform: scale(0.8);
        transform-origin: 0 0;
        width: 125%;
        height: 125%;
    }

</style>
@endsection

@section('content')
<!-- banner-area -->
<section class="banner-area banner-bg tg-motion-effects" data-background="{{ asset('assets/img/banner/banner_bg.png') }}">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-xl-5 col-lg-6">
                <div class="banner__content">
                    <h3 class="title tg-svg" data-aos="fade-right" data-aos-delay="400">
                        Selamat
                        <span class="position-relative">
                            <span class="svg-icon" id="banner-svg">
                                <!-- SVG langsung di sini -->
                                <svg width="61" height="68" viewBox="0 0 61 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9456 42.4604C12.35 35.8453 15.0985 20.3798 14.8574 11.4385" stroke="#031333" stroke-width="3.07158" stroke-linejoin="round" />
                                    <path d="M27.4487 52.5191C33.5478 49.598 47.4807 42.3448 54.4199 36.7009" stroke="#031333" stroke-width="3.07158" stroke-linejoin="round" />
                                    <path d="M20.1039 44.2553C23.1559 40.986 29.8591 33.2239 32.2559 28.3291" stroke="#031333" stroke-width="3.07158" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565" fill="currentcolor" />
                            </svg>
                            Datang
                        </span>
                        <br>Di Kelas Industri <b>Hummatech</b>
                    </h3>

                    <p data-aos="fade-right" data-aos-delay="600">Meningkatkan skill guru dan siswa dengan program kelas berbasis Industri.</p>
                    <div class="banner__btn-wrap" data-aos="fade-right" data-aos-delay="800">
                        <a href="javascript:void(0)" class="btn arrow-btn">Uji Coba Gratis <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner__images">
                    <img src="{{ asset('assets/img/banner/banner_img.png') }}" alt="img" class="main-img">
                    <div class="shape big-shape" data-aos="fade-up-right" data-aos-delay="600">
                        <img src="{{ asset('assets/img/banner/banner_shape01.png') }}" alt="shape" class="tg-motion-effects1">
                    </div>
                    <img src="{{ asset('assets/img/banner/bg_dots.svg') }}" alt="shape" class="shape bg-dots rotateme">
                    <img src="{{ asset('assets/img/banner/banner_shape02.png') }}" alt="shape" class="shape small-shape tg-motion-effects3">
                    <div class="banner__author">
                        <div class="banner__author-item">
                            <div class="image">
                                <img src="{{ asset('assets/img/banner/banner_author01.png') }}" alt="img">
                            </div>
                            <h6 class="name">Robert Fox</h6>
                        </div>
                        <div class="banner__author-item">
                            <div class="image">
                                <img src="{{ asset('assets/img/banner/banner_author02.png') }}" alt="img">
                            </div>
                            <h6 class="name">Michel Jones</h6>
                        </div>
                        <img src="{{ asset('assets/img/banner/banner_shape02.svg') }}" alt="shape" class="arrow-shape tg-motion-effects3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/img/banner/banner_shape01.svg') }}" alt="shape" class="line-shape" data-aos="fade-right" data-aos-delay="1600">
</section>
<!-- banner-area-end -->

<!-- categories-area -->
<section class="categories-area section-py-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7">
                <div class="section__title text-center mb-40">
                    <span class="sub-title">Kategori Teratas</span>
                    <h2 class="title">Kami Punya Kategori Teratas</h2>
                    <p class="desc">Daftar kategori teratas</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="categories__wrap">
                    <div class="swiper categories-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="categories__item">
                                    <a href="{{ route('courses.courses.index') }}">
                                        <div class="icon">
                                            <h1 style="font-size: 50px;color: #6D6C80">12</h1>
                                        </div>
                                        <span class="name">Graphic Design</span>
                                        {{-- <span class="courses">(22)</span> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="categories__item">
                                    <a href="{{ route('courses.courses.index') }}">
                                        <div class="icon">
                                            <h1 style="font-size: 50px;color: #6D6C80">21</h1>
                                        </div>
                                        <span class="name">Finance</span>
                                        {{-- <span class="courses">(41)</span> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="categories__item">
                                    <a href="{{ route('courses.courses.index') }}">
                                        <div class="icon">
                                            <h1 style="font-size: 50px;color: #6D6C80">11</h1>
                                        </div>
                                        <span class="name">Development</span>
                                        {{-- <span class="courses">(29)</span> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="categories__item">
                                    <a href="{{ route('courses.courses.index') }}">
                                        <div class="icon">
                                            <h1 style="font-size: 50px;color: #6D6C80">4</h1>
                                        </div>
                                        <span class="name">Marketing</span>
                                        {{-- <span class="courses">(31)</span> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="categories__item">
                                    <a href="{{ route('courses.courses.index') }}">
                                        <div class="icon">
                                            <h1 style="font-size: 50px;color: #6D6C80">5</h1>
                                        </div>
                                        <span class="name">Life Style</span>
                                        {{-- <span class="courses">(23)</span> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="categories__item">
                                    <a href="{{ route('courses.courses.index') }}">
                                        <div class="icon">
                                            <h1 style="font-size: 50px;color: #6D6C80">12</h1>
                                        </div>
                                        <span class="name">Management</span>
                                        {{-- <span class="courses">(19)</span> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="categories__item">
                                    <a href="{{ route('courses.courses.index') }}">
                                        <div class="icon">
                                            <h1 style="font-size: 50px;color: #6D6C80">2</h1>
                                        </div>
                                        <span class="name">App Design</span>
                                        {{-- <span class="courses">(18)</span> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categories__nav">
                        <button class="categories-button-prev">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 7L1 7M1 7L7 1M1 7L7 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="categories-button-next">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- categories-area-end -->

<!-- about-area -->
<section class="about-area tg-motion-effects section-py-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="about__images">
                    <img src="{{ asset('assets/img/others/about_img.png') }}" alt="img" class="main-img">
                    <img src="{{ asset('assets/img/others/about_shape.svg') }}" alt="img" class="shape alltuchtopdown">
                    <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="popup-video">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="28" viewBox="0 0 22 28" fill="none">
                            <path d="M0.19043 26.3132V1.69421C0.190288 1.40603 0.245303 1.12259 0.350273 0.870694C0.455242 0.6188 0.606687 0.406797 0.79027 0.254768C0.973854 0.10274 1.1835 0.0157243 1.39936 0.00193865C1.61521 -0.011847 1.83014 0.0480663 2.02378 0.176003L20.4856 12.3292C20.6973 12.4694 20.8754 12.6856 20.9999 12.9535C21.1245 13.2214 21.1904 13.5304 21.1904 13.8456C21.1904 14.1608 21.1245 14.4697 20.9999 14.7376C20.8754 15.0055 20.6973 15.2217 20.4856 15.3619L2.02378 27.824C1.83056 27.9517 1.61615 28.0116 1.40076 27.9981C1.18536 27.9847 0.97607 27.8983 0.792638 27.7472C0.609205 27.596 0.457661 27.385 0.352299 27.1342C0.246938 26.8833 0.191236 26.6008 0.19043 26.3132Z" fill="currentcolor" />
                        </svg>
                    </a>
                    <div class="about__enrolled" data-aos="fade-right" data-aos-delay="200">
                        <p class="title"><span>36K+</span> Enrolled Students</p>
                        <img src="{{ asset('assets/img/others/student_grp.png') }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">Tentang Kami</span>
                        <h2 class="title">
                            Program
                            <span class="position-relative">
                                <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565" fill="currentcolor" />
                                </svg>
                                HummaClass
                            </span>
                            Didesain untuk meningkatkan
                            <br> kemampuan Anda
                        </h2>
                    </div>
                    <p class="desc">Groove’s intuitive shared inbox makes it easy for team members to
                        organize, prioritize and.In this episode of the Smashing Pod we’re talking about Web Platform Baseline.</p>
                    <ul class="about__info-list list-wrap">
                        <li class="about__info-list-item">
                            <i class="flaticon-angle-right"></i>
                            <p class="content">The Most World Class Instructors</p>
                        </li>
                        <li class="about__info-list-item">
                            <i class="flaticon-angle-right"></i>
                            <p class="content">Access Your Class anywhere</p>
                        </li>
                        <li class="about__info-list-item">
                            <i class="flaticon-angle-right"></i>
                            <p class="content">Flexible Course Plan</p>
                        </li>
                    </ul>
                    <div class="tg-button-wrap">
                        <a href="javascript:void(0)" class="btn arrow-btn">Uji Coba Gratis <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- course-area -->
<section class="courses-area section-pt-120 section-pb-90" data-background="{{ asset('assets/img/bg/courses_bg.jpg') }}">
    <div class="container">
        <div class="section__title-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Kelas Kursus Teratas</span>
                        <h2 class="title">Jelajahi Kursus Terbaik Dunia Kami</h2>
                        <p class="desc">Kelas Kursus terbaik kami</p>
                    </div>
                    <div class="courses__nav">

                    </div>

                </div>
                <div class="col-lg-11">
                    <div class="tab-content" id="courseTabContent">
                        <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                            <div class="swiper courses-swiper-active">
                                <div class="swiper-wrapper" id="top-category">
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Development</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$15.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Design</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$19.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('assets/img/courses/course_thumb03.jpg') }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Marketing</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">Learning Digital Marketing on Facebook</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$24.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('assets/img/courses/course_thumb04.jpg') }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Business</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">Financial Analyst Training & Investing Course</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$12.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('assets/img/courses/course_thumb05.jpg') }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Data Science</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">Data Analysis & Visualization Masterclass</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$27.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('assets/img/courses/course_thumb06.jpg') }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Mathematic</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">Master the Fundamentals of Math</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$10.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="courses__nav">
                                <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                                <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- course-area-end -->

<!-- instructor-area -->
<section class="instructor__area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4">
                <div class="instructor__content-wrap">
                    <div class="section__title mb-15">
                        <span class="sub-title">Perkenalan Mentor</span>
                        <h2 class="title">Our Top Class & Expert Instructors in One Place</h2>
                    </div>
                    <p>when an unknown printer took a galley of type and scrambled makespecimen book has survived not only five centuries</p>
                    <div class="tg-button-wrap">
                        <a href="instructors.html" class="btn arrow-btn">Lihat Semua Mentor <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="instructor__item-wrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="instructor__item">
                                <div class="instructor__thumb">
                                    <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor01.png') }}" alt="img"></a>
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
                        <div class="col-sm-6">
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
                        <div class="col-sm-6">
                            <div class="instructor__item">
                                <div class="instructor__thumb">
                                    <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor03.png') }}" alt="img"></a>
                                </div>
                                <div class="instructor__content">
                                    <h2 class="title"><a href="instructor-datails.html">William Hope</a></h2>
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
                        <div class="col-sm-6">
                            <div class="instructor__item">
                                <div class="instructor__thumb">
                                    <a href="instructor-datails.html"><img src="{{ asset('assets/img/instructor/instructor04.png') }}" alt="img"></a>
                                </div>
                                <div class="instructor__content">
                                    <h2 class="title"><a href="instructor-datails.html">Sophia Ava</a></h2>
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
            </div>
        </div>
    </div>
</section>
<!-- instructor-area-end -->

<!-- fact-area -->
<section class="fact__area">
    <div class="container">
        <div class="fact__inner-wrap" style="background: linear-gradient(to right, #9C40F7, #7209DB);">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="fact__item">
                        <h2 class="count"><span class="odometer" data-count="45"></span>K+</h2>
                        <p>Pelajar Aktif</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="fact__item">
                        <h2 class="count"><span class="odometer" data-count="89"></span>+</h2>
                        <p>Mata Kuliah Fakultas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="fact__item">
                        <h2 class="count"><span class="odometer" data-count="156"></span>K</h2>
                        <p>Best Professors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="fact__item">
                        <h2 class="count"><span class="odometer" data-count="42"></span>K</h2>
                        <p>Penghargaan Dicapai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fact-area-end -->

<!-- faq-area -->
<section class="faq__area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq__img-wrap tg-svg">
                    <div class="faq__round-text">
                        <div class="curved-circle" style="position: absolute; height: 258.115px;"><span class="char1" style="position: absolute; left: 50%; margin-left: -0.4em; transform: rotate(-83.0204deg); transform-origin: center 14em;">*</span><span class="char2" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(-79.9802deg); transform-origin: center 14em;">&nbsp;</span><span class="char3" style="position: absolute; left: 50%; margin-left: -0.425em; transform: rotate(-76.8231deg); transform-origin: center 14em;">E</span><span class="char4" style="position: absolute; left: 50%; margin-left: -0.475em; transform: rotate(-72.6136deg); transform-origin: center 14em;">d</span><span class="char5" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(-68.0534deg); transform-origin: center 14em;">u</span><span class="char6" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(-63.4931deg); transform-origin: center 14em;">c</span><span class="char7" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(-59.1667deg); transform-origin: center 14em;">a</span><span class="char8" style="position: absolute; left: 50%; margin-left: -0.45em; transform: rotate(-54.9572deg); transform-origin: center 14em;">t</span><span class="char9" style="position: absolute; left: 50%; margin-left: -0.275em; transform: rotate(-51.5662deg); transform-origin: center 14em;">i</span><span class="char10" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(-47.9414deg); transform-origin: center 14em;">o</span><span class="char11" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(-43.2642deg); transform-origin: center 14em;">n</span><span class="char12" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(-39.7563deg); transform-origin: center 14em;">&nbsp;</span><span class="char13" style="position: absolute; left: 50%; margin-left: -0.4em; transform: rotate(-36.7161deg); transform-origin: center 14em;">*</span><span class="char14" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(-33.6759deg); transform-origin: center 14em;">&nbsp;</span><span class="char15" style="position: absolute; left: 50%; margin-left: -0.45em; transform: rotate(-30.4018deg); transform-origin: center 14em;">S</span><span class="char16" style="position: absolute; left: 50%; margin-left: -0.475em; transform: rotate(-26.0754deg); transform-origin: center 14em;">y</span><span class="char17" style="position: absolute; left: 50%; margin-left: -0.45em; transform: rotate(-21.749deg); transform-origin: center 14em;">s</span><span class="char18" style="position: absolute; left: 50%; margin-left: -0.45em; transform: rotate(-17.5395deg); transform-origin: center 14em;">t</span><span class="char19" style="position: absolute; left: 50%; margin-left: -0.425em; transform: rotate(-13.447deg); transform-origin: center 14em;">e</span><span class="char20" style="position: absolute; left: 50%; margin-left: -0.575em; transform: rotate(-8.76976deg); transform-origin: center 14em;">m</span><span class="char21" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(-4.91107deg); transform-origin: center 14em;">&nbsp;</span><span class="char22" style="position: absolute; left: 50%; margin-left: -0.4em; transform: rotate(-1.87088deg); transform-origin: center 14em;">*</span><span class="char23" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(1.1693deg); transform-origin: center 14em;">&nbsp;</span><span class="char24" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(4.56028deg); transform-origin: center 14em;">c</span><span class="char25" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(9.12055deg); transform-origin: center 14em;">a</span><span class="char26" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(13.7978deg); transform-origin: center 14em;">n</span><span class="char27" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(17.3057deg); transform-origin: center 14em;">&nbsp;</span><span class="char28" style="position: absolute; left: 50%; margin-left: -0.4em; transform: rotate(20.3458deg); transform-origin: center 14em;">*</span><span class="char29" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(23.386deg); transform-origin: center 14em;">&nbsp;</span><span class="char30" style="position: absolute; left: 50%; margin-left: -0.575em; transform: rotate(27.2447deg); transform-origin: center 14em;">M</span><span class="char31" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(32.2727deg); transform-origin: center 14em;">a</span><span class="char32" style="position: absolute; left: 50%; margin-left: -0.475em; transform: rotate(36.833deg); transform-origin: center 14em;">k</span><span class="char33" style="position: absolute; left: 50%; margin-left: -0.425em; transform: rotate(41.0425deg); transform-origin: center 14em;">e</span><span class="char34" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(44.1996deg); transform-origin: center 14em;">&nbsp;</span><span class="char35" style="position: absolute; left: 50%; margin-left: -0.4em; transform: rotate(47.2398deg); transform-origin: center 14em;">*</span><span class="char36" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(50.28deg); transform-origin: center 14em;">&nbsp;</span><span class="char37" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(53.7879deg); transform-origin: center 14em;">C</span><span class="char38" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(58.4651deg); transform-origin: center 14em;">h</span><span class="char39" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(63.1423deg); transform-origin: center 14em;">a</span><span class="char40" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(67.8195deg); transform-origin: center 14em;">n</span><span class="char41" style="position: absolute; left: 50%; margin-left: -0.5em; transform: rotate(72.4967deg); transform-origin: center 14em;">g</span><span class="char42" style="position: absolute; left: 50%; margin-left: -0.425em; transform: rotate(76.8231deg); transform-origin: center 14em;">e</span><span class="char43" style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(79.9802deg); transform-origin: center 14em;">&nbsp;</span><span class="char44" style="position: absolute; left: 50%; margin-left: -0.4em; transform: rotate(83.0204deg); transform-origin: center 14em;">*</span></div>
                    </div>
                    <div class="faq__img">
                        <img src="assets/img/others/faq_img.png" alt="img">
                        <div class="shape-one">
                            <img src="assets/img/others/faq_shape01.svg" class="injectable tg-motion-effects4" alt="img">
                        </div>
                        <div class="shape-two">
                            <span class="svg-icon" id="faq-svg" data-svg-icon="assets/img/others/faq_shape02.svg"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq__content">
                    <div class="section__title pb-10">
                        <span class="sub-title">Faq</span>
                        <h2 class="title">Start Learning From <br> World’s Pro Instructors</h2>
                    </div>
                    <p>Groove’s intuitive shared inbox makes it easy for team members to organize, prioritize and.In this episode.</p>
                    <div class="faq__wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What’s Skillgrow Want to give you?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize prioritize and.In this episode.urvived not only five centuries.Edhen an unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why choose us for your education?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize prioritize and.In this episode.urvived not only five centuries.Edhen an unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How We Provide Service For you?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize prioritize and.In this episode.urvived not only five centuries.Edhen an unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Are you Affordable For Your Course
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize prioritize and.In this episode.urvived not only five centuries.Edhen an unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-area-end -->

<!-- features-area -->
<section class="features__area" style="background-color: #5A00A1;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section__title white-title text-center mb-50">
                    <span class="sub-title">Bagaimana Kami Memulai Perjalanan</span>
                    <h2 class="title">Mulailah Perjalanan Belajar Anda Hari ini!</h2>
                    <p>Groove’s intuitive shared inbox makesteam members together <br> organize, prioritize and.In this episode.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="features__item">
                    <div class="features__icon">
                        <img src="{{ asset('assets/img/icons/features_icon01.svg') }}" class="injectable" alt="img">
                    </div>
                    <div class="features__content">
                        <h4 class="title">Learn with Experts</h4>
                        <p>Curate anding area share Pluralsight content to reach your</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="features__item">
                    <div class="features__icon">
                        <img src="{{ asset('assets/img/icons/features_icon02.svg') }}" class="injectable" alt="img">
                    </div>
                    <div class="features__content">
                        <h4 class="title">Learn Anything</h4>
                        <p>Curate anding area share Pluralsight content to reach your</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="features__item">
                    <div class="features__icon">
                        <img src="{{ asset('assets/img/icons/features_icon03.svg') }}" class="injectable" alt="img">
                    </div>
                    <div class="features__content">
                        <h4 class="title">Get Online Certificate</h4>
                        <p>Curate anding area share Pluralsight content to reach your</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="features__item">
                    <div class="features__icon">
                        <img src="{{ asset('assets/img/icons/features_icon04.svg') }}" class="injectable" alt="img">
                    </div>
                    <div class="features__content">
                        <h4 class="title">E-mail Marketing</h4>
                        <p>Curate anding area share Pluralsight content to reach your</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-area-end -->

<!-- instructor-area-two -->
<section class="instructor__area-two" style="background-color: #5A00A1;">
    <div class="container">
        <div class="instructor__item-wrap-two">
            <div class="row">
                <div class="col-xl-6">
                    <div class="instructor__item-two tg-svg">
                        <div class="instructor__thumb-two">
                            <img src="{{ asset('assets/img/instructor/instructor_two01.png') }}" alt="img">
                            <div class="shape-one">
                                <img src="{{ asset('assets/img/instructor/instructor_shape01.svg') }}" alt="img" class="injectable">
                            </div>
                            <div class="shape-two">
                                <span class="svg-icon" id="instructor-svg" data-svg-icon="{{ asset('assets/img/instructor/instructor_shape02.svg') }}"></span>
                            </div>
                        </div>
                        <div class="instructor__content-two">
                            <h3 class="title"><a href="contact.html">Jadilah Mentor</a></h3>
                            <p>To take a trivial example, which of us undertakes physical exercise yes is this happen here.</p>
                            <div class="tg-button-wrap">
                                <a href="contact.html" class="btn arrow-btn">Lamar Sekarang <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="instructor__item-two tg-svg">
                        <div class="instructor__thumb-two">
                            <img src="{{ asset('assets/img/instructor/instructor_two02.png') }}" alt="img">
                            <div class="shape-one">
                                <img src="{{ asset('assets/img/instructor/instructor_shape01.svg') }}" alt="img" class="injectable">
                            </div>
                            <div class="shape-two">
                                <span class="svg-icon" id="instructor-svg-two" data-svg-icon="{{ asset('assets/img/instructor/instructor_shape02.svg') }}"></span>
                            </div>
                        </div>
                        <div class="instructor__content-two">
                            <h3 class="title"><a href="contact.html">Jadilah Murid</a></h3>
                            <p>Join millions of people from around the world learning together. Online learning.</p>
                            <div class="tg-button-wrap">
                                <a href="contact.html" class="btn arrow-btn">Lamar Sekarang <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instructor-area-two-end -->

<!-- blog-area -->
<section class="blog__post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section__title text-center mb-40">
                    <span class="sub-title">Berita $ Event</span>
                    <h2 class="title">Berita Terbaru</h2>
                    <p>when known printer took a galley of type scrambl edmake</p>
                </div>
            </div>
        </div>
        <div class="row gutter-20">
            <div class="col-xl-3 col-md-6">
                <div class="blog__post-item shine__animate-item">
                    <div class="blog__post-thumb">
                        <a href="blog-details.html" class="shine__animate-link"><img src="{{ asset('assets/img/blog/blog_post01.jpg') }}" alt="img"></a>
                        <a href="blog.html" class="post-tag bg-warning">Marketing</a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="blog-details.html">How To Become idiculously Self-Aware In 20 Minutes</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="blog__post-item shine__animate-item">
                    <div class="blog__post-thumb">
                        <a href="blog-details.html" class="shine__animate-link"><img src="{{ asset('assets/img/blog/blog_post02.jpg') }}" alt="img"></a>
                        <a href="blog.html" class="post-tag bg-warning">Marketing</a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="blog-details.html">Get Started With UI Design With Tips To Speed</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="blog__post-item shine__animate-item">
                    <div class="blog__post-thumb">
                        <a href="blog-details.html" class="shine__animate-link"><img src="{{ asset('assets/img/blog/blog_post03.jpg') }}" alt="img"></a>
                        <a href="blog.html" class="post-tag bg-warning">Marketing</a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="blog-details.html">Make Your Own Expanding Contracting Content</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="blog__post-item shine__animate-item">
                    <div class="blog__post-thumb">
                        <a href="blog-details.html" class="shine__animate-link"><img src="{{ asset('assets/img/blog/blog_post04.jpg') }}" alt="img"></a>
                        <a href="blog.html" class="post-tag bg-warning">Marketing</a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                <li><i class="flaticon-user-1"></i>by <a href="javscript:void(0)">Admin</a></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="javscript:void(0)">What we are capable to usually discovered</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->

@endsection


@section('script')

@endsection
