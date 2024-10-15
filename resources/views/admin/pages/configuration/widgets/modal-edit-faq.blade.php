<div class="modal fade" id="modal-edit-faq" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #9425FE;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Edit FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" class="editFormFaq" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2 fw-semibold text-dark">Pertanyaan</label>
                            <textarea name="question" id="question" class="form-control" value="{{ old('question') }}" placeholder="Masukan pertanyaan"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="" class="mb-2 fw-semibold text-dark">Jawaban</label>
                            <textarea name="answer" id="answer" class="form-control" value="{{ old('answer') }}" placeholder="Masukan jawaban"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white updateConfirmation"
                        style="background-color: #9425FE;">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
