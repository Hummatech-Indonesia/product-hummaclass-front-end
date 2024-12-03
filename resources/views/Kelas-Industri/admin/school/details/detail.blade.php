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
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
@endsection

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="" id="photo" style="border-radius:5px" alt="School Logo" class="img-fluid mb-2">
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
                        <a href="#" class="btn text-white addClassroom d-none"
                            style="background-color: #9425FE;"data-bs-toggle="modal"
                            data-bs-target="#modal-set-class">Tambah Kelas</a>
                        <a href="#teacherCreate" class="btn text-white addTeacher d-none" style="background-color: #9425FE;"
                            id="teacherCreate">Tambah Guru</a>
                        <a href="#studentCreate" class="btn text-white addStudent d-none btn-success"
                            id="studentCreate">Import Siswa</a>
                        <a href="#studentCreate" class="btn text-white addStudent d-none" style="background-color: #9425FE;"
                            id="studentCreate">Tambah Siswa</a>
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
    @include('Kelas-Industri.admin.school.details.widgets.modal-teacher')
    @include('Kelas-Industri.admin.school.details.widgets.modal-mentor')
    @include('Kelas-Industri.admin.school.details.widgets.modal-student')

    @include('Kelas-Industri.admin.school.details.widgets.modal-detail-teacher')
@endsection

@section('script')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/dist/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/dist/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/forms/select2.init.js') }}"></script>
    <x-delete-modal-component></x-delete-modal-component>
    @include('Kelas-Industri.admin.school.details.scripts.index')
    <script>
        $(document).ready(function() {
            var slug = "{{ $slug }}"
            $('#classroomCreate').attr('href', '/admin/class/classroom/create/' + slug);
            $('#teacherCreate').attr('href', '/admin/class/teacher/create/' + slug);
            $('#studentCreate').attr('href', '/admin/class/student/create/' + slug);
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
                    $('#photo').attr('src', response.data.photo);
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
