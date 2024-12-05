@extends('teacher.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
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
            color: #E8DEF3 !important;
        }

        .bg-light-primary {
            background-color: #E8DEF3 !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>

    <style>
        .profile-img {
            position: relative;
            z-index: 1;
        }

        .card {
            position: relative;
            overflow: hidden;
        }

        .bubble {
            position: absolute;
            width: auto;
            height: 63px;
            z-index: 0;
        }

        .bubble-left {
            bottom: 0;
            left: -6px;
            transform: rotate(90deg);
        }

        .bubble-right {
            bottom: 0;
            right: 0;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden bg-light-primary">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Detail Kelas</h5>
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

    <div class="row align-items-center mb-4">
        <div class="col-12 col-sm-8 col-md-9 col-lg-10">
            <h5 class="fw-semibold mb-3 mb-sm-0">
                <b>XII RPL 1 - Devisi Digital Marketing</b>
            </h5>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-2 text-sm-end">
            <button class="btn btn-warning w-100 w-sm-auto" type="button">Kembali</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-1">
            <div class="card border position-relative rounded-3">
                <div class="card-body" style="padding-top: 15px; padding-bottom: 15px">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle profile-img"
                            width="55" height="55" />
                        <div class="ms-3">
                            <h6 class="fs-4 mb-1"><b>Suyadi Oke Joss Sp.d</b></h6>
                            <span class="fw-normal fs-3">Wali Kelas XII RPL 1</span>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt="Bubble Kiri" class="bubble bubble-left">
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt="Bubble Kanan" class="bubble bubble-right">
            </div>
        </div>
        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-1">
            <div class="card border position-relative rounded-3">
                <div class="card-body" style="padding-top: 15px; padding-bottom: 15px">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle profile-img"
                            width="55" height="55" />
                        <div class="ms-3">
                            <h6 class="fs-4 mb-1"><b>Alfian Justin</b></h6>
                            <span class="fw-normal fs-3">Mentor Kelas Industri</span>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt="Bubble Kiri" class="bubble bubble-left">
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt="Bubble Kanan" class="bubble bubble-right">
            </div>
        </div>

    </div>

    <div class="card border">
        <div class="card-body">
            <h5 class="fw-semibold mb-3 mb-sm-3">
                <b>Daftar Siswa</b>
            </h5>
            <div class="row g-2 mb-3">
                <div class="col-12 col-lg-3 col-md-3 col-sm-4">
                    <input type="text" class="form-control rounded-3" id="placeholder" placeholder="Cari...">
                </div>
                <div class="col-12 col-lg-5 col-md-5 col-sm-4">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-select rounded-3" id="schoolSelect">
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Nama Siswa</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Jenis Kelamin </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">NISN</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0 text-center">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (range(1, 4) as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin/dist/images/profile/user-10.jpg') }}"
                                            class="rounded-circle" width="40" height="40" />
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0">Ahmad Lukman Hakim</h6>
                                            <span class="fw-normal">X RPL 1</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">Laki - laki</p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">0987654567</p>
                                </td>
                                <td class="text-center">
                                    <a href="#"
                                        class="btn mb-1 waves-effect waves-light btn-primary p-1 rounded-2 me-2"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 9.005a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 1.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M12 5.5c4.613 0 8.596 3.15 9.701 7.564a.75.75 0 1 1-1.455.365a8.504 8.504 0 0 0-16.493.004a.75.75 0 0 1-1.456-.363A10 10 0 0 1 12 5.5" />
                                        </svg>
                                    </a>

                                    <button class="btn mb-1 waves-effect waves-light btn-danger p-1 rounded-2 me-2"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>

                                    <button class="btn mb-1 waves-effect waves-light btn-warning p-1 rounded-2"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M8.707 19.707L18 10.414L13.586 6l-9.293 9.293a1 1 0 0 0-.263.464L3 21l5.242-1.03c.176-.044.337-.135.465-.263M21 7.414a2 2 0 0 0 0-2.828L19.414 3a2 2 0 0 0-2.828 0L15 4.586L19.414 9z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('teacher.pages.classroom.school-detail')
@endsection
