@extends('admin.layouts.app')
@section('style')
    <style>
        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: var(--purple-primary) !important;
        }

        .nav-link.active {
            background-color: var(--purple-primary) !important;
        }

        .text-primary {
            color: var(--purple-primary) !important;
        }
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 style="font-weight: bold;">Detail Modul</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card position-relative">
        <div class="p-2 mt-3"
            style="left: 0;top:5%;background:linear-gradient(to right,#FFA41C, #FFD08A); border-radius:0 8px 8px 0;width:200px">
            <span class="text-white ps-3 fs-5" style="font-weight: bold;">Step ke-1</span>
        </div>
        <div class="card-body">
            <div class="d-flex gap-3">

                <div class="">
                    <div class="text-warning bg-light-warning d-flex align-items-center rounded-circle p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icon-tabler-book-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                            <path d="M9 8h6" />
                        </svg>
                    </div>
                </div>

                <div class="">
                    <h3 class="text-dark" style="font-weight: bold;" id="title">Belajar Dasar Pemograman Web</h3>
                    <p id="sub_title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, saepe! Temporibus
                        consectetur ut modi
                        reprehenderit!</p>
                    <div class="d-flex gap-2">
                        <span class="badge bg-light-warning text-dark fw-semibold pe-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-warning mb-1 me-1" width="16"
                                height="16" viewBox="-2 -2 24 24">
                                <path fill="currentColor"
                                    d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2m-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2m0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2m-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414z" />
                            </svg>
                            8 Tugas
                        </span>
                        <span class="badge bg-light-warning text-dark fw-semibold pe-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-warning mb-1 me-1" width="16"
                                height="16" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
                            </svg>
                            3 Kuis
                        </span>
                        <span class="badge bg-light-warning text-dark fw-semibold pe-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-warning mb-1 me-1" width="16"
                                height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path d="M9 12h6" />
                                <path d="M9 16h6" />
                            </svg>
                            8 Materi
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item materi">
                        <a class="nav-link active" data-bs-toggle="tab" href="#materi" role="tab">
                            <span>Materi</span>
                        </a>
                    </li>
                    <li class="nav-item task">
                        <a class="nav-link" data-bs-toggle="tab" href="#task" role="tab">
                            <span>Tugas</span>
                        </a>
                    </li>
                    <li class="nav-item quiz">
                        <a class="nav-link" data-bs-toggle="tab" href="#quiz" role="tab">
                            <span>Kuis</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li class="d-flex gap-2">
                        <button class="btn btn-light back">
                            <i class="ti ti-arrow-left fs-4 text-dark me-1 mt-1"></i>
                            Kembali
                        </button>
                        <a href="{{ route('admin.create-materi.index', $id) }}" class="btn text-white addMaterials"
                            style="background-color: var(--purple-primary)">
                            <i class="ti ti-book fs-4 text-white me-1 mt-1"></i>
                            Tambah Materi
                        </a>
                        <a href="{{ route('admin.create-task.index') }}" class="btn text-white d-none addTask"
                            style="background-color: var(--purple-primary)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white mb-1 me-1" width="16"
                                height="16" viewBox="-2 -2 24 24">
                                <path fill="currentColor"
                                    d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2m-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2m0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2m-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414z" />
                            </svg>
                            Tambah Tugas
                        </a>
                        <a class="btn text-white d-none addQuiz" style="background-color: var(--purple-primary)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white mb-1 me-1" width="16"
                                height="16" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
                            </svg>
                            Tambah Quiz
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="materi" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.panes.tab-materials')
        </div>

        <div class="tab-pane" id="task" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.panes.tab-task')
        </div>

        <div class="tab-pane" id="quiz" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.panes.tab-quiz')
        </div>
    </div>


    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="d-flex gap-2">
            <div class="input-group">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg></span>
                <input type="search" class="form-control border-start-0" placeholder="Search...">
            </div>
            <div class="input-group">
                <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-filter">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                    </svg>
                </div>
                <select name="filter" id="filter" class="form-control">
                    <option value="">Terbaru</option>
                </select>
            </div>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.courses.show', 2) }}" class="btn" style="background:#E8E8E8;"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l14 0" />
                    <path d="M5 12l6 6" />
                    <path d="M5 12l6 -6" />
                </svg> Kembali</a>
            <button class="btn btn-primary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                    <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                    <path d="M9 8h6" />
                </svg> Tambah Materi
            </button>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.pages.courses.panes.moduls.scripts.index')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ env('API_URL') }}" + "/api/modules/detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
                },
                dataType: "json",
                success: function(response) {
                    $('#title').html(response.data.title);
                    $('#sub_title').html(response.data.sub_title);

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data modul.",
                        icon: "error"
                    });
                }
            });
        });
    </script>
@endsection
