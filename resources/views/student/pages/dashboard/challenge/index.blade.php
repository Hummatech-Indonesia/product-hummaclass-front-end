@extends('student.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .bg-light-primary {
            background-color: #F6EEFE !important;
        }

        .bg-light-danger {
            background-color: #FFEFEF !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection
@section('content')
    <h4 class="mb-4">Tantangan</h4>

    <div class="col-12 col-lg-4 mb-4">
        <input type="text" name="search" id="search" placeholder="Cari..." class="form-control rounded-3">
    </div>

    <div class="row">
        @foreach (range(1, 5) as $item)
            <div class="col-12 col-lg-4 mb-3">
                <div class="card border-0 rounded-4 p-2 shadow">
                    <div class="card-body">
                        <span class="bg-light-primary p-1 px-2 rounded-3 text-primary mb-3"
                            style="display: inline-block; font-size: 14px">Batas:
                            21 November 2024 11:20</span>

                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center rounded-circle p-1 border border-3"
                                style="width: 35px; height: 35px; border-color: rgb(216, 216, 216) !important;">
                                <span class="text-center" style="width: fit-content;">S</span>
                            </div>
                            <h6 class="ms-3 mb-0">Simulasi ujian input output</h6>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nunc quis ante malesuada...</p>

                        <div class="d-flex align-items-center mb-3">
                            <p class="mb-0 me-2">Kesulitan:</p>
                            <span class="bg-light-danger text-danger px-4 py- rounded-3 ">Sulit</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <p class="mb-0 me-2">Status:</p>
                            <span class="bg-light-danger text-danger px-4 py- rounded-3 ">Belum Dikerjakan</span>
                        </div>

                        <a href="{{ route('dashboard.students.challenge.detail') }}" class="btn w-100 rounded-3 shadow-none fw-normal" type="button" style="padding: 10px; font-size: 17px">Selengkapnya</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
