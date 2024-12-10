<div class="card">
    <div class="card-body">
        <h5 class="card-title">Daftar Siswa</h5>
        <form action="" id="search-form">
            <div class="d-flex gap-3 mt-2 mb-3">
                <div class="position-relative">
                    <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff"
                        name="name" value="{{ old('name', request('name')) }}" id="input-search"
                        placeholder="Search">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                        style="color: #8B8B8B"></i>
                </div>
            </div>
        </form>
        <div class="table-responsive rounded-2 mb-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr class="">
                        <th class="fs-4 fw-semibold mb-0">Nama Siswa</th>
                        <th class="fs-4 fw-semibold mb-0">Jenis Kelamin</th>
                        <th class="fs-4 fw-semibold mb-0">NISN</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                </tbody>
            </table>
        </div>
        <nav id="pagination_list_student"></nav>
    </div>
</div>
