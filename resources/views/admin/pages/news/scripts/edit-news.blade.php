<script>
    $(document).ready(function() {
        $('#summernote-description').summernote({
            height: 200
        });
    });
</script>
<script>
    $(document).ready(function() {
        var id = "{{ $id }}";
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/blogs/" + id,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            data: "data",
            dataType: "json",
            success: function(response) {
                $('#thumbnail').attr('src', response.data.thumbnail);
                $('#title').val(response.data.title);
                $('#summernote-description').summernote('code', response.data.description);
                sub_category(response.data.category_id, response.data.sub_category_id);
                category_id(response.data.category_id)
            }
        });

        function category_id(category_id = null) {

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/categories",
                dataType: "json",
                success: function(response) {
                    $('#category_id').empty().append(
                        '<option value="">Pilih Kategori</option>'
                    );
                    $.each(response.data.data, function(index, value) {
                        $('#category_id').append(
                            (category_id != null && category_id == value.id) ?
                            `<option selected value="${value.id}">${value.name}</option>` :
                            `<option value="${value.id}">${value.name}</option>`
                        );
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });
        }

        $('#category_id').on('change', function() {
            var category_id = $(this).val();
            sub_category(category_id);
        });

        function sub_category(category_id, sub_category_id = null) {
            if (!category_id) {
                $('#sub_category_id').empty().append(
                    '<option value="">Pilih Sub Kategori</option>'
                );
                return;
            }


            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/sub-categories/category/" + category_id,
                dataType: "json",
                success: function(response) {
                    $('#sub_category_id').empty().append(
                        '<option value="">Pilih Sub Kategori</option>'
                    );

                    $.each(response.data, function(index, value) {
                        $('#sub_category_id').append(
                            (sub_category_id != null && sub_category_id == value.id) ?
                            `<option selected value="${value.id}">${value.name}</option>` :
                            `<option value="${value.id}">${value.name}</option>`
                        );
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data sub kategori.",
                        icon: "error"
                    });
                }
            });
        }
    });
</script>