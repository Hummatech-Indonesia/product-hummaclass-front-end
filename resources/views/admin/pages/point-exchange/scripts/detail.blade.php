<script>
    $(document).ready(function() {
        $(document).on('click', '.detailReward', function() {
            $('.detailRewardModal').modal('show');
            const name = $(this).data('name')
            const description = $(this).data('name')
            const image = $(this).data('image');
            const baseUrl = "{{ config('app.api_url', 'https://core-ecourse.mijurnal.com') }}";
            const imageUrl = image && /\.(jpeg|jpg|gif|png)$/i.test(image)
                ? baseUrl + "/storage/" + image 
                : "{{ asset('assets/img/no-image/no-image.jpg') }}";

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
