<div class="card">
    <div class="card-body">
        <h5 class="card-title">Daftar Siswa</h5>
        <form action="">
            <div class="d-flex gap-3 mt-2 mb-3">
                <div class="position-relative">
                    <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff"
                        name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                        style="color: #8B8B8B"></i>
                </div>

            </div>
        </form>
        <nav id="pagination_list_student"></nav>
    </div>
</div>
@push('script')
    {{-- <script>
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

        });

        function studentClassroom(index, value) {
            return `
                <tr class="fw-semibold">
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/no-image/no-profile.jpeg') }}"
                                class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40"
                                height="40" alt="">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">${value.student}</h6>
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
                        </div>
                    </td>
                </tr>
            `
        }
    </script> --}}
@endpush
