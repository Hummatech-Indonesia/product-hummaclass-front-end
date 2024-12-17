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
            function schoolYears() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/school-years",
                    headers: {
                        "Authorization": "Bearer {{ session('hummaclass-token') }}",
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#schoolYears').empty();

                        if (response && response.data && response.data.length > 0) {
                            $('#schoolYears').append('<option selected>Pilih Tahun Ajaran</option>');

                            response.data.forEach(function(year) {
                                $('#schoolYears').append('<option value="' + year.id + '">' +
                                    year.school_year + '</option>'
                                );
                            });
                        } else {
                            console.error('Tidak ada data tahun ajaran');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching school years:', error);
                        console.error('Response:', xhr.responseText);
                    }
                });

            }

            schoolYears();

            function getClassrooms(query = '', gradeFilters = []) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/class-teacher",
                    data: {
                        query: query,
                        grades: gradeFilters
                    }, 
                    headers: {
                        "Authorization": "Bearer {{ session('hummaclass-token') }}",
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#v-pills-tab').empty();

                        if (response && response.data && Array.isArray(response.data) && response.data
                            .length > 0) {
                            response.data.forEach(function(classroom) {
                                $('#v-pills-tab').append(`
                            <li class="nav-item">
                                <a class="nav-link rounded-3 active" id="v-pills-${classroom.id}-tab" data-bs-toggle="pill"
                                    href="#v-pills-${classroom.id}" role="tab" aria-controls="v-pills-${classroom.id}"
                                aria-selected="false">${classroom.name}</a>
                            </li>
                        `);
                            });
                        } else {
                            console.log('Tidak ada data kelas atau format tidak sesuai');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching classrooms:', error);
                        console.error('Response:', xhr.responseText);
                    }
                });
            }

            getClassrooms();

            $('#search').on('input', function() {
                var query = $(this).val(); 
                var selectedGrades = [];

                if ($('#checkbox1').is(':checked')) selectedGrades.push(10);
                if ($('#checkbox2').is(':checked')) selectedGrades.push(11);
                if ($('#checkbox3').is(':checked')) selectedGrades.push(12);

                getClassrooms(query, selectedGrades); 
            });

            $('input[type="checkbox"]').on('change', function() {
                var query = $('#search').val(); 
                var selectedGrades = [];

                if ($('#checkbox1').is(':checked')) selectedGrades.push(10);
                if ($('#checkbox2').is(':checked')) selectedGrades.push(11);
                if ($('#checkbox3').is(':checked')) selectedGrades.push(12);

                getClassrooms(query, selectedGrades); 
            });


            function stduent_list(index, value) {
                return `
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="${value.student.photo}"
                                    class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">${value.student.name}</h6>
                                    <span class="fw-normal">${value.classroom}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h6 class="fw-normal mb-0">${value.value}</h6>
                        </td>
                    </tr>
                `
            }

            function listStudent(id) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/assesment-student/" + id,
                    headers: {
                        "Authorization": "Bearer {{ session('hummaclass-token') }}",
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    data: {
                        search: $().val(),
                    },
                    dataType: "json",
                    success: function (response) {
                        $('#student-list').empty();
                        if (response.data.length == 0) {
                            $('#student-list').append(empty());
                        } else {
                            $.each(response.data, function (indexInArray, valueOfElement) { 
                                $('#student-list').append(stduent_list(indexInArray, valueOfElement));
                            });
                        }
                    },
                    error: function(){
                        $('#student-list').append(empty());
                    }
                });    
            }

            listStudent(null);
        });
    </script>
@endpush
