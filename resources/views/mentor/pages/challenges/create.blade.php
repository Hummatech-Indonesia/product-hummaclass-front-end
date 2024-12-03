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
                                <a class="text-muted" href="javascript:void(0)">Tambah tantangan pada hummalass</a>
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

    <div class="card p-3">
        <h5 class="fw-semibold">Tambah Tantangan</h5>
        <hr>
        <form action="" id="create-challenges-form" enctype="multipart/form-data">
            <div class="row">
                <div class="col col-md-6">
                    <label for="school_id" class="form-label">Sekolah</label>
                    <select name="school_id" id="school_id" class="form-select">
                        <option>Pilih Sekolah</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-md-6">
                    <label for="classroom_id" class="form-label">Kelas</label>
                    <select name="classroom_id" id="classroom_id" class="form-select">
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="title" class="fw-semibold form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Masukan jumlah kapasitas">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-12 mb-3">
                <label for="summernote-email-content" class="fw-semibold form-label">Deskripsi</label>
                <textarea name="description" id="summernote-description" cols="30" rows="10"></textarea>
                <div class="invalid-feedback"></div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="start_date" class="fw-semibold form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"
                        placeholder="Masukan jumlah kapasitas">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-6 mb-3">
                    <label for="end_date" class="fw-semibold form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="end_date" name="end_date"
                        placeholder="Masukan jumlah kapasitas">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <h5 class="card-title mb-0">
                    Tipe Pengumpulan
                </h5>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="image_active" name="image_active" value="0">
                <label class="form-check-label" for="image_active">Gambar</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="link_active" name="link_active" value="0">
                <label class="form-check-label" for="link_active">Link</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="file_active" name="file_active" value="0">
                <label class="form-check-label" for="file_active">File</label>
            </div>
    </div>
    <div class="text-end">
        <a href="{{ route('mentor.challenge.index') }}" class="btn text-white me-2"
            style="background-color: #DB0909">Batal</a>
        <button type="submit" class="btn text-white" style="background-color: var(--purple-primary)">Tambah</button>
    </div>
    </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#summernote-description').summernote({
                height: 200
            });
            $('#summernote-email-content').summernote({
                height: 200
            });
            // console.log("{{ session('hummaclass-token') }}");

            const selectSchool = $('#school_id');
            const selectClassroom = $('#classroom_id');

            let classrooms;

            selectSchool.change(function(e) {
                e.preventDefault();

                getClassroom($(this).val());
            });

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/schools-all",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    let schoolOptions = '';

                    response.data.forEach(school => {
                        schoolOptions += `
                        <option value="${school.slug}">${school.name}</option>
                        `
                    });
                    selectSchool.append(schoolOptions);
                },
                error: function(xhr, status, error) {
                    commonAlert({
                        'title': 'Gagal',
                        'text': xhr.responseJSON.message,
                        'icon': status
                    });
                }
            });

            function getClassroom(schoolSlug) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/classrooms/" + schoolSlug,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        let classrooomOptions = '';

                        response.data.forEach(school => {
                            classrooomOptions += `<option value="${school.id}">${school.name}</option>`
                        });
                        selectClassroom.empty();
                        selectClassroom.append(classrooomOptions);
                    },
                    error: function(xhr, status, error) {
                        commonAlert({
                            'title': 'Gagal',
                            'text': xhr.responseJSON.message,
                            'icon': status
                        });
                    }
                });
            }

            $('#create-challenges-form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);


                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/challenges",
                    data: formData,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil menambah data data.",
                            icon: "success"
                        }).then(() => {
                            window.location.href =
                                "{{ route('mentor.challenge.index') }}"
                        });
                    },
                    error: function(response) {
                        if (response.responseJSON && response.responseJSON.errors) {
                            $.each(response.responseJSON.errors, function(key, value) {
                                $('#' + key).addClass('is-invalid');
                                $('#' + key).next('.invalid-feedback').text(value[0]);
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
