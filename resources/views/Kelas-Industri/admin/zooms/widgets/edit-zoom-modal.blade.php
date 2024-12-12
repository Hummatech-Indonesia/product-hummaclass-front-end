<!-- Modal -->
<div class="modal fade" id="edit-zoom-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" id="edit-zoom-form" enctype="multipart/form-data">
                <div class="modal-header text-center" style="background-color: #9425FE; border-radius: 8px;">
                    <h5 class="modal-title text-white mx-auto" id="exampleModalLabel">Edit jadwal zoom</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title-edit" class="form-control" placeholder="Judul..">

                    </div>
                    <div class="mb-3">
                        <label for="school_id" class="form-label">Sekolah</label>
                        <select name="school_id" id="school_id-edit" class="form-control"></select>
                    </div>

                    <div class="mb-3">
                        <label for="classroom_id" class="form-label">Kelas</label>
                        <select name="classroom_id" id="classroom_id-edit" class="form-control"></select>
                    </div>

                    <div class="mb-3">
                        <label for="user_id" class="form-label">Mentor</label>
                        <select name="user_id" id="mentor_id-edit" class="form-control"></select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="datetime-local" name="date" id="date-edit" class="form-control" placeholder="Judul..">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link Zoom</label>
                        <input type="text" name="link" id="link-edit" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).on('click', '.edit-zoom-button', function() {
            let id = $(this).data('id');
            let title = $(this).data('title');
            let school_id = $(this).data('school_id');
            let classroom_id = $(this).data('classroom_id');
            let mentor_id = $(this).data('mentor_id');
            let date = $(this).data('date');
            let link = $(this).data('link');

            console.log('Data attributes:', {
                id,
                title,
                school_id,
                classroom_id,
                mentor_id,
                date,
                link
            });

            $('#title-edit').val(title);
            $('#school_id-edit').val(school_id).trigger('change');
            $('#classroom_id-edit').val(classroom_id).trigger('change');
            $('#mentor_id-edit').val(mentor_id).trigger('change');
            $('#date-edit').val(date);
            $('#link-edit').val(link);

            $('#edit-zoom-modal').modal('show');

            loadSchools();

            function loadSchools() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/schools-all",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}",
                        Accept: "application/json",
                    },
                    dataType: "json",
                    success: function(response) {
                        populateSchools(response.data);
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data Sekolah.",
                            icon: "error",
                        });
                    },
                });
            }

            function populateSchools(schools) {
                $('#school_id-edit')
                    .empty()
                    .append('<option value="">Pilih Sekolah</option>');

                $.each(schools, function(index, school) {
                    $('#school_id-edit').append(
                        `<option value="${school.id}" data-classrooms='${JSON.stringify(school.classrooms)}'>${school.name}</option>`
                    );
                });

                if (school_id) {
                    $('#school_id-edit').val(school_id);

                    let selectedOption = $('#school_id-edit').find(':selected');
                    let classrooms = selectedOption.data('classrooms') || [];
                    populateClassrooms(classrooms);
                }

                $('#school_id-edit').on('change', function() {
                    let selectedOption = $(this).find(':selected');
                    let classrooms = selectedOption.data('classrooms') || [];
                    populateClassrooms(classrooms);
                });
            }

            function populateClassrooms(classrooms) {
                $('#classroom_id-edit')
                    .empty()
                    .append('<option value="">Pilih Kelas</option>');

                $.each(classrooms, function(index, classroom) {
                    $('#classroom_id-edit').append(
                        `<option value="${classroom.id}" data-mentor='${JSON.stringify(classroom.mentor)}'>${classroom.name}</option>`
                    );
                });

                if (classroom_id) {
                    $('#classroom_id-edit').val(classroom_id);

                    let selectedOption = $('#classroom_id-edit').find(':selected');
                    let mentor = selectedOption.data('mentor') || null;
                    populateMentors(mentor);
                }

                $('#classroom_id-edit').on('change', function() {
                    let selectedOption = $(this).find(':selected');
                    let mentor = selectedOption.data('mentor') || null;
                    populateMentors(mentor);
                });
            }

            function populateMentors(mentor) {
                $('#mentor_id-edit')
                    .empty()
                    .append('<option value="">Pilih Mentor</option>');

                if (mentor) {
                    $('#mentor_id-edit').append(
                        `<option value="${mentor.id}">${mentor.name}</option>`
                    );
                }

                if (mentor_id) {
                    $('#mentor_id-edit').val(mentor_id);
                }
            }



            $('#edit-zoom-form').submit(function(e) {
                e.preventDefault();

                var school_id = $('#school_id-edit').val();
                var classroom_id = $('#classroom_id-edit').val();
                var mentor_id = $('#mentor_id-edit').val();
                var title = $('#title-edit').val();
                var link = $('#link-edit').val();
                var date = $('#date-edit').val();

                if (!school_id || !classroom_id || !mentor_id || !title || !link || !date) {
                    Swal.fire({
                        title: "Peringatan!",
                        text: "Semua kolom wajib diisi.",
                        icon: "warning",
                    });
                    return;
                }

                var formData = new FormData(this);
                formData.append('_method', 'PATCH');

                formData.append('school_id', school_id);
                formData.append('classroom_id', classroom_id);
                formData.append('mentor_id', mentor_id);
                formData.append('title', title);
                formData.append('link', link);
                formData.append('date', date);

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/zooms/" + id,
                    data: formData,
                    dataType: "json",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}",
                        Accept: "application/json",
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                        Swal.fire({
                            title: "Sukses",
                            text: "Jadwal Zoom berhasil diperbarui.",
                            icon: "success",
                        }),
                        window.location.reload();
                        $('#edit-zoom-modal').modal('hide');
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memperbarui jadwal Zoom.",
                            icon: "error",
                        });
                    },
                });

            });

        });
    </script>
@endpush
