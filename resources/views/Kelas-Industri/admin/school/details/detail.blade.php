@extends('admin.layouts.app')

@section('content')
  {{-- <div class="card">
    <div class="card-header bg-transparent">
      <h6>Detail Sekolah</h>
    </div>
    <div class="card-body">
      <div class="d-flex flex-row align-items-center">
        <div
          class="round-40 rounded-circle d-flex align-items-center justify-content-center bg-light-primary text-primary">
          <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}" alt="" class="img-fluid">
        </div>
        <div class="ms-3">
          <h4 class="mb-2 fs-6">Total Members</h4>
          <span class="badge text-bg-secondary">Negeri</span>
        </div>
        <div class="ms-auto d-flex flex-column align-items-end gap-2">
          <h5 class="mb-0 ">
            Tahun Ajaran
          </h5>
          <p class="mb-0 ">
            2024/2025
          </p>
        </div>
      </div>
    </div>
    <hr class="my-3">
    <div class="row">
        <div class="col col-12 col-md-6">
            <div class="row">
                <div class="col-6">Kepala Sekolah</div>
                <div class="col-6">NPSN</div>
            </div>
        </div>
        <div class="col col-12 col-md-6">
            <div class="row">
                <div class="col-6">Nomor Telepon</div>
            </div>
        </div>
    </div>
  </div> --}}
  <div class="card shadow-sm">
    <div class="card-body">
      <div class="row">
        <div class="col-md-2 text-center">
          <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}" alt="School Logo" class="img-fluid mb-2">
        </div>
        <div class="col-md-8">
          <h5 class="card-title">SMK NEGERI 1 KEPANJEN</h5>
          <span class="badge bg-primary">Negeri</span>
        </div>
        <div class="col-md-2 text-end">
          <p class="mb-0">Tahun Ajaran</p>
          <p class="fw-bold">2023/2024</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-between mb-3"><strong>Kepala Sekolah:</strong><span> Lasmono S.Pd. Mm</span>
          </div>
          <div class="d-flex justify-content-between mb-3"><strong>NPSN:</strong><span> 123123123</span></div>
          <div class="d-flex justify-content-between mb-3"><strong>Nomor Telepon:</strong><span> 082229414949</span></div>
          <div class="d-flex justify-content-between mb-3"><strong>Email:</strong><span> smkn1kepanjen@gmail.com</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-between mb-3"><strong>Jenjang Pendidikan:</strong><span> SMA/SMK/MA</span>
          </div>
          <div class="d-flex justify-content-between mb-3"><strong>Akreditasi:</strong><span> C</span></div>
          <div class="d-flex justify-content-between mb-3"><strong>Deskripsi:</strong><span> -</span></div>
          <div class="d-flex justify-content-between mb-3"><strong>Alamat:</strong><span class="text-end"> Jl. Ngadiluwih,
              Kedungpedaringan, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163, Indonesia</span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="card p-3">
    <div>
      <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
        <div class="d-flex">
          <li class="nav-item home" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
              <span>Kelas</span>
            </a>
          </li>
          <li class="nav-item list" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab" aria-selected="false" tabindex="-1">
              <span>Guru</span>
            </a>
          </li>
          <li class="nav-item test" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#test" role="tab" aria-selected="false" tabindex="-1">
              <span>Semua Siswa</span>
            </a>
          </li>
        </div>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card text-center">
        <img src="{{asset('assets/img/card/card-banner.png')}}" class="rounded-1 img-fluid position-absolute" style="z-index: 1; width: 100%">
        <div class="card-body">
          <div class="mt-n2" style="position: relative; z-index: 2;">
            <div style="width: 5rem;" class="m-auto">
              <img src="{{asset('assets/img/logo/logo-class-industri.png')}}" class="img-fluid" style="z-index: 2"/>
            </div>
            <h3 class="card-title mt-3">Matt Carlson</h3>
            <h6 class="card-subtitle">San Francisco, CA</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
