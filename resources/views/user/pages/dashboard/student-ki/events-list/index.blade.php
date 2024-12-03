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
                    <div class="dashboard__content-title">
                        <h4 class="mb-4">Aktivitas Event</h4>
                    </div>
                    <div class="row">
                        @foreach (range(1, 3) as $item)
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
                                            <a href="https://maps.google.com/maps"
                                                class="location d-flex align-items-center" target="_blank">
                                                <i class="flaticon-map me-2"></i>Online
                                            </a>
                                            <p class="mb-0">4 Hari yang lalu</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
