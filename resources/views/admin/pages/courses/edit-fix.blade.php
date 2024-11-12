@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Edit Kursus</h5>
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
            <h5 class="mb-0">Edit Kursus</h5>
        </div>
        <div class="card-body">
            <form action="#" enctype="multipart/form-data" id="update-course-form">
                <div class="row">
                    <div class="col col-md-12">
                        <label for="" class="form-label">Thumbnail</label><br>
                        <img id="thumbnail" width="250" alt="thumbnail" srcset=""><br>
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
                        <label for="" class="form-label">Status</label>
                        <select name="is_premium" id="is_premium" class="form-select">

                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6">
                        <label for="" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" name="price">
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
                        <button type="reset" class="btn btn-danger text-white font-medium back">
                            Kembali
                        </button>
                        <button type="submit" style="background-color: #9425FE;" class="btn text-white font-medium">
                            Tambah
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
            $('.back').click(function(e) {
                e.preventDefault();
                window.location.href = '/admin/courses';
            });

            var id = "{{ $id }}";
            var course;


            $('#description').summernote();

            function setValue(data) {
                $('#title').val(data.title);
                $('#sub_title').val(data.sub_title);
                $('#price').val(data.price);
                $('#description').summernote('code', data.description);
                $('#thumbnail').attr('src', data.photo);
                $('#is_premium').append(status(data.is_premium));
                course = data;
            }

            function status(is_premium) {
                let option;
                if (is_premium == 0) {
                    option = `<option value="1">Premium</option>
                            <option selected value="0">Gratis</option>`;
                } else {
                    option = `<option selected value="1">Premium</option>
                            <option value="0">Gratis</option>`;
                }
                return option
            }

            $('#update-course-form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                formData.append('_method', 'PATCH');

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/courses/" + course.id,
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
                            window.location.href = "/admin/courses";
                        });
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

            $('#category_id').change(function() {
                subCategory($(this).val());
            })


            // get course
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/courses/" + id,
                headers: {
                    'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                },
                dataType: "json",
                success: function(response) {
                    setValue(response.data);
                    getCategories();
                    subCategory(course.category.id);
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });

            //get category
            function getCategories() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}" + "/api/categories",
                    headers: {
                        'Authorization': `Bearer {{ session('hummaclass-token') }}`
                    },
                    dataType: "json",
                    success: function(response) {

                        $.each(response.data.data, function(index, value) {
                            $('#category_id').append(
                                `<option value="${value.id}">${value.name}</option>`);
                        });
                        $('#category_id').val(course.category.id).trigger('change');

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

            function subCategory(categoryId) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}" + "/api/sub-categories/category/" + categoryId,
                    headers: {
                        'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#sub_category_id').empty();
                        $.each(response.data, function(index, value) {
                            $('#sub_category_id').append(
                                `<option value="${value.id}">${value.name}</option>`);
                        });
                        $('#sub_category_id').val(course.sub_category.id).trigger('change');
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

            // create
            $('#edit-course-form').submit(function(e) {
                e.preventDefault();

                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });


                $.ajax({
                    url: "{{ config('app.api_url') }}" + "/api/courses/" + id,
                    headers: {
                        'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                    },
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
                        if (errors) {
                            for (let key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    if (key == 'description') {
                                        let feedback = $(`.invalid-feedback`).closest(
                                            `.${key}`);
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
