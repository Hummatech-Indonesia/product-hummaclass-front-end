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
            <span>Harga Kursus:</span>
            <h2 class="title">Rp.300.000</h2>
        </div>

        <div class="courses__details-enroll mb-5">
            <div class="tg-button-wrap">
                <a href="courses.html" class="btn btn-two arrow-btn">
                    Beli Sekarang
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
            <h5 class="title"><b>Kursus ini mencakup:</b></h5>
            <ul class="list-wrap">
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Video atas permintaan 43 jam
                    <span>Expert</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    10 Artikel
                    <span>11h 20m</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Quizzes
                    <span>12</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Akses penuh seumur hidup
                    <span>145</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Sertifikat penyelesaian
                    <span>Yes</span>
                </li>
            </ul>
        </div>
        <div class="courses__payment">
            <h5 class="title"><b>Metode Pembayaran:</b></h5>
            <img src="{{ asset('assets/img/others/payment.png') }}" alt="img">
        </div>
        <div class="courses__details-social border-bottom">
            <h5 class="title"><b>Bagikan kursus ini:</b></h5>
            <hr>
            <ul class="list-wrap">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

        <div class="courses__details-social border-bottom-0">
            <h5 class="title"><b>Learning Path</b></h5>
            <p>Kelas ini merupakan langkah</p>
            <span><a href="" class="link-primary" style="text-decoration: underline;">ke-1</a></span>
            <p><a href="" class="text-muted"><b>Langkah Selanjutnya <i class="fas fa-arrow-right"></i></b></a>
            </p>
        </div>
        <div class="courses__details-social border-bottom-0">
            <span><i class="fas fa-chart-bar"></i> Langkah 2</span>
            <h5 class="title border-bottom p-2"><b>Belajar membuat aplikasi</b></h5>
            <div class="d-flex gap-2 align-items-center">
                <span class="rounded-pill text-dark p-1" style="background: #EFEFF2;"><b>Development</b></span>
                <span class="text-muted"><i class="fas fa-star" style="color:#F8BC24;"></i> (4.5) Ulasan</span>
            </div>
        </div>
    </div>
</div>
