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
                    <h5 class="fw-semibold mb-8">Edit Tugas</h5>
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
        <form id="form-edit-task">
            <div class="row">
                <div class="col-10 mb-3">
                    <label for="" class="fw-semibold form-label">Judul</label>
                    <input type="text" name="question" id="question" class="form-control" placeholder="Masukan judul">
                </div>
                <div class="col-2 mb-3">
                    <label for="" class="fw-semibold form-label">Point</label>
                    <input type="number" name="point" id="point" class="form-control" placeholder="Masukan Point">
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Deskripsi</label>
                    <textarea name="description" id="summernote-task" cols="30" rows="10" class="form-control description"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="javascript:void(0);" onclick="window.history.back();" class="btn btn-warning me-2">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            var moduleTasks;
            $('#summernote-task').summernote({
                height: 300
            });


            function setValue(data) {

                $('#question').val(data.question);
                $('#point').val(data.point);
                // $('.description').html(data.description); // Menggunakan .html() jika description berisi HTML
                $('#summernote-task').summernote('code', data.description);
                moduleTasks = data;
            }

            // get task
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/module-tasks-detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {

                    $.ajax({
                        type: "get",
                        url: "{{ config('app.api_url') }}/api/module-tasks-detail/" + response
                            .data.id,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            setValue(response.data);
                        }
                    });
                }
            });

            $('#form-edit-task').submit(function(e) {
                e.preventDefault();

                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value; // Menggunakan field.name
                });

                $.ajax({
                    url: "{{ config('app.api_url') }}" + "/api/module-tasks/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    type: 'PUT',
                    data: formData,
                    success: function(response) {

                        Swal.fire({
                            title: "Success",
                            text: response.meta.title,
                            icon: "success"
                        }).then(function() {
                            // window.location.href = "/admin/modules/";
                        });
                    },
                    error: function(error) {
                        let errors = error.responseJSON.data || {};
                        let message = error.responseJSON.meta.message;
                        if (errors) {
                            for (let key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    if (key === 'description') {
                                        let feedback = $(`.invalid-feedback`).closest(
                                            `.${key}`);
                                        feedback.text(errors[key]);
                                        feedback.removeClass('d-none');
                                    } else {
                                        $(`#${key}`).addClass('is-invalid')
                                            .closest('.invalid-feedback').text(errors[key]);
                                    }
                                }
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
