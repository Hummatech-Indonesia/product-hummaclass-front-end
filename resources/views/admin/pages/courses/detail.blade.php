@extends('admin.layouts.app')
@section('style')
    <style>
        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: var(--purple-primary) !important;
        }

        .nav-link.active {
            background-color: var(--purple-primary) !important;
        }

        .text-primary {
            color: var(--purple-primary) !important;
        }

        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .icon {
            transition: transform 0.3s ease;
        }

        .toggle-btn[aria-expanded="true"] .icon {
            transform: rotate(180deg);
        }

        .form-check-input:checked {
            background-color: #9425FE;
            border-color: #9425FE;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 style="font-weight: bold;">Detail Modul</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="/admin/home">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a class="text-muted "
                                    href="/admin/courses">Kursus</a></li>
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

    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between flex-wrap" role="tablist">
                <div class="d-flex flex-wrap">
                    <li class="nav-item home">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true">
                            <span>Deskripsi</span>
                        </a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab" aria-controls="list"
                            aria-selected="false">
                            <span>Daftar Modul</span>
                        </a>
                    </li>
                    <li class="nav-item test">
                        <a class="nav-link" data-bs-toggle="tab" href="#test" role="tab" aria-controls="test"
                            aria-selected="false">
                            <span>Test</span>
                        </a>
                    </li>
                    <li class="nav-item voucher">
                        <a class="nav-link" data-bs-toggle="tab" href="#voucher" role="tab" aria-controls="voucher"
                            aria-selected="false">
                            <span>Voucher</span>
                        </a>
                    </li>
                    <li class="nav-item statistic">
                        <a class="nav-link" data-bs-toggle="tab" href="#statistic" role="tab" aria-controls="statistic"
                            aria-selected="false">
                            <span>Statistik</span>
                        </a>
                    </li>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#" id="edit-description" class="btn btn-warning editDescription">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="me-1">
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                            <path d="M13.5 6.5l4 4" />
                        </svg>
                        Edit Deskripsi
                    </a>
                    <a href="{{ route('admin.create.moduls.index', $id) }}" class="btn btn-primary d-none addModul border-0">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                <path d="M9 8h6" />
                            </svg> Tambah Modul</span>
                    </a>
                    <a href="{{ route('admin.course.setting-test.index', $id) }}" class="btn btn-warning d-none editWeight">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="me-1">
                            <path
                                d="M19.9 12.66a1 1 0 0 1 0-1.32l1.28-1.44a1 1 0 0 0 .12-1.17l-2-3.46a1 1 0 0 0-1.07-.48l-1.88.38a1 1 0 0 1-1.15-.66l-.61-1.83a1 1 0 0 0-.95-.68h-4a1 1 0 0 0-1 .68l-.56 1.83a1 1 0 0 1-1.15.66L5 4.79a1 1 0 0 0-1 .48L2 8.73a1 1 0 0 0 .1 1.17l1.27 1.44a1 1 0 0 1 0 1.32L2.1 14.1a1 1 0 0 0-.1 1.17l2 3.46a1 1 0 0 0 1.07.48l1.88-.38a1 1 0 0 1 1.15.66l.61 1.83a1 1 0 0 0 1 .68h4a1 1 0 0 0 .95-.68l.61-1.83a1 1 0 0 1 1.15-.66l1.88.38a1 1 0 0 0 1.07-.48l2-3.46a1 1 0 0 0-.12-1.17Z" />
                        </svg>
                        Pengaturan Test
                    </a>
                </div>
            </ul>
        </div>
    </div>


    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">
            @include('admin.pages.courses.panes.description.tab-description')
        </div>
        <div class="tab-pane" id="list" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.tab-list-moduls')
        </div>

        <div class="tab-pane" id="test" role="tabpanel">
            @include('admin.pages.courses.panes.test.index')
        </div>

        <div class="tab-pane" id="voucher" role="tabpanel">
            @include('admin.pages.courses.panes.vouchers.tab-vouchers')
        </div>

        <div class="tab-pane" id="statistic" role="tabpanel">
            @include('admin.pages.courses.panes.statistic.tab-statistics')
        </div>
    </div>

    {{-- modal tambah voucher --}}
    @include('admin.pages.courses.panes.vouchers.widgets.modal-create-vouchers')
@endsection
@section('script')
    @include('admin.pages.courses.scripts.index')
    @include('admin.pages.courses.panes.description.scripts.show-course')
@endsection
