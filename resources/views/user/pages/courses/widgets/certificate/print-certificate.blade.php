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
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card position-relative border-0" style="background-image: linear-gradient(to right, #9C40F7, #7209DB);height:550px;border-radius:20px;">
                    <div class="p-4">
                        <h2 class="fw-semibold text-white mt-3">
                            Cetak Sertifikat
                        </h2>
                        <p class="text-white mt-4 fs-5">
                            Setelah Lulus Anda Mendapatkan Sertifkat, Lengkapi form untuk cetak sertifikat
                        </p>
                        {{-- <div class="text-start">
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
                        </div> --}}
                    </div>
                    <div class="position-absolute bottom-0">
                        <img src="{{ asset('assets/img/print-certificate.png') }}" alt="" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card p-4 border-0 px-4 pb-5" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                    <h3>Verifikasi Nama Anda</h3>
                    <p class="mt-3">Anda belum pernah melakukan verifikasi nama untuk cetak sertifikat. Proses ini hanya  dapat dilakukan satu kali dan akan digunakan pada seluruh sertifikat kompetensi kelas</p>

                    <div class="col-lg-8 mt-5">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap Anda" name="" id="">
                    </div>
                    <p class="mt-4">
                        Pastikan nama diatas sesuai dengan identitas anda. Nama pada sertifikat tidak dapat diganti
                    </p>
                    <div>
                        <a href="{{ route('courses.pre-download-certificate.index') }}" class="btn btn-primary">
                            Cetak Sertifikat
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12h15m0 0l-5.625-6m5.625 6l-5.625 6"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
