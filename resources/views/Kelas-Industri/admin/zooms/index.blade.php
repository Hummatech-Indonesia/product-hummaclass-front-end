@extends('admin.layouts.app')
@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Daftar Zoom</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Daftar Zoom pada Kelas Industri</a>
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

    <div class="d-flex justify-content-between mb-3">
        <input type="text" name="search" id="search" class="form-control bg-white" placeholder="Cari.."
            style="max-width: 250px;">
        <button class="btn btn-primary" id="create-zoom-button"><i class="fa fa-plus fa-md"></i> Tambah Jadwal Zoom</button>
    </div>

    <div class="table-responsive ">
        <h3><b>Daftar Zoom</b></h3>
        <table class="table table-hover rounded">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="zoom-list">
                @for ($i = 1; $i <= 10; $i++)
                    {{-- <tr>
                        <td>{{ $i }}</td>
                        <td>XII RPL 1 - SMKN 1 Kepanjen</td>
                        <td>
                            <div class="bg-light-primary rounded text-primary p-2">2024-09-05 09:30:00</div>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-secondary"><i class="fa fa-copy fa-md"></i></button>
                                <div class="">
                                    https://us05web.zoom.us/j/89475402083?pwd=qpM8RxdJN7ZYTqZy9btmRWLvoGsLoC.1
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-danger"><i class="fa fa-trash fa-md"></i></button>
                                <button class="btn btn-warning"><i class="fa fa-edit fa-md"></i></button>
                            </div>
                        </td>
                    </tr> --}}
                @endfor
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    @include('Kelas-Industri.admin.zooms.widgets.create-zoom-modal')
    <x-delete-modal-component></x-delete-modal-component>
    <script>
        $(document).ready(function() {
            function zoomList(index, value) {
                return `
                <tr>
                    <td>${index+1}</td>
                    <td>${value.classroom.name} - ${value.school.name}</td>
                    <td>
                        <div class="bg-light-primary rounded text-primary p-2">${value.date}</div>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-secondary"><i class="fa fa-copy fa-md"></i></button>
                            <div class="">
                                ${value.link}
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-danger" id="delete-zoom-button" data-id="${value.id}"><i class="fa fa-trash fa-md"></i></button>
                            <button class="btn btn-warning" id="edit-zoom-button" data-id="${value.id}"><i class="fa fa-edit fa-md"></i></button>
                        </div>
                    </td>
                </tr>
                `
            }

            function getZoom(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/zooms?page=" + page,
                    headers: {
                        Authorization: 'Bearer ' +
                            "{{ session('hummaclass-token') }}",
                    },
                    data: {
                        search: $('#search').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#zoom-list').empty();
                        $.each(response.data.data, function(indexInArray, valueOfElement) {
                            $('#zoom-list').append(zoomList(indexInArray, valueOfElement));
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Gagal mengambil jadwal zoom",
                            icon: "error"
                        });
                    }
                });
            }

            getZoom(1)

            $(document).on('click', '#create-zoom-button', function() {
                $('#create-zoom-modal').modal('show')
                $('#create-zoom-form').off('submit')
                $('#create-zoom-form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/zooms",
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses!",
                                text: "Berhasil menambah jadwal zoom",
                                icon: "success"
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Gagal menambah jadwal zoom",
                                icon: "error"
                            });
                        }
                    });
                });
            })

            $(document).on('click', '#edit-zoom-button', function() {
                $('#edit-zoom-modal').modal('show')
                $('#edit-zoom-form').off('submit')
                $('#edit-zoom-form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/zooms/" + id +
                            '?_method=PATCH',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        success: function(response) {

                            Swal.fire({
                                title: "Sukses!",
                                text: "Berhasil mengubah jadwal zoom",
                                icon: "error"
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Gagal mengubah jadwal zoom",
                                icon: "error"
                            });
                        }
                    });
                });
            })

            $(document).on('click', '#delete-zoom-button', function() {
                const id = $(this).data('id')
                $('#modal-delete').modal('show')
                $('#deleteForm').off('submit')
                $('#deleteForm').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "DELETE",
                        url: "{{ config('app.api_url') }}/api/zooms/" + id,
                        headers: {
                            Authorization: 'Bearer ' +
                                "{{ session('hummaclass-token') }}",
                        },
                        dataType: "json",
                        success: function(response) {
                            getZoom(1)
                            Swal.fire({
                                title: "Sukses!",
                                text: "Berhasil menghapus jadwal zoom",
                                icon: "success"
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Gagal menghapus jadwal zoom",
                                icon: "error"
                            });
                        }
                    });
                });
            })
        });
    </script>
@endsection
