@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Sub Modul</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar pengguna yang sudah membeli kursus</a>
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


    <div class="card">
        <div class="card-header bg-white border-bottom">
            <h5 class="mb-0">Tambah Kursus</h5>
        </div>
        <div class="card-body">
            <form action="#">
                <div class="row">
                    <div class="col col-md-6">
                        <label for="" class="form-label">Status</label>
                        <select name="is_premium" id="" class="form-select">
                            <option value="1">Premium</option>
                            <option value="0">Gratis</option>
                        </select>
                    </div>
                    <div class="col col-md-6">
                        <label for="" class="form-label">Harga</label>
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col col-md-12">
                        <label for="" class="form-label">Status</label>
                        <select name="sub_category" id="" class="form-select">
                            <option value="1">Kategori 1</option>
                            <option value="0">Kategori 2</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea id="summernote" name="editordata"></textarea>
                </div>
                <div class="form-actions mt-3">
                    <div class="text-end">
                        <button type="submit" class="btn btn-light-primary text-primary font-medium">
                            Tambah
                        </button>
                        <button type="reset" class="btn btn-light-danger text-danger font-medium">
                            Kembali
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();  
        });
    </script>
@endsection
