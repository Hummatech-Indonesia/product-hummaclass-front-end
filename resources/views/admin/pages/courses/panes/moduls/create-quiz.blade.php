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

    <form id="question-bank">
        <div class="card">
            <div class="card-body">
                <label for="question" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Soal</label>
                <textarea name="question" id="question" class="form-control summernote"></textarea>
                <div class="row my-3">
                    <div class="col-12">
                        <label for="option_a" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                            A</label>
                        <textarea name="option_a" id="option_a" class="form-control summernote"></textarea>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6">
                        <label for="option_b" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                            B</label>
                        <textarea name="option_b" id="option_b" class="form-control summernote"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="option_c" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                            C</label>
                        <textarea name="option_c" id="option_c" class="form-control summernote"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="option_d" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                            D</label>
                        <textarea name="option_d" id="option_d" class="form-control summernote"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="option_e" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                            E</label>
                        <textarea name="option_e" id="option_e" class="form-control summernote"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 style="font-weight: bold;" class="mb-3">Pilih Kunci Jawaban</h3>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_a" checked>
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                        Jawaban A
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_b">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                        Jawaban B
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_c">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                        Jawaban C
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="answer" value="option_d">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                        Jawaban D
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="option_e">
                    <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                        Jawaban E
                    </label>
                </div>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-warning me-2">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
        });
    </script>
    <script>
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
    </script>
@endsection
