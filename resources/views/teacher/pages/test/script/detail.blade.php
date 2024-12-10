<script>
    $(document).ready(function() {

        let debounceTimer;

        $('#search-class').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                fetchClassData();
            }, 500);
        });

        $(document).on('change', ('.filter-class'), function(e){
            $('.filter-class').not(this).prop('checked', false);
            fetchClassData();
        })

        function classList(index, value) {
            const isActive = index === 0 ? 'active' : '';
            const isSelected = index === 0 ? 'true' : 'false';

            return `
                <li class="nav-item">
                    <a class="nav-link rounded-3 ${isActive}" id="v-pills-${value.id}-tab" data-bs-toggle="pill"
                        href="#v-pills-${value.id}" data-id="${value.id}" role="tab" aria-controls="v-pills-${value.id}"
                        aria-selected="${isSelected}">${value.name}
                    </a>
                </li>
            `;
        }

        function studentList(index, value) {
            return `
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('admin/dist/images/profile/user-10.jpg') }}"
                                class="rounded-circle" width="40" height="40" />
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">${value.user_name}</h6>
                                <span class="fw-normal">X RPL 1</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6 class="fw-normal mb-0">X RPL B</h6>
                    </td>
                    <td class="text-center">
                        <span class="mb-1 badge font-medium bg-light-success text-success px-4">${value.total_correct}</span>
                    </td>
                    <td class="text-center">
                        <span class="mb-1 badge font-medium bg-light-danger text-danger px-4">${value.total_fault}</span>
                    </td>
                    <td class="text-center">
                        <span class="mb-1 badge font-medium bg-light-primary text-primary px-4">${value.score}</span>
                    </td>
                    <td class="text-center">
                        <button class="btn mb-1 waves-effect waves-light btn-danger" type="button">Reset</button>
                    </td>
                </tr>
            `
        }

        function fetchStudentData(id) {

            $('#search-student').keyup(function(e) {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function(e) {
                    fetchStudentData(id);
                }, 500);
            });

            $(document).on('change', ('#type-student'), function(e){
                fetchStudentData(id);
            })

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/test-student/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: {
                    search: $('#search-student').val(),
                    type: $('#type-student').val(),
                },
                dataType: "json",
                success: function(response) {
                    $('#user-course-list').empty();
                    $('#count_student').text(response.data.header.count_student);
                    $('#highest_score').text(response.data.header.the_highest_score);
                    $('#lowest_score').text(response.data.header.the_lowest_score);
                    $('#average_score').text(response.data.header.average);
                    $.each(response.data.data, function(index, value) {
                        $('#user-course-list').append(studentList(index, value));
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: xhr.responseJSON.meta.message,
                        icon: "error"
                    });
                }
            });
        }

        $(document).on('click', '.nav-link', function() {
            const id = $(this).data('id');
            fetchStudentData(id);
        });

        function fetchClassData(){
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/test/{{ $slug }}",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: {
                    name: $('#search-class').val(),
                    level: $('.filter-class:checked').val()
                },
                dataType: "json",
                success: function(response) {
                    $('#classroom-list').empty();
                    $.each(response.data.classroom, function(index, value) {
                        $('#classroom-list').append(classList(index, value));
                    });
                    fetchStudentData($('#classroom-list .nav-link.active').data('id'))

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: xhr.responseJSON.meta.message,
                        icon: "error"
                    });
                }
            });
        }

        fetchClassData();
    });
</script>
