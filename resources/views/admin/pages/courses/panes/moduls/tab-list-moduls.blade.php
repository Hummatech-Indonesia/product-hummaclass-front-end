<div class="row">
    @for ($i = 1; $i <= 3; $i++) <div class="col-md-12">
        <div class="card position-relative">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="p-2" style="left: 0;top:5%;background:linear-gradient(to right,#FFA41C, #FFD08A); border-radius:0 8px 8px 0;width:200px">
                    <span class="text-white" style="font-weight: bold;">Step ke
                        {{ $i }}</span>
                </div>
                <div class="d-flex gap-2 pe-4">
                    <a href="{{ route('admin.modules.show', 2) }}" class="btn text-white" style="background-color: var(--purple-primary)">
                        Lihat Modul
                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-1" width="17" height="17" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M3 13c3.6-8 14.4-8 18 0" />
                                <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                            </g>
                        </svg> </a>
                    <i class="ti ti-settings text-warning fs-7 mt-1"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 border-end">
                        <h5 style="font-weight: bold;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                <path d="M9 8h6" />
                            </svg>
                            Belajar Dasar Pemrograman Web
                        </h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A provident ab cum illo nisi
                            inventore vel perspiciatis enim minus. Earum provident excepturi dicta quidem
                            perspiciatis
                            porro cum at praesentium accusamus!</p>

                    </div>
                    <div class="col-lg-4">
                        <div class="p-1">
                            <h5 class="fw-semibold">Meliputi</h5>
                            <div class="row">
                                @foreach (range(1,3) as $item)
                                <div class="col-lg-6 mb-2">
                                    <div class="btn btn-light-warning text-warning w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                            <path d="M9 8h6" />
                                        </svg><span class="text-dark ms-2" style="font-weight: bold;">8 Materi</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endfor
</div>
