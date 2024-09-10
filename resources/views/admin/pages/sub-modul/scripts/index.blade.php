<script>
    $(document).ready(function() {
        $(document).on('click', '.home', function() {
            $('.addModul').addClass('d-none');
            $('.editDescription').removeClass('d-none');
            $('.editMateriText').addClass('d-none');
        });

        $(document).on('click', '.list', function() {
            $('.editDescription').addClass('d-none');
            $('.addModul').removeClass('d-none');
            $('.editMateriText').addClass('d-none');
        });

        $(document).on('click', '.list', function() {
            $('.editDescription').addClass('d-none');
            $('.addModul').removeClass('d-none');
            $('.editMateriText').addClass('d-none');
        });
    });

</script>