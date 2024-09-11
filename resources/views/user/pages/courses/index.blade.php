@extends('user.layouts.app')

@section('style')
<style>
    .courses__item-bottom .price {
        font-size: 17px;
        line-height: 1;
        color: var(--tg-theme-primary);
        font-weight: var(--tg-fw-bold);
        margin: 0 0;
    }

</style>
@endsection

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h3 class="title">Kursus</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Kursus</span>
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
</section>
<!-- breadcrumb-area-end -->

<!-- all-courses -->
<section class="all-courses-area section-py-120">
    <div class="container">
        <div class="row">
            @include('user.pages.courses.widgets.index.filter')
            <div class="col-xl-9 col-lg-8">
                @include('user.pages.courses.widgets.index.sort')
                <div class="tab-content" id="myTabContent">
                    @include('user.pages.courses.widgets.index.grid')
                    @include('user.pages.courses.widgets.index.list')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- all-courses-end -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{ env('API_URL') }}" + "api/courses"
            , headers: {
                Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response);


                $.each(response.data, function(index, value) {
                    $('#courses-grid').append(card(index
                        , value));
                    $('#courses-list').append(card(index
                        , value));
                });

            }
            , error: function(xhr) {
                console.log(xhr);

                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    });

    function card(index, value) {
        return `<div class="col-lg-4">
                <div class="courses__item shine__animate-item">
                    <div class="courses__item-thumb">
                        <a href="{{ route('courses.courses.show', '') }}/${value.id}" class="shine__animate-link">
                            <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                        </a>
                    </div>
                    <div class="courses__item-content">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="course.html">Design</a>
                            </li>
                            <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                        </ul>
                        <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.id}">The Complete Graphic
                                Design for Beginners</a></h5>
                        <p class="author">By <a href="#">Jenny Wilson</a></p>
                        <div class="courses__item-bottom d-flex justify-content-between">
                            <div class="button">
                                <a href="{{ route('courses.courses.show', '') }}/${value.id}">
                                    <span class="text">Lihat Detail</span>
                                    <i class="flaticon-arrow-right"></i>
                                </a>
                            </div>
                            <div>
                                <h6 class="price">${value.price}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
    }

</script>
@endsection
