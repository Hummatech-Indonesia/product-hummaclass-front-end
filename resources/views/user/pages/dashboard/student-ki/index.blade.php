@extends('user.layouts.app')
@section('content')
    <div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-three"
        data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </div>

    <section class="dashboard__area section-pb-120">
        <div class="container">
            @include('user.pages.dashboard.student-ki.layouts.top-students-ki')
            <div class="row">
                @include('user.pages.dashboard.student-ki.layouts.sidebar-students')
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="bg-white border dashboard__counter-item d-flex align-items-center gap-3 rounded-4 shadow"
                                style="padding: 25px;">
                                <div class="icon" style="background:#9424FE;margin: 0;width: 75px;height: 75px;">
                                    <i class="text-white skillgro-book"></i>
                                </div>
                                <div class="content" style="margin: 0;text-align: left;">
                                    <span class="count odometer fs-3" data-count="26" style="color: black"></span>
                                    <p style="color: black">Kursus Terdaftar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="bg-white border dashboard__counter-item d-flex align-items-center gap-3 rounded-4 shadow"
                                style="padding: 25px;">
                                <div class="icon" style="background:#9424FE;margin: 0;width: 75px;height: 75px;">
                                    <i class="text-white skillgro-book"></i>
                                </div>
                                <div class="content" style="margin: 0;text-align: left;">
                                    <span class="count odometer fs-3" data-count="7" style="color: black"></span>
                                    <p style="color: black">Kursus Selesai</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="bg-white border dashboard__counter-item d-flex align-items-center gap-3 rounded-4 shadow"
                                style="padding: 25px;">
                                <div class="icon" style="background:#9424FE;margin: 0;width: 75px;height: 75px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" class="text-white"
                                        viewBox="0 0 256 256">
                                        <path fill="#fff"
                                            d="M128 136a8 8 0 0 1-8 8H72a8 8 0 0 1 0-16h48a8 8 0 0 1 8 8m-8-40H72a8 8 0 0 0 0 16h48a8 8 0 0 0 0-16m112 65.47V224a8 8 0 0 1-12 7l-24-13.74L172 231a8 8 0 0 1-12-7v-24H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16v30.53a51.88 51.88 0 0 1 0 74.94M160 184v-22.53A52 52 0 0 1 216 76V56H40v128Zm56-12a51.88 51.88 0 0 1-40 0v38.22l16-9.16a8 8 0 0 1 7.94 0l16 9.16Zm16-48a36 36 0 1 0-36 36a36 36 0 0 0 36-36" />
                                    </svg>
                                </div>
                                <div class="content" style="margin: 0;text-align: left;">
                                    <span class="count odometer fs-3" data-count="4" style="color: black"></span>
                                    <p style="color: black">Sertifikat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard__content-title">
                        <h4 class="mb-4">Aktivitas Belajar</h4>
                    </div>
                    <div class="swiper dashboard-courses-active">
                        <div class="swiper-wrapper">
                            @foreach (range(1, 4) as $item)
                                <div class="swiper-slide">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="course-details.html" class="shine__animate-link">
                                                <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}"
                                                    alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content courses__item-content-two">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="course.html">Development</a>
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="course-details.html">Learning JavaScript With
                                                    Imagination</a></h5>
                                            <div class="courses__item-content-bottom">
                                                <div class="author-two">
                                                    <a href="instructor-details.html"><img
                                                            src="{{ asset('assets/img/courses/course_author001.png') }}"
                                                            alt="img">David
                                                        Millar</a>
                                                </div>
                                                <div class="avg-rating">
                                                    <i class="fas fa-star"></i> (4.8 Reviews)
                                                </div>
                                            </div>
                                            <div class="progress-item progress-item-two">
                                                <h6 class="title">Belum Selesai <span>88%</span></h6>
                                                <div class="progress" role="progressbar" aria-label="Example with label"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 88%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="courses__item-bottom-two">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-book"></i>05</li>
                                                <li><i class="flaticon-clock"></i>11h 20m</li>
                                                <li><i class="flaticon-mortarboard"></i>22</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="dashboard__content-title">
                        <h4 class="mb-4">Aktivitas Event</h4>
                    </div>


                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="event__item shine__animate-item">
                                <div class="event__item-thumb">
                                    <a href="events-details.html" class="shine__animate-link"><img
                                            src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                                </div>
                                <div class="event__item-content">
                                    <span class="date">25 June, 2024</span>
                                    <h2 class="title"><a href="events-details.html">The Accessible Target Sizes
                                            Cheatsheet</a></h2>
                                    <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024
                                        pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                    <div class="border-bottom mb-3"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="https://maps.google.com/maps" class="location d-flex align-items-center"
                                            target="_blank">
                                            <i class="flaticon-map me-2"></i>Online
                                        </a>
                                        <p class="mb-0">4 Hari yang lalu</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection