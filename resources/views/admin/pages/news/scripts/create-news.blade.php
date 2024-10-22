<script>
    $(document).ready(function() {
        $('#summernote-description').summernote({
            height: 200
        });
    });

</script>

<script>
    function category() {
        $.ajax({
            type: "GET"
            , url: "{{config('app.api_url')}}" + "/api/categories"
            , dataType: "json"
            , success: function(response) {
                $('#category_id').empty().append(
                    '<option value="">Pilih Kategori</option>'
                );
                $.each(response.data.data, function(index, value) {
                    $('#category_id').append(
                        `<option value="${value.id}">${value.name}</option>`
                    );
                });
            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    }

    function sub_category(category_id) {
        if (!category_id) {
            $('#sub_category_id').empty().append(
                '<option value="">Pilih Sub Kategori</option>'
            );
            return;
        }

        $.ajax({
            type: "GET"
            , url: "{{config('app.api_url')}}" + "/api/sub-categories/category/" + category_id
            , dataType: "json"
            , success: function(response) {
                $('#sub_category_id').empty().append(
                    '<option value="">Pilih Sub Kategori</option>'
                );

                $.each(response.data, function(index, value) {
                    $('#sub_category_id').append(
                        `<option value="${value.id}">${value.name}</option>`
                    );
                });
            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data sub kategori."
                    , icon: "error"
                });
            }
        });
    }

    $('#category_id').on('change', function() {
        var category_id = $(this).val();
        sub_category(category_id);
    });

    category();


    $('#create-news-form').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: "POST"
            , url: "{{config('app.api_url')}}/api/blogs"
            , headers: {
                'Authorization': `Bearer {{ session('hummaclass-token') }}`
            }
            , data: formData
            , dataType: "json"
            , contentType: false
            , processData: false
            , success: function(response) {
                window.location.href = "/admin/news";
            }
            , error: function(response) {
                if (response.status === 422) {
                    let errors = response.responseJSON.data;

                    $.each(errors, function(field, messages) {

                        $(`[name="${field}"]`).addClass('is-invalid');

                        $(`[name="${field}"]`).closest('.col').find(
                            '.invalid-feedback').text(messages[0]);
                    });
                } else {
                    Swal.fire({
                        title: "Terjadi Kesalahan!"
                        , text: "Ada kesalahan saat menyimpan data."
                        , icon: "error"
                    });
                }
            }
        });
    });

</script>