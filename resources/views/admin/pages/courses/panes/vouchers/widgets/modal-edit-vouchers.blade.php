<div class="modal fade" id="modal-create-vouchers" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #7209DB;border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white" id="importPegawai">Tambah Vouchers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="create-course-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="" class="form-label fw-semibold text-dark">Kode Voucher</label>
                                <input type="text" class="form-control is-invalid" placeholder="Masukan kode voucher"
                                    name="code">
                                <div class="invalid-feedback code"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="" class="form-label fw-semibold text-dark">Potongan Harga(%
                                    persen)</label>
                                <input type="text" class="form-control" placeholder="Masukan potongan harga"
                                    name="discount">
                                <div class="invalid-feedback discount"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="" class="form-label fw-semibold text-dark">Tanggal Awal</label>
                            <input type="date" class="form-control" placeholder="Masukan tanggal awal"
                                name="start">
                            <div class="invalid-feedback start"></div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="" class="form-label fw-semibold text-dark">Tanggal Akhir</label>
                            <input type="date" class="form-control" placeholder="Masukan tanggal akhir"
                                name="end">
                            <div class="invalid-feedback end"></div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label fw-semibold text-dark">Stok Voucher</label>
                            <input type="number" class="form-control" placeholder="Masukan stok voucher"
                                name="usage_limit">
                            <div class="invalid-feedback usage_limit"></div>
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

@push('script')
    <script>
        $(document).ready(function() {
            $('#create-course-form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: "patch",
                    url: `{{ config('app.api_url') }}/api/course-vouchers/{{ $id }}`,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: formData,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#modal-create-vouchers').modal('hide');
                        Swal.fire({
                            title: "Sukses",
                            text: "Voucher berhasil ditambahkan",
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    },
                    error: function(xhr) {
                        for (const key in xhr.responseJSON.data) {
                            let message = xhr.responseJSON.data[key][0];
                            $(`input[name="${key}"]`).addClass('is-invalid');
                            $(`.invalid-feedback.${key}`).text(message);
                        }
                        Swal.fire({
                            title: "Gagal",
                            text: "Voucher gagal ditambahkan",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                });

            });
        });
    </script>
@endpush
