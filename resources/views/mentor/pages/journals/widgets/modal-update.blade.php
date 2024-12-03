<div id="modal-update" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myModalLabel">
                    Edit Jurnal
                </h4>
                <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z"/></svg>
                </button>
            </div>
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Judul Jurnal">
                    </div>
                    <div class="form-group mb-2">
                        <label for="image" class="form-label">Bukti</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    <div class="form-group mb-2">
                        <label for="classroom" class="form-label">Kelas</label>
                        <select class="form-select" name="classroom" id="classroom">
                            <option value="1">Kelas 1</option>
                            <option value="2">Kelas 2</option>
                            <option value="3">Kelas 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <p class="text-danger">0/50 karakter</p>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-muted font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn bg-primary text-white text-danger font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
