@extends('admin.layouts.app')
@section('style')
    <style>
        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: #7209DB !important;
        }

        .nav-link.active {
            background-color: #7209DB !important;
        }

        .text-primary {
            color: #7209DB !important;
        }
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 style="font-weight: bold;">Bank Soal</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="text-white mt-3 p-2"
            style="font-weight: bold;border-radius:0 8px 8px 0;background:linear-gradient(to right,#FFA41C,#FFD08A); width:200px; left:0;">
            <span>Step ke-1</span>
        </div>
        <div class="card-body">
            <div class="d-flex gap-3">

                <div class="">
                    <div class="text-warning bg-light-warning d-flex align-items-center rounded-circle p-3 ti ti-book-2"
                        style="font-size: 64px">
                    </div>
                </div>

                <div class="">
                    <h3 class="text-dark" style="font-weight: bold;">Learning Javascript With Imagination</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique ipsa atque magni beatae, facere
                        tempore nam rerum voluptatibus. Recusandae a officiis tenetur odio praesentium sit quasi veniam nam
                        similique amet!</p>
                    <div class="d-flex align-items-center">
                        <span class="bg-light-warning p-2 rounded"><span class="ti ti-folder text-warning fs-5"></span><b>
                                20 Soal</b></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex gap-2">

            <div class="position-relative">
                <input type="text" name="" id="" class="form-control ps-5 bg-white" placeholder="Search">
                <span class="position-absolute top-50 translate-middle-y ms-3 ti ti-search fs-6">
                </span>
            </div>
            <div class="position-relative">
                <select name="" id="" class="form-control ps-5 bg-white">
                    <option value="">Terbaru</option>
                    <option value="oldest">Terlama</option>
                </select>
                <span class="position-absolute top-50 translate-middle-y ms-3 pe-3 ti ti-filter fs-6">
                </span>
            </div>


        </div>
        <div class="d-flex gap-2">
            <a href="#" class="btn" style="background: #E8E8E8;">
                <i class="ti ti-arrow-left"></i>
                <span>Kembali</span>
            </a>

            <a class="btn btn-primary" href="">
                <i class="ti ti-plus"></i>
                Tambah Soal
            </a>
        </div>
    </div>

    @for ($i = 1; $i < 4; $i++)
        <div class="card position-relative">
            <div class="p-3">
                <div class="d-flex justify-content-between gap-2    ">
                    <b>10. Fungsi yang dapat digunakan untuk menampilkan luaran program di java adalah Fungsi yang dapat
                        digunakan untuk menampilkan luaran program di java adalah Fungsi yang dapat digunakan untuk
                        menampilkan luaran program di java adalah</b>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light-warning text-warning"><i
                                class="fs-6 ti ti-pencil fw-semibold"></i></button>
                        <button class="btn btn-light-danger text-danger"><i
                                class="fs-6 ti ti-trash fw-semibold"></i></button>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="mb-3 ms-1">A. "hello wold!"</h6>
                    <h6 class="mb-3 ms-1">B. Public static void main(String[] args)</h6>
                    <div class="d-flex gap-2 mb-3">
                        <span class="text-success badge bg-light-success rounded-2 py-1 ps-1 pe-5">
                            <span>C. System.out.print()</span>
                        </span>
                        <div class="text-success mt-1">
                            <i class="ti ti-check fs-3"></i>
                            Jawaban
                        </div>
                    </div>
                    <h6 class="mb-3 ms-1">D. Import java.io.File;</h6>
                    <h6 class="mb-3 ms-1">E. Int Umur = 16;</h6>
                </div>
            </div>
            <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description"
                    class="img-fluid" style="max-width: 100px; height: auto;">
            </div>
        </div>
    @endfor
@endsection
