@push('script')
    <script>
        const voucherListParent = $('#voucher-list');

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/course-vouchers/{{ $id }}",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                let cardList = '';
                if(response.data.length == 0) {
                    voucherListParent.append(empty());
                }
                response.data.forEach(function(data) {
                    cardList += appendCard(data);
                });
                voucherListParent.append(cardList);

                $('.btn-delete-vouchers').click(function(e) {
                    e.preventDefault();
                    let btn = $(this);

                    Swal.fire({
                        title: "Apakah Anda yakin ingin menghapus voucher ini?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Hapus"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "delete",
                                url: `{{ config('app.api_url') }}/api/course-vouchers/${btn.data('id')}`,
                                headers: {
                                    Authorization: "Bearer " + "{{ session('hummaclass-token') }}"
                                },
                                success: function(response) {
                                    console.log(response);
                                    // btn.closest('.card').remove();
                                    window.location.reload();
                                }
                            });
                        }
                    });

                });
            }

        });

        function appendCard(data) {
            let card = `<div class="col-lg-4">
                <div class="card">
                    <div class="card-header" style="background-color: var(--purple-primary);">
                        <div class="row">
                            <div class="col-lg-11 d-flex justify-content-center">
                                <h5 class="text-white text-center ps-4">Kode Voucher</h5>
                            </div>

                            <div class="col-lg-1 d-flex justify-content-end">
                                <div class="dropdown dropstart">
                                    <a href="#" class="link" style="float: right;" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 256 256">
                                            <path fill="#ffffff"
                                                d="M156 128a28 28 0 1 1-28-28a28 28 0 0 1 28 28m-28-52a28 28 0 1 0-28-28a28 28 0 0 0 28 28m0 104a28 28 0 1 0 28 28a28 28 0 0 0-28-28">
                                            </path>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <button data-id="${data.id}" id="btn-delete" class="dropdown-item btn-delete-vouchers">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round"
                                                            d="M20.5 6h-17m15.333 2.5l-.46 6.9c-.177 2.654-.265 3.981-1.13 4.79s-2.196.81-4.856.81h-.774c-2.66 0-3.991 0-4.856-.81c-.865-.809-.954-2.136-1.13-4.79l-.46-6.9M9.5 11l.5 5m4.5-5l-.5 5" />
                                                        <path
                                                            d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                    </g>
                                                </svg>
                                                Hapus
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div>
                                <span class="mb-1 badge fw-semibold text-primary fs-5 p-2"
                                    style="border-radius: 8px;background-color: #F6EEFE;">Diskon ${data.discount}%</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-2">
                            <div>
                                <h5 id="kode">${data.code}
                                    <a id="copylink" tooltip="Salin Link">
                                        <span class="badge ms-3 copyLink" style="background-color: #E9E9E9;"
                                            onclick="copyToClipboard()" id="copy">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 512 512">
                                                <path fill="#888888"
                                                    d="M408 480H184a72 72 0 0 1-72-72V184a72 72 0 0 1 72-72h224a72 72 0 0 1 72 72v224a72 72 0 0 1-72 72">
                                                </path>
                                                <path fill="#888888"
                                                    d="M160 80h235.88A72.12 72.12 0 0 0 328 32H104a72 72 0 0 0-72 72v224a72.12 72.12 0 0 0 48 67.88V160a80 80 0 0 1 80-80">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </h5>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="progress mt-2" style="height: 6px;background-color: #D1D1D1;">
                                <div class="progress-bar" style="width: 20%; background-color: var(--purple-primary)"
                                    role="progressbar"></div>
                            </div>
                            <p class="mt-2">${data.transactions_count} Terpakai dari ${data.usage_limit} stok</p>
                        </div>

                        <div class="text-center mt-4">
                            <h6 class="fw-semibold">Masa Aktif</h6>
                            <div class="mt-2">
                                <h6 style="color: var(--purple-primary)">12 Januari 2022 - 12 Desember 2022</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;

            return card;
        }
    </script>
@endpush
