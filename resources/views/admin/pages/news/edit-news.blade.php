@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Berita</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Daftar berita pada hummalass</a>
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

    <div class="card p-3">
        <h5 class="fw-semibold">Edit Berita</h5>
        <hr>
        <form action="" id="update-module-form" enctype="multipart/form-data">
            <div class="row">
                <img src="" id="thumbnail" style="width: 30%; border-radius:15%" srcset="">
                <div class="col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Thumbnail</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukan judul">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-6 mb-3">
                    <label for="" class="fw-semibold form-label">Kategori</label>
                    <select name="" id="category_id" class="form-select">
                        <option value="">Pilih Kategori</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-6 mb-3">
                    <label for="" class="fw-semibold form-label">Sub Kategori</label>
                    <select name="sub_category_id" id="sub_category_id" class="form-select">
                        <option value="">Pilih Sub Kategori</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Deskripsi</label>
                    <textarea name="description" id="summernote-description" cols="30" rows="10"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="text-end">
                <a href="{{ route('admin.news.index') }}" class="btn text-white me-2"
                    style="background-color: #DB0909">Batal</a>
                <button type="submit" class="btn text-white"
                    style="background-color: var(--purple-primary)">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    @include('admin.pages.news.scripts.edit-news')
@endsection
