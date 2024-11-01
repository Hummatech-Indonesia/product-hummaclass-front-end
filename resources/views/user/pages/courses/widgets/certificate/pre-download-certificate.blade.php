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
            padding-left: 0.5rem padding-right: 0.5rem
        }

        .certificate-number {
            position: absolute;
            font-family: 'poppins', sans-serif;
            left: 53%;
            top: 27.1%;
            transform: translate(-50%, -50%);
            font-size: 22px;
            font-weight: 400;
            letter-spacing: 4px;
            color: #333;
            width: 100%;
        }

        .name-people {
            font-family: "Great Vibes";
            position: absolute;
            left: 50%;
            top: 48%;
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
            font-size: 15px;
            font-family: 'poppins', sans-serif;
            font-weight: 700;
            color: #555;
        }

        .qr-code .verifikasi {
            position: absolute;
            right: 12%;
            bottom: 17.6%;
            font-size: 8px;
            color: #000000;
        }

        .qr-code .link {
            position: absolute;
            right: 12%;
            bottom: 15.5%;
            font-size: 8px;
            color: #333;
        }


        .qr-code .valid {

            position: absolute;
            right: 12%;
            bottom: 24%;
            font-size: 56px;
            color: #333;
        }

        .date {
            position: absolute;
            left: -33%;
            bottom: 29%;
            font-family: 'poppins', sans-serif;
            font-weight: 700;
            font-size: 9px;
            color: #333;
            width: 100%;
        }

        .qr-code img {
            width: 36px !important;
            position: absolute;
            right: 13%;
            bottom: 21%;
        }

        @media (max-width: 428px) {
            .certificate-container {
                max-width: 448;
            }


        }

        @media (max-width: 768px) {
            .certificate-container {
                max-width: 768;
            }

            .qr-code img {
                width: 30px !important;
                right: 10%;
                bottom: 18%;
            }

            .name-people {
                font-family: "Great Vibes";
                top: 48%;
                font-size: 28px;
            }

            .course-title {
                top: 60%;
                font-size: 10px;
            }

            .certificate-number {
                font-size: 9px;
                top: 28.1%;
                left: 53%;
            }

            .date {
                bottom: 28.6%;
                left: -31%;
                font-size: 5px;
            }

            .qr-code .verifikasi {
                right: 15.5%;
                bottom: 19%;
                font-size: 4px;
                color: #333;
            }

            .qr-code img {
                width: 19px !important;
                right: 15%;
                bottom: 22%
            }

            .qr-code .link {
                right: 15%;
                bottom: 17.5%;
                font-size: 4px;
                color: #333;
            }
        }

        @media (max-width: 320px) {
            .qr-code img {
                width: 19px !important;
                right: 15%;
                bottom: 23%
            }

            .date {
                bottom: 30%;
                left: -29%;
                font-size: 4px;
            }

            .name-people {
                font-family: "Great Vibes";
                top: 48%;
                font-size: 18px;
            }

            .course-title {
                top: 60%;
                font-size: 7px;
            }

            .certificate-number {
                letter-spacing: 2px;
                left: 52%;
                top: 29.9%;
                transform: translate(-50%, -50%);
                font-size: 7px;
            }

            .qr-code .verifikasi {
                right: 15.5%;
                bottom: 20%;
                font-size: 4px;
                color: #333;
            }

            .qr-code .link {
                right: 15%;
                bottom: 18.5%;
                font-size: 4px;
                color: #333;
            }
        }

        .qr-code .valid {
            right: 15.8%;
            bottom: 16.5%;
            font-size: 3px;
            color: #333;
        }

        @media (max-width: 390px) {
            .qr-code img {
                width: 25px !important;
                right: 16%;
                bottom: 22%;
            }


            .date {
                bottom: 30%;
                left: -31%;
                font-size: 4px;
            }

            .certificate-number {
                letter-spacing: 2px;
                left: 53%;
                top: 28.9%;
                transform: translate(-50%, -50%);
                font-size: 11px;
            }

            .certificate-container {
                max-width: 390px;
            }

            .name-people {
                font-family: "Great Vibes";
                top: 48%;
                font-size: 18px;
            }

            .course-title {
                top: 60%;
                font-size: 7px;
            }

            .qr-code .verifikasi {
                right: 16%;
                bottom: 19%;
                font-size: 5px;
                color: #333;
            }

            .qr-code .link {
                position: absolute;
                right: 15%;
                bottom: 17.6%;
                font-size: 5px;
                color: #333;
            }

            .qr-code .valid {
                position: absolute;
                right: 16%;
                bottom: 16%;
                font-size: 5px;
                color: #333;
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
                            <div class="name-people" id="username"></div>
                            <div class="course-title" id="course_title">Belajar Membuat Aplikasi Kognitif</div>
                            <div class="date" id="date"><b></b></div>
                            <div class="qr-code">
                                <img src="{{ asset('assets/img/certificate/qr.png') }}" alt="QR Code">
                                <div class="verifikasi"><b>Verifikasi Sertifikat</b></div>
                                <div class="link">class.hummatech.com/sertifikat/example</div>
                                <div class="valid"><i>Berlaku hingga 28 Agustus 2024</i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h5>Downlohd Sertifikat</a>
                            <p>sertifikat akan menjadi pdf jika didownload</p>
                            <div class="col-6 mt-5">
                                <div id="updated">
                                    <a href="{{ route('print-certificate.index', ['type' => $type, 'id' => $course]) }}"
                                        class="btn btn-primary w-100">Perbarui</a>
                                </div>
                                <div>
                                    <a target="__blank"
                                        href="{{ config('app.api_url') . "/$course/certificate-download/" . $type . '/' . session('user.id') }}"
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
                    @if ($type == 'course')
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
