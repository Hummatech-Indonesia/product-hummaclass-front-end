<script>

    $(document).ready(function () {
        let debounceTimer;
    
        $('#search-name').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                getRankStudent(1);
            }, 500);
        });

        $('#search-school').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                getRankStudent(1);
            }, 500);
        });

        $('#search-classroom').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                getRankStudent(1);
            }, 500);
        });
    
        function studentClassroom(index, value) {
            return `
                <tr class="fw-semibold">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">${value.rank}</h6>
                            </div>
                        </div>
                    </td>
                    <td>${value.name}</td>
                    <td>${value.school.name}</td>
                    <td>${value.point}</td>
                </tr>
            `
        }
    
        function getRankStudent(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/mentor/student/list",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: {
                    name:$('#search-name').val(),
                    school_id:$('#search-school').val(),
                    classroom_id:$('#search-classroom').val()
                },
                dataType: "json",
                success: function (response) {
                    $('#tableBody').empty();
                    $.each(response.data.data, function (indexInArray, valueOfElement) { 
                        $('#tableBody').append(studentClassroom(indexInArray, valueOfElement));
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
    
        getRankStudent(1);

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/schools-all",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
            },
            dataType: "json",
            success: function (response) {
                $('#search-school').empty();
                $('#search-school').append(`<option value="">Pilih Sekolah</option>`);
                $.each(response.data, function (index, value) { 
                    $('#search-school').append(`<option value="${value.id}">${value.name}</option>`);
                });
            }
        });
    });

</script>