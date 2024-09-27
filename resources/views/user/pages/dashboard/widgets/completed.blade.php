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
        color: black;
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
                        <button class="btn active-tab active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">
                            Dalam Pengerjaan
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn active-tab" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="false">
                            Selesai Dikerjakan
                        </button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="courseTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                    <div class="swiper dashboard-courses-active">
                        <div class="row">
                            @forelse (range(1,5) as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="courses__item courses__item-two shine__animate-item">
                                    <div class="courses__item-thumb courses__item-thumb-two">
                                        <a href="{{ route('courses.courses.show', $item) }}" class="shine__animate-link">
                                            <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="img">
                                        </a>
                                    </div>
                                    <div class="courses__item-content courses__item-content-two">
                                        <ul class="courses__item-meta list-wrap">
                                            <li class="courses__item-tag">
                                                <a href="course.html">Development</a>
                                            </li>
                                        </ul>
                                        <h5 class="title"><a href="{{ route('courses.courses.show', $item) }}">Learning
                                                JavaScript With
                                                Imagination</a></h5>
                                        <div class="courses__item-content-bottom">
                                            <div class="author-two">
                                                <a href="instructor-details.html"><img src="{{ asset('assets/img/courses/course_author001.png') }}" alt="img">David Millar</a>
                                            </div>
                                            <div class="avg-rating">
                                                <i class="fas fa-star"></i> (4.8 Reviews)
                                            </div>
                                        </div>
                                        <div class="progress-item progress-item-two">
                                            <h6 class="title">COMPLETE <span>88%</span></h6>
                                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
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
                <div class="tab-pane fade" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                    <div class="swiper dashboard-courses-active">
                        <div class="row">
                            @forelse (range(1,4) as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="courses__item courses__item-two shine__animate-item">
                                    <div class="courses__item-thumb courses__item-thumb-two">
                                        <a href="{{ route('courses.courses.show', $item) }}" class="shine__animate-link">
                                            <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" alt="img">
                                        </a>
                                    </div>
                                    <div class="courses__item-content courses__item-content-two">
                                        <ul class="courses__item-meta list-wrap">
                                            <li class="courses__item-tag">
                                                <a href="course.html">Design</a>
                                            </li>
                                            <li class="price"><del>$20.00</del>$10.00</li>
                                        </ul>
                                        <h5 class="title"><a href="{{ route('courses.courses.show', $item) }}">The
                                                Complete
                                                Graphic Design
                                                for Beginners</a></h5>
                                        <div class="courses__item-content-bottom">
                                            <div class="author-two">
                                                <a href="instructor-details.html"><img src="{{ asset('assets/img/courses/course_author002.png') }}" alt="img">Wilson</a>
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
