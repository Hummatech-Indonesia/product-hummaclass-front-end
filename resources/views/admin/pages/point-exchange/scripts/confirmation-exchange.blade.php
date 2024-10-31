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