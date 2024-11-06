<script>
    $(document).ready(function() {
        $(document).on('click', '.rejectConfirm', function() {
            var id = $(this).data('id');
            $('#modal-reject-confirmation').modal('show');

            $('#modal-reject-confirmation .storeConfirmation').off('click').on('click', function(e) {
                e.preventDefault();

                const data = {
                    message: $('#reject-reason').val()
                , }


                console.log(data);


                $.ajax({
                    type: "PATCH"
                    , url: "{{ config('app.api_url') }}/api/rewards-change/" + id + `?message=${data.message}&status=rejected`
                    , headers: {
                        'Authorization': 'Bearer {{ session("hummaclass-token") }}'
                        , 'Content-Type': 'application/json'
                    }
                    , processData: false
                    , contentType: false
                    , data: data
                    , dataType: "json"
                    , success: function(response) {
                        Swal.fire({
                            title: "Berhasil"
                            , text: "Penukaran poin telah ditolak."
                            , icon: "success"
                        }).then(() => {
                            $('#modal-reject-confirmation').modal('hide');
                            location.reload();
                        });
                    }
                    , error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!"
                            , text: xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : "Gagal menolak penukaran poin."
                            , icon: "error"
                        });
                    }
                });
            });
        });
    });

</script>
