@extends('user.layouts.app')

@section('content')
<!-- breadcrumb-area -->
<div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- dashboard-area -->
<section class="dashboard__area section-pb-120">
    <div class="container">
        <div class="dashboard__top-wrap">
            <div class="dashboard__top-bg" data-background="{{ asset('assets/img/bg/instructor_dashboard_bg.jpg') }}"></div>
            <div class="dashboard__instructor-info">
                <div class="dashboard__instructor-info-left">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/courses/details_instructors01.jpg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h4 class="title">John Due</h4>
                        <div class="review__wrap review__wrap-two">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(15 Reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="dashboard__instructor-info-right">
                    <a href="#" class="btn btn-two arrow-btn">Create a New Course <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                </div>
            </div>
        </div>
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

        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/user-event-activities"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response.data);
                
                $('#eventContent').empty();

                if (response.data.length > 0) {
                    $.each(response.data, function(index, value) {
                        $('#eventContent').append(event(value));
                    });
                } else {
                    $('#eventContent').append(empty());
                }

            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data events."
                    , icon: "error"
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

</script>
@endsection
