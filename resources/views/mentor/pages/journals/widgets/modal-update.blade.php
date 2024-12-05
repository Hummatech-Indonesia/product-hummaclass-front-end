<div id="modal-update" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myModalLabel">
                    Edit Jurnal
                </h4>
                <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z" />
                    </svg>
                </button>
            </div>
            <form id="update-journal-form">
                <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                    <div class="form-group mb-2">
                        <label for="title-edit" class="form-label">Judul <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="title-edit" placeholder="Masukkan Judul Jurnal">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mb-2">
                        <img src="" alt="" id="image-edit" width="50%"/><br>
                        <label for="image-edit" class="form-label">Bukti <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="image" id="image-edit">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="classroom_id_update" class="form-label">Kelas <span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="classroom_id" id="classroom_id_update">
                            <option value="">Pilih Kelas</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="description-edit">Deskripsi <span class="text-danger">*</span></label>
                        {{-- <p class="text-danger">0/50 karakter</p> --}}
                        <textarea name="description" id="description-edit" class="form-control" rows="3"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-muted font-medium waves-effect" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn bg-primary text-white text-danger font-medium waves-effect">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>