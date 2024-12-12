@extends('mentor.layouts.app')
@section('style')
    <style>
        .text-custom-primary {
            color: #9425FE;
        }

        .bg-light-custom-primary {
            background: #F6EEFE;
        }

        .bg-custom-primary {
            background-color: #9425FE;
        }

        
    </style>
@endsection
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

    <div class="row gap-2">
        <div class="col-lg-4 col-sm-12 col-md-3 me-auto">
            <form action="" class="position-relative d-flex gap-2" id="search-form">
                <input type="text" class="form-control product-search px-4 ps-5" name="title" id="search"
                    style="background-color: #fff" placeholder="Cari..">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>

            </form>
        </div>
        <div class="col-sm-12 col-md-2 col-xl-auto">
            <a href="{{ route('mentor.challenge.create') }}"
                class="w-100 btn btn-primary bg-custom-primary rounded-2 border-0">
                <i class="ti ti-plus"></i> Tambah
            </a>
        </div>
    </div>

    <div class="row row-cols-2 row-cols-md-3 mt-4" id="challenge-list">

    </div>

    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
@endsection
@section('script')
    <x-delete-modal-component></x-delete-modal-component>
    <script>
        $(document).ready(function() {

            let debounceTimer;
            $('#search').keyup(function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function() {
                    getChallenges(1)
                }, 500);
            });

            function challengeList(index, value) {
                const maxDescriptionLength = 100;
                const maxTitleLength = 60;
                const truncatedDescription = value.description.length > maxDescriptionLength ?
                    value.description.substring(0, maxDescriptionLength) + "..." :
                    value.description;
                const truncatedTitle = value.title.length > maxTitleLength ?
                    value.title.substring(0, maxTitleLength) + "..." :
                    value.title;

                return `
                    <div class="col-12 col-lg-4 col-md-6 d-flex mb-3"> 
                        <div class="card rounded-4 shadow card-challenge h-100"> <!-- h-100 untuk membuat tinggi kartu konsisten -->
                            <div class="card-header bg-transparent px-3 pb-4">
                                <div class="row align-items-center">
                                    <div class="col-8 col-lg-8 col-md-8">
                                        <span class="badge rounded badge text-custom-primary bg-light-custom-primary fs-2">
                                            <span>Batas: ${value.end_date}</span>
                                        </span>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4">
                                        <div class="d-flex align-items-start">
                                            <div class="ms-auto">
                                                <div class="dropdown dropstart">
                                                    <a href="#" class="link text-dark" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical fs-7"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <h6 class="dropdown-header">Aksi</h6>
                                                        </li>
                                                        <li><button class="dropdown-item" id="edit-challenge-button" onclick="window.location.href='/mentor/challenges/${value.slug}/edit';">Edit</button></li>
                                                        <li><button class="dropdown-item" data-id="${value.id}" id="delete-challenge-button">Hapus</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-3 pt-0 pb-3 d-flex flex-column"> <!-- Flexbox untuk memastikan isi kartu rata -->
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center justify-content-center rounded-circle p-1 border border-3"
                                            style="aspect-ratio: 1 / 1; border-color: rgb(216, 216, 216) !important; overflow: hidden;">
                                            <span class="text-center" style="width: fit-content;">S</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="card-title fs-3 fw-semibold text-muted m-0 text-break" 
                                            title="${value.title}">${truncatedTitle}</h6>
                                    </div>
                                </div>
                                <h5 class="my-3 mb-3">${value.classroom} - ${value.school}</h5>
                                <p class="fs-2 mb-0">${truncatedDescription}</p>
                                <button type="submit" id="detail-challenge-button"
                                    class="btn btn-primary bg-custom-primary border-0 rounded-2 w-100 mt-auto" onclick="window.location.href='/mentor/challenges/${value.slug}'">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                    `;

            }


            function getChallenges(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/challenges?page=" + page,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: {
                        search: $('#search').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#challenge-list').empty();
                        $.each(response.data.data, function(indexInArray, valueOfElement) {
                            $('#challenge-list').append(challengeList(indexInArray,
                                valueOfElement));
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data tantangan.",
                            icon: "error"
                        });
                    }
                });
            }

            getChallenges(1)

            $(document).on('click', '#delete-challenge-button', function() {
                const id = $(this).data('id')
                $('#modal-delete').modal('show')
                $('#deleteForm').off('submit')
                $('#deleteForm').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "DELETE",
                        url: "{{ config('app.api_url') }}/api/challenges/" + id,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses!",
                                text: "Berhasil menghapus data tantangan.",
                                icon: "success"
                            });
                            getChallenges(1)
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menghapus data tantangan.",
                                icon: "error"
                            });
                        }
                    });
                });
            })
        });
    </script>
@endsection
