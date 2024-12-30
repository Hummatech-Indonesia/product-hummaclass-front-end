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
                                name="name" id="category-name">
                            <span class="text-danger error-create invalid-feedback"></span>
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
            console.log(formData);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/categories",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#modal-create').modal('hide');
                    $('#modal-create-subcategory').find('input').val('');
                    Swal.fire({
                        title: "Berhasil!",
                        text: response.meta.message,
                        icon: "success"
                    });
                    get(1);
                },
                error: function(response) {
                    let errorMessages = [];
                    $.each(response.responseJSON.data,
                        function(field, messages) {
                            $.each(messages, function(index, message) {
                                errorMessages.push(message);
                            });
                        });
                    $('#category-name').addClass('is-invalid');
                    $('.error-create').text(errorMessages.join('<br>'));
                }
            });
        });
    });
</script>
