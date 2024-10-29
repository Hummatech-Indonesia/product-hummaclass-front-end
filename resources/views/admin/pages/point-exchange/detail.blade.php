@extends('user.layouts.app')
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/projects/project-1/assets/css/project-1.css">
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-two"
        data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                      <h2>Detail Course</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/courses/courses">Courses</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem"> <a href="/" id="breadCrumbCourse"></a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem"> <a href="/"
                                    id="breadCrumbPrint">Verifikasi Nama</a>
                            </span>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <section class="bg-light py-3 py-md-5">
        <div class="container text-center">
            <div class="col-12 col-md-6 col-lg-12 bsb-project-1-item mx-auto">
                <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover " style="border: 2px solid #00000039;">
                    <a href="#!">
                        <img class="img-fluid bsb-scale-up bsb-hover-scale"
                            src="{{ asset('assets/img/detail-course/apple.jpeg') }}" alt="Nature">
                    </a>
                    <figcaption>
                        <h1 class="text-white bsb-hover-fadeInLeft">MacBook Pro M1</h1>
                    </figcaption>
                </figure>
                <div class="text-start mt-4 col-10">
                    <p
                        style="color: #000000; background-color: #0000002b; border-radius: 10px; padding: 5px 10px; display: inline-block;">
                        Stock: 444
                    </p>
                    <h2 class="mb-2">MacBook Pro M1</h2>
                    <h4>Ringkasan</h4>
                    <p>Processor: wqertyuiohjsaakjsbauwfqa cszsbcasvajs vahsbva</p>
                    <h4>Deskripsi</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores quisquam deserunt iusto corporis
                        repudiandae, doloribus ea facilis! Praesentium, sed ex cumque delectus, cupiditate, temporibus illo
                        exercitationem suscipit aliquam nulla facilis!</p>
                </div>

                <div class="col-lg-3 col-md-5 position-absolute" style="right: 20%;right: 0; bottom: 0;">
                    <div class="card col-lg-9 p-4" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); border-radius: 8px;">
                        <div class="card text-start" style="background-color: #9425FE; border-radius: 8px;box-shadow: 0 4px 8px #9525fe5b;">
                            <div class="card-body">
                                <p class="text-white font-weight-bold">Redeem Point:</p>
                                <h3 class="text-white">1000 Pts</h3>
                            </div>
                        </div>

                        <div class="text-center mt-3 mb-4">
                            <h6 class="text-start p-2">Reward Hummaclass</h6>
                            <img class="img-fluid" src="{{ asset('assets/img/detail-course/apple.jpeg') }}" alt=""
                                style="width: 90%; border-radius: 10px; border: 2px solid rgba(0, 0, 0, 0.25); margin-top: 10px;">
                        </div>

                        <div class="text-center mt-4 mb-3">
                            <button class="btn btn-primary" style="width: 80%; font-weight: bold;">Tukarkan →</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/bs-brain@2.0.4/components/projects/project-1/assets/controller/project-1.js"></script>
@endsection
