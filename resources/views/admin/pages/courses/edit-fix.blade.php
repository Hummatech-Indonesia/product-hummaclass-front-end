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
            <form action="#" enctype="multipart/form-data" id="edit-course-form">
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
                        <select name="sub_category_id" id="sub_category_id" class="form-select">
                            <option value="1">Kategori 1</option>
                            <option value="0">Kategori 2</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <div class="text-danger ivalid-feedback-description d-none">sdfasdfasdsf</div>
                    <textarea id="description" name="description"></textarea>
                </div>
                <div class="form-actions mt-3">
                    <div class="text-end">
                        <button type="submit" class="btn btn-light-primary text-primary font-medium">
                            Tambah
                        </button>
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-light-danger text-danger font-medium">
                            Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#description').summernote();

            function setValue(data) {
                $('#title').val(data.title);
                $('#sub_title').val(data.sub_title);
                $('#price').val(data.price);
                $(`#status option[text="${data.status}"]`)
                $('#status').val(data.status);
                // $('#sub_category_id').val(data.sub_category);
                $('#is_premium').val(data.is_premium);
                $('#description').summernote('code', data.description);
                // console.log(data);

            }
            // get
            $.ajax({
                type: "GET",
                url: "{{config('app.api_url')}}" + "/api/courses/" + "{{ request()->course }}",
                dataType: "json",
                success: function(response) {
                    setValue(response.data);
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });

            // create
            $('#edit-course-form').submit(function(e) {
                e.preventDefault(); // Mencegah submit form secara default

                // Mengonversi data form ke objek
                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });


                // Mengirim data menggunakan AJAX
                $.ajax({
                    url: "{{config('app.api_url')}}" + "/api/courses/{{ request()->course }}",
                    type: 'PATCH',
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            title: "Success",
                            text: response.meta.title,
                            icon: "success"
                        }).then(function(param) {
                            // window.location.reload();
                        });
                    },
                    error: function(error) {
                        let errors = error.responseJSON.data || {};
                        let message = error.responseJSON.meta.message;

                        // console.log(errors);

                        // console.log(formData);


                        if (errors) {
                            for (let key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    console.log(`${key}: ${errors[key]}`);
                                    if (key == 'description') {
                                        let feedback = $(`.invalid-feedback`).closest(
                                            `.${key}`);
                                        console.log(feedback);
                                        feedback.text(errors[key])
                                        feedback.removeClass('d-none')
                                    } else {
                                        $(`#${key}`).addClass('is-invalid')
                                            .closest('.invalid-feedback').text(errors[key]);
                                    }
                                }
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
