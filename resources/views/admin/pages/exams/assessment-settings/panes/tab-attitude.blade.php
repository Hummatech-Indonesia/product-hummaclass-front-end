<div class="card">
    <div class="card-body">
        <h5 class="fw-semibold">Pengaturan Sikap</h5>
        <hr>
        <form class="mt-4" id="add-assesment-form-attitude">
            <div class="">
                <div class="email-repeater mb-3">
                    <div data-repeater-list="repeater-group">
                        <div data-repeater-item class="row mb-3">
                            <h5>Indikator</h5>
                            <div class="col col-md-11">
                                <input type="text" name="indicator[]" class="form-control"
                                    placeholder="Masukkan indikator" />
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-1">
                                <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light w-100"
                                    type="button">
                                    <i class="ti ti-circle-x fs-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-repeater-create="" style="background-color: #9425FE; border: none"
                        class="btn btn-info waves-effect waves-light">
                        <div class="d-flex align-items-center">
                            <i class="ti ti-plus fs-5 me-2"></i>
                            Tambah Sikap
                        </div>
                    </button>
                </div>
            </div>

            <div class="mt-4 text-end">
                <button type="reset" class="btn btn-danger me-2">Batal</button>
                <button type="submit" class="btn text-white"
                    style="background-color: #9425FE; border: none">Simpan</button>
            </div>
        </form>
    </div>
</div>
@push('script')
    <script>
        var division_id = "{{ $division_id }}"
        var class_level = "{{ $class_level }}"
        $('#add-assesment-form-attitude').submit(function(e) {
            e.preventDefault();

            var isValid = true;

            $("input[name='indicator[]']").each(function() {
                if ($(this).val() === "") {
                    isValid = false;
                    $(this).addClass('is-invalid');
                    $(this).next('.invalid-feedback').text('Indikator tidak boleh kosong');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).next('.invalid-feedback').text('');
                }
            });

            if (!isValid) {
                Swal.fire({
                    title: "Perhatian",
                    text: "Harap lengkapi semua indikator.",
                    icon: "warning"
                });
                return;
            }

            var formData = $('#add-assesment-form-attitude').serializeArray();

            console.log(formData);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/assesment-form/" + division_id + "/" + class_level +
                    "/attitude",
                data: formData,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menambah data.",
                        icon: "success"
                    }).then(() => {
                        window.location.reload();
                    });
                },
                error: function(response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.data;

                        $.each(errors, function(field, messages) {
                            $(`[name="${field}"]`).addClass('is-invalid');
                            $(`[name="${field}"]`).closest('.col').find('.invalid-feedback')
                                .text(messages[0]);
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
    </script>
@endpush
