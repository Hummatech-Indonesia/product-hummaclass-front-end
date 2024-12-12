<script>

    $(document).ready(function () {
        
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/student/dashboard",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
            },
            dataType: "json",
            success: function (response) {
                $('#count_module').text(response.data.module_task.module_count);
                $('#count_task').text(response.data.module_task.module_task);
                $('#count_task_clear').text(response.data.module_task.module_task_clear);
                $('#count_task_not_clear').text(response.data.module_task.module_task_not_clear);
                $('#count_task_not_clear_2').text(response.data.module_task.module_task_not_clear);
                $('#count_challenge').text(response.data.data.count_challenge);
                $('#count_challenge_clear').text(response.data.data.challenge_clear);
                $('#count_challenge_not_clear').text(response.data.data.challenge_not_clear);
                $('#count_challenge_not_clear_2').text(response.data.data.challenge_not_clear);
                $('#student-point').text(response.data.data.user.point);
                $('#count-event').text(response.data.data.count_event);
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: xhr.responseJSON.meta.message,
                    icon: "error"
                });
            }
        });

    });

</script>