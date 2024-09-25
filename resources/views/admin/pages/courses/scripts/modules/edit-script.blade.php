<script>
    $(document).ready(function() {

        var id = "{{ $id }}"; // Mendapatkan id dari Blade
        let courseSlug;
        $.ajax({
            type: "GET",
            url: "{{ env('API_URL') }}/api/modules/detail/" + id,
            dataType: "json",
            success: function(response) {
                courseSlug = response.data.course.slug;
                $('#title').val(response.data.title)
                $('#sub_title').val(response.data.sub_title)
            },
            error: function(xhr) {
                console.log('Gagal mengambil data');
            }
        });

        $('#edit-module-form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            console.log(formData);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/modules/" + id,
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    window.location.href = "/admin/courses/" + courseSlug;
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
