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
                        <div class="row" id="list-course">
                            
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
                        <div class="row" id="list-event">
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

@section('script')
    @include('user.pages.dashboard.student.scripts.index')
@endsection