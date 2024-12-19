@extends('user.layouts.app')

@section('style')
<style>
    .btn-warning {
        user-select: none;
        -moz-user-select: none;
        background: #ffc107 none repeat scroll 0 0;
        border: none;
        color: black;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: var(--tg-fw-semi-bold);
        font-family: var(--tg-heading-font-family);
        letter-spacing: 0;
        line-height: 1.12;
        margin-bottom: 0;
        padding: 16px 30px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        vertical-align: middle;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -o-border-radius: 50px;
        -ms-border-radius: 50px;
        border-radius: 50px;
        white-space: nowrap;
        box-shadow: 4px 6px 0px 0px var(--tg-common-color-blue);
        overflow: hidden;
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #9425FE;
        box-shadow: none;
    }

    .btn-warning:hover img {
        filter: brightness(0) invert(1);
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
                    <h3 class="title">Resolving Conflicts Between Designers</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Beranda</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/events">Events</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem" class="detail-title">
                            <a href="" id="currentBreadcrumb"></a>
                        </span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- event-details-area -->
<section class="event__details-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="event__item-thumb" style="border: 1px solid #B5B5C3; padding: 20px 20px 20px 25px; border-radius: 10px;">
                    <img src="{{ asset('assets/img/detail-course/apple.jpeg') }}" class="detail-image" style="width: 100%; height:455px;object-fit:cover;" alt="img">
                </div>
                <h2 class="title detail-title"></h2>
                <div class="event__details-content-wrap">
                    <div class="row">
                        <div class="col-70">
                            <div class="event__details-content">
                                <div class="event__details-content-top">
                                    <a href="javascript:void(0)" id="detail-stock" class="tag px-4" style="background-color: #EFEFF2; color: black;">Stok : 20</a>
                                </div>
                                <h3 class="title" id="detail-name">Macbook Kayak Si Bang Fahrul Hehe</h3>
                                {{-- <div class="event__details-overview">
                                    <h4>Ringkasan</h4>
                                    <p>Prosessor : Apple M2 Chip CPU 8-Core, RAM : 8 GB , ROM : 256 GB</p>
                                </div> --}}

                                <div class="event__details-overview">
                                    <h4 class="mt-3">Deskripsi</h4>
                                    <p id="detail-description">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.dolor sit amet, consectetur adipiscing elited do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-30">
                            <aside class="event__sidebar">
                                <div class="event__widget">
                                    <div class="courses__details-sidebar">
                                        <div class="courses__cost-wrap">
                                            <span>Reedem Point:</span>
                                            <h2 class="title" id="detail-point-required">1000 Pts</h2>
                                        </div>
                                        <div class="courses__information-wrap">
                                            <h5 class="title">Reward Hummaclass:</h5>
                                            <div class="event__item-thumb">
                                                <a href="javascript:void(0)" class="shine__animate-link">
                                                    <div style="border: 1px solid #B5B5C3; padding: 20px 20px 20px 25px; border-radius: 10px;">
                                                        <img src="{{ asset('assets/img/detail-course/apple.jpeg') }}" class="detail-image" alt="img" style="width: 100%; height:150px;">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="tg-button-wrap mt-3">
                                                <button class="btn-warning w-100 storeConfirm">Tukarkan <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                                                    <span id="btn-spinner-exchange" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true" style="display: none;"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- event-details-area-end -->
@endsection

@section('script')
    @include('user.pages.points-exchange.scripts.detail-point-exchange')
@endsection