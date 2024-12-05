@extends('teacher.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .btn-primary {
            background-color: #9425FE !important;
            border: none;
        }

        .text-light-primary {
            color: #E8DEF3 !important;
        }

        .bg-light-primary {
            background-color: #E8DEF3 !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden bg-light-primary">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Jurnal</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Daftar Jurnal Guru</a>
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

    <form action="">
        <div class="card border">
            <div class="card-body">
                <div class="mb-3">
                    <h5 class="fw-semibold mb-2">Judul</h5>
                    <input type="text" class="form-control" id="placeholder" placeholder="Masukkan Judul" name="">
                </div>
                <div class="mb-3">
                    <h5 class="fw-semibold mb-2">Bukti</h5>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <h5 class="fw-semibold mb-3">Deskripsi</h5>
                    <textarea class="form-control" rows="4"></textarea>
                </div>
            </div>
        </div>

        <div class="card border">
            <div class="card-body">
                <h5 class="fw-semibold mb-3"><b>Daftar Kehadiran Siswa</b></h5>
                <div class="table-responsive rounded-2 mb-4">
                    <table class="table border text-nowrap customize-table mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th style="background-color: #9425FE; border-top-left-radius: 15px; border-bottom-left-radius: 15px; padding-right: 20px;">
                                    <h6 class="fs-4 fw-semibold mb-0 text-white">No</h6>
                                </th>
                                <th style="background-color: #9425FE;padding-right: 150px;">
                                    <h6 class="fs-4 fw-semibold mb-0 text-white">Nama Siswa</h6>
                                </th>
                                <th style="background-color: #9425FE; padding-right: 150px;">
                                    <h6 class="fs-4 fw-semibold mb-0 text-white">Kelas</h6>
                                </th>
                                <th style="background-color: #9425FE; border-top-right-radius: 15px; border-bottom-right-radius: 15px; padding: 10px;">
                                    <h6 class="fs-5 fw-semibold text-white mb-1">Status Kehadiran</h6>
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input success check-outline outline-success" type="checkbox" id="success-outline-check" value="option1" style="width: 12px; height: 12px; margin-right: 5px;">
                                        <label class="form-check-label text-white" for="success-outline-check" style="font-size: 12px; margin-bottom: 0;">Hadir Semua</label>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (range(1, 4) as $item)
                                <tr>
                                    <td>
                                        <p class="mb-0 fw-normal">1</p>
                                    </td>
                                    <td>
                                        <h6 class="fw-normal mb-0">Ahmad Lukman Hakim</h6>
                                    </td>
                                    <td style="padding-right: 20px;">
                                        <p class="mb-0 fw-normal">X RPL 1</p>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-3 justify-content-start">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success" type="checkbox" id="hadir-check-{{ $item }}" value="hadir">
                                                <label class="form-check-label" for="hadir-check-{{ $item }}">Hadir</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success" type="checkbox" id="izin-check-{{ $item }}" value="izin">
                                                <label class="form-check-label" for="izin-check-{{ $item }}">Izin</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success" type="checkbox" id="sakit-check-{{ $item }}" value="sakit">
                                                <label class="form-check-label" for="sakit-check-{{ $item }}">Sakit</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success" type="checkbox" id="alpha-check-{{ $item }}" value="alpha">
                                                <label class="form-check-label" for="alpha-check-{{ $item }}">Alpha</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn mb-1 waves-effect waves-light btn-danger" type="button">Batal</button>
                    <button class="btn mb-1 waves-effect waves-light btn-primary" type="submit">Tambah</button>
                </div>
            </div>
        </div>
    </form>
@endsection
