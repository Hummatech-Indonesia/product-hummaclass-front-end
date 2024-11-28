@extends('mentor.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tantangan</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="javascript:void(0)">Tambah tantangan pada hummalass</a>
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
        <h5 class="fw-semibold">Tambah Tantangan</h5>
        <hr>
        <form action="" id="create-challenges-form" enctype="multipart/form-data">
            <div class="row">
                <div class="col col-md-6">
                    <label for="classroom_id" class="form-label">Sekolah</label>
                    <select name="classroom_id" id="classroom_id" class="form-select">
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col col-md-6">
                    <label for="is_online" class="form-label">Kelas</label>
                    <select name="is_online" id="is_online" class="form-select">
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="title" class="fw-semibold form-label">Judul</label>
                <input type="number" class="form-control" id="title" name="title"
                    placeholder="Masukan jumlah kapasitas">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-12 mb-3">
                <label for="summernote-email-content" class="fw-semibold form-label">Deskripsi</label>
                <textarea name="description" id="summernote-description" cols="30" rows="10"></textarea>
                <div class="invalid-feedback"></div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="start_date" class="fw-semibold form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"
                        placeholder="Masukan jumlah kapasitas">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-6 mb-3">
                    <label for="end_date" class="fw-semibold form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="end_date" name="end_date"
                        placeholder="Masukan jumlah kapasitas">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
    </div>
    <div class="text-end">
        <a href="{{ route('mentor.challenge.index') }}" class="btn text-white me-2" style="background-color: #DB0909">Batal</a>
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
            $('#summernote-email-content').summernote({
                height: 200
            });
        });
        $('#create-challenges-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/challenges",
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
                        text: "Berhasil menambah data data.",
                        icon: "success"
                    }).then(() => {
                        window.location.href = "{{ route('mentor.challenge.index') }}"
                    });
                },
                error: function(response) {
                    if (response.responseJSON && response.responseJSON.errors) {
                        $.each(response.responseJSON.errors, function(key, value) {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key).next('.invalid-feedback').text(value[0]);
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

        document.getElementById('is_premium').addEventListener('change', function() {
            var priceContainer = document.getElementById('price-container');
            priceContainer.style.display = this.value == '0' ? 'none' : 'block';
        });

        document.getElementById('is_online').addEventListener('change', function() {
            var locationContainer = document.getElementById('location-container');
            locationContainer.style.display = this.value == '1' ? 'none' : 'block';
        });

        document.getElementById('roundown-btn').addEventListener('click', function() {})
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
