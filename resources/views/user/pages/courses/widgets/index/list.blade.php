<div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
    <div class="row courses__list-wrap row-cols-1" id="courses-list">
    </div>
    <nav class="pagination__wrap mt-30">
        <ul class="list-wrap">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>
    </nav>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            let loading = true;
            const listParent = $('#courses-list');

            if (loading) {
                listParent.append(loadingCard(6)); // Tampilkan loading cards
            }

            let retryCount = 0;
            const maxRetries = 3;

            function handleGetCourses() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}" + "/api/courses",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        // Hapus loading card dan reset grid
                        listParent.empty();

                        if (response.data.length > 0) {
                            // Jika ada data, append card
                            $.each(response.data, function(index, value) {
                                listParent.append(card1(index, value));
                            });
                        } else {
                            // Jika tidak ada data
                            listParent.append('<p>No courses found.</p>');
                        }

                        retryCount = 0; // Reset retry count jika sukses
                        loading = false; // Nonaktifkan loading state
                    },
                    error: function(xhr) {
                        // Identifikasi masalah berdasarkan status kode
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
                                handleGetCourses(); // Coba lagi setelah 1 detik
                            }, 1000);
                        } else {
                            // Jika retry gagal setelah beberapa kali percobaan
                            listParent.empty(); // Kosongkan grid
                            listParent.append(
                                `<p style="width:100%; text-align: center;">${errorMessage}</p>`);
                            console.log('Gagal memuat data setelah beberapa kali percobaan.');
                            loading = false; // Hentikan loading state
                        }
                    }
                });
            }

            handleGetCourses(); // Panggil fungsi saat halaman di-load

            // Fungsi untuk menampilkan card
            function card1(index, value) {
                return `<div class="col-lg-12">
                    <div class="courses__item courses__item-three shine__animate-item">
                        <div class="courses__item-thumb">
                            <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                                <img src="${value.photo}" />
                            </a>
                        </div>
                        <div class="courses__item-content">
                            <ul class="courses__item-meta list-wrap">
                                <li class="courses__item-tag">
                                    <a href="#">Development</a>
                                    <div class="avg-rating">
                                        <i class="fas fa-star"></i> (${value.rating} Review)
                                    </div>
                                </li>
                                <li class="price"><del>${formatRupiah(value.price)}</del>${formatRupiah(value.price)}</li>
                            </ul>
                            <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                            <p class="author">By <a href="#">David Millar</a></p>
                            <p class="info">${value.description}</p>
                            <div class="courses__item-bottom">
                                <div class="button">
                                    <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                        <span class="text">Lihat Detail</span>
                                        <i class="flaticon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
            }

            // Fungsi untuk loading card
            function loadingCard(amount) {
                let card = '';

                for (let i = 0; i < amount; i++) {
                    card += `
                    <div class="col col-lg-12">
                        <div class="card" aria-hidden="true">
                            <div class="row">
                                <div class="col-md-4">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                    </svg>
                                </div>
                                <div class="col-md-8">
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
                        </div>
                    </div>
                    `;
                }
                return card;
            }
        });
    </script>
@endpush


{{-- @section('script')
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ env('API_URL') }}" + "/api/courses",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);


                    $.each(response.data, function(index, value) {
                        $('#courses-list').append(card1(index, value));
                    });

                },
                error: function(xhr) {}
            });
        });

        function card1(index, value) {
            return `<div class="col-lg-12">
                    <div class="courses__item courses__item-three shine__animate-item">
                        <div class="courses__item-thumb">
                            <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                                <img src="${value.photo}" />
                            </a>
                        </div>
                        <div class="courses__item-content">
                            <ul class="courses__item-meta list-wrap">
                                <li class="courses__item-tag">
                                    <a href="#">Development</a>
                                    <div class="avg-rating">
                                        <i class="fas fa-star"></i> (${value.rating} Review)
                                    </div>
                                </li>
                                <li class="price"><del>${value.price}</del>${value.price}</li>
                            </ul>
                            <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                            <p class="author">By <a href="#">David Millar</a></p>
                            <p class="info">${value.description}</p>
                            <div class="courses__item-bottom">
                                <div class="button">
                                    <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                        <span class="text">Lihat Detail</span>
                                        <i class="flaticon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
        }
    </script>
@endsection --}}
