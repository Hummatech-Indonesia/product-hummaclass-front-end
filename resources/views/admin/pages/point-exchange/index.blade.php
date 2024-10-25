@extends('admin.layouts.app')

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h5 class="fw-semibold mb-8">Penukaran Poin</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="javascript:void(0)">Daftar  barang yang dapat ditukarkan dengan poin hummaclass</a>
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

<div>
    <form action="" class="d-flex gap-3 mb-3">
        <div class="position-relative">
            <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" style="color: #8B8B8B"></i>
        </div>
        <div class="position-relative">
            <input type="text" class="form-control product-search px-1 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-filter" placeholder="Terbaru">
            <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M32 144h448M112 256h288M208 368h96" />
            </svg>
        </div>
    </form>
</div>

<div class="card p-3">
    <h5 class="fw-semibold">Daftar Barang</h5>

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
<x-delete-modal-component />
@endsection

@section('script')
    @include('admin.pages.point-exchange.scripts.index')
@endsection