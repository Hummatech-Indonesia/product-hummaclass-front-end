<div class="modal fade" id="modal-create-vouchers" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Tambah Vouchers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="" class="form-label fw-semibold text-dark">Kode Voucher</label>
                                <input type="text" class="form-control" placeholder="Masukan kode voucher" name="name">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="" class="form-label fw-semibold text-dark">Potongan Harga(% persen)</label>
                                <input type="text" class="form-control" placeholder="Masukan potongan harga" name="name">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="" class="form-label fw-semibold text-dark">Tanggal Awal</label>
                            <input type="date" class="form-control" placeholder="Masukan tanggal awal" name="name">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="" class="form-label fw-semibold text-dark">Tanggal Akhir</label>
                            <input type="date" class="form-control" placeholder="Masukan tanggal akhir" name="name">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label fw-semibold text-dark">Stok Voucher</label>
                            <input type="number" class="form-control" placeholder="Masukan stok voucher" name="name">
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