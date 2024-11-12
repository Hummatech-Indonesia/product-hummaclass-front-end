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


                    $('#confirmation-point-content').empty();

                    if (response.data.data.length > 0) {
                        $.each(response.data.data, function(index, value) {
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
            var url = "{{ config('app.api_url') }}";
            const badgeClass =
                value.status === "success" ? "bg-light-success text-success" :
                value.status === "pending" ? "bg-light-warning text-warning" :
                value.status === "rejected" ? "bg-light-danger text-danger" : "";
            return `
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="${value.user.photo && value.user.photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(value.user.photo) ? value.user.photo : '{{ asset('assets/img/no-image/no-profile.jpeg') }}'}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40" height="40" alt="">
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
                                ${value.status !== 'pending' ? `<span class="badge ${badgeClass} fs-2 fw-semibold px-4 py-2">${value.status}</span>` : ''}
                                
                                <button data-id="${value.id}" class="btn btn-success editConfirm btn-sm" ${value.status === 'success' || value.status === 'rejected' ? 'style="display: none;"' : ''}>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="white" d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41z"/></svg>    
                                </button>
                                <button data-id="${value.id}" class="btn btn-danger rejectConfirm btn-sm" ${value.status === 'rejected' || value.status === 'success' ? 'style="display: none;"' : ''}>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="white" d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4"/></svg>    
                                </button>
                            </div>
                        </td>
                        <td>
                            <button data-id="${value.id}" data-user="${value.user.name}" data-email="${value.user.email}" data-name="${value.reward.name}" data-points_required="${value.reward.points_required}" data-stock="${value.reward.stock}" data-image="${value.image}"
                                class="btn px-2 text-white detailConfirmationExchange" style="background-color: #9425FE">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>
                                </button>
                        </td>
                    </tr>
                    `;
        }

        get(1);

    </script>
