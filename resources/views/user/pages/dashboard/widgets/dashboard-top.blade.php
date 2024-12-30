<div class="dashboard__top-wrap">
    <div class="dashboard__top-bg banner-user"
        data-background="{{ isset(session('user')['banner']) ? session('user')['banner'] : asset('assets/img/no-image/no-image.jpg') }}">
    </div>
    <div class="dashboard__instructor-info">
        <div class="dashboard__instructor-info-left">
            <div class="thumb">
                <img class="detail-photo"
                    src="{{ isset(session('user')['photo']) ? session('user')['photo'] : asset('assets/img/no-image/no-profile.jpeg') }}"
                    alt="img">
            </div>
            <div class="content">
                <h4 class="text-white" style="font-size: 25px">{{ session('user')['name'] }}</h4>
                <div class="review__wrap review__wrap-two">
                <h6 class="text-white fw-normal" style="font-size: 11">{{ session('user')['email'] }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>


