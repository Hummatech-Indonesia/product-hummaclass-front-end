@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-default {
            background-color: transparent;
            color: #000000;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tambah Modul</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Detail kursus dan daftar modul pada
                                    kursus</a>
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

    <div class="card p-3">
        <form action="" id="create-module-form">
            <div class="row">
                <div class="col-10 mb-3">
                    <label for="" class="fw-semibold form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukan judul">
                </div>
                <div class="col-2 mb-3">
                    <label for="" class="fw-semibold form-label">Step</label>
                    <input type="number" class="form-control" id="order" name="order" placeholder="Masukan Step">
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="fw-semibold form-label">Sub Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Sub judul">
                </div>
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    @include('admin.pages.courses.scripts.index')
    @include('admin.pages.courses.scripts.modules.create-script')
@endsection
