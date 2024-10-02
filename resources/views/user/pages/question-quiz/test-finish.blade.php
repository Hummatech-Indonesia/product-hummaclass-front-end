@extends('user.layouts.app')

@section('style')
<style>
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

</style>
@endsection

@section('content')
<div class="container d-flex justify-content-center custom-container mt-3">
    {{-- <div class="row"> --}}
    <div class="col-lg-7 mb-4">
        <div class="card position-relative overflow-hidden border-0" style="background: linear-gradient(to right, #9C40F7, #7209DB);border-radius: 15px;">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-9 text-white ps-5 p-4">
                        <h6 class="text-white">Test Selesai</h6>
                        <h4 class="fw-semibold mb-8 text-white">Daftar Kursus</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="javascript:void(0)">Daftar pengguna yang sudah membeli kursus</a>
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
        <div class="card mt-3 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
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
        </div>
        <div class="mt-4">
            <button class="btn w-100 btn-warning">Lanjutkan</button>
        </div>
    </div>
    {{-- </div> --}}


</div>
@endsection
