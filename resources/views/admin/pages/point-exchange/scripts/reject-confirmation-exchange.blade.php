<script>
    $(document).ready(function() {
        let page = 1;

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/rewards?page=" + page,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                console.log(response);

                // Menggunakan event delegation untuk tombol "Tolak"
                $(document).on('click', '.rejectConfirm', function(e) {
                    var id = $(this).data('id'); // Mendapatkan id dari tombol yang diklik
                    $('#modal-reject-confirmation').modal('show'); // Menampilkan modal

                    // Saat tombol "Tambah" di modal ditekan
                    $('.storeConfirmation').off('click').on('click', function(e) {
                        e.preventDefault();

                        // Ambil alasan dari textarea
                        var reason = $('#modal-reject-confirmation').find('textarea[name="message"]').val();

                        // Validasi alasan tidak kosong
                        if (reason.trim() === "") {
                            Swal.fire({
                                title: "Alasan diperlukan!",
                                text: "Harap masukkan alasan penolakan.",
                                icon: "warning"
                            });
                            return;
                        }

                        // Proses AJAX untuk mengirimkan alasan penolakan
                        $.ajax({
                            type: "PUT",
                            url: "{{ config('app.api_url') }}/api/rewards/" + id,
                            headers: {
                                'Authorization': `Bearer {{ session('hummaclass-token') }}`
                            },
                            data: JSON.stringify({ reason: reason }),
                            contentType: "application/json",
                            dataType: "json",
                            success: function(response) {
                                Swal.fire({
                                    title: "Berhasil",
                                    text: "Penukaran poin telah ditolak.",
                                    icon: "success"
                                });

                                $('#modal-reject-confirmation').modal('hide'); // Menutup modal
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    text: "Gagal menolak penukaran poin.",
                                    icon: "error"
                                });
                            }
                        });
                    });
                });
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data penukaran poin.",
                    icon: "error"
                });
            }
        });
    });
</script>
