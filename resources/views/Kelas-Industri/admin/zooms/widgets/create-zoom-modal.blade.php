<!-- Modal -->
<div class="modal fade" id="create-zoom-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mg-md">
        <div class="modal-content">
            <form action="" id="create-zoom-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah jadwal zoom</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="title" class="form-label"></label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Judul..">

                    <label for="school_id" class="form-label"></label>
                    <select name="school_id" id="school_id" class="form-control"></select>

                    <label for="classroom_id" class="form-label"></label>
                    <select name="classroom_id" id="classroom_id" class="form-control"></select>

                    <label for="user_id" class="form-label"></label>
                    <select name="user_id" id="user_id" class="form-control"></select>

                    <label for="date" class="form-label"></label>
                    <input type="date" name="date" id="date" class="form-control" placeholder="Judul..">

                    <label for="link" class="form-label">Link Zoom</label>
                    <input type="text" name="link" id="link" class="form-control">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('script')
    <script>
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}",
            dataType: "json",
            success: function(response) {

            }
        });
    </script>
@endpush
