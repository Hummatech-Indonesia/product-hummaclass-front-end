<div class="modal fade" id="modal-create-forum-discussion" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #9425FE; position: relative;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Diskusi Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 20px; top: 25px;"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" class="editForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Modul Belajar</label>
                            <select name="" id="" class="form-select">
                                <option value="">Rangkuman dari sub modul</option>
                            </select>
                            @error('name')
                            <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Judul Pertanyaan</label>
                            <input type="text" class="form-control" placeholder="Tulis judul pertanyaan anda dengan singkat">
                            @error('name')
                            <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Deskripsi Pertanyaan</label>
                            <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
                            @error('name')
                            <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <p>Uraikan pertanyaan Anda lebih panjang dan jelas pada bagian ini. Anda dapat menambahkan potongan
                        kode, gambar atau video untuk memperjelas pertanyaan</p>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Kata Kunci</label>
                            <input type="text" class="form-control" placeholder="">
                            @error('name')
                            <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <p>Tuliskan beberapa kata kunci pertanyaan Anda di sini dengan tanda koma sebagai permisah. Maksimal
                        6 kata kunci yang bisa ditambahkan.
                        <br>
                        Contoh: android, intents, material design
                    </p>
                </div>
                <div class="modal-footer mb-4 d-flex gap-3">
                    <button type="button" class="outline-purple-primary" data-bs-dismiss="modal">Nanti saja</button>
                    <button type="submit" class="btn text-white updateConfirmation" style="background-color: #7209DB;">Kirim Review</button>
                </div>
            </form>
        </div>
    </div>
</div>
