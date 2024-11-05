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
        <h4 class="fw-semibold mt-3">Edit Barang</h4>
        <hr class="border border-1 border-secondary mb-4">
        <form id="editFormRewards" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="name" class="mb-2 fw-semibold text-dark">Nama Barang</label>
                        <input type="text" class="form-control" id="edit-name" placeholder="Masukkan nama barang" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="image" class="mb-2 fw-semibold text-dark">Foto Barang</label>
                        <input type="file" class="form-control" id="edit-image" name="image" value="{{ old('image') }}">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="stock" class="mb-2 fw-semibold text-dark">Stok</label>
                        <input type="number" class="form-control" id="edit-stock" placeholder="Masukkan jumlah stok" name="stock"
                            value="{{ old('stock') }}">
                        @error('stock')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="points_required" class="mb-2 fw-semibold text-dark">Jumlah Point</label>
                        <input type="number" class="form-control" placeholder="Masukkan jumlah point"
                            name="points_required" id="edit-points_required" value="{{ old('points_required') }}">
                        @error('points_required')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="description" class="mb-2 fw-semibold text-dark">Deskripsi</label>
                        <textarea name="description" class="form-control edit-description" id="summernote-description" cols="30" rows="10">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end gap-2">
                <a href="" class="btn" style="background-color:#FA896B; color : white">Kembali</a>
                <button type="submit" class="btn" style="background-color:   #9425FE; color : white">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    @include('admin.pages.point-exchange.scripts.edit')
@endsection