@extends('teacher.layouts.app')
@section('style')
    <style>
        .text-light-primary {
            color: #E8DEF3 !important;
        }

        .bg-light-primary {
            background-color: #E8DEF3 !important;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden bg-light-primary">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Jurnal</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Daftar Jurnal Guru</a>
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
        <div class="card-body">
            <h5 class="fw-semibold mb-3"><b>Detail Jurnal</b></h5>
            <div class="row">
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <img id="image" src="" alt="No Image"
                        class="rounded-2 img-fluid"
                        style="width: 100%; height: 180px; object-fit: cover;">
                </div>

                <div class="col-12 col-lg-9">
                    <h5 class="fw-semibold"><b>Judul</b></h5>
                    <p id="title"></p>
                    <h5 class="fw-semibold"><b>Deskripsi</b></h5>
                    <p id="desc"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card border">
        <div class="card-body">
            <h5 class="fw-semibold mb-3"><b>Daftar Kehadiran Siswa</b></h5>
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">No</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Nama</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Kelas</h6>
                            </th>
                            <th class="text-center">
                                <h6 class="fs-4 fw-semibold mb-0">Kehadiran</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="student-list">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
@section('script')
    @include('teacher.pages.journal.scripts.detail')
@endsection
