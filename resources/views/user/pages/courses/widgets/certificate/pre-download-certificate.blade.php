@extends('user.layouts.app')

@section('style')
<style>
    .btn-warning {
        user-select: none;
        -moz-user-select: none;
        background: #ffc107 none repeat scroll 0 0;
        border: none;
        color: var(--tg-common-color-white);
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: var(--tg-fw-semi-bold);
        font-family: var(--tg-heading-font-family);
        letter-spacing: 0;
        line-height: 1.12;
        margin-bottom: 0;
        padding: 16px 30px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        vertical-align: middle;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -o-border-radius: 50px;
        -ms-border-radius: 50px;
        border-radius: 50px;
        white-space: nowrap;
        box-shadow: 4px 6px 0px 0px var(--tg-common-color-blue);
        overflow: hidden;
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #9425FE;
        box-shadow: none;
    }

</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    .certificate-container {
        position: relative;
        width: 100%;
        height: auto;
        text-align: center;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .certificate-number {
        position: absolute;
        left: 50%;
        top: 27%;
        transform: translate(-40%, -50%);
        font-size: 18px;
        font-weight: 900;
        letter-spacing: 6px;
        color: #333;
    }

    .name-people {
        font-family: "Great Vibes";
        position: absolute;
        left: 50%;
        top: 45%;
        transform: translate(-50%, -50%);
        font-size: 55px;
        font-weight: 500;
        letter-spacing: 3px;
        color: #3b3a3a;
        line-height: 25px;
    }

    .course-title {
        position: absolute;
        left: 50%;
        top: 60%;
        transform: translate(-50%, -50%);
        font-size: 20px;
        font-weight: 700;
        color: #555;
    }

    .qr-code .verifikasi {
        position: absolute;
        right: 90px;
        bottom: 105px;
        font-size: 12px;
        color: #000000;
    }

    .qr-code .link {
        position: absolute;
        right: 90px;
        bottom: 90px;
        font-size: 12px;
        color: #333;
    }

    .qr-code .valid {
        position: absolute;
        right: 90px;
        bottom: 80px;
        font-size: 9px;
        color: #333;
    }

    .qr-code img {
        width: 50px !important;
        position: absolute;
        right: 90px;
        bottom: 125px;
    }

    .date {
        position: absolute;
        right: 613px;
        bottom: 172px;
        font-size: 13px;
        color: #333;
    }
    

</style>

@endsection

@section('content')
<!-- breadcrumb-area -->
<div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-two" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Courses</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Resolving Conflicts Between Designers And
                            Engineers</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</div>
<!-- breadcrumb-area-end -->

<section class="courses__details-area py-5">
    <div class="container">
        <div class="card p-4 mt-3 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
            <div class="row">
                <div class="col-lg-8">
                    <div class="certificate-container">
                        <img src="{{ asset('assets/img/certificate/serti-bg.png') }}" style="">
                        <div class="certificate-number">12202401080001</div>
                        <div class="name-people">Sabdo chandra</div>
                        <div class="course-title">Belajar Membuat Aplikasi Kognitif</div>
                        <div class="date"><b>13 Oktober 2024</b></div>
                        <div class="qr-code">
                            <img src="{{ asset('assets/img/certificate/qr.png') }}" alt="QR Code">
                            <div class="verifikasi"><b>Verifikasi Sertifikat</b></div>
                            <div class="link">class.hummatech.com/sertifikat/example</div>
                            <div class="valid"><i>Berlaku hingga 28 Agustus 2024</i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5>Download Sertifikat</h5>
                    <p>sertifikat akan menjadi pdf jika didownload</p>
                    <div class="col-6 mt-5">
                        <div>
                            <button class="btn btn-primary w-100">Perbarui</button>
                        </div>
                        <div>
                            <a href="{{ route('courses.download-certificate.index') }}" class="btn-warning w-100 mt-4">Download Sertifikat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        var course = "{{ $course }}"
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}/api/certificates/" + course
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , contentType: false
            , processData: false
            , success: function(response) {
                Swal.fire({
                    title: "Sukses"
                    , text: "Berhasil mengambil data."
                    , icon: "success"
                });
            }
            , error: function(response) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Ada kesalahan saat menyimpan data."
                    , icon: "error"
                });
            }
        });
    });

</script>
@endsection
