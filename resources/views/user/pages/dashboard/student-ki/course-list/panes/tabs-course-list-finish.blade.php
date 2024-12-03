<div class="row mb-3">
    @foreach (range(1, 5) as $item)
        <div class="col-xl-4 col-md-6">
            <div class="courses__item courses__item-two shine__animate-item">
                <div class="courses__item-thumb courses__item-thumb-two">
                    <a href="course-details.html" class="shine__animate-link">
                        <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="courses__item-content courses__item-content-two">
                    <ul class="courses__item-meta list-wrap">
                        <li class="courses__item-tag">
                            <a href="course.html">Design</a>
                        </li>
                    </ul>
                    <h5 class="title"><a href="course-details.html">The Complete Graphic
                            Design for
                            Beginners</a></h5>
                    <div class="courses__item-content-bottom">
                        <div class="author-two">
                            <a href="instructor-details.html"><img
                                    src="{{ asset('assets/img/courses/course_author002.png') }}"
                                    alt="img">Wilson</a>
                        </div>
                        <div class="avg-rating">
                            <i class="fas fa-star"></i> (4.5 Reviews)
                        </div>
                    </div>
                    <div class="progress-item progress-item-two">
                        <h6 class="title">Selesai <span>100%</span></h6>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<nav class="pagination__wrap mt-30">
    <ul class="list-wrap">
        <li class=""><a href="#">1</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="courses.html">2</a></li>
        <li><a href="courses.html">3</a></li>
        <li><a href="courses.html">4</a></li>
        <li class=""><a href="#">1</a></li>
    </ul>
</nav>
