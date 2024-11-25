@extends('admin.layouts.app')

@section('style')
    <style>
        .filter-radio:checked+.filter-label {
            background-color: #9425FE;
            color: white;
        }

        .filter-label {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .filter-radio {
            display: none;
        }

        .filter-label:hover {
            background-color: #9425FE;
            color: white;
        }

        .filter-option {
            padding-left: 0;
            margin-bottom: .125rem;
            width: 100%;
        }

        .filter-label {
            width: 100%;
        }

        .select2-container--default.select2-container--open.select2-container--above .select2-selection--single,
        .select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-color: #d7dce0;
            width: 435px;
            height: 40px;
        }

        .select2-container--default .select2-selection--multiple {
            border: 1px solid #d7dce0;
            border-radius: 5px;
            width: 440px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #9425FE !important;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: #9425FE;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Daftar Kelas</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Kelas Anda pada kelas industri</a>
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

    <h5 class="fw-bolder my-4">Detail Kelas - XII RPL 1</h5>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card rounded-4" style="position: relative; overflow: hidden;">
                <div class="card-body d-flex p-3">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="left: 0; bottom: 0;" width="80" height="70">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="right: 0; bottom: 0; transform: scaleX(-1)" width="80" height="70">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle">
                        </div>
                        <div class="col p-0">
                            <h6 class="card-title fs-4 fw-bolder">Suyadi Oke Joss Sp.d</h6>
                            <p class="card-text fs-3 fw-semibold">Wali Kelas XII RPL 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card rounded-4" style="position: relative; overflow: hidden;">
                <div class="card-body d-flex p-3">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="left: 0; bottom: 0;" width="80" height="70">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="right: 0; bottom: 0; transform: scaleX(-1)" width="80" height="70">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle">
                        </div>
                        <div class="col p-0">
                            <h6 class="card-title fs-4 fw-bolder">Suyadi Oke Joss Sp.d</h6>
                            <p class="card-text fs-3 fw-semibold">Mentor Kelas Industri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Kelas-Industri.admin.school.details.panes.student')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}" alt="School Logo"
                        class="img-fluid mb-2">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title" id="name"></h5>
                    <p id="description"></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Kepala Sekolah:</strong><span id="head_master">
                            Lasmono S.Pd.
                            Mm</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>NPSN:</strong><span id="npsn">
                            123123123</span></div>

                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Email:</strong><span id="email">
                            smkn1kepanjen@gmail.com</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>Nomor Telepon:</strong><span id="phone_number">
                            082229414949</span></div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between"><strong class="me-1">Alamat: </strong><span class="" id="address text-end" style="text-align: end;"> Jl.
                            Ngadiluwih,
                            Kedungpedaringan, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163, Indonesia</span></div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
