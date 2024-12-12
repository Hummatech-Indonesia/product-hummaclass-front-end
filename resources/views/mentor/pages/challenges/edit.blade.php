@extends('mentor.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tantangan</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="javascript:void(0)">Edit tantangan pada hummalass</a>
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

    <div class="card">
        <form action="" id="edit-challenge-form">
            <div class="card-body">
                <h3 class="mb-3"><b>Edit Tantangan</b></h3>

                <div class="row mb-3">
                    <div class="col col-md-6">
                        <label for="school_id" class="form-label">Sekolah</label>
                        <select name="school_id" id="school_id" class="form-control"></select>
                    </div>
                    <div class="col col-md-6">
                        <label for="classroom_id" class="form-label">Kelas</label>
                        <select name="classroom_id" id="classroom_id" class="form-control">
                            <option value="">Pilih Kelas</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col col-md-12">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="belajar bahasa fundamental java">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col col-md-12">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" cols="15" rows="5" class="form-control summernote"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col col-md-6">
                        <label for="start_date" class="form-label">Tanggal Mulai</label>
                        <input type="datetime-local" name="start_date" id="start_date" class="form-control">
                    </div>
                    <div class="col col-md-6">
                        <label for="end_date" class="form-label">Tanggal Berakhir</label>
                        <input type="datetime-local" name="end_date" id="end_date" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Pengumpulan</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input primary" type="checkbox" id="image_active" name="image_active"
                                value="1">
                            <label class="form-check-label" for="image_active">Gambar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input primary" type="checkbox" id="file_active" name="file_active"
                                value="1">
                            <label class="form-check-label" for="file_active">File</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input primary" type="checkbox" id="link_active" name="link_active"
                                value="1">
                            <label class="form-check-label" for="link_active">Link</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary" id="submit-button" type="submit">Konfirmasi</button>
                        <button class="btn btn-danger" id="cancel-button" type="button"
                            onclick="window.location.href = '/mentor/challenges';">Kembali</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            function formatToISO(dateString) {
                const months = {
                    "January": "01",
                    "February": "02",
                    "March": "03",
                    "April": "04",
                    "May": "05",
                    "June": "06",
                    "July": "07",
                    "August": "08",
                    "September": "09",
                    "October": "10",
                    "November": "11",
                    "December": "12"
                };

                const [day, monthName, year, time] = dateString.split(/[- ]+/);
                const month = months[monthName];

                return `${year}-${month}-${day.padStart(2, '0')}T${time}`;
            }

            function getChallenge() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/challenges/{{ $slug }}",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#title').val(response.data.title)
                        $('#description').summernote('code', response.data.description)
                        $('#start_date').val(formatToISO(response.data.start_date))
                        $('#end_date').val(formatToISO(response.data.end_date))
                        response.data.image_active == 1 ? $('#image_active').attr('checked', true) : $(
                            '#image_active').attr('checked', false);;
                        response.data.link_active == 1 ? $('#link_active').attr('checked', true) : $(
                            '#link_active').attr('checked', false);;
                        response.data.file_active == 1 ? $('#file_active').attr('checked', true) : $(
                            '#file_active').attr('checked', false);;

                        $('#edit-challenge-form').off('submit')
                        $('#edit-challenge-form').submit(function(e) {
                            e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: "{{ config('app.api_url') }}/api/challenges/" +
                                    response.data.id + "?_method=PATCH",
                                headers: {
                                    Authorization: 'Bearer ' +
                                        "{{ session('hummaclass-token') }}"
                                },
                                data: new FormData(this),
                                processData: false,
                                contentType: false,
                                dataType: "json",
                                success: function(response) {
                                    Swal.fire({
                                        title: "Sukses!",
                                        text: "Berhasil menambah tantangan.",
                                        icon: "success"
                                    }).then(() => {
                                        window.location.href =
                                            "/mentor/challenges"
                                    });
                                },
                                error: function(xhr) {
                                    Swal.fire({
                                        title: "Terjadi Kesalahan!",
                                        text: "Ada kesalahan saat menambah data tantangan.",
                                        icon: "error"
                                    });
                                }
                            });
                        });

                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menambah data tantangan.",
                            icon: "error"
                        });
                    }
                });
            }

            getChallenge()

            $('.summernote').summernote({
                height: 200
            })

            function getClassrooms(schoolSlug) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/classrooms/" + schoolSlug,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#classroom_id').empty();
                        $('#classroom_id').append(`
                            <option value="">Pilih Kelas</option>  
                        `);
                        $.each(response.data, function(index, value) {
                            $('#classroom_id').append(`
                            <option value="${value.id}">${value.name}</option>
                            `);
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data tantangan.",
                            icon: "error"
                        });
                    }
                });
            }

            function getSchools() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/schools-all",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#school_id').empty();
                        $('#school_id').append(`
                            <option value="">Pilih Sekolah</option>  
                        `);
                        $.each(response.data, function(index, value) {
                            $('#school_id').append(`
                            <option value="${value.slug}" >${value.name}</option>
                            `);
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data tantangan.",
                            icon: "error"
                        });
                    }
                });
            }

            getSchools()

            $('#school_id').change(function(e) {
                e.preventDefault();
                getClassrooms($(this).val())
            });

        });
    </script>
@endsection
