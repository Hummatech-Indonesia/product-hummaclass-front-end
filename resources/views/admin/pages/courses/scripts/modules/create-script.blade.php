<script>
    $(document).ready(function() {
        $('#create-module-form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ env('API_URL') }}/api/modules",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    window.location.href = "/admin/courses";
                },
                error: function(response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.data;

                        $.each(errors, function(field, messages) {
                            console.log(messages[0]);

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
    });
</script>
