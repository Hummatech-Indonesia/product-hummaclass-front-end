<script>
    $(document).ready(function() {
        $(document).on('click', '.createReward', function() {
            $('#modal-create-rewards').modal('show');
        })
        $('.storeConfirmation').click(function(e) {
            e.preventDefault();
            let formData = new FormData($('.createFormRewards')[0]);
            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/rewards",
                data: formData,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#modal-create-rewards').modal('hide');
                    Swal.fire({
                        title: "Berhasil!",
                        text: response.meta.message,
                        icon: "success"
                    }).then(() => {
                        $('.createRewardModal').modal('hide');
                        window.location.reload();
                    });
                },
                error: function(response) {
                    let errorMessages = [];
                    $.each(response.data, function(field, messages) {
                        $.each(messages, function(index, message) {
                            errorMessages.push(message);
                        });
                    });
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        html: errorMessages.join('<br>'),
                        icon: "error"
                    });
                }
            });
        });
    });
</script>
