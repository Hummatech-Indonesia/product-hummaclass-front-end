@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Daftar Mentor</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Mentor Pada Kelas Industri</a>
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

    <div class="d-flex justify-content-between mt-2">
        <form action="" class="position-relative d-flex">
            <input type="text" class="form-control product-search px-4 ps-5" name="title"
                value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
        <button class="btn text-white" style="background-color: #7209DB" data-bs-toggle="modal" data-bs-target="#modalId">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
            </svg>
            Tambah Mentor
        </button>
    </div>

    <div class="row row-cols-1 row-cols-md-4 mt-3" id="mentor-list">
    </div>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
            <div class="modal-content">
                <form id="create-mentor-form" action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Tambah Mentor
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="placeholder" placeholder="Nama" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="placeholder" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="edit-mentor-modal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
            <div class="modal-content">
                <form id="edit-mentor-form" action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Mentor
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email"
                                name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let mentorId;
            $('#edit-mentor-form').submit(function (e) { 
                e.preventDefault();
                
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: `{{ config('app.api_url') }}/api/mentors-update/${mentorId}`,
                    data: formData,
                    dataType: "json",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                        $('#edit-mentor-modal').modal('hide');
                    },
                });
            });
            
            $('#create-mentor-form').submit(function(e) {
                e.preventDefault();

                formData = $(this).closest('form').serialize();

                $.ajax({
                    type: "post",
                    url: "{{ config('app.api_url') }}/api/mentors",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            title: 'Berhasil',
                            text: response.meta.message,
                            icon: 'success',
                            confirmButtonText: 'Oke',
                        }).then(() => {
                            window.location.href = "{{ route('admin.mentor.index') }}";
                        });
                    },
                    error: function(xhr, status) {
                        commonAlert({
                            'title': 'Gagal',
                            'text': xhr.responseJSON.message,
                            'icon': status
                        });
                    }
                });

            });

            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/mentors",
                headers: {
                    Authorization: "Bearer {{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    let content = '';
                    $.each(response.data.data, function(index, data) {
                        content += `
                        <div class="col">
                            <div class="card text-center alert-dismissible fade show alert p-0 bg-white" role="alert">
                                <div class="dropdown dropstart"
                                    style="position: absolute;
                                    top: 0;
                                    right: 0;
                                    z-index: 2;
                                    padding: 1.25rem 1rem;">
                                    <a href="#" class="link text-dark" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="ti ti-dots-vertical fs-7"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="">
                                        <li><a class="dropdown-item btn-edit" href="#" data-mentor="${data.id}">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                                <div class="p-2 d-block mt-3">
                                    <img src="${data.photo} " width="75"
                                        class="rounded-circle img-fluid">
                                    <h5 class="card-title mt-3 fw-bolder">${data.name}</h5>
                                    <span class="mb-3">${data.email}</span>
                                    <a href="#" class="btn text-success text-white d-block w-100 mt-3 btn-sm"
                                        style="background: var(--purple-primary);">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        `
                    });
                    $('#mentor-list').empty();
                    $('#mentor-list').append(content);

                    $('.btn-edit').click(function(e) {
                        e.preventDefault();

                        mentorId = $(this).data('mentor')
                        let formData = $('#edit-mentor-form')

                        $.ajax({
                            type: "GET",
                            url: `{{ config('app.api_url') }}/api/mentors/${mentorId}`,
                            dataType: "json",
                            headers: {
                                Authorization: "Bearer {{ session('hummaclass-token') }}"
                            },
                            success: function (response) {
                                $('#name').val(response.data.name);
                                $('#email').val(response.data.email);

                            }
                        });
                        

                        $('#edit-mentor-modal').modal('show');
                    });
                }
            });
        });
    </script>
@endsection
