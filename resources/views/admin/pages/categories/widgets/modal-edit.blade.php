<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Edit Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" class="editForm">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="mb-2 fw-semibold text-dark">Nama Kategori</label>
                            <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                name="name" value="{{ old('name') }}" id="name">
                            @error('name')
                                <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white updateConfirmation"
                        style="background-color: #7209DB;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            let id;
            $(document).on('click', '.btn-update', function() {
                $('#modal-edit').modal('show');
                id = $(this).data('id');

                const name = $(this).data('name');
                $('#name').val(name);
            });

            $('.updateConfirmation').click(function(e) {
                e.preventDefault();

                let url = "{{ config('app.api_url') }}" + "/api/categories/" + id;
                let formData = new FormData($('.editForm')[0]);


                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#modal-edit').modal('hide');
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.meta.message,
                            icon: "success"
                        });
                        get(1);
                    },
                    error: function(response) {
                        let errorMessages = [];
                        $.each(response.responseJSON.errors, function(field, messages) {
                            $.each(messages, function(index, message) {
                                errorMessages.push(message);
                            });
                        });
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            html: errorMessages.join('<br>'),
                            icon: "error"
                        });
                    }
                });
            });
        });
    </script>
@endpush
