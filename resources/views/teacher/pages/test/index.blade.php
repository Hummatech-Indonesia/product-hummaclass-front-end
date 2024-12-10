@extends('teacher.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Pre Test dan Post Test Materi</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="/dashboard/teacher/test">List Test siswa Pada Kelas Yang Anda
                                    Ajar</a>
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

    <div class="d-flex justify-content-between mt-2">
        <form action="" class="position-relative d-flex">
            <input type="text" class="form-control product-search px-4 ps-5" name="search"
                value="{{ old('title', request('title')) }}" id="search" style="background-color: #fff"
                placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
    </div>

    <div class="row mt-4" id="list-course">
    </div>
    <div class="d-flex justify-content-center">
        <nav id="pagination"></nav>
    </div>
@endsection
@section('script')
    @include('teacher.pages.test.script.datatable')
@endsection
