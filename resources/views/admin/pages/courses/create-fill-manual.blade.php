@extends('admin.layouts.app')

@section('style')
<style>
    .form-check-input:checked {
        background-color: var(--purple-primary);
        border-color: var(--purple-primary);
    }

</style>
@endsection

@section('content')
<div class="card position-relative overflow-hidden bg-light-warning border border-warning">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="d-flex gap-2">
                    <div>
                        <span class="text-white py-1 px-1 d-flex align-items-center bg-warning" style="border-radius:9px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="m8.93 6.588l-2.29.287l-.082.38l.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319c.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246c-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0a1 1 0 0 1 2 0"></path>
                            </svg>
                        </span>
                    </div>
                    <h5 class="fw-semibold mb-8">Penting</h5>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="javascript:void(0)">Harap memilih tipe soal terlebih dahalu</a><br>
                            <a class="text-muted " href="javascript:void(0)">Pilih soal sesuai tipe soal yang anda pilih</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    <div>
        <form action="" class="d-flex gap-3">
            <div>
                <label for="" class="form-label">Cari Modul</label>
                <div class="position-relative">
                    <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" style="color: #8B8B8B"></i>
                </div>
            </div>
            <div>
                <label for="" class="form-label">Tanggal Awal</label>
                <input type="date" name="" id="" class="form-control" style="background-color: #fff">
            </div>
            <div>
                <label for="" class="form-label">Tanggal Akhir</label>
                <input type="date" name="" id="" class="form-control" style="background-color: #fff">
            </div>
        </form>
    </div>
    <div>
        <button class="btn text-white" style="background-color: var(--purple-primary)">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" /></svg>
            Tambah Soal
        </button>
    </div>
</div>

<div class="mt-4">
    <h5 class="fw-semibold">Pilih Soal</h5>
    <h5 class="fw-semibold mt-3 mb-2">Modul - lorem ipsum dolor sit amet</h5>
</div>

@foreach (range(1,3) as $item)
<div class="card position-relative">
    <div class="p-3">
        <div class="d-flex justify-content-between">
            <b>10. Fungsi yang dapat digunakan untuk menampilkan luaran program di java adalah</b>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>

        </div>
        <div class="mt-2">
            <h6 class="mb-3 ms-1">A. "hello wold!"</h6>
            <h6 class="mb-3 ms-1">B. Public static void main(String[] args)</h6>
            <div class="d-flex gap-2 mb-3">
                <span class="badge bg-light-success rounded-2 py-1 ps-1 pe-5">
                    <h6>C. System.out.print()</h6>
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
        <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description" class="img-fluid" style="max-width: 100px; height: auto;">
    </div>
</div>
@endforeach
<a href="" class="d-flex justify-content-center" style="color: #7D7D7D;">Lihat Lainya</a>

<div class="mt-4">
    <h5 class="fw-semibold mb-2">Modul - lorem ipsum dolor sit amet</h5>
</div>

@foreach (range(1,3) as $item)
<div class="card position-relative">
    <div class="p-3">
        <div class="d-flex justify-content-between">
            <b>10. Fungsi yang dapat digunakan untuk menampilkan luaran program di java adalah</b>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>

        </div>
        <div class="mt-2">
            <h6 class="mb-3 ms-1">A. "hello wold!"</h6>
            <h6 class="mb-3 ms-1">B. Public static void main(String[] args)</h6>
            <div class="d-flex gap-2 mb-3">
                <span class="badge bg-light-success rounded-2 py-1 ps-1 pe-5">
                    <h6>C. System.out.print()</h6>
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
        <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description" class="img-fluid" style="max-width: 100px; height: auto;">
    </div>
</div>
@endforeach
<a href="" class="d-flex justify-content-center" style="color: #7D7D7D;">Lihat Lainya</a>

@endsection
