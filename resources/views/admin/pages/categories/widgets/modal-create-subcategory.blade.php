<div class="modal fade" id="modal-create-subcategory" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Tambah Sub Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="create-sub-category-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Sub Kategori</label>
                            <input type="text" class="form-control" placeholder="Masukan nama sub kategori"
                                name="name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white" style="background-color: #7209DB;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.add-sub-category', function() {
        const id = $(this).data('id');
        $('#modal-create-subcategory').modal('show');
        addSubCategory(id)
    });

    function addSubCategory(id) {
        $('#create-sub-category-form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/sub-categories/" + id,
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menambah data data.",
                        icon: "success"
                    });
                    $('#modal-create-subcategory').modal('hide');
                    $('#modal-create-subcategory').find('input').val('');

                    get(1);
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
    }
</script>
