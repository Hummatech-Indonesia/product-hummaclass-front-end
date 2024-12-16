@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }
    </style>
    <style>
        .card-body {
            position: relative;
            padding: 20px;
        }

        .card .badge {
            font-size: 0.85rem;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #F6EEFE;
            color: #9425FE;
        }

        .menu-icon {
            position: absolute;
            right: 10%;
            font-size: 1.2rem;
            color: #6c757d;
            cursor: pointer;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            font-size: 0.95rem;
            color: #666;
        }

        .detail-button {
            background-color: #7209DB;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 10px 0;
            width: 100%;
            font-weight: 500;
        }

        .card img {
            max-width: 70%;
            height: auto;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Daftar Sekolah</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Sekolah Pada Kelas Industri</a>
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

    <div class="d-flex justify-content-between mt-2 gap-2">
        <form action="" class="position-relative d-flex">
            <input type="text" class="form-control product-search px-4 ps-5" name="title"
                value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                placeholder="Cari...">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
        <a href="/admin/class/create-school" class="btn text-white" style="background-color: #7209DB">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="d-none d-sm-inline">
                <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
            </svg>
            Tambah <span class="d-none d-sm-inline">Sekolah</span>
        </a>
    </div>


    <section class="container my-4">
        <div class="row" id="list-card">

        </div>
    </section>


    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
    <x-delete-modal-component />
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            get(1)

            function get(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/schools?page=" + page,
                    headers: {
                        Authorization: 'Bearer {{ session('hummaclass-token') }}'
                    },
                    dataType: "json",
                    data: {
                        name: $('#search-name').val(),
                    },
                    success: function(response) {
                        $('#list-card').empty();
                        if (response.data.data.length > 0) {
                            $.each(response.data.data, function(index, value) {
                                $('#list-card').append(school(index, value));
                            });
                            $('#pagination').html(handlePaginate(response.data.paginate));
                        } else {
                            $('#list-card').append(emptyCard());
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kategori.",
                            icon: "error"
                        });
                    }
                });
            }

            function school(index, value) {
                function limitText(text, limit) {
                    return text.length > limit ? text.substring(0, limit) + "..." : text;
                }

                const limitedDescription = limitText(value.description, 80);
                const limitedAddress = limitText(value.address, 50);


                return `<div class="col-12 col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm text-center h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-center">
                        <img src="${value.photo}" alt="School Logo" 
                            class="img-fluid mb-3 rounded" 
                            style="max-width: 200px; height: auto;">

                        <div class="text-section w-100 d-flex flex-column align-items-start justify-content-between">
                            <div class="dropdown ms-auto">
                                <span class="menu-icon" title="Actions" data-bs-toggle="dropdown"
                                    aria-expanded="false">&#x22EE;</span>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/admin/class/edit-school/${value.slug}" class="dropdown-item">Edit</a>
                                    </li>
                                    <li>
                                        <a style="cursor:pointer" data-id="${value.id}" class="dropdown-item btn-delete">Hapus</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="text-start bold">${value.name}</h4>
                            <h6 class="text-muted text-start mb-4">${limitedDescription}</h6>
                            <h5 class="card-title bold mb-1">Alamat:</h5>
                            <p class="text-muted text-start">${limitedAddress}</p>
                        </div>

                        <a href="{{ route('admin.class.school.show', '') }}/${value.slug}" 
                            class="detail-button mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>`
            }


            $(document).on('click', '.btn-delete', function() {
                var id = $(this).data('id');
                var url = "{{ config('app.api_url') }}" + "/api/schools/" + id;

                $('#modal-delete').modal('show');

                funDelete(url);
            });

            function funDelete(url) {
                $('.deleteConfirmation').click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        headers: {
                            'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                        },
                        success: function(response) {
                            $('#modal-delete').modal('hide');
                            Swal.fire({
                                title: "Sukses",
                                text: "Berhasil menghapus data.",
                                icon: "success"
                            });
                            get(1);
                        },
                        error: function(response) {
                            $('#modal-delete').modal('hide');
                            if (response.status == 400) {
                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    text: response.responseJSON.meta.message,
                                    icon: "error"
                                });
                            } else {
                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    text: "Ada kesalahan saat menghapus data.",
                                    icon: "error"
                                });
                            }
                        }
                    });
                });
            }
        });
    </script>
@endsection
