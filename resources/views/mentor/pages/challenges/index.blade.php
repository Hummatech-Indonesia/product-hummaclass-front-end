@extends('mentor.layouts.app')

@section('style')
    <style>
         .bg-primary {
            background-color: #9425FE !important;
        }
        .text-primary {
            color: #9425FE !important;
        }
        .bg-light-primary {
            background-color: #9525fe27 !important;
        }
        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tantangan</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Tantangan</a>
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

    <div class="row gap-2">
        <div class="col-lg-4 col-sm-12 col-md-3 me-auto">
            <form action="" class="position-relative d-flex gap-2">
                <input type="text" class="form-control product-search px-4 ps-5" name="title"
                    value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                    placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                <button class="btn btn-primary d-flex justify-content-center align-items-center bg-white border-1"
                    fdprocessedid="w216xn" style="
                    border-color: #dfe5ef;">
                    <i class="ti ti-sort-ascending-letters fs-6 text-dark"></i>
                </button>
            </form>
        </div>
        <div class="col-sm-12 col-md-2 col-xl-auto" >
            <a href="{{ route('mentor.challenge.create') }}" class="w-100 btn btn-primary rounded-2 bg-primary border-0">
                <i class="ti ti-plus"></i> Tambah
            </a>
        </div>
    </div>

    <div class="row mt-4" id="list-card">
        @foreach (range(1, 6) as $index => $item)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="card rounded-3 shadow">
                    <div class="card-body py-4 px-3">
                        <div class="d-flex justify-content-between">
                            <div class="justify-content-start bg-light-primary text-primary fs-2 rounded rounded-1 px-2 py-1">
                                Batas : <span>21 November 2024 11:20</span>
                            </div>
                            <div class="ms-auto">
                                <div class="dropdown dropstart">
                                    <a href="#" class="link text-dark" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical fs-7"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">New</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Folder</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">Google Docs</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Google Sheets</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Google Slides</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <span class="text-center border border-3 rounded-circle py-1 px-2">S</span>
                                </div>
                                <div class="row p-0 align-self-center" style="max-width: 100%;">
                                    <p class="col-12 card-title fs-3 fw-semibold text-muted m-0">Simulasi ujian input output </p>
                                </div>
                            </div>
                            <h5 class="my-3">XII DKV 2 -SMK KEPANJEN</h5>
                            <p class="fs-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit aut, soluta quidem et omnis velit a. Exercitationem eum cum voluptate.</p>
                            <a href="{{ route('mentor.challenge.show', $index) }}" class="btn btn-primary bg-primary border-0 rounded-2 w-100 mb-1">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
@endsection

@section('script')
@endsection
