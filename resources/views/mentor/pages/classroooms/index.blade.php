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
                    <h5 class="fw-semibold mb-8">Daftar Kelas</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Kelas Anda pada kelas industri</a>
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
    </div>

    <div class="row row-cols-4 mt-4" id="list-card">
        <div class="col">
            <div class="card rounded-4 shadow">
                <div class="card-header bg-transparent px-3 pb-4">
                    <div class="row align-items-center">
                        <div class="col-7 d-flex flex-column justify-content-center">
                            <h4 class="fw-bold p-0">XII DKV 2</h4>
                            <p class="fs-2 m-0">SMKN 1 KEPANJEN</p>
                        </div>
                        <div class="col-5">
                            <span class="badge rounded-pill badge text-bg-purple">Negeri</span>
                        </div>
                    </div>
                </div>
                <div class="card-body px-3 pt-0 pb-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle">
                        </div>
                        <div class="col p-0">
                            <h6 class="card-title fs-3 fw-semibold text-muted">Wali Kelas</h6>
                            <p class="card-text fs-2 text-muted">Suyadi Oke Joss Sp.d</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary bg-primary rounded-2 w-100 mt-3 mb-1">Lihat Kelas</a>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
@endsection

@section('script')
@endsection