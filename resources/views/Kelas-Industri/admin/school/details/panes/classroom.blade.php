<div class="tab-pane fade show active" id="classrooms" role="tabpanel" aria-labelledby="overview-tab"
            tabindex="0">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="sidebar d-flex flex-column">
                                <h5>Daftar Kelas</h5>
                                <p>Daftar kelas industri pada sekolah</p>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="classroom_search"
                                        id="classroom_search" aria-describedby="helpId" placeholder="Cari" />
                                </div>
                                <h5>Filter Kelas</h5>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" type="checkbox" id="class1" value="option2" />
                                    <label class="form-check-label" for="class1">X RPL 1</label>
                                </div>
                                <button class="btn border-warning mb-3" style="border-radius: 15px;">Terapkan</button>

                                <ul>
                                    <li>
                                        <div class="form-check form-check-inline sidebar-link filter-option">
                                            <input class="form-check-input filter-radio" type="radio" name="filter" id="option1" value="option1" />
                                            <label class="form-check-label filter-label" for="option1">
                                                <div class="d-flex">
                                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-circle me-1" style="font-size: 7px;margin-top: 6px;"></i>
                                                    </div>
                                                    Option 1
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-inline sidebar-link filter-option">
                                            <input class="form-check-input filter-radio" type="radio" name="filter" id="option2" value="option2" />
                                            <label class="form-check-label filter-label" for="option2">
                                                <div class="d-flex">
                                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-circle me-1" style="font-size: 7px;margin-top: 6px;"></i>
                                                    </div>
                                                    Option 2
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-inline sidebar-link filter-option">
                                            <input class="form-check-input filter-radio" type="radio" name="filter" id="option3" value="option3" />
                                            <label class="form-check-label filter-label" for="option3">
                                                <div class="d-flex">
                                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-circle me-1" style="font-size: 7px;margin-top: 6px;"></i>
                                                    </div>
                                                    Option 3
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-inline sidebar-link filter-option">
                                            <input class="form-check-input filter-radio" type="radio" name="filter" id="option4" value="option4" />
                                            <label class="form-check-label filter-label" for="option4">
                                                <div class="d-flex">
                                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-circle me-1" style="font-size: 7px;margin-top: 6px;"></i>
                                                    </div>
                                                    Option 4
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="fw-semibold">Detail Kelas - XII RPL 1</h5>
                        <div>
                            <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#modal-edit-class">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 28 28"><path fill="white" d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z"/></svg>
                                <span class="ms-1">Edit Kelas</span>
                            </button>
                        </div>
                    </div>
                    <div class="card position-relative border-1">
                        <div class="card-body p-2">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center" style="z-index: 1;">
                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="School Logo"
                                        class="img-fluid rounded-circle mb-2" width="80">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">Suyadi</h5>
                                    <span class="">Wali Kelas -----</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                            <img src="{{ asset('admin/assets/images/background/bubble-right.png') }}" alt="Description" class="img-fluid" style="max-width: 85px; height: auto;">
                        </div>
                        <div class="position-absolute bottom-0 start-0" style="padding: 0px;">
                            <img src="{{ asset('admin/assets/images/background/bubble-left.png') }}" alt="Description" class="img-fluid" style="max-width: 85px; height: auto;">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Siswa</h5>
                            <div class="table-responsive rounded-2 mb-4 mt-4">
                                <table class="table border text-nowrap customize-table mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr class="">
                                            <th class="fs-4 fw-semibold mb-0">Nama Siswa</th>
                                            <th class="fs-4 fw-semibold mb-0">Jenis Kelamin</th>
                                            <th class="fs-4 fw-semibold mb-0">NISN</th>
                                            <th class="fs-4 fw-semibold mb-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-user-classroom">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-9 col-md-12">
                    <h5 class="fw-semibold mb-3">Detail Kelas - XII RPL 1</h5>
                    <div class="d-flex justify-content-center align-items-center mt-5 pt-5">
                        <div>
                            <div class="text-center">
                                <img src="{{ asset('admin/assets/images/background/cloud-class.png') }}" style="width: 160px;" alt="">
                            </div>
                            <h6 class="fw-semibold text-center">Siswa Belum Ditambahkan</h6>
                            <div class="d-flex gap-1">
                                <button class="btn text-white btn-sm px-4" style="background-color: #9425FE" data-bs-toggle="modal"
                                data-bs-target="#modal-set-class">Atur Kelas</button>
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#import-student">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M13.586 2a2 2 0 0 1 1.284.467l.13.119L19.414 7a2 2 0 0 1 .578 1.238l.008.176V20a2 2 0 0 1-1.85 1.995L18 22h-6v-2h6V10h-4.5a1.5 1.5 0 0 1-1.493-1.356L12 8.5V4H6v8H4V4a2 2 0 0 1 1.85-1.995L6 2zM7.707 14.465l2.829 2.828a1 1 0 0 1 0 1.414l-2.829 2.828a1 1 0 1 1-1.414-1.414L7.414 19H3a1 1 0 1 1 0-2h4.414l-1.121-1.121a1 1 0 1 1 1.414-1.415ZM14 4.414V8h3.586z"/></g></svg>
                                    Import Siswa
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>