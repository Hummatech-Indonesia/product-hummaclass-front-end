@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden"
        style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Sub Modul</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar pengguna yang sudah membeli kursus</a>
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
        <form action="" class="position-relative">
            <input type="text" class="form-control product-search px-4 ps-5" name="name"
                value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
        <button class="btn text-white" style="background-color: #7209DB" data-bs-toggle="modal" data-bs-target="#module-add-modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
            </svg>
            Tambah
        </button>
    </div>
    <div class="row row-cols-4 mt-4">
        @forelse (range(1,4) as $item)
            <div class="col">
                <x-modernize-card-1 author="David Miliar" title="Learning JavaScript WithImagination"
                    subtitle="Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, maiores."
                    content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, maiores." img=""
                    price="100000" review="4.5" modules="5" sold="20" />
            </div>
        @empty
        @endforelse
    </div>
    @include('admin.pages.modul.widgets.modal-add')
@endsection