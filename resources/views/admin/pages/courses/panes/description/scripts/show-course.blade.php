<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{config('app.api_url')}}" + "/api/courses/{{ request()->course }}",
            data: "data",
            dataType: "json",
            success: function(response) {
                for (const key in response.data) {
                    if (response.data.hasOwnProperty(key)) {
                        if (key == 'description')
                            $(`#${key}`).html(response.data[key])
                        else
                            $(`#${key}`).text(response.data[key])
                    }
                }

            }
        });
    });
</script>
