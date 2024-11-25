<!-- Modal -->
<div class="modal fade" id="create-classroom-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" id="create-classroom-form" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="create-classroom-division-id-input" class="form-label">Divisi</label>
                    <select name="division_id" id="create-classroom-division-id-input"
                        class="form-control classroom-division-id-input">
                        <option value=""></option>
                    </select>
                    <label for="create-classroom-name-input" class="form-label">Nama</label>
                    <input type="text" name="name" id="create-classroom-name-input" class="form-control"
                        placeholder="nama..">
                    <label for="create-classroom-class-level-input" class="form-label">Kelas</label>
                    <select name="class_level" id="create-class-level-input" class="form-control">
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
