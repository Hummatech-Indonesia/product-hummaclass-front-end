<script>
    $(document).ready(function() {
        var url = "{{ config('app.api_url') }}";
        $(document).on('click', '.detailReward', function() {
            $('.detailRewardModal').modal('show');
            const name = $(this).data('name')
            const description = $(this).data('name')
            const image = $(this).data('image')
            const imgUrl = image && /\.(jpeg|jpg|gif|png)$/i.test(image)
                ? image : "{{ asset('assets/img/no-image/no-image.jpg') }}";
            const stock = $(this).data('stock')
            const points_required = $(this).data('points_required')
            $('#detailImage').attr('src', imgUrl);
            $('#detailName').val(name);
            $('#detailStock').val(stock);
            $('#detailPointsRequired').val(points_required);
            $('#detailDescription').val(description);
        })
    });
</script>
