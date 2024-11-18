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
                <h5 class="fw-semibold">Detail Kelas - XII RPL 1</h5>
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
                            <h5 class="card-title">Suyadi</h5>
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
                                    style="background-color: #fff" name="name"
                                    value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
                                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                                    style="color: #8B8B8B"></i>
                            </div>
                            <div class="position-relative">
                                <select name="" id="" class="form-select">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
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
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            var slug = "{{ $slug }}";


            $(document).on('change', '.filter-radio', function() {
                let selectedValue = $('input[name="filter"]:checked').val();

                updateStudentClassrooms(selectedValue);
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
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.data.data.length > 0) {
                            $.each(response.data.data, function(index, value) {
                                // $('#contentNews').append(news(index, value));
                            });
                            $('#pagination').html(handlePaginate(response.data.paginate))

                        } else {
                            $('#contentNews').append(emptyCard());
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
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.data.length > 0) {
                        updateStudentClassrooms(response.data[0].id)
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

            // Fungsi untuk membuat list classroom
            function listClassroom(index, value) {
                let checked = (index == 0) ? 'checked' : ''; // Pilih yang pertama sebagai default checked
                return `
                <li>
                    <div class="form-check form-check-inline sidebar-link filter-option">
                        <input class="form-check-input filter-radio" type="radio" name="filter" 
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
