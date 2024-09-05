@extends('admin.layouts.app')

@section('style')
<style>
    .user-profile-tab .nav-item .nav-link.active {
        color: #9425FE;
        border-bottom: 2px solid #9425FE;
    }

    .card-text {
        display: -webkit-box;
        /* Gunakan Flexbox versi lama untuk mendukung multi-line ellipsis */
        -webkit-box-orient: vertical;
        /* Atur orientasi menjadi vertikal */
        -webkit-line-clamp: 2;
        /* Batasi jumlah baris menjadi 2 */
        overflow: hidden;
        /* Sembunyikan teks yang melebihi batas */
        text-overflow: ellipsis;
        /* Tambahkan ellipsis (...) pada teks yang terpotong */
        max-height: calc(1.2em * 2);
        /* Sesuaikan dengan jumlah baris yang diinginkan */
        line-height: 1.2em;
    }

</style>
@endsection
@section('content')
<div class="card overflow-hidden">
    <div class="card-body p-0">
        <div class="d-flex align-items-center p-4 rounded-2 border border-4 border-white" style="background-color: var(--purple-primary);">
            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle border border-3 border-white" width="100px" height="100px">
            <div class="ms-3">
                <h4 class="fs-6 text-white fw-semibold mb-2">Alfian Ban Dalam</h4>
                <span class="fw-normal text-white">alfian@gmail.com</span>
            </div>
        </div>

        <ul class="nav nav-pills user-profile-tab mt-2" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                    <i class="ti ti-user me-2 fs-6"></i>
                    <span class="d-none d-md-block">Profil</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-kursus-tab" data-bs-toggle="pill" data-bs-target="#pills-kursus" type="button" role="tab" aria-controls="pills-kursus" aria-selected="false" tabindex="-1">
                    <i class="ti ti-book-2 me-2 fs-6"></i>
                    <span class="d-none d-md-block">Daftar Kursus</span>
                </button>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        @include('admin.pages.users.panes.tab-profile')
    </div>
    <div class="tab-pane fade" id="pills-kursus" role="tabpanel" aria-labelledby="pills-kursus-tab" tabindex="0">
        @include('admin.pages.users.panes.tab-detail-course')
    </div>
</div>
@endsection
