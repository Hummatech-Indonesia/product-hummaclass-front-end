@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .icon {
            transition: transform 0.3s ease;
        }

        .toggle-btn[aria-expanded="true"] .icon {
            transform: rotate(180deg);
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Syarat & Ketentuan</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Pengaturan syarat dan ketentuan di getskill</a>
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

    <form action="#" enctype="multipart/form-data" id="update-form">
        <div class="card">
            <div class="card-header bg-white border-bottom">
                <h5 class="mb-0">Info</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label for="term_condition" class="form-label">Syarat dan ketentuan</label>
                        <textarea name="term_condition" id="term_condition" class="update-form" cols="30" rows="10"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        $('#term_condition').summernote({
            height: 200
        });
    </script>
    <script>
        $(document).ready(function() {

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/term-condition",
                dataType: "json",
                success: function(response) {
                    $('#term_condition').summernote('code', response.data.term_condition);
                },
                error: function(xhr) {
                    console.log(xhr);
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data modul.",
                        icon: "error"
                    });
                }
            });

            $('#update-form').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/term-condition?_method=PATCH",
                    data: new FormData(this),
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil mengubah data.",
                            icon: "success"
                        });
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.data;

                            $('.update-form .is-invalid').removeClass('is-invalid');
                            $('.update-form .invalid-feedback').text('');

                            $.each(errors, function(field, messages) {
                                $(`[name="${field}"]`).addClass('is-invalid');
                                $(`[name="${field}"]`).closest('.form-group').find(
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


        });
    </script>
@endsection