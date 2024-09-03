  <div class="modal fade" id="module-add-modal" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content shadow-md">
              <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                  <h5 class="modal-title text-white" id="importPegawai">Tambah Modul</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                      <form>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="inputAddress" class="form-label">Thumbnail</label>
                                <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="inputEmail4" class="form-label">Title</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="inputPassword4" class="form-label">Subtitle</label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="inputPassword4" class="form-label">Kategori</label>
                                <select class="select2-modul" style="width: 100% !important; height: 38px !important;" name="state">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="inputPassword4" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn text-white" style="background-color: #DB0909;" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" class="btn text-white" style="background-color: #7209DB;">Tambah</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
