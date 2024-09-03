@section('style')
    <style>
        .add-to-cart:hover {
            color: var(--bs-primary);
        }
    </style>
@endsection

<div class="col-xl-3 col-lg-4">
    <div class="courses__details-sidebar">
        {{-- <div class="courses__details-video">
            <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" alt="img">
            <a href="../../www.youtube.com/watch0b40.html?v=YwrHGratByU" class="popup-video"><i
                    class="fas fa-play"></i></a>
        </div> --}}
        <div class="courses__cost-wrap">
            <span>This Course Fee:</span>
            <h2 class="title">$18.00 <del>$32.00</del></h2>
        </div>

        <div class="courses__details-enroll mb-5">
            <div class="tg-button-wrap">
                <a href="courses.html" class="btn btn-two arrow-btn">
                    See All Instructors
                    <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                </a>
            </div>
            <div class="tg-button-wrap my-3">
                <a href="courses.html" class="btn btn-two arrow-btn bg-white add-to-cart">
                    Tambahkan Keranjang
                    <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                </a>
            </div>
        </div>

        <div class="courses__information-wrap">
            <h5 class="title">Course includes:</h5>
            <ul class="list-wrap">
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Level
                    <span>Expert</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Duration
                    <span>11h 20m</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Lessons
                    <span>12</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Quizzes
                    <span>145</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Certifications
                    <span>Yes</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Graduation
                    <span>25K</span>
                </li>
            </ul>
        </div>
        <div class="courses__payment">
            <h5 class="title">Secure Payment:</h5>
            <img src="{{ asset('assets/img/others/payment.png') }}" alt="img">
        </div>
        <div class="courses__details-social border-bottom-0">
            <h5 class="title">Share this course:</h5>
            <ul class="list-wrap">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
