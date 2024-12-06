<div class="card border">
    <div class="card-body p-3">
        <h5 class="fw-semibold mb-3"><b>Daftar Siswa Pada Ujian</b></h5>
        <div class="row g-3 mb-3">
            <div class="col-12 col-md-6 col-lg-4">
                <input type="text" class="form-control rounded-3" id="placeholder" placeholder="Cari...">
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <select class="form-select rounded-3" id="preTestSelect">
                    <option selected disabled>Pre Test</option>
                    <option value="1">Post Test</option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <select class="form-select rounded-3" id="statusSelect">
                    <option selected disabled>Semua Status</option>
                    <option value="1">Sudah Dinilai</option>
                </select>
            </div>
        </div>

        <div class="table-responsive rounded-2 mb-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Nama Siswa</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Kelas</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0 text-center">Soal Benar</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0 text-center">Soal Salah</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0 text-center">Status</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0 text-center">Nilai</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0 text-center">Aksi</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (range(1, 4) as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin/dist/images/profile/user-10.jpg') }}"
                                        class="rounded-circle" width="40" height="40" />
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">Ahmad Lukman Hakim</h6>
                                        <span class="fw-normal">X RPL 1</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6 class="fw-normal mb-0">X RPL B</h6>
                            </td>
                            <td class="text-center">
                                <span class="mb-1 badge font-medium bg-light-success text-success px-4">7</span>
                            </td>
                            <td class="text-center">
                                <span class="mb-1 badge font-medium bg-light-danger text-danger px-4">24</span>
                            </td>
                            <td class="text-center">
                                <span class="mb-1 badge font-medium bg-light-success text-success">Sudah Dinilai</span>
                            </td>
                            <td class="text-center">
                                <span class="mb-1 badge font-medium bg-light-primary text-primary px-4">88</span>
                            </td>
                            <td class="text-center">
                                <button class="btn mb-1 waves-effect waves-light btn-danger" type="button">Reset</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
