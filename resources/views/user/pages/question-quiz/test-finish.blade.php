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

    .btn {
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

    body {
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
    <div class="col-lg-10 mb-4">
        <div class="card position-relative overflow-hidden border-0" style="background: linear-gradient(to right, #9C40F7, #7209DB);border-radius: 15px;">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-9 text-white ps-5 p-4">
                        <h6 class="text-white">Test Selesai</h6>
                        <h4 class="fw-semibold mb-8 text-white">Selamat anda telah menyelesaikan test</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="javascript:void(0)">Hasil test anda akan di tampilan di bawah ini</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n1">
                            <img src="{{ asset('assets/img/book.png') }}" width="500px" alt="" class="img-fluid mb-n3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card mt-3 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
            <div class="card-header" style="background-color: #9C40F7">
                <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-white">
                        Hasil Test
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="p-4" style="border-radius: 50%;background-color: #F6EEFE;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #9C40F7" width="50" height="50" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7L10 17l-5-5" /></svg>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2 mb-3">
                    <h4 class="fw-semibold">Test Selesai</h4>
                </div>
                <div class="px-5 mx-5 d-none d-lg-block">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="d-flex justify-content-between">
                                <p class="fw-semibold text-dark">Mulai Mengerjakan</p>
                                <p class="fw-semibold text-dark">:</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <p>Senin 12 September 2023, 12:28:30</p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="d-flex justify-content-between">
                                <p class="fw-semibold text-dark">Selesai Mengerjakan</p>
                                <p class="fw-semibold text-dark">:</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <p>Senin 12 September 2023, 12:28:30</p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="d-flex justify-content-between">
                                <p class="fw-semibold text-dark">Total Soal</p>
                                <p class="fw-semibold text-dark">:</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <p>30</p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="d-flex justify-content-between">
                                <p class="fw-semibold text-dark">Total Nilai</p>
                                <p class="fw-semibold text-dark">:</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <p>80</p>
                        </div>
                    </div>
                </div>
                <div class="row d-lg-none">
                    <div class="col-6 mb-3">
                        <div class="d-flex justify-content-between">
                            <p class="fw-semibold text-dark">Mulai Mengerjakan</p>
                            <p class="fw-semibold text-dark">:</p>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <p>Senin 12 September 2023, 12:28:30</p>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex justify-content-between">
                            <p class="fw-semibold text-dark">Selesai Mengerjakan</p>
                            <p class="fw-semibold text-dark">:</p>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <p>Senin 12 September 2023, 12:28:30</p>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex justify-content-between">
                            <p class="fw-semibold text-dark">Total Soal</p>
                            <p class="fw-semibold text-dark">:</p>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <p>30</p>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex justify-content-between">
                            <p class="fw-semibold text-dark">Total Nilai</p>
                            <p class="fw-semibold text-dark">:</p>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <p>80</p>
                    </div>
                </div>

            </div>
        </div> --}}
        <div class="row mt-4">
            <div class="col-lg-3">
                <div class="card border-0 " style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                    <div class="p-4">
                        <h5>Hasil Test</h5>
                        <h6 class="mt-3">Tanggal Ujian</h6>
                        <p class="text-dark">Senin 12 September 2023, <br>
                            12:28:30
                        </p>
                        <div class="row justify-content-center text-center mt-3">
                            <div class="col-6">
                                <h6>Total Soal</h6>
                                <span class="fs-1 text-dark fw-semibold">5</span>
                            </div>
                            <div class="col-6">
                                <h6>Nilai Ujian</h6>
                                <span class="fs-1 text-dark fw-semibold">100</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn w-100 btn-warning">Lanjutkan</button>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card border-0 mb-4" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                    <div class="p-4">
                        <div class="text-end">
                            <span class="badge px-3" style="background-color: #F6EEFE; color:#9C40F7">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="15" height="15" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="m229.66 77.66l-128 128a8 8 0 0 1-11.32 0l-56-56a8 8 0 0 1 11.32-11.32L96 188.69L218.34 66.34a8 8 0 0 1 11.32 11.32" /></svg>
                                Benar
                            </span>
                        </div>
                        <label class="fs-5">2 .Fungsi yang dapat digunakan untuk menampilkan luaran program dijava adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_a" value="option_a">
                                <label class="form-check-label" for="answer${page}_${index}_a">
                                    “hello wold!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_b" value="option_b">
                                <label class="form-check-label" for="answer${page}_${index}_b">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_c" value="option_c">
                                <label class="form-check-label" for="answer${page}_${index}_c">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_d" value="option_d">
                                <label class="form-check-label" for="answer${page}_${index}_d">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_e" value="option_e">
                                <label class="form-check-label" for="answer${page}_${index}_e">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-4" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                    <div class="p-4">
                        <div class="text-end">
                            <span class="badge px-3" style="background-color: #FEEEEE; color:#DB0909">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4" /></svg>
                                Salah
                            </span>
                        </div>
                        <label class="fs-5">2 .Fungsi yang dapat digunakan untuk menampilkan luaran program dijava adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_a" value="option_a">
                                <label class="form-check-label" for="answer${page}_${index}_a">
                                    “hello wold!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_b" value="option_b">
                                <label class="form-check-label" for="answer${page}_${index}_b">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_c" value="option_c">
                                <label class="form-check-label" for="answer${page}_${index}_c">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_d" value="option_d">
                                <label class="form-check-label" for="answer${page}_${index}_d">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="answer_${page}" id="answer${page}_${index}_e" value="option_e">
                                <label class="form-check-label" for="answer${page}_${index}_e">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- </div> --}}


</div>
@endsection
