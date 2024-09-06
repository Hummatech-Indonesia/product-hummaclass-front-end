<script>
    $(document).ready(function() {
        $('#question').summernote();
    });

    $.ajax({
        type: "GRT",
        url: "{{ env('API_URL') }}" + "/api/task",
        dataType: "json",
        success: function (response) {
            
        }
    });
</script>
