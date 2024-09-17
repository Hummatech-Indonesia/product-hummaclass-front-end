<div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
    <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1" id="courses-grid">
    </div>
    <nav class="pagination__wrap mt-30">
        <ul class="list-wrap">
            <li class="active"><a href="#">1</a></li>
            <li><a href="/courses">2</a></li>
            <li><a href="/courses">3</a></li>
            <li><a href="/courses">4</a></li>
        </ul>
    </nav>
</div>


@push('script')
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{config('app.api_url')}}" + "/api/courses"
            , headers: {
                Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response);


                $.each(response.data, function(index, value) {
                    $('#courses-grid').append(card(index
                        , value));
                    // $('#courses-list').append(card(index
                    //     , value));
                });

            }
            , error: function(xhr) {
                console.log(xhr);

                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    });

    function card(index, value) {
        return `<div class="col-lg-4">
                    <div class="courses__item shine__animate-item">
                        <div class="courses__item-thumb">
                            <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                                <img src="${value.photo}" alt="img">
                            </a>
                        </div>
                        <div class="courses__item-content">
                            <ul class="courses__item-meta list-wrap">
                                <li class="courses__item-tag">
                                    <a href="#">${value.category}</a>
                                </li>
                                <li class="avg-rating"><i class="fas fa-star"></i> (${value.rating} Reviews)</li>
                            </ul>
                            <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                            <p class="author">By <a href="#">Jenny Wilson</a></p>
                            <div class="courses__item-bottom d-flex justify-content-between">
                                <div class="button">
                                    <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                        <span class="text">Lihat Detail</span>
                                        <i class="flaticon-arrow-right"></i>
                                    </a>
                                </div>
                                <div>
                                    <h6 class="price">Rp. ${value.price}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
    }

</script>
@endpush
