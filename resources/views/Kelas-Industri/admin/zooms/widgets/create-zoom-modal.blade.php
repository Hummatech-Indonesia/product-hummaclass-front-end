<div class="modal fade" id="create-zoom-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="create-zoom-form">
                <div class="modal-header text-center" style="background-color: #9425FE; border-radius: 8px;">
                    <h5 class="modal-title mx-auto text-white">Tambah Jadwal Zoom</h5>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Masukkan Judul">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="school_id" class="form-label">Sekolah</label>
                        <select name="school_id" id="school_id" class="form-control"></select>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="classroom_id" class="form-label">Kelas</label>
                        <select name="classroom_id" id="classroom_id" class="form-control"></select>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="user_id" class="form-label">Mentor</label>
                        <select name="user_id" id="mentor_id" class="form-control"></select>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6 col-lg-6">
                            <label for="date" class="form-label">Hari</label>
                            <select name="day" class="form-control">
                                <option value="MONDAY">Senin</option>
                                <option value="TUESDAY">Selasa</option>
                                <option value="WEDNESDAY">Rabu</option>
                                <option value="THURSDAY">Kamis</option>
                                <option value="FRIDAY">Jumat</option>
                                <option value="SATURDAY">Sabtu</option>
                                <option value="SUNDAY">Minggu</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
    
                        <div class="col-6 col-lg-6">
                            <label for="date" class="form-label">Waktu</label>
                            <input type="time" name="time" id="time" class="form-control">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link Zoom</label>
                        <input type="text" name="link" id="link" class="form-control"
                            placeholder="Masukkan link zoom">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
