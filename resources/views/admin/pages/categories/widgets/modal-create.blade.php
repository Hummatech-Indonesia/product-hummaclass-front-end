<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" class="createForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Kategori</label>
                            <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger error-create">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white storeConfirmation"
                        style="background-color: #7209DB;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', '.addCategory', function() {
            $('#modal-create').modal('show');
        })
        $('.storeConfirmation').click(function(e) {
            e.preventDefault();
            let formData = new FormData($('.createForm')[0]);
            $.ajax({
                type: "POST",
                url: "http://127.0.0.1:8000/api/categories",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#modal-create').modal('hide');
                    Swal.fire({
                        title: "Berhasil!",
                        text: response.meta.message,
                        icon: "success"
                    });
                    table();
                },
                error: function(response) {
                    let errorMessages = [];
                    $.each(response.data, function(field, messages) {
                        $.each(messages, function(index, message) {
                            errorMessages.push(message);
                        });
                    });
                    console.log(errorMessages);
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
