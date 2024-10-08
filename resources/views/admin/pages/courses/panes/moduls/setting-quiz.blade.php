@extends('admin.layouts.app')
@section('style')
    <style>
        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: #7209DB !important;
        }

        .nav-link.active {
            background-color: #7209DB !important;
        }

        .text-primary {
            color: #7209DB !important;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tambah Soal</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Modul - Belajar Dasar Pemograman Web</a>
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

    <form id="create-quiz-form" action="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="" class="form-label fw-semibold text-dark">Jumlah Soal</label>
                            <input id="total_question" type="text" class="form-control" placeholder="Masukan jumlah soal"
                                name="total_question">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col col-lg-6 mb-3">
                        <div class=" form-group">
                            <label for="" class="form-label fw-semibold text-dark">Durasi Pengerjaan</label>
                            <input type="text" id="duration" class="form-control"
                                placeholder="Masukan durasi pengerjaan" name="duration">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col col-lg-6 mb-3">
                        <div class=" form-group">
                            <label for="" class="form-label fw-semibold text-dark">Nilai Minimal</label>
                            <input type="number" id="minimum_score" class="form-control"
                                placeholder="Masukkan nilai minimal" name="minimum_score">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col col-lg-6 mb-3">
                        <div class=" form-group">
                            <label for="" class="form-label fw-semibold text-dark">Waktu tunggu remedial <small
                                    class="">(menit)</small></label>
                            <input type="text" id="retry_delay" class="form-control required"
                                placeholder="Masukan waktu tunggu remedial (menit)" name="retry_delay">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <h6>Pengumpulan Kuis</h6>
                        <div class=" form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Fitur Pengumpulan</label>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="d-flex mt-3 gap-2">
                        <div class="mt-1">
                            <span class="text-white py-1 px-1 d-flex align-items-center"
                                style="background-color: #7209DB;border-radius:9px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="m8.93 6.588l-2.29.287l-.082.38l.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319c.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246c-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0a1 1 0 0 1 2 0">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p>Aktifkan menu diatas untuk fitur siswa hanya bisa mengumpulkan 5 menit sebelum durasi
                                pengerjaan berakhir</p>
                        </div>
                    </div>
                    <div>
                        <h3 class="fw-bolder">Aturan Kuis</h3>
                        <textarea name="rules" id="" cols="30" rows="10" class="summernote"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.modules.show', $id) }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary shadow-none">Tambah</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".summernote").summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
            });
            var id = "{{ $id }}";

            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/modules/detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $.ajax({
                        type: "get",
                        url: "{{ config('app.api_url') }}/api/quizzes/" + response.data.slug,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            for (const key in response.data) {
                                if (key == 'rules') {
                                    $('.summernote').val(response.data[key]).trigger('summernote.change');
                                }
                                $(`input[name='${key}']`).val(response.data[key]);
                            }
                        }
                    });

                }
            });

            $('#create-quiz-form').submit(function(e) {
                e.preventDefault();
                console.log(id);

                var formData = new FormData(this);

                console.log(formData);

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/quizzes/" + id,
                    data: formData,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil menambah data.",
                            icon: "success"
                        }).then(() => {
                            $('#settings-quiz').modal('hide');
                            $('#create-quiz-form')[0].reset();
                            $('.is-invalid').removeClass('is-invalid');
                            $('.invalid-feedback').text('');
                            window.location.href =
                                "{{ route('admin.modules.show', $id) }}";
                        });
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
        });
    </script>
    {{-- <script>
        $('#question-bank').submit(function(e) {
            e.preventDefault();

            var id = "{{ $id }}";
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/module-questions/" + id,
                data: formData,
                dataType: "json",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menambah data.",
                        icon: "success"
                    }).then(() => {
                        // Reset Summernote editor
                        $('#question').summernote('reset');
                        $('#option_a').summernote('reset');
                        $('#option_b').summernote('reset');
                        $('#option_c').summernote('reset');
                        $('#option_d').summernote('reset');
                        $('#option_e').summernote('reset');

                        // Reset other form fields
                        $('#question-bank').find('input[type="radio"]').prop('checked', false);
                        $('#question-bank').find('input[type="radio"]').first().prop('checked',
                            true);
                    });
                },
                error: function(response) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menyimpan data.",
                        icon: "error"
                    });
                }
            });
        });
    </script> --}}
@endsection
