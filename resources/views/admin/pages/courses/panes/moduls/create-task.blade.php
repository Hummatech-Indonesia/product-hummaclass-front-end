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
                    <h5 class="fw-semibold mb-8">Tambah Tugas</h5>
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
        <form id="form-create-task">
            <div class="row">
                <div class="col-10 mb-3">
                    <label for="" class="fw-semibold form-label">Judul</label>
                    <input type="text" name="question" class="form-control" placeholder="Masukan judul">
                </div>
                <div class="col-2 mb-3">
                    <label for="" class="fw-semibold form-label">Point</label>
                    <input type="number" name="point" class="form-control" placeholder="Masukan Point">
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Deskripsi</label>
                    <textarea name="description" id="summernote-task" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-warning me-2">Kembali</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    @include('admin.pages.courses.scripts.index')
    <script>
        $('#form-create-task').submit(function(e) {
            var id = "{{ $id }}";
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/module-tasks/" + id,
                headers: {
                    'Authorization': `Bearer {{ session('hummaclass-token') }}`
                },
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    window.location.href = "/admin/modules/" + id;
                },
                error: function(response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.data;
                        $.each(errors, function(field, messages) {
                            $(`[name="${field}"]`).addClass('is-invalid');

                            $(`[name="${field}"]`).closest('.col').find(
                                '.invalid-feedback').text(messages[0]);
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
