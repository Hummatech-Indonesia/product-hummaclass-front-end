@extends('user.layouts.app')

@section('style')
    <style>
        .card{
            border-radius: 20px;
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
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Courses</span>
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

<div class="container d-flex justify-content-center custom-container mt-3 mb-5">
    <div class="col-lg-11">
        <div class="card text-center card-body pb-5 mt-4 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
            <h4 class="text-center">Saat ini anda dalam masa pengerjaan tugas</h4>
            <p class="text-center mt-2">Kumpulkan tugas sebelum tanggal 20 januari 2023 - 13:45:25</p>
            <div class="row justify-content-center mt-3">
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="card card-body p-5" style="border: 1px solid #9425FE; background-color: #F6EEFE;">
                        <h5 style="color: #9425FE">Setelah siswa mengumpulkan tugas. Tugas akan dinilai oleh mentor dan yang akan menentukan siswa lulus tugas atau tidak</h5>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 mb-3">
                            <div class="card position-relative border-0" style="background-image: linear-gradient(to right, #9C40F7, #7209DB);">
                                <div class="p-4">
                                    <div class="text-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20">
                                            <g fill="white" fill-rule="evenodd" clip-rule="evenodd">
                                                <path d="M5.75 11.5a.75.75 0 0 1 .75-.75h7a.75.75 0 0 1 0 1.5h-7a.75.75 0 0 1-.75-.75m0 3a.75.75 0 0 1 .75-.75h7a.75.75 0 0 1 0 1.5h-7a.75.75 0 0 1-.75-.75" />
                                                <path d="M2.5 2.5c0-1.102.898-2 2-2h6.69c.562 0 1.092.238 1.465.631l.006.007l4.312 4.702c.359.383.527.884.527 1.36v10.3c0 1.102-.898 2-2 2h-11c-1.102 0-2-.898-2-2zm8.689 0H4.5v15h11V7.192l-4.296-4.685l-.003-.001z" />
                                                <path d="M11.19.5a1 1 0 0 1 1 1v4.7h4.31a1 1 0 1 1 0 2h-5.31a1 1 0 0 1-1-1V1.5a1 1 0 0 1 1-1" />
                                            </g>
                                        </svg>
                                        <div class="mt-4">
                                            <h5 class="text-white">Instruksi Pengumpulan Tugas</h5>
                                            <p class="text-white mt-3">Untuk Mengerjakan tugas anda perlu membaca instruksi pengerjaan tugas dengan teliti</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end align-items-center gap-2 mt-5">
                                        <a href="" class="text-white">Baca Selengkapnya</a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18m0 0l-8.5-8.5M21 12l-8.5 8.5" /></svg>
                                    </div>

                                    <div class="position-absolute bottom-0">
                                        <img src="{{ asset('assets/img/task-execution.png') }}" alt="" style="width: 100%; height: auto;">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card position-relative border-0" style="background-image: linear-gradient(to right, #9C40F7, #7209DB);">
                                <div class="p-4">
                                    <div class="text-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="white" d="M5 18v3.766l1.515-.909L11.277 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2zM4 8h12v8h-5.277L7 18.234V16H4z"/><path fill="white" d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2"/></svg>
                                        <div class="mt-4">
                                            <h5 class="text-white">Form Diskusi</h5>
                                            <p class="text-white mt-3">Bertanya ke forum diskusi jika mengalami kendala saat mengerjakan tugas/p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end align-items-center gap-2 mt-5">
                                        <a href="" class="text-white">Baca Selengkapnya</a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18m0 0l-8.5-8.5M21 12l-8.5 8.5" /></svg>
                                    </div>

                                    <div class="position-absolute bottom-0">
                                        <img src="{{ asset('assets/img/dicussion-forum.png') }}" alt="" style="width: 100%; height: auto;">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><g fill="none" stroke="#9425FE" stroke-width="2.0"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 7h.01"/><path stroke-linecap="round" stroke-linejoin="round" d="M10 11h2v5m-2 0h4"/></g></svg>
                            <i>Klik Lanjut untuk mengirimkan submission yang sudah Anda kerjakan</i>
                        </div>
                        <div>
                            <button class="btn btn-primary">Lanjut</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
