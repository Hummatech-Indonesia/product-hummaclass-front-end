@extends('admin.layouts.app')
@section('style')
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: #9425FE;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #9425FE;
        }
    </style>
@endsection
@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Learning Path</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Urutan Belajar untuk Siswa kelas industri</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-4 text-center">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <!-- Nav tabs -->
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link nav-class_level-link active" data-bs-toggle="tab" href="#home" role="tab"
                        data-class_level="10">
                        <span>Kelas 10</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-class_level-link" data-bs-toggle="tab" href="#profile" role="tab"
                        data-class_level="11">
                        <span>Kelas 11</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-class_level-link" data-bs-toggle="tab" href="#messages" role="tab"
                        data-class_level="12">
                        <span>Kelas 12</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4"><b>Pilihan Devisi</b></h3>
                    <!-- Nav tabs -->
                    <div id="division-tab-list">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <h3><b>Kursus</b></h3>
            <div class="d-flex justify-content-between mb-3 gap-2">
                <input type="text" name="search" id="search" class="form-control bg-white"
                    placeholder="Cari kursus.." style="max-width:250px;">
                <button id="create-learning-path-button"
                    class="btn text-white" style="background: #9425FE;"><i class="fa fa-plus fa-md"></i>
                    <span class="ms-2">Tambah</span>    
                </button>
            </div>
            <div id="course-learning-path-list">
            </div>
        </div>
    </div>
@endsection
@section('script')
    <x-create-learning-path-modal></x-create-learning-path-modal>
    @include('Kelas-Industri.admin.learning-paths.scripts.index')
@endsection
