<div class="modal fade" id="modal-detail-faq" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #9425FE;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Detail FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" class="createFormFaq" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2 fs-4 fw-semibold text-black">Pertanyaan</label>
                            <h6 class="question">Lorem, ipsum dolor.</h6>
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="mb-2 fs-4 fw-semibold text-black">Jawaban</label>
                            <h6 class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ante diam, tempor sit amet commodo id, tincidunt non
                                libero. Nam mattis vehicula velit eu lobortis. Suspendisse</h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #9425FE;"
                        data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // $(document).ready(function() {
    //     $(document).on('click', '.addFaqs', function() {
    //         $('#modal-create').modal('show');
    //     })
    //     $('.storeConfirmation').click(function(e) {
    //         e.preventDefault();
    //         let formData = new FormData($('.createForm')[0]);
    //         $.ajax({
    //             type: "POST",
    //             url: "{{ config('app.api_url') }}/api/categories",
    //             data: formData,
    //             dataType: "json",
    //             processData: false,
    //             contentType: false,
    //             success: function(response) {
    //                 $('#modal-create').modal('hide');
    //                 $('#modal-create-subcategory').find('input').val('');
    //                 Swal.fire({
    //                     title: "Berhasil!",
    //                     text: response.meta.message,
    //                     icon: "success"
    //                 });
    //                 get(1);
    //             },
    //             error: function(response) {
    //                 let errorMessages = [];
    //                 $.each(response.data, function(field, messages) {
    //                     $.each(messages, function(index, message) {
    //                         errorMessages.push(message);
    //                     });
    //                 });
    //                 Swal.fire({
    //                     title: "Terjadi Kesalahan!",
    //                     html: errorMessages.join('<br>'),
    //                     icon: "error"
    //                 });
    //             }
    //         });
    //     });
    // });
</script>