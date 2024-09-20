<div class="card position-relative">
    <div class="badge badge-warning position-absolute text-dark p-2 shadow"
        style="font-weight:bold;top: 10px; left: 10px;background-color:#FFC224;" id="sub_category">
    </div>
    <div class="d-flex">
        <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="" class="rounded">
        <div class="align-items-start p-3">

            <h4 style="font-weight: bold;" class="my-3" id="title"></h4>
            <p id="sub_title"></p>

            <div class="d-flex" style="align-items: center;">
                <h3 style="font-weight: bold; margin: 0;" class="text-primary" id="price">
                    <span class="text-dark fw-normal"></span>
                </h3>
                <span class="fs-4 ms-2" style="color: #7F7E97">/</span>
                <span style="display: flex; align-items: center; margin-left: 5px;">
                    <svg class="text-warning" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 24 24" fill="currentColor"
                        class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                    </svg>
                    <span class="fs-3 ms-2" style="color: #7F7E97">(4.8 Reviews)</span>
                </span>
            </div>

            <div class="row mt-3">
                <div class="col-4">
                    <div>
                        <span class="badge bg-light-warning text-warning px-5"><svg class="me-1 mb-1"
                                xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                <path d="M9 8h6" />
                            </svg><span class="text-dark" style="font-weight: bold;"> <span id="modules_count"></span>
                                Materi</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="p-3">
        <h3 style="font-weight: bold;">Deskripsi</h3>
        <hr>
        {{-- <h4 style="font-weight: bold;" id="card-title">Course Description</h4> --}}
        <p id="description"></p>
    </div>
</div>
