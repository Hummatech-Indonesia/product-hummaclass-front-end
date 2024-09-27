@extends('admin.layouts.app')

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h5 class="fw-semibold mb-8">Event</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="javascript:void(0)">Daftar event pada hummalass</a>
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
    <h5 class="fw-semibold">Tambah Event</h5>
    <hr>
    <form action="" id="create-events-form">
        <div class="row">
            <div class="col-12 mb-3">
                <label for="" class="fw-semibold form-label">Thumbnail</label>
                <input type="file" class="form-control" id="image" name="image">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="" class="fw-semibold form-label">Judul Event</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukan judul">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col col-md-6">
                <label for="" class="form-label">Status</label>
                <select name="has_certificate" id="is_premium" class="form-select">
                    <option value="0">Gratis</option>
                    <option value="1">Premium</option>
                </select>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col col-md-12 mb-3" id="price-container" style="display: none">
                <label for="" class="form-label">Harga</label>
                <input type="number" class="form-control" id="price" name="price">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="" class="fw-semibold form-label">Kapasitas</label>
                <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Masukan jumlah kapasitas">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="" class="fw-semibold form-label">Lokasi</label>
                <select name="location" id="is_premium" class="form-select">
                    <option value="online">Online</option>
                    <option value="offline">Offline</option>
                </select>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col col-md-6">
                <label for="" class="form-label">Online</label>
                <select name="is_online" id="is_premium" class="form-select">
                    <option value="0">Online</option>
                    <option value="1">Offline</option>
                </select>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="" class="fw-semibold form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Masukan jumlah kapasitas">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="" class="fw-semibold form-label">Harga</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Masukan jumlah kapasitas">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-12 mb-3">
                <label for="" class="fw-semibold form-label">Deskripsi</label>
                <textarea name="description" id="summernote-description" cols="30" rows="10"></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>


        <div class="">
            <div class="email-repeater mb-3">
                <div data-repeater-list="repeater-group">
                    <div data-repeater-item="" class="mb-3">
                        <h5 class="fw-semibold mt-3">Runtunan Acara</h5>
                        <hr>
                        <div class="row">
                            <div class="col-5 mb-3">
                                <label for="" class="fw-semibold form-label">Jam Mulai</label>
                                <input type="time" class="form-control start" id="start" name="start" placeholder="Masukan jam mulai">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-1 mb-3"></div>
                            <div class="col-5 mb-3">
                                <label for="" class="fw-semibold form-label">Jam Akhir</label>
                                <input type="time" class="form-control" id="end" name="end" placeholder="Masukan jam akhir">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-11 mb-3">
                                <label for="" class="fw-semibold form-label">Pengisi Acara</label>
                                <input type="text" class="form-control" id="session" name="session" placeholder="Masukan pengisi acara">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-1 mb-3">
                                <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" style="margin-top: 30px;" type="button">
                                    <i class="ti ti-circle-x fs-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" data-repeater-create="" class="btn text-white" style="background-color: var(--purple-primary)">
                    <div class="d-flex align-items-center">
                        <i class="ti ti-plus ms-1 fs-5 me-1"></i> Tambah Acara
                    </div>
                </button>
            </div>


        </div>

        <div class="text-end">
            <button type="submit" class="btn text-white me-2" style="background-color: #DB0909">Batal</button>
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
    document.getElementById('is_premium').addEventListener('change', function() {
        var priceContainer = document.getElementById('price-container');

        if (this.value == '1') {
            priceContainer.style.display = 'block';
        } else {
            priceContainer.style.display = 'none';
        }
    });

</script>

<script>
    $(document).ready(function() {
        // Inisialisasi Repeater
        $('.email-repeater').repeater({
            initEmpty: false
            , defaultValues: {
                'email': ''
            }
            , show: function() {
                $(this).slideDown();
            }
            , hide: function(deleteElement) {
                if (confirm('Apakah kamu yakin ingin menghapus email ini?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        , });
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

    const eventDetails = 
        {
            // "title": "lorem ipsum"
            // , "description": "lorem ipsum dolor sit amet is simply dummy text for industries"
            // , "location": "permata regency 1 karangploso malang"
            // , "capacity": 2
            // , "price": 10000
            // , "start_date": "2024-09-23"
            // , "has_certificate": true
            // , "is_online": true
            // , "user_id": [
            //     "e9c93721-dd7b-314c-b6c0-010ac7711821"
            //     , "e9c93721-dd7b-314c-b6c0-010ac7711821"
            // ]
             "start": [
                "09:00:00"
                , "14:00:00"
            ]
            , "end": [
                "11:00:00"
                , "16:00:00"
            ]
            , "session": [
                "Session 1"
                , "Session 2"
            ]
        }

    $('#create-events-form').submit(function(e) {

        
        e.preventDefault();

        var formData = new FormData(this);

        // var eventDetails = [];
        $('[data-repeater-item]').each(function(index, data) {
            var start = $(`input[name="repeater-group[${index}][start]"]`).val();
            var end = $(`input[name="repeater-group[${index}][end]"]`).val();
            var session = $(`input[name="repeater-group[${index}][session]"]`).val();
            // console.log( $(this).find('input[name="start"]'));
            // console.log(index);
            // console.log($(`input[name="repeater-group[${index}][start]"]`));
            
            
            
            var end = $(this).find('input[name="end"]').val();
            var session = $(this).find('input[name="session"]').val();

            eventDetails.start.push(start);
            
        });
        console.log(eventDetails.start);

        formData.append('event_details', JSON.stringify(eventDetails));

        $.ajax({
            type: "POST"
            , url: "{{config('app.api_url')}}/api/events"
            , headers: {
                'Authorization': `Bearer {{ session('hummaclass-token') }}`
            }
            , data: formData
            , dataType: "json"
            , contentType: false
            , processData: false
                // , success: function(response) {
                //     window.location.href = "/admin/events";
                // }
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
