@extends('admin.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .btn-primary {
            background-color: #9425FE !important;
            border: none;
        }

        .btn-danger {
            background-color: #DB0909 !important;
            border: none;
        }


        .text-light-primary {
            color: #E8DEF3 !important;
        }

        .bg-light-primary {
            background-color: #E8DEF3 !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden bg-light-primary">
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

    <div class="row g-3 align-items-center mb-3">
        <div class="col-12 col-md-6 col-lg-9">
            <div class="col-lg-4">
                <input type="text" name="search" id="search" class="form-control bg-white rounded-3"
                    placeholder="Cari...">
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 text-md-end">
            <button class="btn btn-primary w-100 w-lg-auto" id="create-zoom-button">
                <i class="ti ti-plus"></i> Tambah Jadwal Zoom
            </button>
        </div>
    </div>


    <div class="card border">
        <div class="card-body">
            <h4><b>Daftar Zoom</b></h4>
            <div class="table-responsive ">
                <table class="table table-hover rounded">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Link</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="zoom-list">
                        {{-- @for ($i = 1; $i <= 10; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    XII RPL 1 - SMKN 1 Kepanjen</td>
                                <td>
                                    <span class="mb-1 badge font-medium bg-light-primary text-primary p-2 rounded-2">2024-09-05
                                        09:30:00</span>
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-secondary"><i class="fa fa-copy fa-md"></i></button>
                                        <div class="">
                                            https://us05web.zoom.us/j/89475402083?pwd=qpM8RxdJN7ZYTqZy9btmRWLvoGsLoC.1
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-danger"><i class="fa fa-trash fa-md"></i></button>
                                        <button class="btn btn-warning"><i class="fa fa-edit fa-md"></i></button>
                                    </div>
                                </td> 
                            </tr>
                        @endfor--}}
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <nav id="pagination"></nav>
                </div>
            </div>
        </div>
    </div>
    @include('Kelas-Industri.admin.zooms.widgets.create-zoom-modal')
    @include('Kelas-Industri.admin.zooms.widgets.edit-zoom-modal')
@endsection
@section('script')
    <x-delete-modal-component></x-delete-modal-component>

    <script>
        $(document).ready(function() {
            let schoolsCache = []; // Menyimpan data sekolah yang sudah diambil
            let classroomsCache = {}; // Menyimpan data kelas per sekolah

            // Load daftar sekolah (cached)
            loadSchools();

            function loadSchools() {
                // Jika data sudah ada di cache, langsung digunakan
                if (schoolsCache.length > 0) {
                    populateSchools(schoolsCache);
                } else {
                    $.ajax({
                        type: "GET",
                        url: "{{ config('app.api_url') }}/api/schools-all",
                        headers: {
                            Authorization: "Bearer {{ session('hummaclass-token') }}", // Pastikan token valid
                            Accept: "application/json",
                        },
                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                            schoolsCache = response.data; // Cache data sekolah
                            populateSchools(schoolsCache);
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Tidak dapat memuat data Sekolah.",
                                icon: "error",
                            });
                        },
                    });
                }
            }

            // Fungsi untuk mengisi dropdown sekolah
            function populateSchools(schools) {
                $("#school_id")
                    .empty()
                    .append('<option value="">Pilih Sekolah</option>');
                $.each(schools, function(index, school) {
                    $("#school_id").append(
                        `<option value="${school.id}" data-classrooms='${JSON.stringify(school.classrooms)}'>${school.name}</option>`
                    );
                });
            }

            // Event listener untuk dropdown sekolah
            $("#school_id").on("change", function() {
                var selectedOption = $(this).find(":selected");
                var classrooms = selectedOption.data("classrooms"); // Ambil data classrooms

                if (classrooms && classrooms.length > 0) {
                    classroomsCache[selectedOption.val()] = classrooms; // Cache kelas per sekolah
                    populateClassrooms(classrooms);
                } else {
                    // Jika tidak ada kelas
                    $("#classroom_id")
                        .empty()
                        .append('<option value="">Tidak ada Kelas</option>');
                    $("#mentor_id")
                        .empty()
                        .append('<option value="">Tidak ada Mentor</option>');
                }
            });

            // Fungsi untuk mengisi dropdown kelas
            function populateClassrooms(classrooms) {
                $("#classroom_id")
                    .empty()
                    .append('<option value="">Pilih Kelas</option>');
                $.each(classrooms, function(index, classroom) {
                    $("#classroom_id").append(
                        `<option value="${classroom.id}" data-mentor='${JSON.stringify(classroom.mentor)}'>${classroom.name}</option>`
                    );
                });
            }

            // Event listener untuk dropdown kelas
            $("#classroom_id").on("change", function() {
                var selectedOption = $(this).find(":selected");
                var mentor = selectedOption.data("mentor"); // Ambil data mentor

                if (mentor) {
                    // Populate dropdown mentor
                    $("#mentor_id")
                        .empty()
                        .append('<option value="">Pilih Mentor</option>');
                    $("#mentor_id").append(
                        `<option value="${mentor.id}">${mentor.name}</option>`
                    );
                } else {
                    // Jika tidak ada mentor
                    $("#mentor_id")
                        .empty()
                        .append('<option value="">Tidak ada Mentor</option>');
                }
            });
        });
    </script>

    <script>
            function zoomList(index, value) {
                return `
                <tr>
                    <td>${index+1}</td>
                    <td>${value.classroom.name} - ${value.school.name}</td>
                    <td>
                         <span class="mb-1 badge font-medium bg-light-primary text-primary p-2 rounded-2">${value.date}</span>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-secondary btn-copy" data-link="${value.link}"><i class="fa fa-copy fa-md"></i></button>
                            <div class="">
                                ${value.link}
                            </div>
                        </div>

                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-danger" id="delete-zoom-button" data-id="${value.id}"><i class="fa fa-trash fa-md"></i></button>
                            <button class="btn btn-warning btn-edit edit-zoom-button" 
                            data-id="${value.id}" 
                            data-title="${value.title}" 
                            data-school_id="${value.school.id}" 
                            data-classroom_id="${value.classroom.id}" 
                            data-mentor_id="${value.mentor.id}"
                            data-date="${value.date}" 
                            data-link="${value.link}">
                            <i class="fa fa-edit fa-md"></i></button>
                        </div>
                    </td>
                </tr>
                `
            }

            function get(page) {
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
                        $('#pagination').html(handlePaginate(response.data.paginate));
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

            get(1)

            $(document).on('click', '#create-zoom-button', function() {
                $('#create-zoom-modal').modal('show');

                $('#create-zoom-form')[0].reset();

                $('#create-zoom-form').off('submit');

                $('#create-zoom-form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/zooms",
                        headers: {
                            'Authorization': `Bearer {{ session('hummaclass-token') }}`
                        },
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses!",
                                text: "Berhasil menambah jadwal zoom",
                                icon: "success"
                            }).then(() => {
                                fetchNewData();
                                $('#create-zoom-modal').modal('hide');
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
            });


            function fetchNewData() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/zooms",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        const tableBody = $('#zoom-list');
                        tableBody.empty();

                        let content = '';
                        $.each(response.data.data, function(index, data) {
                            content += zoomList(index,
                                data);

                            console.log(content);

                        });

                        tableBody.html(content);
                    },
                    error: function(error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            let zoomId;


            $(document).on('click', '.btn-copy', function() {
                const zoomLink = $(this).data('link');

                if (navigator.clipboard) {
                    navigator.clipboard.writeText(zoomLink).then(() => {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Link Zoom berhasil disalin!",
                            icon: "success"
                        });
                    }).catch(err => {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Gagal menyalin link Zoom",
                            icon: "error"
                        });
                        console.error("Clipboard error:", err);
                    });
                } else {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Browser Anda tidak mendukung salin otomatis.",
                        icon: "error"
                    });
                }
            });

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
                            get(1)
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
    </script>
@endsection
