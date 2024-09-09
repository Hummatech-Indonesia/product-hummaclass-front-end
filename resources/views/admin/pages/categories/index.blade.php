@extends('admin.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Kategori</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar kategori</a>
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
        <h5 class="fw-semibold">Kategori</h5>

        <div class="d-flex justify-content-between mt-2">
            <div action="" class="position-relative">
                <input type="text" class="form-control product-search px-4 ps-5" name="name" value=""
                    id="search-name" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                    style="color: #8B8B8B"></i>
            </div>
            <button class="btn text-white addCategory" style="background-color: #7209DB">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                </svg>
                Tambah Kategori
            </button>
        </div>

        <div class="table-responsive rounded-2 mb-4 mt-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
                <thead class="text-dark fs-4">
                    <tr class="">
                        <th class="fs-4 fw-semibold mb-0">No</th>
                        <th class="fs-4 fw-semibold mb-0">Kategori</th>
                        <th class="fs-4 fw-semibold mb-0">Sub Kategori</th>
                        <th class="fs-4 fw-semibold mb-0">Tambah</th>
                        <th class="fs-4 fw-semibold mb-0">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center" id="tableBody">
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            <nav id="pagination">

            </nav>
        </div>
    </div>
@endsection
@section('script')
    <script>
        let debounceTimer;
        $('#search-name').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                get(1)
            }, 500);
        });

        function get(page) {
            $('#tableBody').empty();
            $.ajax({
                type: "GET",
                url: "{{ env('API_URL') }}" + "/api/categories?page=" + page,
                dataType: "json",
                data: {
                    name: $('#search-name').val(),
                },
                success: function(response) {
                    $.each(response.data.data, function(index, value) {
                        $('#tableBody').append(category(index,
                            value));
                    });

                    $('#pagination').html(handlePaginate(response.data.paginate))

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

        function category(index, value) {
            let subCategoryRows = '';

            if (value.sub_category.length > 0) {
                $.each(value.sub_category, function(subIndex, subValue) {
                    subCategoryRows += `
                        <tr class="sub_category">
                            <td style="background-color: #F6EEFE;"></td>
                            <td style="background-color: #F6EEFE;"></td>
                            <td>${subIndex + 1}</td>
                            <td class="ps-4">${subValue.name}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-3">
                                    <button class="btn text-white" style="background-color: #DB0909;" data-bs-toggle="modal" data-bs-target="#modal-delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"/>
                                        </svg>
                                        Hapus
                                    </button>
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-2.5 -2.5 24 24">
                                            <path fill="currentColor" d="m16.318 6.11l-3.536-3.535l1.415-1.414c.63-.63 2.073-.755 2.828 0l.707.707c.755.755.631 2.198 0 2.829zm-1.414 1.415l-9.9 9.9l-4.596 1.06l1.06-4.596l9.9-9.9z"/>
                                        </svg>
                                        Edit
                                    </button>
                                </div>
                            </td>
                        </tr>
                    `;
                });
            } else {
                subCategoryRows = `
                        <tr class="sub_category">
                            <td colspan="5">Tidak ada sub kategori</td>
                        </tr>
                    `;
            }

            return `
                    <tr class="fw-semibold">
                        <td>${index + 1}</td>
                        <td>${value.name}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                ${value.sub_category.length} Sub Kategori
                                <p>
                                    <button class="btn btn-sm text-white px-1 py-1 ms-2" type="button" style="background-color: #815FB4;" data-bs-toggle="collapse" data-bs-target="#collapseExample${index + 1}" aria-expanded="false" aria-controls="collapseExample${index + 1}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="m17 14l-5-5l-5 5"/>
                                        </svg>
                                    </button>
                                </p>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-create-subcategory">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                                </svg>
                                Tambah Sub Kategori
                            </button>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="category">
                                        <span class="more-options text-dark">
                                            <i class="ti ti-dots-vertical fs-5"></i>
                                        </span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <button data-id="${value.id}" data-name="${value.name}" class="btn-update dropdown-item d-flex align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#modal-edit">
                                            <i class="fs-4 ti ti-edit"></i>Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn-delete dropdown-item d-flex align-items-center text-danger gap-3" data-bs-toggle="modal" data-bs-target="#modal-delete">
                                            <i class="fs-4 ti ti-trash"></i>Hapus
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="p-0">
                            <div class="collapse" id="collapseExample${index + 1}">
                                <table class="table border text-center customize-table mb-0 align-middle">
                                    <tbody>
                                        ${subCategoryRows}
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                `;
        }


        get(1);

        $(document).on('click', '.deleteCategory', function() {
            console.log('sdfsfsdfsfd');

            const id = $(this).data('id');
            $('#modal-delete').modal('show');
            $('#deleteForm').attr('action', "{{ env('API_URL') }}" + `/api/categories/${id}`);

        });

        $('.deleteConfirmation').click(function(e) {
            console.log($('#deleteForm').attr('action'));

            e.preventDefault();
            // $.ajax({
            //     type: "DELETE",
            //     url: $('#deleteForm').attr('action'),
            //     dataType: "json",
            //     success: function(response) {
            //         $('#modal-delete').modal('hide');
            //         Swal.fire({
            //             title: "Berhasil!",
            //             text: response.meta.message,
            //             icon: "success"
            //         });
            //         table();
            //     },
            //     error: function(xhr) {
            //         let errorMessages = [];
            //         $.each(xhr.responseJSON.errors, function(index, value) {
            //             errorMessages.push(value);
            //         });
            //         Swal.fire({
            //             title: "Terjadi Kesalahan!",
            //             html: errorMessages.join('<br>'),
            //             icon: "error"
            //         });
            //     }
            // });
        });
    </script>

    {{-- modal kategori --}}
    @include('admin.pages.categories.widgets.modal-edit')
    @include('admin.pages.categories.widgets.modal-create')

    {{-- modal sub kategori --}}
    @include('admin.pages.categories.widgets.modal-create-subcategory')
    @include('admin.pages.categories.widgets.modal-edit-subcategory')
    <x-delete-modal-component></x-delete-modal-component>
@endsection
