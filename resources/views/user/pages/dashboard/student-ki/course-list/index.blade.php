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
                        <h4 class="mb-4">Aktivitas Belajar</h4>
                    </div>
                    <div class="courses__details-content">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="progress-tab" data-bs-toggle="tab"
                                    data-bs-target="#progress-tab-pane" type="button" role="tab"
                                    aria-controls="progress-tab-pane" aria-selected="true">Dalam Pengerjaan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finish-tab" data-bs-toggle="tab"
                                    data-bs-target="#finish-tab-pane" type="button" role="tab"
                                    aria-controls="finish-tab-pane" aria-selected="false">Selesai</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="progress-tab-pane" role="tabpanel"
                                aria-labelledby="progress-tab" tabindex="0">
                                @include('user.pages.dashboard.student-ki.course-list.panes.tabs-course-list-progress')
                            </div>
                            <div class="tab-pane fade" id="finish-tab-pane" role="tabpanel" aria-labelledby="finish-tab"
                                tabindex="0">
                                @include('user.pages.dashboard.student-ki.course-list.panes.tabs-course-list-finish')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
