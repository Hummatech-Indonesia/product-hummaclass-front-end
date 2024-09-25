<div class="modal fade" id="modal-edit-sub-category" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Edit Sub Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-update-sub-category" enctype="multipart/form-data">
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Sub Kategori</label>
                            <input type="text" id="name_sub_category" class="form-control"
                                placeholder="Masukan nama sub kategori" name="name">

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
    $(document).on('click', '.btn-edit-sub-category', function() {
        const id = $(this).data('id');
        const name = $(this).data('name');

        $("#modal-edit-sub-category").modal('show');
        $('#name_sub_category').val(name);
        updateSubCategory(id)
    });


    function updateSubCategory(id) {
        $('#form-update-sub-category').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/sub-categories/" + id,
                data: formData,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menambah data data.",
                        icon: "success"
                    }).then(
                        window.location.href = "/admin/courses";
                    );


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
