@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .form-container {
            border-radius: 8px;
            padding: 20px;
            background-color: #ffffff;
        }

        .form-container input,
        .form-container textarea,
        .form-container button {
            border-radius: 5px;
        }

        .form-container h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        @media (max-width: 767.98px) {
            .form-container h2 {
                font-size: 1.3rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Daftar Sekolah</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Daftar Sekolah Pada Kelas Industri</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-4 text-center">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <!-- Form Card -->
    <section class="container my-4">
        <div class="card form-container shadow p-4">
            <h2 class="text-start mb-2">Tambah Sekolah</h2>
            <form method="post" id="update-school" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col col-md-6 mb-3">
                        <label for="name" class="form-label">Nama Sekolah</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6 mb-3">
                        <label for="head_master" class="form-label">Nama Kepala Sekolah</label>
                        <input type="text" class="form-control" id="head_master" name="head_master">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col col-md-6 mb-3">
                        <label for="npsn" class="form-label">NPSN</label>
                        <input type="number" class="form-control" id="npsn" name="npsn">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-md-6 mb-3">
                        <label for="photo" class="form-label">Logo Sekolah</label>
                        <input type="file" class="form-control" id="photo" name="photo"><br>
                        <img src="" id="logo" alt="" srcset="" style="width: 200px">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-md-6 mb-3">
                        <label for="phone_number" class="form-label">Nomer Telepon</label>
                        <input type="number" class="form-control" id="phone_number" name="phone_number">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="mb-3 col">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="mb-3 col">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn" style="background-color: #7209DB;color: white;">Update</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var slug = "{{ $slug }}";
            let id;
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/schools/" + slug,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    id = response.data.id;
                    $('#name').val(response.data.name);
                    $('#head_master').val(response.data.head_master);
                    $('#npsn').val(response.data.npsn);
                    $('#email').val(response.data.email);
                    $('#phone_number').val(response.data.phone_number);
                    $('#address').val(response.data.address);
                    $('#description').val(response.data.description);
                    $('#logo').attr('src', response.data.photo);

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

            $('#update-school').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                formData.append('_method', 'PATCH');

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/schools/" + id,
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
                            window.location.href = "/admin/class/school";
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
        });
    </script>
@endsection
