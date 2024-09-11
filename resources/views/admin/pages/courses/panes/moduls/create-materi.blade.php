@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-default {
            background-color: transparent;
            color: #000000;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tambah Materi</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Detail kursus dan daftar modul pada
                                    kursus</a>
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
        <div class="row">
            <form action="" id="create-sub-modul-form">
                <div class="col col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukan judul">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Sub Judul</label>
                    <input type="text" name="sub_title" class="form-control" placeholder="Masukan sub judul">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Konten</label>
                    <textarea name="content" id="summernote-materi" cols="30" rows="10" class="form-control"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.pages.courses.scripts.index')
    <script>
        $('#create-sub-modul-form').submit(function(e) {
            e.preventDefault();
            var id = "{{ $id }}";
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ env('API_URL') }}/api/sub-modules/" + id,
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    window.location.href = "/admin/courses/";
                },
                error: function(response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.data;
                        $('.is-invalid').removeClass('is-invalid');
                        $('.invalid-feedback').text('');

                        $.each(errors, function(field, messages) {
                            $(`[name="${field}"]`).addClass(
                                'is-invalid');

                            $(`[name="${field}"]`).closest('.col').find(
                                    '.invalid-feedback')
                                .text(messages[0]);
                        });

                    } else {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menyimpan data.",
                            icon: "error"
                        });
                    }
                }
            });
        });
    </script>
@endsection
