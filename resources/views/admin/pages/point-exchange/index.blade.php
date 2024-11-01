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

    <div class="mb-3 d-flex justify-content-between">
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
        <div>
            <a href="{{ route('admin.create-point-exchange.index') }}" class="btn text-white" style="background-color: #9425FE;">Tambahkan Barang</a>
        </div>
    </div>

    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="fw-semibold">Daftar Barang</h5>
        </div>

        <div class="table-responsive rounded-2 mb-4 mt-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr class="">
                        <th class="fs-4 fw-semibold mb-0">No</th>
                        <th class="fs-4 fw-semibold mb-0">Nama Barang</th>
                        <th class="fs-4 fw-semibold mb-0">Stok</th>
                        <th class="fs-4 fw-semibold mb-0">Jumlah Poin</th>
                        <th class="fs-4 fw-semibold mb-0">Aksi</th>
                    </tr>
                </thead>
                <tbody id="list-point-exchange">
                    
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            <nav id="pagination">

            </nav>
        </div>
    </div>

    <x-edit-reward-modal></x-edit-reward-modal>
    <x-detail-reward-modal></x-detail-reward-modal>
    <x-create-reward-modal />
    <x-delete-modal-component />
@endsection

@section('script')
    @include('admin.pages.point-exchange.scripts.index')
    @include('admin.pages.point-exchange.scripts.create')
    @include('admin.pages.point-exchange.scripts.edit')
    @include('admin.pages.point-exchange.scripts.detail')
@endsection
