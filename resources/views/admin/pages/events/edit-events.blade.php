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
                                <a class="text-muted" href="javascript:void(0)">Daftar event pada hummalass</a>
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

    <div class="card p-3">
        <h5 class="fw-semibold">Ubah Event</h5>
        <hr>
        <form action="" id="update-events-form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="image" class="fw-semibold form-label">Thumbnail</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-6 mb-3">
                    <label for="title" class="fw-semibold form-label">Judul Event</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukan judul">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-md-6">
                    <label for="is_premium" class="form-label">Status</label>
                    <select name="has_certificate" id="is_premium" class="form-select">
                        <option value="0">Gratis</option>
                        <option value="1">Premium</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-md-12 mb-3" id="price-container" style="display: none">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Masukan harga">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-6 mb-3">
                    <label for="capacity" class="fw-semibold form-label">Kapasitas</label>
                    <input type="text" class="form-control" id="capacity" name="capacity"
                        placeholder="Masukan jumlah kapasitas">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-md-6">
                    <label for="is_online" class="form-label">Status Online</label>
                    <select name="is_online" id="is_online" class="form-select">
                        <option value="1">Online</option>
                        <option value="0">Offline</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12 mb-3" id="location-container" style="display: none">
                    <label for="location" class="fw-semibold form-label">Lokasi</label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="Masukan lokasi">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12 mb-3">
                    <label for="start_date" class="fw-semibold form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"
                        placeholder="Masukan jumlah kapasitas">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-12 mb-3">
                    <label for="summernote-description" class="fw-semibold form-label">Deskripsi</label>
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
                                <div class="col-11">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="start" class="fw-semibold form-label">Jam Mulai</label>
                                            <input type="time" class="form-control" name="start[]"
                                                placeholder="Masukan jam mulai">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="end" class="fw-semibold form-label">Jam Akhir</label>
                                            <input type="time" class="form-control" name="end[]"
                                                placeholder="Masukan jam akhir">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="user" class="fw-semibold form-label">Pengisi Acara</label>
                                            <input type="text" class="form-control" name="user[]"
                                                placeholder="Masukan pengisi acara">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="session" class="fw-semibold form-label">Kegiatan Acara</label>
                                            <input type="text" class="form-control" name="session[]"
                                                placeholder="Masukan kegiatan acara">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-1 mb-3 d-flex flex-column justify-content-end">
                                    <div>
                                        <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light"
                                            style="margin-top: 30px;" type="button">
                                            <i class="ti ti-circle-x fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-repeater-create="" class="btn text-white"
                        style="background-color: var(--purple-primary)">
                        <div class="d-flex align-items-center">
                            <i class="ti ti-plus ms-1 fs-5 me-1"></i> Tambah Acara
                        </div>
                    </button>
                </div>
            </div>

            <div class="text-end">
                <button type="button" class="btn text-white me-2" style="background-color: #DB0909">Batal</button>
                <button type="submit" class="btn text-white"
                    style="background-color: var(--purple-primary)">Ubah</button>
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

        var id = "{{ $id }}"
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/events/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.data);
                    $('#title').val(response.data.title);
                    $('#start_date').val(response.data.start_date);
                    $('#capacity').val(response.data.capacity);
                    $('#summernote-description').summernote('code', response.data.description);
                },
                error: function(response) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menampilkan event data.",
                        icon: "error"
                    });
                }
            });
        });

        $('#update-events-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            console.log(formData);
            

            // $.ajax({
            //     type: "PUT",
            //     url: "{{ config('app.api_url') }}/api/events/" + id,
            //     data: formData,
            //     headers: {
            //         Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            //     },
            //     dataType: "json",
            //     contentType: false,
            //     processData: false,
            //     success: function(response) {
            //         Swal.fire({
            //             title: "Sukses",
            //             text: "Berhasil mengubah data.",
            //             icon: "success"
            //         });
            //     },
            //     error: function(response) {
            //         if (response.responseJSON && response.responseJSON.errors) {
            //             $.each(response.responseJSON.errors, function(key, value) {
            //                 $('#' + key).addClass('is-invalid');
            //                 $('#' + key).next('.invalid-feedback').text(value[0]);
            //             });
            //         } else {
            //             Swal.fire({
            //                 title: "Terjadi Kesalahan!",
            //                 text: "Ada kesalahan saat menyimpan data.",
            //                 icon: "error"
            //             });
            //         }
            //     }
            // });
        });

        document.getElementById('is_premium').addEventListener('change', function() {
            var priceContainer = document.getElementById('price-container');
            priceContainer.style.display = this.value == '1' ? 'none' : 'block';
        });

        document.getElementById('is_online').addEventListener('change', function() {
            var locationContainer = document.getElementById('location-container');
            locationContainer.style.display = this.value == '1' ? 'none' : 'block';
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let repeaterContainer = document.querySelector('[data-repeater-list]');
        let addButton = document.querySelector('[data-repeater-create]');
        let template = document.querySelector('[data-repeater-item]').cloneNode(true);
        template.querySelectorAll('input').forEach(input => input.value = ''); // Kosongkan input di template
        
        addButton.addEventListener('click', function() {
            let newItem = template.cloneNode(true);
            let deleteButton = newItem.querySelector('[data-repeater-delete]');
            
            deleteButton.addEventListener('click', function() {
                if (confirm('Apakah Anda yakin ingin menghapus acara ini?')) {
                    newItem.remove();
                }
            });
            
            repeaterContainer.appendChild(newItem);
        });
        
        document.querySelectorAll('[data-repeater-delete]').forEach(function(deleteButton) {
            deleteButton.addEventListener('click', function() {
                if (confirm('Apakah Anda yakin ingin menghapus acara ini?')) {
                    deleteButton.closest('[data-repeater-item]').remove();
                }
            });
        });
    });
</script>
@endsection
