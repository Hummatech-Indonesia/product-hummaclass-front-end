<script>
    $(document).ready(function() {
        function detailStudent(index, value) {
            return `
                <tr>
                    <td>
                        <p class="mb-0 fw-normal">${index + 1}</p>
                    </td>
                    <td>
                        <h6 class="fw-normal mb-0">${value.student.name}</h6>
                    </td>
                    <td>
                        <p class="mb-0 fw-normal">${value.student.classroom.name}</p>
                    </td>
                    <td class="text-center">
                        <span class="mb-1 badge font-medium ${value.detail_bg}">${value.status}</span>
                    </td>
                </tr>
            `;
        }

        function fetchStudentData() {
            $('#loading-spinner').show();

            // Hide the skeleton loading when the data is ready
            $('.skeleton-image, .skeleton-text').show();

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/journals/" + "{{ $id }}",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                dataType: "json",
                success: function(response) {
                    $('#loading-spinner').hide();

                    // Hide skeleton and display actual content
                    $('.skeleton-image, .skeleton-text').hide();
                    $('#image').attr('src', response.data.image).show();
                    $('#title').text(response.data.title).show();
                    $('#desc').text(response.data.description).show();

                    $('#student-list').empty();
                    $.each(response.data.student_presence, function(index, value) {
                        $('#student-list').append(detailStudent(index, value));
                    });
                },
                error: function() {
                    $('#loading-spinner').hide();
                    $('.skeleton-image, .skeleton-text').hide();

                    $('#student-list').html(
                        '<tr><td colspan="4" class="text-center text-danger">Gagal memuat data.</td></tr>'
                    );
                }
            });
        }

        fetchStudentData();
    });
</script>
