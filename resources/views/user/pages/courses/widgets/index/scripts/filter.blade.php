@push('script')
    <script>
        $(document).ready(function() {

            let filter = {
                'categories': [],
                'minimum': null,
                'maximum': null,
            }
            $('#filter_price').click(function(e) {
                e.preventDefault();

                filter.maximum = $('#maksimum').val();
                filter.minimum = $('#minimum').val();
                handleGetCourses(1, filter);
            });
            getCategories();

            function getCategories() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}" + "/api/categories",
                    dataType: "json",
                    success: function(response) {

                        $('#accordionFlushExample').empty();
                        $.each(response.data.data, function(index, value) {
                            $('#accordionFlushExample').append(filterCategories(index, value));
                        });

                        // Delegasikan event ke container untuk elemen checkbox yang baru di-render
                        $('#accordionFlushExample').on('change', '.checkbox_sub_category', function(e) {
                            e.preventDefault();
                            if ($(this).is(':checked')) {
                                filter.categories.push(parseInt($(this).val()));
                            } else {
                                var valueToRemove = parseInt($(this).val());
                                var index = filter.categories.indexOf(valueToRemove);

                                if (index > -1) {
                                    filter.categories.splice(index, 1);
                                }
                            }
                            handleGetCourses(1, filter);
                        });
                    },
                    error: function(xhr) {
                        let errorMessage = '';
                        if (xhr.status === 0) {
                            errorMessage = 'Gagal memuat data. Periksa koneksi internet Anda.';
                        } else if (xhr.status >= 500) {
                            errorMessage = 'Terjadi kesalahan pada server. Coba lagi nanti.';
                        } else if (xhr.status >= 400 && xhr.status < 500) {
                            errorMessage = 'Permintaan tidak valid atau data tidak ditemukan.';
                        } else {
                            errorMessage = 'Gagal memuat data. Coba lagi nanti.';
                        }
                        console.error(errorMessage);
                    }
                });
            }

            function filterCategories(index, value) {
                let subCategoryRows = '';

                if (value.sub_category.length > 0) {
                    $.each(value.sub_category, function(subIndex, subValue) {
                        subCategoryRows += `
                <li>
                    <div class="form-check">
                        <input class="checkbox_sub_category form-check-input" name="sub_category" type="checkbox" value="${subValue.id}">
                        <label class="form-check-label" for="cat_1">${subValue.name} (${subValue.course_count})</label>
                    </div>
                </li>
                `;
                    });
                }
                return `
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse-${index}" aria-expanded="true"
                            aria-controls="flush-collapse-${index}">
                            ${value.name} (${value.course_item_count})
                        </button>
                    </h2>
                    <div id="flush-collapse-${index}" class="accordion-collapse collapse show"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                        <div class="accordion-body">
                            <div class="courses-cat-list">
                                <ul class="list-wrap">
                                ${subCategoryRows}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>`;
            }
        });

        let loading = true;
        const gridParent = $('#courses-grid');

        if (loading) {
            gridParent.append(loadingCard(6));
        }

        let retryCount = 0;
        const maxRetries = 3;

        function handleGetCourses(page, data = {}) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/courses?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                data: data,
                dataType: "json",
                success: function(response) {
                    gridParent.empty();

                    if (response.data.data.length > 0) {
                        $.each(response.data.data, function(index, value) {
                            gridParent.append(card(index, value));
                        });

                        renderPagination(response.data.paginate.last_page, response.data.paginate
                            .current_page,
                            function(page) {
                                handleGetCourses(page);
                            });
                    } else {
                        gridParent.append('<p>No courses found.</p>');
                    }

                    retryCount = 0;
                    loading = false;
                },
                error: function(xhr) {
                    let errorMessage = '';
                    if (xhr.status === 0) {
                        errorMessage = 'Gagal memuat data. Periksa koneksi internet Anda.';
                    } else if (xhr.status >= 500) {
                        errorMessage = 'Terjadi kesalahan pada server. Coba lagi nanti.';
                    } else if (xhr.status >= 400 && xhr.status < 500) {
                        errorMessage = 'Permintaan tidak valid atau data tidak ditemukan.';
                    } else {
                        errorMessage = 'Gagal memuat data. Coba lagi nanti.';
                    }

                    if (retryCount < maxRetries) {
                        retryCount++;
                        setTimeout(() => {
                            handleGetCourses(1);
                        }, 1000);
                    } else {
                        gridParent.empty();
                        gridParent.append(
                            `<p style="width:100%; text-align: center;">${errorMessage}</p>`);
                        console.log('Gagal memuat data setelah beberapa kali percobaan.');
                        loading = false;
                    }
                }
            });
        }

        handleGetCourses(1);

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
                                <a href="{{ route('courses.courses.index') }}}">${value.sub_category}</a>
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
                            <h5 class="price">${formatRupiah(value.price)}</h5>
                        </div>
                    </div>
                </div>
            </div>`;
        }

        function loadingCard(amount) {
            let card = '';

            for (let i = 0; i < amount; i++) {
                card += `
                <div class="col col-lg-4">
                    <div class="card" aria-hidden="true">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                                <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                                <span class="placeholder col-7"></span>
                                <span class="placeholder col-4"></span>
                                <span class="placeholder col-4"></span>
                                <span class="placeholder col-6"></span>
                                <span class="placeholder col-8"></span>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                        </div>
                    </div>
                </div>
                `;
            }
            return card;
        }
    </script>
@endpush