<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/courses/{{ request()->course }}",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            data: "data",
            dataType: "json",
            success: function(response) {
                $('#detailCourseRating').html(response.data.rating);
                const photoUrl = response.data.photo && /\.(jpeg|jpg|gif|png)$/i.test(response.data.photo)
                                ? response.data.photo
                                : "{{ asset('assets/img/no-image/no-image.jpg') }}";
                for (const key in response.data) {

                    $('#edit-description').attr('href',
                        `/admin/courses/${response.data.slug}/edit`);
                    if (response.data.hasOwnProperty(key)) {

                        if (key == 'description')
                            $(`#${key}`).html(response.data[key])
                        else if (key == 'price')
                            // $('#price').html(formatRupiah(response.data[key]))
                            if (response.data.is_premium === 0) {
                                $('#price').html('Gratis');
                            } else {
                                $('#price').html(formatRupiah(response.data[key]));
                            }
                        else if (key == 'sub_category')
                            $('#sub_category').html(response.data[key].name)
                        else if (key == 'photo')
                            $('#thumbnail').attr('src', photoUrl);
                        else
                            $(`#${key}`).text(response.data[key])
                    }
                }
            }
        });
    });
</script>
