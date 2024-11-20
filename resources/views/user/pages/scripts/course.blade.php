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
                if (response.data.data.length > 0) {
                    $.each(response.data.data, function(index, value) {
                        if (index < 8) {
                            $('#course-content').append(listCourse(index, value));
                        }
                    });
                } else {
                    $('#course-content').append(empty());
                }

                if (response.data.data.length === 8) {
                    $('#other-courses').show();
                } else {
                    $('#other-courses').hide();
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
    });


    function listCourse(index, value) {
        var url = "{{ config('app.api_url') }}";
        let price;

        if (value.promotional_price && parseFloat(value.promotional_price) > 0) {
            price = `<h6 class="price" style="font-size:13px">
                        ${value.price && parseFloat(value.price) > 0 ? `<del style="font-size:13px">${formatRupiah(value.price)}</del>` : ''}
                        ${formatRupiah(value.promotional_price)}
                    </h6>`;
        } 
        else if (!value.promotional_price || parseFloat(value.promotional_price) === 0) {
            price = `<h6 class="price" style="font-size:13px">
                        ${value.price && parseFloat(value.price) > 0 ? `<del style="font-size:13px">${formatRupiah(value.price)}</del>` : ''}
                        Gratis
                    </h6>`;
        } 
        else {
            price = `<h6 class="price">${(!value.price || value.price === '0') ? "Gratis" : formatRupiah(value.price)}</h6>`;
        }

        return `
        <div class="swiper-slide">
            <div class="courses__item shine__animate-item" style="width: 300px !important;">
                <div class="courses__item-thumb">
                    <a href="{{ route('courses.courses.show', '') }}/${value.slug} class="shine__animate-link">
                        <img src="${value.photo && value.photo !== url + '/storage' ? value.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" alt="img">
                    </a>
                </div>
                <div class="courses__item-content">
                    <ul class="courses__item-meta list-wrap">
                        <li class="courses__item-tag">
                            <a href="javascript:void(0)">${value.sub_category}</a>
                        </li>
                        <li class="avg-rating" style="font-size: 12px;"><i class="fas fa-star"></i> (${value.course_review_count} Reviews)</li>
                    </ul>
                    <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                    <div class="courses__item-bottom">
                        <div class="button">
                            <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                <span class="text">Daftar</span>
                                <i class="flaticon-arrow-right"></i>
                            </a>
                        </div>
                        <h5 class="price">${price}</h5>
                    </div>
                </div>
            </div>
        </div>
    `;
    }


    // jangan dihapus
    // <p class="author">By <a href="#">David Millar</a></p>
</script>
