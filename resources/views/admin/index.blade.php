@extends('admin.layouts.app')

@section('style')
    <style>
        .owl-item {
            margin-left: 15px !important;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="owl-carousel counter-carousel owl-theme">
            <div class="item">
                <div class="card border-0 zoom-in">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rounded-2 d-flex align-items-center justify-content-center m-auto"
                                style="height: 50px; width: 50px; background-color: #F6EEFE; color:#9425FE;">
                                <!-- Icon Voucher -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M2 7.5C2 6.12 3.12 5 4.5 5h15c1.38 0 2.5 1.12 2.5 2.5v9c0 1.38-1.12 2.5-2.5 2.5h-15C3.12 19 2 17.88 2 16.5v-9zm9 2a2 2 0 1 0 0 4 2 2 0 1 0 0-4z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-2 mb-1">Voucher</p>
                            <h5 class="fw-semibold mb-0 detail-course_voucher_count">22</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rounded-2 d-flex align-items-center justify-content-center m-auto"
                                style="height: 50px; width: 50px; background-color: #F6EEFE; color:#9425FE;">
                                <!-- Icon Jumlah Kursus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 2a10 10 0 1 0 0 20a10 10 0 0 0 0-20zm-1 14h2v-2h-2v2zm0-4h2V7h-2v5z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-2 mb-1">Jumlah Kursus</p>
                            <h5 class="fw-semibold mb-0 detail-course_count">88</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rounded-2 d-flex align-items-center justify-content-center m-auto"
                                style="height: 50px; width: 50px; background-color: #F6EEFE; color:#9425FE;">
                                <!-- Icon Kategori Kursus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2zm8 4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2zm8 4a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h2z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-2 mb-1">Kategori Kursus</p>
                            <h5 class="fw-semibold mb-0 detail-sub_category_count">22</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rounded-2 d-flex align-items-center justify-content-center m-auto"
                                style="height: 50px; width: 50px; background-color: #F6EEFE; color:#9425FE;">
                                <!-- Icon Berita -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M3 3h18v4h-8v2h8v10H3V3zm2 4h5v2H5V7zm0 4h10v2H5v-2zm0 4h10v2H5v-2z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-2 mb-1">Berita</p>
                            <h5 class="fw-semibold mb-0 detail-blog_count_count"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rounded-2 d-flex align-items-center justify-content-center m-auto"
                                style="height: 50px; width: 50px; background-color: #F6EEFE; color:#9425FE;">
                                <!-- Icon Jumlah Event -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 16H5V10h14v9zm-7-8h-2v2H8v2h2v2h2v-2h2v-2h-2v-2z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-2 mb-1">Jumlah Event</p>
                            <h5 class="fw-semibold mb-0 detail-event_count">15</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rounded-2 d-flex align-items-center justify-content-center m-auto"
                                style="height: 50px; width: 50px; background-color: #F6EEFE; color:#9425FE;">
                                <!-- Icon Jumlah Mentor -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 2a5 5 0 0 1 5 5a5 5 0 0 1-10 0a5 5 0 0 1 5-5zm-6.5 10h1.158A8.015 8.015 0 0 0 4 18v1h16v-1a8.015 8.015 0 0 0-2.658-6H18.5a3.5 3.5 0 0 1 3.5 3.5v3.5H2v-3.5A3.5 3.5 0 0 1 5.5 12z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-2 mb-1">Jumlah Mentor</p>
                            <h5 class="fw-semibold mb-0">18</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rounded-2 d-flex align-items-center justify-content-center m-auto"
                                style="height: 50px; width: 50px; background-color: #F6EEFE; color:#9425FE;">
                                <!-- Icon Jumlah Sertifikat -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5 4v16h14V4H5zm7 8h2v6h-2v-6zm0-2h2V8h-2v2zm-5 0h2V8H7v2zm10 0h2V8h-2v2z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-2 mb-1">Jumlah Sertifikat</p>
                            <h5 class="fw-semibold mb-0">22</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body pb-2">
                        <div class="d-md-flex align-items-center gap-3 justify-content-between mb-3">
                            <div>
                                <h5 class="fw-semibold">Pendapatan</h5>
                                <h3 class="fw-semibold this-mount-income"></h3>
                                <p class="card-subtitle mb-0">Statistik pendapatan tahun ini</p>
                            </div>

                        </div>
                    </div>
                    <div id="investments"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold">Pendapatan</h5>
                                        <h4 class="fw-semibold mb-3 this-mount-income"></h4>
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-arrow-up-left text-success"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                            <p class="fs-3 mb-0">Tahun Terakhir</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-4">
                                                <span class="round-8 rounded-circle me-2 d-inline-block"
                                                    style="background-color: #9425FE"></span>
                                                <span class="fs-2">2023</span>
                                            </div>
                                            <div>
                                                <span
                                                    class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                                <span class="fs-2">2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-center">
                                            <div id="breakup"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold"> User Baru </h5>
                                        <h4 class="fw-semibold mb-3">+20 Pengguna </h4>
                                        <div class="d-flex align-items-center pb-1">
                                            <span
                                                class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-arrow-up-left text-success"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">+20</p>
                                            <p class="fs-3 mb-0">Tahun Terakhi</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div class="text-white rounded-circle p-6 d-flex align-items-center justify-content-center"
                                                style="background-color: #9425FE">
                                                <i class="ti ti-currency-dollar fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="earning-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body pb-2">
                    <div class="d-md-flex align-items-center gap-3 justify-content-between mb-3">
                        <div>
                            <h5 class="fw-semibold">Kursus terpopuler</h5>
                            <p class="card-subtitle mb-0">Kursus yang populer baru baru ini</p>
                        </div>
                    </div>
                    <div class="row mt-4" id="popular-course">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body" id="latest-review-section">
                            <h5 class="card-title fw-semibold">Review Terbaru</h5>
                            <p class="card-subtitle">Komentar Terbaru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-body">
                <h4 class="card-title fw-semibold">Riwayat Transaksi</h4>
                <div class="table-responsive rounded-2 mb-4 mt-3">
                    <table class="table text-nowrap customize-table mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Pembeli</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Kursus</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Metode Pembayaran</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Total Harga</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Waktu</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="latest-transactions">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            let month;
            let transactionStatistic;
            
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/courses/count",
                headers: {
                    'Authorization': `Bearer {{ session('hummaclass-token') }}`,
                },
                dataType: "json",
                success: function(response) {
                    $('.course-count').text(response.data.course_count)
                }
            });
            async function fetchTransactionStatistics() {
                try {
                    const response = await fetch(`{{ config('app.api_url') }}/api/transaction/statistic`, {
                        method: "GET",
                        headers: {
                            'Authorization': `Bearer {{ session('hummaclass-token') }}`,
                            'Content-Type': 'application/json'
                        }
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }

                    const data = await response.json();
                    let transaction = [];


                    $('.this-mount-income').text(formatRupiah(data.data.thisMountIncome))

                    $.map(data.data.transaction, function(elementOrValue, indexOrKey) {
                        transaction.push(parseInt(elementOrValue));
                    });
                    renderTransactionStatistic(data.data.months, transaction);
                } catch (error) {
                    console.error('Error fetching transaction statistics:', error);
                }
            }

            async function main() {
                await fetchTransactionStatistics();
            }
            main();

            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/courses",
                data: {
                    'order': 'best seller',
                    'limit': '2'
                },
                dataType: "json",
                success: function(response) {
                    const popularCourse = $('#popular-course');
                    response.data.data.forEach(course => {
                        popularCourse.append(`
                        <div class="col-md-6">
                            <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                                <button
                                    class="btn btn-sm btn-warning position-absolute ms-2 mt-2 text-dark">Development</button>
                                <img src="${course.photo}" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <span
                                                class="badge rounded-pill bg-light-warning text-warning fw-semibold mb-1">Premium</span>
                                        </div>
                                    </div>
                                    <p class="card-title fw-bolder">${course.title}</p>
                                    <p class="card-text">${course.sub_title}</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="fw-bolder" style="color: #7209DB">${formatRupiah(course.price)}
                                        </h4>

                                        <div class="d-flex align-items-center gap-1">
                                            <span class="text-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="mb-1" width="15" height="15" viewBox="0 0 24 24"
                                                    fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg></span>
                                            <p class="fs-3 mb-0">(4.5, Reviews)</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-2">
                                        <p class="text-muted "><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                                <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                                <path d="M9 8h6" />
                                            </svg>

                                            20 Materi
                                        </p>

                                        <p class="text-muted ">20 Terjual</p>
                                    </div>
                                    <div class=" pe-0">
                                        <a href="{{ route('courses.courses.show', '') }}/${course.slug}" class="btn text-white fs-2" style="background: #9425FE; width: 100%;">Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `)
                    });
                }
            });

            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/course-reviews-latest",
                dataType: "json",
                success: function(response) {
                    let reviews = '';
                    let latestReviewSection = $('#latest-review-section');
                    response.data.forEach(review => {
                        // Mengonversi created_at menjadi format tanggal yang diinginkan
                        let date = new Date(review.created_at);
                        let formattedDate = date.toLocaleDateString('id-ID', {
                            day: 'numeric',
                            month: 'short',
                            year: 'numeric'
                        });

                        let stars = '';
                        // Menambahkan bintang sesuai dengan nilai rating
                        for (let i = 0; i < review.rating; i++) {
                            stars += `
                                <span class="text-warning ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15" height="15" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                    </svg>
                                </span>
                            `;
                        }

                        reviews += `
                        <div class="mt-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-primary text-primary badge">${review.course.sub_category.name}</span>
                                <div class="d-flex align-items-center ms-2">
                                    ${stars}
                                </div>
                                <span class="fs-3 ms-auto">${formattedDate}</span>
                            </div>
                            <h6 class="mt-3">${review.user.name}</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so th...</span>
                            <div class="hstack gap-3 mt-3">
                                <h6 class="fs-semibold">${review.course.title}</h6>
                            </div>
                        </div>
                        `;
                    });

                    latestReviewSection.append(reviews);
                }
            });

            function renderTransactionStatistic(month, data) {
                var investments = {
                    series: [{
                        name: "Pendapatan",
                        data: data,
                    }, ],
                    chart: {
                        ffontFamily: "Plus Jakarta Sans', sans-serif",
                        foreColor: "#adb0bb",
                        height: 325,
                        type: "line",
                        toolbar: {
                            show: false,
                        },
                    },
                    legend: {
                        show: false,
                    },
                    stroke: {
                        width: 4,
                        curve: "smooth",
                    },
                    grid: {
                        borderColor: "transparent",
                    },
                    colors: ["#9425FE"],
                    markers: {
                        size: 0,
                    },
                    xaxis: {
                        type: 'category',
                        categories: month,
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false,
                        }
                    },
                    tooltip: {
                        theme: "dark",
                    },
                };
                new ApexCharts(document.querySelector("#investments"), investments).render();
            };
        });
    </script>


    <script>
        function get(page) {
            $('#tableBody').empty();
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/latest-transactions?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {

                    $('#latest-transactions').empty();

                    if (response.data.length > 0) {
                        $.each(response.data, function(index, value) {
                            $('#latest-transactions').append(latestTransaction(index, value));
                        });

                        $('#pagination').html(handlePaginate(response.data.paginate))

                    } else {
                        $('#latest-transactions').append(empty());
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
        }

        function latestTransaction(index, value) {
            var url = "{{ config('app.api_url') }}";
            return `
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="${value.user_photo && value.user_photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(value.user_photo) ? value.user_photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}"
                                class="rounded-circle" width="40" height="40">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">${value.user.name}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="mb-0 fw-semibold text-dark fs-4">${value.product.title}
                        </p>
                    </td>
                    <td>
                        ${value.payment_method}
                    </td>
                    <td>
                        ${value.fee_amount}
                    </td>
                    <td>
                        ${value.created_at}
                    </td>
                </tr>
                `;
        }

        get(1);
    </script>

    <script>
        $(document).ready(function() {
            $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/user-added",
                    dataType: "json",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    success: function(response) {

                        if (response.meta && response.meta.code === 200) {
                            var data = response.data;

                            // Mengambil data untuk grafik earning
                            var earningsData = [];
                            var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                                'Oct', 'Nov', 'Dec'
                            ];

                            // Mengonversi data menjadi array untuk grafik
                            months.forEach(function(month) {
                                earningsData.push(data[month] ||
                                0); // Mengambil nilai untuk setiap bulan atau 0 jika tidak ada
                            });

                            // Data untuk grafik earnings
                            var earning = {
                                chart: {
                                    id: "sparkline3",
                                    type: "area",
                                    height: 60,
                                    sparkline: {
                                        enabled: true,
                                    },
                                    group: "sparklines",
                                    fontFamily: "'Plus Jakarta Sans', sans-serif",
                                    foreColor: "#adb0bb",
                                },
                                series: [{
                                    name: "Pengguna",
                                    color: "var(--bs-secondary)",
                                    data: earningsData,
                                }, ],
                                stroke: {
                                    curve: "smooth",
                                    width: 2,
                                },
                                fill: {
                                    type: "gradient",
                                    gradient: {
                                        shadeIntensity: 0,
                                        inverseColors: false,
                                        opacityFrom: 0.15,
                                        opacityTo: 0,
                                        stops: [20, 180],
                                    },
                                    opacity: 0.5,
                                },
                                markers: {
                                    size: 0,
                                },
                                tooltip: {
                                    theme: "dark",
                                    fixed: {
                                        enabled: true,
                                        position: "right",
                                    },
                                    x: {
                                        show: false,
                                    },
                                },
                            };

                            // Render grafik earnings
                            new ApexCharts(document.querySelector("#earning-chart"), earning).render();

                        } else {
                            console.error("Error fetching data: ", response.meta.message);
                        }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data: ", error);
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Data tidak dapat dimuat.",
                        icon: "error",
                    });
                }
            });
        });
    </script>

<script>
    $(document).ready(function() {

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/dashboard-api",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                console.log("Response Data: ", response.data); // Memeriksa data
                $('.detail-blog_count_count').text(response.data.blog_count_count);
                $('.detail-course_count').text(response.data.course_count);
                $('.detail-course_voucher_count').text(response.data.course_voucher_count);
                $('.detail-event_count').text(response.data.event_count);
                $('.detail-sub_category_count').text(response.data.sub_category_count);

                $('.owl-carousel').trigger('refresh.owl.carousel');
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
</script>
@endpush
