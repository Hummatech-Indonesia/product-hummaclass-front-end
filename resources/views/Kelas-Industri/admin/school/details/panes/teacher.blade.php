<div class="tab-pane fade" id="teachers" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card text-center">
                <img src="{{ asset('assets/img/card/card-banner.png') }}"
                    class="rounded-1 img-fluid position-absolute" style="z-index: 1; width: 100%">
                <div class="card-body p-2">
                    <div class="mt-4" class="" style="position: relative; z-index: 2;">
                        <div style="width: 5rem;" class="m-auto">
                            <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}"
                                class="img-fluid rounded-circle"
                                style="z-index: 2; background-color: grey; aspect-ratio: 1/1;object-fit:cover" />
                        </div>
                        <h3 class="card-title mt-3">Matt Carlson</h3>
                        <h6 class="card-subtitle">San Francisco, CA</h6>
                    </div>

                    {{-- buttons --}}
                    <div class="col-md-12 d-flex justify-content-between gap-2 mt-3">
                        <a href="http://127.0.0.1:8001/admin/courses/lorem-ipsum" class="btn text-white fs-2"
                            style="background: #9425FE; width: 55%;">Lihat Detail</a>
                        <a href="/admin/courses/lorem-ipsum/edit" class="btn btn-sm btn-warning" style="width: 15%">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                viewBox="0 0 48 48">
                                <path fill="currentColor"
                                    d="M32.206 6.025a6.907 6.907 0 1 1 9.768 9.767L39.77 18L30 8.23zM28.233 10L8.038 30.197a6 6 0 0 0-1.572 2.758L4.039 42.44a1.25 1.25 0 0 0 1.52 1.52l9.487-2.424a6 6 0 0 0 2.76-1.572l20.195-20.198z">
                                </path>
                            </svg>
                        </a>

                        <button data-id="78216ca2-d422-3c8b-bcc2-60945b4eb294"
                            class="btn btn-sm btn-danger text-white btn-delete" style="width: 15%"
                            fdprocessedid="athmbv">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 7l16 0"></path>
                                <path d="M10 11l0 6"></path>
                                <path d="M14 11l0 6"></path>
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>