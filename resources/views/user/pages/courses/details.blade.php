@extends('user.layouts.app')

@section('style')
    <style>
        .add-to-cart:hover {
            color: var(--bs-primary);
        }

        .payment-option span {
            font-size: 16px;
            font-weight: bold;
        }

        .payment-option img {
            width: 100px !important;
            height: auto;
            aspect-ratio: 2 / 1;
        }

        .payment-option {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 10px;
            /* cursor: pointer; */
            transition: border-color 0.3s;
        }

        .outline-purple-primary {
            display: inline-block;
            border: 1px solid #9425FE;
            color: #9425FE;
            background-color: transparent;
            padding: 4px 6px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .outline-purple-primary:hover {
            background-color: #9425FE;
            color: white;
        }

        .outline-purple-primary:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(111, 66, 193, 0.5);
        }

        .outline-purple-primary:active {
            background-color: #5a34a9;
            border-color: #5a34a9;
        }

        .outline-purple-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .modal-backdrop {
            transform: scale(1.25);
            transform-origin: top left;
        }

        .stars button svg {
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .stars button svg:hover {
            transform: scale(1.2);
        }

        .stars button.active svg path {
            fill: #FFB649;
            stroke: #FFB649;
        }

        .arrow-btn img {
            filter: brightness(0);
            transition: filter 0.3s ease;
        }

        .arrow-btn:hover img {
            filter: brightness(0) invert(1);
        }

        .course-review-head .review-author-content .author-name {
            justify-content: start;
        }

        .review-text {
            max-width: 700px;
            word-wrap: break-word;
            overflow-wrap: break-word;
            margin: 0;
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
                        <h3 class="title">Kursus</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Beranda</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/courses/courses">Kursus</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/" id="currentBreadcrumb"></a>
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

    <!-- courses-details-area -->
    <section class="courses__details-area section-py-120">
        <div class="container">
            <div class="row" id="detail-course">
                <div class="col-xl-9 col-lg-8">
                    <div class="courses__details-thumb">
                        <img src="" id="photo" alt="img" width="100%"
                            style="height: 450px; object-fit:cover;">
                    </div>
                    <div class="courses__details-content">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="{{ route('courses.courses.index') }}" id="detail-category"></a>
                            </li>
                            <li class="avg-rating"><i class="fas fa-star"></i>(<span
                                    id="detail-rating"></span>&nbsp;Reviews)
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
                                <button class="nav-link" id="instructors-tab" data-bs-toggle="tab"
                                    data-bs-target="#instructors-tab-pane" type="button" role="tab"
                                    aria-controls="instructors-tab-pane" aria-selected="false">Instruktor</button>
                            </li>
                            <li class="nav-item" role="presentation" id="task-tab">
                                <button class="nav-link" id="task-tab" data-bs-toggle="tab"
                                    data-bs-target="#task-tab-pane" type="button" role="tab"
                                    aria-controls="task-tab-pane" aria-selected="false">Tugas</button>
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
                            @include('user.pages.courses.widgets.details.task')
                            @include('user.pages.courses.widgets.details.instructors')
                            @include('user.pages.courses.widgets.details.reviews')
                        </div>
                    </div>
                </div>
                @include('user.pages.courses.widgets.details.courses-detail-sidebar')
                @include('user.pages.courses.widgets.details.sidebar-tab-review')
            </div>
        </div>
    </section>
    @include('user.pages.courses.widgets.details.modal-create-reviews')
    <!-- courses-details-area-end -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            let photo;
            var id = "{{ $id }}";

            $('#task-tab').addClass('d-none');

            @if (session('warning'))
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: '{{ session('warning ') }}',
                });
            @endif
            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('error ') }}',
                });
            @endif
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Oops...',
                    text: '{{ session('success ') }}',
                });
            @endif

            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/module-tasks/course/" + id,
                dataType: "json",
                headers: {
                    Authorization: "Bearer {{ session('hummaclass-token') }}"
                },
                success: function(response) {
                    let taskEl = '';
                    response.data.forEach(task => {
                        taskEl += `<tr>
                            <td>${task.question}</td>
                            <td>10 Januari 2024</td>
                            <td>
                                @session('user')
                                    <span class="badge text-${task.is_finish? "success" : "danger"}" style="background-color: #EEFEF0;">${task.is_finish? "Selesai" : "Belum Selesai"}</span>
                                @else
                                    <span class="badge" style="background-color: #EEFEF0;">-</span>
                                @endsession
                            </td>
                            <td>
                                @session('user')
                                    <a href="{{ route('upload-task.index', '') }}/${task.id}" class="outline-purple-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 13c3.6-8 14.4-8 18 0"/><path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6"/></g></svg>
                                        Detail
                                    </a>
                                @else
                                    <a href="{{ route('upload-task.index', '') }}/${task.id}" class="outline-purple-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 13c3.6-8 14.4-8 18 0"/><path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6"/></g></svg>
                                        -
                                    </a>
                                @endsession
                            </td>
                        </tr>
            `
                    });

                    $('#task-list').append(taskEl);
                }
            });

            var course;

            function reviewContent(value) {
                var url = "{{ config('app.api_url') }}";
                const reviewText = value.review ? value.review : 'Tidak ada review.';
                return `
                <div class="course-review-head">
                <div class="review-author-thumb">
                    <img src="${value.user_photo && value.user_photo !== url + '/storage' ? value.user_photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" style="width: 64px; height: 64px; object-fit: cover;" alt="img">
                </div>
                <div class = "review-author-content" >
                <div class="author-name">
                    <h5 class="name text-dark">${value.user.name} <span>${value.created}</span></h5>
                    <div class="author-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="review-text">${reviewText}</p>
                </div>
                </div>
            `;
            }
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/courses/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    course = response.data;
                    if (response.data.user_course) {
                        if (response.data.user_course.has_pre_test == 0) {
                            $('#btn-checkout').text('Mulai Pre Test');
                            $('#btn-lesson').text('Mulai Pre Test');
                            $('#btn-checkout').attr('href', "{{ route('pre.test.index', '') }}/" +
                                response.data.course_test_id);
                            $('#btn-lesson').attr('href', "{{ route('pre.test.index', '') }}/" +
                                response.data.course_test_id);
                            $('.user-name').text("{{ session('user')['name'] ?? '-' }}");
                            $('.paid-at').text(formatDate(response.data.user_course.created_at));
                            $('#task-tab').removeClass('d-none');
                        } else if (response.data.user_course.has_pre_test == 1 && response.data
                            .user_course.has_post_test == 0) {
                            $('#btn-checkout').text('Lanjutkan');
                            $('#btn-lesson').text('Lanjutkan');
                            $('#btn-checkout').attr('href',
                                "{{ route('courses.course-lesson.index', '') }}/" +
                                response.data.user_course.sub_module.slug);
                            $('#btn-lesson').attr('href',
                                "{{ route('courses.course-lesson.index', '') }}/" +
                                response.data.user_course.sub_module.slug);
                        } else if (response.data.user_course.has_pre_test == 1 && response.data
                            .user_course.has_post_test == 1) {
                            document.getElementById('certificate-download').style.display = 'block';
                            document.getElementById('review-course').style.display = 'block';
                            $('#btn-checkout').text('Lanjutkan');
                            $('#btn-lesson').text('Lanjutkan');
                            $('#btn-checkout').attr('href',
                                "{{ route('courses.course-lesson.index', '') }}/" +
                                response.data.user_course.sub_module.slug);
                            $('#btn-lesson').attr('href',
                                "{{ route('courses.course-lesson.index', '') }}/" +
                                response.data.user_course.sub_module.slug);
                        } else {
                            $('#btn-checkout').text('Mulai Post Test');
                            $('#btn-lesson').text('Mulai Post Test');
                            $('#btn-checkout').attr('href', "{{ route('post.test.index', '') }}/" +
                                response.data.course_test_id);
                            $('#btn-lesson').attr('href', "{{ route('post.test.index', '') }}/" +
                                response.data.course_test_id);
                            $('.user-name').text("{{ session('user')['name'] ?? '-' }}");
                            $('.paid-at').text(formatDate(response.data.user_course.created_at));
                        }
                        document.getElementById('courses-detail-sidebar').style.display = 'none';
                        document.getElementById('sidebar-tab-review').style.display = 'block';
                    } else {
                        document.getElementById('courses-detail-sidebar').style.display = 'block';
                        document.getElementById('sidebar-tab-review').style.display = 'none';
                    }

                    response.data.course_reviews.forEach((review) => {
                        $('#review-content').append(reviewContent(review));
                    });

                    // } else {
                    //     $('#review-content').append(empty());
                    // }

                    const photo = response.data.photo && /\.(jpeg|jpg|gif|png)$/i.test(response.data
                            .photo) ?
                        response.data.photo :
                        "{{ asset('assets/img/no-image/no-image.jpg') }}";
                    $('#photo').attr('src', photo);

                    $('#sub-title').append(response.data.sub_title);
                    $('#detail-title').append(response.data.title);
                    $('#currentBreadcrumb').html(response.data.title).attr('href', '/courses/courses/' +
                        response.data.slug);
                    $('#detail-category').append(response.data.sub_category.name);
                    $('#detail-count-user').append(response.data.user_courses_count);
                    $('#detail-date').append(formatDate(response.data.created));
                    $('#detail-rating').append(response.data.rating);
                    let price =
                        response.data.promotional_price && response.data.promotional_price !== 0 &&
                        response.data.promotional_price !== '' ?
                        response.data.promotional_price :
                        response.data.price;
                    $('#price-course').html(price == null || price === "" ? "Gratis" : formatRupiah(
                        price));
                    if (response.data.is_admin) {
                        $('#btn-checkout').text('Lihat Kursus');
                    }


                    // tab deskripsi
                    $('#description-title').append(response.data.title);
                    $('#description-description').append(response.data.description);
                    $.each(response.data.modules, function(index, value) {
                        $('#module-content').append(moduleContent(index, value));
                    });

                    // tab konten kursus

                    // tab ulasan
                    $('#review-rating').append(response.data.rating);
                    $('#review-rating-count').append(response.data.course_review_count);

                    $('.rating1').html(response.data.ratings[1] || 0)
                    $('.rating2').html(response.data.ratings[2] || 0)
                    $('.rating3').html(response.data.ratings[3] || 0)
                    $('.rating4').html(response.data.ratings[4] || 0)
                    $('.rating5').html(response.data.ratings[5] || 0)

                    $('.percentRating1')
                        .css('width', response.data.ratings_percentage[1] || 0 + '%')
                        .attr('aria-valuenow', response.data.ratings_percentage[1] || 0);
                    $('.percentRating2')
                        .css('width', response.data.ratings_percentage[2] || 0 + '%')
                        .attr('aria-valuenow', response.data.ratings_percentage[2] || 0);

                    $('.percentRating3')
                        .css('width', response.data.ratings_percentage[3] || 0 + '%')
                        .attr('aria-valuenow', response.data.ratings_percentage[3] || 0);

                    $('.percentRating4')
                        .css('width', response.data.ratings_percentage[4] || 0 + '%')
                        .attr('aria-valuenow', response.data.ratings_percentage[4] || 0);

                    $('.percentRating5')
                        .css('width', response.data.ratings_percentage[5] || 0 + '%')
                        .attr('aria-valuenow', response.data.ratings_percentage[5] || 0);


                    response.data.course_reviews.forEach(review => {

                    });


                    $(document).on('click', '.addReviews', function() {
                        $('#modal-create-review').modal('show');
                    });

                    $('#course_id').val(response.data.id);

                    $('.storeConfirmation').click(function(e) {
                        e.preventDefault();

                        let formData = new FormData($('#form-create-review')[0]);

                        $.ajax({
                            type: "POST",
                            url: "{{ config('app.api_url') }}/api/course-reviews/" +
                                response.data.id,
                            headers: {
                                Authorization: 'Bearer ' +
                                    "{{ session('hummaclass-token') }}",
                            },
                            data: formData,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                $('#modal-create-review').modal('hide');
                                Swal.fire({
                                    title: "Berhasil!",
                                    text: "Berhasil menambah review",
                                    icon: "success"
                                }).then(() => {
                                    location.reload();
                                });
                            },
                            error: function(response) {
                                let errorMessages = [];

                                if (response.responseJSON && response.responseJSON
                                    .errors) {
                                    $.each(response.responseJSON.errors, function(
                                        field, messages) {
                                        $.each(messages, function(index,
                                            message) {
                                            errorMessages.push(
                                                message);
                                        });
                                    });
                                }

                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    html: errorMessages.join('<br>'),
                                    icon: "error"
                                });
                            }
                        });
                    });
                },
                error: function(xhr) {
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
                                <p class="last_step_update" data-sub-modul-id="${subModule.id}" data-course-id="${value.course.id}">
                                        <span>${subModule.title}</span>
                                </p>
                            </li>`;
                }).join('');
                const quizzes = value.quizzes.map(quiz => {
                    return `<li class="course-item open-item">
                               <a class="last_step_update d-flex justify-content-between" href="{{ route('courses.quizz.index', ['']) }}/${quiz.module_slug}" style="cursor: pointer;">
                                    <span class="ps-2">Quiz</span>
                                    <span class="ps-2"> ${quiz.total_question} Soal</span>                                
                                </a>
                            </li>`;
                }).join('');
                return `
            <div class="accordion-item mt-3">
                <div class="d-flex">
                    <a class="text-white d-flex align-items-center justify-content-center bg-warning p-1 rounded-circle py-1 px-3 me-2"
                        href="javascript:void(0)" width="30" height="30">
                        ${index + 1}
                    </a>
                    <h4>${value.title}</h4>
                </div>
                <p class="mt-2">${value.sub_title}</p>
                <h2 class="accordion-header" id="heading-${index}">
                    <button class="accordion-button ${index === 0 ? '' : 'collapsed'}" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-${index}" aria-expanded="${index === 0 ? 'true' : 'false'}"
                        aria-controls="collapse-${index}">
                        <div class="d-flex gap-2">
                            <span class="badge text-dark fw-semibold pe-5" style="background-color: #FEF5EE">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-warning mb-1 me-1" width="16"
                                    height="16" viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
                                </svg>
                                ${value.quizz_count} Kuis
                            </span>
                            <span class="badge text-dark fw-semibold pe-5" style="background-color: #FEF5EE">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-warning mb-1 me-1" width="16"
                                    height="16" viewBox="-2 -2 24 24">
                                    <path fill="currentColor"
                                        d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2m-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2m0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2m-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414z" />
                                </svg>
                                ${value.sub_module_count} Tugas
                            </span>
                        </div>
                    </button>
                </h2>
                <div id="collapse-${index}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}"
                    aria-labelledby="heading-${index}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-wrap" id="list-warp">
                            ${subModules}
                            ${quizzes}
                        </ul>
                    </div>
                </div>
            </div>
            `;
            }


        });

        $('.last_step_update').click(function(e) {
            e.preventDefault();
            var sub_modul_id = $(this).data('sub-modul-id');
        });
    </script>

    <script>
        // Fungsi untuk menampilkan sidebar sesuai tab yang aktif
        // document.querySelectorAll('button[data-bs-toggle="tab"]').forEach(function(tabButton) {
        //     tabButton.addEventListener('shown.bs.tab', function(event) {
        //         var targetTab = event.target.getAttribute('data-bs-target');

        //         if (targetTab === '#reviews-tab-pane') {
        //             document.getElementById('courses-detail-sidebar').style.display = 'none';
        //             document.getElementById('sidebar-tab-review').style.display = 'block';
        //         } else {
        //             document.getElementById('courses-detail-sidebar').style.display = 'block';
        //             document.getElementById('sidebar-tab-review').style.display = 'none';
        //         }
        //     });
        // });
    </script>

    <script>
        // Simpan tab yang aktif ke localStorage
        document.querySelectorAll('button[data-bs-toggle="tab"]').forEach(button => {
            button.addEventListener('shown.bs.tab', function(event) {
                let activeTab = event.target.id;
                localStorage.setItem('activeTab', activeTab);
            });
        });

        // Ambil tab yang aktif dari localStorage saat halaman dimuat
        window.addEventListener('load', function() {
            let activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                let tabTrigger = document.getElementById(activeTab);
                let tab = new bootstrap.Tab(tabTrigger);
                tab.show();
            }
        });
    </script>

    <script>
        document.querySelectorAll('.star').forEach((star) => {
            star.addEventListener('click', function() {
                const ratingValue = this.getAttribute('data-value');
                document.getElementById('rating').value =
                    ratingValue; // Menyimpan nilai rating ke input hidden
                ratingValue; // Menyimpan nilai rating ke input hidden
                updateStarRating(ratingValue); // Memperbarui tampilan bintang
            });

            star.addEventListener('mouseover', function() {
                const hoverValue = this.getAttribute('data-value');
                updateStarRating(hoverValue); // Memperbarui tampilan saat hover
            });

            star.addEventListener('mouseout', function() {
                const currentRating = document.getElementById('rating').value;
                updateStarRating(
                    currentRating); // Mengembalikan tampilan ke nilai yang dipilih setelah hover
            });
        });

        function updateStarRating(rating) {
            document.querySelectorAll('.star').forEach((star) => {
                if (star.getAttribute('data-value') <= rating) {
                    star.querySelector('path').setAttribute('fill',
                        '#FFD700'); // Mengubah warna bintang terpilih menjadi emas                
                } else {
                    star.querySelector('path').setAttribute('fill',
                        '#D9D9D9'); // Mengubah warna bintang yang tidak terpilih menjadi abu-abu
                }
            });
        }
    </script>

    <script>
        const textarea = document.getElementById('review-textarea');
        const charCount = document.getElementById('char-count');
        const maxChars = 500;

        textarea.addEventListener('input', () => {
            if (textarea.value.length > maxChars) {
                textarea.value = textarea.value.slice(0, maxChars); // Memotong ke maxChars jika melebihi
            }
            const remainingChars = maxChars - textarea.value.length;
            charCount.textContent = `${remainingChars} Karakter tersisa`;
        });
    </script>
    {{-- create reviews --}}
@endsection
