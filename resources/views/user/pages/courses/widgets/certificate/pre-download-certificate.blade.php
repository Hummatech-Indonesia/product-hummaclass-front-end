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
@endsection

@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-two"
        data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
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

    <section class="courses__details-area py-5">
        <div class="container">
            <div class="card p-4 mt-3 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                <div class="row">
                    <div class="col-lg-8">
                        <img src="{{ asset('assets/img/certificate/certificate.png') }}" alt="">
                    </div>
                    <div class="col-lg-4">
                        <h5>Download Sertifikat</h5>
                        <p>sertifikat akan menjadi pdf jika didownload</p>
                        <div class="col-6 mt-5">
                            <div>
                                <button class="btn btn-primary w-100">Perbarui</button>
                            </div>
                            <div>
                                <a href="{{ route('courses.download-certificate.index') }}"
                                    class="btn-warning w-100 mt-4">Download Sertifikat</a>
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
                type: "GET",
                url: "{{ config('app.api_url') }}/api/certificates/" + course,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil mengambil data.",
                        icon: "success"
                    });
                },
                error: function(response) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menyimpan data.",
                        icon: "error"
                    });
                }
            });
        });
    </script>
@endsection
