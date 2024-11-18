<script>
    $(document).ready(function() {
        // edit password
        $('#edit-password-form').submit(function(e) {
            e.preventDefault();

            var formData = {};
            $(this).serializeArray().forEach(function(field) {
                formData[field.name] = field.value;
            });


            $.ajax({
                url: "{{ config('app.api_url') }}" + "/api/password/update",
                headers: {
                    'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                },
                type: 'PATCH',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: "Success",
                        text: "Berhasil mengubah data",
                        icon: "success"
                    }).then(function(param) {
                        window.location.href = "/admin/profile";
                    });
                },
                error: function(error) {
                    let errors = error.responseJSON.data || {};
                    let message = error.responseJSON.meta.message;
                    if (errors) {
                        for (let key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                if (key == 'description') {
                                    let feedback = $(`.invalid-feedback`).closest(
                                        `.${key}`);
                                    feedback.text(errors[key])
                                    feedback.removeClass('d-none')
                                } else {
                                    $(`#${key}`).addClass('is-invalid')
                                        .closest('.invalid-feedback').text(errors[key]);
                                }
                            }
                        }
                    }
                }
            });
        });
    });
</script>