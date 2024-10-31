<script>
    $(document).ready(function() {
        $(document).on('click', '.detailConfirmationExchange', function() {
            $('#modal-detail-confirmation-point').modal('show');
            
            const user = $(this).data('user');
            const email = $(this).data('email');
            const rewardName = $(this).data('name');
            const pointsRequired = $(this).data('points_required');
            const stock = $(this).data('stock');
            const image = $(this).data('image');

            $('#user-name').val(user);
            $('#user-email').val(email);
            $('#reward-name').val(rewardName);
            $('#reward-points-required').val(pointsRequired);
            $('#reward-stock').val(stock);
            $('#reward-image').attr('src', "{{ config('app.api_url') }}/storage/" + image);
        });
    });
</script>
