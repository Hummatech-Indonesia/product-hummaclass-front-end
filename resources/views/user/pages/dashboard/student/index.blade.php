@extends('user.layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- dashboard-area -->
    <section class="dashboard__area section-pb-120">
        <div class="container">
            <div class="dashboard__top-wrap">
                <div class="dashboard__top-bg" data-background="{{ asset('assets/img/bg/instructor_dashboard_bg.jpg') }}"></div>
                <div class="dashboard__instructor-info">
                    <div class="dashboard__instructor-info-left">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/courses/details_instructors01.jpg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="title">John Due</h4>
                            <div class="review__wrap review__wrap-two">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>(15 Reviews)</span>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard__instructor-info-right">
                        <a href="#" class="btn btn-two arrow-btn">Create a New Course <img
                                src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('user.pages.dashboard.widgets.sidebar')
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="bg-white border dashboard__counter-item d-flex align-items-center gap-3"
                                style="padding: 25px;">
                                <div class="icon" style="background:#9424FE;margin: 0;width: 75px;height: 75px;">
                                    <i class="text-white skillgro-book"></i>
                                </div>
                                <div class="content" style="margin: 0;text-align: left;">
                                    <span class="count odometer fs-3" data-count="10" style="color: black"></span>
                                    <p style="color: black">kursus terdaftar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="bg-white border dashboard__counter-item d-flex align-items-center gap-3"
                                style="padding: 25px;">
                                <div class="icon" style="background:#9424FE;margin: 0;width: 75px;height: 75px;">
                                    <i class="text-white skillgro-book"></i>
                                </div>
                                <div class="content" style="margin: 0;text-align: left;">
                                    <span class="count odometer fs-3" data-count="10" style="color: black"></span>
                                    <p style="color: black">kursus selesai</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="bg-white border dashboard__counter-item d-flex align-items-center gap-3"
                                style="padding: 25px;">
                                <div class="icon" style="background:#9424FE;margin: 0;width: 75px;height: 75px;">
                                    <i class="text-white skillgro-book"></i>
                                </div>
                                <div class="content" style="margin: 0;text-align: left;">
                                    <span class="count odometer fs-3" data-count="10" style="color: black"></span>
                                    <p style="color: black">selesai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="my-3">Aktifitas Belajar</h3>
                    <div class="swiper dashboard-courses-active">
                        <div class="row">
                            @forelse (range(1,4) as $item)
                                <div class="col-lg-4 col-md-6">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="{{ route('courses.courses.show', $item) }}"
                                                class="shine__animate-link">
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
                                            <h5 class="title"><a href="{{ route('courses.courses.show', $item) }}">Learning
                                                    JavaScript With
                                                    Imagination</a></h5>
                                            <div class="courses__item-content-bottom">
                                                <div class="author-two">
                                                    <a href="instructor-details.html"><img
                                                            src="assets/img/courses/course_author001.png"
                                                            alt="img">David Millar</a>
                                                </div>
                                                <div class="avg-rating">
                                                    <i class="fas fa-star"></i> (4.8 Reviews)
                                                </div>
                                            </div>
                                            <div class="progress-item progress-item-two">
                                                <h6 class="title">COMPLETE <span>88%</span></h6>
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
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <nav class="pagination__wrap my-30 pb-30">
                        <ul class="list-wrap">
                            <li><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                    <h3 class="my-3">Aktifitas Event</h3>
                    <div class="event__inner-wrap">
                        <div class="row">
                            @forelse (range(1,4) as $data)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="event__item shine__animate-item">
                                        <div class="event__item-thumb">
                                            <a href="#" class="shine__animate-link"><img
                                                    src="{{ asset('assets/img/events/event_thumb01.jpg') }}"
                                                    alt="img"></a>
                                        </div>
                                        <div class="event__item-content">
                                            <span class="date">25 June, 2024</span>
                                            <h2 class="title"><a href="">The
                                                    Accessible Target Sizes Cheatsheet</a></h2>
                                            <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September
                                                2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>

                                            <div class="d-flex justify-content-between pt-3"
                                                style="border-top: 1px solid #CCCCCC">
                                                <div class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24">
                                                        <g fill="none" stroke="#6D6C80" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2.0">
                                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                                            <circle cx="12" cy="7" r="4" />
                                                        </g>
                                                    </svg>
                                                    Sisa Kuota: 150
                                                </div>
                                                <div>4 Hari lagi</div>
                                            </div>
                                            {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <nav class="pagination__wrap my-30 pb-30">
                        <ul class="list-wrap">
                            <li><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard-area-end -->
@endsection
