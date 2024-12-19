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

    <div class="col-12 col-lg-3">
        <input type="text" name="search" id="search" class="form-control mb-3" style="background-color: white"
            placeholder="Cari..">
    </div>

    <div class="table-responsive rounded">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Sekolah</th>
                </tr>
            </thead>
            <tbody id="attendance-student-list">
                <tr id="loading-row" style="display: none;">
                    <td colspan="6" class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        let loading = true;

        $(document).ready(function() {

            let debounceTimer;

            $('#search').keyup(function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function() {
                    getAttendanceStudent(1);
                }, 500);
            });

            var slug = "{{ $slug }}"

            function attendanceStudentList(index, value) {
                return `
                <tr>
                    <td>${index+1}</td>
                    <td>${value.name}</td>
                    <td>${value.classroom}</td>
                    <td>${value.school}</td>
                </tr>
                        `
            }

            function showLoading() {
                $('#loading-row').show();
            }

            function hideLoading() {
                $('#loading-row').hide();
            }

            function getAttendanceStudent(page) {
                showLoading();

                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/attendances/" + slug + '?page=' + page,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: {
                        search: $('#search').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#attendance-student-list').empty();
                        $.each(response.data.data, function(indexInArray, valueOfElement) {
                            $('#attendance-student-list').append(attendanceStudentList(
                                indexInArray, valueOfElement));
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Gagal mengambil data absensi siswa",
                            icon: "error"
                        });
                    }
                });
            }
            getAttendanceStudent(1);
        });
    </script>
@endsection
