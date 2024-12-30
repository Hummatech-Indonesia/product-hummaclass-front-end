@extends('user.layouts.app')

@section('style')
    <style>
        :root {
            --tg-theme-primary: #9425FE;
        }

        .form-check-input:checked {
            background-color: #9425FE;
            border-color: #9425FE;
        }

        .form-check-input:disabled {
            background-color: #f6f6f6;
            /* Light background to indicate disabled */
            cursor: not-allowed;
            /* Change cursor to indicate no interaction */
        }

        .form-check-input:disabled:checked {
            background-color: #9C40F7;
            /* Color for checked state */
            border-color: #9C40F7;
            /* Border color for checked state */
        }

        .form-check-input:disabled+.form-check-label {
            color: #6c757d;
            /* Change label color to indicate disabled */
        }

        .fs-5 p {
            display: inline;
            margin: 0;
        }

        .btn-warning {
            user-select: none;
            -moz-user-select: none;
            background: #ffc107 none repeat scroll 0 0;
            border: 1px solid #000;
            color: var(--tg-common-color-white);
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: var(--tg-fw-semi-bold);
            font-family: var(--tg-heading-font-family);
            letter-spacing: 0;
            line-height: 1.12;
            margin-bottom: 0;
            padding: 16px 30px;
            text-align: center;
            text-transform: capitalize;
            touch-action: manipulation;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            vertical-align: middle;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -o-border-radius: 50px;
            -ms-border-radius: 50px;
            border-radius: 10px;
            white-space: nowrap;
            box-shadow: 4px 6px 0px 0px var(--tg-common-color-blue);
            overflow: hidden;
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #9425FE;
        }

        main {
            background-color: #F1F1F1;
        }
    </style>
@endsection

@section('content')
    <div class="lesson__video-wrap mb-0">
        <div class="lesson__video-wrap-top">
            <div class="lesson__video-wrap-top-left">
                <div class="">
                    <span>Ujian - Resolving Conflicts Between Designers And Engineers</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center custom-container mt-3">
        {{-- <div class="row"> --}}
        <div class="col-lg-11 mb-4">
            <div class="card position-relative overflow-hidden border-0"
                style="background: linear-gradient(to right, #9C40F7, #7209DB);border-radius: 15px;">
                <div class="">
                    <div class="row align-items-center">
                        <div class="col-9 text-white ps-5 p-4">
                            <h6 class="text-white">Test Selesai</h6>
                            <h4 class="fw-semibold mb-8 text-white">Selamat anda telah menyelesaikan test</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-white" href="javascript:void(0)">Hasil test anda akan di tampilan di
                                            bawah ini</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n1">
                                <img src="{{ asset('assets/img/book.png') }}" width="500px" alt=""
                                    class="img-fluid mb-n3" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card border-0 " style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                        <div class="p-4">
                            <h5>Hasil Test</h5>
                            <h6 class="mt-3">Tanggal Ujian</h6>
                            <p style="color: #9425FE;">Senin 12 September 2023, <br>
                                12:28:30
                            </p>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="d-flex justify-content-between">
                                        <h6>Jumlah Soal</h6>
                                        <h6>:</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="text-end">
                                        <p><span id="total_question"></span> Soal</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="d-flex justify-content-between">
                                        <h6>Soal Benar</h6>
                                        <h6>:</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="text-end">
                                        <p><span id="total_correct"></span> Soal</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="d-flex justify-content-between">
                                        <h6>Soal Salah</h6>
                                        <h6>:</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="text-end">
                                        <p><span id="total_fault"></span> Soal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center mt-2">
                                <h6>Nilai Ujian</h6>
                                <span class="fw-semibold fs-1" id="score" style="color: #9C40F7;"></span>
                                <div id="status">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <a href="" id="finish" class="w-100 btn-warning">Selesai</a>
                    </div>
                </div>
                <div class="col-lg-9" id="question_quiz">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/course-test-statistic/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    console.log(response.data);
                    $('#total_question').html(response.data.total_question);
                    if (response.data.test_type == "post-test") {
                        $('#finish').attr('href',
                            `{{ url('print-certificate') }}/${response.data.course_slug}/courses`
                        );
                    } else {
                        $('#finish').attr('href',
                            `{{ route('courses.courses.show', '') }}/${response.data.course_slug}`);
                    }
                    $('#score').html(response.data.score);
                    $('#total_correct').html(response.data.total_correct);
                    $('#total_fault').html(response.data.total_fault);
                    $.each(response.data.questions, function(index, value) {
                        $('#question_quiz').append(
                            questionQuiz(index, value)
                        );
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data events.",
                        icon: "error"
                    });
                }
            });

            function questionQuiz(index, value) {
                let check;

                if (value.user_answer !== value.correct_answer) {
                    check = `<div class="text-end">
                                <span class="badge px-3" style="background-color: #FEEEEE; color:#DB0909">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4" />
                                    </svg>
                                    Salah
                                </span>
                            </div>`;
                } else {
                    check = `<div class="text-end">
                                <span class="badge px-3" style="background-color: #F6EEFE; color:#9C40F7">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="15" height="15" viewBox="0 0 256 256">
                                        <path fill="currentColor" d="m229.66 77.66l-128 128a8 8 0 0 1-11.32 0l-56-56a8 8 0 0 1 11.32-11.32L96 188.69L218.34 66.34a8 8 0 0 1 11.32 11.32" />
                                    </svg>
                                    Benar
                                </span>
                            </div>`;
                }

                return `<div class="card border-0 mb-4" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                            <div class="p-4">
                                ${check}
                                <label class="fs-5">
                                    <span style="display: inline;">${index + 1}. ${value.question}</span>
                                </label>
                                <div class="ms-3 mt-3">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" value="option_a" id="option_a_${index}" ${value.user_answer === 'option_a' ? 'checked' : ''} disabled>
                                        <label class="form-check-label" for="option_a_${index}">
                                            ${value.option_a}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" value="option_b" id="option_b_${index}" ${value.user_answer === 'option_b' ? 'checked' : ''} disabled>
                                        <label class="form-check-label" for="option_b_${index}">
                                            ${value.option_b}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" value="option_c" id="option_c_${index}" ${value.user_answer === 'option_c' ? 'checked' : ''} disabled>
                                        <label class="form-check-label" for="option_c_${index}">
                                            ${value.option_c}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" value="option_d" id="option_d_${index}" ${value.user_answer === 'option_d' ? 'checked' : ''} disabled>
                                        <label class="form-check-label" for="option_d_${index}">
                                            ${value.option_d}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" value="option_e" id="option_e_${index}" ${value.user_answer === 'option_e' ? 'checked' : ''} disabled>
                                        <label class="form-check-label" for="option_e_${index}">
                                            ${value.option_e}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            }
        });
    </script>
@endsection
