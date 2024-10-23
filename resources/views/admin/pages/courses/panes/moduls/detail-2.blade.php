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
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }
    </style>
@endsection
{{-- @dd(request()->route()->getName()) --}}
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
            <span class="text-white ps-3 fs-5" style="font-weight: bold;">Step ke- <span id="step"></span></span>
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
                            <span id="module_task_count"></span> Tugas
                        </span>
                        <span class="badge bg-light-warning text-dark fw-semibold pe-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-warning mb-1 me-1" width="16"
                                height="16" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
                            </svg>
                            <span id="quiz_count"></span> Kuis
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
                            <span id="sub_modul_count"></span> Materi
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
                        <a href="{{ route('admin.create-task.index', $id) }}" class="btn text-white d-none addTask"
                            style="background-color: var(--purple-primary)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white mb-1 me-1" width="16"
                                height="16" viewBox="-2 -2 24 24">
                                <path fill="currentColor"
                                    d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2m-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2m0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2m-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414z" />
                            </svg>
                            Tambah Tugas
                        </a>
                        <a href="{{ route('quetion-quiz.setting', $id) }}" class="btn btn-warning d-none addQuiz">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19.9 12.66a1 1 0 0 1 0-1.32l1.28-1.44a1 1 0 0 0 .12-1.17l-2-3.46a1 1 0 0 0-1.07-.48l-1.88.38a1 1 0 0 1-1.15-.66l-.61-1.83a1 1 0 0 0-.95-.68h-4a1 1 0 0 0-1 .68l-.56 1.83a1 1 0 0 1-1.15.66L5 4.79a1 1 0 0 0-1 .48L2 8.73a1 1 0 0 0 .1 1.17l1.27 1.44a1 1 0 0 1 0 1.32L2.1 14.1a1 1 0 0 0-.1 1.17l2 3.46a1 1 0 0 0 1.07.48l1.88-.38a1 1 0 0 1 1.15.66l.61 1.83a1 1 0 0 0 1 .68h4a1 1 0 0 0 .95-.68l.61-1.83a1 1 0 0 1 1.15-.66l1.88.38a1 1 0 0 0 1.07-.48l2-3.46a1 1 0 0 0-.12-1.17ZM18.41 14l.8.9l-1.28 2.22l-1.18-.24a3 3 0 0 0-3.45 2L12.92 20h-2.56L10 18.86a3 3 0 0 0-3.45-2l-1.18.24l-1.3-2.21l.8-.9a3 3 0 0 0 0-4l-.8-.9l1.28-2.2l1.18.24a3 3 0 0 0 3.45-2L10.36 4h2.56l.38 1.14a3 3 0 0 0 3.45 2l1.18-.24l1.28 2.22l-.8.9a3 3 0 0 0 0 3.98m-6.77-6a4 4 0 1 0 4 4a4 4 0 0 0-4-4m0 6a2 2 0 1 1 2-2a2 2 0 0 1-2 2" />
                            </svg>
                            Pengaturan Quiz
                        </a>
                        <a href="{{ route('admin.create-quiz.index', $id) }}" class="btn text-white d-none addQuiz"
                            style="background-color: var(--purple-primary)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white mb-1 me-1" width="16"
                                height="16" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
                            </svg>
                            Tambah
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
            <div class="row" id="module-task-show">

            </div>
        </div>

        <div class="tab-pane" id="quiz" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.panes.tab-quiz')
        </div>
        <div class="tab-pane" id="question-bank" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.panes.tab-question-bank')
        </div>
    </div>

    <x-delete-modal-component></x-delete-modal-component>
@endsection

