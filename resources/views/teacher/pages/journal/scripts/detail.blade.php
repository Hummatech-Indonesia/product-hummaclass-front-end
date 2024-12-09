<script>
    $(document).ready(function () {

        function detailStudent(index, value){
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
            `
        }

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/journals/" + "{{$id}}",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
            },
            dataType: "json",
            success: function (response) {
                $('#desc').text(response.data.description);
                $('#image').attr('src', response.data.image);
                $('#title').text(response.data.title);
                $('#student-list').empty();
                $.each(response.data.student_presence, function (index, value) { 
                    $('#student-list').append(detailStudent(index, value));
                });
            }
        });

    });
</script>