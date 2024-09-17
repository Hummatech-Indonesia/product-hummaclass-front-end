<div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
    <div class="row courses__list-wrap row-cols-1" id="courses-list">
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


@section('script')
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{ env('API_URL') }}" + "/api/courses"
            , headers: {
                Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response);


                $.each(response.data, function(index, value) {
                    // $('#courses-grid').append(card(index
                    //     , value));
                    $('#courses-list').append(card1(index
                        , value));
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

    function card1(index, value) {
        return `<div class="col-lg-12">
                    <div class="courses__item courses__item-three shine__animate-item">
                        <div class="courses__item-thumb">
                            <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                                <img src="${value.photo}" />
                            </a>
                        </div>
                        <div class="courses__item-content">
                            <ul class="courses__item-meta list-wrap">
                                <li class="courses__item-tag">
                                    <a href="#">Development</a>
                                    <div class="avg-rating">
                                        <i class="fas fa-star"></i> (${value.rating} Review)
                                    </div>
                                </li>
                                <li class="price"><del>${value.price}</del>${value.price}</li>
                            </ul>
                            <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                            <p class="author">By <a href="#">David Millar</a></p>
                            <p class="info">${value.description}</p>
                            <div class="courses__item-bottom">
                                <div class="button">
                                    <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                        <span class="text">Lihat Detail</span>
                                        <i class="flaticon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
    }

</script>
@endsection