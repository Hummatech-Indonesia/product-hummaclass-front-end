<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/user",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                append(response);
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data kategori.",
                    icon: "error"
                });
            }
        });

        $('#edit-profile-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            

            formData.append('_method', 'PATCH');

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/profile-update",
                data: formData,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil mengupdate data.",
                        icon: "success"
                    }).then(() => {
                    });
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

        function append(data) {
            $('.name').val(data.name);
            $('.email').val(data.email);
            $('.phone_number').val(data.phone_number);
            $('.address').val(data.address);
            $('.gender').val(data.gender);
        }
    });
</script>