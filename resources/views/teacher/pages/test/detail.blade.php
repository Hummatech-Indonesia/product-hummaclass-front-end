@extends('teacher.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .text-danger {
            color: #DB0909 !important;
        }

        .btn-primary {
            background-color: #9425FE !important;
            border: none;
        }

        .btn-danger {
            background-color: #DB0909 !important;
            border: none;
        }


        .text-light-primary {
            color: #F6EEFE !important;
        }

        .bg-light-primary {
            background-color: #F6EEFE !important;
        }

        .bg-light-danger {
            background-color: #FEEEEE !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>

    <style>
        .nav-pills .nav-link.active {
            background-color: #9425FE;
            color: white;
        }

        .nav-pills .nav-link {
            position: relative;
            padding-left: 30px;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden bg-light-primary">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Ujian</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Detail Kelas pada kelas industri</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n1">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                            class="img-fluid mb-n3" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border">
        <ul class="nav nav-pills p-3 rounded align-items-center flex-row">
            <li class="nav-item">
                <a href="#detail-ujian"
                    class="nav-link note-link d-flex align-items-center justify-content-center active px-3 px-md-3 me-0 me-md-2"
                    data-bs-toggle="tab">
                    <span class="d-md-block font-weight-medium">Detail Ujian</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#nilai-essay"
                    class="nav-link note-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2"
                    data-bs-toggle="tab">
                    <span class="d-md-block font-weight-medium">Nilai Soal Essay</span>
                </a>
            </li>
            <li class="nav-item ms-auto d-flex align-items-center gap-2">
                <a href="javascript:void(0)" class="btn btn-warning d-flex align-items-center px-3" id="back-button">
                    <span class="d-md-block font-weight-medium fs-3">Kembali</span>
                </a>
                <a href="javascript:void(0)" class="btn btn-primary d-flex align-items-center px-3" id="add-notes">
                    <i class="ti ti-plus me-0 me-md-1 fs-4"></i>
                    <span class="d-md-block font-weight-medium fs-3">Tambah Kelas</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card rounded-3 card-hover">
                <a href="javascript:void(0)" class="stretched-link"></a>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title fw-semibold">Total Siswa</h4>
                            <h2 class="mb-0 text-success fw-semibold" id="count_student"></h2>
                        </div>
                        <div class="bg-light-success p-3 rounded-3 text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card rounded-3 card-hover">
                <a href="javascript:void(0)" class="stretched-link"></a>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title fw-semibold">Nilai Tertinggi</h4>
                            <h2 class="mb-0 text-primary fw-semibold" id="highest_score"></h2>
                        </div>
                        <div class="bg-light-primary py-1 px-2 rounded-3 text-primary">
                            <i class="ti ti-trending-up text-primary display-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card rounded-3 card-hover">
                <a href="javascript:void(0)" class="stretched-link"></a>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title fw-semibold">Nilai Rata-rata</h4>
                            <h2 class="mb-0 text-warning fw-semibold" id="average_score"></h2>
                        </div>
                        <div class="bg-light-warning p-2 rounded-3 text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H5V5h14zM9 17H7v-5h2zm4 0h-2v-7h2zm4 0h-2V7h2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card rounded-3 card-hover">
                <a href="javascript:void(0)" class="stretched-link"></a>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title fw-semibold">Nilai Terendah</h4>
                            <h2 class="mb-0 text-danger fw-semibold" id="lowest_score"></h2>
                        </div>
                        <div class="bg-light-danger py-1 px-2 rounded-3 text-danger">
                            <i class="ti ti-trending-down text-danger display-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="detail-ujian">
            <div class="row">
                <div class="col-12 col-lg-3 mb-2">
                    @include('teacher.pages.test.panes.class-list')
                </div>
    
                <div class="col-12 col-lg-9 mb-2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            @include('teacher.pages.test.panes.class-detail')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nilai-essay">
            {{-- <div class="row">
                <div class="col-12 col-lg-3 mb-2">
                    @include('teacher.pages.test.panes.class-list')
                </div>

                <div class="col-12 col-lg-9 mb-2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            @include('teacher.pages.test.panes.class-detail')
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            @include('teacher.pages.test.panes.class-detail')

                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            @include('teacher.pages.test.panes.class-detail')

                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            @include('teacher.pages.test.panes.class-detail')

                        </div>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('script')
    @include('teacher.pages.test.script.detail')
@endsection
