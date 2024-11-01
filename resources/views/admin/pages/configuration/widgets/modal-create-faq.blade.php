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
                            <label for="question" class="mb-2 fw-semibold text-dark">Pertanyaan</label>
                            <textarea name="question" id="question" class="form-control" placeholder="Masukan pertanyaan"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="answer" class="mb-2 fw-semibold text-dark">Jawaban</label>
                            <textarea name="answer" id="answer" class="form-control" placeholder="Masukan jawaban"></textarea>
                            <div class="invalid-feedback"></div>
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

@push('script')
    <script>
        $(document).ready(function() {
            // Show the modal when the "Tambah FAQ" button is clicked
            $(document).on('click', '.addFaq', function() {
                $('#modal-create-faq').modal('show');
            });

            // Submit the form
            $('.storeConfirmation').click(function(e) {
                e.preventDefault();

                // Gather the form data
                let formData = new FormData($('.createFormFaq')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/faqs",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: formData,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#modal-create-faq').modal('hide');
                        $('.createFormFaq')[0].reset();
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.meta.message,
                            icon: "success"
                        });
                        get(1);
                    },
                    error: function(response) {

                        if (response.status === 422) {
                            let errors = response.responseJSON.data;

                            // Clear previous error messages
                            $('.createFormFaq .is-invalid').removeClass('is-invalid');
                            $('.createFormFaq .invalid-feedback').text('');

                            // Display new error messages
                            $.each(errors, function(field, messages) {
                                $(`[name="${field}"]`).addClass('is-invalid');
                                $(`[name="${field}"]`).closest('.form-group').find(
                                    '.invalid-feedback').text(messages[0]);
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
