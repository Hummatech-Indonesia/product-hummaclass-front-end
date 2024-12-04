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
            @include('admin.pages.exams.assessment-settings.panes.tab-attitude')
        </div>
        <div class="tab-pane pt-3" id="navpill-222" role="tabpanel">
            @include('admin.pages.exams.assessment-settings.panes.tab-skill')
        </div>
    </div>
@endsection
