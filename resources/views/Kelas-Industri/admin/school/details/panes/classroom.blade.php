<div class="tab-pane fade show active" id="classrooms" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <div class="card">
                <div class="card-body p-3">
                    <div class="sidebar d-flex flex-column">
                        <h5 id="classtest">Daftar Kelas</h5>
                        <p>Daftar kelas industri pada sekolah</p>
                        <ul id="list-classroom">
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-12">
            <div class="d-flex justify-content-between mb-3">
                <h5 class="fw-semibold">Detail Kelas - <span id="classroom_name">XII RPL 1</span></h5>
                <div>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit-class">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 28 28">
                            <path fill="white"
                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                        </svg>
                        <span class="ms-1">Edit Kelas</span>
                    </button>
                </div>
            </div>
            <div class="card position-relative border-1">
                <div class="card-body p-2">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center" style="z-index: 1;">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="School Logo"
                                class="img-fluid rounded-circle mb-2" width="80">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title classroom-">Suyadi</h5>
                            <span class="">Wali Kelas -----</span>
                        </div>
                    </div>
                </div>

                <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                    <img src="{{ asset('admin/assets/images/background/bubble-right.png') }}" alt="Description"
                        class="img-fluid" style="max-width: 85px; height: auto;">
                </div>
                <div class="position-absolute bottom-0 start-0" style="padding: 0px;">
                    <img src="{{ asset('admin/assets/images/background/bubble-left.png') }}" alt="Description"
                        class="img-fluid" style="max-width: 85px; height: auto;">
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Siswa</h5>
                    <form action="">
                        <div class="d-flex gap-3 mb-3 mt-3">
                            <div class="position-relative">
                                <input type="text" class="form-control product-search px-4 ps-5"
                                    style="background-color: #fff" id="search-name" name="name" value=""
                                    placeholder="Search">
                                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                                    style="color: #8B8B8B"></i>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive rounded-2 mb-4 mt-4">
                        <table class="table border text-nowrap customize-table mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr class="">
                                    <th class="fs-4 fw-semibold mb-0">Nama Siswa</th>
                                    <th class="fs-4 fw-semibold mb-0">Jenis Kelamin</th>
                                    <th class="fs-4 fw-semibold mb-0">NISN</th>
                                    <th class="fs-4 fw-semibold mb-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="table-user-classroom">
                                <!-- Data siswa akan dimuat di sini -->
                            </tbody>
                        </table>
                    </div>
                    <nav id="pagination_student"></nav>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            var slug = "{{ $slug }}";
            let debounceTimer;
            let name;

            $(document).on('change', '.filter-radio', function() {
                let selectedValue = $('input[name="filter"]:checked').val();
                name = $('input[name="filter"]:checked').data('name');
                $('#classroom_name').html(name); // Show classroom name

                // Update student classrooms based on filter
                updateStudentClassrooms(selectedValue);
            });

            $('#search-name').keyup(function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function() {
                    let selectedValue = $('input[name="filter"]:checked').val();
                    updateStudentClassrooms(selectedValue);
                }, 500);
            });

            function updateStudentClassrooms(classroomId) {
                if (!classroomId) return;

                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/student-classrooms/" + classroomId,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    data: {
                        name: $('#search-name').val(),
                    },
                    success: function(response) {
                        $('#table-user-classroom').empty();
                        if (response.data.data.length > 0) {
                            $.each(response.data.data, function(index, value) {
                                $('#table-user-classroom').append(studentClassroom(index,
                                    value));
                            });
                            $('#pagination_student').html(handlePaginate(response.data.paginate))

                        } else {
                            $('#table-user-classroom').append(emptyCard());
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

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/classrooms/" + slug,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    if (response.data.length > 0) {
                        $('#classroom_name').html(response.data[0].name);

                        updateStudentClassrooms(response.data[0].id);

                        $.each(response.data, function(index, value) {
                            $('#list-classroom').append(listClassroom(index, value));
                        });
                    } else {
                        $('#list-classroom').append(emptyCard());
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

            function listClassroom(index, value) {
                let checked = (index == 0) ? 'checked' : ''; // Pilih yang pertama sebagai default checked
                return `
                <li>
                    <div class="form-check form-check-inline sidebar-link filter-option">
                        <input class="form-check-input filter-radio" data-name="${value.name}" type="radio" name="filter" 
                            id="option${index}" value="${value.id}" ${checked} />
                        <label class="form-check-label filter-label" for="option${index}">
                            <div class="d-flex">
                                ${value.name}
                            </div>
                        </label>
                    </div>
                </li>`;
            }
        });
    </script>
@endpush
