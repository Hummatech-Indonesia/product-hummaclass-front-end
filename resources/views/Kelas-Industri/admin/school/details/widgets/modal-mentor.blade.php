<div class="modal fade" id="modal-mentor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="add-mentor" class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-center position-relative"
                style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Tambah Mentor</h5>
            </div>
            <div class="modal-body">
                <div>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2 fw-semibold text-dark">Nama Mentor</label>
                        <select class="form-control" id="user_id" name="user_id" style="width: 100%; height: 36px">
                            <option value="">--Pilih Mentor--</option>
                        </select>
                        @error('user_id')
                            <span class="text-danger error-create">{{ $message }}</span>
                        @enderror
                    </div>
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
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/get-mentors",
                headers: {
                    'Authorization': `Bearer {{ session('hummaclass-token') }}`
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    $.each(response.data, function(index, value) {
                        $('#user_id').append(
                            `<option value="${value.id}">${value.name}</option>`);
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
        });
    </script>
@endpush
