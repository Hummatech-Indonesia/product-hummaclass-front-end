<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/categories"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {
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

            }
            , error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    });


    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/blogs"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {
                $.each(response.data.data, function(index, value) {
                    $('#news-list-content').append(card(index, value));
                });

            }
            , error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    });

    function card(index, value) {
        return `
            <div class="col-xl-4 col-md-6">
                <div class="blog__post-item shine__animate-item">
                    <div class="blog__post-thumb">
                        <a href="{{ route('blogs.show', '') }}/${value.id}" class="shine__animate-link"><img src="${value.thumbnail}" alt="img"></a>
                        <a href="javascript:void(0)" class="post-tag">${value.sub_category}</a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>${value.created}</li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="{{ route('blogs.show', '') }}/${value.id}">${value.title}</a></h4>
                    </div>
                </div>
            </div>
    `;
    }


    // jangan dihapus
    // <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>


</script>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/blogs"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {

                $.each(response.data.data, function(index, value) {
                    $('#news-latest-content').append(latestNews(index, value));
                });
            }
            , error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    });

    function latestNews(index, value) {
        return `
            <div class="rc-post-item">
                <div class="rc-post-thumb">
                    <a href="javascript:void(0)">
                        <img src="${value.thumbnail}" alt="img">
                    </a>
                </div>
                <div class="rc-post-content">
                    <span class="date"><i class="flaticon-calendar"></i>${value.created}</span>
                    <h4 class="title"><a href="{{ route('blogs.show', '') }}/${value.id}">${value.title}</a></h4>
                </div>
            </div>
        `;
    }


    // jangan dihapus
    // <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>


</script>