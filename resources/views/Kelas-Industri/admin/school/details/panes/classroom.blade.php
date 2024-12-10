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

        <div class="col-lg-9 col-md-12" id="data-class">
            <div class="d-flex justify-content-between mb-3">
                <h5 class="fw-semibold">Detail Kelas - <span id="classroom_name"></span></h5>
                <div>
                    <button class="btn btn-warning" id="edit-class" data-id="" data-bs-toggle="modal"
                        data-bs-target="#modal-edit-class">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 28 28">
                            <path fill="white"
                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                        </svg>
                        <span class="ms-1">Edit Kelas</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="card position-relative border-1 col-6" id="card_teacher">
                </div>
                <div class="card position-relative border-1 col-6" id="card_mentor">
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Siswa</h5>
                    <div class="d-flex justify-content-between">
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
                        <div class="">
                            <button class="btn" id="add-student-classroom" data-bs-toggle="modal"
                                style="background-color: #9425FE;color:white" data-bs-target="#modal-student">Tambah
                                Siswa</button>
                        </div>
                    </div>
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
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <nav id="pagination_student"></nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-12 d-none" id="no-data-class">
            <h5 class="fw-semibold mb-3">Detail Kelas -</h5>
            <div class="d-flex justify-content-center align-items-center mt-5 pt-5">
                <div>
                    <div class="text-center">
                        <img src="{{ asset('admin/assets/images/background/cloud-class.png') }}" style="width: 160px;"
                            alt="">
                    </div>
                    <h6 class="fw-semibold text-center">Siswa Belum Ditambahkan</h6>
                    <div class="d-flex gap-1">
                        <button class="btn text-white btn-sm px-4" style="background-color: #9425FE"
                            data-bs-toggle="modal" data-bs-target="#modal-set-class">Atur Kelas</button>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#import-student">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M13.586 2a2 2 0 0 1 1.284.467l.13.119L19.414 7a2 2 0 0 1 .578 1.238l.008.176V20a2 2 0 0 1-1.85 1.995L18 22h-6v-2h6V10h-4.5a1.5 1.5 0 0 1-1.493-1.356L12 8.5V4H6v8H4V4a2 2 0 0 1 1.85-1.995L6 2zM7.707 14.465l2.829 2.828a1 1 0 0 1 0 1.414l-2.829 2.828a1 1 0 1 1-1.414-1.414L7.414 19H3a1 1 0 1 1 0-2h4.414l-1.121-1.121a1 1 0 1 1 1.414-1.415ZM14 4.414V8h3.586z" />
                                </g>
                            </svg>
                            Import Siswa
                        </button>
                        <input type="hidden" name="" id="for_classroom_id">
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
            let debounceTimer;
            let name;

            $(document).on('change', '.filter-radio', function() {
                let selectedValue = $('input[name="filter"]:checked').val();
                name = $('input[name="filter"]:checked').data('name');
                id = $('input[name="filter"]:checked').val();
                $('#classroom_name').html(name);
                $('#edit-class').attr('data-id', id);
                addMentor(id)
                addTeacher(id)
                addStudentClassroom(id)
                getDetailClassroom(id)
                getStudentClassroom(selectedValue);
            });

            $('#search-name').keyup(function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function() {
                    let selectedValue = $('input[name="filter"]:checked').val();
                    getStudentClassroom(selectedValue);
                }, 500);
            });

            //Get Student Classroom
            function getStudentClassroom(classroomId) {
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
                        var defaultSelected = [];

                        if (response.data.data.length > 0) {
                            $.each(response.data.data, function(index, value) {
                                defaultSelected.push(value.student_id);
                                $('#table-user-classroom').append(studentClassroom(index,
                                    value));
                            });

                            // Panggil fungsi untuk mengatur Select2
                            getStudentClassroomSelect2(defaultSelected);

                            $('#pagination_student').html(handlePaginate(response.data.paginate));
                        } else {
                            $('#table-user-classroom').append(`<div>${emptyCard()}</div>`);
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
            getStudentClassroomSelect2([])

            // Fungsi untuk mengisi Select2 dan memilih default
            function getStudentClassroomSelect2(defaultSelected = []) {
                $('#add-student-classroom').click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "GET",
                        url: "{{ config('app.api_url') }}/api/student-without-classroom/" + slug,
                        headers: {
                            Authorization: `Bearer {{ session('hummaclass-token') }}`
                        },
                        dataType: "json",
                        success: function(response) {
                            $('#select2').empty(); // Kosongkan opsi sebelumnya
                            $.each(response.data, function(index, value) {

                                $('#select2').append(
                                    `<option value="${value.id}">${value.name}</option>`
                                );
                            });

                            // Pilih nilai default jika ada
                            if (defaultSelected && defaultSelected.length > 0) {
                                $('#select2').val(defaultSelected).trigger('change');
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
                });
            }

            function addStudentClassroom(classroom_id) {
                $('#form-add-student-classroom').off('submit').submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/student-classrooms/" + classroom_id,
                        headers: {
                            Authorization: `Bearer {{ session('hummaclass-token') }}`
                        },
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses",
                                text: "Berhasil menambah data.",
                                icon: "success"
                            }).then(() => {
                                window.location.reload();
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    });
                });
            }


            //Get All Classroom
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
                        $('#edit-class').attr('data-id', response.data[0].id);
                        addMentor(response.data[0].id)
                        getStudentClassroom(response.data[0].id);
                        getDetailClassroom(response.data[0].id)
                        addTeacher(response.data[0].id)
                        addStudentClassroom(response.data[0].id)

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

            //Get Classroom
            function getDetailClassroom(classroom_id) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/classroom-detail/" + classroom_id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#card_mentor').empty();
                        if (response.data.mentor) {
                            $('#card_mentor').append(
                                mentorOrTeacher(response.data.name, response.data.mentor.name,
                                    'Mentor')
                            );
                        } else {
                            $('#card_mentor').append(`
                    <div class="card-body p-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                        <button class="btn" style="background-color: #9425FE;color:white; height:40px" data-bs-toggle="modal" data-bs-target="#modal-mentor">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg></span> Tambah Mentor
                        </button>
                    </div>
                `);
                        }

                        $('#card_teacher').empty();
                        if (response.data.teacher) {
                            $('#card_teacher').append(
                                mentorOrTeacher(response.data.name, response.data.teacher.user.name,
                                    'Wali Kelas')
                            );
                        } else {
                            $('#card_teacher').append(`
                    <div class="card-body p-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                        <button class="btn" style="background-color: #9425FE;color:white; height:40px" data-bs-toggle="modal" data-bs-target="#modal-teacher">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg></span> Tambah Guru
                        </button>
                    </div>
                `);
                        }
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data.",
                            icon: "error"
                        });
                    }
                });
            }

            // Function to generate the card for mentor or teacher
            function mentorOrTeacher(classroom_name, name, status) {
                if (status == 'Mentor') {
                    button = `<button class="btn btn-warning btn-ubah-mentor position-absolute" data-bs-toggle="modal" data-bs-target="#modal-mentor"
                                    style="top: 50%; left: 90%; transform: translate(-50%, -50%); z-index: 2;" 
                                    data-name="${name}" 
                                    data-classroom="${classroom_name}">
                                Ubah
                            </button>`
                } else {
                    button = `<button class="btn btn-warning btn-ubah-mentor position-absolute" data-bs-toggle="modal" data-bs-target="#modal-teacher"
                                    style="top: 50%; left: 90%; transform: translate(-50%, -50%); z-index: 2;" 
                                    data-name="${name}" 
                                    data-classroom="${classroom_name}">
                                Ubah
                            </button>`
                }
                return `
                <div class="card-body p-3 row">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-3 text-center" style="z-index: 1;">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="School Logo" class="img-fluid rounded-circle mb-2" width="90">
                            ${button}
                        </div>
                        <div class="col-md-7">
                            <h5 class="card-title classroom-">${name}</h5>
                            <span class="">${status} - ${classroom_name}</span>
                        </div>
                    </div>
                </div>
                <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                    <img src="{{ asset('admin/assets/images/background/bubble-right.png') }}" alt="Description" class="img-fluid" style="max-width: 85px; height: auto;">
                </div>
                <div class="position-absolute bottom-0 start-0" style="padding: 0px;">
                    <img src="{{ asset('admin/assets/images/background/bubble-left.png') }}" alt="Description" class="img-fluid" style="max-width: 75px; height: auto;">
                </div>
            `;
            }

            //Add Teacher
            function addTeacher(classroom_id) {
                $('#add-teacher').off('submit').submit(function(e) { // Hapus listener sebelumnya
                    e.preventDefault();

                    var formData = new FormData(this);
                    formData.append('_method', 'PATCH');

                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/teacher-classrooms/" + classroom_id,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses",
                                text: "Berhasil menambah data.",
                                icon: "success"
                            }).then(() => {
                                window.location.reload();
                            });
                        },
                        error: function(xhr) {
                            console.error('Gagal menambah guru:', xhr.responseText);
                            alert('Terjadi kesalahan, silakan coba lagi.');
                        }
                    });
                });
            }


            //Add Mentor
            function addMentor(classroom_id) {
                $('#add-mentor').off('submit').submit(function(e) { // Hapus listener sebelumnya
                    e.preventDefault();

                    var formData = new FormData(this);
                    formData.append('_method', 'PATCH');

                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/mentor-classrooms/" + classroom_id,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses",
                                text: "Berhasil menambah data.",
                                icon: "success"
                            }).then(() => {
                                window.location.reload();
                            });
                        },
                        error: function(xhr) {
                            console.error('Gagal menambah mentor:', xhr.responseText);
                            alert('Terjadi kesalahan, silakan coba lagi.');
                        }
                    });
                });
            }


            //Student Classroom
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

            //Menampilkan List Classroom
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
