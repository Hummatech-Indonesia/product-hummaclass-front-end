<div class="modal fade" id="modal-create-fill-manual" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Isi Otomatis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="create-sub-category-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="" class="form-label fw-semibold text-dark">Jumlah Soal</label>
                                <input type="text" class="form-control" placeholder="Masukan jumlah soal"
                                    name="name">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="" class="form-label fw-semibold text-dark">Durasi Pengerjaan</label>
                                <input type="text" class="form-control" placeholder="Masukan durasi pengerjaan"
                                    name="name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h6>Pengumpulan Kuis</h6>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Fitur Pengumpulan</label>
                              </div>
                        </div>
                        <div class="d-flex mt-3 gap-2">
                            <div class="mt-1">
                                <span class="badge py-1" style="background-color: #7209DB">i</span>
                            </div>
                            <div>
                                <p>Aktifkan menu diatas untuk fitur siswa hanya bisa mengumpulkan 5 menit sebelum durasi pengerjaan berakhir</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white" style="background-color: #7209DB;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>