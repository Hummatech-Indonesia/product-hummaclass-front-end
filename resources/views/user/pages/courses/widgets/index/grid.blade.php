<div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
    <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
        @forelse (range(1,9) as $item)
            <div class="col">
                <div class="courses__item shine__animate-item">
                    <div class="courses__item-thumb">
                        <a href="{{ route('courses.show', $item) }}" class="shine__animate-link">
                            <img src="{{ 'assets/img/courses/course_thumb0' . $item . '.jpg' }}" alt="img">
                        </a>
                    </div>
                    <div class="courses__item-content">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="course.html">Design</a>
                            </li>
                            <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                        </ul>
                        <h5 class="title"><a href="{{ route('courses.show', $item) }}">The Complete Graphic
                                Design for Beginners</a></h5>
                        <p class="author">By <a href="#">Jenny Wilson</a></p>
                        <div class="courses__item-bottom">
                            <div class="button">
                                <a href="{{ route('courses.show', $item) }}">
                                    <span class="text">Enroll Now</span>
                                    <i class="flaticon-arrow-right"></i>
                                </a>
                            </div>
                            <h5 class="price">$19.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
    <nav class="pagination__wrap mt-30">
        <ul class="list-wrap">
            <li class="active"><a href="#">1</a></li>
            <li><a href="courses.html">2</a></li>
            <li><a href="courses.html">3</a></li>
            <li><a href="courses.html">4</a></li>
        </ul>
    </nav>
</div>
