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
        <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
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
                        <img src="{{ asset('assets/img/point-exchange/point-exchange.png') }}" class="img-fluid" width="400px" alt="">
                    </div>
                    <p class="desc">
                        Tukarkan poin yang Anda kumpulkan dengan berbagai pilihan barang menarik dan eksklusif. Nikmati pengalaman Belajar yang lebih seru dan dapatkan produk pilihan hanya dengan menukar poin Anda.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4 class="section-title">Daftar Penukaran</h4>
                    <div class="scrollable-content">
                        <div class="row">
                            @foreach (range(1,8) as $data)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="event__item shine__animate-item">
                                    <div class="event__item-thumb">
                                        <a href="events-details.html" class="shine__animate-link">
                                            <div style="border: 1px solid #B5B5C3; padding: 20px 20px 20px 25px; border-radius: 10px;">
                                                <img src="{{ asset('assets/img/point-exchange/motor.png') }}" alt="img" style="width: 100%; height:150px;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="event__item-content">
                                        <span class="date">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-width="2.0">
                                                    <ellipse cx="9.5" cy="10" stroke-linecap="round" stroke-linejoin="round" rx="9.5" ry="10" transform="matrix(-1 0 0 1 20 2)" />
                                                    <text x="11" y="15" text-anchor="middle" font-size="9" fill="currentColor" font-family="Arial" font-weight="lighter">H</text>
                                                </g>
                                            </svg>
                                            100 Poin
                                        </span>
                                        <h2 class="title"><a href="javascript:void(0)">Yamaha Aerox Kakak Starboy Anjay Slebew</a></h2>
                                        <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                            <div class="d-flex">Sisa Kuota: 100</div>
                                            <div>
                                                <button class="btn-purple-primary px-4">
                                                    Tukarkan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection
