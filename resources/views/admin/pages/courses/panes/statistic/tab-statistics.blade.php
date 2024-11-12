<div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card border border-1 shadow-none p-4 rounded-6">
                <h5 style="color: #000; font-weight: bold;">Statistik Pembelian Pada Kursus</h5>
                <p>Statistik Tahun ini</p>
                <h3 class="mb-5" id="total_revenue" style="font-weight: bold; color: #000;">Rp 400.000</h3>
                <div id="chart-line-zoomable"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border border-1 shadow-none p-3 position-relative">
                <div class="mt-2">
                    <h5 style="color: #2A3547;">Total Pembelian</h5>
                    <p>Total Pembelian pada kursus</p>
                    <h1 class="mt-3 total_purchases" style="font-weight: bold; color: #2A3547;">400</h1>
                </div>
                <div class="position-absolute top-2 end-0 d-flex align-items-center justify-content-center me-3"
                    style="background-color: #9425fe; border-radius: 30px; color: #fff; width: 40px; height: 40px;">
                    <i class="ti ti-currency-dollar fs-6"></i>
                </div>
                <div class="position-absolute bottom-0 end-0" style="padding: 0;">
                    <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description"
                        class="img-fluid" style="max-width: 100px; height: auto;">
                </div>
            </div>

            <div class="card border border-1 shadow-none position-relative">
                <div class="p-4 position-relative">
                    <div class="mt-3">
                        <h5 style="color: #2A3547;">Selesai Pengerjaan</h5>
                        <h1 class="completed" style="font-weight: bold; color: #2A3547;">3300</h1>
                    </div>
                    <div class="position-absolute top-0 end-0 d-flex align-items-center justify-content-center me-3 mt-5"
                        style="background-color: #9425fe; border-radius: 30px; color: #fff; width: 40px; height: 40px;">
                        <i class="ti ti-user fs-6"></i>
                    </div>
                </div>
                <div id="chart-line-zoomable-course"></div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-4">
            <div class="col-lg-12">
                <div class="card border border-1 shadow-none p-3 position-relative">
                    <div class="mt-2 position-relative">
                        <h6 class="mb-3" style="color: #2A3547;">Selesai Pengerjaan</h6>
                        <h3 style="font-weight: bold; color: #2A3547;">80 Soal</h3>
                        <div class="position-absolute top-0 end-0 d-flex align-items-center justify-content-center me-3 mb-10"
                            style="color: #9425fe; background-color: rgba(148, 37, 254, 0.2); border-radius: 25%; padding: 8px; width: 40px; height: 40px;">
                            <i class="ti ti-box-multiple fs-6"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card border border-1 shadow-none position-relative">
                            <div class="p-4 position-relative">
                                <h5 style="color: #2A3547; font-weight: bold">Pre-Test</h5>
                                <p>Rata-rata Nilai</p>
                                <h2 style="font-weight: bold; color: #2A3547;" class="pre_test_average">80.5</h2>
                            </div>
                            <div id="chart-line-zoomable-pre-test"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border border-1 shadow-none position-relative">
                            <div class="p-4 position-relative">
                                <h5 style="color: #2A3547; font-weight: bold">Post-Test</h5>
                                <p>Rata-rata Nilai</p>
                                <h2 style="font-weight: bold; color: #2A3547;" class="post_test_average">80.5</h2>
                            </div>
                            <div id="chart-line-zoomable-post-test"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border border-1 shadow-none p-4 position-relative">
                <div class="mt-2">
                    <h5 style="color: #2A3547;">Nilai Pengguna Kursus</h5>
                    <p>Rata-rata nilai</p>
                </div>
                <div id="chart-radial-basic"></div>
                <div class="mt-3 d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="ti ti-grid-dots fs-6"
                            style="color: #2a3547; background-color: rgba(42, 53, 71, 0.2); border-radius: 25%; padding: 8px;"></i>
                        <div class="ms-2">
                            <h4 style="margin: 0;">35%</h4>
                            <p style="margin: 0;">Belum Tercapai</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="ti ti-grid-dots fs-6"
                            style="color: #9425fe; background-color: rgba(148, 37, 254, 0.2); border-radius: 25%; padding: 8px;"></i>
                        <div class="ms-2">
                            <h4 style="margin: 0;">35%</h4>
                            <p style="margin: 0;">Tercapai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border border-1 shadow-none">
                <div class="card-body">
                    <h5 class="card-title mb-1">Review Kursus</h5>
                    <p class="card-text text-muted mb-3">Rating kursus yang diberikan pembeli</p>
                    <div class="d-flex align-items-baseline mb-2">
                        <h1 class="display-4 mb-0 me-2 average_rating">4.5</h1>
                        <div class="ms-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <p class="text-muted mb-3 rating_count">15 Penilaian</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="ratings-summary">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">5</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning percentRating5" role="progressbar" style="width: 70%"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2 rating5"></span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">4</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning percentRating4" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2 rating4"></span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">3</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning percentRating3" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2 rating3"></span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">2</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning percentRating2" role="progressbar" style="width: 0%"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2 rating2"></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">1</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning percentRating1" role="progressbar" style="width: 20%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2 rating1"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Data untuk grafik selesai pengerjaan
        var optionsZoomableCourse = {
            series: [{
                name: "Pengerjaan",
                data: [{
                    x: "2024-01-01",
                    y: 20
                }, {
                    x: "2024-02-01",
                    y: 40
                }, {
                    x: "2024-03-01",
                    y: 30
                }, {
                    x: "2024-04-01",
                    y: 50
                }, {
                    x: "2024-05-01",
                    y: 35
                }, {
                    x: "2024-06-01",
                    y: 45
                }, ],
            }],
            chart: {
                type: 'area',
                height: 110,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2,
                colors: ['#9425fe']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    gradientToColors: ['#f0e1ff'],
                    opacityFrom: 0.4,
                    opacityTo: 0,
                    stops: [0, 100],
                },
            },
            grid: {
                show: false
            },
            xaxis: {
                type: 'datetime',
                labels: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
            },
            yaxis: {
                show: false
            },
            tooltip: {
                enabled: false
            }
        };
        new ApexCharts(document.querySelector("#chart-line-zoomable-course"), optionsZoomableCourse).render();


    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        var id = "{{ $id }}";
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/course-statistic/" + id,
            dataType: "json",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            success: function(response) {
                $('#total_revenue').html(response.data.total_revenue);
                $('.total_purchases').html(response.data.total_purchases);
                $('.rating_count').html(response.data.rating_count);
                $('.average_rating').html(response.data.average_rating);
                $('.post_test_average').html(response.data.post_test_average);
                $('.pre_test_average').html(response.data.pre_test_average);
                $('.completed').html(response.data.completed);
                $('.rating1').html(response.data.ratings_distribution[1])
                $('.rating2').html(response.data.ratings_distribution[2])
                $('.rating3').html(response.data.ratings_distribution[3])
                $('.rating4').html(response.data.ratings_distribution[4])
                $('.rating5').html(response.data.ratings_distribution[5])

                $('.percentRating1')
                    .css('width', response.data.ratings_percentage_distribution[1] + '%')
                    .attr('aria-valuenow', response.data.ratings_percentage_distribution[1]);
                $('.percentRating2')
                    .css('width', response.data.ratings_percentage_distribution[2] + '%')
                    .attr('aria-valuenow', response.data.ratings_percentage_distribution[2]);

                $('.percentRating3')
                    .css('width', response.data.ratings_percentage_distribution[3] + '%')
                    .attr('aria-valuenow', response.data.ratings_percentage_distribution[3]);

                $('.percentRating4')
                    .css('width', response.data.ratings_percentage_distribution[4] + '%')
                    .attr('aria-valuenow', response.data.ratings_percentage_distribution[4]);

                $('.percentRating5')
                    .css('width', response.data.ratings_percentage_distribution[5] + '%')
                    .attr('aria-valuenow', response.data.ratings_percentage_distribution[5]);


                if (response.meta && response.meta.code === 200) {
                    var data = response.data;


                    var purchasesPerMonth = [{
                            month: "Januari",
                            value: data.transaction.january || 0
                        },
                        {
                            month: "Februari",
                            value: data.transaction.february || 0
                        },
                        {
                            month: "Maret",
                            value: data.transaction.march || 0
                        },
                        {
                            month: "April",
                            value: data.transaction.april || 0
                        },
                        {
                            month: "Mei",
                            value: data.transaction.may || 0
                        },
                        {
                            month: "Juni",
                            value: data.transaction.june || 0
                        },
                        {
                            month: "Juli",
                            value: data.transaction.july || 0
                        },
                        {
                            month: "Agustus",
                            value: data.transaction.august || 0
                        },
                        {
                            month: "September",
                            value: data.transaction.september || 0
                        },
                        {
                            month: "Oktober",
                            value: data.transaction.october || 0
                        },
                        {
                            month: "November",
                            value: data.transaction.november || 0
                        },
                        {
                            month: "Desember",
                            value: data.transaction.december || 0
                        },
                    ];

                    var seriesData = purchasesPerMonth.map(function(item) {
                        return {
                            x: item.month,
                            y: item.value
                        };

                    });

                    var optionsZoomable = {
                        series: [{
                            name: "Total Pembelian",
                            data: seriesData,
                        }],
                        chart: {
                            fontFamily: '"Nunito Sans", sans-serif',
                            type: "area",
                            height: 250,
                            zoom: {
                                enabled: true,
                                autoScaleYaxis: true,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        grid: {
                            borderColor: "transparent",
                        },
                        colors: ["#9425FE"],
                        markers: {
                            size: 0,
                            strokeWidth: 2,
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                        },
                        fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.12,
                                opacityTo: 0,
                                stops: [0, 90, 100],
                            },
                        },
                        yaxis: {
                            labels: {
                                formatter: val => val,
                                style: {
                                    colors: ["#000"],
                                },
                            },
                        },
                        xaxis: {
                            type: "category",
                            categories: purchasesPerMonth.map(item => item.month),
                            labels: {
                                style: {
                                    colors: ["#a1aab2"],
                                },
                            },
                        },
                        tooltip: {
                            theme: "dark",
                            shared: false,
                            y: {
                                formatter: val => val,
                            },
                        },
                    };

                    new ApexCharts(document.querySelector("#chart-line-zoomable"), optionsZoomable)
                        .render();


                    // Data untuk grafik pre-test
                    var preTestScores = data.pre_test_score_distribution || [0];

                    // Menangani satu titik data
                    var preTestData = preTestScores.length > 0 ?
                        preTestScores.map((score, index) => ({
                            x: index.toString(),
                            y: score
                        })) : [{
                            x: "0",
                            y: 0
                        }]; // Titik data default

                    if (preTestScores.length === 1) {
                        preTestData.push({
                            x: "1",
                            y: 0
                        }); // Menambahkan titik kedua untuk memastikan grafik dirender
                    }

                    var optionsZoomablePreTest = {
                        series: [{
                            name: "Pretest",
                            data: preTestData,
                        }],
                        chart: {
                            type: 'area',
                            height: 80,
                            zoom: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                            colors: ['#9425fe'],
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'light',
                                gradientToColors: ['#f0e1ff'],
                                opacityFrom: 0.4,
                                opacityTo: 0,
                                stops: [0, 100],
                            },
                        },
                        grid: {
                            show: false,
                        },
                        xaxis: {
                            type: 'category',
                            labels: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                        },
                        yaxis: {
                            show: false,
                        },
                        tooltip: {
                            enabled: true,
                        },
                    };

                    new ApexCharts(document.querySelector("#chart-line-zoomable-pre-test"),
                        optionsZoomablePreTest).render();

                    // Fetch statistik post-test
                    var postTestScores = data.post_test_score_distribution || [];

                    // Menangani satu titik data
                    var postTestData = postTestScores.length > 0 ?
                        postTestScores.map((score, index) => ({
                            x: index.toString(),
                            y: score
                        })) : [{
                            x: "0",
                            y: 0
                        }]; // Titik data default

                    if (postTestScores.length === 1) {
                        postTestData.push({
                            x: "1",
                            y: 0
                        }); // Menambahkan titik kedua untuk memastikan grafik dirender
                    }

                    // Data untuk grafik post-test
                    var optionsZoomablePostTest = {
                        series: [{
                            name: "Posttest",
                            data: postTestData,
                        }],
                        chart: {
                            type: 'area',
                            height: 80,
                            zoom: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                            colors: ['#9425fe'],
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'light',
                                gradientToColors: ['#f0e1ff'],
                                opacityFrom: 0.4,
                                opacityTo: 0,
                                stops: [0, 100],
                            },
                        },
                        grid: {
                            show: false,
                        },
                        xaxis: {
                            type: 'category', // Menggunakan category untuk sumbu X
                            labels: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                        },
                        yaxis: {
                            show: false,
                        },
                        tooltip: {
                            enabled: true,
                        }
                    };

                    new ApexCharts(document.querySelector("#chart-line-zoomable-post-test"),
                        optionsZoomablePostTest).render();


                    // Ambil nilai dari score_average
                    var scoreAverage = parseFloat(data.score_average) ||
                    0; // Menggunakan 0 sebagai default jika tidak ada

                    // Data untuk grafik radial
                    var optionsBasic = {
                        series: [
                        scoreAverage], // Menggunakan nilai rata-rata dari score_average
                        chart: {
                            fontFamily: '"Nunito Sans", sans-serif',
                            height: 230,
                            type: "radialBar",
                        },
                        colors: ["#9425fe"],
                        plotOptions: {
                            radialBar: {
                                hollow: {
                                    size: "60%"
                                },
                                dataLabels: {
                                    value: {
                                        color: "#a1aab2",
                                        show: true
                                    },
                                },
                            },
                        },
                        labels: ["Rata-Rata Nilai"],
                    };

                    // Render grafik radial
                    new ApexCharts(document.querySelector("#chart-radial-basic"), optionsBasic)
                        .render();

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
