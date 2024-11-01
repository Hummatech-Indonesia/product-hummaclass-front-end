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
                $('#contentNews').empty();

                if (response.data.data.length > 0) {
                    $.each(response.data.data, function(index, value) {
                        $('#contentNews').append(news(index, value));
                    });
                    $('#pagination').html(handlePaginate(response.data.paginate))

                } else {
                    $('#contentNews').append(emptyCard());
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

    function news(index, value) {
        return `
            <div class="col-lg-4">
                <div class="card" style="border-radius: 15px; height: 490px;">
                    <button class="btn btn-sm btn-warning position-absolute ms-2 mt-2">${value.sub_category}</button>
                    
                    <img src="${value.thumbnail}" style="border-radius: 15px 15px 0 0; height: 200px; object-fit: cover;" class="card-img-top" alt="...">
                    
                    <div class="card-body p-3">
                        <h6 style="color: var(--purple-primary)">${value.created}</h6>
                        <h4 class="fw-bolder mt-2">${value.title.length > 50 ? value.title.substring(0, 50) + '...' : value.title}</h4>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.news.show', '') }}/${value.id}" class="btn text-white" style="background: var(--purple-primary); width: 70%;">Lihat Detail</a>
                            <a href="${"{{ route('admin.news.edit', ':id') }}".replace(':id', value.id)}" class="btn btn-warning btn-sm py-2" style="width: 15%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 28 28">
                                    <path fill="currentColor" d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                </svg>
                            </a>
                            <button data-id="${value.id}" class="btn btn-delete text-white btn-sm py-2" style="width: 15%; background-color: #DB0909;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0" d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    get(1);

</script>
