<div class="modal fade" id="settings-quiz" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Pengaturan Quiz</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="create-quiz-form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="" class="form-label fw-semibold text-dark">Jumlah Soal</label>
                                <input id="total_question" type="text" class="form-control"
                                    placeholder="Masukan jumlah soal" name="total_question">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col col-lg-6 mb-3">
                            <div class=" form-group">
                                <label for="" class="form-label fw-semibold text-dark">Durasi Pengerjaan</label>
                                <input type="text" id="duration" class="form-control"
                                    placeholder="Masukan durasi pengerjaan" name="duration">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col col-lg-12">
                            <h6>Pengumpulan Kuis</h6>
                            <div class=" form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Fitur Pengumpulan</label>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="d-flex mt-3 gap-2">
                            <div class="mt-1">
                                <span class="text-white py-1 px-1 d-flex align-items-center"
                                    style="background-color: #7209DB;border-radius:9px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="m8.93 6.588l-2.29.287l-.082.38l.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319c.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246c-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0a1 1 0 0 1 2 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div>
                                <p>Aktifkan menu diatas untuk fitur siswa hanya bisa mengumpulkan 5 menit sebelum durasi
                                    pengerjaan berakhir</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white" style="background-color: #7209DB;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var id = "{{ $id }}";
    $('#create-quiz-form').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "{{ config('app.api_url') }}/api/quizzes/" + id,
            data: formData,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: "Sukses",
                    text: "Berhasil menambah data.",
                    icon: "success"
                }).then(() => {
                    $('#settings-quiz').modal('hide');
                    $('#create-quiz-form')[0].reset();
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').text('');
                });
            },
            error: function(response) {
                if (response.status === 422) {
                    let errors = response.responseJSON.data;

                    $.each(errors, function(field, messages) {

                        $(`[name="${field}"]`).addClass('is-invalid');

                        $(`[name="${field}"]`).closest('.col').find(
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

    get();

    function get() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/quizzes/" + id,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(response) {

                $('#total_question').val(response.data.total_question);
                $('#duration').val(response.data.duration);

            },
            error: function(response) {

            }
        });
    }
</script>
