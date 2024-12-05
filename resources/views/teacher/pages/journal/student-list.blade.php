<div class="card border">
    <div class="card-body">
        <h5 class="fw-semibold mb-3"><b>Daftar Kehadiran Siswa</b></h5>
        <div class="table-responsive rounded-2 mb-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">No</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Nama</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Kelas</h6>
                        </th>
                        <th class="text-center">
                            <h6 class="fs-4 fw-semibold mb-0">Kehadiran</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (range(1, 4) as $item)
                        <tr>
                            <td>
                                <p class="mb-0 fw-normal">1</p>
                            </td>
                            <td>
                                <h6 class="fw-normal mb-0">XII RPL 1 - SMKN 1 Kepanjen</h6>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal">10 Januari 2023</p>
                            </td>
                            <td class="text-center">
                                <span class="mb-1 badge font-medium bg-light-success text-success">Hadir</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
