@section('script')
<script>
    $(document).ready(function(page) {
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/rewards?page=" + page
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response);
                

                $('#list-point-exchange').empty();

                if (response.data.data.length > 0) {
                    $.each(response.data.data, function(index, value) {
                        $('#list-point-exchange').append(ListExchange(index, value));
                    });

                    if (response.data.paginate.last_page > 0) {
                        renderPagination(response.data.paginate.last_page, response.data.paginate.current_page, function(page) {
                            handleGetEvent(page);
                        });
                        $('.pagination__wrap').show();
                    } else {
                        $('.pagination__wrap').hide();
                    }

                } else {
                    $('#list-point-exchange').append(empty());
                    $('.pagination__wrap').hide();
                }


            }
            , error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data penukaran poin."
                    , icon: "error"
                });
            }
        });
    });

    function ListExchange(index, value) {
        console.log(value);
        
        return `
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="event__item shine__animate-item">
                    <div class="event__item-thumb">
                        <a href="javascript:void(0)" class="shine__animate-link">
                            <div style="border: 1px solid #B5B5C3; padding: 20px 20px 20px 25px; border-radius: 10px;">
                                <img src="${value.image}" alt="img" style="width: 100%; height:150px;">
                            </div>
                        </a>
                    </div>
                    <div class="event__item-content">
                        <span class="date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="2.0">
                                    <ellipse cx="9.5" cy="10" stroke-linecap="round" stroke-linejoin="round" rx="9.5" ry="10" transform="matrix(-1 0 0 1 20 2)" />
                                    <text x="11" y="15" text-anchor="middle" font-size="9" fill="currentColor" font-family="Arial" font-weight="lighter">H</text>
                                </g>
                            </svg>
                            100 Poin
                        </span>
                        <h2 class="title"><a href="javascript:void(0)">${value.name}</a></h2>
                        <div class="d-flex justify-content-between align-items-center pt-3" style="border-top: 1px solid #CCCCCC">
                            <div class="d-flex" style="font-size: 14px;">
                                Sisa Kuota: ${value.points_required}
                            </div>
                            <div>
                                <button data-id="${value.id}" class="btn-purple-primary px-4">
                                    Tukarkan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    `;
    }

</script>
@endsection