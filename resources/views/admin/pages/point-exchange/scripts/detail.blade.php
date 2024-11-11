<script>
    $(document).ready(function() {
        $(document).on('click', '.detailReward', function() {
            $('.detailRewardModal').modal('show');
            const name = $(this).data('name')
            const description = $(this).data('name')
            const image = $(this).data('image')
            const apiUrl = @json(config('app.api_url'));
            const imageUrl = image && /\.(jpeg|jpg|gif|png)$/i.test(image)
                ? "{{ config('app.api_url') }} "+ "/storage/" + image : "{{ asset('assets/img/no-image/no-image.jpg') }}";

                console.log("API URL: " + apiUrl);
            const stock = $(this).data('stock')
            const points_required = $(this).data('points_required')
            $('#detailImage').attr('src', imageUrl);
            $('#detailName').val(name);
            $('#detailStock').val(stock);
            $('#detailPointsRequired').val(points_required);
            $('#detailDescription').val(description);
        })
    });
</script>
