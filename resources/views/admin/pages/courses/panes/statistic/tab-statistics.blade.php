<div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card border border-1 shadow-none p-4 rounded-6">
                <h5 style="color: #000; font-weight: bold;">Statistik Pembelian Pada Kursus</h5>
                <p>Statistik Tahun ini</p>
                <h3 class="mb-5" style="font-weight: bold; color: #000;">Rp 400.000</h3>
                <div id="chart-line-zoomable"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border border-1 shadow-none p-3 position-relative">
                <div class="mt-2">
                    <h5 style="color: #2A3547;">Total Pembelian</h5>
                    <p>Total Pembelian pada kursus</p>
                    <h1 class="mt-3" style="font-weight: bold; color: #2A3547;">400</h1>
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
                        <h1 style="font-weight: bold; color: #2A3547;">3300</h1>
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
                                <h2 style="font-weight: bold; color: #2A3547;">80.5</h2>
                            </div>
                            <div id="chart-line-zoomable-pre-test"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border border-1 shadow-none position-relative">
                            <div class="p-4 position-relative">
                                <h5 style="color: #2A3547; font-weight: bold">Pre-Test</h5>
                                <p>Rata-rata Nilai</p>
                                <h2 style="font-weight: bold; color: #2A3547;">80.5</h2>
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
                    <h5 style="color: #2A3547;">Total Pembelian</h5>
                    <p>Total Pembelian pada kursus</p>
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
                        <h1 class="display-4 mb-0 me-2">4.5</h1>
                        <div class="ms-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <p class="text-muted mb-3">15 Penilaian</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="ratings-summary">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">5</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2">7</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">4</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2">3</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">3</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2">3</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">2</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2">0</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">1</span>
                            <div class="progress w-100">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-2">2</span>
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
        // Data untuk grafik pembelian
        var optionsZoomable = {
            series: [{
                name: "XYZ MOTORS",
                data: [
                    {x: "02-10-2017 GMT", y: 34},
                    {x: "02-11-2017 GMT", y: 43},
                    {x: "02-12-2017 GMT", y: 31},
                    {x: "02-13-2017 GMT", y: 43},
                    {x: "02-14-2017 GMT", y: 33},
                    {x: "02-15-2017 GMT", y: 52},
                ],
            }],
            chart: {
                fontFamily: '"Nunito Sans", sans-serif',
                type: "area",
                height: 250,
                zoom: {enabled: true, autoScaleYaxis: true},
                toolbar: {show: false},
            },
            dataLabels: {enabled: false},
            grid: {borderColor: "transparent"},
            colors: ["#9425fe"],
            markers: {size: 0},
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
                    style: {colors: ["#000"]},
                },
            },
            xaxis: {
                type: "datetime",
                labels: {style: {colors: ["#a1aab2"]}},
            },
            tooltip: {
                theme: "dark",
                shared: false,
                y: {formatter: val => val},
            }
        };
        new ApexCharts(document.querySelector("#chart-line-zoomable"), optionsZoomable).render();

        // Data untuk grafik selesai pengerjaan
        var optionsZoomableCourse = {
            series: [{
                name: "Pengerjaan",
                data: [
                    {x: "2024-01-01", y: 20},
                    {x: "2024-02-01", y: 40},
                    {x: "2024-03-01", y: 30},
                    {x: "2024-04-01", y: 50},
                    {x: "2024-05-01", y: 35},
                    {x: "2024-06-01", y: 45},
                ],
            }],
            chart: {
                type: 'area',
                height: 110,
                zoom: {enabled: false},
                toolbar: {show: false},
            },
            dataLabels: {enabled: false},
            stroke: {curve: 'smooth', width: 2, colors: ['#9425fe']},
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
            grid: {show: false},
            xaxis: {
                type: 'datetime',
                labels: {show: false},
                axisBorder: {show: false},
                axisTicks: {show: false},
            },
            yaxis: {show: false},
            tooltip: {enabled: false}
        };
        new ApexCharts(document.querySelector("#chart-line-zoomable-course"), optionsZoomableCourse).render();

        // Data untuk grafik pretest
        var optionsZoomablePreTest = {
            series: [{
                name: "Pretest",
                data: [
                    {x: "2024-01-01", y: 20},
                    {x: "2024-02-01", y: 40},
                    {x: "2024-03-01", y: 30},
                    {x: "2024-04-01", y: 50},
                    {x: "2024-05-01", y: 35},
                    {x: "2024-06-01", y: 45},
                ],
            }],
            chart: {
                type: 'area',
                height: 80,
                zoom: {enabled: false},
                toolbar: {show: false},
            },
            dataLabels: {enabled: false},
            stroke: {curve: 'smooth', width: 2, colors: ['#9425fe']},
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
            grid: {show: false},
            xaxis: {
                type: 'datetime',
                labels: {show: false},
                axisBorder: {show: false},
                axisTicks: {show: false},
            },
            yaxis: {show: false},
            tooltip: {enabled: false}
        };
        new ApexCharts(document.querySelector("#chart-line-zoomable-pre-test"), optionsZoomablePreTest).render();

        // Data unruk grafik posttest
        var optionsZoomablePostTest = {
            series: [{
                name: "Pretest",
                data: [
                    {x: "2024-01-01", y: 20},
                    {x: "2024-02-01", y: 40},
                    {x: "2024-03-01", y: 30},
                    {x: "2024-04-01", y: 50},
                    {x: "2024-05-01", y: 35},
                    {x: "2024-06-01", y: 45},
                ],
            }],
            chart: {
                type: 'area',
                height: 80,
                zoom: {enabled: false},
                toolbar: {show: false},
            },
            dataLabels: {enabled: false},
            stroke: {curve: 'smooth', width: 2, colors: ['#9425fe']},
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
            grid: {show: false},
            xaxis: {
                type: 'datetime',
                labels: {show: false},
                axisBorder: {show: false},
                axisTicks: {show: false},
            },
            yaxis: {show: false},
            tooltip: {enabled: false}
        };
        new ApexCharts(document.querySelector("#chart-line-zoomable-post-test"), optionsZoomablePostTest).render();

        // Data untuk grafik radial
        var optionsBasic = {
            series: [74],
            chart: {
                fontFamily: '"Nunito Sans", sans-serif',
                height: 230,
                type: "radialBar",
            },
            colors: ["#9425fe"],
            plotOptions: {
                radialBar: {
                    hollow: {size: "60%"},
                    dataLabels: {
                        value: {color: "#a1aab2", show: true},
                    },
                },
            },
            labels: ["Rata-Rata Nilai"],
        };
        new ApexCharts(document.querySelector("#chart-radial-basic"), optionsBasic).render();
    });
</script>