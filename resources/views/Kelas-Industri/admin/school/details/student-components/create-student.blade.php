@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <form action="#" method="POST" id="createTeacherForm">
            <div class="card-header">
                <h5>Tambah Murid</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="phone_number" class="form-label">Nomor Telepon</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="nisn" class="form-label">Nomor induk siswa nasional</label>
                        <input type="text" name="nisn" id="nisn" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="religion" class="form-label">Agama</label>
                        <input type="text" name="religion" id="religion" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="date_birth" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="date_birth" id="date_birth" class="form-control">
                    </div>
                </div>
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" cols="15" rows="5" class="form-control"></textarea>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    <button type="button" class="btn btn-secondary backButton">Kembali</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var slug = "{{ $slug }}";

            // Tombol kembali
            $(document).on('click', '.backButton', function() {
                window.location.href = '/admin/class/school/' + slug;
            });

            // Fetch data user
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/users",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#user_id').empty();
                    $('#user_id').append('<option value="">Pilih User</option>'); // Placeholder
                    $.each(response.data.data, function(index, value) {
                        $('#user_id').append(
                            `<option value="${value.id}">${value.name}</option>`);
                    });
                },
                error: function(xhr) {
                    console.error('Gagal memuat data user:', xhr.responseText);
                }
            });

            // Fetch data sekolah
            var schoolId; // Variabel untuk menyimpan id sekolah
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/schools/" + slug,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    schoolId = response.data.id;
                },
                error: function(xhr) {
                    console.error('Gagal memuat data sekolah:', xhr.responseText);
                }
            });

            // Submit form
            $('#createTeacherForm').submit(function(e) {
                e.preventDefault();

                if (!schoolId) {
                    alert('Data sekolah belum dimuat.');
                    return;
                }

                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/students/" + schoolId,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        console.log('Berhasil menambah murid:', response);
                        alert('murid berhasil ditambahkan.');
                        window.location.href = '/admin/class/school/' +
                            slug;
                    },
                    error: function(xhr) {
                        console.error('Gagal menambah murid:', xhr.responseText);
                        alert('Terjadi kesalahan, silakan coba lagi.');
                    }
                });
            });
        });
    </script>
@endsection
