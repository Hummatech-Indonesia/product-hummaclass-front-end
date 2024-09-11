<div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
    <div class="row courses__list-wrap row-cols-1" id="courses-list">
        @forelse (range(1,10) as $item)
            <div class="col">
                <div class="courses__item courses__item-three shine__animate-item">
                    <div class="courses__item-thumb">
                        <a href="{{ route('courses.courses.show', $item) }}" class="shine__animate-link">
                            <img src="{{ asset('assets/img/courses/course_thumb0' . $item . '.jpg') }}" />
                        </a>
                    </div>
                    <div class="courses__item-content">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="course.html">Development</a>
                                <div class="avg-rating">
                                    <i class="fas fa-star"></i> (4.8 Reviews)
                                </div>
                            </li>
                            <li class="price"><del>$29.00</del>$15.00</li>
                        </ul>
                        <h5 class="title"><a href="{{ route('courses.courses.show', $item) }}">Resolving Conflicts
                                Between Designers And Engineers</a></h5>
                        <p class="author">By <a href="#">David Millar</a></p>
                        <p class="info">when an unknown printer took a galley of type and
                            scrambled type specimen book It has survived not only.</p>
                        <div class="courses__item-bottom">
                            <div class="button">
                                <a href="{{ route('courses.courses.show', $item) }}">
                                    <span class="text">Enroll Now</span>
                                    <i class="flaticon-arrow-right"></i>
                                </a>
                            </div>
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
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>
    </nav>
</div>
