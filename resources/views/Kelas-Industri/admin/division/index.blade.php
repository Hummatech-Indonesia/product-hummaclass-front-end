@extends('admin.layouts.app')
@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Daftar Sekolah</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Daftar Sekolah Pada Kelas Industri</a>
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

    <div class="table-responsive">
        <div class="d-flex justify-content-between my-2">

            <form action="" id="search-form">
                <div class="d-flex gap-2">
                    <input type="text" name="search" id="search" placeholder="cari..." class="form-control bg-white">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>

            <button class="btn btn-primary" id="create-division-button">Tambah Divisi</button>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Kelas</td>
                    <td>Learning Path</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody id="table-body-division">

            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <x-create-division-modal></x-create-division-modal>
    <x-edit-division-modal></x-edit-division-modal>
    <x-detail-division-modal></x-detail-division-modal>
    <x-delete-modal-component></x-delete-modal-component>
    <script>
        $(document).ready(function() {
            function divisionList(index, value) {
                return `
                <tr>
                    <td>${index+1}</td>
                    <td>${value.name}</td>
                    <td>${value.classroom_count}</td>
                    <td>${value.learning_path_count}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary" data-id="${value.id}" data-name="${value.name}" data-classroom_count="${value.classroom_count}" data-learning_path_count="${value.learning_path_count}" id="detail-division-button">Detail</button>
                            <button class="btn btn-warning" data-id="${value.id}" data-name="${value.name}" id="edit-division-button">Edit</button>
                            <button class="btn btn-danger" data-id="${value.id}" id="delete-division-button">Hapus</button>
                        </div>
                    </td>                
                </tr>
`
            }

            function getDivision() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/divisions",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        $('#table-body-division').empty();
                        $.each(response.data, function(indexInArray, valueOfElement) {
                            $('#table-body-division').append(divisionList(indexInArray,
                                valueOfElement));
                        });
                    }
                });
            }
            getDivision()

            $(document).on('click', '#create-division-button', function() {
                $('#create-division-modal').modal('show');
                $('#create-division-form').off('submit');
                $('#create-division-form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/divisions",
                        data: new FormData(this),
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                        },
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        success: function(response) {
                            $('#create-division-modal').modal('hide');
                            $('#create-name-input').val('');
                            getDivision();
                        },
                        error: function(xhr) {
                            alert(xhr)
                        }
                    });
                });
            })

            $(document).on('click', '#edit-division-button', function() {
                $('#edit-division-modal').modal('show');
                let id = $(this).data('id');
                let name = $(this).data('name');
                $('#edit-name-input').val(name);
                $('#edit-division-button').off('submit');
                $('#edit-division-form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                        },
                        url: "{{ config('app.api_url') }}/api/divisions/" + id +
                            "?_method=PATCH",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        success: function(response) {
                            $('#edit-division-modal').modal('hide');
                            getDivision();
                        },
                        error: function(xhr) {
                            console.log(xhr);
                        }
                    });
                });
            })

            $(document).on('click', '#delete-division-button', function() {
                $('#modal-delete').modal('show');
                let id = $(this).data('id')
                $('#deleteForm').off('submit');
                $('#deleteForm').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/divisions/" + id +
                            "?_method=DELETE",
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                        },
                        dataType: "json",
                        success: function(response) {
                            $('#modal-delete').modal('hide');
                            getDivision();
                        },
                        error: function(xhr) {
                            alert(xhr)
                        }
                    });
                });
            })

            $(document).on('click', '#detail-division-button', function() {
                $('#detail-division-modal').modal('show')
                const name = $(this).data('name');
                const classroom_count = $(this).data('classroom_count');
                const learning_path_count = $(this).data('learning_path_count');
                $('#detail-division-name').html(name);
                $('#detail-division-classroom').html(classroom_count);
                $('#detail-division-learning-path').html(learning_path_count);
            })

        });
    </script>
@endsection
