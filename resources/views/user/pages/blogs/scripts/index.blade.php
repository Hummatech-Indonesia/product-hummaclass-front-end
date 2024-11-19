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


    $(document).ready(function(page) {
        // $.ajax({
        //     type: "GET"
        //     , url: "{{ config('app.api_url') }}" + "/api/blogs?page=" + page
        //     , headers: {
        //         Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
        //     }
        //     , dataType: "json"
        //     , success: function(response) {
        //         $.each(response.data.data, function(index, value) {
        //             $('#news-list-content').append(card(index, value));
        //         });

        //         if (response.data.data.length > 0) {
        //             $.each(response.data.data, function(index, value) {
        //                 newsParent.append(card(index, value));
        //             });

        //             renderPagination(response.data.paginate.last_page, response.data.paginate
        //                 .current_page
        //                 , function(page) {
        //                     handleGetBlogs(page);
        //                 });
        //         } else {
        //             newsParent.append('<p>No courses found.</p>');
        //         }
        //     }
        //     , error: function(xhr) {

        //         Swal.fire({
        //             title: "Terjadi Kesalahan!"
        //             , text: "Tidak dapat memuat data kategori."
        //             , icon: "error"
        //         });
        //     }
        // });

        let loading = true;
        const newsParent = $('#news-list-content');

        if (loading) {
            newsParent.append(loadingCard(6));
        }

        let retryCount = 0;
        const maxRetries = 3;

        function handleGetBlogs(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/blogs?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    newsParent.empty();

                    if (response.data.data.length > 0) {
                        $.each(response.data.data, function(index, value) {
                            newsParent.append(card(index, value));
                        });

                        if (response.data.paginate.last_page > 0) {
                            renderPagination(response.data.paginate.last_page, response.data
                                .paginate.current_page,
                                function(page) {
                                    handleGetBlogs(page);
                                });
                            $('.pagination__wrap').show();
                        } else {
                            $('.pagination__wrap').hide();
                        }
                    } else {
                        newsParent.append(empty());
                        $('.pagination__wrap').hide();
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
                            handleGetBlogs(1);
                        }, 1000);
                    } else {
                        newsParent.empty();
                        newsParent.append(
                            `<p style="width:100%; text-align: center;">${errorMessage}</p>`);
                        loading = false;
                    }
                }
            });
        }

        handleGetBlogs(1);

        function card(index, value) {
            var url = "{{ config('app.api_url') }}";
            return `
                 <div class="col-xl-4 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                        <div class="blog__post-thumb">
                            <a href="{{ route('news.show', '') }}/${value.id}" class="shine__animate-link"><img src="${value.thumbnail && value.thumbnail !== url + '/storage' ? value.thumbnail : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" alt="img"></a>
                            <a href="javascript:void(0)" class="post-tag">${value.sub_category}</a>
                        </div>
                        <div class="blog__post-content">
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>${value.created}</li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="{{ route('news.show', '') }}/${value.id}">${value.title.length > 40 ? value.title.substring(0, 40) + '...' : value.title}</a></h4>
                        </div>
                    </div>
                </div>
                `;
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
    });



    // jangan dihapus
    // <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
</script>

<script>
    $(document).ready(function() {
        let debounceTimer;
        $('#search').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                get(1);
            }, 500);
        });


        function get(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/blogs?page=" + page,
                data: {
                    search: $('#search').val(),
                },
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#news-latest-content').empty();
                    $.each(response.data.data, function(index, value) {
                        $('#news-latest-content').append(latestNews(index, value));
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
        }
        get(1)


        function latestNews(index, value) {
            var url = "{{ config('app.api_url') }}";
            return `
                <div class="rc-post-item">
                    <div class="rc-post-thumb">
                        <a href="javascript:void(0)">
                            <img src="${value.thumbnail && value.thumbnail !== url + '/storage' ? value.thumbnail : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" style="width: 60px; height: 60px; object-fit: cover;" alt="img">
                        </a>
                    </div>
                    <div class="rc-post-content">
                        <h4 class="title"><a href="{{ route('news.show', '') }}/${value.id}">${value.title.length > 35 ? value.title.substring(0, 35) + '...' : value.title}</a></h4>
                    </div>
                </div>
            `;
        }
    });



    // jangan dihapus
    // <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
</script>
