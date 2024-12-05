<script>
    $(document).on('click', '.btn-delete', function() {
        var id = $(this).data('id');
        var url = "{{ config('app.api_url') }}" + "/api/journals/" + id;

        $('#modal-delete').modal('show');

        deleteJournal(url);
    });

    function deleteJournal(url) {
        $('.deleteConfirmation').click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "DELETE",
                url: url,
                headers: {
                    'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                },
                success: function(response) {
                    $('#modal-delete').modal('hide');
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menghapus data.",
                        icon: "success"
                    });
                    window.location.href = "/mentor/journals";
                },
                error: function(response) {
                    $('#modal-delete').modal('hide');
                    if (response.status == 400) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: response.responseJSON.meta.message,
                            icon: "error"
                        });
                    } else {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menghapus data.",
                            icon: "error"
                        });
                    }
                }
            });
        });
    }
</script>
