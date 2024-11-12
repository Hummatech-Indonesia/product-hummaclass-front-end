<div class="modal fade" id="modal-edit-class" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-center position-relative"
                style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Edit Kelas</h5>
            </div>
            <div class="modal-body">
                    <div>
                        <div class="form-group mb-3">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Wali Kelas</label>
                            <input type="text" class="form-control" placeholder="Masukan nama wali kelas"
                                id="detailPointsRequired" name="name" value="Alfian Kopling">
                            @error('name')
                                <span class="text-danger error-create">{{ $message }}</span>
                            @enderror
                        </div>
                            
                        <div class="form-group mb-3">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Siswa</label>
                            <input type="text" class="form-control inputSiswa1" placeholder="0 Siswa Telah Dipilih" readonly>
                        </div>
                        
                        <div class="card p-3 d-none" id="cardPilihSiswa1">
                            <h5>Pilih Siswa</h5>
                            <div class="form-group mb-3">
                                <select class="w-100 selectSiswaOptions1" multiple="multiple">
                                    <option value="0987654567">Arif Muhammad</option>
                                    <option value="0987654568">Budi Setiawan</option>
                                    <option value="0987654569">Cindy Li</option>
                                </select>
                            </div>
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
