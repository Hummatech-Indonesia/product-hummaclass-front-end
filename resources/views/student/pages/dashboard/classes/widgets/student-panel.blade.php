<div class="row">
    <div class="col-12 col-lg-6 col-md-6 mb-3">
        <div class="card shadow border border-none rounded-4 position-relative">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                        class="rounded-circle me-3" style="width: 64px; height: 64px;">
                    <div>
                        <h5 class="mb-1" id="teacher-name">Suyadi Oke Joss, S.Pd</h5>
                        <p class="text-muted mb-0">Wali Kelas <span id="classroom-name">XII RPL 1</span></p>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt=""
                    style="position: absolute; bottom: 0; right: 0; width: 100px; height: auto; border-bottom-right-radius: 15px">
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-md-6 mb-3">
        <div class="card shadow border border-none rounded-4 position-relative">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                        class="rounded-circle me-3" style="width: 64px; height: 64px;">
                    <div>
                        <h5 class="mb-1" id="mentor-name">Alfian Ban Dalam</h5>
                        <p class="text-muted mb-0">Mentor Kelas Industri</p>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt=""
                    style="position: absolute; bottom: 0; right: 0; width: 100px; height: auto; border-bottom-right-radius: 15px">
            </div>
        </div>
    </div>
</div>

<div class="card border border-none rounded-3 p-3">
    <div class="card-body">
        <h3>Daftar Siswa</h3>
        <div class="col-12 col-lg-4 mb-4">
            <input type="text" name="search" id="search" placeholder="Cari..." class="form-control rounded-3">
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle border border-none mb-0">
                <thead class="">
                    <tr>
                        <th class="px-3">No</th>
                        <th class="px-3">Nama</th>
                        <th class="px-3">Email</th>
                        <th class="px-3">No Telepon</th>
                        <th class="px-3">Alamat</th>
                    </tr>
                </thead>
                <tbody id="student-list">
                    @for ($i = 1; $i <= 10; $i++)
                        {{-- <tr>
                            <td class="px-3">{{ $i }}</td>
                            <td class="px-3">
                                <div class="d-flex flex-column flex-md-row align-items-center">
                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                                        class="rounded-circle me-3 mb-2 mb-md-0"
                                        style="height: 48px; width: 48px; object-fit: cover;">

                                    <div>
                                        <b class="mb-0">Alfian Kopling</b>
                                        <p class="text-muted mb-0" style="font-size: 14px;">XI RPL 1</p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-3">{{ $i }}@gmail.com</td>
                            <td class="px-3">0987654321</td>
                            <td class="text-truncate px-3" style="max-width: 200px;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </td>
                        </tr> --}}
                    @endfor
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <nav class="pagination__wrap mt-40">
                    <ul class="list-wrap">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="shop.html">2</a></li>
                        <li><a href="shop.html">3</a></li>
                        <li><a href="shop.html">4</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            function studentList(index, value) {
                return `
                <tr>
                    <td class="px-3">${index + 1}</td>
                    <td class="px-3">
                        <div class="d-flex flex-column flex-md-row align-items-center">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                                class="rounded-circle me-3 mb-2 mb-md-0"
                                style="height: 48px; width: 48px; object-fit: cover;">

                            <div>
                                <b class="mb-0">${value.student}</b>
                                <p class="text-muted mb-0" style="font-size: 14px;">
                                    ${value.class || 'Unknown'}
                                </p>
                            </div>
                        </div>
                    </td>

                    <td class="px-3">${value.email}</td>
                    <td class="px-3">${value.phone_number}</td>
                    <td class="text-truncate px-3" style="max-width: 200px;">
                        ${value.address}
                    </td>
                </tr>
            `;
            }

            function debounce(callback, delay) {
                let timer;
                return function(...args) {
                    clearTimeout(timer);
                    timer = setTimeout(() => callback(...args), delay);
                };
            }

            function getStudents(classroomId, page) {
                $.ajax({
                    type: "GET",
                    url: `{{ config('app.api_url') }}/api/k/${classroomId}?page=${page}`,
                    headers: {
                        Authorization: `Bearer {{ session('hummaclass-token') }}`
                    },
                    data: {
                        name: $('#search').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#student-list').empty();
                        if (response.data && response.data.data) {
                            $.each(response.data.data, function(index, value) {
                                $('#student-list').append(studentList(index, value));
                            });
                        } else {
                            $('#student-list').append(
                                '<tr><td colspan="5" class="text-center">No students found.</td></tr>'
                            );
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat mengambil data siswa.",
                            icon: "error"
                        });
                    }
                });
            }

            function detailStudent() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/student-auth",
                    headers: {
                        Authorization: `Bearer {{ session('hummaclass-token') }}`
                    },
                    dataType: "json",
                    success: function(response) {
                        const classroom = response.data.classroom;

                        $('#teacher-name').text(response.data.teacher_name);
                        $('#classroom-name').text(classroom?.name ?? 'Unknown');
                        $('#mentor-name').text(response.data.mentor_name);

                        const debouncedSearch = debounce(() => getStudents(classroom.id, 1), 500);

                        $('#search').off('keyup').on('keyup', debouncedSearch);

                        if (classroom) {
                            getStudents(classroom.id, 1);
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat mengambil data siswa.",
                            icon: "error"
                        });
                    }
                });
            }

            detailStudent();
        });
    </script>
@endpush
