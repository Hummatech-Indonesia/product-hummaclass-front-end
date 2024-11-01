<div class="modal fade" id="modal-reject-confirmation" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Tambah Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" class="createFormRewards" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Alasan</label>
                                <textarea name="message" class="form-control" id="" rows="7"></textarea>
                                @error('description')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
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