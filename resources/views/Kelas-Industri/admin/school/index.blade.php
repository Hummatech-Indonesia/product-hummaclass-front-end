@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }
    </style>
    <style>
        .card-body {
            position: relative;
            padding: 20px;
        }

        .card .badge {
            font-size: 0.85rem;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #F6EEFE;
            color: #9425FE;
        }

        .menu-icon {
            position: absolute;
            right: 10%;
            font-size: 1.2rem;
            color: #6c757d;
            cursor: pointer;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            font-size: 0.95rem;
            color: #666;
        }

        .detail-button {
            background-color: #7209DB;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 10px 0;
            width: 100%;
            font-weight: 500;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Daftar Sekolah</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Sekolah Pada Kelas Industri</a>
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
        <form action="" class="position-relative d-flex">
            <input type="text" class="form-control product-search px-4 ps-5" name="title"
                value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            <a class="ms-3">
                <select name="" id="sub-categories" style="background-color: #fff; width:10rem"
                    class="form-control px-4">
                    <option value="">Kategori</option>
                </select>
            </a>
        </form>
        <a href="{{ route('admin.courses.create') }}" class="btn text-white" style="background-color: #7209DB">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
            </svg>
            Tambah Sekolah
        </a>
    </div>


    <section class="container my-4">
        <div class="row" id="list-card">

        </div>


        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style=" color: white;">
                        <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close fw-bold" data-bs-dismiss="modal"
                            aria-label="Close">X</button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama_sekolah" class="form-label fw-bold">Nama Sekolah</label>
                                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nama_kepala_sekolah" class="form-label fw-bold">Nama Kepala Sekolah</label>
                                    <input type="text" class="form-control" id="nama_kepala_sekolah"
                                        name="nama_kepala_sekolah" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="npsn" class="form-label fw-bold">NPSN</label>
                                    <input type="text" class="form-control" id="npsn" name="npsn" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="nomer_telepon" class="form-label fw-bold">Nomer Telepon</label>
                                    <input type="text" class="form-control" id="nomer_telepon" name="nomer_telepon"
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="logo_sekolah" class="form-label fw-bold">Logo Sekolah</label>
                                    <input type="file" class="form-control" id="logo_sekolah" name="logo_sekolah">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-bold">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn"
                                    style="background-color: #7209DB; color: white;">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
    <x-confirmation-modal-component />
    <x-delete-modal-component />
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            get(1)

            function get(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/schools?page=" + page,
                    headers: {
                        Authorization: 'Bearer {{ session('hummaclass-token') }}'
                    },
                    dataType: "json",
                    data: {
                        name: $('#search-name').val(),
                    },
                    success: function(response) {
                        $('#list-card').empty();

                        if (response.data.data.length > 0) {
                            $.each(response.data.data, function(index, value) {
                                $('#list-card').append(school(index, value));
                            });
                            $('#pagination').html(handlePaginate(response.data.paginate));
                        } else {
                            $('#list-card').append(emptyCard());
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kategori.",
                            icon: "error"
                        });
                    }
                });
            }

            function school(index, value) {
                return `<div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body">
                        <img src="${value.photo}"
                            alt="School Logo" class="img-fluid mb-3 rounded">
                        <div class="text-section d-flex flex-column align-items-start justify-content-center">
                            <div class="dropdown">
                                <span class="menu-icon" title="Actions" data-bs-toggle="dropdown"
                                    aria-expanded="false">&#x22EE;</span>
                                <ul class="dropdown-menu ms-auto">
                                    <li>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item" onclick="confirmDelete()">Hapus</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="text-start bold">${value.name}</h4>
                            <h6 class="text-muted mb-4">${value.description}</h6>

                            <h5 class="card-title bold mb-1">Alamat:</h5>
                            <p class="text-muted text-start">${value.address}</p>
                            <button class="detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>`
            }
        });
    </script>
@endsection
