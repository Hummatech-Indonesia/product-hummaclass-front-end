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
            url: "{{ config('app.api_url') }}" + "/api/top-courses",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                if (response.data.length > 0) {
                    $.each(response.data, function(index, value) {
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


        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/top-rating-courses",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                if (response.data.length > 0) {
                    $.each(response.data, function(index, value) {
                        if (index < 8) {
                            $('#course-top-content').append(listCourse(index, value));
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

    $.ajax({
        type: "GET",
        url: "{{ config('app.api_url') }}" + "/api/superior-features",
        headers: {
            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
        },
        dataType: "json",
        success: function(response) {
            let el;
            for (const property in response.data) {
                el = $(`feature-${property}`);
                if (el) {
                    el.text(response.data[property])
                }
            }
        },
        error: function(xhr, status, asdf) {

        }
    })

    function listCourse(index, value) {
        const apiUrl = "{{ config('app.api_url') }}";
        const defaultImage = '{{ asset('assets/img/no-image/no-image.jpg') }}';
        let priceContent = '';

        // Jika ada harga promosi
        if (value.promotional_price && parseFloat(value.promotional_price) > 0) {
            priceContent = `
            <h6 class="price">
                ${formatRupiah(value.promotional_price)} 
                <del style="font-size:13px; margin-left: 10px;">${formatRupiah(value.price)}</del>
            </h6>`;
        } else if (value.price) {
            // Jika tidak ada harga promosi
            const priceValue = parseFloat(value.price);
            priceContent = `
            <h6 class="price">
                ${priceValue > 0 ? formatRupiah(priceValue) : "Gratis"}
            </h6>`;
        }

        // Generate Image URL
        const photoUrl = value.photo && value.photo !== `${apiUrl}/storage` ?
            value.photo :
            defaultImage;

        // Return HTML Template
        return `
        <div class="swiper-slide">
            <div class="courses__item shine__animate-item" style="width: 300px; padding: 0;">
                <div class="courses__item-thumb">
                    <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                        <img src="${photoUrl}" alt="img">
                    </a>
                </div>
                <div class="courses__item-content" style="padding: 0 25px 25px;">
                    <ul class="courses__item-meta list-wrap" style="flex-direction: row; justify-content: space-between; gap: 0;">
                        <li class="courses__item-tag">
                            <a href="javascript:void(0)">${value.sub_category || ''}</a>
                        </li>
                        <li class="avg-rating" style="font-size: 12px;">
                            <i class="fas fa-star"></i> (${value.rating || 0} Reviews)
                        </li>
                    </ul>
                    <h5 class="title">
                        <a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title || ''}</a>
                        <p>by <b>${value.user.name}</b></p>
                    </h5>
                    <div class="courses__item-bottom">
                        ${priceContent}
                    </div>
                </div>
            </div>
        </div>
    `;
    }


    // jangan dihapus
    // <p class="author">By <a href="#">David Millar</a></p>
</script>
