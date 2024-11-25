<!-- Modal -->
<div class="modal fade" id="edit-classroom-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" id="edit-classroom-form" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="edit-classroom-division-id-input" class="form-label">Divisi</label>
                    <select name="division_id" id="edit-classroom-division-id-input"
                        class="form-control classroom-division-id-input">
                        <option value=""></option>
                    </select>
                    <label for="edit-classroom-name-input" class="form-label">Nama</label>
                    <input type="text" name="name" id="edit-classroom-name-input" class="form-control"
                        placeholder="nama..">
                    <label for="edit-classroom-class-level-input" class="form-label">Kelas</label>
                    <select name="class_level" id="edit-class-level-input" class="form-control">
                        <option value="ten">10</option>
                        <option value="eleven">11</option>
                        <option value="twelve">12</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
