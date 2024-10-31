<div class="modal fade" id="modal-detail-confirmation-point" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header d-flex align-items-center justify-content-center position-relative" style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Detail Barang</h5>
                <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" class="createFormRewards" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Nama Penukar</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                    name="name" value="Alfian Kopling" disabled>
                                @error('name')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Email</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                    name="name" value="Alfian Kopling" disabled>
                                @error('name')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Nama Barang</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                    name="name" value="Alfian Kopling" disabled>
                                @error('name')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Jumlah Barang</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                    name="name" value="Alfian Kopling" disabled>
                                @error('name')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Harga Poin</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                    name="name" value="Alfian Kopling" disabled>
                                @error('name')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Stok</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                    name="name" value="Alfian Kopling" disabled>
                                @error('name')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <div style="border: 1px solid #B5B5C3; padding: 20px 20px 20px 25px; border-radius: 10px;">
                                    <img src="{{ asset('assets/img/detail-course/apple.jpeg') }}" style="width: 100%" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white px-4" style="background-color: #7209DB;"
                        data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>