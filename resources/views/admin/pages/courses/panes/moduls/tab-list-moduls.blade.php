<div class="d-flex gap-3 mb-4">
    <div action="" class="position-relative">
        <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff" name="name"
            value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
            style="color: #8B8B8B"></i>
    </div>
</div>
<div class="row" id="cardBody">

</div>
@push('script')
    <x-delete-modal-component></x-delete-modal-component>
    <script>
        let data = {};
        let timeout = null;

        $('#input-search').on('input', function(e) {
            clearTimeout(timeout);
            data['search'] = $(this).val();
            timeout = setTimeout(() => {
                getModules();
            }, 500);
        });


        function getModules() {
            var id = "{{ $id }}";
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/modules/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                data: data,
                dataType: "json",
                success: function(response) {
                    $('#cardBody').empty();
                    if (response.data.length === 0) {
                        $('#cardBody').append(emptyCard());
                    } else {
                        $.each(response.data, function(index, value) {
                            $('#cardBody').append(card(index, value));
                        });
                    }

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
        getModules();

        function card(index, value) {
            return `
                <div class="col-md-12">
                    <div class="card position-relative">
                        <div class="d-flex flex-wrap justify-content-between align-items-center my-3">
                            <div class="p-2 text-wrap" style="left: 0; top: 5%; background: linear-gradient(to right, #FFA41C, #FFD08A); border-radius: 0 8px 8px 0; width: 100%; max-width: 200px;">
                                <span class="text-white fw-bold">Step ke ${value.step}</span>
                            </div>
                            <div class="d-flex gap-2 pe-4 align-items-center mt-2 mt-md-0 flex-wrap px-3">
                                <a href="{{ route('admin.modules.show', ['']) }}/${value.id}" class="btn text-white"
                                    style="background-color: var(--purple-primary)">
                                    Lihat Modul
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ms-1" width="17" height="17" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>
                                </a>
                                <a class="btn text-white btn-warning moduleForward" data-id="${value.id}">
                                    <i class="ti ti-arrow-down"></i>
                                </a>
                                <a class="btn text-white btn-warning moduleBackward" data-id="${value.id}">
                                    <i class="ti ti-arrow-up"></i>
                                </a>

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <i class="ti ti-settings text-warning fs-7 mt-1" id="settingsDropdown" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                                        <li><a class="dropdown-item" href="{{ route('admin.modules.index', ['']) }}/${value.id}/edit"><i class="ti ti-pencil"></i> Edit</a></li>
                                        <li><a class="dropdown-item text-danger btn-delete" data-id="${value.id}"><i class="ti ti-trash"></i> Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8 col-sm-12 border-end">
                                    <h5 class="fw-bold text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                            <path d="M9 8h6" />
                                        </svg>
                                        ${value.title}
                                    </h5>
                                    <p>${value.sub_title}</p>
                                </div>
                                <div class="col-lg-4 col-sm-12 mt-3 mt-lg-0">
                                    <div class="p-1">
                                        <h5 class="fw-semibold">Meliputi</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 mb-2">
                                                <div class="btn btn-light-warning text-warning w-100 d-flex justify-content-start">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                                        <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                                        <path d="M9 8h6" />
                                                    </svg>
                                                    <span class="text-dark ms-2 fs-2 fw-bold">${value.sub_module_count} Materi</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 mb-2">
                                                <div class="btn btn-light-warning text-warning w-100 d-flex justify-content-start">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                                        <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                                        <path d="M9 8h6" />
                                                    </svg>
                                                    <span class="text-dark ms-2 fs-2 fw-bold">${value.module_question_count} Soal</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                `;

        }

        $(document).on('click', '.moduleBackward', function() {
            const id = $(this).data('id')
            $.ajax({
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                type: "PATCH",
                url: "{{ env('API_URL') }}/api/modules-backward/" + id,
                dataType: "json",
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil mengubah posisi module.",
                        icon: "success"
                    }).then(() => {
                        window.location.reload();
                    });
                },
                error: function(xhr) {}
            });
        })
        $(document).on('click', '.moduleForward', function() {
            const id = $(this).data('id')
            $.ajax({
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                type: "PATCH",
                url: "{{ env('API_URL') }}/api/modules-forward/" + id,
                dataType: "json",
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil mengubah posisi module.",
                        icon: "success"
                    }).then(() => {
                        window.location.reload();
                    });
                },
                error: function(xhr) {}
            });
        })

        $(document).on('click', '.btn-delete', function() {
            const id = $(this).data('id')
            $('#modal-delete').modal('show');
            $('.deleteConfirmation').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "DELETE",
                    url: "{{ env('API_URL') }}/api/modules/" + id,
                    dataType: "json",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil menghapus module.",
                            icon: "success"
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status == 400) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: xhr.responseJSON.meta.message,
                                icon: "error"
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Terjadi Kesalahan Saat Menghapus Data",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        })
    </script>
@endpush
