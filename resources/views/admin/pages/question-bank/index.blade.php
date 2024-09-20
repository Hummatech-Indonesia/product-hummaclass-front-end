@extends('admin.layouts.app')

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 style="font-weight: bold;">Bank Soal</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Detail kursus  dan daftar modul pada kursus</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n1">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt="" class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex gap-3 mb-4">
    <form action="" class="position-relative">
        <input type="text" class="form-control product-search px-4 ps-5" name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" style="color: #8B8B8B"></i>
    </form>
    <form action="" class="position-relative">
        <input type="text" class="form-control product-search px-1 ps-5" name="name" value="{{ old('name', request('name')) }}" id="input-filter" placeholder="Terbaru">
        <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
            <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M32 144h448M112 256h288M208 368h96" /></svg>
    </form>
</div>

<div class="row">
    @foreach (range(1,4) as $item)
    <div class="col-lg-3">
        <div class="card">
            <button class="btn btn-sm btn-warning position-absolute ms-2 mt-2 text-dark">Development</button>
            <img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body p-3">

                <div class="d-flex align-items-center  gap-2"><img class="rounded-circle" src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="" style="width: 30px"><span>David Miliar</span></div>

                <p class="card-title fw-bolder mt-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates.</p>

                <div class="d-flex align-items-center justify-content-between">
                    <span class="badge bg-light" style="color: var(--purple-primary)">
                        <i class="ti ti-book-2 fs-4"></i>
                        5 Modul
                    </span>

                    <a href="{{ route('admin.list-question-bank.index') }}" class="btn text-white fs-2" style="background: var(--purple-primary);">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection