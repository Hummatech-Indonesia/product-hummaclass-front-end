@extends('user.layouts.app')
@section('style')
    <style>
        .status-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-text {
            margin-bottom: 0;
            color: #6D6C80;
        }

        .btn-penilaian {
            border: 2px solid #6D6C80;
            background-color: transparent;
            color: #6D6C80;
            padding: 0.375rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-penilaian:hover {
            background-color: #6D6C80;
            color: white;
        }
    </style>
@endsection
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
            @include('user.pages.dashboard.student-ki.widgets.top-students-ki')
            <div class="row">
                @include('user.pages.dashboard.student-ki.widgets.sidebar-students')
                <div class="col-lg-9">
                    <div class="dashboard__content-title">
                        <h4 class="mb-4">Riwayat Transaksi</h4>
                    </div>
                    <div class="courses__details-content">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                                    data-bs-target="#all-tab-pane" type="button" role="tab"
                                    aria-controls="all-tab-pane" aria-selected="true">Semua</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pending-tab" data-bs-toggle="tab"
                                    data-bs-target="#pending-tab-pane" type="button" role="tab"
                                    aria-controls="pending-tab-pane" aria-selected="false">Menunggu Pembayaran</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finish-tab" data-bs-toggle="tab"
                                    data-bs-target="#finish-tab-pane" type="button" role="tab"
                                    aria-controls="finish-tab-pane" aria-selected="false">Selesai</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel"
                                aria-labelledby="all-tab" tabindex="0">
                                @include('user.pages.dashboard.student-ki.panes.tabs-transaction-all')
                            </div>
                            <div class="tab-pane fade" id="pending-tab-pane" role="tabpanel" aria-labelledby="pending-tab"
                                tabindex="0">
                                ppp
                            </div>
                            <div class="tab-pane fade" id="finish-tab-pane" role="tabpanel" aria-labelledby="finish-tab"
                                tabindex="0">
                                po
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
