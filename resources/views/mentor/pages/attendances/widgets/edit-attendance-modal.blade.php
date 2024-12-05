<!-- Modal -->
<div class="modal fade" id="edit-attendance-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-centered modal-md">
        <div class="modal-content">
            <form action="" id="edit-attendance-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
