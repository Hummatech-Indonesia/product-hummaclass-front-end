@extends('admin.layouts.app')

@section('style')
    <style>
        .nav-pills .nav-link.active {
            background-color: #9425FE;
            color: white;
        }
    </style>
    <style>
        .custom-cell {
            background-color: #F6EEFE;
            color: black !important;
            font-family: 'Playfair Display SC', serif;
            font-weight: bold;
        }

        .table td,
        .table th {
            padding-top: 6px;
            padding-bottom: 6px;
            border: 1px solid #d3d3d3;
            color: black;
        }

        .table input[type="checkbox"] {
            margin: 0;
            padding: 2px;
            transform: scale(1.3);
            cursor: pointer;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table,
        .table td,
        .table th {
            border: 1px solid #d3d3d3;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Pengaturan Penilaian</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Pengaturan Penilaian bagi Siswa Kelas
                                    Industri</a>
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

    <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row" id="myTabs">
        <li class="nav-item">
            <a href="javascript:void(0)"
                class="nav-link d-flex align-items-center justify-content-center active px-3 px-md-3 me-0 me-md-2 text-body-color"
                id="all-category" data-bs-toggle="pill" data-bs-target="#kelas10" data-class-level="10">
                <span class="d-md-block font-weight-medium">Kelas 10</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)"
                class="nav-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color"
                id="note-business" data-bs-toggle="pill" data-bs-target="#kelas11" data-class-level="11">
                <span class="d-md-block font-weight-medium">Kelas 11</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)"
                class="nav-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color"
                id="note-social" data-bs-toggle="pill" data-bs-target="#kelas12" data-class-level="12">
                <span class="d-md-block font-weight-medium">Kelas 12</span>
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="kelas10">
            @include('admin.pages.exams.assessment-settings.panes.tab-divisions')
        </div>
        <div class="tab-pane fade" id="kelas11">
            @include('admin.pages.exams.assessment-settings.panes.tab-divisions')
        </div>
        <div class="tab-pane fade" id="kelas12">
            @include('admin.pages.exams.assessment-settings.panes.tab-divisions')
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let division_id = '';
            let class_level = 10;

            $('.nav-link').click(function(e) {
                e.preventDefault();

                class_level = $(this).data('class-level');

                division_id = $('.division_id').val('');

                division();
            });

            division();

            function division() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/divisions",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('.division_id').empty();
                        $('.division_id').append(
                            `<option value="">Pilih Divisi</option>`
                        );
                        $.each(response.data, function(index, value) {
                            $('.division_id').append(
                                `<option value="${value.id}">${value.name}</option>`
                            );
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menyimpan data.",
                            icon: "error"
                        });
                    }
                });
            }

            $('.division_id').on('change', function() {
                division_id = $(this).val();

                if (division_id) {
                    getAssesmentForm(division_id, class_level);
                } else {
                    $('#body').empty();
                }
            });

            $('.setting-format').click(function() {
                division_id = $('.division_id').val();

                if (!division_id) {
                    alert('Harap pilih divisi terlebih dahulu!');
                    $('.setting-format').attr('href', '#')
                } else {
                    $('.setting-format').attr('href',
                        `/admin/exams/assessment-settings-format/${division_id}/${class_level}`)
                }
            });

            function getAssesmentForm(division_id, class_level) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/assesment-form/" + division_id + "/" +
                        class_level,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#body').empty();

                        // Sikap
                        $('#body').append(`
                        <tr>
                            <td class="custom-cell" style="background-color: #E8DEF3"><b>I</b></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"><b>SIKAP</b></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        </tr>
                    `);

                        $.each(response.data.assementFormAttitudes, function(index, value) {
                            $('#body').append(showTableAssesmentForm(index, value));
                        });

                        // Keterampilan
                        $('#body').append(`
                        <tr>
                            <td class="custom-cell" style="background-color: #E8DEF3"><b>II</b></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"><b>KETERAMPILAN</b></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                            <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        </tr>
                    `);

                        $.each(response.data.assementFormSkills, function(index, value) {
                            $('#body').append(showTableAssesmentForm(index, value));
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menyimpan data.",
                            icon: "error"
                        });
                    }
                });
            }

            function showTableAssesmentForm(index, value) {
                return `
                <tr>
                    <td>${index + 1}</td>
                    <td>${value.indicator}</td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
            `;
            }
        });
    </script>
@endsection
