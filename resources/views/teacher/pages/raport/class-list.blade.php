<div class="card border">
    <div class="card-body p-3">
        <h5 class="fw-semibold mb-2"><b>Daftar Kelas</b></h5>
        <p>Daftar kelas industri pada sekolah</p>

        <form action="">
            <select class="form-select mr-sm-2 rounded-3 mb-2 border-0 bg-light-primary text-primary" id="schoolYears">
                <option selected></option>
            </select>

            <input type="text" class="form-control rounded-3 mb-3" id="search" placeholder="Cari Kelas...">

            <div class="mb-3">
                <h6 class="fw-semibold mb-2 text-muted"><b>Filter Kelas</b></h6>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="checkbox1" value="10">
                    <label class="form-check-label" for="checkbox1">Kelas 10</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="checkbox2" value="11">
                    <label class="form-check-label" for="checkbox2">Kelas 11</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="checkbox3" value="12">
                    <label class="form-check-label" for="checkbox3">Kelas 12</label>
                </div>
            </div>


            <button class="btn rounded-3 waves-effect waves-light btn-outline-warning w-100" type="submit">
                Terapkan
            </button>
        </form>

        <div class="row mt-3">
            <div class="col-md-12">
                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                </ul>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            function loadSchoolYears() {
                $('#loading-spinner').show();
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/school-years",
                    headers: {
                        "Authorization": "Bearer {{ session('hummaclass-token') }}",
                    },
                    success: function(response) {
                        $('#schoolYears').empty().append(
                            '<option selected>Pilih Tahun Ajaran</option>');
                        if (response.data) {
                            response.data.forEach(year => {
                                $('#schoolYears').append(
                                    `<option value="${year.id}">${year.school_year}</option>`
                                );
                            });
                        }
                    },
                });
                
            }

            function loadClassrooms(query = '', grades = [], schoolYear = '') {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/class-teacher",
                    data: {
                        query,
                        grades,
                        school_year: schoolYear
                    },
                    headers: {
                        "Authorization": "Bearer {{ session('hummaclass-token') }}",
                    },
                    success: function(response) {
                        $('#v-pills-tab').empty();
                        $('#v-pills-tabContent').empty();
                        if (response.data && response.data.length > 0) {
                            response.data.forEach((classroom, index) => {
                                $('#v-pills-tab').append(`
                                <li class="nav-item">
                                    <a class="nav-link ${index === 0 ? 'active' : ''}" id="v-pills-${classroom.id}-tab" data-bs-toggle="pill" 
                                        href="#v-pills-${classroom.id}" role="tab" aria-controls="v-pills-${classroom.id}" 
                                        aria-selected="${index === 0}">${classroom.name}</a>
                                </li>
                            `);

                                $('#v-pills-tabContent').append(`
                                <div class="tab-pane fade ${index === 0 ? 'show active' : ''}" id="v-pills-${classroom.id}" role="tabpanel" 
                                    aria-labelledby="v-pills-${classroom.id}-tab">
                                    
                                    <h5 class="fw-semibold mb-3"><b>Detail Kelas - ${classroom.name}</b></h5>
                                    <div class="card border">
                                        <div class="card-body p-3">
                                            <h5 class="fw-semibold mb-3"><b>Daftar Siswa</b></h5>
                                            <div class="col-12 col-sm-8 col-md-9 col-lg-4 mb-3">
                                                <input type="text" class="form-control rounded-3" style="background-color: #FFFFFF"
                                                    id="studentSearch-${classroom.id}" placeholder="Cari Siswa...">
                                            </div>
                                            <div class="table-responsive rounded-2 mb-4">
                                                <table class="table border text-nowrap customize-table mb-0 align-middle">
                                                    <thead class="text-dark fs-4">
                                                        <tr>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold mb-0">Nama Siswa</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold mb-0">Nilai</h6>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="student-list-${classroom.id}">
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            `);

                                if (index === 0) {
                                    loadStudents(classroom.id);
                                }
                            });
                        } else {
                            $('#v-pills-tab').append(
                                '<li class="nav-item"><span class="nav-link disabled">Tidak ada kelas</span></li>'
                            );
                            $('#v-pills-tabContent').append(
                                '<div class="tab-pane fade show active">Tidak ada data kelas.</div>'
                            );
                        }
                    },
                });
            }

            function loadStudents(classroomId) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/assesment-student/" + classroomId,
                    headers: {
                        "Authorization": "Bearer {{ session('hummaclass-token') }}",
                    },
                    success: function(response) {
                        const studentList = $(`#student-list-${classroomId}`);
                        studentList.empty();
                        if (response.data) {
                            response.data.forEach(student => {
                                studentList.append(`
                                <tr>
                                    <td>${student.student.name}</td>
                                    <td>${student.value}</td>
                                </tr>
                            `);
                            });
                        } else {
                            studentList.append('<tr><td colspan="2">Tidak ada data</td></tr>');
                        }
                    },
                });
            }

            $('#v-pills-tab').on('click', '.nav-link', function() {
                const classroomId = $(this).attr('href').replace('#v-pills-', '');
                loadStudents(classroomId);
            });

            $('#filterForm').on('submit', function(e) {
                e.preventDefault();
                const query = $('#search').val();
                const grades = [];
                if ($('#checkbox1').is(':checked')) grades.push(10);
                if ($('#checkbox2').is(':checked')) grades.push(11);
                if ($('#checkbox3').is(':checked')) grades.push(12);
                const schoolYear = $('#schoolYears').val();
                loadClassrooms(query, grades, schoolYear);
            });

            loadSchoolYears();
            loadClassrooms();
        });
    </script>
@endpush
