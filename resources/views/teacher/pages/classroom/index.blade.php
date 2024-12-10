@extends('teacher.layouts.app')
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Daftar Kelas</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Kelas Anda pada kelas industri</a>
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

    <div class="row g-2 mb-3">
        <div class="col-12 col-lg-3">
            <input type="text" class="form-control rounded-3" style="background-color: #FFFFFF" id="placeholder"
                placeholder="Cari...">
        </div>
        <div class="col-12 col-lg-5">
            <div class="row g-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <select class="form-select rounded-3" style="background-color: #FFFFFF" id="schoolSelect">
                            <option selected disabled>Sekolah...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <select class="form-select rounded-3" style="background-color: #FFFFFF" id="classSelect">
                            <option selected disabled>Kelas...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="list-card">

    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {

            function get(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/teacher/classrooms",
                    headers: {
                        Authorization: 'Bearer {{ session('hummaclass-token') }}'
                    },
                    dataType: "json",
                    data: {
                        name: $('#placeholder').val(),
                        page: page 
                    },
                    success: function(response) {
                        console.log('Response:', response);
                        $('#list-card').empty();

                        if (response && response.data && response.data.data) {
                            if (response.data.data.length > 0) {
                                $.each(response.data.data, function(index, value) {
                                    $('#list-card').append(classroom(index, value));
                                });
                                $('#pagination').html(handlePaginate(response.data));
                            } else {
                                $('#list-card').append(emptyCard());
                            }
                        } else {
                            console.error('Data tidak ditemukan atau tidak sesuai format.');
                            $('#list-card').append(emptyCard());
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', xhr.responseText);
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kelas.",
                            icon: "error"
                        });
                    }
                });
            }

            function classroom(index, value) {
                return `
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-body rounded-3 border">
                        <span class="side-stick"></span>
                        <h5 class="note-title text-truncate w-75 mb-0 fw-semibold mb-1" data-noteHeading=""> ${value.name} </h5>
                        <p class="note-date fs-2 mb-2">${value.school.name}</p>
                        <div class="col-12 mb-3">
                            <span class="mb-1 badge font-medium rounded-1" style="background-color: #F6EEFE; color: #9425FE">
                                ${value.division.name}
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-7 d-flex align-items-center mb-3">
                                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle" width="31" height="31" />
                                <div class="ms-3">
                                    <h6 class="fs-3 fw-semibold mb-0">Wali Kelas</h6>
                                    <span class="fw-normal fs-2">${value.teacher.user.name}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end justify-content-center">
                                <a href="/dashboard/teacher/classroom-details"
                                    class="btn mb-1 waves-effect waves-light text-light w-100 btn-sm"
                                    style="background-color: #9425FE;" type="button">
                                    Lihat Kelas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                `
            }

            get(1);

        });
    </script>
@endpush
