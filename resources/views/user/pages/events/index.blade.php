@extends('user.layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Event</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Beranda</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="events">Event</a>
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
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
    </section>
    <!-- breadcrumb-area-end -->

    <!-- event-area -->
    <section class="event__area-two section-py-120">
        <div class="container">
            <div class="event__inner-wrap">
                <div class="row" id="events-list-content">
                    
                </div>
                <nav class="pagination__wrap mt-30">
                    <ul class="list-wrap">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="/events">2</a></li>
                        <li><a href="/events">3</a></li>
                        <li><a href="/events">4</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- event-area-end -->
@endsection

@section('script')
    @include('user.pages.events.scripts.index')
@endsection
