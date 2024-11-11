@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .form-container {
            border-radius: 8px;
            padding: 20px;
            background-color: #ffffff;
        }

        .form-container input,
        .form-container textarea,
        .form-container button {
            border-radius: 5px;
        }

        .form-container h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        @media (max-width: 767.98px) {
            .form-container h2 {
                font-size: 1.3rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Daftar Sekolah</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Daftar Sekolah Pada Kelas Industri</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-4 text-center">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <!-- Form Card -->
    <section class="container my-4">
        <div class="card form-container shadow p-4">
            <h2 class="text-start mb-2">Pendaftaran Sekolah</h2>
            <p class="text-start">Registrasi</p>

            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nama_kepala_sekolah" class="form-label">Nama Kepala Sekolah</label>
                        <input type="text" class="form-control" id="nama_kepala_sekolah" name="nama_kepala_sekolah"
                            required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 mb-3">
                        <label for="npsn" class="form-label">NPSN</label>
                        <input type="text" class="form-control" id="npsn" name="npsn" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="nomer_telepon" class="form-label">Nomer Telepon</label>
                        <input type="text" class="form-control" id="nomer_telepon" name="nomer_telepon" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="logo_sekolah" class="form-label">Logo Sekolah</label>
                        <input type="file" class="form-control" id="logo_sekolah" name="logo_sekolah">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn" style="background-color: #7209DB;color: white;">Tambah</button>
                </div>
            </form>
        </div>
    </section>

    @include('components.modernize-card-1')
    <x-confirmation-modal-component />
    <x-delete-modal-component />
@endsection
