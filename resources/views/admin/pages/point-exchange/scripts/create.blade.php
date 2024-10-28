<script>
    $(document).ready(function() {
        $(document).on('click', '.createReward', function() {
            $('.createRewardModal').modal('show');
        });

        $('#createRewardForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                url: "{{ config('app.api_url') }}/api/rewards",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menambah data.",
                        icon: "success"
                    })
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Gagal",
                        text: "Gagal menambah data.",
                        icon: "error"
                    })
                }
            });
        });
    });
</script>
