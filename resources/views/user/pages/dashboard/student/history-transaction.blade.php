@extends('user.layouts.app')


@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three" data-background="assets/img/bg/breadcrumb_bg.jpg">
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
                    <div class="card p-5 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                        <h5 class="mb-3">Riwayat Transaksi</h5>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table table-striped m-t-30 text-center table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg" data-paging="true" data-paging-size="7" style="">
                                <thead>
                                    <tr class="footable-header">
                                        <th class="text-white text-start" style="display: table-cell;background-color:#9425FE;">Nama Kursus</th>
                                        <th class="text-white text-start" style="display: table-cell;background-color:#9425FE;">Tanggal Pembelian</th>
                                        <th class="text-white text-start" style="display: table-cell;background-color:#9425FE;">Harga</th>
                                        <th class="text-white text-start" style="display: table-cell;background-color:#9425FE;">Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (range(1,3) as $item)
                                    <tr>
                                        <td class="text-start" style="display: table-cell;">Jeneng Kursus</td>
                                        <td class="text-start" style="display: table-cell;">10 Januari 2023</td>
                                        <td class="text-start" style="display: table-cell;">Rp. 300.000</td>
                                        <td class="text-start" style="display: table-cell;">Gopay</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard-area-end -->
@endsection