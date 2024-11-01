<script>
    $(document).ready(function() {
        var id = "{{ $id }}";
        console.log(id);
        
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/rewards/" + id,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                console.log(response);

                // Memperbarui konten halaman dengan respons data
                $('.detail-image').attr('src', response.data.image);
                $('#detail-name').html(response.data.name);
                $('#detail-description').html(response.data.description);
                $('#detail-points_required').html(response.data.points_required);
                $('#detail-stock').html(response.data.stock);

                // Event click untuk tombol "Tukarkan"
                $('.storeConfirm').click(function(e) {
                    e.preventDefault();
                    console.log('woii');

                    var idReward = response.data.id;

                    Swal.fire({
                        title: 'Tukar Poin?',
                        text: "Apakah Anda yakin ingin menukar poin?",
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, tukar!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "POST",
                                url: "{{ config('app.api_url') }}/api/rewards-claim/" + idReward,
                                headers: {
                                    'Authorization': 'Bearer {{ session("hummaclass-token") }}'
                                },
                                dataType: "json",
                                success: function(response) {
                                    Swal.fire({
                                        title: "Sukses",
                                        text: "Berhasil menukar poin.",
                                        icon: "success"
                                    });
                                },
                                error: function(xhr) {
                                    Swal.fire({
                                        title: "Terjadi Kesalahan!",
                                        text: "Gagal menukar poin.",
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
                    text: "Tidak dapat memuat data modul.",
                    icon: "error"
                });
            }
        });
    });
</script>
