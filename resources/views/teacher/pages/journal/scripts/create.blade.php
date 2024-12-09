<script>
    $(document).ready(function () {

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/class-teacher",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
            },
            dataType: "json",
            success: function (response) {
                $('#class-input').empty();
                $('#class-input').append(`<option value="">Pilih Kelas</option>`)
                $.each(response.data, function (index, value) { 
                    $('#class-input').append(`<option value="${value.id}">${value.name}</option>`);
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

        function notData(){
            return `
                <tr>
                    <td colspan="4" class="text-center">
                        <p class="mb-0 fw-normal">Tidak ada siswa yang tersedia.</p>
                    </td>
                </tr>
            `
        }

        function classStudentData(index, value){
            return `
                <tr>
                    <td>
                        <p class="mb-0 fw-normal">${index + 1}</p>
                    </td>
                    <td>
                        <h6 class="fw-normal mb-0">${value.student}</h6>
                    </td>
                    <td style="padding-right: 20px;">
                        <p class="mb-0 fw-normal">${value.class}</p>
                    </td>
                    <td>
                        <div class="d-flex flex-wrap gap-3 justify-content-start">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input success check-outline outline-success" type="checkbox" name="journal_presence[${value.id}]" id="hadir-check-${index + 1}" value="present">
                                <label class="form-check-label" for="hadir-check-${index + 1}">Hadir</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input success check-outline outline-success" type="checkbox" name="journal_presence[${value.id}]" id="izin-check-${index + 1}" value="permit">
                                <label class="form-check-label" for="izin-check-${index + 1}">Izin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input success check-outline outline-success" type="checkbox" name="journal_presence[${value.id}]" id="sakit-check-${index + 1}" value="sick">
                                <label class="form-check-label" for="sakit-check-${index + 1}">Sakit</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input success check-outline outline-success" type="checkbox" name="journal_presence[${value.id}]" id="alpha-check-${index + 1}" value="alpha">
                                <label class="form-check-label" for="alpha-check-${index + 1}">Alpha</label>
                            </div>
                        </div>
                    </td>
                </tr>
            `
        }

        $('#list-student').append(notData());
        $('#class-input').change(function () {
            const selectedValue = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/show/classroom/" + selectedValue,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                dataType: "json",
                success: function (response) {
                    $('#list-student').empty();
                    if (response.data.student_classrooms.length === 0) {
                        $('#list-student').append(notData());
                    } else {
                        $.each(response.data.student_classrooms, function (indexInArray, valueOfElement) { 
                            $('#list-student').append(classStudentData(indexInArray, valueOfElement));
                        });
                    }
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

        $('#form-create').submit(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{config('app.api_url')}}/api/journal-presences",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(response) {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Berhasil menambahkan data",
                        icon: "success"
                    });
                    window.location.href = "/dashboard/teacher/journal"
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
    });
</script>