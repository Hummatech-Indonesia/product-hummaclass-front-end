  <!-- Modal -->
  <div class="modal fade" id="module-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form class="row g-3">
                      <div class="col-12">
                          <label for="inputAddress" class="form-label">Thumbnail</label>
                          <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Title</label>
                          <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Subtitle</label>
                          <input type="password" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Kategori</label>
                          <select class="js-example-basic-single" name="state">
                              <option value="AL">Alabama</option>
                              ...
                              <option value="WY">Wyoming</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Harga</label>
                          <input type="number" class="form-control" id="inputPassword4">
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
  </div>

  @section('script')
      <script>
          $(document).ready(function() {
              console.log($('.js-example-basic-single'));

              $('.js-example-basic-single').select2();
          });
      </script>
  @endsection
