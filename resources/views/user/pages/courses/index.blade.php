@extends('user.layouts.app')

@section('style')
    <style>
        .courses__item-bottom .price {
            font-size: 17px;
            line-height: 1;
            color: var(--tg-theme-primary);
            font-weight: var(--tg-fw-bold);
            margin: 0 0;
        }
    </style>
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
                                <a href="/">Home</a>
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
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- all-courses -->
    <section class="all-courses-area section-py-120">
        <div class="container">
            <div class="row">
                @include('user.pages.courses.widgets.index.filter')
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="myTabContent">
                        @include('user.pages.courses.widgets.index.grid')
                        {{-- @include('user.pages.courses.widgets.index.list') --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all-courses-end -->
    @include('user.pages.courses.widgets.index.scripts.filter')
@endsection
