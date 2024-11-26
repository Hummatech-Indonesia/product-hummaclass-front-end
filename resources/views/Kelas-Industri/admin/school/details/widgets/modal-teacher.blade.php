<div class="modal fade" id="modal-wali-kelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-center position-relative"
                style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Tambah Wali Kelas</h5>
            </div>
            <div class="modal-body">
                <div>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2 fw-semibold text-dark">Nama Wali Kelas</label>
                        <select name="mentor" id="" class="form-control">
                            <option value="">--Pilih Wali Kelas--</option>
                        </select>
                        @error('name')
                            <span class="text-danger error-create">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" style="background-color: #DB0909;"
                    data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn text-white" style="background-color: #7209DB;"">Simpan</button>
            </div>
        </div>
    </div>
</div>
