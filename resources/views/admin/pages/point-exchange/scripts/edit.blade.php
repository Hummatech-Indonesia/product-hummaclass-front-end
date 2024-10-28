<script>
    $(document).ready(function() {
        var id
        $(document).on('click', '.editReward', function() {
            $('.editRewardModal').modal('show');
            id = $(this).data('id')
            const image = $(this).data('image')
            const name = $(this).data('name')
            const stock = $(this).data('stock')
            const points_required = $(this).data('points_required')
            const description = $(this).data('description')

            $('#edit-image').attr('src', "{{ config('app.api_url') }}/storage/" + image);
            $('#edit-name').val(name);
            $('#edit-stock').val(stock);
            $('#edit-points_required').val(points_required);
            $('#edit-description').val(description);
        });

        $('#editRewardForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "PATCH",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                url: "{{ config('app.api_url') }}/api/rewards/" + id ",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {

                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil mengubah data.",
                        icon: "success"
                    }).then(() => {
                        $('.editRewardModal').modal('hide');
                        window.location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Gagal",
                        text: "Gagal mengubah data.",
                        icon: "error"
                    })
                }
            });
        });
    });
</script>
