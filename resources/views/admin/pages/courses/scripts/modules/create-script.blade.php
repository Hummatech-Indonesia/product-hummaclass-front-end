<script>
    $(document).ready(function() {
        $('#create-module-form').submit(function(e) {
            e.preventDefault();

            var formData = {};
            $(this).serializeArray().forEach(function(field) {
                formData[field.name] = field.value;
            });

            formData['course_id'] = "{{ request()->course }}";

            console.log(formData);


            // $.ajax({
            //     type: "POST",
            //     url: "{{ env('API_URL') }}" + "/api/modules",
            //     data: formData,
            //     success: function(response) {
            //         Swal.fire({
            //             title: "Berhasil!",
            //             text: response.meta.message,
            //             icon: "success"
            //         });
            //     },
            //     error: function(xhr) {
            //         Swal.fire({
            //             title: "Terjadi Kesalahan!",
            //             text: "Tidak dapat memuat data kategori.",
            //             icon: "error"
            //         });
            //     }
            // });
        });
    });
</script>
