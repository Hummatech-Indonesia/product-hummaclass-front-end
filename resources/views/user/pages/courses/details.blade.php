@extends('user.layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-two"
        data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
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

    <!-- courses-details-area -->
    <section class="courses__details-area section-py-120">
        <div class="container">
            <div class="row" id="detail-course">
                <div class="col-xl-9 col-lg-8">
                    <div class="courses__details-thumb">
                        <img src="" id="photo" alt="img" width="100%">
                    </div>
                    <div class="courses__details-content">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="{{ route('courses.courses.index') }}" id="detail-category"></a>
                            </li>
                            <li class="avg-rating"><i class="fas fa-star"></i>(<span id="detail-rating"></span>&nbsp;Review)
                            </li>
                        </ul>
                        <h2 class="title mb-0" id="detail-title"></h2>
                        <p id="sub-title"></p>
                        <div class="courses__details-meta">
                            <ul class="list-wrap">
                                <li class="author-two">
                                    <img src="{{ asset('assets/img/courses/course_author001.png') }}" alt="img">
                                    By
                                    <a href="#">HummaClass</a>
                                </li>
                                <li class="date" id="detail-date"><i class="flaticon-calendar"></i></li>
                                <li><i class="flaticon-mortarboard"></i><span id="detail-count-user"></span>Siswa</li>
                            </ul>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                    data-bs-target="#overview-tab-pane" type="button" role="tab"
                                    aria-controls="overview-tab-pane" aria-selected="true">Deskripsi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab"
                                    data-bs-target="#curriculum-tab-pane" type="button" role="tab"
                                    aria-controls="curriculum-tab-pane" aria-selected="false">Konten Kursus</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="task-list-tab" data-bs-toggle="tab"
                                    data-bs-target="#task-list-tab-pane" type="button" role="tab"
                                    aria-controls="task-list-tab-pane" aria-selected="false">Daftar Tugas</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="instructors-tab" data-bs-toggle="tab"
                                    data-bs-target="#instructors-tab-pane" type="button" role="tab"
                                    aria-controls="instructors-tab-pane" aria-selected="false">Instruktur</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                                    data-bs-target="#reviews-tab-pane" type="button" role="tab"
                                    aria-controls="reviews-tab-pane" aria-selected="false">Ulasan</button>
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
            let photo;
            var id = "{{ $id }}";
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/courses/" + id,
                headers: {
                    Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
                },
                dataType: "json",
                success: function(response) {
                    photo = `{{ config('app.api_url') }}${response.data.photo}`;
                    $('#photo').attr('src', photo);
                    $('#sub-title').append(response.data.sub_title);
                    $('#detail-title').append(response.data.title);
                    $('#detail-category').append(response.data.category);
                    $('#detail-count-user').append(response.data.user_courses_count);
                    $('#detail-date').append(response.data.created);
                    $('#detail-rating').append(response.data.rating);

                    // tab deskripsi
                    $('#description-title').append(response.data.title);
                    $('#description-description').append(response.data.description);
                    $.each(response.data.modules, function(index, value) {
                        $('#module-content').append(moduleContent(index, value));
                    });

                    // tab konten kursus


                },
                error: function(xhr) {
                    console.log(xhr);

                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });

            function moduleContent(index, value) {
                const subModules = value.sub_modules.map(subModule => {
                    return `<li class="course-item open-item">
                               <a href="{{ route('courses.course-lesson.index', ['']) }}/${subModule.slug}" class="">
                                    <span>${subModule.title}</span>
                                </a>
                            </li>`;
                }).join('');
                return `
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-${index}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-${index}" aria-expanded="true" aria-controls="collapse-${index}">
                                ${value.title}
                            </button>
                            <p>${value.sub_title}</p>
                            <div class="d-flex">
                            <p class="rounded" style="background-color:#FEF5EE;color:black;padding:0.4rem;font-weight:700;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" style="color:#FFB649;" height="16" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                    <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"/>
                                </svg>
                                8 Kuis</p>
                            <p class="rounded" style="background-color:#FEF5EE;color:black;padding:0.4rem;font-weight:700; margin-left:1rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" style="color:#FFB649; margin-bottom:0.2rem" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                    <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
                                </svg>
                                8 Kuis</p>
                            </div>
                            </h2>
                        <div id="collapse-${index}" class="accordion-collapse collapse show" aria-labelledby="heading-${index}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-wrap" id="list-warp">
                                    ${subModules}
                                </ul>
                            </div>
                        </div>
                    </div>
                `;
            }

        });
    </script>
@endsection
