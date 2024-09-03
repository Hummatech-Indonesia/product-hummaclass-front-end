<div class="card">
    <button class="btn btn-sm btn-warning position-absolute ms-2 mt-2">Development</button>
    <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body p-3">

        <div class="d-flex align-items-center gap-2"><img src="{{ asset('assets/img/logo/preloader.svg') }}" alt=""
                style="width: 30px"><span class="text-secondary">{{ $author }}</span></div>

        <p class="card-title fw-bolder">{{ $title }}</p>
        <p class="card-text">{{ $subtitle }}</p>

        <div class="d-flex align-items-center justify-content-between">
            <h4 class="fw-bolder fs-5" style="color: #7209DB">Rp. {{ number_format($price, 0, ',', '.') }}</h4>

            <div class="d-flex align-items-center gap-1">
                <span class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24" fill="currentColor"
                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                    </svg></span>
                <p class="fs-2 mb-0">({{ $review }}, Reviews)</p>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between">
            <p class="text-muted fs-3"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                    <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                    <path d="M9 8h6" />
                </svg>

                {{ $modules }} Materi
            </p>

            <p class="text-muted fs-3">{{ $sold }} Terjual</p>
        </div>

        <div class="row">

            <div class="col col-md-7 pe-0">
                <a href="#" class="btn text-white fs-2" style="background: #7209DB; width: 100%;">Lihat Detail</a>
            </div>

            <div class="col col-md-5 d-flex flex-direction-row pe-0 gap-2">

                <a href="#" class="btn btn-sm btn-warning fs-1"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg></a>

                <a href="#" class="btn btn-sm btn-danger text-white fs-1"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 7l16 0" />
                        <path d="M10 11l0 6" />
                        <path d="M14 11l0 6" />
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg></a>

            </div>
        </div>
    </div>
</div>


<style scoped>
    .card-text {
        display: -webkit-box;
        /* Gunakan Flexbox versi lama untuk mendukung multi-line ellipsis */
        -webkit-box-orient: vertical;
        /* Atur orientasi menjadi vertikal */
        -webkit-line-clamp: 2;
        /* Batasi jumlah baris menjadi 2 */
        overflow: hidden;
        /* Sembunyikan teks yang melebihi batas */
        text-overflow: ellipsis;
        /* Tambahkan ellipsis (...) pada teks yang terpotong */
        max-height: calc(1.2em * 2);
        /* Sesuaikan dengan jumlah baris yang diinginkan */
        line-height: 1.2em;
    }
</style>
