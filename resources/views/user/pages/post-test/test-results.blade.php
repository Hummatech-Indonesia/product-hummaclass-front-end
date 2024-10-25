@extends('user.layouts.app')

@section('style')
<style>
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
        <div class="card position-relative overflow-hidden border-0" style="background: linear-gradient(to right, #9C40F7, #7209DB);border-radius: 15px;">
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
                            <img src="{{ asset('assets/img/book.png') }}" width="500px" alt="" class="img-fluid mb-n3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="card border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                <div class="p-4 text-center">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <h5>Hasil Test</h5>
                            <h6 class="mt-3 text-start">Tanggal Ujian</h6>
                            <p class="text-start" style="color: #9425FE;">Senin 12 September 2023, <br>
                                12:28:30
                            </p>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6">
                                    <div class="d-flex justify-content-between">
                                        <h6>Jumlah Soal</h6>
                                        <h6>:</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-end">
                                        <p>20 Soal</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex justify-content-between">
                                        <h6>Soal Benar</h6>
                                        <h6>:</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-end">
                                        <p>10 Soal</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex justify-content-between">
                                        <h6>Soal Salah</h6>
                                        <h6>:</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-end">
                                        <p>7 Soal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center mt-2">
                                <h6>Nilai Ujian</h6>
                                <span class="fw-semibold fs-1" style="color: #9C40F7;">80</span>
                                <div class="col-lg-10 my-4">
                                    <div style="border-bottom: 1px solid #CCCCCC"></div>
                                </div>
                                <h6>Hasil</h6>
                                <div>
                                    <span class="badge text-success w-100 p-3 fs-6" style="background-color: #EEFEF0;">Selamat Anda Lulus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>

                </div>
            </div>
            <div class="mt-4">
                <button class="w-100 btn-warning">Selesai</button>
            </div>
        </div>

    </div>
</div>
@endsection
