<div class="dashboard__content-wrap dashboard__content-wrap-two mb-30">
    <div class="dashboard__content-title">
        <h4 class="title">Daftar Kursus Dikerjakan <span class="badge rounded-4 ms-3 px-4 py-2 fs-6"
                style="color: #b966e7; background: #F6EBFC;">20</span></h4>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="dashboard__nav-wrap">
                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                            data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane"
                            aria-selected="true">
                            Dalam Pengerjaan
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane"
                            type="button" role="tab" aria-controls="design-tab-pane" aria-selected="false">
                            Selesai Dikerjakan
                        </button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="courseTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0">
                    <div class="swiper dashboard-courses-active">
                        <div class="swiper-wrapper">
                            @forelse (range(1,4) as $item)
                                <div class="swiper-slide">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="{{ route('courses.show', $item) }}" class="shine__animate-link">
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
                                            <h5 class="title"><a href="{{ route('courses.show', $item) }}">Learning
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
                            @empty
                            @endforelse
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
                <div class="tab-pane fade" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab"
                    tabindex="0">
                    <div class="swiper dashboard-courses-active">
                        <div class="swiper-wrapper">
                            @forelse (range(1,4) as $item)
                                <div class="swiper-slide">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="{{ route('courses.show', $item) }}" class="shine__animate-link">
                                                <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}"
                                                    alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content courses__item-content-two">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="course.html">Design</a>
                                                </li>
                                                <li class="price"><del>$20.00</del>$10.00</li>
                                            </ul>
                                            <h5 class="title"><a href="{{ route('courses.show', $item) }}">The
                                                    Complete
                                                    Graphic Design
                                                    for Beginners</a></h5>
                                            <div class="courses__item-content-bottom">
                                                <div class="author-two">
                                                    <a href="instructor-details.html"><img
                                                            src="assets/img/courses/course_author002.png"
                                                            alt="img">Wilson</a>
                                                </div>
                                                <div class="avg-rating">
                                                    <i class="fas fa-star"></i> (4.5 Reviews)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="courses__item-bottom-two">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-book"></i>60</li>
                                                <li><i class="flaticon-clock"></i>70h 45m</li>
                                                <li><i class="flaticon-mortarboard"></i>202</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
