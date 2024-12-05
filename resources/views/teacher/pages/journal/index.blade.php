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

    <div class="row align-items-center mb-4">
        <div class="col-12 col-sm-8 col-md-9 col-lg-10 mb-2">
            <div class="col-lg-3">
                <input type="text" class="form-control rounded-3" style="background-color: #FFFFFF" id="placeholder"
                    placeholder="Cari...">
            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-2 text-sm-end">
            <a href="/dashboard/teacher/journal-create" class="btn btn-primary w-100 w-sm-auto" type="button">
                <i class="ti ti-plus"></i>
                Tambah
            </a>
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
                                <h6 class="fs-4 fw-semibold mb-0">No</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Judul</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Bukti</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Tanggal</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Kelas</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Deskripsi</h6>
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
                                    <p class="mb-0 fw-normal">1</p>
                                </td>
                                <td>
                                    <h6 class="fw-normal mb-0">XII RPL 1 - SMKN 1 Kepanjen</h6>
                                </td>
                                <td class="text-center">
                                    <img src="{{ asset('assets/img/no-image/no-image.jpg') }}" alt="No Image"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </td>

                                <td>
                                    <p class="mb-0 fw-normal">10 Januari 2023</p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal">XII RPL 1 - SMKN 1 Kepanjen</p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal">Lorem ipsum dolor si amet....</p>
                                </td>
                                <td class="text-center">
                                    <a href="/dashboard/teacher/journal-detail"
                                        class="btn mb-1 waves-effect waves-light btn-primary p-1 rounded-2 me-2"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 9.005a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 1.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M12 5.5c4.613 0 8.596 3.15 9.701 7.564a.75.75 0 1 1-1.455.365a8.504 8.504 0 0 0-16.493.004a.75.75 0 0 1-1.456-.363A10 10 0 0 1 12 5.5" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
