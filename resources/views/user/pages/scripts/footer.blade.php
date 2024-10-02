
<script>
    $(document).ready(function() {

    $.ajax({
        type: "GET",
        url: "{{ config('app.api_url') }}" + "/api/contact",
        dataType: "json",
        success: function(response) {
            $('#detail-whatsapp').html(response.data.whatsapp);
            $('#detail-twitter').html(response.data.twitter);
            $('#detail-facebook').html(response.data.facebook);
            $('#detail-email').html(response.data.email);
            $('#detail-phone-number').html(response.data.phone_number);
        },
        error: function(xhr) {
            Swal.fire({
                title: "Terjadi Kesalahan!",
                text: "Tidak dapat memuat data modul.",
                icon: "error"
            });
        }
    });
});

</script>