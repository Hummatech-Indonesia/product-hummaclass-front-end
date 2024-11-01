<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/categories",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                $.each(response.data.data, function(index, value) {
                    $('#category_count').append(
                        `<div class="swiper-slide">
                                    <div class="categories__item">
                                        <a href="{{ route('courses.courses.index') }}">
                                            <div class="icon">
                                                <h1 style="font-size: 50px;color: #6D6C80">${value.course_item_count}</h1>
                                            </div>
                                            <span class="name">${value.name}</span>
                                            {{-- <span class="courses">(22)</span> --}}
                                        </a>
                                    </div>
                            </div>`
                    );
                });

            },
            error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data kategori.",
                    icon: "error"
                });
            }
        });
    });


    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/courses?order=best seller",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                $.each(response.data.data, function(index, value) {
                    $('#course-content').append(listCourse(index, value));
                });

            },
            error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data kategori.",
                    icon: "error"
                });
            }
        });
    });

    function listCourse(index, value) {
        console.log(card);

        return `
        <div class="swiper-slide">
            <div class="courses__item shine__animate-item">
                <div class="courses__item-thumb">
                    <a href="{{ route('courses.courses.show', '') }}/${value.slug} class="shine__animate-link">
                        <img src="${value.photo}" alt="img">
                    </a>
                </div>
                <div class="courses__item-content">
                    <ul class="courses__item-meta list-wrap">
                        <li class="courses__item-tag">
                            <a href="javascript:void(0)">${value.sub_category}</a>
                        </li>
                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                    </ul>
                    <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                    <div class="courses__item-bottom">
                        <div class="button">
                            <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                <span class="text">Daftar</span>
                                <i class="flaticon-arrow-right"></i>
                            </a>
                        </div>
                        <h5 class="price">${value.is_premium === 0 ? 'Gratis' : formatRupiah(value.price)}</h5>
                    </div>
                </div>
            </div>
        </div>
    `;
    }


    // jangan dihapus
    // <p class="author">By <a href="#">David Millar</a></p>
</script>
