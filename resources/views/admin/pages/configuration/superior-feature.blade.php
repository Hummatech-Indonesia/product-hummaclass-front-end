@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Fitur Unggulan</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="javascript:void(0)">Pengaturan pada fitur unggulan hummaclass</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3 text-center">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <form action="#" enctype="multipart/form-data" id="update-superior-feature-form">
            <div class="card-header bg-white border-bottom">
                <h5 class="mb-0">Info</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" id="title" name="title" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" rows="6"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="mentor" class="form-label">Mentor Terpercaya</label>
                        <textarea name="mentor" id="mentor" class="form-control" rows="5"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="course" class="form-label">Kursus Terbaik</label>
                        <textarea name="course" id="course" class="form-control" rows="5"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="task" class="form-label">Tugas Kompetensi</label>
                        <textarea name="task" id="task" class="form-control" rows="5"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#update-superior-feature-form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/superior-features?_method=PATCH",
                    data: new FormData(this),
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil mengubah data.",
                            icon: "success"
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
            });

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/superior-features",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#title').val(response.data.title);
                    $('#mentor').val(response.data.mentor);
                    $('#course').val(response.data.course);
                    $('#task').val(response.data.task);
                    $('#description').val(response.data.description);
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
@endpush
