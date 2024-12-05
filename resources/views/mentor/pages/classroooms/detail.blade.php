@extends('mentor.layouts.app')

@section('style')
    <style>
        .filter-radio:checked+.filter-label {
            background-color: #9425FE;
            color: white;
        }

        .filter-label {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .filter-radio {
            display: none;
        }

        .filter-label:hover {
            background-color: #9425FE;
            color: white;
        }

        .filter-option {
            padding-left: 0;
            margin-bottom: .125rem;
            width: 100%;
        }

        .filter-label {
            width: 100%;
        }

        .select2-container--default.select2-container--open.select2-container--above .select2-selection--single,
        .select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-color: #d7dce0;
            width: 435px;
            height: 40px;
        }

        .select2-container--default .select2-selection--multiple {
            border: 1px solid #d7dce0;
            border-radius: 5px;
            width: 440px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #9425FE !important;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: #9425FE;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

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

    <h5 class="fw-bolder my-4">Detail Kelas - <span class="name"></span></h5>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card rounded-4" style="position: relative; overflow: hidden;">
                <div class="card-body d-flex p-3">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="left: 0; bottom: 0;" width="80" height="70">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="right: 0; bottom: 0; transform: scaleX(-1)" width="80" height="70">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle">
                        </div>
                        <div class="col p-0">
                            <h6 class="card-title fs-4 fw-bolder teacher_name">Suyadi Oke Joss Sp.d</h6>
                            <p class="card-text fs-3 fw-semibold">Wali Kelas <span class="name"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card rounded-4" style="position: relative; overflow: hidden;">
                <div class="card-body d-flex p-3">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="left: 0; bottom: 0;" width="80" height="70">
                    <img src="{{ asset('assets/img/card/buble.png') }}" alt="" class="position-absolute"
                        style="right: 0; bottom: 0; transform: scaleX(-1)" width="80" height="70">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle">
                        </div>
                        <div class="col p-0">
                            <h6 class="card-title fs-4 fw-bolder mentor_name">Suyadi Oke Joss Sp.d</h6>
                            <p class="card-text fs-3 fw-semibold">Mentor Kelas Industri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('Kelas-Industri.admin.school.details.panes.student') --}}
    @include('mentor.pages.classroooms.panes.detail.student')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}" alt="School Logo"
                        class="img-fluid mb-2">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title" id="name"></h5>
                    <p id="description"></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Kepala Sekolah:</strong><span id="head_master">
                            Lasmono S.Pd.
                            Mm</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>NPSN:</strong><span id="npsn">
                            123123123</span></div>

                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Email:</strong><span id="email">
                            smkn1kepanjen@gmail.com</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>Nomor Telepon:</strong><span id="phone_number">
                            082229414949</span></div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between"><strong class="me-1">Alamat: </strong><span class=""
                            id="address" style="text-align: end;"> Jl.
                            Ngadiluwih,
                            Kedungpedaringan, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163, Indonesia</span></div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            let data = {}
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/mentor/detail/classroom/{{ $slug }}",
                headers: {
                    Authorization: "Bearer {{ session('hummaclass-token') }}"
                },
                success: function(response) {
                    $('.name').text(response.data.name);
                    $('.teacher_name').text(response.data.teacher.user.name);
                    $('.mentor_name').text(response.data.mentor.name);
                    $('#head_master').text(response.data.school.head_master);
                    $('#npsn').text(response.data.school.npsn);
                    $('#email').text(response.data.school.email);
                    $('#phone_number').text(response.data.school.phone_number);
                    $('#address').text(response.data.school.address);

                    data['classroom_id'] = response.data.id

                    getStudent();
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: xhr.responseJSON.meta.message,
                        icon: "error"
                    });
                }
            });
            $('#search-form').submit(function(e) {
                e.preventDefault();
                data['name'] = $('#input-search').val();

                getStudent();
            });

            function getStudent() {
                $.ajax({
                    type: "get",
                    url: "{{ config('app.api_url') }}/api/mentor/detail-student/classroom",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    data: data,
                    success: function(response) {
                        $('#tableBody').empty();
                        $.each(response.data, function(index, value) {
                            $('#tableBody').append(studentClassroom(index,
                                value));
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
            }

            function studentClassroom(index, value) {
                return `
                <tr class="fw-semibold">
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/no-image/no-profile.jpeg') }}"
                                class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40"
                                height="40" alt="">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">${value.student}</h6>
                                <span class="fw-normal">${value.email}</span>
                            </div>
                        </div>
                    </td>
                    <td>${value.gender}</td>
                    <td>${value.nisn}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm text-white" data-bs-toggle="modal"
                                data-bs-target="#modal-detail-student"
                                style="background-color: #9425FE">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path d="M3 13c3.6-8 14.4-8 18 0" />
                                        <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                    </g>
                                </svg>
                            </button>
                            <button class="btn btn-sm btn-danger text-white" data-bs-toggle="modal"
                                data-bs-target="#modal-detail-student">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                            <button class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#modal-detail-student">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                    </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            `
            }
        });
    </script>
@endsection
