@extends('admin.layouts.app')

@section('style')
    <style>
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
    </style>
@endsection

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h5 class="fw-semibold mb-8">Penukaran Poin</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="javascript:void(0)">Daftar barang yang dapat ditukarkan dengan
                                poin hummaclass</a>
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

<div class="mb-3 d-flex">
    <form action="" class="d-flex gap-3">
        <div class="position-relative">
            <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff"
                name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                style="color: #8B8B8B"></i>
        </div>
        <div class="position-relative">
            <input type="text" class="form-control product-search px-1 ps-5" style="background-color: #fff"
                name="name" value="{{ old('name', request('name')) }}" id="input-filter" placeholder="Terbaru">
            <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                    d="M32 144h448M112 256h288M208 368h96" />
            </svg>
        </div>
    </form>
</div>

<div class="card card-body">
    <h5 class="fw-semibold">Konfirmasi Penukaran</h5>
    <div class="table-responsive rounded-2 mb-4 mt-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr class="">
                    <th class="fs-4 fw-semibold mb-0">Penukar</th>
                    <th class="fs-4 fw-semibold mb-0">Barang Ditukar</th>
                    <th class="fs-4 fw-semibold mb-0">Jumlah</th>
                    <th class="fs-4 fw-semibold mb-0">Harga Poin</th>
                    <th class="fs-4 fw-semibold mb-0 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody id="confirmation-point-content">
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="http://127.0.0.1:9000/admin/dist/images/profile/user-1.jpg" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40" height="40" alt="">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">guest</h6>
                                <span class="fw-normal">guest@gmail.com</span>
                            </div>
                        </div>
                    </td>
                    <td>Kenapa ayam menyebrang?</td>
                    <td>1x</td>
                    <td>1.000 Point</td>
                    <td class="d-flex justify-content-center">
                        <div class="d-flex gap-3">
                            <button data-id="${value.id}" data-name="${value.name}" data-stock="${value.stock}" data-points_required="${value.points_required}" data-image="${value.image}" data-description="${value.description}" data-bs-toggle="modal"
                            data-bs-target="#modal-detail-confirmation-point" class="btn px-2 text-white detailReward" style="background-color: #9425FE">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M3 13c3.6-8 14.4-8 18 0" />
                                        <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                    </g>
                                </svg>
                            </button>
                            <button class="btn btn-success">terima</button>
                            <button class="btn btn-danger">terima</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@include('admin.pages.point-exchange.widgets.modal-detail-confirmation-point-exchange')
@endsection

@section('script')
    @include('admin.pages.point-exchange.scripts.confirmation-exchange')
@endsection