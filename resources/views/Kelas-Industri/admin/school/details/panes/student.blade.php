<div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
    <div class="card-body">
        <h5 class="card-title">Daftar Siswa</h5>
        <form action="">
            <div class="d-flex gap-3 mt-2 mb-3">
                <div class="position-relative">
                    <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff"
                        name="name" value="{{ old('name', request('name')) }}" id="input-search"
                        placeholder="Search">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                        style="color: #8B8B8B"></i>
                </div>

            </div>
        </form>
        <div class="table-responsive rounded-2 mb-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr class="">
                        <th class="fs-4 fw-semibold mb-0">Nama Siswa</th>
                        <th class="fs-4 fw-semibold mb-0">Jenis Kelamin</th>
                        <th class="fs-4 fw-semibold mb-0">NISN</th>
                        <th class="fs-4 fw-semibold mb-0">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                </tbody>
            </table>
        </div>
        <nav id="pagination_list_student"></nav>
    </div>
</div>
@push('script')
    <x-delete-modal-component></x-delete-modal-component>
    <script>
        $(document).ready(function() {
            var slug = "{{ $slug }}"
            let debounceTimer;

            $('#input-search').keyup(function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function() {
                    get(1)
                }, 500);
            });
            get(1)

            function get(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/students/" + slug + "?page=" + page,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    data: {
                        name: $('#input-search').val(),
                    },
                    success: function(response) {
                        $('#tableBody').empty();
                        if (response.data.data.length > 0) {
                            $.each(response.data.data, function(index, value) {
                                $('#tableBody').append(studentClassroom(index,
                                    value));
                            });
                            $('#pagination_list_student').html(handlePaginate(response.data.paginate))

                        } else {
                            $('#tableBody').append(empty());
                        }
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menyimpan data.",
                            icon: "error"
                        });
                    }
                });
            }

            function studentClassroom(index, value) {
                return `
                    <tr class="fw-semibold">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/no-image/no-profile.jpeg') }}"
                                    class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40"
                                    height="40" alt="">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">${value.name}</h6>
                                    <span class="fw-normal">${value.email}</span>
                                </div>
                            </div>
                        </td>
                        <td>${value.gender}</td>
                        <td>${value.nisn}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <button class="btn btn-sm text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal-detail-student"
                                    style="background-color: #9425FE">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>
                                </button>
                                <button class="btn btn-sm text-white btn-warning" id="edit-student-button" data-id="${value.id}">
                                    <i class="fa fa-trash fa-md"></i>
                                </button>
                                <button class="btn btn-sm text-white btn-danger" id="delete-modal-button" data-id="${value.id}">
                                    <i class="fa fa-trash fa-md"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `
            }

            $(document).on('click', '#import-student-button', function() {
                $('#import-student-modal').modal('show')
                $('#import-student-form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/import-student/" + slug,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses!",
                                text: "Berhasil mengimport data siswa",
                                icon: "error"
                            });

                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Gagal mengimport data siswa",
                                icon: "error"
                            });
                        }
                    });
                });
            })

            $(document).on('click', '#edit-student-button', function() {
                const id = $(this).data('id')
                window.location.href = "/admin/class/student/edit/" + id
            })

            $(document).on('click', '#delete-modal-button', function() {
                $('#modal-delete').modal('show')
                const studentId = $(this).data('id')

                $('#create-division-form').off('submit');
                $('#deleteForm').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/students/" + studentId +
                            "?_method=DELETE",
                        headers: {
                            'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                        },
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses!",
                                text: "Berhasil menghapus data.",
                                icon: "success"
                            });
                            $('#modal-delete').modal('hide')
                            get(1);
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "",
                                icon: "error"
                            });
                        }
                    });
                });
            })
        });
    </script>
@endpush
