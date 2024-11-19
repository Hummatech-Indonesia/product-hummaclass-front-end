<style>
    .nav-item .btn.active-tab.active {
        user-select: none;
        -moz-user-select: none;
        background: var(--tg-theme-primary) none repeat scroll 0 0;
        border: medium none;
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

    .nav-item .btn.active-tab {
        user-select: none;
        -moz-user-select: none;
        background: #E6E9EF;
        border: medium none;
        color: var(--tg-body-color);
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
        box-shadow: none;
        overflow: hidden;
    }
</style>

<div class=" mb-30">
    <div>
        <h5 class="my-4">Daftar Kursus Dikerjakan</h5>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="dashboard__nav-wrap">
                <ul class="nav nav-tabs" id="courseTab" style="border-bottom: none !important;" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn active-tab active" id="process-tab" data-bs-toggle="tab"
                            data-bs-target="#process-tab-pane" type="button" role="tab"
                            aria-controls="process-tab-pane" aria-selected="true">
                            Dalam Pengerjaan
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn active-tab" id="finished-tab" data-bs-toggle="tab"
                            data-bs-target="#finished-tab-pane" type="button" role="tab"
                            aria-controls="finished-tab-pane" aria-selected="false">
                            Selesai Dikerjakan
                        </button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="courseTabContent">
                <div class="tab-pane fade show active" id="process-tab-pane" role="tabpanel"
                    aria-labelledby="process-tab" tabindex="0">
                    <div class="swiper dashboard-courses-active">
                        <div class="row" id="process_courses">

                        </div>
                    </div>
                    <nav class="pagination__wrap my-30 pb-30">
                        <ul class="list-wrap">
                            <li><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="finished-tab-pane" role="tabpanel" aria-labelledby="finished-tab"
                    tabindex="0">
                    <div class="swiper dashboard-courses-active">
                        <div class="row" id="finished_courses">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        $(document).ready(function() {
            get(1)

            function get(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}" + "/api/user-course-activities?page=" + page,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    data: {
                        name: $('#search-name').val(),
                    },
                    success: function(response) {
                        if (response.data.length > 0) {
                            let hasProcessCourses = false;
                            let hasFinishedCourses = false;

                            $.each(response.data, function(index, value) {
                                if (value.study_percentage < 100) {
                                    $('#process_courses').append(process(index, value));
                                    hasProcessCourses = true;
                                } else if (value.study_percentage === 100) {
                                    $('#finished_courses').append(finished(index, value));
                                    hasFinishedCourses = true;
                                }
                            });

                            if (response.data.paginate && response.data.paginate.last_page > 0) {
                                renderPagination(
                                    response.data.paginate.last_page,
                                    response.data.paginate.current_page,
                                    function(page) {
                                        get(page);
                                    }
                                );
                                $('.pagination__wrap').show();
                            } else {
                                $('.pagination__wrap').hide();
                            }
                        } else {
                            $('#process_courses').append(empty());
                            $('#finished_courses').append(empty());
                            $('.pagination__wrap').hide();
                        }
                    },

                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kategori.",
                            icon: "error"
                        });
                    }
                });
            }
        });

        function process(index, value) {
            var url = "{{ config('app.api_url') }}";
            const statusText = value.study_percentage === 100 ? "SELESAI" : "PROSES";
            return `
            <div class="col-lg-4 col-md-6">
                <div class="courses__item courses__item-two shine__animate-item">
                    <div class="courses__item-thumb courses__item-thumb-two">
                        <a href="{{ route('courses.courses.show', '') }}/${value.course.slug}"
                            class="shine__animate-link">
                            <img src="${value.course.photo && value.course.photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(value.course.photo) ? value.course.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}"
                                alt="img">
                        </a>
                    </div>
                    <div class="courses__item-content courses__item-content-two">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="javascript:void(0)">${value.course.sub_category.name}</a>
                            </li>
                        </ul>
                        <h5 class="title"><a
                                href="{{ route('courses.courses.show', '') }}/${value.course.slug}">${value.course.title}</a></h5>
                        <div class="courses__item-content-bottom">
                            <div class="author-two">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/img/courses/course_author001.png') }}"
                                        alt="img">David Millar</a>
                            </div>
                            <div class="avg-rating">
                                <i class="fas fa-star"></i> (${value.course.rating} Review)
                            </div>
                        </div>
                        <div class="progress-item progress-item-two">
                            <h6 class="title">${statusText} <span>${value.study_percentage}%</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: ${value.study_percentage}%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses__item-bottom-two">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i><span>${value.total_module}</span></li>
                            <li><i class="flaticon-clock"></i><span>${value.study_time}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            `
        }

        function finished(index, value) {
            var url = "{{ config('app.api_url') }}";
            const statusText = value.study_percentage === 100 ? "SELESAI" : "PROSES";
            return `
            <div class="col-lg-4 col-md-6">
                <div class="courses__item courses__item-two shine__animate-item">
                    <div class="courses__item-thumb courses__item-thumb-two">
                        <a href="{{ route('courses.courses.show', '') }}/${value.course.slug}"
                            class="shine__animate-link">
                            <img src="${value.course.photo && value.course.photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(value.course.photo) ? url + value.course.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}"
                                alt="img">
                        </a>
                    </div>
                    <div class="courses__item-content courses__item-content-two">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="javascript:void(0)">${value.course.sub_category.name}</a>
                            </li>
                        </ul>
                        <h5 class="title"><a
                                href="{{ route('courses.courses.show', '') }}/${value.course.slug}">${value.course.title}</a></h5>
                        <div class="courses__item-content-bottom">
                            <div class="author-two">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/img/courses/course_author001.png') }}"
                                        alt="img">David Millar</a>
                            </div>
                            <div class="avg-rating">
                                <i class="fas fa-star"></i> (${value.course.rating} Reviews)
                            </div>
                        </div>
                        <div class="progress-item progress-item-two">
                            <h6 class="title">${statusText} <span>${value.study_percentage}%</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: ${value.study_percentage}%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses__item-bottom-two">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i><span>${value.total_module}</span></li>
                            <li><i class="flaticon-clock"></i><span>${value.study_time}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            `
        }
    </script>
@endsection
