<h5 class="fw-semibold mb-3"><b>Detail Kelas - XII RPL 1</b></h5>
                    <div class="card border">
                        <div class="card-body p-3">
                            <h5 class="fw-semibold mb-3"><b>Daftar Siswa</b></h5>
                            <div class="col-12 col-sm-8 col-md-9 col-lg-4 mb-3">
                                <input type="text" class="form-control rounded-3" style="background-color: #FFFFFF"
                                    id="placeholder" placeholder="Cari...">
                            </div>
                            <div class="table-responsive rounded-2 mb-4">
                                <table class="table border text-nowrap customize-table mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Nama Siswa</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Nilai</h6>
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
                                                    <h6 class="fw-normal mb-0">7.8</h6>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>