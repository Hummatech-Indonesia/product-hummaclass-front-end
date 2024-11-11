<div class="tab-pane fade show active" id="classrooms" role="tabpanel" aria-labelledby="overview-tab"
            tabindex="0">
            <div class="row">
                <div class="col-3">
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
                                <button class="btn border-warning rounded-pill mb-3">Terapkan</button>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="" id=""
                                        value="option2" />
                                    <label class="form-check-label" for="">second</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center">
                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="School Logo"
                                        class="img-fluid rounded-circle mb-2" width="80">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">Suyadi</h5>
                                    <span class="">Wali Kelas -----</span>
                                </div>
                            </div>
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
            </div>
        </div>