@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Footer</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Pengaturan pada footer hummaclass</a>
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
            <h5 class="mb-0">Info</h5>
        </div>
        <div class="card-body">
            <form action="#" enctype="multipart/form-data" id="create-course-form">
                <div class="row">
                    <div class="col col-md-12">
                        <label for="" class="form-label">Logo</label>
                        <input type="file" name="photo" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col col-md-6">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6">
                        <label for="" class="form-label">Nomor Telepon</label>
                        <input type="text" name="phone" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
            </form>
        </div>
        <div class="card-header bg-white border-bottom">
            <h5 class="mb-0">Social Media</h5>
        </div>
        <div class="card-body">
            <div class="position-relative overflow-hidden rounded-2" style="background-color: #E8DEF3;">
                <div class="px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="fw-semibold mb-8" style="color: #9425FE">Informasi</h5>
                            <h5 class="mb-8">bagian social media inputkan link/url social media anda</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-md-6">
                    <label for="" class="form-label">Facebook</label>
                    <input type="text" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-md-6">
                    <label for="" class="form-label">Twitter</label>
                    <input type="text" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-md-6">
                    <label for="" class="form-label">Instagram</label>
                    <input type="text" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-md-6">
                    <label for="" class="form-label">Linkedin</label>
                    <input type="text" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="form-actions mt-4">
                <div class="text-end">
                    <button type="reset" class="btn btn-danger text-white font-medium me-2">
                        Kembali
                    </button>
                    <button type="submit" class="btn text-white font-medium" style="background-color: #9425FE">
                        Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $('#description').summernote({
            height: 200
        });
    </script>
@endpush