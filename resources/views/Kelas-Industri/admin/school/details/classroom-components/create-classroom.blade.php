@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <form action="" method="POST" id="createClassroomForm">
            <div class="card-header">
                <h5>Tambah Kelas</h5>
            </div>
            <div class="card-body">
                <label for="division_id" class="form-label">Divisi</label>
                <select name="division_id" id="division_id" class="form-control">
                    <option value=""></option>
                </select>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="XII RPL 1">
                <label for="class_level" class="form-label">Kelas</label>
                <select name="class_level" id="class_level" class="form-control">
                    <option value="ten">10</option>
                    <option value="eleven">11</option>
                    <option value="twelve">12</option>
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

            $(document).on('click', '.backButton', function() {
                window.location.href = '/admin/class/school/' + slug;
            })

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/divisions",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#division_id').empty();
                    $.each(response.data, function(index, value) {
                        $('#division_id').append(
                            `
                            <option value="${value.id}">${value.name}</option>
                            `
                        );
                    });
                }
            });

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/schools/" + slug,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#createClassroomForm').submit(function(e) {
                        e.preventDefault();
                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/classrooms/" +
                                response.data.id,
                            headers: {
                                Authorization: 'Bearer ' +
                                    "{{ session('hummaclass-token') }}"
                            },
                            data: new FormData(this),
                            processData: false,
                            contentType: false,
                            dataType: "json",
                            success: function(response) {
                                window.location.href = '/admin/class/school/' +
                                    slug;
                            },
                            error: function(xhr) {}
                        });
                    });
                }
            });

        });
    </script>
@endsection
