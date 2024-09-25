@extends('admin.layouts.app')

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h5 class="fw-semibold mb-8">Daftar Kursus</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="index-2.html">Daftar pengguna yang sudah membeli kursus</a>
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

<div class="mb-3">
    <div class="d-flex justify-content-between">
        <form action="" class="d-flex gap-3">
            <div class="position-relative">
                <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" style="color: #8B8B8B"></i>
            </div>
            <div class="position-relative">
                <input type="text" class="form-control product-search px-1 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-filter" placeholder="Terbaru">
                <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                    <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M32 144h448M112 256h288M208 368h96" /></svg>
            </div>
        </form>
        <div>
            <a href="{{ route('admin.news.create') }}" class="btn text-white" style="background-color: var(--purple-primary)">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19.875 3H4.125C2.953 3 2 3.897 2 5v14c0 1.103.953 2 2.125 2h15.75C21.047 21 22 20.103 22 19V5c0-1.103-.953-2-2.125-2m0 16H4.125c-.057 0-.096-.016-.113-.016q-.01 0-.012.008L3.988 5.046c.007-.01.052-.046.137-.046h15.75c.079.001.122.028.125.008l.012 13.946c-.007.01-.052.046-.137.046" />
                    <path fill="currentColor" d="M6 7h6v6H6zm7 8H6v2h12v-2h-4zm1-4h4v2h-4zm0-4h4v2h-4z" /></svg>
                Tambah Berita
            </a>
        </div>
    </div>
</div>

<div class="row" id="contentNews">
</div>

<x-delete-modal-component />
@endsection

@push('script')
<script>
    $(document).on('click', '.btn-delete', function() {
        var id = $(this).data('id');
        var url = "{{ config('app.api_url') }}" + "/api/blogs/" + id;

        $('#modal-delete').modal('show');

        funDelete(url);
    });

    function funDelete(url) {

        $('.deleteConfirmation').click(function(e) {
            e.preventDefault();

            $.ajax({
                type: "DELETE"
                , url: url
                , headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                }
                , success: function(response) {
                    $('#modal-delete').modal('hide');
                    Swal.fire({
                        title: "Sukses"
                        , text: "Berhasil menghapus data."
                        , icon: "success"
                    });
                    get();
                }
                , error: function(response) {
                    $('#modal-delete').modal('hide');
                    if (response.status == 400) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!"
                            , text: response.responseJSON.meta.message
                            , icon: "error"
                        });
                    } else {
                        Swal.fire({
                            title: "Terjadi Kesalahan!"
                            , text: "Ada kesalahan saat menghapus data."
                            , icon: "error"
                        });
                    }
                }
            });
        });
    }

    let debounceTimer;
    $('#search-name').keyup(function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            get(1)
        }, 500);
    });

    function get(page) {
        $('#contentNews').empty();
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/blogs"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , data: {
                name: $('#search-name').val()
            , }
            , success: function(response) {

                $.each(response.data, function(index, value) {
                    $('#contentNews').append(news(index, value));
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

    function news(index, value) {
        return `
                <div class="col-lg-4">
                    <div class="card" style="border-radius: 15px;">
                        <button class="btn btn-sm btn-warning position-absolute ms-2 mt-2">${value.category.name}</button>
                        <img src="${value.thumbnail}" style="border-radius: 15px 15px 0 0;height:200px;object-fit: cover;" class="card-img-top" alt="...">
                        <div class="card-body p-3">

                            <h6 style="color: var(--purple-primary)">${value.created}</h6>
                            <h4 class="fw-bolder mt-2">${value.title}</h4>
                            <p class="">${value.description}</p>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.news.show', '') }}/${value.id}" class="btn text-white" style="background: var(--purple-primary);width: 70%;">Lihat Detail</a>
                                        <a href="${"{{ route('admin.news.edit', ':id') }}".replace(':id', value.slug)}" class="btn btn-warning btn-sm py-2" style="width: 15%">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 28 28">
                                                <path fill="currentColor" d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" /></svg>
                                        </a>
                                        <button data-id="${value.id}" class="btn btn-delete text-white btn-sm py-2" style="width: 15%; background-color: #DB0909;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" /></svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            `;
    }

    get(1);

    // $(document).on('click', '.btn-delete', function() {
    //     const id = $(this).data('id');
    //     const url = "{{ config('app.api_url') }}/api/blogs/" + id;

    //     $('#modal-delete').modal('show');
    //     deleteCategory(url);
    // });

    // function deleteCategory(url) {
    //     console.log(url);

    //     $('.deleteConfirmation').click(function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: "DELETE"
    //             , url: url
    //             , dataType: "json"
    //             , contentType: false
    //             , processData: false
    //             , success: function(response) {
    //                 Swal.fire({
    //                     title: "Berhasil!"
    //                     , text: response.meta.message
    //                     , icon: "success"
    //                 });
    //                 get(1)
    //             }
    //             , error: function(response) {
    //                 Swal.fire({
    //                     title: "Terjadi Kesalahan!"
    //                     , text: "Ada kesalahan saat menyimpan data."
    //                     , icon: "error"
    //                 });
    //             }
    //         });
    //     });

    // }

</script>
@endpush
