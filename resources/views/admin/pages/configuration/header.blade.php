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
                                <a class="text-muted " href="javascript:void(0)">Pengaturan pada header hummaclass</a>
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
    <form action="#" enctype="multipart/form-data" id="update-header-form">
        <div class="card">
            <div class="card-header bg-white border-bottom">
                <h5 class="mb-0">Info</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 mb-3">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" id="title" name="title" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col col-md-12">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $('#description').summernote({
            height: 200
        });
    </script>
    <script>
        $(document).ready(function() {

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/headers",
                dataType: "json",
                success: function(response) {
                    $('#title').val(response.data.title);
                    $('#description').summernote('code', response.data.description);
                }
            });

            $('#update-header-form').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/headers?_method=PATCH",
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


        });
    </script>
@endsection
