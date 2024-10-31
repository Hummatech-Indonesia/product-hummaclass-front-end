<div class="modal fade detailRewardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-center position-relative" style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Detail Barang</h5>
                <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <label for="" class="mb-2 fw-semibold text-dark">Nama Barang</label>
                            <input type="text" class="form-control" placeholder="Masukan nama kategori" id="detailName" name="name" value="Alfian Kopling" disabled>
                            @error('name')
                            <span class="text-danger error-create">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="mb-2 fw-semibold text-dark">Harga Point</label>
                            <input type="text" class="form-control" placeholder="Masukan nama kategori" id="detailPointsRequired" name="name" value="Alfian Kopling" disabled>
                            @error('name')
                            <span class="text-danger error-create">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="mb-2 fw-semibold text-dark">Stok</label>
                            <input type="text" class="form-control" placeholder="Masukan nama kategori" id="detailStock" name="name" value="Alfian Kopling" disabled>
                            @error('name')
                            <span class="text-danger error-create">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div style="border: 1px solid #B5B5C3; padding: 20px 20px 20px 25px; border-radius: 10px;">
                                <img src="{{ asset('assets/img/detail-course/apple.jpeg') }}" id="detailImage" style="width: 100%" alt="">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-4">
                        <img src="" alt="" class="img-fluid" id="detailImage">
                    </div>
                    <div class="col-8">
                        <h5 id="detailName"></h5>
                        <p id="detailStock"></p>
                        <p id="detailPointsRequired"></p>
                        <p id="detailDescription"></p>
                    </div> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
