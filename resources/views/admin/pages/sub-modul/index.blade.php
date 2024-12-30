@extends('admin.layouts.app')

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
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
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt="" class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card p-3">
    <h5 class="fw-semibold">Kursus</h5>

    <div class="d-flex justify-content-between mt-2">
        <form action="" class="position-relative">
            <input type="text" class="form-control product-search px-4 ps-5" name="name"
                value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
        <button class="btn text-white" style="background-color: #7209DB">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/></svg>
            Tambah
        </button>
    </div>

    <div class="table-responsive rounded-2 mb-4 mt-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
            <thead class="text-dark fs-4">
                <tr class="">
                    <th class="fs-4 fw-semibold mb-0">No</th>
                    <th class="fs-4 fw-semibold mb-0">Title</th>
                    <th class="fs-4 fw-semibold mb-0">Subtitle</th>
                    <th class="fs-4 fw-semibold mb-0">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach (range(1,5) as $classroom)
                    <tr class="fw-semibold">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            Nama 1
                        </td>
                        <td>
                            Lorem, ipsum...
                        </td>
                        <td>
                            <div class="d-flex justify-content-center gap-3">
                                <button class="btn text-white" style="background-color: #DB0909;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"/></svg>
                                    Hapus
                                </button>
                                <button class="btn btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-2.5 -2.5 24 24"><path fill="currentColor" d="m16.318 6.11l-3.536-3.535l1.415-1.414c.63-.63 2.073-.755 2.828 0l.707.707c.755.755.631 2.198 0 2.829zm-1.414 1.415l-9.9 9.9l-4.596 1.06l1.06-4.596l9.9-9.9z"/></svg>
                                    Edit
                                </button>
                                <button class="btn text-white" style="background-color: #7209DB">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 13c3.6-8 14.4-8 18 0"/><path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6"/></g></svg>
                                    Detail
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
