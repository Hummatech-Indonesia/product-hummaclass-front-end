@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Frequently Asked Questions</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar - daftar faq di hummaclass</a>
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
        <h5 class="fw-semibold">FAQ</h5>
        <div class="d-flex justify-content-between mt-2">
            <div action="" class="position-relative">
                <input type="text" class="form-control product-search px-4 ps-5" name="name" value=""
                    id="" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                    style="color: #8B8B8B"></i>
            </div>
            <button class="btn text-white" style="background-color: #7209DB" data-bs-toggle="modal" data-bs-target="#modal-create-faq">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                </svg>
                Tambah FAQ
            </button>
        </div>
        <div class="table-responsive rounded-2 mb-4 mt-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr class="">
                        <th class="fs-4 fw-semibold mb-0">Pertanyaan</th>
                        <th class="fs-4 fw-semibold mb-0">Jawaban</th>
                        <th class="fs-4 fw-semibold mb-0">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kenapa ayam menyebrang?</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Duis ante diam, tempor sit amet commodo id, tincidunt non libero. Nam mattis vehicula velit eu
                            lobortis. Suspendisse....</td>
                        <td>
                            <div class="d-flex gap-3">
                                <a href="{{ route('admin.users.show', '') }}/${value.id}" class="btn px-2 text-white"
                                    style="background-color: #7209DB">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>
                                </a>
                                <a href="{{ route('admin.users.show', '') }}/${value.id}"
                                    class="btn px-2 text-white btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M5 19h1.425L16.2 9.225L14.775 7.8L5 17.575zm-2 2v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM19 6.4L17.6 5zm-3.525 2.125l-.7-.725L16.2 9.225z" />
                                    </svg>
                                </a>
                                <a href="{{ route('admin.users.show', '') }}/${value.id}"
                                    class="btn px-2 text-white btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M3 6h18m-2 0v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2m-6 5v6m4-6v6" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('admin.pages.configuration.widgets.modal-create-faq')
@endsection
