<script>
    $(document).ready(function() {
        $(document).on('click', '.materi', function() {
            $('.addMaterials').removeClass('d-none');
            $('.addTask').addClass('d-none');
            $('.addQuiz').addClass('d-none');
        });
  
        $(document).on('click', '.task', function() {
            $('.addMaterials').addClass('d-none');
            $('.addTask').removeClass('d-none');
            $('.addQuiz').addClass('d-none');
        });
  
        $(document).on('click', '.quiz', function() {
            $('.addMaterials').addClass('d-none');
            $('.addTask').addClass('d-none');
            $('.addQuiz').removeClass('d-none');
        });
    });
  </script>
  