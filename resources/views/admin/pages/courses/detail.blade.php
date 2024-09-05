@extends('admin.layouts.app')
@section('style')
    <style>
        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: #7209DB !important;
        }

        .nav-link.active {
            background-color: #7209DB !important;
        }

        .text-primary {
            color: #7209DB !important;
        }
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 style="font-weight: bold;">Detail Modul</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item home">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span>Deskripsi</span>
                        </a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
                            <span>Daftar Modul</span>
                        </a>
                    </li>
                    <li class="nav-item test">
                        <a class="nav-link" data-bs-toggle="tab" href="#test" role="tab">
                            <span>Pre Test</span>
                        </a>
                    </li>
                    <li class="nav-item post">
                        <a class="nav-link" data-bs-toggle="tab" href="#post" role="tab">
                            <span>Post Test</span>
                        </a>
                    </li>
                    <li class="nav-item task">
                        <a class="nav-link" data-bs-toggle="tab" href="#task" role="tab">
                            <span>Tugas Akhir</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li class="">
                        <button class="btn btn-warning editDescription">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg> Edit Deskripsi</span>
                        </button>
                        <button class="btn btn-primary d-none addModul">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                    <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                    <path d="M9 8h6" />
                                </svg> Tambah Modul</span>
                        </button>
                        <button class="btn btn-warning editWeinght">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg> Atur Bobot Nilai Soal</span>
                        </button>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">
            <div class="card position-relative">
                <div class="badge badge-warning position-absolute text-dark p-2 shadow"
                    style="font-weight:bold;top: 10px; left: 10px;background-color:#FFC224;">Development
                </div>
                <div class="d-flex">
                    <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="" class="rounded">
                    <div class="align-items-start p-3">
                        <div class="align-items-center">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                class="rounded-circle" width="34" height="34">
                            <span>David Millar</span>
                        </div>
                        <h4 style="font-weight: bold;" class="my-3">Learning Javascript With Javascript</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae fuga eligendi ratione at
                            accusamus repudiandae consequatur deleniti placeat possimus enim fugiat dolorem dolores
                            delectus, magni culpa alias voluptatem? Eveniet, blanditiis!</p>
                        <h5 style="font-weight: bold;" class="text-primary">Rp. 300.000 <span class="text-dark fw-normal"> /
                                <span class="text-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                    </svg>
                                </span>
                                (4.8 Reviews)</span></h5>
                        <div class="col-4">
                            <div
                                class="btn d-flex btn-light-warning w-100 d-block text-warning font-medium mt-3 d-flex justify-content-start align-items-center">
                                <span class="badge text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                        <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                        <path d="M9 8h6" />
                                    </svg><span class="text-dark" style="font-weight: bold;"> 8 Materi</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="p-3">
                    <h3 style="font-weight: bold;">Deskripsi</h3>
                    <hr>
                    <h4 style="font-weight: bold;">Course Description</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, assumenda voluptates?
                        Distinctio
                        rerum, corrupti ducimus, esse debitis illum nisi ratione natus accusamus suscipit sint quos commodi
                        iste
                        molestias alias voluptatem.</p>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="list" role="tabpanel">
            <div class="row">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="col-md-4">
                        <div class="card position-relative">
                            <div class="d-flex justify-content-between align-items-center my-3">
                                <div class="p-2"
                                    style="left: 0;top:5%;background:linear-gradient(to right,#FFA41C, #FFD08A); border-radius:0 8px 8px 0;width:200px">
                                    <span class="text-white" style="font-weight: bold;">Step ke
                                        {{ $i }}</span>
                                </div>
                                <div class="d-flex gap-2 position-absolute" style="right: 5%;">
                                    <div class="text-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                            <path d="M13.5 6.5l4 4" />
                                        </svg>
                                    </div>
                                    <div class="text-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: bold;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                        <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                        <path d="M9 8h6" />
                                    </svg> Belajar Dasar Pemrograman Web</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A provident ab cum illo nisi
                                    inventore vel perspiciatis enim minus. Earum provident excepturi dicta quidem
                                    perspiciatis
                                    porro cum at praesentium accusamus!</p>
                                <div
                                    class="btn d-flex btn-light-warning w-100 d-block text-warning font-medium mt-3 d-flex justify-content-start align-items-center">
                                    <span class="badge text-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                            <path d="M9 8h6" />
                                        </svg><span class="text-dark" style="font-weight: bold;"> 8 Materi</span></span>
                                </div>
                                <a href="{{ route('admin.modules.show', 2) }}"
                                    class="btn btn-primary mt-3 w-100 d-flex align-items-center justify-content-center">Lihat
                                    Materi <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                        <path d="M13 18l6 -6" />
                                        <path d="M13 6l6 6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div class="tab-pane" id="test" role="tabpanel">
            <div>
                <h5 class="fw-semibold">
                    Telah Di Isi 30 Soal
                </h5>
                <div class="d-flex justify-content-between">
                    
                </div>
            </div>
        </div>

        <div class="tab-pane" id="post" role="tabpanel">

        </div>

        <div class="tab-pane" id="task" role="tabpanel">

        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.home', function() {
                $('.addModul').addClass('d-none');
                $('.editDescription').removeClass('d-none');
                $('.editWeinght').addClass('d-none');
            });

            $(document).on('click', '.list', function() {
                $('.editDescription').addClass('d-none');
                $('.addModul').removeClass('d-none');
                $('.editWeinght').addClass('d-none');
            });

            $(document).on('click', '.test', function() {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').removeClass('d-none');
            });

            $(document).on('click', '.post', function() {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').removeClass('d-none');
            });

            $(document).on('click', '.task', function() {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').addClass('d-none');
            });
        });
    </script>
@endsection
