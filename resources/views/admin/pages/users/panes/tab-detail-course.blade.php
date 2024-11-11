    <div class="mt-2 mb-3">
        <h4 class="fw-semibold">Daftar Kursus Dibeli</h4>
        <div class="d-flex gap-3">
            <form action="" class="d-flex gap-2">
                <div class="position-relative">
                    <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff"
                        name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                        style="color: #8B8B8B"></i>
                </div>
                <div class="position-relative">
                    <input type="text" class="form-control product-search px-1 ps-5" style="background-color: #fff"
                        name="name" value="{{ old('name', request('name')) }}" id="input-filter"
                        placeholder="Terbaru">
                    <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                        <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M32 144h448M112 256h288M208 368h96" />
                    </svg>
                </div>
            </form>
        </div>
    </div>

    <div class="row" id="course-user">
        @forelse (range(1,1) as $item)
            <div class="col-lg-3">
                <div class="card">
                    <button class="btn btn-sm btn-warning position-absolute ms-2 mt-2 text-dark">Development</button>
                    <img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">

                        <div class="d-flex align-items-center  gap-2"><img class="rounded-circle"
                                src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                style="width: 30px"><span>David Miliar</span></div>

                        <p class="card-title fw-bolder mt-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates.</p>

                        <div>
                            <div class="d-flex justify-content-between">
                                <p>PROGRESS</p>
                                <P>88%</P>
                            </div>
                            <div class="progress mb-3" style="height: 10px;background-color: #EBEBEB;">
                                <div class="progress-bar bg-success" style="width: 80%" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-muted fs-3 mt-2"><svg class="mb-1" xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                    <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                    <path d="M9 8h6" />
                                </svg>
                                <span class="text-black fs-3 mt-1">
                                    2 Materi
                                </span>
                            </p>

                            <a href="{{ route('admin.courses.show', 2) }}" class="btn text-white fs-2"
                                style="background: var(--purple-primary);">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>

    