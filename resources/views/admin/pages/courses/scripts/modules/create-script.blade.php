<script>
    $(document).ready(function() {
        let slug = "{{ $id }}";
        $('.back').click(function(e) {
            e.preventDefault();
            window.location.href = "/admin/courses/" + slug;
        });
        $('#create-module-form').submit(function(e) {
            e.preventDefault();
            var id = "{{ $id }}"; // Mendapatkan id dari Blade

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/modules/" + id,
                data: formData,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    window.location.href = "/admin/courses/" + id + "#list";
                },
                error: function(response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.data;

                        $('.is-invalid').removeClass('is-invalid');
                        $('.invalid-feedback').text('');

                        $.each(errors, function(field, messages) {
                            $(`[name="${field}"]`).addClass(
                                'is-invalid');

                            $(`[name="${field}"]`).closest('.col').find(
                                    '.invalid-feedback')
                                .text(messages[0]);
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
