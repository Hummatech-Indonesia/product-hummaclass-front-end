<div class="modal fade" id="modal-create-rewards" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
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
                                <label for="" class="mb-2 fw-semibold text-dark">Nama Barang</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori"
                                    name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Foto Barang</label>
                                <input type="file" class="form-control" placeholder="Masukan nama kategori"
                                    name="image" value="{{ old('image') }}">
                                @error('image')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Stok</label>
                                <input type="number" class="form-control" placeholder="Masukan nama kategori"
                                    name="stock" value="{{ old('stock') }}">
                                @error('stock')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Jumlah Point</label>
                                <input type="number" class="form-control" placeholder="Masukan nama kategori"
                                    name="points_required" value="{{ old('points_required') }}">
                                @error('points_required')
                                    <span class="text-danger error-create">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2 fw-semibold text-dark">Deskripsi</label>
                                <textarea name="description" class="form-control" id="" rows="7"></textarea>
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
