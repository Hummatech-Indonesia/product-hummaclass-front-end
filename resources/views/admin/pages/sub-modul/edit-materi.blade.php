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
                    <h5 class="fw-semibold mb-8">Edit Materi</h5>
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
            <form action="" id="edit-sub-modul-form">
                @csrf
                <div class="col col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Judul</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Masukan judul">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Sub Judul</label>
                    <input type="text" name="sub_title" id="sub-title" class="form-control"
                        placeholder="Masukan sub judul">
                    <div class="invalid-feedback"></div>
                </div>
                {{-- <div class="col col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Konten</label>
                    <div id="editorjs" style="background-color: rgba(236, 236, 236, 0.735); border-radius:5px;"
                        class="mb-5"></div>
                    <textarea name="content" id="summernote-materi" cols="30" rows="10" class="form-control"></textarea>
                    <div class="invalid-feedback"></div>
                </div> --}}
                <div class="col col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Konten</label>
                    <div id="editorjs" style="background-color: rgba(236, 236, 236, 0.735); border-radius:5px;"
                        class="mb-5"></div>
                    <input type="hidden" name="content" id="editorContent"> <!-- Hidden input for editor content -->
                    <div class="invalid-feedback"></div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-danger px-4">Batal</button>
                    <button type="submit" class="btn text-white px-4"
                        style="background-color: var(--purple-primary)">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    {{-- @include('admin.pages.courses.scripts.index') --}}

    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";
            var modules;
    
            // Fungsi untuk set nilai ke form
            function setValue(data) {
                console.log(data);
                $('#title').val(data.title);
                $('#sub-title').val(data.sub_title);
                modules = data;
            }
    
            // Mendapatkan data materi
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/sub-modules/" + id + "/edit",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                dataType: "json",
                success: function(response) {
                    setValue(response.data);
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data materi.",
                        icon: "error"
                    });
                }
            });
    
            // Edit form submit
            $('#edit-sub-modul-form').submit(function(e) {
                e.preventDefault();
    
                editor.save().then((outputData) => {
                    $('#editorContent').val(JSON.stringify(outputData));
    
                    var formDataUpdate = new FormData(this);
                    console.log('Title:', formDataUpdate.get('title'));
                    console.log('Sub-title:', formData.get('sub_title'));
                    console.log('content:', formData.get('content'));

    
                    $.ajax({
                        url: "{{ config('app.api_url') }}" + "/api/sub-modules/" + id,
                        headers: {
                            'Authorization': 'Bearer ' + "{{ session('hummaclass-token') }}",
                        },
                        type: 'PATCH',
                        data: formDataUpdate,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses",
                                text: response.meta.title,
                                icon: "success"
                            }).then(function() {
                                window.location.href = "/admin/modules/" + response.data.module_id;
                            });
                        },
                        error: function(error) {
                            let errors = error.responseJSON.data || {};
                            let message = error.responseJSON.meta.message;
                            $('.is-invalid').removeClass('is-invalid');
                            $('.invalid-feedback').addClass('d-none');
    
                            if (errors) {
                                for (let key in errors) {
                                    if (errors.hasOwnProperty(key)) {
                                        let feedback = $(`#${key}`).closest('.col').find('.invalid-feedback');
                                        feedback.text(errors[key]);
                                        feedback.removeClass('d-none');
                                        $(`#${key}`).addClass('is-invalid');
                                    }
                                }
                            } else {
                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    text: message,
                                    icon: "error"
                                });
                            }
                        }
                    });
                }).catch((error) => {
                    console.log('Error saving content:', error);
                });
            });
        });
    </script>
    
@endsection
