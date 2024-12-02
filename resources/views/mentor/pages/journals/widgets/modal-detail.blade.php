<div id="modal-detail" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myModalLabel">
                    Detail Jurnal
                </h4>
                <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z"/></svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <label>Nama</label>
                    <p class="text-muted" id="name-detail"></p>
                </div>
                <div class="">
                    <label>Judul</label>
                    <p class="text-muted" id="title-detail"></p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Kelas</label>
                        <p class="text-muted" id="classroom-detail"></p>
                    </div>
                    <div class="col-6">
                        <label for="">Tanggal</label>
                        <p class="text-muted" id="date-detail"></p>
                    </div>
                </div>
                <div class="">
                    <label>Deskripsi</label>
                    <p class="text-muted" id="description-detail"></p>
                </div>
                <div class="">
                    <img id="image-detail" width="100%"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-muted font-medium waves-effect"
                    data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
