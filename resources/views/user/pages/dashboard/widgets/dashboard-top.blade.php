<div class="dashboard__top-wrap">
    <div class="dashboard__top-bg banner-user"
        data-background="{{ session('user')['banner'] ? session('user')['banner'] : asset('assets/img/no-image/no-image.jpg') }}">
    </div>
    <div class="dashboard__instructor-info">
        <div class="dashboard__instructor-info-left">
            <div class="thumb">
                <img class="detail-photo"
                    src="{{ session('user')['photo'] ? session('user')['photo'] : asset('assets/img/no-image/no-profile.jpeg') }}"
                    alt="img">
            </div>
            <div class="content">
                <h4 class="title detail-name"></h4>
                <div class="review__wrap review__wrap-two">
                    <span>{{ session('user')['email'] }}</span>
                </div>
            </div>
        </div>
    </div>
</div>