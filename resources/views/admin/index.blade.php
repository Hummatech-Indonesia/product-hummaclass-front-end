@extends('admin.layouts.app')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="owl-carousel counter-carousel owl-theme">
            <div class="item">
                <div class="card border-0 zoom-in">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="bg-light-primary rounded-2 d-flex align-items-center justify-content-center"
                                style="height: 70px; width: 70px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M24 30H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16.618l-5-2.5l-5 2.5V4H8v24h16v-4h2v4a2.003 2.003 0 0 1-2 2m-3-14.118l3 1.5V4h-6v13.382Z" />
                                </svg>
                            </div>
                            <p class="fw-semibold fs-3 mb-1">Jumlah Kursus</p>
                            <h5 class="fw-semibold mb-0">96</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-warning shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg"
                                width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-warning mb-1">Clients</p>
                            <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-info shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg"
                                width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-info mb-1">Projects</p>
                            <h5 class="fw-semibold text-info mb-0">356</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-danger shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-favorites.svg"
                                width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-danger mb-1">Events</p>
                            <h5 class="fw-semibold text-danger mb-0">696</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-success shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-speech-bubble.svg"
                                width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-success mb-1">Payroll</p>
                            <h5 class="fw-semibold text-success mb-0">$96k</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-info shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg"
                                width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-info mb-1">Reports</p>
                            <h5 class="fw-semibold text-info mb-0">59</h5>
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
                                <h3 class="fw-semibold">Rp 22.515.000</h3>
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
                                        <h4 class="fw-semibold mb-3">Rp 2.000.358</h4>
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
                            <div id="earning"></div>
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
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                                <button
                                    class="btn btn-sm btn-warning position-absolute ms-2 mt-2 text-dark">Development</button>
                                <img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <span
                                                class="badge rounded-pill bg-light-warning text-warning fw-semibold mb-1">Premium</span>
                                        </div>
                                    </div>
                                    <p class="card-title fw-bolder">Learning JavaScript With
                                        Imagination</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                        orci orci,
                                        placerat....</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="fw-bolder" style="color: #7209DB">Rp. 100.000
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
                                        <a class="btn text-white fs-2" style="background: #815FB4; width: 100%;">Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                                <button
                                    class="btn btn-sm btn-warning position-absolute ms-2 mt-2 text-dark">Development</button>
                                <img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <span
                                                class="badge rounded-pill bg-light-warning text-warning fw-semibold mb-1">Premium</span>
                                        </div>
                                    </div>
                                    <p class="card-title fw-bolder">Learning JavaScript With
                                        Imagination</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                        orci orci,
                                        placerat....</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="fw-bolder" style="color: #7209DB">Rp. 100.000
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
                                        <a class="btn text-white fs-2" style="background: #815FB4; width: 100%;">Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Review Terbaru</h5>
                            <p class="card-subtitle">Komentar Terbaru</p>
                            <div class="mt-4 pb-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <span class="bg-light-primary text-primary badge">Development</span>
                                    <span class="text-warning ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                            height="15" viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                            height="15" viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                            height="15" viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                            height="15" viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                            height="15" viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                        </svg> 
                                    </span>
                                    <span class="fs-3 ms-auto">8 March 2020</span>
                                </div>
                                <h6 class="mt-3">Arif Softcompound</h6>
                                <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                    th...</span>
                                <div class="hstack gap-3 mt-3">
                                    <h6 class="fs-semibold">Learning JavaScript With Imagination...</h6>
                                </div>
                            </div>
                            <div class="mt-4 pb-3 border-bottom">
                              <div class="d-flex align-items-center">
                                  <span class="bg-light-primary text-primary badge">Development</span>
                                  <span class="text-warning ms-2">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                          height="15" viewBox="0 0 24 24" fill="currentColor"
                                          class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                          <path
                                              d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                          height="15" viewBox="0 0 24 24" fill="currentColor"
                                          class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                          <path
                                              d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                          height="15" viewBox="0 0 24 24" fill="currentColor"
                                          class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                          <path
                                              d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                          height="15" viewBox="0 0 24 24" fill="currentColor"
                                          class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                          <path
                                              d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                          height="15" viewBox="0 0 24 24" fill="currentColor"
                                          class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                          <path
                                              d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                      </svg> 
                                  </span>
                                  <span class="fs-3 ms-auto">8 March 2020</span>
                              </div>
                              <h6 class="mt-3">Arif Softcompound</h6>
                              <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                  th...</span>
                              <div class="hstack gap-3 mt-3">
                                  <h6 class="fs-semibold">Learning JavaScript With Imagination...</h6>
                              </div>
                          </div>
                          <div class="mt-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-primary text-primary badge">Development</span>
                                <span class="text-warning ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                        height="15" viewBox="0 0 24 24" fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                        height="15" viewBox="0 0 24 24" fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                        height="15" viewBox="0 0 24 24" fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                        height="15" viewBox="0 0 24 24" fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15"
                                        height="15" viewBox="0 0 24 24" fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                    </svg> 
                                </span>
                                <span class="fs-3 ms-auto">8 March 2020</span>
                            </div>
                            <h6 class="mt-3">Arif Softcompound</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                th...</span>
                            <div class="hstack gap-3 mt-3">
                                <h6 class="fs-semibold">Learning JavaScript With Imagination...</h6>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            var investments = {
                series: [{
                    name: "Pendapatan",
                    data: [3500, 1000, 4000, 2500, 3500, 1500, 2500, 1900, 3500, 2000, 4500],
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
                    categories: [
                        "Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sept", "Oct", "Nov"
                    ],
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
        });
    </script>
@endsection
