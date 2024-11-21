@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <form action="#" method="POST" id="editTeacherForm">
            <div class="card-header">
                <h5>Edit Guru</h5>
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
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/teacher-detail/" + id,
                headers: {
                    'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                },
                dataType: "json",
                success: function(response) {

                    $('#editTeacherForm').submit(function(e) {
                        e.preventDefault();
                        var schoolSlug = response.data.school.slug;
                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/teachers/" + id +
                                "?_method=PATCH",
                            headers: {
                                'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                            },
                            data: new FormData(this),
                            processData: false,
                            contentType: false,
                            dataType: "json",
                            success: function(response) {
                                window.location.href = '/admin/class/school/' +
                                    schoolSlug;
                            },
                            error: function(xhr) {
                                alert('Gagal mengubah data guru');
                            }
                        });
                    });

                    $('.backButton').click(function(e) {
                        e.preventDefault();
                        window.location.href = '/admin/class/school/' + response
                            .data.school.slug;
                    });
                }
            });

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/users",
                headers: {
                    'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                },
                dataType: "json",
                success: function(response) {
                    $('#user_id').empty();
                    $('#user_id').append(
                        `
                        <option value="">Pilih User</option>
                        `
                    );
                    $.each(response.data.data, function(index, value) {
                        $('#user_id').append(
                            `
                            <option value="${value.id}">${value.name}</option>
                `
                        );
                    });
                }
            });



        });
    </script>
@endsection
