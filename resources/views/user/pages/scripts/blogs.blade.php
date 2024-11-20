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

                $('#news-content').empty();

                if (response.data.data.length > 0) {
                    $.each(response.data.data, function(index, value) {
                        // if (index < 8) {
                            $('#news-content').append(card(index, value));
                        // }
                    });

                    renderPagination(response.data.paginate.last_page, response.data.paginate
                        .current_page
                        , function(page) {
                            handleGetEvents(page);
                        });
                } else {
                    $('#news-content').append(empty());
                }

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
        var url = "{{ config('app.api_url') }}";
        return `
            <div class="col-xl-3 col-md-6">
                <div class="blog__post-item shine__animate-item">
                    <div class="blog__post-thumb">
                        <a href="{{ route('news.show', '') }}/${value.id}" class="shine__animate-link"><img src="${value.thumbnail && value.thumbnail !== url + '/storage' ? value.thumbnail : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" alt="img"></a>
                        <a href="javascript:void(0)" class="post-tag bg-warning">${value.sub_category}</a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>${value.created}</li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="{{ route('news.show', '') }}/${value.id}">${value.title.length > 35 ? value.title.substring(0, 35) + '...' : value.title}</a></h4>
                    </div>
                </div>
            </div>
    `;
    }


    // jangan dihapus
    // <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>

</script>
