@extends('admin.layouts.app')

@section('style')
    <style>
        #price-container {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tambah Kursus</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)"></a>
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
                    <div class="col col-md-12">
                        <label for="" class="form-label">Status</label>
                        <select name="is_premium" id="is_premium" class="form-select">
                            <option value="0">Gratis</option>
                            <option value="1">Premium</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6 mt-3" id="price-container">
                        <label for="" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Masukan harga">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6 mt-3" id="promotional-price-container" style="display: none">
                        <label for="" class="form-label">Harga Promo (opsional)</label>
                        <input type="text" class="form-control" id="promotional_price" name="promotional_price">
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
                        <button type="reset" class="btn btn-danger font-medium back">
                            Kembali
                        </button>
                        <button type="submit" style="background-color: #9425FE" class="btn text-white font-medium">
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
            $('#description').summernote({
                height: 200
            });
            $('.back').click(function(e) {
                e.preventDefault();
                window.location.href = '/admin/courses';
            });
            category()

            function category() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}" + "/api/categories",
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
                    url: "{{ config('app.api_url') }}" + "/api/sub-categories/category/" + category_id,
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
                    url: "{{ config('app.api_url') }}/api/courses",
                    headers: {
                        'Authorization': `Bearer {{ session('hummaclass-token') }}`
                    },
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

    <script>
        document.getElementById('is_premium').addEventListener('change', function() {
            var priceContainer = document.getElementById('price-container');
            var pricePriceContainer = document.getElementById('promotional-price-container');

            if (this.value == '1') {
                priceContainer.style.display = 'block';
                pricePriceContainer.style.display = 'block';
            } else {
                priceContainer.style.display = 'none';
                pricePriceContainer.style.display = 'none';
            }
        });
    </script>

    <script>
        const priceInput = document.getElementById('price');

        priceInput.addEventListener('input', function(e) {
            let value = this.value.replace(/[^0-9]/g, '');
            if (value) {
                this.value = formatRupiah(value);
            } else {
                this.value = '';
            }
        });

        function formatRupiah(angka) {
            return 'Rp. ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }
    </script>
    
    <script>
        const promotionalInput = document.getElementById('promotional_price');

        promotionalInput.addEventListener('input', function(e) {
            let value = this.value.replace(/[^0-9]/g, '');
            if (value) {
                this.value = formatRupiah(value);
            } else {
                this.value = '';
            }
        });

        function formatRupiah(angka) {
            return 'Rp. ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }
    </script>
@endsection
