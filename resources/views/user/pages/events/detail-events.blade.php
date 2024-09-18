@extends('user.layouts.app')

@section('style')
<style>
    :root {
        --tg-theme-primary: #9425FE;
    }


    .icon h1:hover {
        color: #FFFFFF !important;
        /* Warna putih ketika di-hover */
    }

    /* Default: sebelum di-hover, panah berwarna putih */
    .arrow-btn img {
        filter: brightness(0) invert(1);
        transition: filter 0.3s ease;
    }

    .arrow-btn:hover img {
        filter: brightness(0);
    }
</style>
@endsection

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h3 class="title">Resolving Conflicts Between Designers</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="events.html">Events</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Resolving Conflicts Between Designers</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- event-details-area -->
<section class="event__details-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="event__details-thumb">
                    <img src="{{ asset('assets/img/events/event_details_img.jpg') }}" alt="img">
                </div>
                <div class="event__details-content-wrap">
                    <div class="row">
                        <div class="col-70">
                            <div class="event__details-content">
                                <div class="event__details-content-top">
                                    <a href="courses.html" class="tag">Seminar</a>
                                    <span class="avg-rating"><i class="fas fa-star"></i>(4.8 Reviews)</span>
                                </div>
                                <div class="event__meta">
                                    <ul class="list-wrap">
                                        <li class="author">
                                            <img src="{{ asset('assets/img/courses/course_author001.png') }}" alt="img">
                                            By
                                            <a href="instructor-details.html">David Millar</a>
                                        </li>
                                        <li class="location"><i class="flaticon-placeholder"></i>Online</li>
                                        <li><i class="flaticon-mortarboard"></i>123 Siswa</li>
                                    </ul>
                                </div>
                                <div class="event__details-overview">
                                    <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.dolor sit amet, consectetur adipiscing elited do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <h4 class="title-two">Roundown Acara :</h4>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table table-bordered m-t-30 text-center table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg" data-paging="true" data-paging-size="7" style="">
                                        <thead>
                                            <tr class="footable-header">
                                                <th class="text-white" style="display: table-cell;background-color:#9425FE;">Time</th>
                                                <th class="text-white" style="display: table-cell;background-color:#9425FE;">Session</th>
                                                <th class="text-white" style="display: table-cell;background-color:#9425FE;">Speaker</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="display: table-cell;">13.00 - 13.30</td>
                                                <td class="text-start" style="display: table-cell;">Opening Dicoding Developer Coaching</td>
                                                <td class="text-start" style="display: table-cell;">
                                                    <div class="ms-3">
                                                        <h6 class=" fw-semibold mb-0">Mohammad Arif</h6>
                                                        <span>Curriculum Developer</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: table-cell;">13.30 - 13.50</td>
                                                <td class="text-start" style="display: table-cell;">Pembahasan materi "Training dan Deployment Model Machine <br> Learning dengan Google Cloud"</td>
                                                <td class="text-start" style="display: table-cell;">
                                                    <div class="ms-3">
                                                        <h6 class=" fw-semibold mb-0">Arif Racing</h6>
                                                        <span>Curriculum Developer</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: table-cell;">13.50 - 14.20</td>
                                                <td class="text-start" style="display: table-cell;">Pembahasan materi "Training dan Deployment Model Machine <br> Learning dengan Google Cloud"</td>
                                                <td class="text-start" style="display: table-cell;">
                                                    <div class="ms-3">
                                                        <h6 class=" fw-semibold mb-0">Mohammad Arif</h6>
                                                        <span>Curriculum Developer</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                <div class="event__details-inner">
                                    <div class="row">
                                        <div class="col-39">
                                            <img src="{{ asset('assets/img/events/event_details_img02.jpg') }}" alt="img">
                            </div>
                            <div class="col-61">
                                <div class="event__details-inner-content">
                                    <h4 class="title">Four major elements that we offer <br> for this event</h4>
                                    <ul class="about__info-list list-wrap">
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">Work with color & Gradients & Grids</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">All the useful shortcuts</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">Be able to create Flyers, Brochures, Advertisements</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">How to work with Images & Text</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Morem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p> --}}
                </div>
            </div>
            <div class="col-30">
                <aside class="event__sidebar">
                    <div class="event__widget">
                        <div class="courses__details-sidebar">
                            <div class="courses__cost-wrap">
                                <span>Harga Masuk</span>
                                <h2 class="title">Rp. 230.000</h2>
                            </div>
                            <div class="courses__information-wrap">
                                <h5 class="title">Informasi Event:</h5>
                                <ul class="list-wrap">
                                    <li>
                                        <img src="{{ asset('assets/img/icons/calendar.svg') }}" alt="img" class="injectable">
                                        Tanggal Mulai
                                        <span>26 Sep 2024</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/icons/course_icon02.svg') }}" alt="img" class="injectable">
                                        Waktu Mulai
                                        <span>13.00 WIB</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/icons/course_icon05.svg') }}" alt="img" class="injectable">
                                        Sertifikat
                                        <span>Include</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/icons/course_icon06.svg') }}" alt="img" class="injectable">
                                        Sisa Peserta
                                        <span>123/300</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="courses__payment mt-5">
                                <h5 class="title">Lokasi:</h5>
                                <p>LIVE at <a href="" style="color: #9425FE">YouTube HummaTech class</a></p>
                                <div><b>Online</b></div>
                            </div>
                            <div class="courses__payment">
                                <h5 class="title">Metode Pembayaran:</h5>
                                <img src="{{ asset('assets/img/others/payment.png') }}" alt="img">
                            </div>
                            <div class="courses__details-social">
                                <h5 class="title">Bagikan Kursus Ini:</h5>
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="courses__details-enroll">
                                <div class="tg-button-wrap">
                                    <a href="contact.html" class="btn arrow-btn">Masuk <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
<!-- event-details-area-end -->

@endsection
