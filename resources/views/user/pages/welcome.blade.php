@extends('user.layouts.app')

@section('style')
    <style>
        .btn {
            background: #9425FE none repeat scroll 0 0;
        }

        :root {
            --tg-theme-primary: #9425FE;
            --tg-common-color-blue-2: #9425FE;
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

        .outline-purple-primary {
            user-select: none;
            -moz-user-select: none;
            background: transparent;
            border: 2px solid #9C40F7;
            color: #9C40F7;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: var(--tg-fw-semi-bold);
            font-family: var(--tg-heading-font-family);
            letter-spacing: 0;
            line-height: 1.12;
            margin-bottom: 0;
            padding: 16px 30px;
            text-align: center;
            text-transform: capitalize;
            touch-action: manipulation;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            vertical-align: middle;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -o-border-radius: 50px;
            -ms-border-radius: 50px;
            border-radius: 25px;
            white-space: nowrap;
            box-shadow: none;
            overflow: hidden;
        }

        .outline-purple-primary:hover {
            background-color: #9C40F7;
            color: var(--tg-common-color-white);
            border-color: #9C40F7;
        }

        .categories__item:hover h1 {
            color: white !important;
        }

        .courses__item-bottom .price {
            font-size: 20px;
            line-height: 1;
            color: var(--tg-theme-primary);
            font-weight: var(--tg-fw-bold);
            margin: 0 0;
            display: flex;
            justify-content: end;
        }


        .about-area {
            .card-body .m-0 {
                /* Memastikan kata panjang akan terpotong ke baris berikutnya */
                word-wrap: break-word;
                white-space: normal;
                /* Mengizinkan pembungkusan teks */
                overflow: hidden;
                /* Menjaga layout tetap rapi */
                text-overflow: ellipsis;
                /* Opsi: tambahkan elipsis jika teks terlalu panjang */
                display: block;
            }

            .card-body .m-0 {
                fontize {
                    autoa resize flex boxesinalign css
                }
            }
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
                                    <svg width="61" height="68" viewBox="0 0 61 68" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.9456 42.4604C12.35 35.8453 15.0985 20.3798 14.8574 11.4385"
                                            stroke="#031333" stroke-width="3.07158" stroke-linejoin="round" />
                                        <path d="M27.4487 52.5191C33.5478 49.598 47.4807 42.3448 54.4199 36.7009"
                                            stroke="#031333" stroke-width="3.07158" stroke-linejoin="round" />
                                        <path d="M20.1039 44.2553C23.1559 40.986 29.8591 33.2239 32.2559 28.3291"
                                            stroke="#031333" stroke-width="3.07158" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                        fill="currentcolor" />
                                </svg>
                                Datang
                            </span>
                            <br>Di Kelas Industri <b>Hummatech</b>
                        </h3>

                        <p data-aos="fade-right" data-aos-delay="600">Meningkatkan skill guru dan siswa dengan program kelas
                            berbasis Industri.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner__images">
                        <img src="{{ asset('assets/img/banner/banner_img.png') }}" alt="img" class="main-img">
                        <div class="shape big-shape" data-aos="fade-up-right" data-aos-delay="600">
                            <img src="{{ asset('assets/img/banner/banner_shape01.png') }}" alt="shape"
                                class="tg-motion-effects1">
                        </div>
                        <img src="{{ asset('assets/img/banner/bg_dots.svg') }}" alt="shape"
                            class="shape bg-dots rotateme">
                        <img src="{{ asset('assets/img/banner/banner_shape02.png') }}" alt="shape"
                            class="shape small-shape tg-motion-effects3">
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
                            <img src="{{ asset('assets/img/banner/banner_shape02.svg') }}" alt="shape"
                                class="arrow-shape tg-motion-effects3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/banner/banner_shape01.svg') }}" alt="shape" class="line-shape"
            data-aos="fade-right" data-aos-delay="1600">
    </section>
    <!-- banner-area-end -->

    <section class="about-area tg-motion-effects section-py-120">
        <div class="container">
            <div class="row row-cols-5 gap-3 align-items-center justify-content-center" id="category-list">
                {{-- @foreach (range(1, 3) as $item)
                    <div class="card">
                        <div class="card-body rounded-3">
                            <div class="col row align-items-center">
                                <div class="col-4">
                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                        class="rounded-circle">
                                </div>
                                <div class="col ps-0">
                                    <h6 class="m-0">Laravel Category</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </section>

    <!-- fitur area -->
    <section class="courses-area section-pt-120 section-pb-90">
        <div class="container">
            <div class="section__title-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Fitur Unggulan Kami</span>
                            <h2 class="title">Upgrade Skill Kamu dengan Hummaclass</h2>
                            <p class="desc">belajar dari instruktur terbaik di kelas langsung terlibat, berinteraksi dan
                                menyelesaikan keraguan</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="card shadow-none border-0" style="background-color: #F6EEFE;border-radius:20px;">
                                <div class="card-body p-4 px-5">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center p-3"
                                            style="border-radius: 50%; background-color:#9425FE">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                viewBox="0 0 24 24">
                                                <path fill="white"
                                                    d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9zm6.82 6L12 12.72L5.18 9L12 5.28zM17 16l-5 2.72L7 16v-3.73L12 15l5-2.73z" />
                                            </svg>
                                        </div>
                                        <h5 class="mb-0 ms-3">Mentor Terpercaya</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <p style="font-size: 15px;">Mentor Kami ramah dan ahli dalam domain untuk membuat
                                            Anda belajar dengan mudah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card shadow-none border-0" style="background-color: #EEF0FE;border-radius:20px;">
                                <div class="card-body p-4 px-5">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center p-3"
                                            style="border-radius: 50%; background-color:#2925FE">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="white">
                                                    <path
                                                        d="M20 12v5c0 1.886 0 2.828-.586 3.414S17.886 21 16 21H6.5a2.5 2.5 0 0 1 0-5H16c1.886 0 2.828 0 3.414-.586S20 13.886 20 12V7c0-1.886 0-2.828-.586-3.414S17.886 3 16 3H8c-1.886 0-2.828 0-3.414.586S4 5.114 4 7v11.5" />
                                                    <path stroke-linecap="round" d="M9 8h6" />
                                                </g>
                                            </svg>
                                        </div>
                                        <h5 class="mb-0 ms-3">Kursus Terbaik</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <p style="font-size: 15px;">Semua kursus kami dibuat dan untuk membuat Anda
                                            menikmati mempelajari hal-hal baru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card shadow-none border-0" style="background-color: #FEF5EE;border-radius:20px;">
                                <div class="card-body p-4 px-5">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center p-3"
                                            style="border-radius: 50%; background-color:#FFB649">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24">
                                                <path fill="white"
                                                    d="M6 3h8.99v1.5H6zM2.99 6h1.5v1.5h-1.5zm0-3h1.5v1.5h-1.5zm0 6.01H4.5v1.5H2.99z" />
                                                <path fill="white"
                                                    d="M4.5 12h-3V1.49h15V6H18V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9.48a2 2 0 0 0 2 2h2.5Z" />
                                                <path fill="white"
                                                    d="M22 7.5H8a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h5.53v1.53H12V24h6v-1.49h-1.5V21H22a2 2 0 0 0 2-2V9.5a2 2 0 0 0-2-2m.51 12h-15V9h15Z" />
                                            </svg>
                                        </div>
                                        <h5 class="mb-0 ms-3">Tugas Kompetensi</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 mb-4">
                                        <p style="font-size: 15px;">Bergabunglah dengan kelas kami dengan alat interaktif
                                            dan dukungan keraguan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- fitur area end -->

    <!-- course-area -->
    <section class="courses-area section-pt-120 section-pb-90" data-background="{{ asset('assets/bg-blur.png') }}">
        <div class="container">
            <div class="section__title-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Rekomendasi</span>
                            <h2 class="title">Kursus Yang Direkomendasikan Untuk Anda</h2>
                            <p class="desc">Mungkin anda menyukai kursus yang kami rekomendasikan</p>
                        </div>
                        <div class="courses__nav">

                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content" id="courseTabContent">
                            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel"
                                aria-labelledby="all-tab" tabindex="0">
                                <div class="swiper courses-swiper-active">
                                    <div class="swiper-wrapper" id="course-content">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('courses.courses.index') }}" class="outline-purple-primary d-none"
                                        id="other-courses">
                                        Lihat Lainnya
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path
                                                    d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="currentColor"
                                                    d="m14.707 5.636l5.657 5.657a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 0 1-1.414-1.414l3.95-3.95H4a1 1 0 1 1 0-2h13.243l-3.95-3.95a1 1 0 1 1 1.414-1.414" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                {{-- <div class="courses__nav">
                                    <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                                    <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- course-area-end -->

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
                            <div class="swiper-wrapper" id="category_count">

                            </div>
                        </div>
                        <div class="categories__nav">
                            <button class="categories-button-prev">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 7L1 7M1 7L7 1M1 7L7 13" stroke="#161439" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="categories-button-next">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="#161439" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories-area-end -->

    <section class="fact__area-two py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fact__inner-wrap-two">
                        <div class="section__title white-title mb-30">
                            <h2 class="title">Thousands of
                                <span class="position-relative">
                                    <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                            fill="currentcolor"></path>
                                    </svg>
                                    courses
                                </span>
                                authored by industry experts
                            </h2>
                        </div>
                        <div class="fact__item-wrap">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer odometer-auto-theme" data-count="45">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span>
                                        </div>
                                    </span>K+</h2>
                                <p>Active Students</p>
                            </div>
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer odometer-auto-theme" data-count="328">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">3</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">8</span></span></span></span></span>
                                        </div>
                                    </span>+</h2>
                                <p>Best Instructors</p>
                            </div>
                        </div>
                        <div class="fact__img-wrap tg-svg">
                            <img src="assets/img/others/fact_img.png" alt="img">
                            <div class="shape-one">
                                <img src="assets/img/others/fact_shape01.svg" alt="img" class="injectable">
                            </div>
                            <div class="shape-two">
                                <span class="svg-icon" id="fact-btn"
                                    data-svg-icon="assets/img/others/fact_shape02.svg"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- features-area -->
    <section class="features__area" style="background-color: #532A73;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section__title white-title text-center mb-50">
                        <span class="sub-title">Bagaimana Kami Memulai Perjalanan</span>
                        <h2 class="title">Mulailah Perjalanan Belajar Anda Hari ini!</h2>
                        <p>Groove’s intuitive shared inbox makesteam members together <br> organize, prioritize and.In this
                            episode.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features__item">
                        <div class="features__icon">
                            <img src="{{ asset('assets/img/icons/features_icon01.svg') }}" class="injectable"
                                alt="img">
                        </div>
                        <div class="features__content">
                            <h4 class="title">Belajar dengan Developer Expert</h4>
                            <p>Dipandu dengan mentor-mentor terbaik dari Hummaclass</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features__item">
                        <div class="features__icon">
                            <img src="{{ asset('assets/img/icons/features_icon02.svg') }}" class="injectable"
                                alt="img">
                        </div>
                        <div class="features__content">
                            <h4 class="title">Belajar Segala Bidang</h4>
                            <p>Bermacam-macam jenis Bidang untuk dipelajari</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features__item">
                        <div class="features__icon">
                            <img src="{{ asset('assets/img/icons/features_icon03.svg') }}" class="injectable"
                                alt="img">
                        </div>
                        <div class="features__content">
                            <h4 class="title">Mendapatkan Sertifikat</h4>
                            <p>Sertifikat resmi dari Hummaclass</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- instructor-area-two -->
    <section class="instructor__area-two" style="background-color: #532A73;">
        <div class="container">
            <div class="instructor__item-wrap-two">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="instructor__item-two tg-svg">
                            <div class="instructor__thumb-two">
                                <img src="{{ asset('assets/img/instructor/instructor_two01.png') }}" alt="img">
                                <div class="shape-one">
                                    <img src="{{ asset('assets/img/instructor/instructor_shape01.svg') }}" alt="img"
                                        class="injectable">
                                </div>
                                <div class="shape-two">
                                    <span class="svg-icon" id="instructor-svg"
                                        data-svg-icon="{{ asset('assets/img/instructor/instructor_shape02.svg') }}"></span>
                                </div>
                            </div>
                            <div class="instructor__content-two">
                                <h3 class="title"><a href="javascript:void(0)">Jadilah Mentor</a></h3>
                                <p>To take a trivial example, which of us undertakes physical exercise yes is this happen
                                    here.</p>
                                <div class="tg-button-wrap">
                                    <a href="javascript:void(0)" class="btn arrow-btn">Lamar Sekarang <img
                                            src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img"
                                            class="injectable"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="instructor__item-two tg-svg">
                            <div class="instructor__thumb-two">
                                <img src="{{ asset('assets/img/instructor/instructor_two02.png') }}" alt="img">
                                <div class="shape-one">
                                    <img src="{{ asset('assets/img/instructor/instructor_shape01.svg') }}" alt="img"
                                        class="injectable">
                                </div>
                                <div class="shape-two">
                                    <span class="svg-icon" id="instructor-svg-two"
                                        data-svg-icon="{{ asset('assets/img/instructor/instructor_shape02.svg') }}"></span>
                                </div>
                            </div>
                            <div class="instructor__content-two">
                                <h3 class="title"><a href="javascript:void(0)">Jadilah Murid</a></h3>
                                <p>Join millions of people from around the world learning together. Online learning.</p>
                                <div class="tg-button-wrap">
                                    <a href="javascript:void(0)" class="btn arrow-btn">Lamar Sekarang <img
                                            src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img"
                                            class="injectable"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor-area-two-end -->


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
                        <p>when an unknown printer took a galley of type and scrambled makespecimen book has survived not
                            only five centuries</p>
                        <div class="tg-button-wrap">
                            <a href="javascript:void(0)" class="btn arrow-btn">Lihat Semua Mentor <img
                                    src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="instructor__item-wrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="instructor__item">
                                    <div class="instructor__thumb">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('assets/img/instructor/instructor01.png') }}"
                                                alt="img"></a>
                                    </div>
                                    <div class="instructor__content">
                                        <h2 class="title"><a href="javascript:void(0)">Mark Jukarberg</a></h2>
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
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('assets/img/instructor/instructor02.png') }}"
                                                alt="img"></a>
                                    </div>
                                    <div class="instructor__content">
                                        <h2 class="title"><a href="javascript:void(0)">Olivia Mia</a></h2>
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
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('assets/img/instructor/instructor03.png') }}"
                                                alt="img"></a>
                                    </div>
                                    <div class="instructor__content">
                                        <h2 class="title"><a href="javascript:void(0)">William Hope</a></h2>
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
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('assets/img/instructor/instructor04.png') }}"
                                                alt="img"></a>
                                    </div>
                                    <div class="instructor__content">
                                        <h2 class="title"><a href="javascript:void(0)">Sophia Ava</a></h2>
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


    <!-- blog-area -->
    <section class="blog__post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Berita Terbaru</span>
                        <h2 class="title">Berita Terbaru</h2>
                        <p>when known printer took a galley of type scrambl edmake</p>
                    </div>
                </div>
            </div>
            <div class="row gutter-20" id="news-content">
            </div>
            <div class="text-center">
                <a href="{{ route('news.index') }}" class="outline-purple-primary d-none" id="other-news">
                    Lihat Lainnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <g fill="none">
                            <path
                                d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                            <path fill="currentColor"
                                d="m14.707 5.636l5.657 5.657a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 0 1-1.414-1.414l3.95-3.95H4a1 1 0 1 1 0-2h13.243l-3.95-3.95a1 1 0 1 1 1.414-1.414" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection


@section('script')
    @include('user.pages.scripts.course')
    @include('user.pages.scripts.blogs')
    @include('user.pages.scripts.footer')
@endsection
