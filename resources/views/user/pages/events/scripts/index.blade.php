<script>
    $(document).ready(function(page) {

        let loading = true;
        const eventParent = $('#events-list-content');

        if (loading) {
            eventParent.append(loadingCard(6));
        }

        let retryCount = 0;
        const maxRetries = 3;

        function handleGetEvents(page) {
            $.ajax({
                type: "GET"
                , url: "{{ config('app.api_url') }}" + "/api/events?page=" + page
                , headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                }
                , dataType: "json"
                , success: function(response) {
                    eventParent.empty();

                    if (response.data.data.length > 0) {
                        $.each(response.data.data, function(index, value) {
                            eventParent.append(card(index, value));
                        });

                        renderPagination(response.data.paginate.last_page, response.data.paginate
                            .current_page
                            , function(page) {
                                handleGetEvents(page);
                            });
                    } else {
                        eventParent.append('<p class="text-center">Data Event kosong.</p>');
                    }

                    retryCount = 0;
                    loading = false;
                }
                , error: function(xhr) {
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
                            handleGetEvents(1);
                        }, 1000);
                    } else {
                        eventParent.empty();
                        eventParent.append(
                            `<p style="width:100%; text-align: center;">${errorMessage}</p>`);
                        console.log('Gagal memuat data setelah beberapa kali percobaan.');
                        loading = false;
                    }
                }
            });
        }

        handleGetEvents(1);

        function card(index, value) {
            return `
                 <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="event__item shine__animate-item">
                        <div class="event__item-thumb">
                            <a href="{{ route('events.show', '') }}/${value.slug}" class="shine__animate-link"><img src="${value.image}" alt="img"></a>
                        </div>
                        <div class="event__item-content">
                            <span class="date">${value.start_date}</span>
                            <h2 class="title"><a href="{{ route('events.show', '') }}/${value.slug}">${value.title.length > 35 ? value.title.substring(0, 35) + '...' : value.title}</a></h2>
                            <p>${value.description}</p> 
                            
                            <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                    Sisa Kuota: ${value.capacity}
                                </div>
                                <div>${value.start_date}</div>
                            </div>
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
