@extends('admin.layouts.app')

@section('style')
<style>
    .btn-close {
        --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
        background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
    }

    .icon {
        transition: transform 0.3s ease;
    }

    .toggle-btn[aria-expanded="true"] .icon {
        transform: rotate(180deg);
    }

</style>
@endsection

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h5 class="fw-semibold mb-8">Frequently Asked Questions</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="index-2.html">Daftar - daftar faq di hummaclass</a>
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
    <h5 class="fw-semibold">FAQ</h5>
    <div class="d-flex justify-content-between mt-2">
        <div action="" class="position-relative">
            <input type="text" class="form-control product-search px-4 ps-5" name="name" value="" id="" placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" style="color: #8B8B8B"></i>
        </div>
        <button class="btn text-white addFaq" style="background-color: #9425FE">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
            </svg>
            Tambah FAQ
        </button>
    </div>
    <div class="table-responsive rounded-2 mb-4 mt-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr class="">
                    <th class="fs-4 fw-semibold mb-0">Pertanyaan</th>
                    <th class="fs-4 fw-semibold mb-0">Jawaban</th>
                    <th class="fs-4 fw-semibold mb-0">Aksi</th>
                </tr>
            </thead>
            <tbody id="faq-content">
            </tbody>
        </table>
    </div>
</div>
@include('admin.pages.configuration.widgets.modal-create-faq')
@include('admin.pages.configuration.widgets.modal-edit-faq')
@include('admin.pages.configuration.widgets.modal-detail-faq')
<x-delete-modal-component></x-delete-modal-component>

@endsection

@section('script')
{{-- get faq --}}
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
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/faqs?page=" + page
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , data: {
                name: $('#search-name').val()
            , }
            , success: function(response) {

                $('#faq-content').empty();

                if (response.data.length > 0) {
                    $.each(response.data, function(index, value) {
                        $('#faq-content').append(getFaqs(index, value));
                    });

                    $('#pagination').html(handlePaginate(response.data.paginate))

                } else {
                    $('#faq-content').append(empty());
                }

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

    function getFaqs(index, value) {
        return `
                <tr>
                    <td>${value.question}</td>
                    <td>${value.answer.length > 35 ? value.answer.substring(0, 35) + '...' : value.answer}</td>
                    <td>
                        <div class="d-flex gap-3">
                            <button data-id="${value.id}" data-question="${value.question}" data-answer=${value.answer} class="btn px-2 text-white btn-detail-faq" style="background-color: #9425FE">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M3 13c3.6-8 14.4-8 18 0" />
                                        <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                    </g>
                                </svg>
                            </button>
                            <button data-id="${value.id}" data-question="${value.question}" data-answer=${value.answer} class="btn px-2 text-white btn-warning btn-update-faq">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5 19h1.425L16.2 9.225L14.775 7.8L5 17.575zm-2 2v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM19 6.4L17.6 5zm-3.525 2.125l-.7-.725L16.2 9.225z" />
                                </svg>
                            </button>
                            <button class="btn px-2 text-white btn-danger btn-delete-faq" data-id="${value.id}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18m-2 0v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2m-6 5v6m4-6v6" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                `;
    }

    get(1);

</script>

{{-- create faq --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.addFaq', function() {
            $('#modal-create-faq').modal('show');
        });

        $('.storeConfirmation').click(function(e) {
            e.preventDefault();

            let formData = new FormData($('.createFormFaq')[0]);

            $.ajax({
                type: "POST"
                , url: "{{ config('app.api_url') }}/api/faqs"
                , headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                , }
                , data: formData
                , dataType: "json"
                , processData: false
                , contentType: false
                , success: function(response) {
                    $('#modal-create-faq').modal('hide');
                    Swal.fire({
                        title: "Berhasil!"
                        , text: response.meta.message
                        , icon: "success"
                    });
                    get(1);
                }
                , error: function(response) {
                    let errorMessages = [];

                    if (response.responseJSON && response.responseJSON.errors) {
                        $.each(response.responseJSON.errors, function(field, messages) {
                            $.each(messages, function(index, message) {
                                errorMessages.push(message);
                            });
                        });
                    }

                    Swal.fire({
                        title: "Terjadi Kesalahan!"
                        , html: errorMessages.join('<br>')
                        , icon: "error"
                    });
                }
            });
        });
    });

</script>

{{-- edit faq --}}
<script>
    $(document).ready(function() {
        let id;
        $(document).on('click', '.btn-update-faq', function() {
            $('#modal-edit-faq').modal('show');
            id = $(this).data('id');

            const question = $(this).data('question');
            const answer = $(this).data('answer');
            $('#question').val(question);
            $('#answer').val(answer);
        });

        $('.updateConfirmation').click(function(e) {
            e.preventDefault();

            var url = "{{ config('app.api_url') }}" + "/api/faqs/" + id + "?_method=PUT";
            var formDataUpdate = new FormData($('.editFormFaq')[0]);

            $.ajax({
                type: "POST"
                , url: url
                , headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                }
                , data: formDataUpdate
                , dataType: "json"
                , processData: false
                , contentType: false
                , success: function(response) {
                    $('#modal-edit-faq').modal('hide');
                    Swal.fire({
                        title: "Berhasil!"
                        , text: response.meta.message
                        , icon: "success"
                    });
                    get(1);
                }
                , error: function(response) {
                    let errorMessages = [];
                    $.each(response.responseJSON.errors, function(field, messages) {
                        $.each(messages, function(index, message) {
                            errorMessages.push(message);
                        });
                    });
                    Swal.fire({
                        title: "Terjadi Kesalahan!"
                        , html: errorMessages.join('<br>')
                        , icon: "error"
                    });
                }
            });
        });
    });

</script>

{{-- delete faqs --}}
<script>
    $(document).on('click', '.btn-delete-faq', function() {
        const id = $(this).data('id');
        const url = "{{ config('app.api_url') }}/api/faqs/" + id;

        $('#modal-delete').modal('show');

        // Pastikan event listener hanya dipasang satu kali
        $('.deleteConfirmation').off('click').on('click', function(e) {
            e.preventDefault();
            deleteFaq(url);
        });
    });

    function deleteFaq(url) {
        $.ajax({
            type: "DELETE"
            , url: url
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , contentType: false
            , processData: false
            , success: function(response) {
                Swal.fire({
                    title: "Berhasil!"
                    , text: response.meta.message
                    , icon: "success"
                });
                $('#modal-delete').modal('hide'); // Tutup modal setelah berhasil
                get(1); // Refresh data FAQ
            }
            , error: function(response) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Ada kesalahan saat menghapus data."
                    , icon: "error"
                });
            }
        });
    }

</script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.btn-detail-faq', function() {
            var id = $(this).data('id');
            
            $('#modal-detail-faq').modal('show');
            
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/faqs/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('.question').html(response.data.question);
                    $('.answer').html(response.data.answer);
                },
                error: function(xhr) {
                    console.log(xhr);
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data FAQ.",
                        icon: "error"
                    });
                }
            });
        });
    });
</script>

@endsection
