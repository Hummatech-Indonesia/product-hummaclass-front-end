<div class="dashboard__top-wrap">
    <div class="dashboard__top-bg banner-user" id="detail-banner-user"
        data-background="{{ isset(session('user')['banner']) ? session('user')['banner'] : asset('assets/img/no-image/no-image.jpg') }}">
    </div>
    <div class="dashboard__instructor-info">
        <div class="dashboard__instructor-info-left">
            <div class="thumb">
                <img class="detail-photo" id="detail-photo-user"
                    src="" alt="img" style="width: 120px;height: 120px;object-fit: cover;">
            </div>
            <div class="content">
                <h4 class="title detail-name" id="detail-name-user"></h4>
                <div class="review__wrap review__wrap-two">
                    <span id="detail-email-user"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/profile" ,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
             
                var profileImage = response.data.photo && /\.(jpeg|jpg|gif|png)$/i.test(response.data.photo) 
                    ? response.data.photo
                    : '{{ asset('assets/img/no-image/no-profile.jpeg') }}';
                    console.log(profileImage);
                    
                $('#detail-photo-user').attr('src', profileImage);
                var bannerImage = response.data.banner && /\.(jpeg|jpg|gif|png)$/i.test(response.data.banner)
                    ? response.data.banner
                    : '{{ asset('assets/img/no-image/no-image.jpg') }}';
                $('#detail-banner-user').css('background-image', 'url(' + bannerImage + ')');
                $('#detail-name-user').html(response.data.name);
                $('#detail-email-user').html(response.data.email);
                $('#sidebar-user-name').text(response.data.name);
                // $('#detail-description').html(response.data.description);
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
