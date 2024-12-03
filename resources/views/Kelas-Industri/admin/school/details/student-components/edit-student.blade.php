@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <form action="#" method="POST" id="editStudentForm">
            <div class="card-header">
                <h5>Edit Murid</h5>
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
                        <input type="text" name="phone_number" id="phone_number" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="nisn" class="form-label">Nomor induk siswa nasional</label>
                        <input type="text" name="nisn" id="nisn" class="form-control">
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
                </div>
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" cols="15" rows="5" class="form-control"></textarea>
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
                url: "{{ config('app.api_url') }}/api/student-detail/" + id,
                headers: {
                    'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                },
                dataType: "json",
                success: function(response) {
                    $('#name').val(response.data.name)
                    $('#email').val(response.data.email)
                    $('#gender').val(response.data.default_gender)
                    $('#nisn').val(response.data.nisn)
                    $('#phone_number').val(response.data.phone_number)
                    $('#date_birth').val(response.data.date_birth)
                    $('#address').val(response.data.address)

                    schoolSlug = response.data.school.slug

                    $.ajax({
                        type: "GET",
                        url: "{{ config('app.api_url') }}/api/schools/" + response.data.school
                            .slug,
                        headers: {
                            'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                        },
                        dataType: "json",
                        success: function(response) {
                            $(document).on('click', '.backButton', function() {
                                window.location.href = '/admin/class/school/' +
                                    schoolSlug;
                            })
                        },
                        error: function(xhr) {
                            alert('gagal mengambil data sekolah')
                        }
                    });

                    $('#editStudentForm').submit(function(e) {
                        e.preventDefault();
                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/students/" + id +
                                "?_method=PATCH",
                            headers: {
                                'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                            },
                            data: new FormData(this),
                            processData: false,
                            contentType: false,
                            dataType: "json",
                            success: function(response) {
                                Swal.fire({
                                    title: "Sukses!",
                                    text: response.meta.message,
                                    icon: "success"
                                });
                                window.location.href = '/admin/class/school/' +
                                    schoolSlug;
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    text: response.meta.message,
                                    icon: "error"
                                });
                            }
                        });
                    });

                }
            });




        });
    </script>
@endsection
