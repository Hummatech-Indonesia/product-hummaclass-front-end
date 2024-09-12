@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tambah Kursus</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html"></a>
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
        <div class="card-header bg-white border-bottom">
            <h5 class="mb-0">Tambah Kursus</h5>
        </div>
        <div class="card-body">
            <form action="#" enctype="multipart/form-data" id="create-course-form">
                <div class="row">
                    <div class="col col-md-12">
                        <label for="" class="form-label">Thumbnail</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col col-md-6">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6">
                        <label for="" class="form-label">Subtitle</label>
                        <textarea class="form-control" name="sub_title" id="sub_title" rows="1"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col col-md-6">
                        <label for="" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" name="price">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6">
                        <label for="" class="form-label">Status</label>
                        <select name="is_premium" id="is_premium" class="form-select">
                            <option value="1">Premium</option>
                            <option value="0">Gratis</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6 mt-3">
                        <label for="" class="form-label">Kategori</label>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="">Pilih Kategori</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6 mt-3">
                        <label for="" class="form-label">Sub Kategori</label>
                        <select name="sub_category_id" id="sub_category_id" class="form-select">
                            <option value="">Pilih Sub Kategori</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea id="description" name="description"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-actions mt-3">
                    <div class="text-end">
                        <button type="submit" class="btn btn-light-primary text-primary font-medium">
                            Tambah
                        </button>
                        <button type="reset" class="btn btn-light-danger text-danger font-medium">
                            Kembali
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 200
            });
            category()

            function category() {
                $.ajax({
                    type: "GET",
                    url: "{{config('app.api_url')}}" + "/api/categories",
                    dataType: "json",
                    success: function(response) {
                        $('#category_id').empty().append(
                            '<option value="">Pilih Kategori</option>'
                        ); // Kosongkan select dan tambahkan placeholder
                        $.each(response.data.data, function(index, value) {
                            $('#category_id').append(
                                `<option value="${value.id}">${value.name}</option>`
                            );
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kategori.",
                            icon: "error"
                        });
                    }
                });
            }

            function sub_category(category_id) {
                if (!category_id) {
                    $('#sub_category_id').empty().append(
                        '<option value="">Pilih Sub Kategori</option>'
                    );
                    return;
                }

                $.ajax({
                    type: "GET",
                    url: "{{config('app.api_url')}}" + "/api/sub-categories/category/" + category_id,
                    dataType: "json",
                    success: function(response) {
                        $('#sub_category_id').empty().append(
                            '<option value="">Pilih Sub Kategori</option>'
                        );

                        $.each(response.data, function(index, value) {
                            $('#sub_category_id').append(
                                `<option value="${value.id}">${value.name}</option>`
                            );
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data sub kategori.",
                            icon: "error"
                        });
                    }
                });
            }

            $('#category_id').on('change', function() {
                var category_id = $(this).val();
                sub_category(category_id);
            });

            category();


            $('#create-course-form').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{config('app.api_url')}}/api/courses",
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        window.location.href = "/admin/courses";
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.data;

                            $.each(errors, function(field, messages) {

                                $(`[name="${field}"]`).addClass('is-invalid');

                                $(`[name="${field}"]`).closest('.col').find(
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

        });
    </script>
@endsection
