<!-- Modal -->
<div class="modal fade" id="create-attendance-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-centered modal-md">
        <div class="modal-content">
            <form action="" id="create-attendance-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="classroom_id" class="form-label">Sekolah</label>
                    <select name="" id="classroom_id" class="form-control school-id-form">
                        <option value=""></option>
                    </select>
                    <label for="classroom_id" class="form-label">Kelas</label>
                    <select name="classroom_id" id="classroom_id" class="form-control classroom-id-form">
                        <option value=""></option>
                    </select>
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" id="title" class="form-control"
                        placeholder="Judul absensi">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('script')
    <script>

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/schools-all",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
            },
            dataType: "json",
            success: function (response) {
                $('.school-id-form').empty();
                $('.school-id-form').append(
                    `
                        <option value="" selected>Pilih Sekolah</option>
                    `
                );
                $.each(response.data, function(index, value) {
                    $('.school-id-form').append(
                        `
                        <option value="${value.id}">${value.name}</option>
                        `
                    );
                });
            }
        });

        function fetchClass(id){
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/classroom/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                dataType: "json",
                success: function(response) {
                    $('.classroom-id-form').empty();
                    $('.classroom-id-form').append(
                        `
                            <option value="" selected>Pilih Kelas</option>
                        `
                    );
                    $.each(response.data, function(index, value) {
                        $('.classroom-id-form').append(
                            `
                            <option value="${value.id}">${value.name}</option>
                            `
                        );
                    });
                }
            });
        }

        $(document).on('change', '.school-id-form', function() {
            const schoolId = $(this).val(); 
            fetchClass(schoolId);          
        });
    </script>
@endpush
