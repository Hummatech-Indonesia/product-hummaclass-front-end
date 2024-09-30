@extends('user.layouts.app')

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h3 class="title">Hubungi Kami</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Hubungi Kami</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
        <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<section class="contact-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info-wrap">
                    <ul class="list-wrap">
                        <li>
                            <div class="icon">
                                <img src="assets/img/icons/map.svg" alt="img" class="injectable">
                            </div>
                            <div class="content">
                                <h4 class="title">Address</h4>
                                <p>Awamileaug Drive, Kensington <br> London, UK</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="assets/img/icons/contact_phone.svg" alt="img" class="injectable">
                            </div>
                            <div class="content">
                                <h4 class="title">Phone</h4>
                                <a href="tel:0123456789">+1 (800) 123 456 789</a>
                                <a href="tel:0123456789">+1 (800) 123 456 789</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="assets/img/icons/emial.svg" alt="img" class="injectable">
                            </div>
                            <div class="content">
                                <h4 class="title">E-mail Address</h4>
                                <a href="mailto:info@gmail.com">info@gmail.com</a>
                                <a href="mailto:info@gmail.com">info@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form-wrap">
                    <h4 class="title">Tuliskan Pesan</h4>
                    <p>Masukan Anda berharga bagi kami. Bantu kami kursus kami dengan membagikan pemikiran Anda</p>
                    <form id="contact-form" action="https://html.themegenix.com/skillgro/assets/mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grp">
                                    <input name="name" type="text" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="email" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="website" type="url" placeholder="Nomor Telepon" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-grp">
                            <textarea name="message" placeholder="Isi Pesan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-two arrow-btn">Submit Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                    </form>
                    <p class="ajax-response mb-0"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection
