<div class="modal fade editRewardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="editRewardForm" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Reward</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" class="img-fluid" id="edit-image">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" id="form-edit-image" class="form-control">
                    <label for="name" class="form-label mt-2">Nama</label>
                    <input type="text" name="name" id="edit-name" class="form-control">
                    <div class="row">
                        <div class="col-6">
                            <label for="points_required" class="form-label mt-2">Point Diperlukan</label>
                            <input type="number" name="points_required" id="edit-points_required" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="stock" class="form-label mt-2">Stok</label>
                            <input type="number" name="stock" id="edit-stock" class="form-control">
                        </div>
                    </div>
                    <label for="description" class="form-label mt-2">Deskripsi</label>
                    <textarea name="description" id="edit-description" cols="15" rows="5" class="form-control"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
