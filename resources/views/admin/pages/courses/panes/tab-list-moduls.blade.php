<div class="row">
    @for ($i = 1; $i <= 3; $i++)
        <div class="col-md-4">
            <div class="card position-relative">
                <div class="d-flex justify-content-between align-items-center my-3">
                    <div class="p-2"
                        style="left: 0;top:5%;background:linear-gradient(to right,#FFA41C, #FFD08A); border-radius:0 8px 8px 0;width:200px">
                        <span class="text-white" style="font-weight: bold;">Step ke
                            {{ $i }}</span>
                    </div>
                    <div class="d-flex gap-2 position-absolute" style="right: 5%;">
                        <div class="text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" />
                            </svg>
                        </div>
                        <div class="text-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 style="font-weight: bold;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                            <path d="M9 8h6" />
                        </svg> Belajar Dasar Pemrograman Web</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A provident ab cum illo nisi
                        inventore vel perspiciatis enim minus. Earum provident excepturi dicta quidem
                        perspiciatis
                        porro cum at praesentium accusamus!</p>
                    <div
                        class="btn d-flex btn-light-warning w-100 d-block text-warning font-medium mt-3 d-flex justify-content-start align-items-center">
                        <span class="badge text-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                <path d="M9 8h6" />
                            </svg><span class="text-dark" style="font-weight: bold;"> 8 Materi</span></span>
                    </div>
                    <a href="{{ route('admin.modules.show', 2) }}"
                        class="btn btn-primary mt-3 w-100 d-flex align-items-center justify-content-center">Lihat
                        Materi <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg></a>
                </div>
            </div>
        </div>
    @endfor
</div>