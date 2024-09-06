<script>
  $(document).ready(function() {
      $(document).on('click', '.home', function() {
          $('.addModul').addClass('d-none');
          $('.editDescription').removeClass('d-none');
          $('.editWeinght').addClass('d-none');
      });

      $(document).on('click', '.list', function() {
          $('.editDescription').addClass('d-none');
          $('.addModul').removeClass('d-none');
          $('.editWeinght').addClass('d-none');
      });

      $(document).on('click', '.test', function() {
          $('.editDescription').addClass('d-none');
          $('.addModul').addClass('d-none');
          $('.editWeinght').removeClass('d-none');
      });

      $(document).on('click', '.post', function() {
          $('.editDescription').addClass('d-none');
          $('.addModul').addClass('d-none');
          $('.editWeinght').removeClass('d-none');
      });

      $(document).on('click', '.task', function() {
          $('.editDescription').addClass('d-none');
          $('.addModul').addClass('d-none');
          $('.editWeinght').addClass('d-none');
      });
  });
</script>

<script>
    $(document).ready(function() {
        $('#summernote-materi').summernote({
          height: 200
        });
    });

    $(document).ready(function() {
        $('#summernote-moduls').summernote({
          height: 200
        });
    });

    $(document).ready(function() {
        $('#summernote-task').summernote({
          height: 200
        });
    });

</script>
