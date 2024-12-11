@extends('student.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .text-danger {
            color: #F85E5E;
        }

        .text-warning {
            color: #FFB649 !important;
        }

        .bg-light-primary {
            background-color: #F6EEFE !important;
        }

        .bg-light-danger {
            background-color: #FFEFEF !important;
        }

        .bg-light-warning {
            background-color: #FEF5EE !important;
        }

        .bg-danger {
            background-color: #F85E5E !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
    <style>
        .btn-outline-warning {
            background-color: transparent;
            border: 2px solid #FFB649;
            color: #FFB649;
        }

        .btn-outline-warning:hover {
            background-color: transparent;
            color: #FFB649;
            border-color: #FFB649;
        }
    </style>
@endsection
@section('content')
    <h4 class="mb-4" id="title-challenge"></h4>

    <div class="card shadow border p-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3" id="button-download">
                <div>
                    <h5 class="">Pengumpulan Tantangan</h5>
                    <p>Submit tantangan yang telah anda selesaikan dibawah ini.</p>
                </div>
            </div>

            <div class="bg-light-danger py-4 px-4 mb-3 rounded-3 border border-danger">
                <h5>Peringatan</h5>
                <p class="text-danger mb-0">Pastikan challenge anda sudah ada dengan mendownloadnya. Jika sudah ada maka bisa
                    didownload jika maka inputkan kembali challenge anda</p>
            </div>
            <div class="bg-light-warning py-4 px-4 rounded-3 border border-warning mb-3">
                <h5 class="mb-3">Informasi</h5>
                <ul class="ps-3 mb-0 text-warning" style="list-style-type: disc;">
                    <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                </ul>
            </div>

            <form id="submit-challenge" enctype="multipart/form-data">
                <div class="row mb-3" id="list-submits"></div>

                <div class="d-flex justify-content-end gap-2" id="button-submits">
                    <a href="/dashboard/students/challenge" class="btn btn-outline-warning btn-back shadow-none" type="button">Kembali</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('script')
    @include('student.pages.dashboard.challenge.script.detail')
@endsection
