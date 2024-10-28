<script>
    $(document).ready(function(page) {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/rewards?page=" + page,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                console.log(response);


                $('#list-point-exchange').empty();

                if (response.data.data.length > 0) {
                    $.each(response.data.data, function(index, value) {
                        $('#list-point-exchange').append(ListExchange(index, value));
                    });

                    $('#pagination').html(handlePaginate(response.data.paginate))

                } else {
                    $('#list-point-exchange').append(empty());
                    $('#pagination').hide();
                }


            },
            error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data penukaran poin.",
                    icon: "error"
                });
            }
        });
    });

    function ListExchange(index, value) {
        console.log(value);

        return `
            <tr>
                <td>${index + 1}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="${value.image}"
                            class="me-2" style="object-fit: cover" width="40"
                            height="40" alt="">
                        <div class="ms-3">
                            <span class="fw-normal">${value.name}</span>
                        </div>
                    </div>
                </td>
                <td>${value.stock}</td>
                <td>${value.points_required} poin</td>
                <td>
                    <div class="d-flex gap-3">
                        <button data-id="${value.id}" class="btn px-2 text-white btn-detail-rewards" style="background-color: #9425FE">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M3 13c3.6-8 14.4-8 18 0" />
                                    <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                </g>
                            </svg>
                        </button>
                        <button data-id="${value.id}" class="btn px-2 text-white btn-warning btn-update-faq">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5 19h1.425L16.2 9.225L14.775 7.8L5 17.575zm-2 2v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM19 6.4L17.6 5zm-3.525 2.125l-.7-.725L16.2 9.225z" />
                            </svg>
                        </button>
                        <button class="btn px-2 text-white btn-danger btn-delete-rewards" data-id="${value.id}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18m-2 0v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2m-6 5v6m4-6v6" />
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
    `;
    }
</script>

{{-- hapus penukaran poin --}}

<script>
    $(document).on('click', '.btn-delete-rewards', function() {
        var id = $(this).data('id');
        var url = "{{ config('app.api_url') }}" + "/api/rewards/" + id;

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
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                success: function(response) {
                    $('#modal-delete').modal('hide');
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menghapus data.",
                        icon: "success"
                    });
                    get();
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
</script>