@section('script')
    {{-- @include('admin.pages.courses.panes.moduls.widgets.modal-settings-quiz') --}}
    @include('admin.pages.courses.panes.moduls.scripts.index')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/modules/detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {

                    $('.back').click(function(e) {
                        e.preventDefault();
                        window.location.href = "/admin/courses/" + response.data.course.slug;
                    });

                    $('#title').html(response.data.title);
                    $('#module_task_count').html(response.data.module_task_count);
                    $('#sub_title').html(response.data.sub_title);
                    $('#step').html(response.data.step);
                    $('#quiz_count').html(response.data.quizz_count);
                    $('#sub_modul_count').html(response.data.sub_module_count);

                    if (response.data.sub_modules.length === 0) {
                        $('#cardSubModul').append(empty());
                    } else {
                        $.each(response.data.sub_modules, function(index, value) {
                            $('#cardSubModul').append(subModul(index, value));
                        });
                    }
                    $('#module-task-show').empty();

                    if (response.data.module_tasks.length === 0) {
                        $('#module-task-show').append(empty());
                    } else {
                        $.each(response.data.module_tasks, function(index, value) {
                            $('#module-task-show').append(moduleTasks(index, value));
                        });
                    }

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data modul.",
                        icon: "error"
                    });
                }
            });

            function subModul(index, value) {

                return `<div class="col-lg-4">
                            <div class="card card-body">
                                <div class="d-flex justify-content-between mb-3">
                                    <span class="fw-semibold" style="color: var(--purple-primary)">Step Ke-${value.step}</span>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a class="text-warning" href="${"{{ route('admin.edit-materi.index', ':id') }}".replace(':id', value.id)}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28">
                                                <path fill="currentColor"
                                                    d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                            </svg>
                                        </a>
                                        <button class="bg-transparent border-0 btn-delete-sub-module" data-id="${value.id}" style="color: #DB0909;">
                                            <i class="ti ti-trash fs-7"></i>
                                        </button>
                                    </div>
                                </div>

                                <h5 class="text-dark me-1 fw-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                        <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                        <path d="M9 8h6" />
                                    </svg>
                                ${value.title}
                                </h5>
                                <p>${value.sub_title}</p>

                                <div>
                                    <a href="/admin/sub-modules/${value.slug}">
                                        <button class="btn text-white w-100" style="background-color: var(--purple-primary)">
                                            Lihat Materi
                                            <i class="ti ti-arrow-right fs-5"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>`;
            }

            function moduleTasks(index, value) {
                console.log(value);

                return `<div class="col-lg-4">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a data-id="${value.id}" data-question="${value.question}" data-point="${value.point}" data-description="${value.description}" class="text-warning" href="${"{{ route('admin.edit-task.index', ':id') }}".replace(':id', value.id)}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28">
                                            <path fill="currentColor"
                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                        </svg>
                                    </a>
                                    <button data-id="${value.id}" class="border-0 btn-delete-task bg-transparent" style="color: #DB0909;">
                                        <i class="ti ti-trash fs-7"></i>
                                    </button>
                                </div>
                            </div>

                            <h5 class="text-dark me-1 fw-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                    <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                    <path d="M9 8h6" />
                                </svg>
                               ${value.question}
                            </h5>
                            <p>${value.description}</p>

                            <div class="d-flex justify-content-between">
                                <button class="btn btn-light" style="color: var(--purple-primary)">
                                ${value.point}+ Points
                                </button>
                                <a href="${"{{ route('admin.detail-task.blade.php', ':id') }}".replace(':id', value.id)}" class="btn text-white d-flex align-items-center"
                                    style="background-color: var(--purple-primary)">
                                    Lihat Tugas
                                    <i class="ti ti-arrow-right fs-5 ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>`;
            }

        });
    </script>

    <script>
        $(document).on('click', '.btn-delete-sub-module', function() {
            var id = $(this).data('id');
            var url = "{{ config('app.api_url') }}" + "/api/sub-modules/" + id;

            $('#modal-delete').modal('show');

            funDelete(url);
        });

        function funDelete(url) {
            console.log(funDelete);

            $('.deleteConfirmation').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "DELETE",
                    url: url,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    success: function(response) {

                        $('#modal-delete').modal('hide');
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil menghapus data.",
                            icon: "success"
                        });

                        location.reload();
                    },
                    error: function(response) {
                        console.log(response);

                        $('#modal-delete').modal('hide');
                        if (response.status == 400) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: response.responseJSON.meta.message,
                                icon: "error"
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menghapus data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        }
    </script>

    <script>
        $(document).on('click', '.btn-delete-task', function() {
            const id = $(this).data('id');
            const url = "{{ config('app.api_url') }}" + "/api/module-tasks/" + id;

            $('#modal-delete').modal('show');
            deleteCTask(url);
        });

        function deleteCTask(url) {
            $('.deleteConfirmation').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "DELETE",
                    url: url,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.meta.message,
                            icon: "success"
                        });
                        get(1)
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menyimpan data.",
                            icon: "error"
                        });
                    }
                });
            });

        }
    </script>



    <script>
        $(document).ready(function() {
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
            }

            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                var href = $(e.target).attr('href');
                localStorage.setItem('activeTab', href);
            });
        });
    </script>
@endsection
