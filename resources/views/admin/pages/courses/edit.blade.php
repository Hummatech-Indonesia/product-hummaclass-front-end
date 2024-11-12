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
                            <li class="breadcrumb-item"><a class="text-muted " href="javascript:void(0)">Dashboard</a></li>
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
                        <a class="nav-link active" data-bs-toggle="tab" href="#description" role="tab">
                            <span>Deskripsi</span>
                        </a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
                            <span>Daftar Materi</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li class="">
                        <button class="btn" style="background:#E8E8E8;">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M5 12l6 6" />
                                    <path d="M5 12l6 -6" />
                                </svg> Kembali</span>
                        </button>
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

                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex gap-3">

                <div class="">
                    <div class="text-warning bg-light-warning d-flex align-items-center rounded-circle p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icon-tabler-book-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                            <path d="M9 8h6" />
                        </svg>
                    </div>
                </div>

                <div class="">
                    <h3 class="text-dark" style="font-weight: bold;">Learning Javascript With Imagination</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique ipsa atque magni beatae, facere
                        tempore nam rerum voluptatibus. Recusandae a officiis tenetur odio praesentium sit quasi veniam nam
                        similique amet!</p>
                    <div class="text-primary d-flex align-items-center" style="font-weight: bold;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M9 12h6" />
                            <path d="M9 16h6" />
                        </svg>
                        <span> 8 Materi</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">

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
                                <button
                                    class="btn btn-primary mt-3 w-100 d-flex align-items-center justify-content-center">Lihat
                                    Materi <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                        <path d="M13 18l6 -6" />
                                        <path d="M13 6l6 6" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.home', function() {
                $('.addModul').addClass('d-none');
                $('.editDescription').removeClass('d-none');
            });

            $(document).on('click', '.list', function() {
                $('.editDescription').addClass('d-none');
                $('.addModul').removeClass('d-none');
            });
        });
    </script>
@endsection
