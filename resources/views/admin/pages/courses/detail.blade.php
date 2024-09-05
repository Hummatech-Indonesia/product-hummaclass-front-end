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
            @include('admin.pages.courses.panes.tab-description')
        </div>

        <div class="tab-pane" id="list" role="tabpanel">
            @include('admin.pages.courses.panes.tab-list-moduls')
        </div>

        <div class="tab-pane" id="test" role="tabpanel">
            @include('admin.pages.courses.panes.tab-pretest')
        </div>

        <div class="tab-pane" id="post" role="tabpanel">
            @include('admin.pages.courses.panes.tab-posttest')
        </div>

        <div class="tab-pane" id="task" role="tabpanel">
            @include('admin.pages.courses.panes.tab-task')
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
