<script>
    $(document).ready(function() {
        $(document).on('click', '.detailReward', function() {
            $('.detailRewardModal').modal('show');
            const name = $(this).data('name')
            const description = $(this).data('name')
            const image = $(this).data('image')
            const stock = $(this).data('stock')
            const points_required = $(this).data('points_required')
            $('#detailImage').attr('src', "{{ config('app.api_url') }}/storage/" + image);
            $('#detailName').html(name);
            $('#detailStock').html(stock);
            $('#detailPointsRequired').html(points_required);
            $('#detailDescription').html(description);
        })
    });
</script>
