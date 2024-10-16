@extends('user.layouts.app')

@section('content')
<!-- breadcrumb-area -->
<div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-two" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Courses</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Resolving Conflicts Between Designers And
                            Engineers</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</div>
<!-- breadcrumb-area-end -->

<section class="courses__details-area py-5">
    <div class="container">
        <h4>Detail Pengumpulan Tugas</h4>
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #9425FE">
                        General
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center py-4">
                                <div class="author-two">
                                    <img src="{{ asset('assets/img/courses/course_author001.png') }}" style="width: 120px;object-fit:cover;" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-5 mt-1">
                                <div class="d-flex justify-content-between">
                                    <h6>Nama Siswa</h6>
                                    <h6>:</h6>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p>Alfian Fahrul Ban Dalam</p>
                            </div>
                            <div class="col-lg-5 mt-1">
                                <div class="d-flex justify-content-between">
                                    <h6>Kursus</h6>
                                    <h6>:</h6>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p>Belajar dasar pemrograman web</p>
                            </div>
                            <div class="col-lg-5 mt-1">
                                <div class="d-flex justify-content-between">
                                    <h6>Tugas</h6>
                                    <h6>:</h6>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p>judul tugas e pokok e ngono wes</p>
                            </div>
                            <div class="col-lg-5 mt-1">
                                <div class="d-flex justify-content-between">
                                    <h6>Dikumpulkan
                                        pada</h6>
                                    <h6>:</h6>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p>20 januari 2024</p>
                            </div>
                            <div class="col-lg-5 mt-1">
                                <div class="d-flex justify-content-between">
                                    <h6>Status</h6>
                                    <h6>:</h6>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <span class="badge text-danger" style="background-color: #FEEEEE;">Revisi</span>
                            </div>
                            <div class="col-lg-5 mt-1">
                                <div class="d-flex justify-content-between">
                                    <h6>Dikoreksi</h6>
                                    <h6>:</h6>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p>20 januari 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #9425FE">
                        Hasil Penilaian
                    </div>
                    <div class="card-body">
                        <h6>Nilai Tugas Kamu</h6>
                        <div>
                            <button class="star bg-transparent border-0" data-value="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="#FFB649" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z"/>
                                    </g>
                                </svg>
                            </button>
                            <button class="star bg-transparent border-0" data-value="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="#FFB649" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z"/>
                                    </g>
                                </svg>
                            </button>
                            <button class="star bg-transparent border-0" data-value="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="#FFB649" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z"/>
                                    </g>
                                </svg>
                            </button>
                            <button class="star bg-transparent border-0" data-value="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="#FFB649" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z"/>
                                    </g>
                                </svg>
                            </button>
                            <button class="star bg-transparent border-0" data-value="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="#FFB649" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div class="py-2 mb-3" style="border-bottom: 1px solid #CCCCCC"></div>
                        <h6>Persyaratan yang harus dipenuhi</h6>
                        <ul class="ps-0" style="list-style-type: none;">
                            <li class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="#9425FE" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="m6 12l4.243 4.243l8.484-8.486"/></svg>
                                <p class="ms-3">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas </p>
                            </li>
                            <li class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="#9425FE" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="m6 12l4.243 4.243l8.484-8.486"/></svg>
                                <p class="ms-3">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas </p>
                            </li>
                            <li class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="#9425FE" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="m6 12l4.243 4.243l8.484-8.486"/></svg>
                                <p class="ms-3">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas </p>
                            </li>
                            <li class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><path fill="#DB0909" d="m289.94 256l95-95A24 24 0 0 0 351 127l-95 95l-95-95a24 24 0 0 0-34 34l95 95l-95 95a24 24 0 1 0 34 34l95-95l95 95a24 24 0 0 0 34-34Z"/></svg>
                                <p class="ms-3">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas </p>
                            </li>
                        </ul>
                        <div class="py-2 mb-3" style="border-bottom: 1px solid #CCCCCC"></div>
                        <h6>Catatan dari mentor</h6>
                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
