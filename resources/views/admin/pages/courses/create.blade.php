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
                                <a class="text-muted" href="javascript:void(0)">Tambah Kursus</a>
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
        <form action="" id="create-course-form" enctype="multipart/form-data">
            <div class="card-body">
                <div class="bg-transparent border-bottom mb-3">
                    <h3><b>Tambah Kursus</b></h3>
                </div>
                <img src="" alt="image.jpg" id="preview-image" class="img-fluid d-none mb-3"
                    style="max-height: 200px;">
                <label for="photo" class="form-label">Thumbnail</label>
                <input type="file" name="photo" id="photo" class="form-control mb-3">
                <div class="row mb-3">
                    <div class="col col-md-6">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="belajar bahasa pemrograman java">
                    </div>
                    <div class="col col-md-6">
                        <label for="sub_title" class="form-label">Sub judul</label>
                        <input type="text" name="sub_title" id="sub_title" class="form-control"
                            placeholder="fundamental java">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-md-6">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select name="category_id" id="category_id" class="form-control"></select>
                    </div>
                    <div class="col col-md-6">
                        <label for="sub_category_id" class="form-label">Sub Kategori</label>
                        <select name="sub_category_id" id="sub_category_id" class="form-control">
                            <option value="">Pilih sub kategori</option>
                        </select>
                    </div>
                </div>
                <label for="is_premium" class="form-label">Status</label>
                <select name="is_premium" id="is_premium" class="form-control mb-3">
                    <option value="1">Premium</option>
                    <option value="0">Gratis</option>
                </select>
                <div class="row mb-3" id="price-row">
                    <div class="col col-md-6">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="100000">
                    </div>
                    <div class="col col-md-6">
                        <label for="promotional_price" class="form-label">Harga Diskon (opsional)</label>
                        <input type="text" name="promotional_price" id="promotional_price" class="form-control"
                            placeholder="500000">
                    </div>
                </div>
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" cols="15" rows="15" class="form-control summernote"
                    placeholder="lorem ipsum dolor sit amet"></textarea>
            </div>
            <div class="card-footer">
                <div class="ms-auto" style="width: fit-content;">
                    <button class="btn btn-danger" id="back-button" type="button">Kembali</button>
                    <button class="btn btn-primary" style="background-color: #9425FE;" type="submit">Konfirmasi</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            function previewImage(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#preview-image').attr('src', reader.result);
                    $('#preview-image').removeClass('d-none');
                    $('#preview-image').addClass('d-block');
                }
                reader.readAsDataURL(event.target.files[0]);
            }

            $('#photo').change(function(event) {
                previewImage(event);
            });

            $('.summernote').summernote({
                height: 200
            })

            function getSubCategories(categoryId) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/sub-categories/category/" + categoryId,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#sub_category_id').empty();
                        $('#sub_category_id').append(
                            `<option value="">Pilih sub kategori</option>`
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
                            text: "Ada kesalahan saat mengambil data sub kategori.",
                            icon: "error"
                        });
                    }
                });
            }

            function getCategories() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/categories",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#category_id').empty();
                        $('#category_id').append(`
                        <option value="">Pilih kategori</option>
                        `);
                        $.each(response.data.data, function(index, value) {
                            $('#category_id').append(`
                            <option value="${value.id}">${value.name}</option>
                            `);
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data kategori.",
                            icon: "error"
                        });
                    }
                });
            }

            getCategories()

            $('#category_id').change(function(e) {
                e.preventDefault();
                getSubCategories($(this).val())
            });

            $('#is_premium').change(function(e) {
                e.preventDefault();
                if ($(this).val() == 1) {
                    $('#price-row').show();
                } else {
                    $('#price-row').hide();
                }
            });

            $('#create-course-form').off().submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/courses",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses!",
                            text: "Berhasil menambah data kursus.",
                            icon: "success"
                        }).then(() => {
                            window.location.href = "/admin/courses"
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menambah data kursus.",
                            icon: "error"
                        });
                    }
                });
            });

        });
    </script>
@endsection
