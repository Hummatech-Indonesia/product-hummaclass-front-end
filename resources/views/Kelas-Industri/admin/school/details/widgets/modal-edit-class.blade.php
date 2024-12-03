<div class="modal fade" id="modal-edit-class" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="edit-classroom" class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-center position-relative"
                style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Atur Kelas</h5>
            </div>
            <div class="modal-body">
                <div>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2 fw-semibold text-dark">Nama Kelas</label>
                        <input type="text" class="form-control" placeholder="Masukan nama kelas" id="name-classroom"
                            name="name" placeholder="Tambahkan Kelas...">
                        @error('name')
                            <span class="text-danger error-create">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2 fw-semibold text-dark">Level Kelas</label>
                        <select class="form-control" name="class_level" id="class_level">

                        </select>
                        @error('class_level')
                            <span class="text-danger error-create">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2 fw-semibold text-dark">Tahun Ajaran</label>
                        <select class="form-control" name="school_year_id" id="edit_school_year_id">
                            <option value="">--Pilih Tahun Ajaran--</option>
                        </select>
                        @error('school_year_id')
                            <span class="text-danger error-create">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2 fw-semibold text-dark">Divisi</label>
                        <select class="form-control" name="division_id" id="edit_division_id">
                            <option value="">--Pilih Divisi--</option>
                        </select>
                        @error('division_id')
                            <span class="text-danger error-create">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="form-group mb-3">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Wali Kelas</label>
                            <input type="text" class="form-control" placeholder="Masukan nama wali kelas"
                                id="detailPointsRequired" name="name" value="Alfian Kopling">
                            @error('name')
                                <span class="text-danger error-create">{{ $message }}</span>
                            @enderror
                        </div> --}}

                    {{-- <div class="form-group mb-3">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Siswa</label>
                            <input type="text" class="form-control selectSiswa" placeholder="0 Siswa Telah Dipilih" readonly>
                        </div>
                
                        <div class="card p-3 d-none" id="siswaCard">
                            <h5>Pilih Siswa</h5>
                            <div class="form-group mb-3">
                                <select class="w-100 siswaOptions" multiple="multiple">
                                    <option value="0987654567">Arif Muhammad</option>
                                    <option value="0987654567">Budi Setiawan</option>
                                    <option value="0987654567">Cindy Li</option>
                                </select>
                            </div>
                        </div> --}}
                        {{-- <button class="btn btn-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M13.586 2a2 2 0 0 1 1.284.467l.13.119L19.414 7a2 2 0 0 1 .578 1.238l.008.176V20a2 2 0 0 1-1.85 1.995L18 22h-6v-2h6V10h-4.5a1.5 1.5 0 0 1-1.493-1.356L12 8.5V4H6v8H4V4a2 2 0 0 1 1.85-1.995L6 2zM7.707 14.465l2.829 2.828a1 1 0 0 1 0 1.414l-2.829 2.828a1 1 0 1 1-1.414-1.414L7.414 19H3a1 1 0 1 1 0-2h4.414l-1.121-1.121a1 1 0 1 1 1.414-1.415ZM14 4.414V8h3.586z"/></g></svg>
                            Import Siswa
                        </button> --}}

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" style="background-color: #DB0909;"
                    data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn text-white" style="background-color: #7209DB;"">Simpan</button>
            </div>
        </form>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            $('#edit-class').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/classroom-detail/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#class_level').empty();
                        $('#class_level').append(
                            `<option value="">--Pilih Level kelas--</option>
                            <option ${response.data.class_level == 10 ? 'selected' : ''} value="10">Sepuluh</option>
                            <option ${response.data.class_level == 11 ? 'selected' : ''} value="11">Sebelas</option>
                            <option ${response.data.class_level == 12 ? 'selected' : ''} value="12">Dua Belas</option>`
                        );

                        division(response.data.division.id);
                        school_year(response.data.school_year.id);
                        $('#name-classroom').val(response.data
                            .name);
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data.",
                            icon: "error"
                        });
                    }
                });

                $('#edit-classroom').submit(function(e) {
                    e.preventDefault();

                    var formData = new FormData(this);

                    formData.append('_method', 'PATCH');

                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/classrooms/" + id,
                        data: formData,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                                title: "Sukses",
                                text: "Berhasil mengubah data.",
                                icon: "success"
                            }).then(() => {
                                window.location.reload();
                            });
                        },
                        error: function(response) {
                            if (response.status === 422) {
                                let errors = response.responseJSON.data;

                                $.each(errors, function(field, messages) {
                                    $(`[name="${field}"]`).addClass(
                                        'is-invalid');
                                    $(`[name="${field}"]`).closest('.col').find(
                                        '.invalid-feedback').text(messages[
                                        0]);
                                });
                            } else {
                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    text: "Ada kesalahan saat menyimpan data.",
                                    icon: "error"
                                });
                            }
                        }
                    });
                });

                function school_year(school_year_id) {

                    $.ajax({
                        type: "GET",
                        url: "{{ config('app.api_url') }}/api/school-years",
                        headers: {
                            'Authorization': `Bearer {{ session('hummaclass-token') }}`
                        },
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $.each(response.data, function(index, value) {
                                if (value.id == school_year_id) {
                                    $('#edit_school_year_id').append(
                                        `<option selected value="${value.id}">${value.school_year}</option>`
                                    );
                                } else {
                                    $('#edit_school_year_id').append(
                                        `<option value="${value.id}">${value.school_year}</option>`
                                    );
                                }
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    });
                }

                function division(division_id) {
                    $.ajax({
                        type: "GET",
                        url: "{{ config('app.api_url') }}/api/divisions",
                        headers: {
                            'Authorization': `Bearer {{ session('hummaclass-token') }}`
                        },
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $.each(response.data, function(index, value) {
                                if (value.id == division_id) {
                                    $('#edit_division_id').append(
                                        `<option selected value="${value.id}">${value.name}</option>`
                                    );
                                } else {
                                    $('#edit_division_id').append(
                                        `<option value="${value.id}">${value.name}</option>`
                                    );
                                }
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    });
                }
            });
        });
    </script>
@endpush
