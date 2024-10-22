@section('script')
    <script>
        function getCourse(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/courses?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                dataType: "json",
                data: data,
                success: function(response) {
                    $('#list-course').empty();
                    if (response.data.data.length > 0) {
                        response.data.data.forEach(data => {
                            cardCourse(data);
                        });
                        $('#pagination').html(handlePaginate(response.data.paginate));
                    } else {
                        $('#list-course').append(empty());
                        $('#pagination').hide();
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
            let card = `
            <div class="col-lg-4 col-md-6">
                <div class="courses__item courses__item-two shine__animate-item">
                    <div class="courses__item-thumb courses__item-thumb-two">
                        <a href="{{ route('courses.courses.show', 1) }}"
                            class="shine__animate-link">
                            <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}"
                                alt="img">
                        </a>
                    </div>
                    <div class="courses__item-content courses__item-content-two">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="course.html">Development</a>
                            </li>
                        </ul>
                        <h5 class="title"><a href="{{ route('courses.courses.show', 1) }}">Learning
                                JavaScript With
                                Imagination</a></h5>
                        <div class="courses__item-content-bottom">
                            <div class="author-two">
                                <a href="instructor-details.html"><img
                                        src="assets/img/courses/course_author001.png"
                                        alt="img">David Millar</a>
                            </div>
                            <div class="avg-rating">
                                <i class="fas fa-star"></i> (4.8 Reviews)
                            </div>
                        </div>
                        <div class="progress-item progress-item-two">
                            <h6 class="title">COMPLETE <span>88%</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses__item-bottom-two">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i>05</li>
                            <li><i class="flaticon-clock"></i>11h 20m</li>
                            <li><i class="flaticon-mortarboard"></i>22</li>
                        </ul>
                    </div>
                </div>
            </div>
                    `
            $('#list-course').append(card);
        }
    </script>
@endsection
