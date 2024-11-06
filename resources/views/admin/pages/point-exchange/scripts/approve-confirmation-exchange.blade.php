<script>
    $(document).on('click', '.editConfirm', function(e) {
        e.preventDefault();

        var id = $(this).data('id');

        Swal.fire({
            title: 'Terima?'
            , text: "Apakah Anda yakin menerima penukaran poin?"
            , icon: 'info'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , cancelButtonColor: '#d33'
            , confirmButtonText: 'Terima!'
            , cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "PATCH"
                    , url: "{{ config('app.api_url') }}/api/rewards-change/" + id
                    , headers: {
                        'Authorization': 'Bearer {{ session("hummaclass-token") }}'
                    }
                    , dataType: "json"
                    , contentType: "application/json"
                    , data: JSON.stringify({
                        status: "success"
                    }),
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses"
                            , text: "Status berhasil diperbarui menjadi 'success'."
                            , icon: "success"
                        }).then(() => {
                            $('.editConfirm[data-id="' + id + '"]').hide();
                            
                            location.reload(); 
                        });
                    }
                    , error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!"
                            , text: xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : "Gagal mengubah status."
                            , icon: "error"
                        });
                    }
                });
            }
        });
    });

</script>
