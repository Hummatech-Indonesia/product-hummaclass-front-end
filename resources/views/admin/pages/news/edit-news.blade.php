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
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt="" class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card p-3">
    <h5 class="fw-semibold">Edit Berita</h5>
    <hr>
    <form action="" id="create-module-form">
        <div class="row">
            <div class="col-12 mb-3">
                <label for="" class="fw-semibold form-label">Thumbnail</label>
                <input type="file" class="form-control" id="title" name="title">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="" class="fw-semibold form-label">Judul Berita</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukan judul">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="" class="fw-semibold form-label">Kategori</label>
                <select name="" id="" class="form-select">
                    <option value="">kategori 1</option>
                    <option value="">kategori 2</option>
                </select>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-12 mb-3">
                <label for="" class="fw-semibold form-label">Deskripsi</label>
                <textarea name="" id="summernote-description" cols="30" rows="10"></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="text-end">
            <button type="submit" class="btn text-white me-2" style="background-color: #DB0909">Batal</button>
            <button type="submit" class="btn text-white" style="background-color: var(--purple-primary)">Tambah</button>
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#summernote-description').summernote({
            height: 200
        });
    });

</script>
@endsection
