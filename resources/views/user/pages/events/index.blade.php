@extends('user.layouts.app')

@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            width: 100%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }

        #calendarGrid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 15px;
        }

        .calendar-day {
            color: #9425FE;
            padding: 15px;
            border: 2px solid #9425FE;
            border-radius: 15px;
            cursor: pointer;
            background-color: #fff;
            position: relative;
            transition: background-color 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: start;
            width: 100%;
            height: 130px;
        }

        .calendar-day h4 {
            font-size: 20px;
            color: #9425FE;
            margin-bottom: 5px;
            font-weight: 600;
            text-align: start;
        }

        .calendar-day.selected {
            color: #fff;
            background: linear-gradient(90deg, rgba(156, 64, 247, 1) 0%, rgba(114, 9, 219, 1) 100%);
            border: 2px solid #ffffff;
            outline: 4px solid #fff;
            outline-offset: -9px;
        }

        .calendar-day.selected h4 {
            color: #fff;
        }
        .calendar-day.selected span {
            color: #fff;
        }
        
        .event-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .event-list li {
            padding: 8px;
            margin-bottom: 5px;
            border-radius: 5px;
            color: white;
        }

        h5 {
            color: #9425FE !important;
            background-color: #9525fe29 !important;
            border-radius: 10px;
            padding: 5px 10px;
        }

        .event-indicator {
            width: 8px;
            height: 100%;
            border-radius: 4px;
            display: inline-block;
        }

        #eventList .list-group-item {
            margin-bottom: 15px;
            background-color: #fff;
            border: 1px solid #e9ecef;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-select-ym {
            width: 150px;
            height: 50px;
            border-radius: 38px;
            border: 2px solid #9425FE;
            padding: 0 10px;
            text-align: center;
            background-color: white;
            color: #9425FE;
            font-weight: 400;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            #calendarGrid {
                grid-template-columns: repeat(3, 1fr);
            }

            .calendar-day {
                width: 100%;
                padding: 15px;
            }

            .form-select-ym {
                width: 100%;
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .form-select-ym {
                width: 100%;
                font-size: 14px;
            }

            .calendar-day h4 {
                font-size: 18px;
            }
        }

        @media (max-width: 430px) {
            .calendar-day {
                padding: 10px;
            }

            .calendar-day h4 {
                font-size: 16px;
            }

            #calendarGrid {
                grid-template-columns: repeat(2, 1fr);
                gap: 5px;
            }

            h2 {
                font-size: 18px;
            }

            .form-select-ym {
                font-size: 14px;
            }
        }

        .calendar-day.selected span {
            color: #fff;
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
                        <h3 class="title">Event</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Beranda</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="events">Event</a>
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- event-area -->
    <section class="event__area-two section-py-120">
        <div class="container">
            <div class="event__inner-wrap">
                <div class="row" id="events-list-content11">
                    <div class="container mt-5">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Event Hummaclass</span>
                            <h2 class="title">Kembangkan Kemampuanmu Di Event Hummaclass</h2>
                        </div>

                        <div class="row mb-5">
                            <div class="col-lg-8 col-md-12">
                                <div class="card p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h2 class="fw-semibold" style="color: #9425FE;">Kalender</h2>
                                        <div class="d-flex">
                                            <select class="form-select-ym me-2" id="monthSelect"></select>
                                            <select class="form-select-ym me-2" id="yearSelect"></select>
                                        </div>
                                    </div>

                                    <div class="row text-center" id="calendarGrid"></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div class="card p-3 mb-3">
                                    <h4>Daftar Acara</h4>
                                </div>
                                <div class="event-sidebar">
                                    <ul class="list-group list-group-flush" id="eventList"></ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('script')
    @include('user.pages.events.scripts.index')
@endsection
