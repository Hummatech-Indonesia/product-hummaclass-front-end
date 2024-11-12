<script>
$(document).ready(function() {
    var id = "{{ $id }}";
    var idReward;

    $.ajax({
        type: "GET",
        url: `{{ config('app.api_url') }}/api/rewards/${id}`,
        headers: {
            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
        },
        dataType: "json",
        success: function(response) {
            
            // Set idReward dari respons
            idReward = response.data.id;
            
            $('#edit-image').attr('src', response.data.thumbnail || 'path/to/default-image.png');
            $('#edit-name').val(response.data.name);
            $('#edit-stock').val(response.data.stock);
            $('#edit-points_required').val(response.data.points_required);
            $('.edit-description').val(response.data.description);
        },
        error: function() {
            Swal.fire({
                title: "Terjadi Kesalahan!",
                text: "Gagal mengambil data.",
                icon: "error"
            });
        }
    });

    $('#editFormRewards').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append('_method', 'PATCH');

        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').text('');

        $('button[type="submit"]').prop('disabled', true);

        $.ajax({
            type: "POST",
            url: `{{ config('app.api_url') }}/api/rewards/${idReward}`,
            data: formData,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            contentType: false,
            processData: false,
            success: function() {
                Swal.fire({
                    title: "Sukses",
                    text: "Berhasil menambah data.",
                    icon: "success"
                }).then(() => {
                    window.location.href = "/admin/point-exchange";
                });
            },
            error: function(response) {
                if (response.status === 422) {
                    let errors = response.responseJSON.data;
                    $.each(errors, function(field, messages) {
                        $(`[name="${field}"]`).addClass('is-invalid');
                        $(`[name="${field}"]`).closest('.col').find('.invalid-feedback').text(messages[0]);
                    });
                } else {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menyimpan data.",
                        icon: "error"
                    });
                }
            },
            complete: function() {
                $('button[type="submit"]').prop('disabled', false);
            }
        });
    });
});

</script>