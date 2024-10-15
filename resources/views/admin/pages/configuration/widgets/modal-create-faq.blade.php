<div class="modal fade" id="modal-create-faq" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #9425FE;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Tambah FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" class="createFormFaq" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2 fw-semibold text-dark">Pertanyaan</label>
                            <textarea name="question" id="" class="form-control" placeholder="Masukan pertanyaan"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="" class="mb-2 fw-semibold text-dark">Jawaban</label>
                            <textarea name="answer" id="" class="form-control" placeholder="Masukan jawaban"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white storeConfirmation"
                        style="background-color: #9425FE;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
