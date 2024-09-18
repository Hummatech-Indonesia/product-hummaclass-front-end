@extends('user.layouts.app')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg py-5" data-background="assets/img/bg/breadcrumb_bg.jpg" style="padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Halaman Tidak Ditemukan</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
        <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- error-area -->
<section class="error-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="error-wrap text-center">
                    <div class="error-img">
                        <img src="{{ asset('assets/img/no-data/404.png') }}" alt="img" class="injectable">
                    </div>
                    <div class="error-content pt-5">
                        <h2>404 Not Found</span></h2>
                        <h6>Kembali ke halaman Sebelumnya</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error-area-end -->

@endsection
