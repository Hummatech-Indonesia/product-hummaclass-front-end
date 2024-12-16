@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <form action="#" method="POST" id="createTeacherForm">
            <div class="card-header">
                <h5>Tambah Guru</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col col-6">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-6">
                        <label for="phone_number" class="form-label">Nomor Telepon</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="Masukkan nomor telepon">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col col-6">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="number" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-6">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
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
                        <textarea name="address" id="address" cols="15" rows="5" class="form-control" placeholder="Masukkan alamat..."></textarea>
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
            var slug = "{{ $slug }}";

            // Tombol kembali
            $(document).on('click', '.backButton', function() {
                window.location.href = '/admin/class/school/' + slug;
            });


            // Submit form
            $('#createTeacherForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/teachers/" + slug,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil menambah data.",
                            icon: "success"
                        }).then(() => {
                            window.location.href = '/admin/class/school/' +
                                slug;
                        });
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.data;

                            $.each(errors, function(field, messages) {
                                $(`[name="${field}"]`).addClass('is-invalid');
                                $(`[name="${field}"]`).closest('.col').find(
                                    '.invalid-feedback').text(messages[0]);
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
        });
    </script>
@endsection
