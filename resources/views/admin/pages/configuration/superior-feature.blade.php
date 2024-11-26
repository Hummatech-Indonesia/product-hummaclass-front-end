@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Header</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="javascript:void(0)">Pengaturan pada header hummaclass</a>
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

    <form action="#" enctype="multipart/form-data" id="create-footer-form">
        <div class="card">
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
                        <label for="kursus" class="form-label">Kursus Terbaik</label>
                        <textarea name="kursus" id="kursus" class="form-control" rows="5"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tugas" class="form-label">Tugas Kompetensi</label>
                        <textarea name="tugas" id="tugas" class="form-control" rows="5"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#create-footer-form').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/contact?_method=PATCH",
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
                url: "{{ config('app.api_url') }}/api/contact",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#email").val(response.data.email);
                    $("#phone_number").val(response.data.phone_number);
                    $("#facebook").val(response.data.facebook);
                    $("#twitter").val(response.data.twitter);
                    $("#whatsapp").val(response.data.whatsapp);
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
