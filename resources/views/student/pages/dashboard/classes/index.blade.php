@extends('student.layouts.app')
@section('content')
    <h3>Detail kelas - <span>XII RPL 1</span></h3>

    <ul class="nav nav-pills my-4 gap-2">
        <li class="nav-item">
            <button class="btn nav-link active" id="tab-siswa" data-bs-toggle="tab" data-bs-target="#pane-siswa" type="button"
                role="tab" aria-controls="pane-siswa" aria-selected="true">
                Siswa
            </button>
        </li>
        <li class="nav-item">
            <button class="btn nav-link" id="tab-materi" data-bs-toggle="tab" data-bs-target="#pane-materi" type="button"
                role="tab" aria-controls="pane-materi" aria-selected="false">
                Materi
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Pane for Siswa -->
        <div class="tab-pane fade show active" id="pane-siswa" role="tabpanel" aria-labelledby="tab-siswa">
            <h3>Daftar Siswa</h3>
            <p>Berikut adalah daftar siswa yang terdaftar dalam kelas ini.</p>
            @include('student.pages.dashboard.classes.widgets.student-panel')
        </div>

        <!-- Pane for Materi -->
        <div class="tab-pane fade" id="pane-materi" role="tabpanel" aria-labelledby="tab-materi">
            <h3>Daftar Materi</h3>
            <p>Berikut adalah materi yang tersedia untuk kelas ini.</p>
            @include('student.pages.dashboard.classes.widgets.module-panel')
        </div>
    </div>
@endsection
