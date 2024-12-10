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

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="swiper dashboard-courses-active mb-3">
            @include('student.pages.dashboard.swiper')
        </div>

        <div class="card border  rounded-3 p-3 mb-3">
            <div class="card-body">
                <h5>Tagihan Anda Semester Ini</h5>

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h1 style="color: #9425FE">Rp. 100.000</h1>
                    <span class="p-3 rounded-3" style="color: #9425FE; background-color: #F6EEFE">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M13.5 16a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" />
                            <path fill="currentColor"
                                d="m14.347.66l3.18 4.456l2.097-.715L21.538 10h.962v12h-21V10h.51v-.01l.648.006zM9.397 10h10.028l-1.037-3.033l-1.522.487zM7.839 8.417L15.55 5.79l-1.604-2.25zM5.5 12h-2v2a2 2 0 0 0 2-2m10 4a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0m5 4v-2a2 2 0 0 0-2 2zm-2-8a2 2 0 0 0 2 2v-2zm-15 8h2a2 2 0 0 0-2-2z" />
                        </svg>
                    </span>
                </div>

                <div class="border mb-3"></div>

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <p>Anda harus melunasi tagihan anda, untuk bisa melanjutkan materi</p>
                    </div>
                    <div class="col-12 col-lg-4 text-end">
                        <p style="color: #9425FE">
                            <span>Klik disini untuk membayar</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @include('student.pages.dashboard.task-statistics')
        </div>

    </div>
@endsection
