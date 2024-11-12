@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Daftar Kursus</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Daftar pengguna yang sudah membeli kursus</a>
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
            <a class="ms-3">
                <select name="" id="status" style="background-color: #fff; width:10rem" class="form-control px-4">
                    <option value="">Status</option>
                    <option value="1">Siap Ditampilkan</option>
                    <option value="0">Belum Siap Ditampilkan</option>
                </select>
            </a>
        </form>
        <a href="{{ route('admin.courses.create') }}" class="btn text-white" style="background-color: #7209DB">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
            </svg>
            Tambah
        </a>
    </div>

    <style>
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
    </style>


    <div class="info-card mt-3 mb-5">
        <div class="d-flex align-items-center mb-2">
            <div class="info-icon">
                <i class="bi bi-info-lg">!</i>
            </div>
            <div class="info-header">Informasi</div>
        </div>
        <ul class="mb-0">
            <li>Pastikan kursus yang anda akan tambahkan sudah sesuai dan benar, sebelum menekan tombol checklis</li>
            <li>Ketika sudah menconfirm checklis kursus tidak dapat di edit</li>
        </ul>
    </div>
    <div class="row mt-4" id="list-card">
    </div>
    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
    @include('components.modernize-card-1')
    <x-confirmation-modal-component />
    <x-delete-modal-component />
@endsection

@section('script')
@endsection
