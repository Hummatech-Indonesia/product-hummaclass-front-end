@extends('user.layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three"
        data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
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

    <!-- dashboard-area -->
    <section class="dashboard__area section-pb-120">
        <div class="container">
            @include('user.pages.dashboard.widgets.dashboard-top')
            <div class="row">
                @include('user.pages.dashboard.widgets.sidebar')
                <div class="col-lg-9">
                    <h5 class="my-3">Aktifitas Event</h5>
                    <div class="event__inner-wrap">
                        <div class="row" id="eventContent">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard-area-end -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            let loading = true;
            if (loading) {
                $('#eventContent').append(loadingCard(3));
            }

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user-event-activities",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    console.log(response.data);

                    $('#eventContent').empty();

                    if (response.data.length > 0) {
                        $.each(response.data, function(index, value) {
                            $('#eventContent').append(event(value));
                        });
                    } else {
                        $('#eventContent').append(empty());
                    }

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data events.",
                        icon: "error"
                    });
                }
            });
        });

        function event(value) {

            return `
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="event__item shine__animate-item">
                    <div class="event__item-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="${value.event.photo ? value.event.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" alt="img">
                        </a>
                    </div>
                    <div class="event__item-content">
                        <span class="date">${value.event.start_in}</span>
                        <h2 class="title"><a href="{{ route('events.show', '') }}/${value.event.slug}">${value.event.title}</a></h2>
                        <p>${value.event.description}</p>

                        <div class="d-flex justify-content-between align-items-center pt-3" style="border-top: 1px solid #CCCCCC">
                            <div class="d-flex" style="font-size: 14px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                        <circle cx="12" cy="7" r="4" />
                                    </g>
                                </svg>
                                Sisa Kuota: ${value.event.capacity_left}
                            </div>
                            <div>4 Hari lagi</div>
                        </div>
                        {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                    </div>
                </div>
            </div>
        `;
        }

        function loadingCard(amount) {
            let card = '';

            for (let i = 0; i < amount; i++) {
                card += `
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card shine__animate-item" aria-hidden="true">
                            <div class="card-img-top placeholder-glow">
                                <svg class="bd-placeholder-img" width="100%" height="180"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#e9ecef"></rect>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a href="#" class="btn btn-primary disabled placeholder col-6"></a>
                            </div>
                        </div>
                    </div>
                `;
            }
            return card;
        }
    </script>
@endsection
