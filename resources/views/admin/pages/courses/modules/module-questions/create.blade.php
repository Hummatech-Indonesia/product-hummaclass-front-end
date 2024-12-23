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
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 style="font-weight: bold;">Tambah Soal</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <label for="question" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Soal</label>
            <textarea name="question" id="question" cols="15" rows="5" class="form-control summernote"></textarea>
            <div class="row my-3">
                <div class="col-6">
                    <label for="option_a" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                        A</label>
                    <textarea name="option_a" id="option_a" cols="15" rows="5" class="form-control summernote"></textarea>
                </div>
                <div class="col-6">
                    <label for="option_b" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                        B</label>
                    <textarea name="option_b" id="option_b" cols="15" rows="5" class="form-control summernote"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="option_c" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                        D</label>
                    <textarea name="option_c" id="option_c" cols="15" rows="5" class="form-control summernote"></textarea>
                </div>
                <div class="col-6">
                    <label for="option_d" class="form-label" style="font-weight: bold; font-size: 1.3rem;">Pilihan
                        E</label>
                    <textarea name="option_d" id="option_d" cols="15" rows="5" class="form-control summernote"></textarea>
                </div>
            </div>
        </div>

    </div>

    <div class="card">
        <div class="card-body">
            <h3 style="font-weight: bold;" class="mb-3">Pilih Kunci Jawaban</h3>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer" id="answer1" value="option_a" checked>
                <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                    Jawaban A
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer" id="answer2" value="option_b">
                <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                    Jawaban B
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer" id="answer3" value="option_c">
                <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                    Jawaban C
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer" id="answer4" value="option_d">
                <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                    Jawaban D
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="answer5" value="option_e">
                <label class="form-check-label text-dark" style="font-weight: bold;" for="answer">
                    Jawaban E
                </label>
            </div>
        </div>
    </div>
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
@endsection
