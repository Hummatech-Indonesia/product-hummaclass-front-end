@php
    use SimpleSoftwareIO\QrCode\Facades\QrCode;
@endphp
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .certificate-container {
            position: relative;
            width: 100%;
            height: auto;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            background-size: cover;
        }

        .certificate-number {
            position: absolute;
            font-family: 'Poppins', sans-serif;
            left: 52%;
            top: 27%;
            transform: translate(-50%, -50%);
            font-size: 22px;
            font-weight: 400;
            letter-spacing: 4px;
            color: #333;
        }

        .name-people {
            font-family: "Great Vibes", cursive;
            position: absolute;
            left: 50%;
            top: 45%;
            transform: translate(-50%, -50%);
            font-size: 42px;
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
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #555;
        }

        .qr-code {
            position: absolute;
            right: 12%;
            bottom: 15%;
            text-align: right;
        }

        .qr-code img {
            width: 50px !important;
        }

        .qr-code .verifikasi {
            font-size: 10px;
            color: #000;
        }

        .qr-code .link {
            font-size: 10px;
            color: #333;
        }

        .qr-code .valid {
            font-size: 14px;
            color: #333;
        }

        .date {
            position: absolute;
            left: 20%;
            transform: translateX(-50%);
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 12px;
            color: #333;
            top: 67%;
        }

        .ttd-container {
            position: absolute;
            top: 70%;
        }

        @media (max-width: 768px) {
            .certificate-container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .certificate-number {
                font-size: 18px;
                top: 25%;
            }

            .name-people {
                font-size: 32px;
            }

            .course-title {
                font-size: 14px;
            }

            .qr-code img {
                width: 40px;
            }

            .qr-code .verifikasi,
            .qr-code .link {
                font-size: 8px;
            }

            .qr-code .valid {
                font-size: 12px;
            }

            .date {
                font-size: 10px;
            }
        }

        @media (max-width: 428px) {
            .certificate-number {
                font-size: 16px;
                top: 22%;
            }

            .name-people {
                font-size: 28px;
            }

            .course-title {
                font-size: 12px;
            }

            .qr-code img {
                width: 35px;
            }

            .qr-code .verifikasi,
            .qr-code .link {
                font-size: 6px;
            }

            .qr-code .valid {
                font-size: 10px;
            }

            .date {
                font-size: 8px;
            }
        }

        @media (max-width: 320px) {
            .certificate-container {
                max-width: 300px;
            }

            .certificate-number {
                font-size: 14px;
                top: 20%;
            }

            .name-people {
                font-size: 22px;
            }

            .course-title {
                font-size: 10px;
            }

            .qr-code img {
                width: 30px;
            }

            .qr-code .verifikasi,
            .qr-code .link {
                font-size: 5px;
            }

            .qr-code .valid {
                font-size: 8px;
            }

            .date {
                font-size: 6px;
            }
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

    <section class="courses__details-area py-5">
        <div class="container">
            <div class="card p-4 mt-3 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="certificate-container">
                            <img src="{{ asset('assets/img/certificate/serti-bg.png') }}" style="">
                            <div class="certificate-number" id="code"></div>
                            <div class="name-people mb-3" id="username"></div>
                            <div class="course-title" id="course_title">Belajar Membuat Aplikasi Kognitif</div>
                            <div class="date" id="date"><b></b></div>
                            <div class="qr-code">
                                <div class="qrcode">
                                    {!! QrCode::size(50)->generate(url()->current()) !!}
                                </div>
                                <div class="verifikasi"><b>Verifikasi Sertifikat</b></div>
                                <div class="link">class.hummatech.com/sertifikat/example</div>
                                <div class=""><i>Berlaku hingga <span id="expired">28 Agustus 2024 </span></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h5>Download Sertifikat</a>
                            <p>sertifikat akan menjadi pdf jika didownload</p>
                            <div class="col-6 mt-5">
                                <div id="updated">
                                    <a href="{{ route('print-certificate.index', ['type' => $type, 'id' => $course]) }}"
                                        class="btn btn-primary w-100">Perbarui</a>
                                </div>
                                <div>
                                    <a target="__blank"
                                        href="{{ config('app.api_url') . "/$type/certificate-download/" . $course . '/' . session('user.id') }}"
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
                url: "{{ config('app.api_url') }}/api/{{ $type }}/certificates/" + course,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    @if ($type == 'courses')
                        $('#breadCrumbCourse').html(response.data.course.title);
                        $('#breadCrumbCourse').attr('href', '/courses/courses/' + response.data.course
                            .slug);
                        $('#breadCrumbPrint').attr('href', '/courses/print-certificate/' + response.data
                            .course
                            .slug);
                        if (response.data.user_course.has_downloaded == 1) {
                            $('#updated').hide();
                        }
                        $('#code').html(response.data.code);
                        $('#course_title').html(response.data.course.title);
                        $('#username').html(response.data.username);
                        $('#date').html(formatDate(response.data.created_at));
                        $('#expired').html(formatDate(response.data.expired));
                    @else
                        $('#breadCrumbCourse').html(response.data.event.title);
                        $('#breadCrumbCourse').attr('href', '/courses/courses/' + response.data.event
                            .slug);
                        $('#breadCrumbPrint').attr('href', '/courses/print-certificate/' + response.data
                            .event
                            .slug);
                        if (response.data.user_event.has_downloaded == 1) {
                            $('#updated').hide();
                        }
                        $('#code').html(response.data.code);
                        $('#course_title').html(response.data.event.title);
                        $('#username').html(response.data.username);
                        $('#date').html(formatDate(response.data.created_at));
                    @endif
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
