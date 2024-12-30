@extends('user.layouts.app')

@section('style')
    <style>
        .btn-purple-primary {
            color: #ffffff;
            background-color: #9425FE;
            border: 1px solid #9425FE;
            padding: 6px 8px;
            font-size: 14px;
            border-radius: 8px;
        }

        .scrollable-content {
            height: 100vh;
            overflow-y: scroll;
            padding-right: 15px;
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
                        <h3 class="title">Penukaran Poin</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Penukaran Poin</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
            <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">Penukaran Poin</span>
                            <h2 class="title">
                                Tukarkan poin Anda dengan barang menarik dan eksklusif!
                            </h2>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/img/point-exchange/point-exchange.png') }}" class="img-fluid"
                                width="400px" alt="">
                        </div>
                        <p class="desc">
                            Tukarkan poin yang Anda kumpulkan dengan berbagai pilihan barang menarik dan eksklusif. Nikmati
                            pengalaman Belajar yang lebih seru dan dapatkan produk pilihan hanya dengan menukar poin Anda.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="section-title">Daftar Penukaran</h4>
                        <div class="scrollable-content">
                            <div class="row" id="list-point-exchange">

                            </div>
                            <nav class="pagination__wrap mt-30">
                                <ul class="list-wrap">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="/point-exchange">2</a></li>
                                    <li><a href="/point-exchange">3</a></li>
                                    <li><a href="/point-exchange">4</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection

@section('script')
    @include('user.pages.points-exchange.scripts.index')
@endsection
