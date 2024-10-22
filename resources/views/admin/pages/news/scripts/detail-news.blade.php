<script>
    $(document).ready(function() {
        var id = "{{ $id }}";

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/blogs/" + id,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                $('#thumbnail').attr('src', response.data.thumbnail);
                $('#detail-category').html(response.data.sub_category);
                $('#detail-title').html(response.data.title);
                $('#detail-view').html(response.data.view_count);
                $('#detail-created').html(response.data.created);
                $('#detail-description').html(response.data.description);
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data modul.",
                    icon: "error"
                });
            }
        });
    });
</script>