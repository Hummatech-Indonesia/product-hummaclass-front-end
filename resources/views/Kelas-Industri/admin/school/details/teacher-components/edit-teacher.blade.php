@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <form action="#" method="POST" id="editTeacherForm">
            <div class="card-header">
                <h5>Edit Guru</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col col-6">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-6">
                        <label for="phone_number" class="form-label">Nomor Telepon</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="nip" class="form-label">Nomor induk siswa nasional</label>
                        <input type="number" name="nip" id="nip" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="date_birth" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="date_birth" id="date_birth" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-12">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea name="address" id="address" cols="15" rows="5" class="form-control"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-secondary backButton">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";
            var schoolSlug;



            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/teacher-detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    schoolSlug = response.data.school.slug;

                    $('#name').val(response.data.user.name)
                    $('#email').val(response.data.user.email)
                    $('#phone_number').val(response.data.user.phone_number)
                    $('#nip').val(response.data.nip)
                    $('#date_birth').val(response.data.date_birth)
                    $('#gender').val(response.data.user.gender)
                    $('#address').val(response.data.user.address)

                    $('#editTeacherForm').submit(function(e) {
                        e.preventDefault();

                        var formData = new FormData(this);
                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/teachers/" + id +
                                "?_method=PATCH",
                            headers: {
                                Authorization: 'Bearer ' +
                                    "{{ session('hummaclass-token') }}"
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                            dataType: "json",
                            success: function(response) {
                                Swal.fire({
                                    title: "Sukses",
                                    text: "Berhasil mengubah data.",
                                    icon: "success"
                                }).then(() => {
                                    window.location.href =
                                        '/admin/class/school/' +
                                        schoolSlug;
                                });
                            },
                            error: function(response) {
                                if (response.status === 422) {
                                    let errors = response.responseJSON.data;

                                    $.each(errors, function(field, messages) {
                                        $(`[name="${field}"]`).addClass(
                                            'is-invalid');
                                        $(`[name="${field}"]`).closest(
                                            '.col').find(
                                            '.invalid-feedback').text(
                                            messages[0]);
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

                    $(document).on('click', '.backButton', function() {
                        window.location.href =
                            '/admin/class/school/' +
                            schoolSlug;
                    })
                }
            })

        });
    </script>
@endsection