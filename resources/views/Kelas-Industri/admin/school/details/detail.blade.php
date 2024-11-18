@extends('admin.layouts.app')

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
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}" alt="School Logo" class="img-fluid mb-2">
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
                <div class="col-md-12">
                    <div class="d-flex mb-3 me-3"><strong>Alamat:</strong><span class="" id="address"> Jl.
                            Ngadiluwih,
                            Kedungpedaringan, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163, Indonesia</span></div>

                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item home" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#classrooms" role="tab"
                            aria-selected="true">
                            <span>Kelas</span>
                        </a>
                    </li>
                    <li class="nav-item list" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#teachers" role="tab" aria-selected="false"
                            tabindex="-1">
                            <span>Guru</span>
                        </a>
                    </li>
                    <li class="nav-item test" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#students" role="tab" aria-selected="false"
                            tabindex="-1">
                            <span>Semua Siswa</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li class="">
                        <button class="btn addClassroom text-white" data-bs-toggle="modal"
                            data-bs-target="#modal-create-vouchers" style="background-color: var(--purple-primary)">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M18 12h-6m0 0H6m6 0V6m0 6v6" />
                                </svg>
                                Tambah Kelas
                            </span>
                        </button>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @include('Kelas-Industri.admin.school.details.panes.classroom')
        @include('Kelas-Industri.admin.school.details.panes.teacher')
        @include('Kelas-Industri.admin.school.details.panes.student')
    </div>

    @include('Kelas-Industri.admin.school.details.widgets.modal-set-class')
    @include('Kelas-Industri.admin.school.details.widgets.modal-import-student')
    @include('Kelas-Industri.admin.school.details.widgets.modal-edit-class')
    @include('Kelas-Industri.admin.school.details.widgets.modal-detail-student')
    @include('Kelas-Industri.admin.school.details.widgets.modal-detail-teacher')
@endsection

@section('script')
    @include('Kelas-Industri.admin.school.details.scripts.index')
    <script>
        $(document).ready(function() {
            var slug = "{{ $slug }}"
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/schools/" + slug,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#head_master').html(response.data.head_master);
                    $('#npsn').html(response.data.npsn);
                    $('#phone_number').html(response.data.phone_number);
                    $('#name').html(response.data.name);
                    $('#email').html(response.data.email);
                    $('#address').html(response.data.address);
                    $('#description').html(response.data.description);

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
    </script>
    <script>
        function user(index, value) {
            var url = "{{ config('app.api_url') }}";
            return `
                <tr class="fw-semibold">
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/no-image/no-profile.jpeg') }}"
                                class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40"
                                height="40" alt="">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">Nama</h6>
                                <span class="fw-normal">Email</span>
                            </div>
                        </div>
                    </td>
                    <td>Laki</td>
                    <td>1234567</td>
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
                            <button data-id="78216ca2-d422-3c8b-bcc2-60945b4eb294" class="btn btn-sm text-white btn-delete" fdprocessedid="athmbv" style="background-color: #DB0909;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7l16 0"></path>
                                    <path d="M10 11l0 6"></path>
                                    <path d="M14 11l0 6"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </button>
                            <a href="/admin/courses/lorem-ipsum/edit" class="btn btn-sm btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M32.206 6.025a6.907 6.907 0 1 1 9.768 9.767L39.77 18L30 8.23zM28.233 10L8.038 30.197a6 6 0 0 0-1.572 2.758L4.039 42.44a1.25 1.25 0 0 0 1.52 1.52l9.487-2.424a6 6 0 0 0 2.76-1.572l20.195-20.198z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            `
        }

        for (let index = 0; index < 10; index++) {
            $('#tableBody').append(user(index, 3));
        }
        for (let index = 0; index < 10; index++) {
            $('#table-user-classroom').append(user(index, 3));
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            const selectSiswa = $('.selectSiswa');
            const siswaCard = $('#siswaCard');
            const selectedStudentsCard = $('#selectedStudentsCard');
            const selectedStudentsList = $('#selectedStudents');

            selectSiswa.on('click', function() {
                siswaCard.removeClass('d-none');
            });

            $('.siswaOptions').select2({
                placeholder: "Cari",
                allowClear: true,
                dropdownParent: $('#modal-set-class')
            });

            $('.siswaOptions').on('change', function() {
                const selectedOptions = $(this).find('option:selected');
                const selectedCount = selectedOptions.length;
                selectSiswa.val(`${selectedCount} Siswa Telah Dipilih`);
            });

            $('#selectStudents').on('click', function() {
                const selectedOptions = $('.siswaOptions').find('option:selected');
                selectedStudentsList.empty();

                selectedOptions.each(function() {
                    const li = $('<li></li>').text($(this).text());
                    selectedStudentsList.append(li);
                });

                if (selectedStudentsList.children().length > 0) {
                    selectedStudentsCard.removeClass('d-none');
                    siswaCard.addClass('d-none');
                } else {
                    selectedStudentsCard.addClass('d-none');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            const inputSiswa1 = $('.inputSiswa1');
            const cardPilihSiswa1 = $('#cardPilihSiswa1');
            const selectedStudentsCard1 = $('#selectedStudentsCard1');
            const selectedStudentsList1 = $('#selectedStudentsList1');

            inputSiswa1.on('click', function() {
                cardPilihSiswa1.removeClass('d-none');
            });

            $('.selectSiswaOptions1').select2({
                placeholder: "Cari",
                allowClear: true,
                dropdownParent: $('#modal-edit-class')
            });

            $('.selectSiswaOptions1').on('change', function() {
                const selectedOptions = $(this).find('option:selected');
                const selectedCount = selectedOptions.length;
                inputSiswa1.val(`${selectedCount} Siswa Telah Dipilih`);
            });

            $('#selectStudents1').on('click', function() {
                const selectedOptions = $('.selectSiswaOptions1').find('option:selected');
                selectedStudentsList1.empty();

                selectedOptions.each(function() {
                    const li = $('<li></li>').text($(this).text());
                    selectedStudentsList1.append(li);
                });

                if (selectedStudentsList1.children().length > 0) {
                    selectedStudentsCard1.removeClass('d-none');
                    cardPilihSiswa1.addClass('d-none');
                } else {
                    selectedStudentsCard1.addClass('d-none');
                }
            });
        });
    </script>
@endsection
