<script>
    $('#createFormRewards').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "{{ config('app.api_url') }}/api/rewards",
            headers: {
                'Authorization': `Bearer {{ session('hummaclass-token') }}`
            },
            data: formData,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: "Sukses",
                    text: "Berhasil menambah data data.",
                    icon: "success"
                });
                window.location.href = "/admin/point-exchange";
            },
            error: function(response) {
                if (response.status === 422) {
                    let errors = response.responseJSON.data;

                    $.each(errors, function(field, messages) {

                        $(`[name="${field}"]`).addClass('is-invalid');

                        $(`[name="${field}"]`).closest('.col').find(
                            '.invalid-feedback').text(messages[0]);
                    });
                } else {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menyimpan data.",
                        icon: "error"
                    });
                }
            }
        });
    });
</script>
