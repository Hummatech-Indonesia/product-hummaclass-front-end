<script>
    $(document).ready(function() {
        let id; // Define id globally to access it in the submit event

        $(document).on('click', '.editReward', function() {
            $('#modal-edit-rewards').modal('show');
            id = $(this).data('id'); // Set the id value here
            const name = $(this).data('name');
            const description = $(this).data('description');
            const stock = $(this).data('stock');
            const points_required = $(this).data('points_required'); // Corrected

            $('#edit-name').val(name);
            $('#edit-points_required').val(points_required);
            $('#edit-description').val(description);
            $('#edit-stock').val(stock);
        });

        $(document).on('submit', '.editRewardForm', function(e) {
            const abc = new FormData($('.editRewardForm')[0])
            const abcd = {

                name: $('.editRewardForm [name=name]').val(),
                description: $('.editRewardForm [name=description]').val(),
                points_required: $('.editRewardForm [name=points_required]').val(),
                stock: $('.editRewardForm [name=stock]').val(),

            }

            const abcde = new FormData()
            e.preventDefault();
            $.ajax({
                type: "PATCH",
                url: "{{ config('app.api_url') }}/api/rewards/" + id +
                    `?name=${abcd.name}`,
                data: abcd,
                dataType: "json",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#modal-edit-rewards').modal('hide');
                    window.location.reload()
                },
                error: function(error) {}
            });
        });
    });
</script>
