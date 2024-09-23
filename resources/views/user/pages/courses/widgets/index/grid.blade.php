<div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
    <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-gap-3"
        id="courses-grid">
    </div>
    <nav class="pagination__wrap mt-30">
        <ul class="list-wrap">
            <li class="active"><a href="#">1</a></li>
            <li><a href="/courses">2</a></li>
            <li><a href="/courses">3</a></li>
            <li><a href="/courses">4</a></li>
        </ul>
    </nav>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            let loading = true;
            const gridParent = $('#courses-grid');

            if (loading) {
                gridParent.append(loadingCard(6)); // Tampilkan loading cards
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
                        gridParent.empty();

                        if (response.data.length > 0) {
                            // Jika ada data, append card
                            $.each(response.data, function(index, value) {
                                gridParent.append(card(index, value));
                            });
                        } else {
                            // Jika tidak ada data
                            gridParent.append('<p>No courses found.</p>');
                        }

                        retryCount = 0; // Reset retry count jika sukses
                        loading = false; // Nonaktifkan loading state
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
                                handleGetCourses();
                            }, 1000);
                        } else {
                            gridParent.empty(); // Kosongkan grid
                            gridParent.append(
                                `<p style="width:100%; text-align: center;">${errorMessage}</p>`);
                            console.log('Gagal memuat data setelah beberapa kali percobaan.');
                            loading = false; // Hentikan loading state
                        }
                    }
                });
            }

            handleGetCourses();

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
                                    <a href="#">${value.sub_category}</a>
                                </li>
                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                            </ul>
                            <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                            <div class="courses__item-bottom d-flex justify-content-between">
                                <div class="button">
                                    <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                        <span class="text">Lihat Detail</span>
                                        <i class="flaticon-arrow-right"></i>
                                    </a>
                                </div>
                                <div>
                                    <h6 class="price">Rp. ${value.price}</h6>
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
    </script>
@endpush


{{-- @push('script')
    <script>
        $(document).ready(function() {
            let loading = true;
            const gridParent = $('#courses-grid');

            if (loading) {
                gridParent.append(loadingCard(6)); // Tampilkan loading cards
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
                        gridParent.empty();

                        if (response.data.length > 0) {
                            // Jika ada data, append card
                            $.each(response.data, function(index, value) {
                                gridParent.append(card(index, value));
                            });
                        } else {
                            // Jika tidak ada data
                            gridParent.append('<p>No courses found.</p>');
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
                            gridParent.empty(); // Kosongkan grid
                            gridParent.append(
                                `<p style="width:100%; text-align: center;">${errorMessage}</p>`);
                            console.log('Gagal memuat data setelah beberapa kali percobaan.');
                            loading = false; // Hentikan loading state
                        }
                    }
                });
            }

            handleGetCourses(); // Panggil fungsi saat halaman di-load

            // Fungsi untuk menampilkan card
            function card(index, value) {
                return `<div class="col-lg-4">
                    <div class="courses__item shine__animate-item">
                        <div class="courses__item-thumb">
                            <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                                <img src="{{ config('app.api_url') }}${value.photo}" alt="img">
                            </a>
                        </div>
                        <div class="courses__item-content">
                            <ul class="courses__item-meta list-wrap">
                                <li class="courses__item-tag">
                                    <a href="#">${value.sub_category}</a>
                                </li>
                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                            </ul>
                            <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.title}</a></h5>
                            <div class="courses__item-bottom d-flex justify-content-between">
                                <div class="button">
                                    <a href="{{ route('courses.courses.show', '') }}/${value.slug}">
                                        <span class="text">Lihat Detail</span>
                                        <i class="flaticon-arrow-right"></i>
                                    </a>
                                </div>
                                <div>
                                    <h6 class="price">Rp. ${value.price}</h6>
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
    </script>
@endpush --}}
