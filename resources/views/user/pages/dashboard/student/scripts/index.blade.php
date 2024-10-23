@section('script')
    <script>
        function getCourse(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user-courses",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                dataType: "json",
                success: function(response) {
                    $('#list-course').empty();
                    
                    if (response.data.length > 0) {
                        response.data.forEach(data => {                            
                            cardCourse(data);
                        });
                        // $('#pagination').html(handlePaginate(response.data.paginate));
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
            console.log(data.course.sub_category.name);
            
            let card = `
            <div class="col-lg-4 col-md-6">
                <div class="courses__item courses__item-two shine__animate-item">
                    <div class="courses__item-thumb courses__item-thumb-two">
                        <a href="{{ route('courses.courses.show', 1) }}"
                            class="shine__animate-link">
                            <img src="{{ config('app.api_url') }}/storage/${data.course.photo}"
                                alt="img">
                        </a>
                    </div>
                    <div class="courses__item-content courses__item-content-two">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="course.html">${data.course.sub_category.name}</a>
                            </li>
                        </ul>
                        <h5 class="title"><a href="{{ route('courses.courses.show', 1) }}">${data.course.title}</a></h5>
                        <div class="courses__item-content-bottom">
                            <div class="author-two">
                                <a href="instructor-details.html"><img
                                        src="assets/img/courses/course_author001.png"
                                        alt="img">${data.course.user?.name}</a>
                            </div>
                            <div class="avg-rating">
                                <i class="fas fa-star"></i> (${parseFloat(data.course.course_reviews_avg_rating).toFixed(1)} Reviews)
                            </div>
                        </div>
                        <div class="progress-item progress-item-two">
                            <h6 class="title">COMPLETE <span>${data.percentace}%</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: ${data.percentace}%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses__item-bottom-two">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i>${data.course.modules.length}</li>
                            <li><i class="flaticon-clock"></i>11h 20m</li>
                            <li><i class="flaticon-mortarboard"></i>${data.course.user_courses_count}</li>
                        </ul>
                    </div>
                </div>
            </div>
                    `
                    
            $('#list-course').append(card);
        }

        getCourse();
    </script>
@endsection
