@extends('user.layouts.app')

@section('content')
<!-- breadcrumb-area -->
<div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-two" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.html">Courses</a>
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

<!-- courses-details-area -->
<section class="courses__details-area section-py-120">
    <div class="container">
        <div class="row" id="detail-course">
            <div class="col-xl-9 col-lg-8">
                <div class="courses__details-thumb">
                    <img src="${value.photo}" alt="img">
                </div>
                <div class="courses__details-content">
                    <ul class="courses__item-meta list-wrap">
                        <li class="courses__item-tag">
                            <a href="{{ route('courses.courses.index') }}" id="detail-category"></a>
                        </li>
                        <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                    </ul>
                    <h2 class="title" id="detail-title"></h2>
                    <div class="courses__details-meta">
                        <ul class="list-wrap">
                            <li class="author-two">
                                <img src="{{ asset('assets/img/courses/course_author001.png') }}" alt="img">
                                By
                                <a href="#">David Millar</a>
                            </li>
                            <li class="date" id="detail-date"><i class="flaticon-calendar"></i></li>
                            <li><i class="flaticon-mortarboard"></i><span id="detail-count-user"></span>Siswa</li>
                        </ul>
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Deskripsi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum-tab-pane" type="button" role="tab" aria-controls="curriculum-tab-pane" aria-selected="false">Konten Kursus</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="task-list-tab" data-bs-toggle="tab" data-bs-target="#task-list-tab-pane" type="button" role="tab" aria-controls="task-list-tab-pane" aria-selected="false">Daftar Tugas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instructors-tab" data-bs-toggle="tab" data-bs-target="#instructors-tab-pane" type="button" role="tab" aria-controls="instructors-tab-pane" aria-selected="false">Instruktur</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">Ulasan</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @include('user.pages.courses.widgets.details.overview')
                        @include('user.pages.courses.widgets.details.curriculumn')
                        @include('user.pages.courses.widgets.details.task-list')
                        @include('user.pages.courses.widgets.details.instructors')
                        @include('user.pages.courses.widgets.details.reviews')
                    </div>
                </div>
            </div>
            @include('user.pages.courses.widgets.details.courses-detail-sidebar')
        </div>
    </div>
</section>
<!-- courses-details-area-end -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $.ajax({

            type: "GET"
            , url: "{{config('app.api_url')}}" + "/api/courses/{{ request()->course }}"
            , headers: {
                Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
            }
            , dataType: "json"
            , success: function(response) {

                $('#detail-title').append(response.data.title);
                $('#detail-category').append(response.data.category);
                $('#detail-count-user').append(response.data.user_courses_count);
                $('#detail-date').append(response.data.created);

                // tab deskripsi
                $('#description-title').append(response.data.title);
                $('#description-description').append(response.data.description);
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


</script>
@endsection
