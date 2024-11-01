    <script>
        let debounceTimer;
        $('#search-name').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                get(1)
            }, 500);
        });

        function get(page) {
            $('#confirmation-point-content').empty();
            $.ajax({
                type: "GET"
                , url: "{{ config('app.api_url') }}" + "/api/user-rewards?page=" + page
                , headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                }
                , dataType: "json"
                , data: {
                    name: $('#search-name').val()
                , }
                , success: function(response) {
                    console.log(response);


                    $('#confirmation-point-content').empty();
                    const filteredData = response.data.data.filter(item => item.status === 'pending');
                    console.log("Filtered Data:", filteredData); // Cek data setelah difilter

                    if (filteredData.length > 0) {
                        $.each(filteredData, function(index, value) {
                            $('#confirmation-point-content').append(getConfirmationPoint(index, value));
                        });

                        $('#pagination').html(handlePaginate(response.data.paginate));
                    } else {
                        $('#confirmation-point-content').append(empty());
                    }

                }
                , error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!"
                        , text: "Tidak dapat memuat data user rewards."
                        , icon: "error"
                    });
                }
            });
        }

        function getConfirmationPoint(index, value) {
            return `
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="${value.user.photo}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40" height="40" alt="">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">${value.user.name}</h6>
                                    <span class="fw-normal">${value.user.email}</span>
                                </div>
                            </div>
                        </td>
                        <td>${value.reward.name}</td>
                        <td>1x</td>
                        <td>${value.reward.points_required} Point</td>
                        <td class="d-flex justify-content-center">
                            <div class="d-flex gap-3">
                                <button data-id="${value.id}" data-user="${value.user.name}" data-email="${value.user.email}" data-name="${value.reward.name}" data-points_required="${value.reward.points_required}" data-stock="${value.reward.stock}" data-image="${value.image}"
                                class="btn px-2 text-white detailConfirmationExchange" style="background-color: #9425FE">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>
                                </button>
                                <button data-id="${value.reward.id}" class="btn btn-success editConfirm">terima</button>
                                <button data-id="${value.reward.id}" class="btn btn-danger rejectConfirm">tolak</button>
                            </div>
                        </td>
                    </tr>
                    `;
        }

        get(1);

    </script>
