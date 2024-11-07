{{-- <script>
    $(document).ready(function() {
        // edit profile
        $('#edit-profile-form').submit(function(e) {
            e.preventDefault();

            var formData = {};
            $(this).serializeArray().forEach(function(field) {
                formData[field.name] = field.value;
            });


            $.ajax({
                url: "{{ config('app.api_url') }}" + "/api/profile-update"
                , headers: {
                    'Authorization': 'Bearer {{ session('
                    hummaclass - token ') }}'
                }
                , type: 'PATCH'
                , data: formData
                , success: function(response) {
                    Swal.fire({
                        title: "Success"
                        , text: response.meta.title
                        , icon: "success"
                    }).then(function(param) {
                        window.location.href = "/admin/profile";
                    });
                }
                , error: function(error) {
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

</script> --}}

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
                        text: "Berhasil menambah data.",
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