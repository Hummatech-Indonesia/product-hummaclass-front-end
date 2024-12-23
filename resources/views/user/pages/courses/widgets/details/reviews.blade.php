<div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
    <div class="courses__rating-wrap" id="review-content">
        <h2 class="title">Reviews</h2>
        <div class="course-rate">
            <div class="course-rate__summary">
                <div class="course-rate__summary-value" id="review-rating"></div>
                <div class="course-rate__summary-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="course-rate__summary-text">
                    <span id="review-rating-count"></span>
                    &nbsp;Ratings
                </div>
            </div>
            <div class="course-rate__details">
                <div class="course-rate__details-row">
                    <div class="course-rate__details-row-star">
                        5
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="course-rate__details-row-value">
                        <div class="rating-gray"></div>
                        <div class="rating percentRating5" style="width:80%;" title="80%"></div>
                        <span class="rating-count rating5">2</span>
                    </div>
                </div>
                <div class="course-rate__details-row">
                    <div class="course-rate__details-row-star">
                        4
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="course-rate__details-row-value">
                        <div class="rating-gray"></div>
                        <div class="rating percentRating4" style="width:50%;" title="50%"></div>
                        <span class="rating-count rating4">1</span>
                    </div>
                </div>
                <div class="course-rate__details-row">
                    <div class="course-rate__details-row-star">
                        3
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="course-rate__details-row-value">
                        <div class="rating-gray"></div>
                        <div class="rating percentRating3" style="width:0%;" title="0%"></div>
                        <span class="rating-count rating3">0</span>
                    </div>
                </div>
                <div class="course-rate__details-row">
                    <div class="course-rate__details-row-star">
                        2
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="course-rate__details-row-value">
                        <div class="rating-gray"></div>
                        <div class="rating percentRating2" style="width:0%;" title="0%"></div>
                        <span class="rating-count rating2">0</span>
                    </div>
                </div>
                <div class="course-rate__details-row">
                    <div class="course-rate__details-row-star">
                        1
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="course-rate__details-row-value">
                        <div class="rating-gray"></div>
                        <div class="rating percentRating1" style="width:0%;" title="0%"></div>
                        <span class="rating-count rating1">0</span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            function reviewContent(value) {
                return `
                    <div class="course-review-head">
                        <div class="review-author-thumb">
                            <img src="${value.user.photo}" alt="img">
                        </div>
                        <div class="review-author-content">
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
                            <p>${value.review}</p>
                        </div>
                    </div>
                `;
            }
        });
    </script>

@endpush
