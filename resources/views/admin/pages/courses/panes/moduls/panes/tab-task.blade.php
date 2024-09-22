<div class="row">
    @foreach (range(1, 7) as $item)
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex justify-content-between mb-3">
                    <span class="fw-semibold" style="color: var(--purple-primary)">Step Ke-1</span>
                    <div class="d-flex gap-2 align-items-center">
                        <a class="text-warning" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28">
                                <path fill="currentColor"
                                    d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                            </svg>
                        </a>
                        <a style="color: #DB0909;">
                            <i class="ti ti-trash fs-7"></i>
                        </a>
                    </div>
                </div>

                <h5 class="text-dark me-1 fw-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="mb-1"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                        <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                        <path d="M9 8h6" />
                    </svg>
                    Belajar Dasar Pemrograman Web
                </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex commodi inventore fugiat, accusantium
                    totam?</p>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-light" style="color: var(--purple-primary)">
                        20+ Points
                    </button>
                    <a href="{{ route('admin.detail-task.blade.php') }}" class="btn text-white d-flex align-items-center"
                        style="background-color: var(--purple-primary)">
                        Lihat Tugas
                        <i class="ti ti-arrow-right fs-5 ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
