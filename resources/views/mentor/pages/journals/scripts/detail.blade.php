<script>
    $('.btn-detail').click(function() {
        let name = $(this).data('name');
        let title = $(this).data('title');
        let classroom = $(this).data('classroom');
        let date = $(this).data('date');
        let description = $(this).data('description');
        let image = $(this).data('image');

        $('#name-detail').text(name);
        $('#title-detail').text(title);
        $('#classroom-detail').text(classroom);
        $('#date-detail').text(date);
        $('#description-detail').text(description);
        $('#image-detail').attr('src', image);
        $('#modal-detail').modal('show');
    });
</script>
