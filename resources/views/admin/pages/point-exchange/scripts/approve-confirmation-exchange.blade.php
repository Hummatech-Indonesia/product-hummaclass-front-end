<script>
    $(document).ready(function() {
        // Tentukan variabel 'page' dengan nilai awal jika belum didefinisikan
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

                // Menggunakan event delegation untuk menghindari masalah binding pada elemen dinamis
                $(document).on('click', '.editConfirm', function(e) {
                    var id = $(this).data('id');

                    Swal.fire({
                        title: 'Terima?',
                        text: "Apakah Anda yakin menerima penukaran poin?",
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, tukar!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "PUT",
                                url: "{{config('app.api_url')}}/api/rewards/" + id,
                                headers: {
                                    'Authorization': `Bearer {{ session('hummaclass-token') }}`
                                },
                                dataType: "json",
                                success: function(response) {
                                    Swal.fire({
                                        title: "Sukses",
                                        text: "Berhasil menambah data.",
                                        icon: "success"
                                    });
                                },
                                error: function(xhr) {
                                    Swal.fire({
                                        title: "Terjadi Kesalahan!",
                                        text: "Gagal menambah data.",
                                        icon: "error"
                                    });
                                }
                            });
                        }
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
