@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="font-weight-bold">Pengaturan Test</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted" href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3 text-center mb-n1">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <form action="" id="setting-test-form">
            <div class="row">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="form-label fw-semibold text-dark">Jumlah Soal</label>
                                <input type="text" class="form-control" id="total_question"
                                    placeholder="Masukan jumlah soal" name="total_question">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="form-label fw-semibold text-dark">Durasi Pengerjaan</label>
                                <input type="text" id="duration" class="form-control"
                                    placeholder="Masukan durasi pengerjaan" name="duration">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h6>Pengumpulan Kuis</h6>
                            <input type="hidden" name="is_submitted" value="0">
                            <div class="form-check form-switch">
                                <input class="form-check-input" id="is_submitted" name="is_submitted" type="checkbox"
                                    role="switch" value="1">
                                <label class="form-check-label" for="is_submitted">Fitur Pengumpulan</label>
                            </div>
                        </div>
                        <div class="d-flex mt-3 gap-2">
                            <div>
                                <span class="text-white py-1 px-1 d-flex align-items-center"
                                style="background-color: #7209DB; border-radius: 9px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="m8.93 6.588l-2.29.287l-.082.38l.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319c.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246c-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0a1 1 0 0 1 2 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <p>Aktifkan menu diatas untuk fitur siswa hanya bisa mengumpulkan 5 menit sebelum durasi
                                pengerjaan berakhir</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h5 class="fw-semibold mt-3 mb-3">Pengaturan Soal</h5>
                    <div class="email-repeater mb-3">
                        <div data-repeater-list="repeater-group">
                            <div data-repeater-item class="mb-3">
                                <div class="row">
                                    <div class="col-11" id="repeater">
                                        <div class="row">
                                            <div class="col-6 mb-3">
                                                <label class="fw-semibold form-label">Modul</label>
                                                <select id="module_id" name="module_id[]" class="form-control">
                                                    <option value="">Pilih Modul</option>
                                                </select>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label class="fw-semibold form-label">Jumlah Soal Diambil</label>
                                                <input type="number" class="form-control" name="question_count[]"
                                                    placeholder="Masukan jumlah soal">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 mt-2 d-flex justify-content-end align-items-center">
                                        <button data-repeater-delete class="btn btn-danger" type="button">
                                            <i class="ti ti-circle-x fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" data-repeater-create class="btn text-white" id="roundown-btn"
                            style="background-color: var(--purple-primary)">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-plus ms-1 fs-5 me-1"></i> Tambah
                            </div>
                        </button>
                    </div>
                </div>

                <div class="text-end">
                    <button type="button" class="btn text-white me-2 backBtn"
                        style="background-color: #DB0909;">Batal</button>
                    <button type="submit" class="btn text-white" style="background-color: #7209DB;">Tambah</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let repeaterContainer = document.querySelector('[data-repeater-list]');
            let addButton = document.querySelector('[data-repeater-create]');
            let template = document.querySelector('[data-repeater-item]').cloneNode(true);
            template.querySelectorAll('input').forEach(input => input.value = '');

            addButton.addEventListener('click', function() {
                let newItem = template.cloneNode(true);
                let deleteButton = newItem.querySelector('[data-repeater-delete]');

                deleteButton.addEventListener('click', function() {
                    if (confirm('Apakah Anda yakin ingin menghapus acara ini?')) {
                        newItem.remove();
                    }
                });

                repeaterContainer.appendChild(newItem);
            });

            document.querySelectorAll('[data-repeater-delete]').forEach(function(deleteButton) {
                deleteButton.addEventListener('click', function() {
                    if (confirm('Apakah Anda yakin ingin menghapus acara ini?')) {
                        deleteButton.closest('[data-repeater-item]').remove();
                    }
                });
            });
        });

        var id = "{{ $id }}";
        getModules();

        function getModules() {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/modules/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('.backBtn').click(function(e) {
                        e.preventDefault();
                        window.location.href = "/admin/courses/" + response.data[0].course.slug;
                    });
                    $.each(response.data, function(index, value) {
                        $('#module_id').append(`<option value="${value.id}">${value.title}</option>`);
                    });
                },
                error: function() {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat memuat data modul.",
                        icon: "error"
                    });
                }
            });
        }

        getQuiz();

        function getQuiz() {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/course-tests/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#duration').val(response.data.duration);
                    $('#total_question').val(response.data.total_question);
                    $('#is_submitted').prop('checked', response.data.is_submitted === 1);

                    response.data.courseTestQuestions.forEach((value) => {
                        $('#repeater').html(`
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="fw-semibold form-label">Modul</label>
                                    <select id="module_id" name="module_id[]" class="form-control">
                                        <option value="${value.module.id}">${value.module.title}</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="fw-semibold form-label">Jumlah Soal Diambil</label>
                                    <input type="number" class="form-control" value="${value.question_count}" name="question_count[]" placeholder="Masukan jumlah soal">
                                </div>
                            </div>`);
                    });
                },
                error: function(response) {
                    console.log(response.responseJSON.message);
                }
            });
        }
        $('#setting-test-form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/course-tests/" + id,
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
                        text: "Berhasil menambah data.",
                        icon: "success"
                    }).then(() => {
                        $('#settings-task').modal('hide');
                    });
                },
                error: function(response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.data;

                        $.each(errors, function(field, messages) {

                            $([name = "${field}"]).addClass('is-invalid');

                            $([name = "${field}"]).closest('.col').find(
                                '.invalid-feedback').text(messages[0]);
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
    </script>
@endsection
