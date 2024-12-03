@extends('mentor.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .info-card {
            background-color: #fff7eb;
            border: 1px solid #ffdca9;
            border-radius: 8px;
            padding: 20px;
        }

        .info-card .info-icon {
            background-color: #ffdca9;
            color: #ff8800;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .info-card .info-header {
            font-weight: bold;
            color: #ff8800;
        }

        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }



        .card-challenge {
            height: 314px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-challenge .card-title {
            min-height: 40px;
            display: flex;
            flex-direction: row;
            align-items: center;
            max-width: 260px;
            /* Vertikal */
            /* justify-content: center; */
            /* Opsional: jika ingin teks berada di tengah horizontal */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-challenge .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-challenge .card-body p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Batas 3 baris untuk deskripsi */
            -webkit-box-orient: vertical;
        }

        .bg-primary {
            background-color: #9425FE !important;
        }

        /* .card-challenge .card .btn {
                                                                                                                                                align-self: stretch;
                                                                                                                                                } */

        p,
        h1,
        h2,
        h3,
        h4,
        h5 {
            padding: 0;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Absensi</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Absensi Siswa Kelas Industri</a>
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

    <div class="d-flex justify-content-between mt-2">
        <div class="d-flex gap-3">
            <form action="" class="position-relative d-flex">
                <input type="text" class="form-control product-search px-4 ps-5" name="title"
                    value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                    placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
        </div>

        <a href="{{ route('mentor.challenge.create') }}" class="btn btn-primary rounded-2 bg-primary border-0"><i
                class="ti ti-plus"></i> Buat Absensi</a>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Daftar Absensi</h5>
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr class="">
                            <th class="fs-4 fw-semibold mb-0">No</th>
                            <th class="fs-4 fw-semibold mb-0">Nama Sekolah</th>
                            <th class="fs-4 fw-semibold mb-0">Tanggal</th>
                            <th class="fs-4 fw-semibold mb-0">Status</th>
                            <th class="fs-4 fw-semibold mb-0">Link</th>
                            <th class="fs-4 fw-semibold mb-0">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                    </tbody>
                </table>
            </div>
            <nav id="pagination_list_student"></nav>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
@endsection

@section('script')
    <script>
        const data = [{
            school: {
                name: "XII RPL 1 - SMKN 1 Kepanjen"
            },
            date: "10 Januari 2023",
            status: "Dibuka",
            link: "asdfsadfasdf",
        }]
        $.each(data, function(index, value) {
            $('#tableBody').append(studentClassroom(index,
                value));
        });

        function studentClassroom(index, value) {
            return `
                <tr class="fw-semibold">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">${index + 1}</h6>
                            </div>
                        </div>
                    </td>
                    <td>${value.school.name}</td>
                    <td>${value.date}</td>
                    <td>
                        <span class="badge text-bg-light-success text-success">${value.status}</span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-light" style="color: grey;" data-bs-toggle="modal"x``
                            data-bs-target="#modal-detail-student" data-url="${value.link}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-copy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path
                                    d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                            </svg>
                        </button>
                    </td>
                    <td>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm text-white" data-bs-toggle="modal"
                                data-bs-target="#modal-detail-student" style="background-color: #9425FE">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path d="M3 13c3.6-8 14.4-8 18 0" />
                                        <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                    </g>
                                </svg>
                            </button>
                            <button class="btn btn-sm btn-danger text-white" data-bs-toggle="modal"
                                data-bs-target="#modal-detail-student">
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
                            </button>
                            <button class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#modal-detail-student">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            `
        }
    </script>
@endsection
