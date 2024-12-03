@extends('student.layouts.app')
@section('style')
    <style>
        .custom-list {
            list-style-type: disc;
            padding-left: 20px;
        }
    </style>
@endsection
@section('content')
    <h3 class="mb-4">Detail kelas - <span>XII RPL 1</span></h3>

    <section class="courses__details-area">
        <div class="container">
            <div class="row">
                <div class="courses__details-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btn nav-link active rounded-5" id="tab-siswa" data-bs-toggle="tab"
                                data-bs-target="#pane-siswa" type="button" role="tab" aria-controls="pane-siswa"
                                aria-selected="true">
                                Siswa
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn nav-link rounded-5" id="tab-materi" data-bs-toggle="tab"
                                data-bs-target="#pane-materi" type="button" role="tab" aria-controls="pane-materi"
                                aria-selected="false">
                                Materi
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Pane for Siswa -->
                        <div class="tab-pane fade show active" id="pane-siswa" role="tabpanel" aria-labelledby="tab-siswa">
                            @include('student.pages.dashboard.classes.widgets.student-panel')
                        </div>

                        <!-- Pane for Materi -->
                        <div class="tab-pane fade" id="pane-materi" role="tabpanel" aria-labelledby="tab-materi">
                            @include('student.pages.dashboard.classes.widgets.module-panel')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
