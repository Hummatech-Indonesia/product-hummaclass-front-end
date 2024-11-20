@section('script')
    <script>
        function getCourse(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user-courses-guest?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#list-course').empty();
                    if (response.data.data.length > 0) {
                        response.data.data.forEach(data => {
                            renderPagination(response.data.paginate.last_page, response.data.paginate
                                .current_page,
                                function(page) {
                                    getCourse(page);
                                });
                            cardCourse(data);
                        });
                    } else {
                        $('#list-course').append(empty());
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

        function cardCourse(data) {
            const statusText = data.study_percentage === 100 ? "SELESAI" : "PROSES";
            var url = "{{ config('app.api_url') }}";
            let card = `
            <div class="col-lg-4 col-md-6">
                <div class="courses__item courses__item-two shine__animate-item">
                    <div class="courses__item-thumb courses__item-thumb-two">
                        <a href="{{ route('courses.courses.show', '') }}/${data.course.slug}"
                            class="shine__animate-link">
                            <img src="${data.course.photo && data.course.photo !== url + '/storage' ? data.course.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}"
                                alt="img">
                        </a>
                    </div>
                    <div class="courses__item-content courses__item-content-two">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="javascript:void(0)">${data.course.sub_category.name}</a>
                            </li>
                        </ul>
                        <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${data.course.slug}">${data.course.title}</a></h5>
                        <div class="courses__item-content-bottom">
                            <div class="author-two">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/img/no-image/no-profile.jpeg') }}"
                                        alt="img">${data.course.user?.name}</a>
                            </div>
                            <div class="avg-rating">
                                <i class="fas fa-star"></i> (${parseFloat(data.course.course_reviews_avg_rating??0).toFixed(1)} Reviews)
                            </div>
                        </div>
                        <div class="progress-item progress-item-two">
                            <h6 class="title">${statusText} <span>${data.study_percentage}%</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: ${data.study_percentage}%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses__item-bottom-two">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i>${data.total_module}</li>
                            <li><i class="flaticon-clock"></i>${data.study_time}</li>
                            <li><i class="flaticon-mortarboard"></i>${data.total_user}</li>
                        </ul>
                    </div>
                </div>
            </div>
                    `

            $('#list-course').append(card);
        }

        function getEvent(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user-events?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#list-event').empty();
                    if (response.data.data.length > 0) {
                        response.data.data.forEach(data => {
                            renderPagination(response.data.paginate.last_page, response.data
                                .paginate
                                .current_page,
                                function(page) {
                                    getEvent(page);
                                });
                            cardEvent(data.event);
                        });
                    } else {
                        $('#list-event').append(empty());
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


        function cardEvent(data) {

            let card = `
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="event__item shine__animate-item">
                    <div class="event__item-thumb">
                        <a href="#" class="shine__animate-link"><img
                                src="{{ asset('assets/img/events/event_thumb01.jpg') }}"
                                alt="img"></a>
                    </div>
                    <div class="event__item-content">
                        <span class="date">25 June, 2024</span>
                        <h2 class="title"><a href="{{ route('events.show', '') }}/${data.slug}">${data.title}</a></h2>

                        <div class="d-flex justify-content-between pt-3"
                            style="border-top: 1px solid #CCCCCC">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="#6D6C80" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2.0">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                        <circle cx="12" cy="7" r="4" />
                                    </g>
                                </svg>
                                Sisa Kuota: ${data.slot}
                            </div>
                            <div>${data.start_in}</div>
                        </div>
                        {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                    </div>
                </div>
            </div>
                    `

            $('#list-event').append(card);
        }

        getEvent(1);
        getCourse(1);
    </script>
@endsection
