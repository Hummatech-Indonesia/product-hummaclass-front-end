@extends('admin.layouts.app')
@section('style')
    <style>
        .nav-pills .nav-link.active {
            background-color: #9425FE;
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">pengaturan penilaian</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">pengaturan penilaian bagi siswa kelas
                                    industri</a>
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

    <div class="col-12 col-lg-3 rounded-2" style="background-color: #ECECEC">
        <ul class="nav nav-pills nav-fill mt-4" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#navpill-111" role="tab">
                    <span>Sikap</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#navpill-222" role="tab">
                    <span>Keterampilan</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-content border mt-2">
        <div class="tab-pane active pt-3" id="navpill-111" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-semibold">Pengaturan Sikap</h5>
                    <hr>
                    <form class="mt-4" action="">
                        <div class="">
                            <div class="email-repeater mb-3">
                                <div data-repeater-list="repeater-group">
                                    <div data-repeater-item class="row mb-3">
                                        <h5>Indikator</h5>
                                        <div class="col-md-11">
                                            <input type="email" class="form-control" placeholder="Masukkan indikator" />
                                        </div>
                                        <div class="col-md-1">
                                            <button data-repeater-delete=""
                                                class="btn btn-danger waves-effect waves-light w-100" type="button">
                                                <i class="ti ti-circle-x fs-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create=""
                                    style="background-color: #9425FE; border: none"
                                    class="btn btn-info waves-effect waves-light">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-plus fs-5 me-2"></i>
                                        Tambah Sikap
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 text-end">
                            <button type="reset" class="btn btn-danger me-2">Batal</button>
                            <button type="submit" class="btn text-white"
                                style="background-color: #9425FE; border: none">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="tab-pane pt-3" id="navpill-222" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-semibold">Pengaturan Keterampilan</h5>
                    <hr>
                    <form class="mt-4" action="">
                        <div class="email-repeater mb-3">
                            <div data-repeater-list="repeater-group">
                                <div data-repeater-item class="row g-3 mb-3">
                                    <h5 class="col-12">Indikator</h5>
                                    <div class="col-12 col-md-11">
                                        <input type="email" class="form-control" placeholder="Masukkan indikator" />
                                    </div>
                                    <div class="col-12 col-md-1 text-md-end">
                                        <button data-repeater-delete=""
                                            class="btn btn-danger waves-effect waves-light w-100" type="button">
                                            <i class="ti ti-circle-x fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-repeater-create=""
                                class="btn btn-info waves-effect waves-light w-100 w-md-auto mt-2 mt-md-0"
                                style="background-color: #9425FE; border: none;">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="ti ti-plus fs-5 me-2"></i>
                                    Tambah Sikap
                                </div>
                            </button>
                        </div>
                    
                        <div class="mt-4 text-center text-md-end">
                            <button type="reset" class="btn btn-danger me-0 me-md-2 mb-2 mb-md-0">Batal</button>
                            <button type="submit" class="btn text-white"
                                style="background-color: #9425FE; border: none;">Simpan</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

    </div>
@endsection
