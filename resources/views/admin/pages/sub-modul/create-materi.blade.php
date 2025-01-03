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
                    <div id="editorjs" style="background-color: rgba(236, 236, 236, 0.735); border-radius:5px;"
                        class="mb-5"></div>
                    <input type="hidden" name="content" id="editorContent"> <!-- Hidden input for editor content -->
                    <div class="invalid-feedback"></div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-danger px-4 back">Batal</button>
                    <button type="submit" class="btn text-white px-4"
                        style="background-color: var(--purple-primary)">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.pages.courses.scripts.index')
    <script>
        var moduleId = "{{ $id }}";
        $('.back').click(function(e) {
            e.preventDefault();
            window.location.href = "/admin/modules/" + moduleId;
        });
        $('#create-sub-modul-form').submit(function(e) {
            e.preventDefault();

            editor.save().then((outputData) => {
                document.getElementById('editorContent').value = JSON.stringify(outputData);

                var id = "{{ $id }}";
                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/sub-modules/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.meta.message,
                            icon: "success"
                        }).then(() => {
                            window.location.href = "/admin/modules/" + response.data
                                .module_id;
                        });
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.data;
                            $('.is-invalid').removeClass('is-invalid');
                            $('.invalid-feedback').text('');

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
            }).catch((error) => {
            });
        });

        function addImageToEditor(imageUrl) {
            editor.blocks.insert('image', {
                file: {
                    url: imageUrl
                }
            });
        }

        function uploadImage(file) {
            const formData = new FormData();
            formData.append('image', file);

            $.ajax({
                type: 'POST',
                url: "{{ config('app.api_url') }}/upload-image",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {

                        addImageToEditor(response.file.url);
                    }
                },
                error: function() {
                    // Tangani kesalahan unggah
                }
            });
        }
    </script>
@endsection
