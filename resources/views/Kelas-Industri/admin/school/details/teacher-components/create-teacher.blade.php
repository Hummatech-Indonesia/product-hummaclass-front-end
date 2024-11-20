@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <form action="#" method="POST" id="createTeacherForm">
            <div class="card-header">
                <h5>Tambah Kelas</h5>
            </div>
            <div class="card-body">
                <label for="user_id" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="">Pilih User</option>
                </select>
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
                    url: "{{ config('app.api_url') }}/api/teachers/" + schoolId,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        console.log('Berhasil menambah guru:', response);
                        alert('Guru berhasil ditambahkan.');
                        window.location.href = '/admin/class/school/' +
                            slug;
                    },
                    error: function(xhr) {
                        console.error('Gagal menambah guru:', xhr.responseText);
                        alert('Terjadi kesalahan, silakan coba lagi.');
                    }
                });
            });
        });
    </script>
@endsection
