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
            <select name="status" class="form-select" id="" style="background-color: #fff">
                <option value="">Pilih Status</option>
                <option value="pending">Pending</option>
                <option value="rejected">Ditolak</option>
                <option value="success">Diterima</option>
            </select>
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
                    <th class="fs-4 fw-semibold mb-0 text-center">Status</th>
                    <th class="fs-4 fw-semibold mb-0">Aksi</th>
                </tr>
            </thead>
            <tbody id="confirmation-point-content">
                
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end">
        <nav id="pagination">

        </nav>
    </div>
</div>

@include('admin.pages.point-exchange.widgets.modal-detail-confirmation-point-exchange')
@include('admin.pages.point-exchange.widgets.modal-reject-confirmation')
@endsection

@section('script')
    @include('admin.pages.point-exchange.scripts.confirmation-exchange')
    @include('admin.pages.point-exchange.scripts.detail-confirmation-exchange')
    @include('admin.pages.point-exchange.scripts.approve-confirmation-exchange')
    @include('admin.pages.point-exchange.scripts.reject-confirmation-exchange')
@endsection