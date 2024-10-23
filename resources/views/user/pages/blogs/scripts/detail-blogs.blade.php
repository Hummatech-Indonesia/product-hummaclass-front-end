<script>
    $(document).ready(function() {
        var id = "{{ $id }}";

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/blogs/" + id,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                $.each(response.data.data, function(index, value) {
                    $('#tags-news-list').append(tagsList(index, value));
                });

                $('#currentBreadcrumb').attr('href', '/blogs/' + id).html(response.data.title);
                $('#detail-thumbnail').attr('src', response.data.thumbnail);
                // $('.detail-title').html(response.data.title);
                $('#detail-view').html(response.data.view_count);
                $('#detail-created').html(response.data.created);
                $('#detail-description').html(response.data.description);
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data modul.",
                    icon: "error"
                });
            }
        });
    });

    // function tagsList(index, value) {
    //     return `
    //         <li><a href="#">${value.ta}</a></li>
    //     `;
    // }
</script>

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
            url: "{{ config('app.api_url') }}" + "/api/blogs",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {

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
    });

    function latestNews(index, value) {
        return `
            <div class="rc-post-item">
                <div class="rc-post-thumb">
                    <a href="javascript:void(0)">
                        <img src="${value.thumbnail}" style="width: 60px;height:60pc; object-fit:cover;" alt="img">
                    </a>
                </div>
                <div class="rc-post-content">
                    <h4 class="title"><a href="{{ route('blogs.show', '') }}/${value.id}">${value.title.length > 35 ? value.title.substring(0, 35) + '...' : value.title}</a></h4>
                </div>
            </div>
        `;
    }


    // jangan dihapus
    // <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
</script>
