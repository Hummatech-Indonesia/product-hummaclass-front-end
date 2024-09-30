@extends('user.layouts.app')

@section('style')
<link rel="stylesheet" href="https://d17ivq9b7rppb3.cloudfront.net/build/commons_style-768ffef7bb.css">
<link rel="stylesheet" href="https://d17ivq9b7rppb3.cloudfront.net/build/addons_style-ee070638b5.css" as="style" onload="this.rel='stylesheet'">
<link rel="stylesheet" href="https://d17ivq9b7rppb3.cloudfront.net/bundle/learning-path-show-style-DiXIjA1N.css">
<link rel="stylesheet" href="https://d17ivq9b7rppb3.cloudfront.net/bundle/learning-path-show-style-DiXIjA1N.css">
<link rel="stylesheet" href="https://d17ivq9b7rppb3.cloudfront.net/bundle/learning-path-show-style-DiXIjA1N.css">
<link rel="stylesheet" href="https://d17ivq9b7rppb3.cloudfront.net/build/semicolon_style-e2d1999982.css" as="style" onload="this.rel='stylesheet'">
@endsection

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h3 class="title">Kursus</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Kursus</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<section>
    <div class="container">
        <div class="learning-path-courses container py-4">
            <div class="row learning-path-course mb-3 mb-lg-0">
                <div class="col-lg-5 col-xl-4 offset-xl-1 order-last order-lg-first py-lg-4">

                    <a class="course-card " href="https://www.dicoding.com/academies/80-memulai-pemrograman-dengan-kotlin" data-event-category="Learning Paths" data-event-action="Click path course from learning path" data-event-label="Memulai Pemrograman dengan Kotlin">
                        <div class="course-card__leading">

                            <div class="course-card__content">
                                <div class="pt-md-2">
                                    <div class="d-flex align-items-center mb-3 font-weight-bold text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16" class="mr-2">
                                            <path fill="#fff" d="M0 0h16v16H0z"></path>
                                            <path stroke="#3F3F46" stroke-linejoin="round" stroke-width="1.5" d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"></path>
                                        </svg>
                                        Langkah 1
                                    </div>
                                    <h5 class="course-card__name">Memulai Pemrograman dengan Kotlin</h5>
                                </div>

                                <div class="course-card__meta">
                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-turqouise-400" width="16" height="16">
                                            <path fill-rule="evenodd" d="M8 14.667A6.667 6.667 0 1 0 8 1.334a6.667 6.667 0 0 0 0 13.333Zm.667-10a.667.667 0 0 0-1.333 0v3.334c0 .176.07.346.195.471l2.334 2.333a.667.667 0 0 0 .942-.942L8.667 7.725V4.667Z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="mr-2">50 Jam</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="course-card__icon text-yellow-400">
                                            <path d="M8 0L10.2899 4.84829L15.6085 5.52786L11.7051 9.20385L12.7023 14.4721L8 11.8957L3.29772 14.4721L4.29494 9.20385L0.391548 5.52786L5.71015 4.84829L8 0Z" fill=""></path>
                                        </svg>
                                        <span class="mr-2">4,84</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-400" width="16" height="16">
                                            <rect width="2.667" height="4.667" x="2.667" y="8" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="6.667" x="6.667" y="6" rx="1" class="text-gray-200" fill="currentColor"></rect>
                                            <rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1" class="text-gray-200" fill="currentColor"></rect>
                                        </svg>
                                        <span>Dasar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card__info d-flex align-items-center">
                            <div class="course-card__info-item">
                                <svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z"></path>
                                </svg>
                                <span class="mr-3">132 Modul</span>
                            </div>

                            <div class="course-card__info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-500" width="16" height="16">
                                    <path fill-rule="evenodd" d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-3">62.709 Siswa Terdaftar</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-2">
                    <div class="learning-path-course__position"></div>
                </div>

                <div class="col-lg-5 col-xl-4 py-lg-4 mb-3 mb-lg-0 learning-path-course__step-container">
                    <h3 class="learning-path-course__step-title font-weight-bold text-center text-lg-left">Langkah Pertama</h3>
                    <div class="learning-path-course__step-description font-weight-medium text-center text-lg-left">Langkah pertama untuk menjadi seorang Android Developer dengan mempelajari bahasa yang direkomendasikan oleh Google.</div>
                </div>
            </div>
            <div class="row learning-path-course mb-3 mb-lg-0">
                <div class="col-lg-5 col-xl-4 offset-xl-1 order-last order-lg-first py-lg-4">

                    <a class="course-card " href="https://www.dicoding.com/academies/51-belajar-membuat-aplikasi-android-untuk-pemula" data-event-category="Learning Paths" data-event-action="Click path course from learning path" data-event-label="Belajar Membuat Aplikasi Android untuk Pemula">
                        <div class="course-card__leading">

                            <div class="course-card__content">
                                <div class="pt-md-2">
                                    <div class="d-flex align-items-center mb-3 font-weight-bold text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16" class="mr-2">
                                            <path fill="#fff" d="M0 0h16v16H0z"></path>
                                            <path stroke="#3F3F46" stroke-linejoin="round" stroke-width="1.5" d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"></path>
                                        </svg>
                                        Langkah 2
                                    </div>
                                    <h5 class="course-card__name">Belajar Membuat Aplikasi Android untuk Pemula</h5>
                                </div>

                                <div class="course-card__meta">
                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-turqouise-400" width="16" height="16">
                                            <path fill-rule="evenodd" d="M8 14.667A6.667 6.667 0 1 0 8 1.334a6.667 6.667 0 0 0 0 13.333Zm.667-10a.667.667 0 0 0-1.333 0v3.334c0 .176.07.346.195.471l2.334 2.333a.667.667 0 0 0 .942-.942L8.667 7.725V4.667Z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="mr-2">60 Jam</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="course-card__icon text-yellow-400">
                                            <path d="M8 0L10.2899 4.84829L15.6085 5.52786L11.7051 9.20385L12.7023 14.4721L8 11.8957L3.29772 14.4721L4.29494 9.20385L0.391548 5.52786L5.71015 4.84829L8 0Z" fill=""></path>
                                        </svg>
                                        <span class="mr-2">4,87</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-400" width="16" height="16">
                                            <rect width="2.667" height="4.667" x="2.667" y="8" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="6.667" x="6.667" y="6" rx="1" class="text-gray-200" fill="currentColor"></rect>
                                            <rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1" class="text-gray-200" fill="currentColor"></rect>
                                        </svg>
                                        <span>Pemula</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card__info d-flex align-items-center">
                            <div class="course-card__info-item">
                                <svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z"></path>
                                </svg>
                                <span class="mr-3">49 Modul</span>
                            </div>

                            <div class="course-card__info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-500" width="16" height="16">
                                    <path fill-rule="evenodd" d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-3">119.205 Siswa Terdaftar</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-2">
                    <div class="learning-path-course__position"></div>
                </div>

                <div class="col-lg-5 col-xl-4 py-lg-4 mb-3 mb-lg-0 learning-path-course__step-container">
                    <h3 class="learning-path-course__step-title font-weight-bold text-center text-lg-left">Membuat Aplikasi Sendiri</h3>
                    <div class="learning-path-course__step-description font-weight-medium text-center text-lg-left">Buat aplikasi pertamamu dengan memahami dasar-dasar membuat tampilan dan logika aplikasi.</div>
                </div>
            </div>
            <div class="row learning-path-course mb-3 mb-lg-0">
                <div class="col-lg-5 col-xl-4 offset-xl-1 order-last order-lg-first py-lg-4">

                    <a class="course-card " href="https://www.dicoding.com/academies/14-belajar-fundamental-aplikasi-android" data-event-category="Learning Paths" data-event-action="Click path course from learning path" data-event-label="Belajar Fundamental Aplikasi Android">
                        <div class="course-card__leading">

                            <div class="course-card__content">
                                <div class="pt-md-2">
                                    <div class="d-flex align-items-center mb-3 font-weight-bold text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16" class="mr-2">
                                            <path fill="#fff" d="M0 0h16v16H0z"></path>
                                            <path stroke="#3F3F46" stroke-linejoin="round" stroke-width="1.5" d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"></path>
                                        </svg>
                                        Langkah 3
                                    </div>
                                    <h5 class="course-card__name">Belajar Fundamental Aplikasi Android</h5>
                                </div>

                                <div class="course-card__meta">
                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-turqouise-400" width="16" height="16">
                                            <path fill-rule="evenodd" d="M8 14.667A6.667 6.667 0 1 0 8 1.334a6.667 6.667 0 0 0 0 13.333Zm.667-10a.667.667 0 0 0-1.333 0v3.334c0 .176.07.346.195.471l2.334 2.333a.667.667 0 0 0 .942-.942L8.667 7.725V4.667Z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="mr-2">140 Jam</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="course-card__icon text-yellow-400">
                                            <path d="M8 0L10.2899 4.84829L15.6085 5.52786L11.7051 9.20385L12.7023 14.4721L8 11.8957L3.29772 14.4721L4.29494 9.20385L0.391548 5.52786L5.71015 4.84829L8 0Z" fill=""></path>
                                        </svg>
                                        <span class="mr-2">4,84</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-400" width="16" height="16">
                                            <rect width="2.667" height="4.667" x="2.667" y="8" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="6.667" x="6.667" y="6" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1" class="text-gray-200" fill="currentColor"></rect>
                                        </svg>
                                        <span>Menengah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card__info d-flex align-items-center">
                            <div class="course-card__info-item">
                                <svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z"></path>
                                </svg>
                                <span class="mr-3">107 Modul</span>
                            </div>

                            <div class="course-card__info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-500" width="16" height="16">
                                    <path fill-rule="evenodd" d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-3">43.111 Siswa Terdaftar</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-2">
                    <div class="learning-path-course__position"></div>
                </div>

                <div class="col-lg-5 col-xl-4 py-lg-4 mb-3 mb-lg-0 learning-path-course__step-container">
                    <h3 class="learning-path-course__step-title font-weight-bold text-center text-lg-left">Membangun Fundamental</h3>
                    <div class="learning-path-course__step-description font-weight-medium text-center text-lg-left">Perdalam keahlianmu di dunia pemrograman Android dengan mempelajari cara membuat aplikasi yang dapat mengambil data dari server dan menyimpannya ke dalam database.</div>
                </div>
            </div>
            <div class="row learning-path-course mb-3 mb-lg-0">
                <div class="col-lg-5 col-xl-4 offset-xl-1 order-last order-lg-first py-lg-4">

                    <a class="course-card " href="https://www.dicoding.com/academies/352-belajar-pengembangan-aplikasi-android-intermediate" data-event-category="Learning Paths" data-event-action="Click path course from learning path" data-event-label="Belajar Pengembangan Aplikasi Android Intermediate">
                        <div class="course-card__leading">

                            <div class="course-card__content">
                                <div class="pt-md-2">
                                    <div class="d-flex align-items-center mb-3 font-weight-bold text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16" class="mr-2">
                                            <path fill="#fff" d="M0 0h16v16H0z"></path>
                                            <path stroke="#3F3F46" stroke-linejoin="round" stroke-width="1.5" d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"></path>
                                        </svg>
                                        Langkah 4
                                    </div>
                                    <h5 class="course-card__name">Belajar Pengembangan Aplikasi Android Intermediate</h5>
                                </div>

                                <div class="course-card__meta">
                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-turqouise-400" width="16" height="16">
                                            <path fill-rule="evenodd" d="M8 14.667A6.667 6.667 0 1 0 8 1.334a6.667 6.667 0 0 0 0 13.333Zm.667-10a.667.667 0 0 0-1.333 0v3.334c0 .176.07.346.195.471l2.334 2.333a.667.667 0 0 0 .942-.942L8.667 7.725V4.667Z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="mr-2">150 Jam</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="course-card__icon text-yellow-400">
                                            <path d="M8 0L10.2899 4.84829L15.6085 5.52786L11.7051 9.20385L12.7023 14.4721L8 11.8957L3.29772 14.4721L4.29494 9.20385L0.391548 5.52786L5.71015 4.84829L8 0Z" fill=""></path>
                                        </svg>
                                        <span class="mr-2">4,82</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-400" width="16" height="16">
                                            <rect width="2.667" height="4.667" x="2.667" y="8" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="6.667" x="6.667" y="6" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1" class="text-gray-200" fill="currentColor"></rect>
                                        </svg>
                                        <span>Mahir</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card__info d-flex align-items-center">
                            <div class="course-card__info-item">
                                <svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z"></path>
                                </svg>
                                <span class="mr-3">115 Modul</span>
                            </div>

                            <div class="course-card__info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-500" width="16" height="16">
                                    <path fill-rule="evenodd" d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-3">8.214 Siswa Terdaftar</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-2">
                    <div class="learning-path-course__position"></div>
                </div>

                <div class="col-lg-5 col-xl-4 py-lg-4 mb-3 mb-lg-0 learning-path-course__step-container">
                    <h3 class="learning-path-course__step-title font-weight-bold text-center text-lg-left">Perdalam keahlian</h3>
                    <div class="learning-path-course__step-description font-weight-medium text-center text-lg-left">Perdalam keahlian untuk menjadi Associate Android Developer yang fokus pada pengalaman pengguna yang lebih baik. </div>
                </div>
            </div>
            <div class="row learning-path-course mb-3 mb-lg-0">
                <div class="col-lg-5 col-xl-4 offset-xl-1 order-last order-lg-first py-lg-4">

                    <a class="course-card " href="https://www.dicoding.com/academies/169-belajar-prinsip-pemrograman-solid" data-event-category="Learning Paths" data-event-action="Click path course from learning path" data-event-label="Belajar Prinsip Pemrograman SOLID">
                        <div class="course-card__leading">

                            <div class="course-card__content">
                                <div class="pt-md-2">
                                    <div class="d-flex align-items-center mb-3 font-weight-bold text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16" class="mr-2">
                                            <path fill="#fff" d="M0 0h16v16H0z"></path>
                                            <path stroke="#3F3F46" stroke-linejoin="round" stroke-width="1.5" d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"></path>
                                        </svg>
                                        Langkah 5
                                    </div>
                                    <h5 class="course-card__name">Belajar Prinsip Pemrograman SOLID</h5>
                                </div>

                                <div class="course-card__meta">
                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-turqouise-400" width="16" height="16">
                                            <path fill-rule="evenodd" d="M8 14.667A6.667 6.667 0 1 0 8 1.334a6.667 6.667 0 0 0 0 13.333Zm.667-10a.667.667 0 0 0-1.333 0v3.334c0 .176.07.346.195.471l2.334 2.333a.667.667 0 0 0 .942-.942L8.667 7.725V4.667Z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="mr-2">15 Jam</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="course-card__icon text-yellow-400">
                                            <path d="M8 0L10.2899 4.84829L15.6085 5.52786L11.7051 9.20385L12.7023 14.4721L8 11.8957L3.29772 14.4721L4.29494 9.20385L0.391548 5.52786L5.71015 4.84829L8 0Z" fill=""></path>
                                        </svg>
                                        <span class="mr-2">4,87</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-400" width="16" height="16">
                                            <rect width="2.667" height="4.667" x="2.667" y="8" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="6.667" x="6.667" y="6" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1" class="text-gray-200" fill="currentColor"></rect>
                                        </svg>
                                        <span>Menengah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card__info d-flex align-items-center">
                            <div class="course-card__info-item">
                                <svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z"></path>
                                </svg>
                                <span class="mr-3">41 Modul</span>
                            </div>

                            <div class="course-card__info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-500" width="16" height="16">
                                    <path fill-rule="evenodd" d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-3">41.486 Siswa Terdaftar</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-2">
                    <div class="learning-path-course__position"></div>
                </div>

                <div class="col-lg-5 col-xl-4 py-lg-4 mb-3 mb-lg-0 learning-path-course__step-container">
                    <h3 class="learning-path-course__step-title font-weight-bold text-center text-lg-left">Memperkuat Prinsip Dasar</h3>
                    <div class="learning-path-course__step-description font-weight-medium text-center text-lg-left">Memperkaya modal menjadi Android Developer dengan belajar prinsip dasar SOLID.</div>
                </div>
            </div>
            <div class="row learning-path-course mb-3 mb-lg-0">
                <div class="col-lg-5 col-xl-4 offset-xl-1 order-last order-lg-first py-lg-4">

                    <a class="course-card " href="https://www.dicoding.com/academies/165-menjadi-android-developer-expert" data-event-category="Learning Paths" data-event-action="Click path course from learning path" data-event-label="Menjadi Android Developer Expert">
                        <div class="course-card__leading">

                            <div class="course-card__content">
                                <div class="pt-md-2">
                                    <div class="d-flex align-items-center mb-3 font-weight-bold text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16" class="mr-2">
                                            <path fill="#fff" d="M0 0h16v16H0z"></path>
                                            <path stroke="#3F3F46" stroke-linejoin="round" stroke-width="1.5" d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"></path>
                                        </svg>
                                        Langkah 6
                                    </div>
                                    <h5 class="course-card__name">Menjadi Android Developer Expert</h5>
                                </div>

                                <div class="course-card__meta">
                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-turqouise-400" width="16" height="16">
                                            <path fill-rule="evenodd" d="M8 14.667A6.667 6.667 0 1 0 8 1.334a6.667 6.667 0 0 0 0 13.333Zm.667-10a.667.667 0 0 0-1.333 0v3.334c0 .176.07.346.195.471l2.334 2.333a.667.667 0 0 0 .942-.942L8.667 7.725V4.667Z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="mr-2">90 Jam</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="course-card__icon text-yellow-400">
                                            <path d="M8 0L10.2899 4.84829L15.6085 5.52786L11.7051 9.20385L12.7023 14.4721L8 11.8957L3.29772 14.4721L4.29494 9.20385L0.391548 5.52786L5.71015 4.84829L8 0Z" fill=""></path>
                                        </svg>
                                        <span class="mr-2">4,79</span>
                                    </div>

                                    <div class="course-card__meta-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-400" width="16" height="16">
                                            <rect width="2.667" height="4.667" x="2.667" y="8" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="6.667" x="6.667" y="6" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                            <rect width="2.667" height="9.333" x="10.667" y="3.333" rx="1" class="text-blue-400" fill="currentColor"></rect>
                                        </svg>
                                        <span>Profesional</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card__info d-flex align-items-center">
                            <div class="course-card__info-item">
                                <svg width="16" height="16" class="course-card__icon text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 2.66666C1.33334 1.93028 1.9303 1.33333 2.66668 1.33333H10C10.7364 1.33333 11.3333 1.93028 11.3333 2.66666V3.33333H13.3333C14.0697 3.33333 14.6667 3.93028 14.6667 4.66666V13.3333C14.6667 14.0697 14.0697 14.6667 13.3333 14.6667H2.66668C1.9303 14.6667 1.33334 14.0697 1.33334 13.3333V2.66666ZM10 2.66666V3.33333H2.66668V2.66666H10ZM2.66668 13.3333V4.66666H4.66668V13.3333H2.66668ZM6.00001 13.3333H13.3333V4.66666H6.00001V13.3333Z"></path>
                                </svg>
                                <span class="mr-3">87 Modul</span>
                            </div>

                            <div class="course-card__info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="course-card__icon text-gray-500" width="16" height="16">
                                    <path fill-rule="evenodd" d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-3">6.101 Siswa Terdaftar</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-2">
                    <div class="learning-path-course__position"></div>
                </div>

                <div class="col-lg-5 col-xl-4 py-lg-4 mb-3 mb-lg-0 learning-path-course__step-container">
                    <h3 class="learning-path-course__step-title font-weight-bold text-center text-lg-left">Saatnya Menjadi Expert</h3>
                    <div class="learning-path-course__step-description font-weight-medium text-center text-lg-left">Jadilah developer expert dengan belajar berbagai macam skill yang diperlukan di dunia industri, termasuk performa dan keamanan aplikasi.</div>
                </div>
            </div>

            <div class="row learning-path-course">
                <div class="col-lg-5 col-xl-4 offset-xl-1 order-last order-lg-first py-lg-4"></div>

                <div class="col-lg-2">
                    <div class="learning-path-course__position"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection