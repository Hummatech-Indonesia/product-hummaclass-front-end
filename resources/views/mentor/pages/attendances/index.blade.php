@extends('mentor.layouts.app')
@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Absensi</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Absensi untuk Siswa kelas industri</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-4 text-center">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3 gap-2">
        <input type="text" name="search" id="search" class="form-control" placeholder="Cari.."
            style="max-width: 250px; background-color: white">
        <button class="btn btn-primary" id="create-attendance-button">
            <i class="fa fa-plus fa-md d-none d-md-inline"></i> Tambah
        </button>
    </div>


    <h3 class="mb-3"><b>Daftar Absensi</b></h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="attendance-list">
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end">
        <nav id="pagination"></nav>
    </div>
@endsection
@section('script')
    <x-delete-modal-component></x-delete-modal-component>
    @include('mentor.pages.attendances.widgets.edit-attendance-modal')
    @include('mentor.pages.attendances.widgets.create-attendance-modal')
    <script>
        let debounceTimer;

        $('#search').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                get(1);
            }, 500);
        });

        function attendanceList(index, value) {
            return `
                        <tr>
                            <td>${index+1}</td>
                            <td>${value.classroom} - ${value.school}</td>
                            <td>${value.date}</td>
                            <td><span class="p-1 text-success bg-light-success rounded">${value.status == 1?'Dibuka':'Ditutup'}</span></td>
                            <td><button class="btn btn-secondary" id="share-link-button" data-id="${value.id}"><i class="ti ti-copy" style="font-size: 20px;"></i></button></td>
                            <td>
                                <ul class="d-flex gap-2">
                                    <li><button data-id="${value.id}" data-slug="${value.slug}" id="detail-attendance-button"  class="btn btn-info"><i class="fa fa-eye fa-md"></i></button></li>
                                    <li><button data-id="${value.id}" data-title="${value.title}" data-classroom_id="${value.classroom_id}" data-school_id="${value.school_id}" id="edit-attendance-button" class="btn btn-warning"><i class="fa fa-edit fa-md"></i></button></li>
                                    <li><button data-id="${value.id}" id="delete-attendance-button" class="btn btn-danger"><i class="fa fa-trash fa-md"></i></button></li>
                                </ul>
                            </td>
                        </tr>
            `
        }

        function get(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/attendances?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: {
                    search: $('#search').val()
                },
                dataType: "json",
                success: function(response) {
                    $('#attendance-list').empty();
                    $.each(response.data.data, function(indexInArray, valueOfElement) {
                        $('#attendance-list').append(attendanceList(indexInArray,
                            valueOfElement));
                    });
                    $('#pagination').html(handlePaginate(response.data.paginate));
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: xhr.responseJSON.meta.message,
                        icon: "error"
                    });
                }
            });
        }

        get(1);

        $(document).on('click', '#share-link-button', function() {
            const id = $(this).data('id')
            const attendanceUrl = "{{ config('app.api_url') }}/api/attendance/student/" + id
            navigator.clipboard.writeText(attendanceUrl)
                .then(() => {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Berhasil menyalin URL ke clipboard.",
                        icon: "success"
                    });
                })
                .catch(err => {
                    console.error('Gagal menyalin URL:', err);
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Berhasil melakukan absensi, namun gagal menyalin URL ke clipboard.",
                        icon: "warning"
                    });
                });
        })

        $(document).on('click', '#detail-attendance-button', function() {
            const slug = $(this).data('slug')

            window.location.href = "/mentor/attendance-detail/" + slug
        })

        $(document).on('click', '#create-attendance-button', function() {
            $('#create-attendance-modal').modal('show');
            $('#create-attendance-form').off('submit')
            $('#create-attendance-form').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/attendances",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        $('#create-attendance-modal').modal('hide');
                        get(1);
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Berhasil menambahkan data",
                            icon: "success"
                        });

                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: xhr.responseJSON.meta.message,
                            icon: "error"
                        });
                    }
                });
            });
        })

        $(document).on('click', '#edit-attendance-button', function() {
            const id = $(this).data('id')
            const classroom_id = $(this).data('classroom_id')
            const title = $(this).data('title')
            const school_id = $(this).data('school_id') 
            $('#edit-attendance-modal').modal('show')
            $('#classroom_id').val(classroom_id).trigger('change')
            $('#school_id').val(school_id).trigger('change')
            $('#title').val(title)
            $('#edit-attendance-form').off('submit')
            $('#edit-attendance-form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/attendances/" + id +
                        '?_method=PATCH',
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(response) {
                        $('#edit-attendance-modal').modal('hide')
                        get(1)
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Berhasil mengubah data",
                            icon: "success"
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: xhr.responseJSON.meta.message,
                            icon: "error"
                        });
                    }
                });
            });
        })

        $(document).on('click', '#delete-attendance-button', function() {
            const id = $(this).data('id')
            $('#modal-delete').modal('show')
            $('#edit-attendance-form').off('submit')
            $('#deleteForm').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "DELETE",
                    url: "{{ config('app.api_url') }}/api/attendances/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    dataType: "json",
                    success: function(response) {
                        get(1)
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Berhasil menghapus data",
                            icon: "success"
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: xhr.responseJSON.meta.message,
                            icon: "error"
                        });
                    }
                });

            });
        })
    </script>
@endsection
