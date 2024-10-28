<div class="card mt-3">
    <div class="card-body">
        <h5 class="fw-semibold">Siswa Mengerjakan</h5>
        <div class="d-flex my-3">
            <form action="" class="position-relative">
                <input type="text" class="form-control product-search px-4 ps-5" name="name"
                    value="{{ old('name', request('name')) }}" id="search-name" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                    style="color: #8B8B8B"></i>
            </form>
        </div>
        <div class="table-responsive rounded-2 mb-4 mt-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr class="">
                        <th class="fs-4 fw-semibold mb-0">No</th>
                        <th class="fs-4 fw-semibold mb-0">Nama Siswa</th>
                        <th class="fs-4 fw-semibold mb-0">Tanggal Mengumpulkan</th>
                        <th class="fs-4 fw-semibold mb-0">Nilai</th>
                        <th class="fs-4 fw-semibold mb-0">Aksi</th>
                    </tr>
                </thead>
                <tbody id="collect-content">
                    <tr>
                        <td>1</td>
                        <td>Alfian Ban Dalam</td>
                        <td>10 Januari 2024</td>
                        <td>
                            <span class="badge fs-2 fw-semibold px-4 py-2" style="background-color: #F6EEFE; color:#9425FE;">50</span>
                        </td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('admin.courses.test.index', 1) }}" class="btn text-white" style="background-color: #9425FE">Detail</a>
                            <div>
                                <button class="btn btn-warning px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1M12 4.5v11m3.5-3.5L12 15.5L8.5 12"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Alfian Ban Dalam</td>
                        <td>10 Januari 2024</td>
                        <td>
                            <span class="badge bg-light-danger text-danger fs-2 fw-semibold py-2">Belum Dinilai</span>
                        </td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('admin.courses.test.index', 1) }}" class="btn text-white" style="background-color: #9425FE">Detail</a>
                            <div>
                                <button class="btn btn-warning px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1M12 4.5v11m3.5-3.5L12 15.5L8.5 12"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>