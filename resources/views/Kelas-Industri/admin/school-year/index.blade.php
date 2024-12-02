@extends('admin.layouts.app')
@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Tahun Ajaran</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Tahun Ajaran Pada Kelas Industri</a>
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

    <div class="d-flex justify-content-between align-items-center my-3">
        <h3><b>Daftar tahun ajaran</b></h3>
        <div class="d-flex gap-2">
            <button class="btn px-3 py-1 text-white" id="create-school-year-button"
                style="background:var(--purple-primary)"><i class="fa fa-plus fa-md"></i>
                Tambah</button>
            <button class="btn px-3 py-1 text-white btn-danger" id="delete-school-year-button"><i
                    class="fa fa-minus fa-md"></i>
                Hapus tahun ajaran terakhir</button>
        </div>
    </div>

    <div class="row" id="school-year-list">

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {  
            function schoolYearList(index, value) {
                return `
            <div class="col-md-4">
                <div class="card position-relative" style="overflow: hidden;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Badge Tahun Ajaran di sisi kiri -->
                            <div class="position-absolute border rounded-end px-3 py-1 text-white"
                                style="left: 0; top: 10px; background: var(--purple-primary);">
                                <b>Tahun Ajaran</b>
                            </div>
                            <!-- Badge Aktif dan Ikon dengan Dropdown -->
                            <div class="dropdown py-1" style="position: absolute; right: 10px; top: 10px;">
                                <div class="badge" style="background: var(--light-purple); color: var(--purple-primary);">
                                    ${value.status == 'inactive' ? 'Tidak Aktif' : 'Aktif'}
                                </div> 
                            </div>
                        </div>
                        <!-- Tahun Ajaran -->
                        <h3 style="color: var(--purple-primary); margin-top: 40px;"><b>${value.school_year}</b></h3>
                    </div>
                    <!-- Lingkaran Manis -->
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="buble.png" class="position-absolute"
                        style="transform: scaleX(-1); bottom: 0; right: 0;">
                </div>
            </div>
            `
            }

            function getSchoolYears() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/school-years",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#school-year-list').empty();
                        $.each(response.data, function(indexInArray, valueOfElement) {
                            $('#school-year-list').append(
                                schoolYearList(indexInArray, valueOfElement)
                            );
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Gagal mengambil data tahun ajaran",
                            icon: "error"
                        });
                    }
                });
            }
            getSchoolYears();

            $(document).on('click', '#create-school-year-button', function() {

                Swal.fire({
                    title: "Apakah anda ingin menambah tahun ajaran baru?",
                    showCancelButton: true,
                    confirmButtonText: "Simpan",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/school-years",
                            headers: {
                                Authorization: 'Bearer ' +
                                    "{{ session('hummaclass-token') }}",
                            },
                            dataType: "json",
                            success: function(response) {
                                getSchoolYears();
                            },
                            error: function(xhr) {
                                Swal.fire("Terjadi kesalahan!", "", "error");
                            }
                        });
                        Swal.fire("Berhasil!", "", "success");
                    } else if (result.isDenied) {
                        Swal.fire("Batal menambah tahun ajaran", "", "info");
                    }
                });
            })

            $(document).on('click', '#edit-school-year-button', function() {
                const id = $(this).data('id')
                Swal.fire({
                    title: "Apakah anda ingin mengubah status tahun ajaran baru?",
                    showCancelButton: true,
                    confirmButtonText: "Simpan",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/school-years/" + id +
                                '?_method=PATCH',
                            headers: {
                                Authorization: 'Bearer ' +
                                    "{{ session('hummaclass-token') }}",
                            },
                            dataType: "json",
                            success: function(response) {
                                getSchoolYears();
                            },
                            error: function(xhr) {
                                Swal.fire("Terjadi kesalahan!", "", "error");
                            }
                        });
                        Swal.fire("Berhasil!", "", "success");
                    } else if (result.isDenied) {
                        Swal.fire("Batal mengubah tahun ajaran", "", "info");
                    }
                });
            })

            $(document).on('click', '#delete-school-year-button', function() {
                Swal.fire({
                    title: "Apakah anda ingin mengubah status tahun ajaran baru?",
                    showCancelButton: true,
                    confirmButtonText: "Simpan",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/school-years?_method=DELETE",
                            headers: {
                                Authorization: 'Bearer ' +
                                    "{{ session('hummaclass-token') }}",
                            },
                            dataType: "json",
                            success: function(response) {
                                getSchoolYears();
                            },
                            error: function(xhr) {
                                Swal.fire("Terjadi kesalahan!", "", "error");
                            }
                        });
                        Swal.fire("Berhasil!", "", "success");
                    } else if (result.isDenied) {
                        Swal.fire("Batal menghapus tahun ajaran", "", "info");
                    }
                });
            })
        });
    </script>
@endsection
