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

    <div class="card p-4">
        <h4 class="fw-semibold mt-3">Tambah Barang</h4>
        <hr class="border border-1 border-secondary mb-4">
        <form id="createFormRewards" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col col-12 mb-4">
                    <div class="form-group">
                        <label for="name" class="mb-2 fw-semibold text-dark">Nama Barang</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama barang" name="name"
                            value="{{ old('name') }}">
                        <div class="invalid-feedback"></div>

                    </div>
                </div>
                <div class="col col-12 mb-4">
                    <div class="form-group">
                        <label for="image" class="mb-2 fw-semibold text-dark">Foto Barang</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                        <div class="invalid-feedback"></div>

                    </div>
                </div>
                <div class="col col-md-6 mb-4">
                    <div class="form-group">
                        <label for="stock" class="mb-2 fw-semibold text-dark">Stok</label>
                        <input type="number" class="form-control" placeholder="Masukkan jumlah stok" name="stock"
                            value="{{ old('stock') }}" min="0" step="1">
                        <div class="invalid-feedback"></div>

                    </div>
                </div>
                <div class="col col-md-6 mb-4">
                    <div class="form-group">
                        <label for="points_required" class="mb-2 fw-semibold text-dark">Jumlah Point</label>
                        <input type="number" min="0" step="1" class="form-control"
                            placeholder="Masukkan jumlah point" name="points_required" value="{{ old('points_required') }}">
                        <div class="invalid-feedback"></div>

                    </div>
                </div>
                <div class="col col-12 mb-4">
                    <div class="form-group">
                        <label for="description" class="mb-2 fw-semibold text-dark">Deskripsi</label>
                        <textarea name="description" class="form-control" id="summernote-description" cols="30" rows="10">{{ old('description') }}</textarea>
                        <div class="invalid-feedback"></div>

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('admin.point-exchange.index') }}" class="btn"
                    style="background-color:#FA896B; color : white">Kembali</a>
                <button type="submit" class="btn" style="background-color:   #9425FE; color : white">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    @include('admin.pages.point-exchange.scripts.create')
@endsection
