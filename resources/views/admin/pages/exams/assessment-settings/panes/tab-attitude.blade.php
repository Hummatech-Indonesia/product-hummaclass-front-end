<div class="card">
    <div class="card-body">
        <h5 class="fw-semibold">Pengaturan Sikap</h5>
        <hr>
        <form class="mt-4" action="">
            <div class="">
                <div class="email-repeater mb-3">
                    <div data-repeater-list="repeater-group">
                        <div data-repeater-item class="row mb-3">
                            <h5>Indikator</h5>
                            <div class="col-md-11">
                                <input type="email" class="form-control" placeholder="Masukkan indikator" />
                            </div>
                            <div class="col-md-1">
                                <button data-repeater-delete=""
                                    class="btn btn-danger waves-effect waves-light w-100" type="button">
                                    <i class="ti ti-circle-x fs-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-repeater-create=""
                        style="background-color: #9425FE; border: none"
                        class="btn btn-info waves-effect waves-light">
                        <div class="d-flex align-items-center">
                            <i class="ti ti-plus fs-5 me-2"></i>
                            Tambah Sikap
                        </div>
                    </button>
                </div>
            </div>

            <div class="mt-4 text-end">
                <button type="reset" class="btn btn-danger me-2">Batal</button>
                <button type="submit" class="btn text-white"
                    style="background-color: #9425FE; border: none">Simpan</button>
            </div>
        </form>
    </div>
</div>
