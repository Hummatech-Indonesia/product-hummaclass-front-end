@extends('admin.layouts.app')

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h5 class="fw-semibold mb-8">Berita</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="javascript:void(0)">Daftar berita pada hummalass</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n1">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt="" class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card p-3">
    <h5 class="fw-semibold">Tambah Berita</h5>
    <hr>
    <form action="" id="create-news-form" method="POST">
        <div class="row">
            <div class="col-12 mb-3">
                <label for="thumbnail" class="fw-semibold form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-12 mb-3">
                <label for="title" class="fw-semibold form-label">Judul Berita</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukan judul">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col col-md-6 mb-3">
                <label for="" class="form-label">Kategori</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">Pilih Kategori</option>
                </select>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col col-md-6 mb-3">
                <label for="" class="form-label">Sub Kategori</label>
                <select name="sub_category_id" id="sub_category_id" class="form-select">
                    <option value="">Pilih Sub Kategori</option>
                </select>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-12 mb-3">
                <label for="summernote-description" class="fw-semibold form-label">Deskripsi</label>
                <textarea name="description" id="summernote-description" cols="30" rows="10"></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="text-end">
            <button type="button" class="btn text-white me-2" style="background-color: #DB0909">Batal</button>
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
    });

</script>

<script>
    function category() {
        $.ajax({
            type: "GET"
            , url: "{{config('app.api_url')}}" + "/api/categories"
            , dataType: "json"
            , success: function(response) {
                $('#category_id').empty().append(
                    '<option value="">Pilih Kategori</option>'
                );
                $.each(response.data.data, function(index, value) {
                    $('#category_id').append(
                        `<option value="${value.id}">${value.name}</option>`
                    );
                });
            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
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
            type: "GET"
            , url: "{{config('app.api_url')}}" + "/api/sub-categories/category/" + category_id
            , dataType: "json"
            , success: function(response) {
                $('#sub_category_id').empty().append(
                    '<option value="">Pilih Sub Kategori</option>'
                );

                $.each(response.data, function(index, value) {
                    $('#sub_category_id').append(
                        `<option value="${value.id}">${value.name}</option>`
                    );
                });
            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data sub kategori."
                    , icon: "error"
                });
            }
        });
    }

    $('#category_id').on('change', function() {
        var category_id = $(this).val();
        sub_category(category_id);
    });

    category();


    $('#create-news-form').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: "POST"
            , url: "{{config('app.api_url')}}/api/blogs"
            , headers: {
                'Authorization': `Bearer {{ session('hummaclass-token') }}`
            }
            , data: formData
            , dataType: "json"
            , contentType: false
            , processData: false
            , success: function(response) {
                window.location.href = "/admin/news";
            }
            , error: function(response) {
                if (response.status === 422) {
                    let errors = response.responseJSON.data;

                    $.each(errors, function(field, messages) {

                        $(`[name="${field}"]`).addClass('is-invalid');

                        $(`[name="${field}"]`).closest('.col').find(
                            '.invalid-feedback').text(messages[0]);
                    });
                } else {
                    Swal.fire({
                        title: "Terjadi Kesalahan!"
                        , text: "Ada kesalahan saat menyimpan data."
                        , icon: "error"
                    });
                }
            }
        });
    });

</script>
@endsection