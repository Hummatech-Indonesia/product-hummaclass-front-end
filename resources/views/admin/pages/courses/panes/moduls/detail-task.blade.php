@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-default {
            background-color: transparent;
            color: #000000;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: #9425FE;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Detail Tugas</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Detail Tugas pada modul</a>
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

    <div class="card p-3 mt-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item detailTask">
                        <a class="nav-link active" data-bs-toggle="tab" href="#detailTask" role="tab">
                            <span>Tugas</span>
                        </a>
                    </li>
                    <li class="nav-item listCollect">
                        <a class="nav-link" data-bs-toggle="tab" href="#listCollect" role="tab">
                            <span>Mengumpulkan</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li class="">
                        <button class="btn back" style="background:#E8E8E8;" onclick="window.history.back();">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M5 12l6 6" />
                                    <path d="M5 12l6 -6" />
                                </svg>
                                Kembali
                            </span>
                        </button>

                        <button class="btn btn-warning edittask ms-2" id="edit-task">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-2 -2 24 24">
                                    <path fill="currentColor"
                                        d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2m-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2m0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2m-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414z" />
                                </svg>
                                Edit Tugas
                            </span>
                        </button>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="detailTask" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.panes.task.tab-task')
        </div>

        <div class="tab-pane" id="listCollect" role="tabpanel">
            @include('admin.pages.courses.panes.moduls.panes.task.tab-collect')
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            // get task
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/module-tasks-detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {


                    $.ajax({
                        type: "get",
                        url: "{{ config('app.api_url') }}/api/module-tasks-detail/" + response
                            .data.id,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            $('#title').html(response.data.question);
                            $('#description').html(response.data.description);
                            // $('#sub_modul_count').html(response.data.sub_module_count);
                        }
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data tugas.",
                        icon: "error"
                    });
                }
            });

            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/submission-tasks/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    const table = $('#collect-content');
                    table.empty();
                    let submissionTasks = '';

                    response.data.forEach((submissionTask, index) => {
                        submissionTasks += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${submissionTask.user.name}</td>
                            <td>${submissionTask.created_at}</td>
                            <td>
                                <span class="badge bg-light-danger text-danger fs-2 fw-semibold py-2">Belum Dinilai</span>
                            </td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('admin.courses.detail-tab-collect.index', '') }}/${submissionTask.id}" class="btn text-white" style="background-color: #9425FE">Detail</a>
                                <div>
                                    <a href="{{ config('app.api_url') }}/api/submission-tasks/download/${submissionTask.id}" target="blank" class="btn btn-warning px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1M12 4.5v11m3.5-3.5L12 15.5L8.5 12"/></svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        `
                    });


                    table.append(submissionTasks);

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data tugas.",
                        icon: "error"
                    });
                }
            });

            $(document).on('click', '.detailTask', function() {
                $('.edittask').removeClass('d-none');
            });

            $(document).on('click', '.listCollect', function() {
                $('.edittask').addClass('d-none');
            });
        });
    </script>
@endsection
