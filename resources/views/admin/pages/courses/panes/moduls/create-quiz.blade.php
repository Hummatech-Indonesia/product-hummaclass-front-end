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

        .invalid-feedback {
            display: block;
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
                                <a class="text-muted" href="javascript:void(0)">Modul - Belajar Dasar Pemograman Web</a>
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

    <form id="question-bank">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <label for="question" class="form-label" style="font-weight: bold;">Soal</label>
                    <textarea name="question" id="question" class="form-control summernote @error('question') is-invalid @enderror"></textarea>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="row my-3">
                    <div class="col col-12">
                        <label for="option_a" class="form-label" style="font-weight: bold;">Pilihan A</label>
                        <textarea name="option_a" id="option_a" class="form-control summernote @error('option_a') is-invalid @enderror"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col col-6">
                        <label for="option_b" class="form-label" style="font-weight: bold;">Pilihan B</label>
                        <textarea name="option_b" id="option_b" class="form-control summernote @error('option_b') is-invalid @enderror"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="option_c" class="form-label" style="font-weight: bold;">Pilihan C</label>
                        <textarea name="option_c" id="option_c" class="form-control summernote @error('option_c') is-invalid @enderror"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-6">
                        <label for="option_d" class="form-label" style="font-weight: bold;">Pilihan D</label>
                        <textarea name="option_d" id="option_d" class="form-control summernote @error('option_d') is-invalid @enderror"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="option_e" class="form-label" style="font-weight: bold;">Pilihan E</label>
                        <textarea name="option_e" id="option_e" class="form-control summernote @error('option_e') is-invalid @enderror"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 style="font-weight: bold;" class="mb-3">Pilih Kunci Jawaban</h5>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_a" checked>
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">Jawaban A</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_b">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">Jawaban B</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_c">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">Jawaban C</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_d">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">Jawaban D</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="option_e">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">Jawaban E</label>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-warning me-2 back">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            $('.back').click(function(e) {
                e.preventDefault();
                window.location.href = "/admin/modules/" + id;
            });

            $(".summernote").summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
            });
        });

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
                    if (response.status === 422) {
                        let errors = response.responseJSON.data;

                        // Reset invalid state before adding new errors
                        $('#question-bank').find('.is-invalid').removeClass('is-invalid');
                        $('#question-bank').find('.invalid-feedback').text('');

                        $.each(errors, function(field, messages) {
                            $(`[name="${field}"]`).addClass('is-invalid');
                            $(`[name="${field}"]`).closest('.col').find('.invalid-feedback')
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
