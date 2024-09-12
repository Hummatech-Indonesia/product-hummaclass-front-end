<script>
    $(document).ready(function() {
        $('#question').summernote();
    });

    $.ajax({
        type: "GRT",
        url: "{{config('app.api_url')}}" + "/api/task",
        dataType: "json",
        success: function (response) {
            
        }
    });
</script>
